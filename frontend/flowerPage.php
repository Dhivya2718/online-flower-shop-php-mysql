<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flower Shop</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color:#FF69B4;
            background-size:cover; 
            margin-top: 8px;  
        }
        .flower-image {
            max-width: 100%;
            height: auto;

        }
    </style>
</head>
<header>
<div class="container">
        <!-- Search Bar -->
        <input type="text" id="searchInput" placeholder="Search flowers...">
        <button id="searchButton" class="btn btn-primary">Search</button>
    </div>
    </header>
    
<body>

<!-- Header -->
<button class="btn btn-primary mt-4" onclick="window.location.href='customer_details_form.php'">Submit Customer Details</button>
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
                    <a class="nav-link" href="#products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<style>
.tag-cloud {
  display: inline-block;
  color: white;
  padding: 8px 20px;
  font-family: Arial;
  border-radius: 25px;
  background-color: #2196F3;
  margin-top: 8px;
}
</style>
<body>

<h1>GIFT FLOWERS</h1>



<a href="http://localhost/WAD/boquet.php"><span class="tag-cloud">Boquet</span></a>
<a href="http://localhost/WAD/poojaflower.php"><span class="tag-cloud">pooja flower</span>
<a href="http://localhost/WAD/bridal_flower.php"><span class="tag-cloud">bridal flower</span>
<a href="http://localhost/WAD/rose_petal_garland.php"><span class="tag-cloud">rose garland</span>
<a href="http://localhost/WAD/loose_flower.php"><span class="tag-cloud">loose flower</span>
<a href="http://localhost/WAD/unique_garland.php"><span class="tag-cloud">unique garland</span>
<a href="http://localhost/WAD/gift_flower.php"><span class="tag-cloud">gift flowers</span>
<a href="http://localhost/WAD/birthday_flowers.php"><span class="tag-cloud">Birthday flowers</span>
<a href="http://localhost/WAD/luxury_flower.php"><span class="tag-cloud">luxury flower</span>
<a href="http://localhost/WAD/best_sellers.php"><span class="tag-cloud">best sellers</span>
<a href="http://localhost/WAD/hampers.php"><span class="tag-cloud">hampers</span>
</body>


<!-- Main Content -->
<main class="container mt-5">
    
    <section id="products" class="mt-5">
        <h2>Featured Products</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="https://imgcdn.floweraura.com/ice-blue-rose-box-9905630fl-A.jpg?tr=w-264,dpr-1.5,q-70" alt="Flower Arrangement 1" class="img-fluid flower-image">
                <h4>Enchanted Blue Box</h4>
                <p>Rs:800</p>
                <a href="order_form.php">Add to Cart</a>
            </div>
            <div class="col-md-4">
                <img src="https://imgcdn.floweraura.com/passion-and-grace-roses-9792050fl-A_0.jpg?tr=w-264,dpr-1.5,q-70" alt="Flower Arrangement 2" class="img-fluid flower-image">
                <h4>Passion And Grace 35 Roses</h4>
                <p>Rs:500</p>
                <a href="order_form.php">Add to Cart</a>
            </div>
            <div class="col-md-4">
                <img src="https://imgcdn.floweraura.com/whispers-of-a-blooming-heart-9786060fl-A.jpg?tr=w-264,dpr-1.5,q-70" alt="Flower Arrangement 3" class="img-fluid flower-image">
                <h4>Whispers of a Blooming Heart</h4>
                <p>Rs:700</p>
                <a href="order_form.php">Add to Cart</a>
            </div>    
            <div class="col-md-4">
                <img src="https://imgcdn.floweraura.com/red-n-pink-rose-arrangement-b_0.jpg?tr=w-264,dpr-1.5,q-70" alt="Flower Arrangement 4" class="img-fluid flower-image">
                <h4>Radiant Love Treasure</h4>
                <p>Rs:900</p>
                <a href="order_form.php">Add to Cart</a>
            </div>
            <div class="col-md-4">
                <img src="https://imgcdn.floweraura.com/everlasting-love-natural-preserved-rose-9785880fl-A_1.jpg?tr=w-264,dpr-1.5,q-70" alt="Flower Arrangement 5" class="img-fluid flower-image">
                <h4>Forever Real Love Preserved Rose-Lasts More Than A Year</h4>
                <p>Rs:750</p>
                <a href="order_form.php">Add to Cart</a>
            </div> 
            <div class="col-md-4">
                <img src="https://imgcdn.floweraura.com/serenade-of-roses-9791410fl-A.jpg?tr=w-264,dpr-1.5,q-70" alt="Flower Arrangement 5" class="img-fluid flower-image">
                <h4>Serenade Of Roses</h4>
                <p>Rs:850</p>
                <a href="order_form.php">Add to Cart</a>
            </div> 
        </div>
    </section>
</main>


<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</script>
<script>

    $(document).ready(function() {
        $(".add-to-cart").click(function() {
            var name = $(this).data("name");
            var price = $(this).data("price");
            alert("Added " + name + " to cart. Price: $" + price);
        });
    });
</script>
<script>
    // JavaScript for search functionality
    $(document).ready(function() {
        // Function to handle search button click
        $("#searchButton").click(function() {
            var searchText = $("#searchInput").val().toLowerCase();
            // Loop through each product card
            $(".col-md-4").each(function() {
                var productName = $(this).find("h4").text().toLowerCase();
                // If product name contains the search query, show the product, otherwise hide it
                if (productName.includes(searchText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>



</body>
</html>