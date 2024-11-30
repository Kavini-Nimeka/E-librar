<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation</title>
  <link rel="stylesheet" type="text/css" href="style/addbook.css">
  <script src="addbook.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>

          

<!-- edit/delete donation section -->

<div class="editbook">
  <div class="etit">
    <h1>Edit Donation/Delete Donation</h1>
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

  $sql = "SELECT * FROM donations";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $bookId = $row['donationId'];
      $bookName = $row['Donatername'];
      $author = $row['Donation'];
      $content = $row['Image'];

      echo '<div class="book-details">';
      echo '<h2>Donation Details</h2>';
      echo '<form action="updateDonation.php" method="post">';
      echo '<input type="hidden" name="bookId" value="' . $bookId . '">';

      echo '<div class="form-group">';
      echo '<label for="bookName">Donater Name:</label>';
      echo '<input type="text" id="bookName" name="bookName" value="' . $bookName . '" required>';
      echo '</div>';

      echo '<div class="form-group">';
      echo '<label for="author">Donation:</label>';
      echo '<textarea id="author" name="author" rows="4" required>' . $author . '</textarea>';
      echo '</div>';


      echo'<form action="Donationadd.php" method="post">';
	  echo '<input type="submit" name="editBook" value="Update">';
      echo '</form>';

      echo '<form action="deleteDonation.php" method="post">';
      echo '<input type="hidden" name="bookId" value="' . $bookId . '">';
      echo '<input type="submit" name="deleteBook" value="Delete">';
      echo '</form>';

      echo '</div>';
    }
  } else {
    echo '<div class="book-details">';
    echo '<p>No donations found.</p>';
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