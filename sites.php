<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Создание сайтов | Soldsite.ru</title>
	<meta charset="UTF-8">
	<meta name="description" content="Gorge Portfolio Template">
	<meta name="keywords" content="personal, portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/download.png" type="image/png">

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="cubeportfolio/css/cubeportfolio.min.css"/>
    <link rel="stylesheet" href="css/colors/red.css" id="color"/>
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Font icons -->
    <link rel="stylesheet" href="icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>
    <link rel="stylesheet" href="icon-fonts/flaticon/flaticon.css" />


</head>
<body>
    <!-- PROGRESSBAR -->
    <div class="progress-header">
        <div class="progress-container">
            <div class="progress-bar" id="progressBar"></div>
        </div>
    </div>

    <!-- PRELOADER -->
    <div class="preloader">
        <span class="disclaimer" style="color: #fff;-webkit-transition: opacity 4000ms ease-in;-moz-transition: opacity 400ms ease-in; transition: opacity 4000ms ease-in;">Для корректной работы сайта, необходимо подключить скрипты.
         Если вы видите данную надпись, настоятельно рекомендуем обновить браузер.</span>
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    <!-- HEADER -->
    <header>
        <a href="" class="header-logo">SOLDSITE.RU</a>
        <a data-modal="#brief" href="#brief" class="site-btn modal-btn modal-btn-top modal-window">Узнать цены</a>
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- FULL MENU -->
    <div class="full-menu">
        <div class="full-inner row">
            <nav class="col-md-8">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="col-md-4 full-contact">
                <ul>
                    <li class="title">Связаться</li>
                    <li><a style="color: #fff" href="mailto:mail@soldsite.ru">mail@soldsite.ru</a></li>
                    <li>
                        <div class="social">
                            <a href="https://vk.com/soldsiteru"><i class="fab fa-vk" aria-hidden="true"></i>  </a>
                            <a href="https://instagram.com/soldsite"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="particles-js"></div>

    <!-- SITE CONTENT -->
    <div class="wrapper">

        <section class="home">
            <div class="home-content">
                <h1 class="hero-title">Создание <br><span>современных</span> сайтов</h1>
                <p class="top_45">Разработка продающих сайтов и лендингов для любого вида бизнеса. <br/><span>Создание</span> <span class="element" data-text1="лендингов." data-text2="интернет-магазинов." data-text3="онлайн-школ." data-text4="журналов и блогов." data-loop="true" data-backdelay="1500"></span></p>
                <div class="social">
                    <a class="text">подпишись</a>
                    <div class="line"></div>

                    <a href="https://vk.com/soldsiteru"><i class="fab fa-vk" aria-hidden="true"></i>  </a>
                    <a href="https://instagram.com/soldsite"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                    
                </div>
            </div>
        </section>

        <div class="cont">
            <!-- WORK AREAS -->
            <section class="titlebar">
                <h2 class="page-title animated fadeIn">Почему <span>Soldsite.ru?</span></h2>
            </section>

            <div class=" row owl-carousel work-areas text-center bottom_90">
                <!-- an area -->
                <div class="area col-md-6 item bottom_30">
                    <i class="flaticon-012-web-design"></i>
                    <h3 class="title">Современный дизайн</h3>
                    <div class="line"></div>
                    <p>Пока у конкурентов сайт из начала 2000, ваш сайт прямиком из 2018.</p>
                </div>
                <!-- an area -->
                <div class="area col-md-6 item bottom_30">
                    <i class="flaticon-016-brainstorm"></i>
                    <h3 class="title" class="title">Консультация</h3>
                    <div class="line"></div>
                    <p>Поможем с любым вопросом.</p>
                </div>
                
                <!-- an area -->
                <div class="area col-md-6 item bottom_30">
                    <i class="flaticon-019-content-design"></i>
                    <h3 class="title" class="title">Вариативность цен</h3>
                    <div class="line"></div>
                    <p>Поможем реализовать проект с любым бюджетом.</p>
                </div>


                <!-- an area -->
                <div class="area col-md-6 item bottom_30">
                    <i class="flaticon-025-graphic-design"></i>
                    <h3 class="title">Мобильные версии</h3>
                    <div class="line"></div>
                    <p>50% трафика идёт с мобильных устройств. Не потеряйте клиента!</p>
                </div>
            </div>



            <section id="portfolio" class="portfolio">
                <!-- <div class="portfolio-filter row">
                    <div data-filter=".digital" class="cbp-filter-item">Digital Works</div>
                    <div data-filter=".photography" class="cbp-filter-item">Photography</div>
                    <div data-filter=".branding" class="cbp-filter-item">Branding</div>
                    <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All Works</div>
                </div> -->
                <div id="grid-container">
                    <!-- Item -->
                    <div class="cbp-item photography">
                        <a class="modal-window" href="#brief">
                            <figure class="fig">
                                <img src="images/0.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="cbp-item digital">
                        <a href="portfolio/work-2.html">
                            <figure class="fig">
                                <img src="images/1.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="cbp-item branding">
                        <a href="portfolio/3.html">
                            <figure class="fig">
                                <img src="images/4.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <!-- Item -->
                    <!-- <div class="cbp-item branding">
                        <a href="portfolio/3.html">
                            <figure class="fig">
                                <img src="images/5.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div> -->
                    
                    <!-- Item -->
                    <!-- <div class="cbp-item digital">
                        <a href="portfolio/work-3.html">
                            <figure class="fig">
                                <img src="images/2.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div> -->
                    <!-- Item -->
                    <!-- <div class="cbp-item branding">
                        <a href="portfolio/3.html">
                            <figure class="fig">
                                <img src="images/3.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div> -->
                    <!-- Item -->
                    <!-- <div class="cbp-item branding">
                        <a href="portfolio/3.html">
                            <figure class="fig">
                                <img src="images/6.jpg" alt="">
                                <figcaption>
                                    <h3>Перейти</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div> -->
                    <!-- Item -->
                    <!-- <div class="cbp-item branding">
                        <a href="portfolio/3.html">
                            <figure class="fig">
                                <img src="images/6.jpg" alt="">
                                <figcaption>
                                    <h3>Vrai Vodka</h3>
                                    <p>Branding </p>
                                </figcaption>
                            </figure>
                        </a>
                    </div> -->

                </div>
                <!-- load more button -->
                <!-- <div id="port-loadMore" class="cbp-l-loadMore-button top_120 bottom_90">
                    <a href="port.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                        <span class="cbp-l-loadMore-defaultText">Загрузить еще (<span class="cbp-l-loadMore-loadItems">2</span>)</span>
                        <span class="cbp-l-loadMore-loadingText">Загружаем...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">Больше не выкладывали</span>
                    </a>
                </div> -->
            </section>

            <hr class="top_120 col-md-8">

            <section class="titlebar">
                <h2 class="page-title">Контакты</h2>
            </section>
            <div class="contact">
                <div class="contact-info text-center col-md-12">
                    <a href="mailto:mail@soldsite.ru">mail@soldsite.ru</a> 
                    <a href="tel:+79130988586">+7 (913) 098-85-86</a> 
                </div>
                <div class="row bottom_30 offset-md-1 col-md-10">
                    <div class="contact-button col-md-5" style="margin: 0 auto; text-align: center">
                        <a data-modal="#contact" href="#contact" class="top_60 site-btn modal-btn modal-window">Связаться</a>
                    </div>
                    <div class="contact-button bottom_30 col-md-5" style="margin: 0 auto; text-align: center">
                        <a data-modal="#brief" href="#brief" class="top_60 site-btn modal-btn modal-window">Заказать</a>
                    </div>
                </div>
            </div>
        </div> <!-- cont end -->
    </div> <!-- wrapper end -->

    <footer>
       <div class="cont">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 copyright">
                <a href="" class="header-logo" style="margin-top: 10px;">SOLDSITE.RU</a>
            </div>
            <div class="col-md-4 d-sm-none d-md-block">
                <div class="social">
                    <a href="https://vk.com/soldsiteru"><i class="fab fa-vk" aria-hidden="true"></i>  </a>
                    <a href="https://instagram.com/soldsite"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                <a href="mailto:mail@soldsite.ru">
                    <strong>Связаться</strong><br>
                    <p>mail@soldsite.ru</p>
                </a>
            </div>
        </div>
    </footer>
    <div>
        <div class="modal" id="brief">
            <div>
                <a href="#close" class="close-modal"><i class="fas fa-times fa-3x" style="color: #fff; position: absolute;right: 40px"></i></a>

                <div class="cont">
                    <section class="titlebar modal-title">
                        <h1 class="page-title">Заполните бриф</h1>
                    </section>

                    <section class="contact col-md-8 offset-md-2">

                        <div class="contact-form bottom_120">
                            <form class="row" id="form">
                                <div class="option-div">

                                 <div class="col-md-12 box-e">
                                    <input class="option-input option-com" type="checkbox" id="check-total">
                                    <label class="option-label" for="check-total">Мне нужны <span class="custom-underline">все услуги, представленные ниже</span></label>
                                </div>

                                <div class="col-md-12 total-none">
                                    <input class="option-input" type="radio" id="radio0"
                                    name="contact" value="phone" onclick="updatePriceSel(this, 0)"  checked="true">
                                    <label class="option-label" for="radio0">Мне не нужен сайт</label>
                                </div>

                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="radio" id="radio1"
                                    name="contact" value="phone" onclick="updatePriceSel(this, 8900)">
                                    <label class="option-label" for="radio1">Мне нужен <span class="custom-underline">одностраничный сайт</span></label>
                                </div>

                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="radio" id="radio2"
                                    name="contact" value="phone" onclick="updatePriceSel(this, 12900)">
                                    <label class="option-label" for="radio2">Мне нужен <span class="custom-underline">сайт с возможностью редактирования</span></label>
                                </div>

                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="radio" id="radio2"
                                    name="contact" value="phone" onclick="updatePriceSel(this, 14900)">
                                    <label class="option-label" for="radio2">Мне нужен <span class="custom-underline">интернет-магазин</span></label>
                                </div>

                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="checkbox" id="check1" onclick="updatePrice(this, 4900)">
                                    <label class="option-label" for="check1">Мне нужна <span class="custom-underline">SEO оптимизация сайта</span></label>
                                </div>



                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="checkbox" id="check3" onclick="updatePrice(this, 3900)">
                                    <label class="option-label" for="check3">Мне нужна <span class="custom-underline">настройка контекстной рекламы Google Adwords</span></label>
                                </div>

                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="checkbox" id="check4" onclick="updatePrice(this, 3900)">
                                    <label class="option-label" for="check4">Мне нужна <span class="custom-underline">настройка контекстной рекламы Яндекс.Директ</span></label>
                                </div>

                                <div class="col-md-12 box-e total-none">
                                    <input class="option-input" type="checkbox" id="check2" onclick="updatePrice(this, 2900)">
                                    <label class="option-label" for="check2">Мне нужен <span class="custom-underline">логотип</span></label>
                                </div>
                            </div>

                            <div class="col-md-12 total-price total-none">
                                <div>
                                    <h3><br/>Стоимость работ: </h3>
                                    <h2 class="price" id="price">0</h2>
                                    <h2 class="price">р.</h2>
                                    <h3><br/><br/> Для заказа заполните контактные данные ниже и мы свяжемся.</h3>
                                </div>
                            </div>

                            <div class="col-md-12 total-price com-price display-none">
                                <div>
                                    <h3><br/>Стоимость работ: </h3>
                                    <h2 class="price"><s>55555 р.</s> 444444 р.</h2>
                                    <h3><br/><br/> Для заказа заполните контактные данные ниже и мы свяжемся.</h3>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input class="inp" type="text" placeholder="Имя">
                            </div>
                            <div class="col-md-6">
                                <input class="inp" type="text" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Сообщение" rows="6" class="col-md-12 form-message"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" value="Отправить" class="site-btn2">
                            </div>
                        </form>     
                        <div class="top_60" style="margin: 0 auto; text-align: center">
                            <a href="#close" class="top_60 site-btn modal-btn close-modal">Вернуться на сайт</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div>
        <div class="modal" id="contact">
            <div>
                <a href="#close" class="close-modal"><i class="fas fa-times fa-3x" style="color: #fff; position: absolute;right: 40px"></i></a>

                <div class="cont">
                    <section class="titlebar modal-title">
                        <h1 class="page-title">Контакты</h1>
                    </section>

                    <section class="contact col-md-8 offset-md-2">

                        <div class="contact-form bottom_120">

                            <div class="col-md-6">
                                <input class="inp" type="text" placeholder="Имя">
                            </div>
                            <div class="col-md-6">
                                <input class="inp" type="text" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Сообщение" rows="6" class="col-md-12 form-message"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <input type="submit" value="Отправить" class="site-btn2">
                            </div>
                        </form>     
                        <div class="top_60" style="margin: 0 auto; text-align: center">
                            <a href="#close" class="top_60 site-btn modal-btn close-modal">Вернуться на сайт</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="js/main.js"></script>
    <!-- <script src="js/jquery-2.1.4.min.js"></script> -->
    <script src="cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <!-- <script src="js/typed.js"></script> -->
    <!-- <script src="js/jquery.hover3d.js"></script> -->
    <!-- <script src="js/jquery.cookie-1.4.1.min.js"></script> -->


</body>

</html>
