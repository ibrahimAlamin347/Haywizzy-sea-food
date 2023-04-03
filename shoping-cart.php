<?php require "includes/header1.php"?>

<title>Haywizzy online Sea Food | Your cart</title>

    <?php require "includes/header2.php"?>
    <?php require "includes/humbergerMobileMenu.php"?>
    <?php require "includes/topNav.php"?>

    <section class="hero hero-normal">
    <?php require "includes/categories.php"?>
        <?php require "includes/search.php"?>
          </div>
        </div>
      </div>
    </section>

    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Shopping Cart</h2>
              <div class="breadcrumb__option">
                <a href="index.html">Home</a>
                <span>Shopping Cart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="shoping-cart spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th class="shoping__product">Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="shoping__cart__item">
                      <img src="img/cart/cart1.jpg" alt="" style="width:5em"/>
                      <h5>Tilapia</h5>
                    </td>
                    <td class="shoping__cart__price">&#8358;1500.00</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1" />
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">&#8358;1500.00</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="shoping__cart__item">
                      <img src="img/cart/cart2.jpg" alt="" style="width:5em"/>
                      <h5>Catfish</h5>
                    </td>
                    <td class="shoping__cart__price">&#8358;1500.00</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <input type="text" value="1" />
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">&#8358;1500.00</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__btns">
              <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
              <a href="#" class="primary-btn cart-btn cart-btn-right"
                ><span class="icon_loading"></span> Upadate Cart</a
              >
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__continue">
              <div class="shoping__discount">
                <h5>Discount Codes</h5>
                <form action="#">
                  <input type="text" placeholder="Enter your coupon code" />
                  <button type="submit" class="site-btn">APPLY COUPON</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__checkout">
              <h5>Cart Total</h5>
              <ul>
                <li>Subtotal <span>&#8358;3000.00</span></li>
                <li>Total <span>&#8358;3000.00</span></li>
              </ul>
              <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php require "includes/footer.php"?>