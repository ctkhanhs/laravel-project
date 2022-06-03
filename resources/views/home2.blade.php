<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from avitex.vn/theme/eliah/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 10:35:22 GMT -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Homepage 1</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;400;500;700;900&amp;display=swap" />
  <link rel="shortcut icon" type="image/png" href="assets/images/fav.png" />
  <!--build:css assets/css/styles.min.css-->
  <link rel="stylesheet" href="{{url('public/user')}}/css/bootstrap.css" />
  <link rel="stylesheet" href="{{url('public/user')}}/cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <link rel="stylesheet" href="{{url('public/user')}}/css/slick.min.css" />
  <link rel="stylesheet" href="{{url('public/user')}}/css/fontawesome.css" />
  <link rel="stylesheet" href="{{url('public/user')}}/css/jquery.modal.min.css" />
  <link rel="stylesheet" href="{{url('public/user')}}/css/bootstrap-drawer.min.css" />
  <link rel="stylesheet" href="{{url('public/user')}}/css/style.css" />
  <!--endbuild-->
</head>

<body>
  <div class="header -one">
    <div class="top-nav -style-1">
      <div class="container">
        <div class="top-nav__wrapper">
          <div class="top-nav-social">
            <div class="social-icons -white">
              <ul>
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/"><i class="fab fa-instagram"> </i></a></li>
                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <p class="top-nav-promo">Free shipping on international orders of $120+</p>
          <div class="top-nav-selections">
            <div class="top-nav-selections__item">
              <select class="customed-select -borderless -white" name="cur">
                <option value="USD">USD</option>
                <option value="JPY">JPY</option>
                <option value="VND">VND</option>
              </select>
            </div>
            <div class="top-nav-selections__item">
              <select class="customed-select -borderless -white" name="lang">
                <option value="EN">ENG</option>
                <option value="JP">JAP</option>
                <option value="VI">VIE</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="menu -style-1">
      <div class="container">
        <div class="menu__wrapper"><a class="menu-logo" href="index.html"><img src="{{url('public/images')}}/logo.png" alt="Logo" /></a>
          <div class="navigator ">
            <ul>
              <li class="relative"><a href="{{route('home')}}">Home</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="shop-fullwidth-4col.html">Shop<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                <ul class="dropdown-menu -wide">
                  <ul class="dropdown-menu__col">
                    @foreach($categories as $cat)
                    <li><a class="dropdown-item" href="{{route('home.category',['category'=>$cat->id, 'slug'=>Str::slug($cat->name)])}}">{{$cat->name}}</a></li>
                    @endforeach
                  </ul>
                  <ul class="dropdown-menu__col">
                    <li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>
                    <li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>
                    <li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>
                    <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                  </ul>
                  <ul class="dropdown-menu__col">
                    <li><a href="product-detail.html">Product Detail</a></li>
                    <li><a href="cart.html">Shopping cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="wishlist.html">Wish list</a></li>
                  </ul>
                  <ul class="dropdown-menu__col -banner"><a href="shop-fullwidth-4col.html"><img src="{{url('public/images')}}/dropdown-menu-banner.png" alt="New product banner" /></a></ul>
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>

              <li class="relative"><a href="#">Customer<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                <ul class="dropdown-menu">
                  @if(auth()->guard('customer')->check())
                  <li><a class="dropdown-item" href="">{{auth()->guard('customer')->user()->name}}</a></li>
                  <li><a class="dropdown-item" href="{{route('home.logout')}}">Logout</a></li>
                  @else
                  <li><a class="dropdown-item" href="{{route('home.login')}}">Login</a></li>
                  <li><a class="dropdown-item" href="{{route('home.register')}}">Register</a></li>
                  @endif
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu-functions "><a class="menu-icon -search" href="#"><img src="{{url('public/images')}}/search-icon.png" alt="Search icon" /></a>
            <div class="search-box">
              <form>
                <input type="text" placeholder="What are you looking for?" name="search" />
                <button><img src="{{url('public/images')}}/search-icon.png" alt="Search icon" /></button>
              </form>
            </div><a class="menu-icon -wishlist" href="{{route('home.product_favorite')}}"><img src="{{url('public/images')}}/wishlist-icon.png" alt="Wishlist icon" /></a>
            <div class="menu-cart"><a class="menu-icon" href="{{route('cart.view')}}"><img src="{{url('public/images')}}/cart-icon.png" alt="Wishlist icon" /><span class="cart__quantity">10</span></a>
              <h5>Cart:<span>$100</span></h5>
            <!-- <div class="menu-cart"><a class="menu-icon -cart" href="{{route('cart.view')}}"><img src="{{url('public/images')}}/cart-icon.png" alt="Wishlist icon" /><span class="cart__quantity">0</span></a>
              <h5>Cart:<span>$100</span></h5>
            </div><a class="menu-icon -navbar" href="#">
              <div class="bar"></div>
              <div class="bar"></div>
              <div class="bar"></div>
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
    <div class="slider -style-1 slider-arrow-middle">
      <div class="slider__carousel">
        <div class="slider__carousel__item slider-1">
          <div class="container">
            <div class="slider-background"><img class="slider-background" src="{{url('public/images')}}/bg1.png" alt="Slider background" /></div>
            <div class="slider-content">
              <h5 class="slider-content__subtitle" data-animation-in="fadeInUp" data-animation-delay="0.1">bringing you</h5>
              <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">Inner beauty out
              </h1>
              <div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a class="btn -red" href="#">Appointment</a>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__carousel__item slider-2">
          <div class="container">
            <div class="slider-background"><img class="slider-background" src="{{url('public/images')}}/bg2.png" alt="Slider background" /></div>
            <div class="slider-content">
              <h5 class="slider-content__subtitle" data-animation-in="fadeInUp" data-animation-delay="0.1">When you look good</h5>
              <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">You feel good
              </h1>
              <div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a class="btn -red" href="#">Appointment</a>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__carousel__item slider-3">
          <div class="container">
            <div class="slider-background"><img class="slider-background" src="{{url('public/images')}}/bg3.png" alt="Slider background" /></div>
            <div class="slider-content">
              <h5 class="slider-content__subtitle" data-animation-in="fadeInUp" data-animation-delay="0.1">We make best makeup</h5>
              <h1 class="slider-content__title" data-animation-in="fadeInUp" data-animation-delay="0.2">Beauty salon
              </h1>
              <div data-animation-in="fadeInUp" data-animation-out="fadeInDown" data-animation-delay="0.4"><a class="btn -red" href="#">Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="introduction-one">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="introduction-one-image">
              <div class="introduction-one-image__detail"><img src="{{url('public/images')}}/img1.png" alt="background" /><img src="{{url('public/images')}}/img2.png" alt="background" /></div>
              <div class="introduction-one-image__background">
                <div class="background__item">
                  <div class="wrapper" ref="{bg1}"><img data-depth="0.5" src="{{url('public/images')}}/bg4.png" alt="background" /></div>
                </div>
                <div class="background__item">
                  <div class="wrapper" ref="{bg2}"><img data-depth="0.3" data-invert-x="" data-invert-y="" src="{{url('public/images')}}/bg5.png" alt="background" /></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="introduction-one-content">
              <h5>ABOUT<span> ELIAH</span></h5>
              <div class="section-title " style="margin-bottom: 1.875em">
                <h2>When You Look Good </br> You Feel Good</h2><img src="{{url('public/images')}}/content-deco.png" alt="Decoration" />
              </div>
              <p>The top three occupations in the Beauty salons Industry Group are Hairdressers, hairstylists, & cosmetologists, Manicurists and pedicurists, Receptionists & information clerks, Supervisors of personal care and service workers, and Skincare specialists.</p><a class="btn -white" href="#">Appointment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="introduction-two">
      <div class="video-frame" style="height: 500px; width: 888.889px;">
        <div class="video-frame__poster"><img src="{{url('public/images')}}/img3.png" alt="Video poster" /></div><a class="btn -white -round" href="#" style="height: 50px; width: 50px; line-height: 50px; padding: 0px;"><i class="fas fa-play"></i></a>
      </div>
      <div class="introduction-two-content">
        <div class="container">
          <div class="introduction-two-content__item active" data-cover="{{url('public/images')}}/img3.png" data-src="https://www.youtube.com/embed/80e0QHPYRG4"><span>01</span><a href="#">Body treatment</a></div>
          <div class="introduction-two-content__item" data-cover="assets/images/introduction/IntroductionTwo/2.png" data-src="https://www.youtube.com/embed/xn7jfVWWSio"><span>02</span><a href="#">Professinal makeup</a></div>
          <div class="introduction-two-content__item" data-cover="assets/images/introduction/IntroductionTwo/3.png" data-src="https://www.youtube.com/embed/K3M-czGNUCg"><span>03</span><a href="#">Maincure &amp; pedicure</a></div>
          <div class="introduction-two-content__item" data-cover="assets/images/introduction/IntroductionTwo/4.png" data-src="https://www.youtube.com/embed/hoPiGLf0ICA"><span>04</span><a href="#">Hair cut &amp; Coloring</a></div>
        </div>
      </div>
    </div>
    <div class="product-slide">
      <div class="container">
        <div class="section-title -center" style="margin-bottom: 1.875em">
          <h2>Beauty Products</h2><img src="{{url('public/images')}}/content-deco.png" alt="Decoration" />
        </div>
        <div class="product-slider">
          <div class="product-slide__wrapper">
          <x-product-list :data="$productSale"/>
          </div>
          <div class="text-center"><a class="btn -transparent -underline" href="shop-fullwidth-4col.html">View all product</a>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial">
      <div class="section-title -center" style="margin-bottom: 3.125rem">
        <h5>TESTIMONIAL</h5>
        <h2>What People Say?</h2><img src="{{url('public/images')}}/content-deco.png" alt="Decoration" />
      </div>
      <div class="container">
        <div class="testimonial-slider">
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="slide-nav">
                <div class="slide-nav__wrapper">
                  <div class="slide-nav__item" key="0"><img src="{{url('public/images')}}/cus1.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="1"><img src="{{url('public/images')}}/cus2.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="2"><img src="{{url('public/images')}}/cus3.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="3"><img src="{{url('public/images')}}/cus4.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="4"><img src="{{url('public/images')}}/cus5.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="5"><img src="{{url('public/images')}}/cus6.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="6"><img src="{{url('public/images')}}/cus7.png" alt="Customer avatar" /></div>
                  <div class="slide-nav__item" key="7"><img src="{{url('public/images')}}/cus8.png" alt="Customer avatar" /></div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="slide-for">
                <div class="slide-for__wrapper">
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Alexander Ball</h3>
                        <h5>New York</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Izabel Watt</h3>
                        <h5>Michigan</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Rachel Regan</h3>
                        <h5>Sydney</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Malika Kenny</h3>
                        <h5>Ha Noi</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Javier Bender</h3>
                        <h5>Tokyo</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Paul Brookes</h3>
                        <h5>Berlin</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Bilaal Gunn</h3>
                        <h5>Denver</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                  <div class="slide-for__item">
                    <div class="slide-for__item__header">
                      <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                      <div class="customer__info">
                        <h3>Musab O'Sullivan</h3>
                        <h5>Paris</h5>
                      </div>
                      <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                    </div>
                    <p class="slide-for__item__content">I love my lash tint! I don't have extremely blonde lashes, but I do like that they can be even darker than they are. It makes my eyes stand out more and I love the way it looks! Now, I just need to add on a bit of mascara for length and I am set.</p>
                  </div>
                </div>
                <div class="testimonial-one__slider-control"><a class="prev" href="#"><i class="far fa-angle-left"> </i>Prev</a><a class="next" href="#">Next<i class="far fa-angle-right"> </i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="team-one">
      <div class="container">
        <div class="section-title -center" style="margin-bottom: 1.875em">
          <h2>Professional team</h2><img src="{{url('public/images')}}/content-deco.png" alt="Decoration" />
        </div>
        <div class="team-one-slider">
          <div class="slider__item">
            <div class="team-card">
              <div class="team-card__avatar"><img src="{{url('public/images')}}/pro1.png" alt="Danielle Welling" /></div>
              <div class="team-card__content">
                <h3>Danielle Welling</h3>
                <h5>Nail master</h5>
                <p>Ipsum dolor amet, consectetur adipiscing sedo lacus facilisis.</p>
                <socialicons></socialicons>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="team-card">
              <div class="team-card__avatar"><img src="{{url('public/images')}}/pro2.png" alt="Cali Lees" /></div>
              <div class="team-card__content">
                <h3>Cali Lees</h3>
                <h5>Administrator</h5>
                <p>Ipsum dolor amet, consectetur adipiscing sedo lacus facilisis.</p>
                <socialicons></socialicons>
              </div>
            </div>
          </div>
          <div class="slider__item">
            <div class="team-card">
              <div class="team-card__avatar"><img src="{{url('public/images')}}/pro3.png" alt="Danielle Welling" /></div>
              <div class="team-card__content">
                <h3>Danielle Welling</h3>
                <h5>Hair stylish</h5>
                <p>Ipsum dolor amet, consectetur adipiscing sedo lacus facilisis.</p>
                <socialicons></socialicons>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cta -style-1" style="background-image: url(_assets/images/cta/CTAOne/1.html)">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 mx-auto">
            <div class="cta__form">
              <div class="section-title " style="margin-bottom: 1.875em">
                <h2>Book Service</h2><img src="{{url('public/images')}}/content-deco.png" alt="Decoration" />
              </div>
              <form class="cta__form__detail validated-form" action="#">
                <div class="input-validator">
                  <input type="text" placeholder="Your name" name="name" required="required" />
                </div>
                <div class="input-validator">
                  <input type="text" placeholder="Your phone" name="phone" required="required" />
                </div>
                <div class="input-validator">
                  <select class="customed-select required" name="service">
                    <option value="" hidden="hidden">Choose a services</option>
                    <option value="Spa">Spa</option>
                    <option value="Salon">Salon</option>
                    <option value="Nail">Nail</option>
                  </select>
                </div>
                <div class="input-validator">
                  <select class="customed-select required" name="date">
                    <option value="" hidden="hidden">Choose a data</option>
                    <option value="Yesterday">Yesterday</option>
                    <option value="Today">Today</option>
                    <option value="Tomorow">Tomorow</option>
                  </select>
                </div>
                <button class="btn -light-red">Appoitment
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-one">
      <div class="container">
        <div class="footer-one__header">
          <div class="footer-one__header__logo"><a href="https://avitex.vn/homepages/homepage1"><img src="{{url('public/images')}}/logo.png" alt="Logo" /></a></div>
          <div class="footer-one__header__newsletter"><span>Subscribe Newletter:</span>
            <div class="footer-one-newsletter">
              <div class="subscribe-form">
                <div class="mc-form">
                  <input type="text" placeholder="Enter your email" />
                  <button class="btn "><i class="fas fa-paper-plane"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-one__header__social">
            <div class="social-icons -border">
              <ul>
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/"><i class="fab fa-instagram"> </i></a></li>
                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-one__body">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="footer__section -info">
                <h5 class="footer-title">Contact info</h5>
                <p>Address:<span>2168 S Archer Ave, Chicago, IL 60616, US</span></p>
                <p>Phone:<span>+1 312-808-1999</span></p>
                <p>Email:<span>Beatycosmetics@gmail.com</span></p>
                <p>Opentime:<span>8.00am - 11.00.pm</span></p>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="footer__section -links">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <h5 class="footer-title">Account</h5>
                    <ul>
                      <li><a href="#">My account</a></li>
                      <li><a href="wishlist.html">Wishlist</a></li>
                      <li><a href="https://avitex.vn/cart/">Cart</a></li>
                      <li><a href="fullwidth-4col.html">Shop</a></li>
                      <li><a href="https://avitex.vn/checkout/">Checkout</a></li>
                    </ul>
                  </div>
                  <div class="col-12 col-sm-6">
                    <h5 class="footer-title">Infomation</h5>
                    <ul>
                      <li><a href="about.html">About us</a></li>
                      <li><a href="contact.html">Careers</a></li>
                      <li><a href="contact.html">Delivery Information</a></li>
                      <li><a href="contact.html">Privacy Policy</a></li>
                      <li><a href="contact.html">Terms &amp; Condition</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="footer__section -payment">
                <h5 class="footer-title">Payment methods</h5>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida facilisis.</p>
                <div class="payment-methods"><img src="{{url('public/images')}}/pay.png" alt="Payment methods" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-one__footer">
        <div class="container">
          <div class="footer-one__footer__wrapper">
            <p>© Copyright 2020 Beauty</p>
            <ul>
              <li><a href="contact.html">Privacy Policy</a></li>
              <li><a href="contact.html">Terms &amp; Condition</a></li>
              <li><a href="contact.html">Site map</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="drawer drawer-right slide" id="cart-drawer" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true">
      <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-body">
          <div class="cart-sidebar">
            <div class="cart-items__wrapper">
              <h2>Shopping cart</h2>
              <div class="cart-item">
                <div class="cart-item__image"><img src="assets/images/product/1.png" alt="Product image" /></div>
                <div class="cart-item__info"><a href="https://avitex.vn/product-detail.html">The expert mascaraa</a>
                  <h5>$35.00</h5>
                  <p>Quantity:<span> 1</span></p>
                </div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>
              </div>
              <div class="cart-item">
                <div class="cart-item__image"><img src="assets/images/product/3.png" alt="Product image" /></div>
                <div class="cart-item__info"><a href="https://avitex.vn/product-detail.html">Velvet Melon High Intensity</a>
                  <h5>$38.00</h5>
                  <p>Quantity:<span> 1</span></p>
                </div><a class="cart-item__remove" href="#"><i class="fal fa-times"></i></a>
              </div>
              <div class="cart-items__total">
                <div class="cart-items__total__price">
                  <h5>Total</h5><span>$73.00</span>
                </div>
                <div class="cart-items__total__buttons"><a class="btn -dark" href="cart.html">View cart</a><a class="btn -red" href="checkout.html">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="drawer drawer-right slide" id="mobile-menu-drawer" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true">
      <div class="drawer-content drawer-content-scrollable" role="document">
        <div class="drawer-body">
          <div class="cart-sidebar">
            <div class="cart-items__wrapper">
              <div class="navigation-sidebar">
                <div class="search-box">
                  <form>
                    <input type="text" placeholder="What are you looking for?" />
                    <button><img src="assets/images/header/search-icon.png" alt="Search icon" /></button>
                  </form>
                </div>
                <div class="navigator-mobile">
                  <ul>
                    <li class="relative"><a class="dropdown-menu-controller" href="#">Home<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="homepages/homepage1.html">Beauty Salon</a></li>
                        <li><a href="homepages/homepage2.html">Makeup Salon</a></li>
                        <li><a href="homepages/homepage3.html">Natural Shop</a></li>
                        <li><a href="homepages/homepage4.html">Spa Shop</a></li>
                        <li><a href="homepages/homepage5.html">Mask Shop</a></li>
                        <li><a href="homepages/homepage6.html">Skincare Shop</a></li>
                      </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a class="dropdown-menu-controller" href="#">Shop<span class="dropable-icon"><i class="fas fa-angle-down"></i></span></a>
                      <ul class="dropdown-menu">
                        <ul class="dropdown-menu__col">
                          <li><a href="shop-fullwidth-4col.html">Shop Fullwidth 4 Columns</a></li>
                          <li><a href="shop-fullwidth-5col.html">Shop Fullwidth 5 Columns</a></li>
                          <li><a href="shop-fullwidth-left-sidebar.html">Shop Fullwidth Left Sidebar</a></li>
                          <li><a href="shop-fullwidth-right-sidebar.html">Shop Fullwidth Right Sidebar</a></li>
                        </ul>
                        <ul class="dropdown-menu__col">
                          <li><a href="shop-grid-4col.html">Shop grid 4 Columns</a></li>
                          <li><a href="shop-grid-3col.html">Shop Grid 3 Columns</a></li>
                          <li><a href="shop-grid-sidebar.html">Shop Grid Sideber</a></li>
                          <li><a href="shop-list-sidebar.html">Shop List Sidebar</a></li>
                        </ul>
                        <ul class="dropdown-menu__col">
                          <li><a href="#">Product Detail</a></li>
                          <li><a href="cart.html">Shopping cart</a></li>
                          <li><a href="checkout.html">Checkout</a></li>
                          <li><a href="wishlist.html">Wish list</a></li>
                        </ul>
                        <ul class="dropdown-menu__col -banner"><a href="shop-fullwidth-4col.html"><img src="assets/images/header/dropdown-menu-banner.png" alt="New product banner.html" /></a></ul>
                      </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
                <div class="navigation-sidebar__footer">
                  <select class="customed-select -borderless" name="currency">
                    <option value="usd">USD</option>
                    <option value="vnd">VND</option>
                    <option value="yen">YEN</option>
                  </select>
                  <select class="customed-select -borderless" name="currency">
                    <option value="en">EN</option>
                    <option value="vi">VI</option>
                    <option value="jp">JP</option>
                  </select>
                </div>
                <div class="social-icons ">
                  <ul>
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/"><i class="fab fa-instagram"> </i></a></li>
                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="quick-view-modal">
      <div class="product-quickview">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="product-detail__slide-one">
              <div class="slider-wrapper">
                <div class="slider-item"><img src="assets/images/product/1.png" alt="Product image" /></div>
                <div class="slider-item"><img src="assets/images/product/2.png" alt="Product image" /></div>
                <div class="slider-item"><img src="assets/images/product/3.png" alt="Product image" /></div>
                <div class="slider-item"><img src="assets/images/product/4.png" alt="Product image" /></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="product-detail__content">
              <div class="product-detail__content__header">
                <h5>eyes</h5>
                <h2>The expert mascaraa</h2>
              </div>
              <div class="product-detail__content__header__comment-block">
                <div class="rate"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                <p>03 review</p><a href="#">Write a reviews</a>
              </div>
              <h3>$35.00</h3>
              <div class="divider"></div>
              <div class="product-detail__content__footer">
                <ul>
                  <li>Brand:gucci
                  </li>
                  <li>Product code: PM 01
                  </li>
                  <li>Reward point: 30
                  </li>
                  <li>Availability: In Stock</li>
                </ul>
                <div class="product-detail__colors"><span>Color:</span>
                  <div class="product-detail__colors__item" style="background-color: #8B0000"></div>
                  <div class="product-detail__colors__item" style="background-color: #4169E1"></div>
                </div>
                <div class="product-detail__controller">
                  <div class="quantity-controller -border -round">
                    <div class="quantity-controller__btn -descrease">-</div>
                    <div class="quantity-controller__number">2</div>
                    <div class="quantity-controller__btn -increase">+</div>
                  </div>
                  <div class="add-to-cart -dark"><a class="btn -round -red" href="#"><i class="fas fa-shopping-bag"></i></a>
                    <h5>Add to cart</h5>
                  </div>
                  <div class="product-detail__controler__actions"></div><a class="btn -round -white" href="#"><i class="fas fa-heart"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <!--build:js assets/js/main.min.js-->
  <script src="{{url('public/user')}}/js/jquery-3.5.1.min.js"></script>
  <script src="{{url('public/user')}}/js/parallax.min.js"></script>
  <script src="{{url('public/user')}}/js/slick.min.js"></script>
  <script src="{{url('public/user')}}/js/jquery.validate.min.js"></script>
  <script src="{{url('public/user')}}/js/jquery.modal.min.js"></script>
  <script src="{{url('public/user')}}/js/bootstrap-drawer.min.js"></script>
  <script src="{{url('public/user')}}/js/jquery.countdown.min.js"></script>
  <script src="{{url('public/user')}}/js/main.min.js"></script>
  <!--endbuild-->
</body>

<!-- Mirrored from avitex.vn/theme/eliah/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 10:36:01 GMT -->

</html>