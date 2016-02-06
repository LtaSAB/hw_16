<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Главная</title>
<?php include 'blocks/meta.php' ;?>


</head>
<body>
<div class="wrapper">
    <header class="h-page">
            <?php require 'blocks/header.php'; ?>

            <div class="slider">
                <div class="container-fluid">
                    <div class="flexslider">
                        <ul class="slides">
<?php foreach($slides as $slide_item): ?>
                            <li>
                                <div class="slider-product">
                                    <h1><?php echo "$slide_item[title]"?></h1>
                                    <a href="<?php echo "$slide_item[href]"?>" class="button">Узнать больше</a>
                                </div>
                                <div class="slider-present-product">
                                    <img src="<?php echo "$slide_item[img]"?>" alt="<?php echo "$slide_item[img_alt]"?>">
                                </div>
                            </li>
<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main class="m-page">
            <div class="news">
                <div class="container-fluid">
                    <h2>Новости</h2>
                    <section class="row clearfix">
                        <?php
                        include 'blocks/sidebar.php';
                        foreach ($news as $article){ ?>
                            <article class="col-xs-6 col-sm-3">
                                <div class="news-photo">
                                     <img src="<?php echo "$article[img]" ;?>" alt="<?php echo "$article[alt]"?>" />
                                </div>
                                <h3><?php echo "$article[preview]" ;?></h3>
                                <a href="<?php echo "$article[href]" ;?>" class="read-more">Подробнее</a>
                            </article>
                        <?php } ?>
                    </section>
                </div>
            </div>
            <div class="recomended">
                <div class="container-fluid">
                    <h2>Я рекомендую</h2>
                    <nav class="choose-category clearfix">
                        <ul>
                            <?php foreach ($recomended as $link){?>
                            <li><a href="<?php echo "$link[href]" ;?>"><?php echo "$link[title]" ;?></a></li>
                            <?php }?>
                        </ul>
                    </nav>
                    <div class="products shampoo row">
                        <div class="top-product col-xs-12 col-sm-4">
<?php foreach($top_product as $item): ;?>
                            <figure>
                                <div class="product-icon big-icon">
                                    <img src="<?php echo "$item[img]" ;?>" alt="<?php echo "$item[alt]" ;?>">
                                </div>
                                <figcaption>
                                    <h3>
                                        <a href="<?php echo "$item[href]" ;?>"><?php echo "$item[name]" ;?></a>
                                    </h3>
                                    <p><?php echo "$item[describe]" ;?></p>
                                    <span class="price"><?php echo "$item[price]" ;?> грн.</span>
                                    <a href="#" class="buy">Купить</a>
                                </figcaption>
                            </figure>
<?php endforeach ;?>
                        </div>
                        <section class="col-xs-12  col-sm-8 row clearfix">
<?php foreach($recomended_products as $item): ;?>
                            <article class=" col-xs-6 col-sm-4">
                                <figure>
                                    <div class="product-icon small-icon">
                                        <img src="<?php echo "$item[img]" ;?>" alt="<?php echo "$item[alt_img]" ;?>">
                                    </div>
                                    <figcaption>
                                        <h3>
                                            <a href="<?php echo "$item[href]" ;?>"><?php echo "$item[name]" ;?></a>
                                        </h3>
                                        <span class="price"><?php echo "$item[price]" ;?> грн.</span></figcaption>
                                </figure>
                            </article>
<?php endforeach ;?>

                        </section>
                    </div>
                </div>
            </div>
            <div class="tv-video">
                <div class="container-fluid">
                    <h2>Телеканал Теледом</h2>
                    <div class="video-section row clearfix">
<?php foreach($video_top as $item): ;?>
                        <div class="video-top col-xs-12 col-sm-6">
                            <video controls preload="none">
                                <source src="<?php echo "$item[href]" ;?>" type='video/ogg; codecs="theora, vorbis"' >
                                <source src="<?php echo "$item[href_alt]" ;?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' >
                                <source src="<?php echo "$item[href_alt1]" ;?>" type='video/webm; codecs="vp8, vorbis"'>
                                Тег video не поддерживается вашим браузером.
                                <a href="<?php echo "$item[href]" ;?>">Скачайте видео</a>
                            </video>
                        </div>
<?php endforeach ;?>
                        <section class="group-of-video col-xs-12 col-sm-6 clearfix">
<?php foreach($video as $item): ;?>
                            <article class="col-xs-6">
                                <video controls preload="none">
                                    <source src="<?php echo "$item[href]" ;?>" type='video/ogg; codecs="theora, vorbis"' >
                                    <source src="<?php echo "$item[href_alt]" ;?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' >
                                    <source src="<?php echo "$item[href_alt1]" ;?>" type='video/webm; codecs="vp8, vorbis"'>
                                    Тег video не поддерживается вашим браузером.
                                    <a href="<?php echo "$item[href]" ;?>">Скачайте видео</a>
                                </video>
                            </article>

<?php endforeach ;?>
                        </section>
                    </div>
                    <div class="videos-category row clearfix">
                        <div class="new-videos col-xs-12 col-sm-6">
                            <h3>Новые видео</h3>
                            <ul>
<?php foreach($new_video as $item):?>
                                    <li><a href="<?php echo "$item[href]" ;?>"><?php echo "$item[name]" ;?></a></li>
<?php endforeach; ?>
                            </ul>

                        </div>
                        <div class="popular-videos col-xs-12 col-sm-6">
                            <h3>Популярные</h3>
                            <ul>
<?php foreach($popular_video as $item):?>
                                    <li><a href="<?php echo "$item[href]" ;?>"><?php echo "$item[name]" ;?></a></li>
<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blockquote-sergey">
                <div class="container-fluid">
                    <div class="quote">
                        <h2>
                            <q>Цель моей жизни - <br/>делать людей счастливыми</q>
                            <span >&ldquo;</span>
                        </h2>
                        <blockquote>В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что даже находясь в декретном
                            отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза больше чем моя зарплата
                            в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для серьезных и амбициозных
                            людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь сотрудничаю ...
                        </blockquote>
                        <a href="#" class="read-more">Узнайте подробнее</a>
                    </div>
                    <img class="sergey-quote" src="img/sergey-quote.png" alt="сергей">
                    <ul class="social-elements big-soc-icon">
                        <li><a class="youtube" href="#">
                            <span class="fa fa-youtube"></span>
                        </a></li>
                        <li>
                            <a class="circle" href="#">
                                <span class="left-circle"></span>
                                <span class="right-circle"></span>
                            </a>
                        </li>
                        <li><a class="vkontakte" href="#">
                                <span>В</span>
                             </a>
                        </li>
                        <li><a class="odnoklassniki" href="#">
                            <span class="fa fa-odnoklassniki"></span>
                        </a></li>
                        <li><a class="facebook" href="#">
                            <span class="fa fa-facebook"></span>
                        </a></li>
                        <li><a class="twitter" href="#">
                            <span class="fa fa-twitter"></span>
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="our-parthner">
                <div class="container-fluid">
                    <h2>Мои партнеры по бизнесу</h2>
                    <div class="about-parthners">
                        <ul class="parthner-describe ">
<?php foreach($my_parthner as $item):?>
                            <li >
                                <div class="inner-block">
                                    <img src="<?php echo "$item[img]" ;?>" alt="<?php echo "$item[alt_img]" ;?>">
                                </div>
                                <span class="name"><?php echo "$item[name]" ;?></span>
                                <span class="post"><?php echo "$item[post]" ;?></span>
                                <span class="location">
                                    <a href="<?php echo "$item[href_map]" ;?>"><?php echo "$item[location]" ;?></a>
                                </span>
                                <ul class="social-elements small-soc-icon">
                                    <li><a class="vkontakte" href="<?php echo "$item[vk]" ;?>">
                                        <span>В</span>
                                    </a>
                                    </li>
                                    <li><a class="odnoklassniki" href="<?php echo "$item[odnoklasniki]" ;?>">
                                        <span class="fa fa-odnoklassniki"></span>
                                    </a></li>
                                    <li><a class="facebook" href="<?php echo "$item[facebook]" ;?>">
                                        <span class="fa fa-facebook"></span>
                                    </a></li>
                                    <li><a class="twitter" href="<?php echo "$item[twitter]" ;?>">
                                        <span class="fa fa-twitter"></span>
                                    </a></li>
                                </ul>
                            </li>
<?php endforeach;?>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="send-request">
                <div class="container-fluid">
                    <h2>Добро пожаловать в команду</h2>
                    <form action="#" method="get">
                        <input type="text" placeholder="Ваше имя" name="name" required>
                        <input type="tel" placeholder="Телефон" name="telephone" required>
                        <input type="email" placeholder="E-mail адрес" name="e-mail" required>
                        <button class="button" type="submit">Присоединяйтесь</button>
                    </form>
                    <a href="#" class="read-more">Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей команде</a>
                </div>
            </div>
            </main>
    <footer class="f-page">
        <div class="container-fluid">
            <span id="contacts"></span>
            <ul class="about-us  clearfix">
                <li class="col-xs-12 col-sm-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                    possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                    deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                    nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                    corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                    assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                    commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Architecto corporis eum possimus quibusdam, quod recusandae tempore
                    voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                    pariatur qui. Animi, commodi inventore.</li>
                <li class="col-xs-12 col-sm-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                    possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                    deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                    nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                    corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                    assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                    commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Architecto corporis eum possimus quibusdam, quod recusandae tempore
                    voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                    pariatur qui. Animi, commodi inventore.
                </li>
            </ul>
            <?php require 'blocks/footer.php'; ?>
        </div>
    </footer>
    </div>
    <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>