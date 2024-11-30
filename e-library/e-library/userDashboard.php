<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: logIn.php'); // Redirect to the login page or any other page
    exit;
}
// Retrieve user data from the database

require_once 'connection.php';

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM all_users WHERE id='$user_id'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
}

// Handle form submission

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];

    // Sanitize inputs (You can use additional validation if needed)

    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $mobile = mysqli_real_escape_string($conn, $mobile);

    // Update the user's details in the database

    $query = "UPDATE all_users SET User_Name='$name', Email='$email', Mobile_Number='$mobile', DOB='$dob' WHERE ID='$user_id'";
    $result = mysqli_query($conn, $query);

    if ($result) 
    {
        $user['User_Name'] = $name;
        $user['Email'] = $email;
        $user['Mobile'] = $mobile;
	    $user['DOB'] = $dob;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/userDashstyle.css">
<style>
body{
  background-image:url("style/background.jpg");
	background-size:cover;
	background-repeat:no-repeat;
	background-attachment:fixed;
	opacity:190%;
}
</style>
    
</head>
<body>
    <div id="background">
    <div class="container">
        
        <h2>Welcome, <?php echo $user['User_Name']; ?>!</h2>
        <p>Email: <?php echo $user['Email']; ?></p>
        <hr>
        <h3>User Details</h3>
        <p><strong>Name:</strong> <?php echo $user['User_Name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['Email']; ?></p>
        <p><strong>Mobile:</strong> <?php echo $user['Mobile_Number']; ?></p>
        <p><strong>Birthday:</strong> <?php echo $user['DOB']; ?></p>
		<button style="background-color:blue;border-radius:4px"><a style="text-decoration:none; color:white "href="homepage.html">To Homepage</a></button> 
        <hr>
        <h3>Update User Details</h3>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" value="<?php echo $user['User_Name']; ?>" required><br>
            <input type="text" name="email" placeholder="Email" value="<?php echo $user['Email']; ?>" required><br>
            <input type="text" name="mobile" placeholder="Mobile" value="<?php echo $user['Mobile_Number']; ?>" required><br>
	    Birthday : <input type="date" name="dob" placeholder="Birthday" value="<?php echo $user['DOB']; ?>" required><br>
<br>
            <input type="submit" value="Update">
        </form>
        <hr>
        <a href="logOut.php">Logout</a>
        <br><br>
     
	   

    </div>
		   <h1 style="margin-left:10%;font-style:italic;text-decoration:underline">Feedback</h1>
<button style="background-color:#0000CD;width:6%;height:4%;float:right;font-weight:bold;text-decoration-line:none;font-size:15px;color:black;border-radius:5px;margin-right:145px"><a href="adminPage.php">>>Back</a></button><br><br>
<center>
<table border="2" width="80%">
	  <thead style="background-color:black;color:white;font-size:20px">
		<tr>
		  <th scope="col">FID</th>
		  <th scope="col">Name</th>
		  <th scope="col">Email</th>
		  <th scope="col">Mobile Number</th>
		  <th scope="col">Text</th>
		  <th scope="col">Action</th>
		</tr>
	  </thead>
	  <tbody>
		<?php 
		$email = $_SESSION['email'];
			$query="SELECT * FROM feedback WHERE Email='$email'";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result)){
				?>
				<tr style="background-color:white;font-size:20px;text-align:center">
					  <td><?php echo $row['FID'] ?></td>
					  <td><?php echo $row['Name'] ?></td>
					  <td><?php echo $row['Email'] ?></td>
					  <td><?php echo $row['Phone_number'] ?></td>
					  <td><?php echo $row['Text'] ?></td>
					   <td><button style="background-color:red;width:70%;height:30%;font-size:15px;font-weight:bold"><a href="deleteFeedback.php?fid=<?php echo $row['FID'] ?>">Delete</a></button></td>
				</tr>
				
				<?php
			}
		?>
  </tbody>
</table>
</center>
    </div>
</body>
</html>
