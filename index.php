<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Walter</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Caesar+Dressing&family=Metal+Mania&family=Open+Sans&family=Roboto&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bondi.css">
  <!-- CSS Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="https://cdn.breakers-store.site/wp-content/uploads/2023/04/breakers_store_logo@3x-2048x1659.png">

</head>
<body>
  

<div class="header">
  <div class="container text-light text-center p-2 font-weight-bold">
    Hello World Breaker’s Here
  </div>
  
</div>



<!-- navbar -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/breakers_store_logo@3x-2048x1659.png" alt="" srcset="" width="100px" height="100px">
      </a>
      
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#main" aria-controls="main"
      aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
      
      <div class="collapse navbar-collapse" id="main">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item font-weight-bold ">
            <a class="nav-link p-2 p-lg-3 fs-5 active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Steam</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5"  href="#">EA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Playstaion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Battle.net</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-2 p-lg-3 fs-5" href="#">Netflix</a>
          </li>
        </ul>
      </div>
      <div class="search ps-3 pe-3 d-lg-block d-none ">
        <i class="fa-solid fa-magnifying-glass"></i>
  
      </div>
      
      <!-- login -->
      <div class="dropdown ">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-user text-black "></i>
    </button>
    <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
        <?php
        session_start();

        if (isset($_SESSION['username'])) {
            // User is logged in, display profile name and logout link
            echo "<li><span class='dropdown-item-text text-light'>Welcome, {$_SESSION['username']}!</span></li>";
            echo "<li><a class='dropdown-item text-light' href='logout.php'>Logout</a></li>";
        } else {
            // User is not logged in, display the login link
            echo "<li><a class='dropdown-item text-light' href='login.php'>Login</a></li>";
        }
        ?>
    </ul>
</div>

      </div>
   
      <!-- checkout -->
<div class="chechout text-center pb-2 pt-2 d-lg-block d-none">
  <i class="fa-solid fa-cart-shopping align-items-center  "></i>
  <a class="btn rounded-pill main-btn d-block  text-light align-items-center  " href="#" >Checkout</a>

</div>
<!--  -->
    </div>


  </nav>
  

<!-- landing -->
<div class="landing text-light d-flex align-items-start justify-content-center  ">

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="#"> <img class="img-fluid" src="https://cdn.breakers-store.site/wp-content/uploads/elementor/thumbs/spiderman2_header-q8ak1m47sgkdcfrq44cj2wwavqp007admyi0sbidww.png" width="1200px" class="d-block " alt="..."></a>
         
        </div>
        <div class="carousel-item">
          <a href="#"><img class="img-fluid" src="https://cdn.breakers-store.site/wp-content/uploads/elementor/thumbs/ark_survival_ascended_header-qeq61cnf4dkh9nducrydu4pod84ifneb7be71rtc6o.png" width="1200px" class="d-block " alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href="#"><img class="img-fluid" src="https://cdn.breakers-store.site/wp-content/uploads/elementor/thumbs/batman_arkham_header-qe8ia5lfjkq10abai5rk24v3km78nntdi7pg6kvzlc.png" width="1200px" class="d-block " alt="..."></a>   
        </div>
        <div class="carousel-item">
          <a href="#"> <img class="img-fluid"  src="https://cdn.breakers-store.site/wp-content/uploads/elementor/thumbs/apex_legends_header-qe8i916ddp6p51y026alkx2a11qggocx0nnkjojx0w.png" width="1200px" class="d-block " alt="..."></a>
         
        </div>
        <div class="carousel-item">
          <a href="#"> <img class="img-fluid" src="https://cdn.breakers-store.site/wp-content/uploads/elementor/thumbs/nightmarket_header-1-qe1wcjrs871xs0c1mmo5amw958zf30yb6edwe574z4.png" width="1200px" class="d-block " alt="..."></a>
         
        </div>
        <div class="carousel-item">
          <a href="#"><img class="img-fluid" src="https://cdn.breakers-store.site/wp-content/uploads/elementor/thumbs/cod_modern_warfare_3-qd0vbud33w4sv4luyqwydx2p3p7fk448ccx42gj3sg.png" width="1200px" class="d-block " alt="..."></a>
          
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> 

</div>
<!-- CARDS -->
<div class="mostpopular text-light  ">
  <div class="container ">
    <h2 class="font-weight-bold pt-5 pb-5 ">MOST POPULAR</h2>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-6 g-5">
        <div class="card  steam" style="background-color: #0c1826;">
          <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/Steamm.png" class="card-img-top img-fluid" alt="Image 1">
          <div class="card-body card-steam text-center ">
            <a href="#" class="text-decoration-none  card-title text-uppercase  text-light fs-4 ">steam</a>
          </div>
        </div>
      </div>
      <!-- Repeat the structure for the remaining cards -->
      <div class="col-lg-4 col-md-6 col-6  g-5">
        <div class="card " style="background-color: #0c1826;">
          <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/vALORANT.jpg" class="card-img-top img-fluid" alt="Image 2">
          <div class="card-body card-valorant text-center">
            <a href="#" class="text-decoration-none  card-title text-uppercase  text-light fs-4">valorant</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-6  g-5">
        <div class="card " style="background-color: #0c1826;">
          <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/psn.png" class="card-img-top img-fluid" alt="Image 2">
          <div class="card-body card-playstaion text-center">
            <a href="#" class=" text-decoration-none  card-title text-uppercase  text-light fs-4">Playstaion STORE</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-6  g-5">
        <div class="card " style="background-color: #0c1826;">
          <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/Roblox.png" class="card-img-top img-fluid" alt="Image 2">
          <div class="card-body card-roblox text-center">
            <a href="#" class="text-decoration-none   text-decoration-none card-title text-uppercase text-light fs-4">roblox</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-6  g-5">
        <div class="card " style="background-color: #0c1826;">
          <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/pubg.png" class="card-img-top img-fluid" alt="Image 2">
          <div class="card-body card-pubg text-center">
            <a href="#" class="text-decoration-none  card-title text-uppercase  text-light fs-4">pubg</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-6  g-5">
        <div class="card " style="background-color: #0c1826;">
          <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/free-fire.png" class="card-img-top img-fluid" alt="Image 2">
          <div class="card-body card-freefire text-center ">
            <a href="#" class="text-decoration-none   card-title text-uppercase  text-light fs-4">Free Fire</a>
          </div>
        </div>
      </div>
      <!-- Repeat the structure for the remaining cards -->
      <!-- ... -->
    </div>
    

</div>
</div>
<!-- Most Products -->
<div class="mostproducts">
  <div class="container">
    <h2 class="font-weight-bold pb-5 text-light text-uppercase pt-5">Best Products</h2>
<div class="row">
<div class="col-lg-3 col-md-6 col-6 g-5" >
  <div class="card text-light"  style="background-color: #040615 ;  ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/10/Arkk-441x564.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="ark.php" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">ARK: Survival Ascended </a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 900.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 g-5">
  <div class="card text-light"  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/11/doom-3-300x383.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">DOOM 3 PC-Key</a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP5.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6  g-5">
  <div class="card text-light"  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/10/Batman-300x444.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="batman.php" class="card-title text-uppercase fs-6  font-weight-bold text-decoration-none">BATMAN:ARKHAM COLLECTION STEAM</a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 935.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 g-5">
  <div class="card text-light"  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/10/EA_PLAY_PC_1-300x429.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">EA PLAY PRO 1 MONTH PC</a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 440.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 g-5">
  <div class="card text-light"  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/09/LEAGUE_2550-300x428.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">2550 RP </a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 535.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 g-5">
  <div class="card text-light"  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/05/Windows-11-300x417.jpg" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">WINDOWS 11 PRO RETAIL </a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 160.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6 g-5">
  <div class="card text-light "  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/VAL_TRY_1850-300x429.png" class="card-img-top img-fluid" alt="...">
    <div class="card-body p-2 mt-3" >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">1850 VP (TR)</a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 415.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light" >Add to cart</a>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-6  g-5">
  <div class="card text-light "  style="background-color: #040615; ">
    <img src="https://cdn.breakers-store.site/wp-content/uploads/2023/04/10-300x417.webp" class="card-img-top img-fluid " alt="...">
    <div class="card-body p-2 mt-3 " >
      <a href="#" class="card-title text-uppercase fs-6 font-weight-bold text-decoration-none">CARD(US)$10</a>
      <p class="card-text text-uppercase text-danger font-weight-bold ">EGP 470.00</p>
      <a href="#" class="btn  main-btn  w-100 font-weight-bold  text-center text-light " >Add to cart</a>
    </div>
  </div>
</div>
</div>
  </div>
</div>
<!-- footer -->
<div class="footer text-md-start pt-3 pb-3 ">
  <div class="container ">
    <div class="row ">
      <div class="col-lg-3 pt-5 mt-4" >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light" style="  background-color: #c00000;">
            Account
          </div>
          <ul class="list-group list-group-flush " >
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light text-start p-3" >My account
            </a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Orders</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >My Wishlist</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >My Wallet</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Checkout</a>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 pt-5 mt-4 " >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light" style="  background-color: #c00000;">
            Legal
          </div>
          
          <ul class="list-group list-group-flush  " > 
            <a href="contact_us.php" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Contact us</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Privacy Policy</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3" >Terms and Conditions</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-3 " >Refund Policy</a>
         
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 pt-5 mt-4" >
        <div class="card" style="background-color: #0c1826;" >
          <div class="card-header text-light " style="  background-color: #c00000;">
            Follow
          </div>
          <ul class="list-group list-group-flush  " >
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light  p-5 " >Facebook
            </a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-5" >Instagram</a>
            <a href="#" class="btn  main-btn foot-btn  w-100 font-weight-bold  text-center text-light p-5 text-center " >Whatsapp</a>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-3 pt-5 mt-4 " >
        <div class="card " style="background-color: #0c1826; " >
          <div class="card-header text-light " style="  background-color: #c00000;">
            Sign up
          </div>
          <div class="form text-start p-3 " style="background-color: #040615;">
            <p class="text-light text-center  mt-5 mb-5" >Sign up to our newsletter.

            </p>
            <div class="search">
              <input type="text" placeholder="Your Email Address" class="p-2 w-100">
              <a href="#" class="btn  main-btn mt-3 w-100   font-weight-bold  text-center text-light " style="background-color: #c00000;" >Sign up</a>
            
            </div>
            
          </div>
          
          <div class="contact  ">
            <ul class="d-flex mt-5 list-unstyled gap-5">
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-facebook fa-lg facebook rounded-circle p-2"></i>
              </a></li>
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-twitter fa-lg twitter rounded-circle p-2"></i>
              </a></li>
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-linkedin fa-lg linkedin rounded-circle p-2"></i>
              </a></li>
              <li><a class="d-block text-light" href="#">
                <i class="fa-brands fa-youtube fa-lg youtube rounded-circle p-2"></i>
              </a></li>
            </ul>
            
          </div>
    
        </div>
        
      </div>
      <div class="info ">
        <div class="copyright text-light ">
         &copy; <span>Breakers Store 2023</span>
        </div>
        <div class="text-light" >Developed By Walter

        </div>
        
      </div>


    </div>
    
  </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js.map"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>

