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

// Handle form submissions based on `form_action`
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_action'])) {
    $action = $_POST['form_action'];

    switch ($action) {
        case 'add_blog':
            addBlog($conn);
            break;

        case 'add_book':
            addBook($conn);
            break;

        default:
            echo "Invalid action.";
    }
}

// Function to add a blog
function addBlog($conn) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $blog = $_POST['blog'];

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        die("Error uploading image.");
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO Blogs (Name, Image, Date, Blog) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $image, $date, $blog);

    if ($stmt->execute()) {
        echo '<script type="text/javascript">
            alert("Blog added successfully!");
            window.location.href = "index.php";
        </script>';
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Function to add a book
function addBook($conn) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        die("Error uploading image.");
    }

    // Handle PDF upload
    if (isset($_FILES['book_pdf']) && $_FILES['book_pdf']['error'] === UPLOAD_ERR_OK) {
        // Get the file info
        $pdf_tmp_name = $_FILES['book_pdf']['tmp_name'];
        $pdf_name = $_FILES['book_pdf']['name'];

        // Ensure the "books" folder exists
        $books_dir = __DIR__ . '/books/';
        if (!file_exists($books_dir)) {
            mkdir($books_dir, 0777, true); // Create directory if not exists
        }

        // Define the full path for the uploaded PDF
        $pdf_target_path = $books_dir . basename($pdf_name);

        // Move the uploaded PDF to the "books" folder
        if (!move_uploaded_file($pdf_tmp_name, $pdf_target_path)) {
            die("Error uploading book PDF.");
        }

        // Store the PDF filename in the database
        $book_pdf = $pdf_name;
    } else {
        die("Error uploading book PDF.");
    }

    // Insert into database with PDF filename (not binary content)
    $stmt = $conn->prepare("INSERT INTO Books (Name, Image, Description, BookPDF) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $image, $description, $book_pdf);

    if ($stmt->execute()) {
        echo '<script type="text/javascript">
            alert("Book added successfully!");
            window.location.href = "index.php";
        </script>';
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


$conn->close();
?>
