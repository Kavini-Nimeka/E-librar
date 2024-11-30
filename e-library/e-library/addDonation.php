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

// Upload image
$targetDir = "uploads";  // Image save path
$imageName = basename($_FILES["bookImage"]["name"]);
$targetFile = $targetDir . $imageName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

$query = "INSERT INTO donations (Donatername, Donation, Image) VALUES ('$bookName', '$author', '$imageName')";

if (mysqli_query($conn, $query)) {
    echo "Donation added successfully.";
	header("location:Donationadd.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
