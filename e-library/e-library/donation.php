<!DOCTYPE html>
<html>
  <head>
    <title>Buy Now</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    
    <link rel="stylesheet" href="style/buynow.css" />
	<style>
	.about{
	background:#00000091;
	height:70%;
	width:100%;
	padding:10px 5px 5px 5px;
	border-radius:20px;	
	opacity:95%;
	}
	</style>
  </head>
  <body>
  
      <div class="navbar">
          <div class="logo">
              <img src="images/ck.jpg" alt="Logo">
          </div>
          
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" alt="Logo">
                </div>
                <ul>
                    <li><a href="homepage.html">Home</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contactus.html">Contact Us</a></li>
                    <li><a href="book.php">Books</a></li>
                    <li><a href="#do">Donations</a></li>
                </ul>
            </div>
       
      </div>
	  <br><br>
	  <center>
		<div class="about">
      <img src="./images/slider2.png" alt="about us" width="700" height="500"/>
	  <h1 style="font-size: 40px; color: white;text-align:center;font-size:45px;text-shadow: 1px 1px 2px blue, 0 0 25px black, 0 0 5px blue" class="t2">Donations!</h1>
  </div>
</center>
<center><br>
<table border="2" width="100%">
	  <thead style="background-color:black;color:white;font-size:20px">
		<tr>
		  <th scope="col">Donation_ID</th>
		  <th scope="col">Donater Name</th>
		  <th scope="col">Donation</th>
          <th scope="col">Image</th>
		</tr>
	  </thead>
	  <tbody style="background-color:rgba(240, 234, 227, 0.842);color:black;font-weight:bold;">
		<?php 
		  include"connection.php";
		  
			$query="SELECT * FROM donations ";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result)){
				?>
				<tr>
					  <td><?php echo $row['donationId'] ?></td>
					  <td style="width:10%"><?php echo $row['Donatername'] ?></td>
					  <td style="width:10%"><?php echo $row['Donation'] ?></td>
		              <td style="width:2px;height:2px"><?php echo "<image src='images/".$row['Image']."'>"."<br>"?></td>
                      </td>
				</tr>
				
				<?php
			}
		?>
  </tbody>
</table>
</center>
<br><br>
    <footer>
      <image style="float:left" src="images/logo.png" width="7%">
      <h5 style="color:white"> E-Library <br>16/9 Meta Road,Colombo06</h5>
      
      
      <ul class="footerIcons">
        <li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></li></a>
        <li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></li></a>
        <li><a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></li></a>
      </ul>
      
      <ul class="footerMenu">
        <li class="footerNav"><a href="contactus.html">Contact us</a></li>
        <li class="footerNav"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiJ8fbyt-KBAxXQcmwGHaFPAf8QFnoECDUQAQ&url=https%3A%2F%2Fwww.termsandconditionsgenerator.com%2F&usg=AOvVaw3YjZADO03gWYqar7lf2tvy&opi=89978449">Terms & conditions</a></li>
        <li class="footerNav"><a href="feedback.html">FAQs</a></li>
      </ul>
      </footer>
  </body>
</html>
