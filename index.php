<?php
session_start();
require 'src/auth.php';
require 'src/subscription.php';
require 'src/reg.php';
// Авторизуємо користувача, якщо в запиті є логін і пароль
if (isset($_POST['login']) && isset($_POST['password'])) {
    login($_POST['login'], $_POST['password']);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Plant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/css.css">
</head>

<body>
    <section class="modal modal-auth">
        <div class="overlay">
            <div class="modal-content">
                <form method="post">
                    <h2 class="form-text">Authorization form</h2>
                    <input class="modal-input form-input" type="text" name="login" id="inputPassword" maxlength="15" minlength="4" placeholder="Username" required>
                    <input class="modal-input form-input" type="password" name="password" id="inputPassword" minlength="5" id="password" placeholder="Password" required>
                    <button class="button" type="submit">Sing in</button>

                    <div class="modal-descr">
                        <p>Don't have an account?&nbsp;&nbsp;</p>
                        <a href="#">Sign up!</a>
                    </div>
                </form>
                <div class="close">
                    <img src="img/close.png" alt="close">
                </div>
            </div>
        </div>
    </section>

    <section class="modal modal-regist">
        <div class="overlay">
            <div class="modal-content">
                <form id="reg-form">
                    <h2 class="form-text">Registration form</h2>
                    <input class="modal-input form-input" type="email" name="email" minlength="4" placeholder="Email" required>
                    <input class="modal-input form-input" type="password" name="password" minlength="6" id="password" placeholder="Password" required>
                    <input class="modal-input form-input" type="password" name="password" minlength="6" id="password" placeholder="Repeat password" required>
                    <button class="button" type="submit" id="singUp">Sing Up</button>
                    <div class="modal-descr">
                        <p>Have an account?&nbsp;&nbsp;</p>
                        <a href="#">Login!</a>
                    </div>
                </form>
                <div class="close">
                    <img src="img/close.png" alt="close">
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="wrapper">
            <nav class="nav">
                <div class="nav-menu">
                    <div id="burger">
                        <span></span><span></span><span></span>
                    </div>
                    <ul class="menu">

                        <li><a href="#">Home Page</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="login.php">Log in</a></li>
                    </ul>
                </div>
                <div class="logo"><a href="#">Plant</a></div>
                <ul class="links">
                    <li class="link"><a href="#home">Home</a></li>
                    <li class="link"><a href="#collection">Collection</a> </li>
                    <li class="link"><a href="#about">About Us</a> </li>
                    <li class="link"><a href="#blog">Blog</a> </li>
                    <li class="link"><a href="#contact">Contact</a> </li>
                    <li class="link"><a href="./portfolio/index.html">Portfolio</a> </li>
                </ul>
                <div class="log">
                    <?php if (isAuthorized()) : ?>
                        <a href="login.php">Admin</a>
                        <a href="logout.php">Sign out</a>
                    <?php else : ?>
                        <a href="#" id="login">Login</a>
                        <a href="#" id="singup">Sing Up</a>
                    <?php endif; ?>
                </div>
            </nav>
            <div class="header">
                <div class="header-text">
                    <h1 class="header-title" id="home">Growing<br> Beautiful Plants at Home</h1>
                    <p class="header-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, tempor,
                        accumsan sit amet nunc cursus. Nec tristique at in erat lectus mas sa diam. Lectus elit, nulla
                        elementum fringilla at.</p>
                    <button class="button button-header">Learn More</button>
                    <div class="succes">
                        <div class="delivery">
                            <p>2000+</p>
                            <p>Delivery</p>
                        </div>
                        <div class="customers">
                            <p>1200+</p>
                            <p>Customers</p>
                        </div>
                        <div class="product">
                            <p>1000+</p>
                            <p>Product</p>
                        </div>
                    </div>
                </div>
                <div class="header-img">
                    <img src="img/klipartz5.png" alt="kl">
                </div>
            </div>
        </div>
        <div class="leaf">
            <img src="img/leaf.png" alt="img">
        </div>
    </header>
    <section class="collection" id="collection">
        <div class="wrapper">
            <div class="collection-text">
                <h2 class="collection-title">We have lots of plants collection for you and your family</h2>
                <a href="#" class="collection-seeall">See all collection</a>
            </div>
            <div class="collection-img">
                <img src="img/Frame187.png" alt="img">
                <img src="img/Frame186.png" alt="img">
                <img src="img/Frame185.png" alt="img">
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="wrapper">
            <div class="about-img">
                <img src="img/Group289.png" alt="img">
            </div>
            <div class="about-text">
                <div class="about-header">About Us</div>
                <div class="about-title">Continue to Develop to<br> Became Global Company</div>
                <p class="about-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, tempor, accumsan sit
                    amet nunc cursus. Nec tristique at in erat lectus mas sa diam. Lectus elit, nulla elementum
                    fringilla at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, tempor, accumsan sit amet
                    nunc cursus. Nec tristique at in erat lectus mas sa diam. Lectus elit, nulla elementum fringilla at.
                </p>
                <p class="about-descr about-descr-bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu,
                    tempor, accumsan sit
                    amet nunc cursus. </p>
                <button class="button button-about">Read More</button>
            </div>
        </div>
    </section>
    <section class="bestproduct" id="blog">
        <div class="wrapper">
            <h2 class="bestproduct-title">Our Best Product</h2>
            <ul class="bestproduct-links">
                <li class="bestproduct-link"><a href="#">New Plants</a></li>
                <li class="bestproduct-link"><a href="#">New Arrivals</a></li>
                <li class="bestproduct-link"><a href="#">Sale</a></li>
            </ul>
            <div class="bestproduct-gallary">
                <div class="bestproduct-gallary-item">
                    <img src="img/bestproduct1.png" alt="img">
                    <h2 class="gallary-item_name">Outdoor Plant</h2>
                    <div class="gallary-stars">
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                    </div>
                    <p class="price">$50.00</p>
                </div>
                <div class="bestproduct-gallary-item">
                    <img src="img/bestproduct2.png" alt="img">
                    <h2 class="gallary-item_name">Monstera Plant</h2>
                    <div class="gallary-stars">
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                    </div>
                    <p class="price">$50.00</p>
                </div>
                <div class="bestproduct-gallary-item">
                    <img src="img/bestproduct3.png" alt="img">
                    <h2 class="gallary-item_name">Pottel Plant</h2>
                    <div class="gallary-stars">
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                    </div>
                    <p class="price">$50.00</p>
                </div>
                <div class="bestproduct-gallary-item">
                    <img src="img/bestproduct4.png" alt="img">
                    <h2 class="gallary-item_name">Indoor Plant</h2>
                    <div class="gallary-stars">
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                        <div class="gallary-star"><img src="img/star.png" alt="star"></div>
                    </div>
                    <p class="price">$50.00</p>
                </div>
            </div>
            <button class="button button-bestproduct">View All</button>
        </div>
    </section>
    <section class="says">
        <div class="wrapper">
            <div class="says-text">
                <h2 class="says-title">What Our Customers Says</h2>
                <p class="says-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, tempor, accumsan sit
                    amet nunc cursus. Nec tristique at in erat lectus mas sa diam. Lectus elit, nulla elementum
                    fringilla at.</p>
                <div class="says-review">
                    <div class="says-review-author">
                        <div class="author-img">
                            <img src="img/author.png" alt="img">
                        </div>
                        <div class="author-descr">
                            <h3 class="author-name">Hasanul Islam</h3>
                            <p class="author-position">Marketing CEO</p>
                        </div>
                        <div class="apostrophe">
                            <img src="img/apostrophe.png" alt="img">
                        </div>
                    </div>
                    <p class="says-review-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, tempor,
                        accumsan sit amet nunc cursus. Nec tristique at in erat lectus mas sa diam. Lectus elit, nulla
                        elementum fringilla at.</p>
                </div>
            </div>
            <div class="says-img">
                <img src="img/says.png" alt="img">
            </div>
        </div>
    </section>
    <section class="subscribe" id="contact">
        <div class="wrapper">
            <div class="subscribe-form">
                <h2 class="subscribe-title">Subscribe Our Newsletter</h2>
                <p class="subscribe-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, at tempor,
                    accumsan sit amet nunc cursus. </p>
                <form class="form" id="subscription_form">
                    <input class="form-input" type="email" name="email" placeholder="Enter mail...">
                    <button type="submit" class="button form-button">Subscribe</button>
                </form>
                <img class="subscribe-img" src="img/subscribe.png" alt="img">
            </div>
        </div>
    </section>
    <section class="instagram">
        <div class="wrapper">
            <h2 class="instagram-title">Follow Us on Instagram</h2>
            <p class="instagram-descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eu, tempor, accu msan
                sit amet nunc cursus. Nec tristique at in erat lectus</p>

            <div class="instagram-gallery">
                <div class="instagram-gallery-item">
                    <a href="#">
                        <img src="img/instagram1.png" alt="img">
                    </a>
                </div>
                <div class="instagram-gallery-item">
                    <a href="#">
                        <img src="img/instagram2.png" alt="img">
                    </a>
                </div>
                <div class="instagram-gallery-item">
                    <a href="#">
                        <img src="img/instagram3.png" alt="img">
                    </a>
                </div>
                <div class="instagram-gallery-item">
                    <a href="#">
                        <img src="img/instagram4.png" alt="img">
                    </a>
                </div>
                <div class="instagram-gallery-item">
                    <a href="#">
                        <img src="img/instagram5.png" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer-content">
                <h2 class="footer-title">Plant</h2>
                <p class="footer-descr">Lorem ipsum dolor sit amet, consectetur adi piscing elit. Diam nibh posuere duis
                    eu non sit integer at placerat amet.</p>
                <div class="footer-icon">
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="img/icon-facebook.png" alt="img">
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <img src="img/icon-twitter.png" alt="img">
                    </a>
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="img/icon-instagram.png" alt="img">
                    </a>



                </div>
            </div>
            <div class="footer-links">
                <ul class="links-items">
                    <h2 class="footer-title">Navigation</h2>
                    <li style="margin-top: 15px;">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Help & Support</a>
                    </li>
                    <li>
                        <a href="#">Product</a>
                    </li>
                </ul>
                <ul class="links-items">
                    <h2 class="footer-title">About Us</h2>
                    <li style="margin-top: 15px;">
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Address</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#"> About Us</a>
                    </li>
                </ul>
                <ul class="links-items">
                    <h2 class="footer-title">Help</h2>
                    <li style="margin-top: 15px;">
                        <a href="#">Coustomers Services</a>
                    </li>
                    <li>
                        <a href="#">FAQs</a>
                    </li>
                    <li>
                        <a href="#">We Are Hiring</a>
                    </li>
                    <li>
                        <a href="#">Returns</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/sub.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/reg.js"></script>
</body>

</html>