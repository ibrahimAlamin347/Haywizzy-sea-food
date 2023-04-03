<header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li>
                    <i class="fa fa-envelope"></i>
                    haywizzyseafood001@gmail.com
                  </li>
                  <li>Free Shipping for all Order of &#8358;45,500</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="header__top__right">
                <div class="header__top__right__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                </div>
                
                <div class="header__top__right__auth">
                  <a href="login.php"><i class="fa fa-user"></i> Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="header__logo">
              <a href="index.php"><img style="width: 6rem;" src="img/logo.png" alt="logo" /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu">
              <ul>
                <li class="navigation_indicator"><a id="home" href="index.php">Home</a></li>
                <li class="navigation_indicator"><a href="shop-grid.php">Shop</a></li>
                <li class="navigation_indicator"><a href="contact.php">Contact</a></li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li class="shop_details"><a href="shop-details.php">Shop Details</a></li>
                    <li class="shoping_cart"><a href="shoping-cart.php">Shoping Cart</a></li>
                    <li class="check_out"><a href="checkout.php">Check Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="header__cart">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="fa fa-shopping-bag"></i> <span>3</span></a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>

    <script>
    
    const listItems = document.querySelectorAll('.navigation_indicator');
    const home = document.querySelectorAll('#home');

    // if (window.location.href == 'http://localhost/Haywizzy-sea-food/') {
      
    //   home.classList.add('active');
    // } 

listItems.forEach(item => {
  const link = item.querySelector('a');
  const href = link.getAttribute('href');
  const navHref = 'http://localhost/Haywizzy-sea-food/' + href

  if (navHref === window.location.href) {
    item.classList.add('active');
  }
});



    </script>