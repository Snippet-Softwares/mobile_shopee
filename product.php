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
        <!-- Product -->
        <sectio id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="./assets/products/1.png" alt="Product 1" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button class="btn btn-danger form-control">Proceed to buy</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-warning form-control">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                        <small>By Samsung</small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-raleway font-size-14">20.534 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">
                        <!-- product price -->
                        <table class="my-3">
                            <tr class="font-raleway font-size-14">
                                <td>M.R.P</td>
                                <td>&nbsp;&nbsp;<strike>$162.00</strike></td>
                            </tr>
                            <tr class="font-raleway font-size-14">
                                <td>Deal Price</td>
                                <td class="font-size-20 text-danger">&nbsp;<span>$152.00</span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-raleway">
                                <td class="font-size-12">You Save</td>
                                <td class="text-danger font-size-16">&nbsp;<span>$10.00</span></td>
                            </tr>
                        </table>
                        <!-- End product price -->

                        <!-- Policy -->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">10 Days<br>Replacement</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">Daily Tuition<br>Delivered</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-raleway font-size-12">1 Year<br>Warranty</a>
                                </div>
                            </div>
                        </div>
                        <!-- End policy -->
                        <hr>
                        <!-- Order details -->
                        <div id="order-details" class="font-raleway d-flex flex-column text-dark">
                            <small>Delivery by: Mar 29 - Apr 1</small>
                            <small>Sold by: <a href="#">Daily Electronics</a> (4.5 out of 5 | 18,198 ratings)</small>
                            <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 420401 </small>
                        </div>
                        <!-- End order details -->

                        <div class="row">
                            <div class="col-6">
                                <!-- colors -->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color: </h6>
                                        <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!-- End colors -->
                            </div>
                            <div class="col-6">
                                <!-- product Qty section -->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty:</h6>
                                    <div class="px-4 d-flex font-raleway">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light text-center" disabled value="1" placeholder="1">
                                        <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!-- End product Qty section -->
                            </div>
                        </div>

                        <!-- Size -->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size:</h6>
                            <div class="d-flex justify-content-between w-50">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!-- End size -->

                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-raleway font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, aspernatur dicta. Reprehenderit nostrum reiciendis ducimus autem natus non voluptate repudiandae ab, nemo tenetur modi quos odit dolores unde esse assumenda!</p>
                        <p class="font-raleway font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, aspernatur dicta. Reprehenderit nostrum reiciendis ducimus autem natus non voluptate repudiandae ab, nemo tenetur modi quos odit dolores unde esse assumenda!</p>
                    </div>

                </div>
            </div>
        </sectio>
        <!-- End product -->

        <!-- Top sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">
                    Top Sale
                </h4>
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
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
                    <div class="item py-2">
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
                    <div class="item py-2">
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
                    <div class="item py-2">
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
                    <div class="item py-2">
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
                    <div class="item py-2">
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
                <!-- end owl carousel -->
            </div>
        </section>
        <!-- End top sale -->

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