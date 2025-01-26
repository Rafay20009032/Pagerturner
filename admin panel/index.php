<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Page Turner - Admin Panel</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Admin Panel Tailored for Seamless Content Management on Page Turner">
    <meta name="author" content="Muhammad Rafay">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

	<style>
    .table-bordered th, .table-bordered td {
        border: 1px solid #ddd;
        padding: 12px;
    }
    .table-bordered th {
        background-color: #631d04;
        font-size: 14px;
        font-weight: bold;
    }
    .table-bordered td {
        font-size: 13px;
    }
    .app-table-hover tbody tr:hover {
        background-color: #f0f8ff;
        cursor: pointer;
    }
</style>

</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            
		            
		            <div class="app-utilities col-auto">
			            
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/images/user.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="login.html">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.php"><span class="logo-text" style="color: #631d04;"><b>Admin Panel</b></span></a>
	
		        </div><!--//app-branding-->  
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link active" href="index.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Overview</span>
					        </a><!--//nav-link-->
							<a class="nav-link" href="addblog.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Add Blog</span>
					        </a><!--//nav-link-->
							<a class="nav-link" href="addbook.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Add Book</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
	        </div><!--//sidepanel-inner-->
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Overview</h1>
				    </div>
			    </div><!--//row-->
			   
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="users-tab" data-bs-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="true">Users</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="books-tab" data-bs-toggle="tab" href="#books" role="tab" aria-controls="books" aria-selected="false">Books</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="blogs-tab" data-bs-toggle="tab" href="#blogs" role="tab" aria-controls="blogs" aria-selected="false">Blogs</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="testimonials-tab" data-bs-toggle="tab" href="#testimonials" role="tab" aria-controls="testimonials" aria-selected="false">Testimonials</a>
					<a class="flex-sm-fill text-sm-center nav-link" id="contactsupport-tab" data-bs-toggle="tab" href="#contactsupport" role="tab" aria-controls="contactsupport" aria-selected="false">Contact Support</a>
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        
			        <?php
						// Database connection
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "page_turner_db";

						$conn = new mysqli($servername, $username, $password, $dbname);

						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						// Fetch users from the database
						$users_sql = "SELECT * FROM Users";
						$users_result = $conn->query($users_sql);

						// Fetch books from the database
						$books_sql = "SELECT * FROM Books";
						$books_result = $conn->query($books_sql);

						// Fetch blogs from the database
						$blogs_sql = "SELECT * FROM Blogs";
						$blogs_result = $conn->query($blogs_sql);

						// Fetch blogs from the database
						$contact_sql = "SELECT * FROM ContactSupports";
						$contact_result = $conn->query($contact_sql);

						?>

						<div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
							<div class="app-card app-card-orders-table shadow-sm mb-5">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-left table-bordered">
											<thead>
												<tr>
													<th style="color: white" class="cell">Name</th>
													<th style="color: white" class="cell">Email</th>
													<th style="color: white" class="cell">Image</th>
												</tr>
											</thead>
											<tbody>
												<?php
												if ($users_result->num_rows > 0) {
													while ($row = $users_result->fetch_assoc()) {
														$user_name = $row['Name'];
														$user_email = $row['Email'];
														$user_image = base64_encode($row['Image']);
														echo "<tr>
																<td class='cell'>$user_name</td>
																<td class='cell'><span class='truncate'>$user_email</span></td>
																<td class='cell'><img src='data:image/jpeg;base64,$user_image'width='50'></td>
															</tr>";
													}
												} else {
													echo "<tr><td colspan='5' class='cell'>No users found</td></tr>";
												}
												?>
											</tbody>
										</table>
									</div><!--//table-responsive-->
								
								</div><!--//app-card-body-->		
							</div><!--//app-card-->
							
						</div><!--//tab-pane-->

						<div class="tab-pane fade" id="books" role="tabpanel" aria-labelledby="books-tab">
							<div class="app-card app-card-orders-table mb-5">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-left table-bordered">
											<thead>
												<tr>
													<th style="color: white" class="cell">Name</th>
													<th style="color: white" class="cell">Image</th>
													<th style="color: white" class="cell">Description</th>
													<th style="color: white" class="cell">Book PDF</th>
												</tr>
											</thead>
											<tbody>
												<?php
												if ($books_result->num_rows > 0) {
													while ($row = $books_result->fetch_assoc()) {
														$book_name = $row['Name'];
														$book_image = base64_encode($row['Image']); // Assuming this is a URL or path
														$book_description = $row['Description'];
														$book_pdf = $row['BookPDF']; // Assuming this is a URL or path
														echo "<tr>
																<td class='cell'>$book_name</td>
																<td class='cell'><img src='data:image/jpeg;base64,$book_image' alt='$book_name' width='50'></td>
																<td class='cell'>$book_description</td>
																<td class='cell'><a href='books/$book_pdf' target='_blank'>Download PDF</a></td>
															</tr>";
													}
												} else {
													echo "<tr><td colspan='5' class='cell'>No books found</td></tr>";
												}
												?>
											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->        
							</div><!--//app-card-->
						</div><!--//tab-pane-->

						<div class="tab-pane fade" id="blogs" role="tabpanel" aria-labelledby="blogs-tab">
							<div class="app-card app-card-orders-table mb-5">
								<div class="app-card-body">
									<div class="table-responsive">
									<table class="table app-table-hover mb-0 text-left table-bordered">
										<thead>
											<tr>
												<th style="color: white" class="cell">Name</th>
												<th style="color: white" class="cell">Image</th>
												<th style="color: white" class="cell">Date</th>
												<th style="color: white" class="cell">Blog</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if ($blogs_result->num_rows > 0) {
												while ($row = $blogs_result->fetch_assoc()) {
													$blog_name = $row['Name'];
													$blog_image = base64_encode($row['Image']); // Assuming this is a BLOB or Base64 data
													$blog_date = $row['Date'];
													$blog_content = $row['Blog'];
													echo "<tr>
															<td class='cell' style='font-weight: bold;'>$blog_name</td>
															<td class='cell' style='text-align: center;'>
																<img src='data:image/jpeg;base64,$blog_image' alt='$blog_name' width='80' style='border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);'>
															</td>
															<td class='cell'>$blog_date</td>
															<td class='cell' style='max-width: 300px; word-wrap: break-word;'>$blog_content</td>
														</tr>";
												}
											} else {
												echo "<tr><td colspan='4' class='cell' style='text-align: center;'>No blogs found</td></tr>";
											}
											?>
										</tbody>
									</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->        
							</div><!--//app-card-->
						</div><!--//tab-pane-->

						<div class="tab-pane fade" id="testimonials" role="tabpanel" aria-labelledby="testimonials-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
									<table class="table app-table-hover mb-0 text-left table-bordered">
										<thead>
											<tr>
												<th style="color: white" class="cell">User</th>
												<th style="color: white" class="cell">Comments</th>
												<th style="color: white" class="cell">Image</th>
											</tr>
										</thead>
										<tbody>
										<?php
											// Query to fetch testimonials along with user details
											$query = "
												SELECT t.Comments, u.Name, u.Image 
												FROM Testimonials t
												INNER JOIN Users u ON t.UserID = u.ID
											";

											$result = $conn->query($query);

											if ($result && $result->num_rows > 0) {
												// Iterate through each testimonial and display it
												while ($row = $result->fetch_assoc()) {
													$user_name = htmlspecialchars($row['Name']);
													$comments = htmlspecialchars($row['Comments']);
													$user_image = !empty($row['Image']) ? base64_encode($row['Image']) : ''; // Assuming binary data for Image

													echo "<tr>
															<td class='cell'>$user_name</td>
															<td class='cell'>$comments</td>
															<td class='cell'>";
													if (!empty($user_image)) {
														echo "<img src='data:image/jpeg;base64,$user_image' width='50'>";
													} else {
														echo "No Image";
													}
													echo "</td>
														</tr>";
												}
											} else {
												// No testimonials found
												echo "<tr><td colspan='3' class='cell'>No testimonials found</td></tr>";
											}
											?>
											</tbody>

											</tbody>
									</table>
									
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        	</div><!--//tab-pane-->
				
					<div class="tab-pane fade" id="contactsupport" role="tabpanel" aria-labelledby="contactsupport-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								    <table class="table app-table-hover mb-0 text-left table-bordered">
										<thead>
											<tr>
												<th style="color: white" class="cell">Name</th>
												<th style="color: white" class="cell">Email</th>
												<th style="color: white" class="cell">Phone Number</th>
												<th style="color: white" class="cell">Subject</th>
												<th style="color: white" class="cell">Message</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if ($contact_result->num_rows > 0) {
												while ($row = $contact_result->fetch_assoc()) {
													$contact_name = $row['FirstName']." ".$row['LastName'];
													$contact_email = $row['Email'];
													$contact_phone = $row['PhoneNumber'];
													$contact_subject = $row['Subject']; 
													$contact_message = $row['Message']; 
													echo "<tr>
															<td class='cell'>$contact_name</td>
															<td class='cell'>$contact_email</td>
															<td class='cell'>$contact_phone</td>
															<td class='cell'>$contact_subject</td>
															<td class='cell'>$contact_message</td>
														</tr>";
												}
											} else {
												echo "<tr><td colspan='5' class='cell'>No Contact Supports found</td></tr>";
											}
											?>
										</tbody>
									</table>
									
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
						<?php
						$conn->close();
						?>

			        
					
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

