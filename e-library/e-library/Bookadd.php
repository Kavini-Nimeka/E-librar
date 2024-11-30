<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Recipe</title>
  <link rel="stylesheet" type="text/css" href="style/addbook.css">
  <script src="addbook.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

  <!-- top navigation bar -->

<header>
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="book.php">Books</a></li>
                <li><a href="donation.php">Donations</a></li>
            </ul>
        </div>
    </header>

    <!-- add recipe form -->

  <div class="rtit">
    <h1>Add Books</h1>
  </div>

  <div class="addbook">
    <form action="addBook.php" method="post" enctype="multipart/form-data">
      <label for="bookName">Book Name:</label>
      <br>
      <input type="text" id="bookName" name="bookName" required>
      <br><br>

      <label for="author">Author:</label>
      <br>
      <textarea id="author" name="author" rows="4" required></textarea>
      <br><br>

      <label for="content">Contents:</label>
      <br>
      <textarea id="content" name="content" rows="4" required></textarea>
      <br><br>

      <label for="bookImage">Image:</label>
      <br>
      <input type="file" id="bookImage" name="bookImage">
      <br><br>

      <input type="submit" value="Add Book">
    </form>
  </div>

<!-- edit/delete recipe section -->

<div class="editbook">
  <div class="etit">
    <h1>Edit Book/Delete Book</h1>
  </div>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM books";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $bookId = $row['bookId'];
      $bookName = $row['bookName'];
      $author = $row['Author'];
      $content = $row['Content'];

      echo '<div class="book-details">';
      echo '<h2>Book Details</h2>';
      echo '<form action="updatebook.php" method="post">';
      echo '<input type="hidden" name="bookId" value="' . $bookId . '">';

      echo '<div class="form-group">';
      echo '<label for="bookName">Book Name:</label>';
      echo '<input type="text" id="bookName" name="bookName" value="' . $bookName . '" required>';
      echo '</div>';

      echo '<div class="form-group">';
      echo '<label for="author">Author:</label>';
      echo '<textarea id="author" name="author" rows="4" required>' . $author . '</textarea>';
      echo '</div>';

      echo '<div class="form-group">';
      echo '<label for="content">Content:</label>';
      echo '<textarea id="content" name="content" rows="4" required>' . $content . '</textarea>';
      echo '</div>';

      echo'<form action="Bookadd.php" method="post">';
	  echo '<input type="submit" name="editBook" value="Update">';
      echo '</form>';

      echo '<form action="deletebook.php" method="post">';
      echo '<input type="hidden" name="bookId" value="' . $bookId . '">';
      echo '<input type="submit" name="deleteBook" value="Delete">';
      echo '</form>';

      echo '</div>';
    }
  } else {
    echo '<div class="book-details">';
    echo '<p>No books found.</p>';
    echo '</div>';
  }

  $conn->close();
  ?>
</div>
<br><br><br>
  <footer>
  <image style="float:left" src="images/logo.png" width="7%">
<h5 style="color:white; margin-left: 40px;" >E-Library <br>16/9 Meta Road,Colombo06</h5>


<ul class="footerIcons">
	<li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></li></a>
	<li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></li></a>
	<li><a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></li></a>
</ul>

<ul class="footerMenu">
	<li class="footerNav"><a href="contactus.html">Contact us</a></li>
	<li class="footerNav"><a href="terms & conditions">Terms & conditions</a></li>
	<li class="footerNav"><a href="feedback.html">Feedback</a></li>
</ul>
</footer> 
</body>
</html>
