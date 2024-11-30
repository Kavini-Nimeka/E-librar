<!--Book page-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
    <link rel="stylesheet" type="text/css" href="style/book.css">
    <script src="book.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="#recipes">Books</a></li>
                <li><a href="donation.php">Donations</a></li>
            </ul>
        </div>
    </header>

    <section class="all-content">

         <!--side bar-->

    <div class="side-cat">
        <ul class="cat-list">
            <li class="list-item">
                <a onclick="scrollToSection('popular-recipes')">
                    <div class="it-cont">
                        <div class="it-title">
                        <span>POPULAR BOOKS</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <a onclick="scrollToSection('quick-recipes')">
                    <div class="it-cont">
                        <div class="it-title">
                        <span>NOVELS</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <a onclick="scrollToSection('seasonal-recipes')">
                    <div class="it-cont">
                        <div class="it-title">
                        <span>ENGLISH MAGAZINES</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <a onclick="scrollToSection('non-veg-recipes')">
                    <div class="it-cont">
                        <div class="it-title">
                        <span>SINHALA MAGAZINES</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="list-item">
                <a onclick="scrollToSection('veg-recipes')">
                    <div class="it-cont">
                        <div class="it-title">
                        <span>SCIENCE BOOKS</span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>


 <!-- Image slider -->

<div class="slideshow-container">
    <!-- Slide counter -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/slider1.png" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/slider2.png" style="width:100%; height:100%;">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/slider3.jpg" style="width:100%">
    </div>

    <!-- Next and previous buttons -->
    <a id="prev" onclick="plusSlides(-1)" class="prev">&#10094;</a>
    <a id="next" onclick="plusSlides(1)" class="next">&#10095;</a>

    <!-- The dots/circles -->
    <div class="beacons" style="text-align:center">
        <span id="d-one" class="dot" onclick="currentSlide(1)"></span>
        <span id="d-two" class="dot" onclick="currentSlide(2)"></span>
        <span id="d-three" class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>

  <!--image slider end-->



    <div class="content">

        <div class="section" id="popular-books">
            <h2 class="cat">Popular Books</h2>
            <div class="image-row">
                <div class="image-container">
                  <img src="images/book1.jpg" alt="Image 1">
                  <div class="image-text">Book X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Book Details :</h4>
                    <div class="book-content">
                      <p>Book author: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx,</p>
                      <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                    </div>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/book2.jpg" alt="Image 1">
                  <div class="image-text">Book X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Book Details</h4>
                    <p>Book author: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx,</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/book3.jpg" alt="Image 1">
                  <div class="image-text">Book X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Book Details</h4>
                    <p>Book author: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx,</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
            </div>
            
        </div>
          
        <div class="section" id="quick-recipes">
            <h2 class="cat">Novels</h2>
            <div class="image-row">
                <div class="image-container">
                  <img src="images/novel1.jpg" alt="Image 1">
                  <div class="image-text">Novel X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Novel Details :</h4>
                    <div class="recipe-content">
                      <p>Novel author: xxxxxx, xxxxxxxxxxx,</p>
                      <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                    </div>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/novel2.jpg" alt="Image 1">
                  <div class="image-text">Novel X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Novel Details</h4>
                    <p>Novel author: xxxxxx, xxxxxxxxxxx,</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/novel3.jpg" alt="Image 1">
                  <div class="image-text">Novel X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Novel Details</h4>
                    <p>Novel author: xxxxxx, xxxxxxxxxxx,</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="section" id="seasonal-recipes">
            <h2 class="cat">English magazines</h2>
            <div class="image-row">
                <div class="image-container">
                  <img src="images/em1.jpg" alt="Image 1">
                  <div class="image-text">English magazine X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Magazine Details :</h4>
                    <div class="recipe-content">
                      <p>Publishers: xxxxxx, xxxxxxxxxxx</p>
                      <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                    </div>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/em2.jpg" alt="Image 1">
                  <div class="image-text">Magazine X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Magazine Details</h4>
                    <p>Publishers: xxxxxx, xxxxxxxxxxx</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/em3.jpg" alt="Image 1">
                  <div class="image-text">Magazine X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Magazine Details</h4>
                    <p>Publishers: xxxxxx, xxxxxxxxxxx</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="section" id="non-veg-recipes">
            <h2 class="cat">Sinhala magazines</h2>
            <div class="image-row">
                <div class="image-container">
                  <img src="images/sm1.jpg" alt="Image 1">
                  <div class="image-text">Sinhala magazine X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Magazine Details :</h4>
                    <div class="recipe-content">
                      <p>Publishers: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx.</p>
                      <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                    </div>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/sm2.jpg" alt="Image 1">
                  <div class="image-text">Sinhala magazine X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Magazine Details</h4>
                    <p>Publishers: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx.</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/sm3.jpg" alt="Image 1">
                  <div class="image-text">Sinhala magazine X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Magazine Details</h4>
                    <p>Publishers: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx.</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
            </div>
        </div>

        <div class="section" id="veg-recipes">
            <h2 class="cat">Science books</h2>
            <div class="image-row">
                <div class="image-container">
                  <img src="images/science1.jpg" alt="Image 1">
                  <div class="image-text">Science book X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Book Details :</h4>
                    <div class="recipe-content">
                      <p>Book author: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx.</p>
                      <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                    </div>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/science2.jpg" alt="Image 1">
                  <div class="image-text">Science book X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Book Details</h4>
                    <p>Book author: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx.</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
                
                <div class="image-container">
                  <img src="images/science3.jpg" alt="Image 1">
                  <div class="image-text">Science book X</div>
                  <button class="quick-view-btn">View</button>
                  <div class="product-preview-popup">
                    <h4>Book Details</h4>
                    <p>Book author: xxxxxx, xxxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx, xxxxxxxxxx.</p>
                    <p>Contents: yyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyyyyyyyyyyy. yyyyyyyyyyyy.yyyyyyyyyyyyyyyyyyy.</p>
                  </div>
                </div>
            </div>
    </div>
    </section>
	<div class="section" id="non-veg-recipes" style="margin-left:4%">
     <h2 class="cat" style="text-align:center">More Books</h2>
	 </div>
	<br><div style="margin-left:15%">
	<center><br>
	<table border="2" width="100%">
	  <thead style="background-color:black;color:white;font-size:20px">
		<tr>
		  <th scope="col">Book ID</th>
		  <th scope="col">Book Name</th>
		  <th scope="col">Author</th>
		  <th scope="col">Content</th>
          <th scope="col">Image</th>
		</tr>
	  </thead>
	  <tbody style="background-color:rgba(240, 234, 227, 0.842);color:black;font-weight:bold;">
		<?php 
		  include"connection.php";
		  
			$query="SELECT * FROM books ";
			$result=mysqli_query($conn,$query);
			while($row=mysqli_fetch_assoc($result)){
				?>
				<tr>
					  <td><?php echo $row['bookId'] ?></td>
					  <td><?php echo $row['bookName'] ?></td>
					  <td><?php echo $row['Author'] ?></td>
					  <td><?php echo $row['Content'] ?></td>
		              <td style="width:2px;height:2px"><?php echo "<image src='images/".$row['Image']."'>"."<br>"?></td>
                      </td>
				</tr>
				
				<?php
			}
		?>
  </tbody>
</table>
</center>
</div>
<br><br><br>
<footer>
<image style="float:left;margin-left:3%" src="images/logo.png" width="7%">
<h5 style="color:white"> E-Library <br>16/9 Meta Road,Colombo06</h5>


<ul class="footerIcons">
	<li><a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></li></a>
	<li><a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></li></a>
	<li><a href="https://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></li></a>
</ul>

<ul class="footerMenu">
	<li class="footerNav"><a href="contactus.html">Contact us</a></li>
	<li class="footerNav"><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiJ8fbyt-KBAxXQcmwGHaFPAf8QFnoECDUQAQ&url=https%3A%2F%2Fwww.termsandconditionsgenerator.com%2F&usg=AOvVaw3YjZADO03gWYqar7lf2tvy&opi=89978449">Terms & conditions</a></li>
	<li class="footerNav"><a href="feedback.html">Feedback</a></li>
</ul>
</footer>

</body>
</html>


