<?php
if (isset($_POST['editBook'])) {
  $bookId = $_POST['bookId'];
  $bookName = $_POST['bookName'];
  $author = $_POST['author'];
  $content = $_POST['content'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "library";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE donations SET Donatername='$bookName', Donation='$author' WHERE donationId='$bookId'";

  if ($conn->query($sql) === TRUE) {
    echo "book updated successfully";
	header("location:Donationadd.php");
  } else {
    echo "Error updating book: " . $conn->error;
  }

  $conn->close();
}
?>