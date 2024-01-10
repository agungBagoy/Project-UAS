<!doctype html>
<html lang="en">

  <head>
    <title>Sports Car Rental &mdash; Project-Uas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body>
<!-- Ini Navbar  -->
<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3">
          <div class="site-logo">
            <a href="Home.blade.php"><strong>Sports Car Rental</strong></a>
          </div>
        </div>

        <div class="col-9  text-right">

          <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

          <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li class="active"><a href="/home" class="nav-link">Home</a></li>
              <li><a href="/type" class="nav-link">Type</a></li>
              <li><a href="/about" class="nav-link">History</a></li>
              <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>


      </div>
    </div>
</header>

<!-- Ini bagian pemilihan mobil -->
      <div class="hero" style="background-image: url('images/hero_1_a.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">

              <div class="row mb-5">
                <div class="col-lg-7 intro">
                  <h1><strong>Rental car</strong> Please select the car you want.</h1>
                </div>
              </div>

              <form class="trip-form">

                <div class="row align-items-center">

                  <div class="mb-3 mb-md-0 col-md-3">
                    <select name="" id="" class="custom-select form-control">
                      <option value="">Select Type</option>
                      <option value="">Ferrari</option>
                      <option value="">Dodge Challenger</option>
                      <option value="">Nissan Gtr</option>
                      <option value="">Lamborghini</option>
                      <option value="">Audi</option>
                      <option value="">Bugatti</option>
                    </select>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>

                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                  </div>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>




{{-- codingan pemilihan mobil --}}
      <div class="site-section">
        <div class="container">
          <h2 class="section-heading"><strong>How it works?</strong></h2>
          <p class="mb-5">Easy steps to get you started</p>

          <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>1</span>
                <div class="step-inner">
                  <span class="number text-primary">01.</span>
                  <h3>Select a car</h3>
                  <p>It is very important for customers to pay attention to the car they choose</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>2</span>
                <div class="step-inner">
                  <span class="number text-primary">02.</span>
                  <h3>Fill up form</h3>
                  <p>Please fill in the personal data form here correctly according to the provisions</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>3</span>
                <div class="step-inner">
                  <span class="number text-primary">03.</span>
                  <h3>Payment</h3>
                  <p>Please make payment here and follow all existing browsers</p>
                </div>
              </div>
            </div>
          </div>


          <div class="site-section bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <h2 class="section-heading"><strong>Type of Car</strong></h2>
                  <p class="mb-5">Please choose the car according to your wishes.</p>
                </div>
              </div>


              <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="{{('images/dodge.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                      <h3>Dodge Challengger</h3>
                      <div class="rent-price">
                        <strong>$38.00</strong><span class="mx-1">/</span>day
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Luggage:</span>
                          <span class="number">0</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Doors:</span>
                          <span class="number">2</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Passenger:</span>
                          <span class="number">2</span>
                        </div>
                      </div>
                      <div>
                        <p>Discover Unmatched Power and Style with the 2023 Dodge Challenger with Legendary Performance, Captivating Iconic Design and Luxurious Interior and Modern Technology.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="{{('images/lambo.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                      <h3>Lamborghini</h3>
                      <div class="rent-price">
                        <strong>$55.00</strong><span class="mx-1">/</span>day
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Luggage:</span>
                          <span class="number">0</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Doors:</span>
                          <span class="number">2</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Passenger:</span>
                          <span class="number">2</span>
                        </div>
                      </div>
                      <div>
                        <p>Experience the Awesomeness and Exclusive Style with the Latest Lamborghini which has Superlative Performance in Every Detail, Stunning Design and Safety.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="{{('images/italia.jpg')}}" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                      <h3>Ferrari</h3>
                      <div class="rent-price">
                        <strong>$50.00</strong><span class="mx-1">/</span>day
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Luggage:</span>
                          <span class="number">0</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Doors:</span>
                          <span class="number">2</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Passenger:</span>
                          <span class="number">2</span>
                        </div>
                      </div>
                      <div>
                        <p>Ferrari is the pride of Italy in every detail and also has extraordinary performance that burns the asphalt, a design that seduces the eye and is the choice of people.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="images/nissan.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                      <h3>Nissan Gtr</h3>
                      <div class="rent-price">
                        <strong>$40.00</strong><span class="mx-1">/</span>day
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Luggage:</span>
                          <span class="number">1</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Doors:</span>
                          <span class="number">2</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Passenger:</span>
                          <span class="number">2</span>
                        </div>
                      </div>
                      <div>
                        <p>Explore Legendary Power with the Nissan GT-R and its advantages, Advanced Technology, Iconic Design and Luxurious Interior.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                  <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="images/audi3.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                      <h3>Audi</h3>
                      <div class="rent-price">
                        <strong>$42.00</strong><span class="mx-1">/</span>day
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Luggage:</span>
                          <span class="number">1</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Doors:</span>
                          <span class="number">2</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Passenger:</span>
                          <span class="number">2</span>
                        </div>
                      </div>
                      <div>
                        <p>Experience Luxury and Performance with Audi - Technology and Elegance Combined and Relentless Innovation, Elegant Design.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4">

                  <div class="listing d-block  align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="images/buggati.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="listing-contents h-100">
                      <h3>Buggati</h3>
                      <div class="rent-price">
                        <strong>$46.00</strong><span class="mx-1">/</span>day
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Luggage:</span>
                          <span class="number">0</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Doors:</span>
                          <span class="number">2</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Passenger:</span>
                          <span class="number">2</span>
                        </div>
                      </div>
                      <div>
                        <p>Bugatti - Where Speed ​​Meets Luxury, An Expression of Excellence, Unrivaled Performance and Luxurious, Personalized Interiors.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
{{-- Biodata pribadi --}}
          <div class="site-section bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-7">
                  <h2 class="section-heading"><strong>Founder Sports Car Rental </strong></h2>
                  <p class="mb-5">Personal biodata profile of the company owner.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="testimonial-2">
                    <blockquote class="mb-4">
                      <p>"Muhamad Agung Ihsannudin, Founder of a Sports Car Rental company"</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                      <img src="images/foto.jpg" alt="Image" class="img-fluid mr-3">
                      <div class="author-name">
                        <span class="d-block">Muhamad Agung Ihsannudin</span>
                        <span>Founder</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="testimonial-2">
                    <blockquote class="mb-4">
                      <p>"Dwi Puspa Firdaus, Founder of a Sports Car Rental company"</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                      <img src="images/dwi.jpg" alt="Image" class="img-fluid mr-3">
                      <div class="author-name">
                        <span class="d-block">Dwi Puspa Firdaus</span>
                        <span>Founder</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                  <div class="testimonial-2">
                    <blockquote class="mb-4">
                      <p>"Laura Lausen, Founder of a Sports Car Rental company"</p>
                    </blockquote>
                    <div class="d-flex v-card align-items-center">
                      <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                      <div class="author-name">
                        <span class="d-block">Laura Lausen</span>
                        <span >Founder</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
