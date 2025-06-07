<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blossom Flower Shop</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    #img-carousel {
      background-color: blue;
    }
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color:#D8BFD8;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color:#D8BFD8;
            color:#00ffbf ;
            text-align: center;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .hero-section {
            background-image: url('flower-background.jpg');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: light pink;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .products-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .product {
            width: 300px;
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            border-radius: 5px;
        }
        .product h2 {
            margin-top: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        .tag-cloud {
        display: inline-block;
        color: white;
       padding: 8px 20px;
      font-family: Arial;
      border-radius: 25px;
     background-color: #2196F3;
      margin-top: 8px;}
      .grid-container{
        display:grid;
        grid-template-coloums:auto auto auto auto;
        gap:10px
        background-color:pink;
        padding:10px;
      }
      .grid-container > div{
        background-color:#F0F8FF;
        text-align:center;
        padding :30
      x 0;
        font-size:20px;
      }

  
    </style>
</head>
<body>

<!-- Header -->
<header class="bg-light">
  <div class="container">
    <h1 class="text-center py-4">Blossom Flower Shop</h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="flower2.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<!-- Tag Cloud -->
<body>


<a href="http://localhost/WAD/boquet.php"><span class="tag-cloud">Boquet</span>
<a href="http://localhost/WAD/poojaflower.php"><span class="tag-cloud">pooja flower</span>
<a href="http://localhost/WAD/bridal_flower.php"><span class="tag-cloud">bridal flower</span>
<a href="http://localhost/WAD/rose_petal_garland.php"><span class="tag-cloud">rose garland</span>
<a href="http://localhost/WAD/loose_flower.php"><span class="tag-cloud">loose flower</span>
<a href="http://localhost/WAD/unique_garland.php"><span class="tag-cloud">unique garland</span>
<a href="http://localhost/WAD/gift_flower.php"><span class="tag-cloud">gift flowers</span>
<a href="http://localhost/WAD/birthday_flowers.php"><span class="tag-cloud">Birthday flowers</span>
<a href="http://localhost/WAD/luxury_flowers.php"><span class="tag-cloud">luxury flower</span>
<a href="http://localhost/WAD/best_sellers.php"><span class="tag-cloud">best sellers</span>
<a href="http://localhost/WAD/hampers.php"><span class="tag-cloud">hampers</span>


</body>

<!-- Image Carousel -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Wedding%20banner_Desk.jpg" alt="Wedding Banner" style="width:100%;">
      </div>
      <div class="item">
        <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Earth%20Day_Desk%20V2.jpg" alt="Earth Day Banner" style="width:100%;">
      </div>
      <div class="item">
        <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Anniversary%20banner_Des-164.jpg" alt="Anniversary Banner" style="width:100%;">
      </div>
      <div class="item">
        <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Summerspecial%20productsbannerV3-164.jpg" alt="Summer Special Banner" style="width:100%;">
      </div>
      <div class="item">
        <img src="https://www.fnp.com/assets/images/custom/new-desk-home/hero-banners/Mothers-day_Homepage_Desktop-Banner-Recovered-164.jpg" alt="Mother's Day Banner" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<center>
<h1>welcome to blossomflowershop </h1>

 <h3>we believe in the power of petals to convey emotions, transform spaces, and create cherished memories
 Nestled in the heart of [Location], our passion for flowers goes beyond mere arrangements
  it's about crafting experiences that speak volumes without uttering a word. With a dedication to quality and creativity, each bloom we carefully select tells a story, whether it's celebrating love, comforting during loss, or simply brightening someone's day. Our team of skilled florists pours heart and soul into every bouquet, ensuring that each creation is a masterpiece, tailored to capture the essence of the moment. From weddings to birthdays, anniversaries to corporate events, Blossom Flower Shop is here to help you add that perfect touch of floral magic to life's special occasions.</h3>
        </center>
<br><br>
<marquee>
  <div class="grid-container">
  <div>experience<br>6++</div><br>
  <div> Awards<br>4</div><br>
  <div>function events<br>40+</div><br>
    </div>
    </marquee>

</body>
</html>
