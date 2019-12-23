




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic page needs -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
  <meta charset="utf-8">
  <base href="http://localhost:8000/">
  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>MyStore premium HTML5 &amp; CSS3 template</title>
  <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
  <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"
  />
  <!-- Mobile specific metas  , -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

  <!-- CSS Style -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="source/css/bootstrap.min.css">

  <!-- font-awesome & simple line icons CSS -->
  <link rel="stylesheet" type="text/css" href="source/css/font-awesome.css" media="all">
  <link rel="stylesheet" type="text/css" href="source/css/simple-line-icons.css" media="all">

  <!-- owl.carousel CSS -->
  <link rel="stylesheet" type="text/css" href="source/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="source/css/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="source/css/owl.transitions.css">

  <!-- animate CSS  -->
  <link rel="stylesheet" type="text/css" href="source/css/animate.css" media="all">

  <!-- flexslider CSS -->
  <link rel="stylesheet" type="text/css" href="source/css/flexslider.css">

  <!-- jquery-ui.min CSS  -->
  <link rel="stylesheet" type="text/css" href="source/css/jquery-ui.css">

  <!-- Revolution Slider CSS -->
  <link href="source/css/revolution-slider.css" rel="stylesheet">

  <!-- style CSS -->
  <link rel="stylesheet" type="text/css" href="source/css/style.css" media="all">
</head>

<body class="cms-index-index cms-home-page">
  <div id="page">

    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-sm-4 hidden-xs">
                <!-- Default Welcome Message -->
                <div class="welcome-msg ">Welcome to MyStore! </div>
                <span class="phone hidden-sm">Call Us: +123.456.789</span>
              </div>

              <!-- top links -->
              <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
                <div class="links">
                  <div class="myaccount">
                    <a title="My Account" href="apple.store.vn/account.html">
                      <i class="fa fa-user"></i>
                      <span class="hidden-xs">My Account</span>
                    </a>
                  </div>

                  <div class="login">
                    <a href="apple.store.vn/account.html">
                      <i class="fa fa-unlock-alt"></i>
                      <span class="hidden-xs">Log In</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-md-3 col-xs-12">
              <!-- Header Logo -->
              <div class="logo">
                <a title="e-commerce" href="apple.store.vn">
                  <img alt="responsive theme logo" src="source/images/logo.png">
                </a>
              </div>
              <!-- End Header Logo -->
            </div>
            <div class="col-xs-9 col-sm-6 col-md-6">
              <!-- Search -->

              <div class="top-search">
                <div id="search">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search" name="search">
                      <button class="btn-search" type="button">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>

              <!-- End Search -->
            </div>
            <!-- top cart -->

            <div class="col-lg-3 col-xs-3 top-cart">
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                    <a  class ="cart-logo" href="apple.store.vn/cart.html">
                      <div class="cart-icon">
                        <i class="fa fa-shopping-cart"></i>
                      </div>
                      <div class="shoppingcart-inner hidden-xs">
                        <span class="cart-title">Shopping Cart</span>
                        <span class="cart-total">
                          <b class="cart-totalQty"><?php echo e($totalQty); ?> </b> Item(s),
                          <b class="cart-totalPrice"><?php echo e(number_format($totalPromtPrice,0,',','.')); ?>₫ </b>
                          
                        </span>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

    <!-- Navbar -->
    <nav>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="mm-toggle-wrap">
              <div class="mm-toggle">
                <i class="fa fa-align-justify"></i>
              </div>
              <span class="mm-label">Categories</span>
            </div>
            <div class="mega-container visible-lg visible-md visible-sm">
              <div class="navleft-container">
                <div class="mega-menu-title">
                  <h3>Categories</h3>
                </div>
                <div class="mega-menu-category">
                  <ul class="nav">
                    
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                      <li cate-id='<?php echo e($item->id); ?>'>
                          <a href="apple.store.vn/<?php echo e($item->url); ?>">
                          <i class='icon fa <?php echo e(isset($item->icon)? $item->icon:'fa-inbox'); ?> fa-fw'></i> <?php echo e($item->name); ?></a>
                          <div class="wrap-popup column1">
                            <div class="popup">
                              <div class="row">
                                <div class="col-md-12">
                                  <ul class="nav">
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Canon</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Nikon</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Olympus</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>ALPA</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Bolex</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Samsung </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Panasonic</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Thomson </span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="shop_grid.html">
                                        <span>Bell & Howell</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div class="mtmegamenu">
              <ul>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item">
                    <a href="apple.store.vn">
                      <div class="title title_font">
                        <span class="title-text">Home</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item">
                    <a href="apple.store.vn/contact.html">
                      <div class="title title_font">
                        <span class="title-text">Contact Us</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root">
                  <div class="mt-root-item">
                    <a href="apple.store.vn/about_us.html">
                      <div class="title title_font">
                        <span class="title-text">about us</span>
                      </div>
                    </a>
                  </div>
                </li>
                <li class="mt-root demo_custom_link_cms">
                  <div class="mt-root-item">
                    <a href="apple.store.vn/blog_full_width.html">
                      <div class="title title_font">
                        <span class="title-text">Blog</span>
                      </div>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <?php echo $__env->yieldContent('content'); ?>


    <!-- Footer -->

    <footer>
      <div class="footer-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-7">
              <form id="newsletter-validate-detail" method="post" action="#">
                <h3 class="hidden-sm">Sign up for newsletter</h3>
                <div class="newsletter-inner">
                  <input class="newsletter-email" name='Email' placeholder='Enter Your Email' />
                  <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="social col-md-4 col-sm-5">
              <ul class="inline-mode">
                <li class="social-network fb">
                  <a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="social-network googleplus">
                  <a title="Connect us on Google+" target="_blank" href="https://plus.google.com/">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li class="social-network tw">
                  <a title="Connect us on Twitter" target="_blank" href="https://twitter.com/">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="social-network linkedin">
                  <a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li class="social-network rss">
                  <a title="Connect us on Instagram" target="_blank" href="https://instagram.com/">
                    <i class="fa fa-rss"></i>
                  </a>
                </li>
                <li class="social-network instagram">
                  <a title="Connect us on Instagram" target="_blank" href="https://instagram.com/">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     
      <div class="footer-coppyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-xs-12 coppyright"> Copyright © 2018 MyStore. Edit by
              <a href="https://www.facebook.com/huongnguyen.nh"> Huong </a>. All Rights Reserved. </div>
            <div class="col-sm-6 col-xs-12">
              <div class="payment">
                <ul>
                  <li>
                    <a href="#">
                      <img title="Visa" alt="Visa" src="source/images/visa.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Paypal" alt="Paypal" src="source/images/paypal.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Discover" alt="Discover" src="source/images/discover.png">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img title="Master Card" alt="Master Card" src="source/images/master-card.png">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="totop"> </a>
    <!-- End Footer -->


                                               
                                               
                                               
                                               
                                               <!-- Modal -->
                                               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                                               style="padding-top:50px;">
                                                 <div class="modal-dialog" role="document" >
                                                   <div class="modal-content" style="margin-top:100px">
                                                     <div class="modal-header">
                                                       <h5 class="modal-title d-flex justify-content-center" id="exampleModalLabel">
                                                          <div class=" modal-content-text d-flex justify-content-center pt-2">
                                                            Added product  <b class="text-success" style="font-size:1.2em"></b>  to cart 
                                                          </div>
                                                        </h5>
                                                       
                                                         
                                                       </button>
                                                     </div>
                                                     <div class="modal-body">
                                                        <a href="/apple.store.vn/cart.html">
                                                           <b> Go to <b class="text-danger" style="font-size:1.2em">Cart Page</b> for completing order </b>
                                                        </a>
                                                     </div>
                                                     <div class="modal-footer">
                                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                     </div>
                                                   </div>
                                                 </div>
                                               </div>
                                        

</div>

  <!-- JS -->

  <!-- jquery js -->
  <script type="text/javascript" src="source/js/jquery.min.js"></script>

  <!-- bootstrap js -->
  <script type="text/javascript" src="source/js/bootstrap.min.js"></script>


  <!-- owl.carousel.min js -->
  <script type="text/javascript" src="source/js/owl.carousel.min.js"></script>

  <!-- bxslider js -->
  <script type="text/javascript" src="source/js/jquery.bxslider.js"></script>

  <!-- Slider Js -->
  <script type="text/javascript" src="source/js/revolution-slider.js"></script>

  <!-- megamenu js -->
  <script type="text/javascript" src="source/js/megamenu.js"></script>
  <script type="text/javascript">
    /* <![CDATA[ */
    var mega_menu = '0';

  /* ]]> */
  </script>

  <!-- jquery.mobile-menu js -->
  <script type="text/javascript" src="source/js/mobile-menu.js"></script>

  <!--jquery-ui.min js -->
  <script type="text/javascript" src="source/js/jquery-ui.js"></script>
  
  <!-- main js -->
  <script type="text/javascript" src="source/js/main.js"></script>

  <!-- countdown js -->
  <script type="text/javascript" src="source/js/countdown.js"></script>

  <!-- Revolution Slider -->
  <script type="text/javascript">
    jQuery(document).ready(function () {

      $('.cart-icon,.cart-title, .cart-total').click(function(){
        window.location = 'apple.store.vn/cart.html';
      })

      // jQuery('.cart-icon, .cart-title, .totalNo').click(function () {
      //   window.location = 'cartcontroller/getcartpage';
      // })

      jQuery('.tp-banner').revolution(
        {
          delay: 9000,
          startwidth: 1170,
          startheight: 530,
          hideThumbs: 10,

          navigationType: "bullet",
          navigationStyle: "preview1",

          hideArrowsOnMobile: "on",

          touchenabled: "on",
          onHoverStop: "on",
          spinner: "spinner4"
        });
    });
  </script>



</body>

</html>



<?php /**PATH C:\XAMPP PLACE\htdocs\laraShopPage\resources\views/layouts/masterlayout.blade.php ENDPATH**/ ?>