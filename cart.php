<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- start header -->
    <header>
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-raleway font-size-12 text-black-50 m-0">Address Bar</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist (0)</a>
            </div>
        </div>
        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Mobile Shopee</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                  </li>
                </ul>
                <form action="#" class="font-size-14 font-raleway">
                    <a href="" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fa fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                    </a>
                </form>
              </div>
            </div>
          </nav>
        <!-- end navbar -->
    </header>
    <!-- end header -->

    <!-- start main site -->
    <main id="main-site">
        
        <!-- Shopping cart -->
        <section id="cart" class="py-3">
            <div class="container-fluid w-75 mt-5">
                <h5 class="font-baloo font-size-20">Shopping Cart</h5>
                <!-- shopping cart items -->
                <div class="row">
                    <div class="col-sm-8">
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/1.png" alt="Cart 1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                <small>By Samsung</small>
                                <!-- Product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-raleway font-size-14">20,534  ratings</a>
                                </div>
                                <!-- !product rating -->

                                <!-- Product Qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-raleway w-25">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="pro1" type="text" class="qty_input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    <button class="btn font-baloo text-danger px-3">Save for later</button>
                                </div>
                                <!-- !Product Qty -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-baloo text-danger font-size-20">
                                    $<span class="product_price">152</span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->

                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./assets/products/3.png" alt="Cart 1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                                <small>By Samsung</small>
                                <!-- Product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-raleway font-size-14">20,534  ratings</a>
                                </div>
                                <!-- !product rating -->

                                <!-- Product Qty -->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-raleway w-25">
                                        <button data-id="pro2" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="pro2" type="text" class="qty_input border px-2 w-100 bg-light text-center" disabled value="1" placeholder="1">
                                        <button data-id="pro2" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <button class="btn font-baloo text-danger px-3 border-right">Delete</button>
                                    <button class="btn font-baloo text-danger px-3">Save for later</button>
                                </div>
                                <!-- !Product Qty -->
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-baloo text-danger font-size-20">
                                    $<span class="product_price">152</span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                    </div>
                    <!-- Subtotals section -->
                    <div class="col-sm-4">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-raleway text-success py-3">
                                <i class="fas fa-check"></i> Your order is eligible for FREE delivery
                            </h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Subtotal (2 items)&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price">152.00</span></span></h5>
                                <button type="submit" class="btn btn-warning mt-3">prceed to buy</button>
                            </div>
                        </div>
                    </div>
                    <!-- !Subtotals section -->
                </div>
                <!-- !shopping cart items -->
            </div>
        </section>
        <!-- !Shopping cart -->

        <!-- New phones -->
        <section id="new-phones" class="pb-5">
            <div class="container">
                <h4 class="font-rubik font-size-20">New Phones</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-raleway">
                            <a href="#"><img src="./assets/products/1.png" alt="Product 1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy S10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-raleway">
                            <a href="#"><img src="./assets/products/2.png" alt="Product 1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>RedMi Note 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$120</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-raleway">
                            <a href="#"><img src="./assets/products/3.png" alt="Product 3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>RedMi 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$180</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-raleway">
                            <a href="#"><img src="./assets/products/4.png" alt="Product 3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>RedMi 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$180</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-raleway">
                            <a href="#"><img src="./assets/products/5.png" alt="Product 3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>RedMi 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$180</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-raleway">
                            <a href="#"><img src="./assets/products/6.png" alt="Product 3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>RedMi 7</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$180</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End new phones -->

    </main>
    <!-- end main site -->

    <!-- start footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">Company</h4>
                    <p class="font-size-14 font-raleway text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis natus, maiores pariatur fuga amet inventore provident omnis eveniet ex delectus debitis, at veritatis voluptatibus reiciendis aperiam nam architecto sit labore.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Newsletter</h4>
                    <form action="" class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email *">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Subcsribe</button>
                        </div>
                    </form>

                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Quick links</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">Delivery Information</a>
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">Wishlist</a>
                        <a href="#" class="font-raleway font-size-14 text-white-50 pb-1">Newsletter</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Copyright -->
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-raleway font-size-14">&copy; Copyright 2021. All rights reserved.<br>Designed By <a href="#" class="text-white">Snippet Software & IoT Solutions</a></p>
    </div>
    <!-- End copyright -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>
    <!-- Custom Javascript -->
    <script src="index.js"></script>
</body>
</html>