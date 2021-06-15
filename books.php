
<?php
@ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kotha</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="CSSAll/bootstrap.min.css" rel="stylesheet">



  <link href="CSSAll/booksCSS.css" rel="stylesheet">

  <!--======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="Homepage.html">Kotha</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <?php
        if  ( (!isset($_SESSION['Mail_ID'] ))&& (!isset($_SESSION['PASSWORD'])) ){
        
          echo'<li><a href="index.html">Home</a></li>';
     
        }
        else
        {
     
          echo ' <li><a href="Homepage.php">Home</a></li>';
        }
        ?>
     
          
          <li class="drop-down active"><a href="books.php">Books</a>
            <ul>
              <li class="drop-down"><a href="#">Text Books</a>
                <ul>
                  <li><a href="">CE</a></li>
                  <li><a href="">CSE</a></li>
                  <li><a href="">ME</a></li>
                  <li><a href="">EECE</a></li>
                  <li><a href="">NSE</a></li>
                  <li><a href="">PME</a></li>
                  <li><a href="">ARCH</a></li>
                
                </ul>
              </li>
              <li><a href="">Magazine</a></li>
              <li><a href="">History Books</a></li>
              
            </ul>
          </li> 
          <?php
        if  ( (isset($_SESSION['Mail_ID'] ))&& (isset($_SESSION['PASSWORD'])) ){
        
          echo'<li><a href="profilePage.php">Account</a></li>';
     
        }
     
        ?>
          
          <li><a href="">Contact</a></li>
          <li><a href="selectCart.php">Cart</a></li>
          

        </ul>
      </nav><!-- nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">


<!-- ======= Booklist Section =======************************ -->

<section class="slider">
  <div class = "container-books" data-aos="fade-up">

    <h1 class = "lg-title">Find Your Books!</h1>

    <h4>Total Books: 240</h4>
    <div class="fetbook">
  
  <ul id="autoWidth" class="cs-hidden">
    <div class = "product-items">


  <!--1------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="1" src="./IMAGES/A programmer's Guide.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>  	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>A programmer's Guide</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>		

  <!--2------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="2" src="./IMAGES/Computer & Network Security.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Computer & Network Security</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
    
  </div>
  
  </div>		

  <!--3------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="3" src="./IMAGES/Data Structure Using C.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>Data Structure Using C</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
  </div>
  
  </div>		

  <!--4------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/Dictionary of Computer Science.png">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Dictionary of Computer Science</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
  </div>
  
  </div>		

  <!--5------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="5" src="./IMAGES/Funding A Revolution.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Funding A Revolution</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  
  </div>
  
  </div>		

  <!--1------------------------------------>	
  
<!--box-slider--------------->
<div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="1" src="./IMAGES/A programmer's Guide.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>A programmer's Guide</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>

  </div>
  
  </div>		

  <!--2------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="2" src="./IMAGES/Computer & Network Security.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Computer & Network Security</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>		

  <!--3------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="3" src="./IMAGES/Data Structure Using C.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
  <h5>Data Structure Using C</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  </div>
  
  </div>		

  <!--4------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="4" src="./IMAGES/Dictionary of Computer Science.png">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Dictionary of Computer Science</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
    
  </div>
  
  </div>		

  <!--5------------------------------------>	
  
<!--box-slider--------------->
  <div class="box">
  <!--img-box---------->
  <div class="slide-img">
  <img alt="5" src="./IMAGES/Funding A Revolution.jpg">
  <!--overlayer---------->
  <div class="overlay">
  <!--buy-btn------>	
  <a href="#" class="buy-btn">Select</a>	
  </div>
  </div>
  <!--detail-box--------->
  <div class="detail-box">
  <!--type-------->
  <div class="type">
    <h5>Funding A Revolution</h5>
  <span>Author</span>
  <div>
    <h6>Available: 6</h6>
  </div>
  </div>
  </div>
  
  </div>
	
  


</div>
</ul>
</div>
</div>
  </section>

    <!-- End Books Section -->
  </main>
  <!-- End #main -->

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Contact</h3>
            <p>
              378 Sugar Camp Road,<br>
              Mirpur Cantonment,<br>
              Dhaka. <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> bookishcloud@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="profilePage.html">Account</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">All the books</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Send us massage</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Wanna get notification about new books?</h4>
            <p>Subscribe to out site..</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>


<?php
ob_flush();
?>

</body>
</html>