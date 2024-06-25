<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bidding System</title>
    <!-- boostrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- material symbol link for icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- font awsome kit -->
    <script src="https://kit.fontawesome.com/a48a021ab7.js" crossorigin="anonymous"></script>
</head>
<body>
    <header >
         <!-- nav bar -->
         <div class="">
            <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom py-0 px-xl-5">
                <div class="container-fluid mx-xl-4">
                  <a class="navbar-brand" href="#">
                    <img class="h-25 w-25"rounded-circle src="images/bidding.png" alt="">
                  </a>
                  <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="material-symbols-outlined">
                        menu
                        </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex mx-auto " role="search">
                        <input class="form-control text-center " type="search" placeholder="Search Items" aria-label="Search">
                        <button class="btn btn-outline-success text-center rounded-start" type="submit"><span class="material-symbols-outlined ">
                          search
                          </span></button>
                      </form>
                    <ul class="navbar-nav  mb-2 mb-lg-0 ">
                      
                      
                      <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#contact">Contact</a>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="btn nav-link text-dark">admin Login</button>
                      </li>
                      
                      <li class="nav-item dropdown">
                        <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="material-symbols-outlined">
                                person_add
                                </span>
                          </button>
                        <ul class="dropdown-menu mt-2 shadow dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Log In </a></li>
                          <li><a class="dropdown-item" href="#">Sign Up</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>
                    
                   
                  </div>
                </div>
              </nav>
         </div>
         <!-------------- slider ----- -->

         <div class="px-md-5 ">
          <div id="carouselExampleDark" class="carousel carousel-dark slide p-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active " data-bs-interval="10000">
                <img src="images/dolar1000x500.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block  bg-white-100 rounded">
                  <h5 class="text-white fs-1 fw-bold">Premier Online Bidding</h5>
                  <p class="text-white">Best Online Auction Site Providing 100% Reliable and Secured Auctioning-Bidding Services</p>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn nav-link btn-success text-white fw-bold fs-6">JOIN US</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="images/bidd3-11000x500.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block bg-white-100">
                  <h5 class="text-white fs-1 fw-bold">Premier Online Bidding</h5>
                  <p class="text-white">Best Online Auction Site Providing 100% Reliable and Secured Auctioning-Bidding Services</p>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn nav-link btn-success text-white fw-bold fs-6">JOIN US</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/intern21000x500.jpg" class="d-block w-100 rounded" alt="...">
                <div class="carousel-caption d-none d-md-block  bg-white-100 rounded">
                  <h5 class="text-white fs-1 fw-bold">Premier Online Bidding</h5>
                  <p class="text-white">Best Online Auction Site Providing 100% Reliable and Secured Auctioning-Bidding Services</p>
                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn nav-link btn-success text-white fw-bold fs-6">JOIN US</button>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon bg-primary " aria-hidden="true"></span>
              <span class="visually-hidden ">Next</span>
            </button>
          </div>
         </div>
         
    </header>
    <main class="">
          <!-- about us section -->
    <section id ="about">
      <div class=" my-5 mx-5" >
        <h2 class="fw-bold text-center">About Us </h2>
        <hr class="w-25 mx-auto">
        <div class="d-flex flex-column-reverse flex-md-row justify-content-center align-items-center">
          <div class="col-md-6 d-flex justify-content-center mt-5">
            <img src="images/about.jpeg" class="img-fluid rounded-start h-75 w-75" alt="...">
          </div>
          <div class="col-md-6 ">
            <div >
              
              <p>
                Welcome to our Online Bidding System, where buyers and sellers connect in a dynamic and secure marketplace. Our platform was established with the mission to provide an easy, efficient, and reliable way for users to engage in auctions from the comfort of their homes. Our advanced features include real-time bidding, secure payment processing, and a comprehensive rating and review system to help you make informed decisions. Our dedicated team continuously works to improve the platform, bringing you the latest technology and best practices in online auctions.
            </p>
            <p>
                Join our growing community of buyers and sellers today and experience the excitement of bidding on a wide array of items. Thank you for choosing our platform, and we look forward to helping you discover and win amazing deals.
            </p><a class=" text-decoration-none" href="">Explore More</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>

       <!-- frequently ask quention section -->
       <div class="section mx-5">
      <h1 class="text-center my-4">frequently Ask <span class="text-success">Quentions</span></h1>
      <div class="row ">
        <div class="col-md-6 ">
          <img class="img-fluid w-75 h-100 " src="images/d2c7754c-071b-47b9-b255-476a23b7441a.jpg" alt="">
        </div>
        <div class="col-md-6 mt-5">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How do I register and create an account?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  To register and create an account, click on the "Register" button located at the top-right corner of the home page. Fill in the required information, including your name, email address, and password. You will receive a confirmation email to verify your account. Once verified, you can log in and start participating in auctions.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does the bidding process work?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  To place a bid on an item, navigate to the auction listing and enter your bid amount in the provided field. Click the "Place Bid" button to submit your bid. If another user outbids you, you will receive a notification, and you can choose to place a higher bid. The auction will continue until the specified end time, and the highest bidder at that time will win the item
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How do I create and manage my own auctions?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  To create an auction, log in to your account and navigate to the "Create Auction" page. Fill in the required details, including the item title, description, category, starting bid, bid increment, and auction duration. You can also upload photos of your item to attract more bidders. Once your auction is live, you can manage it through your dashboard, where you can monitor bids, communicate with bidders, and update auction details if necessary.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>

       <!-- happy clients -->
       <section class="section-fluid mx-5 p-4">
        <h1 class="text-center my-5">Happy clients <span class="text-warning">Says</span></h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center">
                    <img src="images/user-1.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Definitely a great upgrade from previous versions and it lets you develop complex ecommerce solutions, multivendors marketplaces.</p>
                        <p class="text-warning">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </p>
                        <h5 class="text-primary">michel jeckshon</h5>
                        <p>calirfonia , america</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <img src="images/user-2.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Definitely a great upgrade from previous versions and it lets you develop complex ecommerce solutions.</p>
                        <p class="text-warning">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </p>
                        <h5 class="text-primary">Dao Hong Linh</h5>
                        <p>Hanoi, Vietnam</p>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card">
                    <img src="images/user-3.png" class="card-img-top w-25 mx-auto pt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Definitely a great upgrade from previous versions and it lets you develop complex ecommerce solutions, multivendors marketplaces.</p>
                        <p class="text-warning">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </p>
                        <h5 class="text-primary">Melodi Alexa</h5>
                        <p>Christchurch, New Zealand</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </main>
<!-- footer section -->
  <footer class="text-center text-lg-start text-dark" style="background-color: #ECEFF1">
   
    <section class="d-flex justify-content-between p-4 text-white" style="background-color: #21D192"  >
      
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <div id="contact">
        <a href="" class="text-white me-4 text-decoration-none">
          <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="" class="text-white me-4 text-decoration-none">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4 text-decoration-none">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4 text-decoration-none">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4 text-decoration-none">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4 text-decoration-none">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </section>
    <!-- Section: Social media -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Premier Bidding</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Best Online Auction Site Providing 100% Reliable and Secured Auctioning-Bidding Services.
            </p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark text-decoration-none">Laptop </a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Mobile Phone</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Smart Watch</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Electronics</a>
            </p>
          </div>
         

        
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark text-decoration-none">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-dark text-decoration-none">Help</a>
            </p>
          </div>

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Chittagong,Bangladesh</p>
            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
      
        </div>
    
      </div>
    </section>

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2024 Copyright:
      <a class="text-dark" href="#"
         >beattingbd.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  

    


   <!-- boostrap js link -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>