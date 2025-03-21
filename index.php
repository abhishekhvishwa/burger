<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive burger website - Code_Slayer</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <div>
                    <img src="assets/img/logo-burger.svg" alt="image">
                </div>

                Burger
            </a>

            <div class="nav__menu" id="nav-menu">
                <!-- /* menu option likha home , recipe , populat delivery , contact */ -->
                <ul class="nav__list">
                    <li>
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>

                    <li>
                        <a href="#recipe" class="nav__link">Recipe</a>
                    </li>

                    <li>
                        <a href="#popular" class="nav__link">Popular</a>
                    </li>

                    <li>
                        <a href="products.php" class="nav__link">Order Now</a>
                    </li>

                    <li>
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                </ul>

                <!--Close botton -->
                <!-- /* cross botton */ -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                    <!-- /* (remixixcon) se online se liya */ -->
                </div>
            </div>

            <!-- toggle button-->
            <!-- /* :: show kar ne ke liye */ -->

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-2-fill"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__title">Love Every <br> Burger</h1>

                    <p class="home__description">
                        We serve the best burgers on the planet,
                        paving the way for cooking and preparing
                        hot, delicious burgers.
                    </p>

                    <a href="#popular" class="button">Bite Now</a>

                    <img src="assets/img/sticker-potatoes.svg" alt="patatoes sticker image" class="home__sticker">
                </div>
                <!--background image add like burger,dish and potato-->
                <div class="home__images">
                    <img src="assets/img/home-burger.png" alt="image" class="home__burger">
                    <img src="assets/img/home-dish.png" alt="image" class="home__dish">

                    <img src="assets/img/home-potato.png" alt="image" class="home__ingredient home__potato-1">
                    <img src="assets/img/home-potato.png" alt="image" class="home__ingredient home__potato-2">
                    <img src="assets/img/home-tomato.png" alt="image" class="home__ingredient home__tomato-1">
                    <img src="assets/img/home-tomato.png" alt="image" class="home__ingredient home__tomato-2">
                    <img src="assets/img/home-lettuce.png" alt="image" class="home__ingredient home__lettuce-1">
                    <img src="assets/img/home-lettuce.png" alt="image" class="home__ingredient home__lettuce-2">

                </div>
            </div>
        </section>

        <!--==================== RECIPE ====================-->
        <section class="recipe section" id="recipe">
            <h2 class="section__title">Our Secret Recipe</h2>

            <div class="recipe__container container grid">
                <div class="recipe__image">
                    <img src="assets/img/recipe-burger.png" alt="burger image" class="recipe__img">
                </div>

                <div class="recipe__data">
                    <!--bread-->
                    <div class="recipe__card">
                        <div class="recipe__box">
                            <img src="assets/img/recipe-bread.png" alt="bread image">
                        </div>

                        <div>
                            <h3 class="recipe__title">Bread</h3>
                            <p class="recipe__discription">Fresh bread , baked to perfection.</p>
                        </div>
                    </div>

                    <!--cheese-->
                    <div class="recipe__card">
                        <div class="recipe__box">
                            <img src="assets/img/recipe-cheese.png" alt="cheese image">
                        </div>

                        <div>
                            <h3 class="recipe__title">Cheese</h3>
                            <p class="recipe__discription">Cheese for a fantastic and healthy future.</p>
                        </div>
                    </div>


                    <!--Meat-->
                    <div class="recipe__card">
                        <div class="recipe__box">
                            <img src="assets/img/recipe-meat.png" alt="Vegetable image">
                        </div>

                        <div>
                            <h3 class="recipe__title">Meat</h3>
                            <p class="recipe__discription">100% pure beef, big and meaty.</p>
                        </div>
                    </div>

                    <!--Vegetable-->
                    <div class="recipe__card">
                        <div class="recipe__box">
                            <img src="assets/img/recipe-vegetable.png" alt="Vegetable image">
                        </div>

                        <div>
                            <h3 class="recipe__title">Vegetable</h3>
                            <p class="recipe__discription">Vegetable full of the essence of nature and organic.</p>
                        </div>
                    </div>

                    <!--sauces-->
                    <div class="recipe__card">
                        <div class="recipe__box">
                            <img src="assets/img/recipe-sauces.png" alt="bread image">
                        </div>

                        <div>
                            <h3 class="recipe__title">Sauces</h3>
                            <p class="recipe__discription">Fresh sauces , delicious for the palate.</p>
                        </div>
                    </div>

                    <!--end-->
                </div>
            </div>
        </section>
        <!--==================== POPULAR ====================-->
        <section class="popular section" id="popular">
            <h2 class="section__title">Most Devoured Burgers</h2>

            <h2 class="section__tittle"></h2>

            <div class="popular__container container grid">
                <article class="popular__card">
                    <img src="assets/img/popular-burger-chicken.png" alt="image" class="popular__img">

                    <h2 class="popular__tittle">Chicken <br> Burger</h2>
                    <span class="popular__price">$6</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="assets/img/popular-burger-meat.png" alt="image" class="popular__img">

                    <h2 class="popular__tittle">Meat <br> Burger</h2>
                    <span class="popular__price">$10</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="assets/img/popular-burger-grill.png" alt="image" class="popular__img">

                    <h2 class="popular__tittle">Grill <br> Burger</h2>
                    <span class="popular__price">$12</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="assets/img/popular-burger-classic.png" alt="image" class="popular__img">

                    <h2 class="popular__tittle">Classic <br> Burger</h2>
                    <span class="popular__price">$8</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="assets/img/popular-burger-big.png" alt="image" class="popular__img">

                    <h2 class="popular__tittle">Big <br> Burger</h2>
                    <span class="popular__price">$15</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </button>
                </article>

                <article class="popular__card">
                    <img src="assets/img/popular-burger-chicken.png" alt="image" class="popular__img">

                    <h2 class="popular__tittle">Lettuce <br> Burger</h2>
                    <span class="popular__price">$5</span>

                    <button class="popular__button">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </button>
                </article>

            </div>
        </section>
        <!-- php code for showing products-->



        <!-- php code for showing products-->


        <!--==================== DELIVERY ====================-->
        <section class="delivery section" id="delivery">
            <div class="delivery__container container grid">
                <div class="delivery__data">
                    <h2 class="section__tittle" style="margin-bottom: 20px;">Fast Delivery</h2>

                    <p class="delivery__discription" style="margin-bottom: 20px;">
                        Place your order for your favorite burger
                        and we will deliver it to your door in minutes,
                        get in touch and don't leave hungry.
                    </p>
                    <a href="products.php" class="button">Order Now</a>
                    <img src="assets/img/sticker-glass.svg" alt="image" class="delivery__sticker">
                </div>

                <img src="assets/img/delivery-burger.png" alt="image" class="deliver__img">

            </div>
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <div class="contact__container contact grid">
                <h2 class="section__title">Contact Now</h2>
                <div class=" contact__content grid">
                    <div class="contact__data grid">
                        <div>
                            <h3 class="contact__title" style="margin-bottom: 20px;">Write Us</h3>
                            <div class="contact__social">

                                <a href="https://api.whatsapp.com/send?phone=51123456789&text=Hello, more information!" target="_blank">
                                    <i class="ri-whatsapp-fill"></i>
                                </a>
                                <a href="https://m.me/bedimcode" target="_blank">
                                    <i class="ri-facebook-circle-fill"></i>
                                </a>
                                <a href="https://t.me/telegram" target="_blank">
                                    <i class="ri-telegram-fill"></i>
                                </a>


                            </div>
                        </div>
                        <div>
                            <h3 class="contact__title" style="margin-bottom: 10px;">Call Us and Order</h3>
                            <address class="contact__info">
                                +91-889-8544-157 <br>
                                +022-01234567
                            </address>
                        </div>
                        <div>
                            <h3 class="contact__title" style="margin-bottom: 10px;">Find us here</h3>
                            <address class="contact__info">
                                Lima - Lotus City - Andheri <br>
                                west jogeshwari - 400102
                            </address>
                        </div>
                    </div>
                    <div class="contact__image">
                        <img src="assets/img/contact-man.png" alt="image" class="contact__img">
                    </div>
                    <img src="assets/img/sticker-burger.svg" alt="img" class="contact__sticker-1">
                    <img src="assets/img/sticker-soda.svg" alt="img" class="contact__sticker-2">
                </div>
            </div>

        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container grid">
            <a href="#" class="footer__logo">Burger</a>
            <div class="footer__content grid">
                <a href="#" class="footer__lin">Terms & Agreements</a>
                <a href="#" class="footer__lin">Privacy Policy</a>

                <div class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank">
                        <i class="ri-instagram-fill"></i>
                    </a>

                    <a href=" https://twitter.com/" target="_blank">
                        <i class="ri-twitter-x-fill"></i>
                    </a>
                </div>
            </div>
        </div>
        <span class="footer__copy">
            &#169; All Rights Reserved By Code_Slayer
        </span>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>


    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>