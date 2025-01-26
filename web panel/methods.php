<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "page_turner_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['form_action'];

    if ($action === 'signup') {
        handleSignup($conn);
    } elseif ($action === 'login') {
        handleLogin($conn);
    } elseif ($action === 'contact_form') {
        handleContactForm($conn);
    } elseif ($action === 'testimonial_form') {
        handleTestimonialForm($conn);
    } else {
        echo '<script>alert("Invalid form action!"); window.history.back();</script>';
    }
}

/**
 * Handles user signup functionality
 * @param mysqli $conn
 */
function handleSignup($conn) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Hash the password for secure storage
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Handle image upload
    $image = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    }

    // Insert into Users table
    $stmt = $conn->prepare("INSERT INTO Users (Name, Email, Password, Image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $hashedPassword, $image);

    if ($stmt->execute()) {
        echo '<script>alert("Signup successful! Please login."); window.location.href = "login.html";</script>';
    } else {
        if ($stmt->errno === 1062) {
            echo '<script>alert("Email already exists! Please use a different email."); window.history.back();</script>';
        } else {
            echo '<script>alert("Error: ' . $stmt->error . '"); window.history.back();</script>';
        }
    }

    $stmt->close();
}

/**
 * Handles user login functionality
 * @param mysqli $conn
 */
function handleLogin($conn) {
    $email = trim($_POST['signin-email']);
    $password = trim($_POST['signin-password']);

    // Fetch user data by email
    $stmt = $conn->prepare("SELECT ID, Name, Password FROM Users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $name, $hashedPassword);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Start a session and redirect to a dashboard (or homepage)
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $name;

            echo '<script>alert("Login successful!"); window.location.href = "index.php";</script>';
        } else {
            echo '<script>alert("Invalid password! Please try again."); window.history.back();</script>';
        }
    } else {
        echo '<script>alert("Email not found! Please sign up."); window.history.back();</script>';
    }

    $stmt->close();
}

function handleContactForm($conn) {
    // Retrieve form data
    $firstName = trim($_POST['firstname']);
    $lastName = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $phoneNumber = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Validate required fields
    if (empty($firstName) || empty($email) || empty($message)) {
        echo '<script>alert("Please fill in all required fields!"); window.history.back();</script>';
        return;
    }

    // Prepare the SQL query
    $stmt = $conn->prepare("INSERT INTO ContactSupports (FirstName, LastName, Email, PhoneNumber, Subject, Message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $phoneNumber, $subject, $message);

    // Execute and check for errors
    if ($stmt->execute()) {
        echo '<script>alert("Your message has been submitted successfully!"); window.location.href = "Include/contact.php";</script>';
    } else {
        echo '<script>alert("There was an error submitting your message. Please try again later."); window.history.back();</script>';
    }

    $stmt->close();
}

function handleTestimonialForm($conn) {
    // Start the session to access user data
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("You must be logged in to submit a testimonial."); window.location.href = "login.html";</script>';
        return;
    }

    // Get the UserID from the session
    $userId = $_SESSION['user_id'];

    // Retrieve the comment from the form
    $comments = trim($_POST['message']);

    // Validate input
    if (empty($comments)) {
        echo '<script>alert("Comments field is required."); window.history.back();</script>';
        return;
    }

    // Insert the testimonial into the Testimonials table
    $stmt = $conn->prepare("INSERT INTO Testimonials (UserID, Comments) VALUES (?, ?)");
    $stmt->bind_param("is", $userId, $comments);

    if ($stmt->execute()) {
        echo '<script>alert("Thank you for submitting your testimonial!"); window.location.href = "Include/contact.php";</script>';
    } else {
        echo '<script>alert("An error occurred while submitting your testimonial. Please try again."); window.history.back();</script>';
    }

    $stmt->close();
}

// Close database connection
$conn->close();
?>
