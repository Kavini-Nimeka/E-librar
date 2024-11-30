<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$bookName = $_POST['bookName'];
$author = $_POST['author'];
$content = $_POST['content'];

// Upload image
$targetDir = "uploads";  // Image save path
$imageName = basename($_FILES["bookImage"]["name"]);
$targetFile = $targetDir . $imageName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

$query = "INSERT INTO books (bookName, Author, Content, Image) VALUES ('$bookName', '$author', '$content', '$imageName')";

if (mysqli_query($conn, $query)) {
    echo "Book added successfully.";
	header("location:Bookadd.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>



