<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Акции</title>
    <?php include 'blocks/meta.php' ;?>
</head>
<body>
<div class="wrapper">
    <header class="h-page">
        <?php require 'blocks/header.php'; ?>
    </header>
    <main class="m-page">
        <div class="catalog row">
           <div class="container-fluid">
               <div class="left-sidebar col-xs-6 col-md-3 clearfix">
                   <h2>Каталог</h2>
                   <nav class="catalog-menu">
                       <ul >
                           <li class="dropdown-menu-katalog"><a href="#">Соли и грязи</a>
                               <ul >
                                   <li><a href="#">Дезодорант женский "Фиона"</a></li>
                                   <li><a href="#">Дезодорант женский "Рут"</a></li>
                                   <li><a href="#">Дезодорант женский "Киви"</a></li>
                                   <li><a href="#">Дезодорант женский "Леди"</a></li>
                                   <li><a href="#">Мужской дезодорант "Лорд"</a></li>
                                   <li><a href="#">Женские духи "Леди"</a></li>
                                   <li><a href="#"> Женские духи "Фиона"</a></li>
                                   <li><a href="#"> Женские духи "Монел"</a></li>
                                   <li><a href="#">Женские духи "Киви"</a></li>
                                   <li><a href="#">Женские духи "Рут"</a></li>
                                   <li><a href="#"> Женские духи "1954"</a></li>
                                   <li><a href="#">Мужской лосьон "Лорд"</a></li>
                                   <li><a href="#">Губная помада</a></li>
                                   <li><a href="#">Биологически акт</a></li>
                               </ul>
                           </li>
                           <li class="dropdown-menu-katalog"><a href="#">Кремы и лосьены</a></li>
                           <li class="dropdown-menu-katalog"><a href="#">Парфумения</a></li>
                           <li class="dropdown-menu-katalog"><a href="#">Витамины и бады</a></li>
                           <li class="dropdown-menu-katalog"><a href="#">Чаи</a></li>
                       </ul>
                   </nav>
               </div>
               <div class="right-sidebar col-xs-6 col-md-9 clearfix">
                   <nav class="choose-category clearfix">
                       <ul>
                           <li><a href="#">Новинки</a></li>
                           <li><a href="#"> Акции</a></li>
                           <li><a href="#">Я рекомендую</a></li>
                       </ul>
                   </nav>
                   <section class="clearfix row">
<?php foreach($catalog as $item):?>
                       <article class="col-sm-6  col-md-4">
                           <div class="inner-block">
                               <img src="<?php echo "$item[img]" ;?>" alt="<?php echo "$item[img_alt]" ;?>">
                           </div>
                           <h3>
                               <a href="<?php echo "$item[href]" ;?>"><?php echo "$item[title]" ;?></a>
                           </h3>
                           <span class="price"><?php echo "$item[price]" ;?> грн.</span>
                           <a href="#" class="buy">Купить</a>
                       </article>
<?php endforeach;?>
                   </section>
               </div>
           </div>
        </div>
        <div class="propositions maybe-recomended">
            <div class="container-fluid">
                <h2>Вы смотрели</h2>
                <section class="clearfix row">
                    <article class="col-sm-4">
                        <div class="product-icon ">
                            <img src="img/shampoo-small-icon-1.jpg" alt="Шампунь ежедневного пользования">
                        </div>
                        <h3><a href="#">Шампунь ежедневного пользования</a></h3>
                        <span class="price">280 грн.</span>
                    </article>
                    <article class="col-sm-4">
                        <div class="product-icon">
                            <img src="img/shampoo-small-icon-2.jpg" alt="Шампунь ежедневного пользования">
                        </div>
                        <h3><a href="#">Шампунь ежедневного пользования</a></h3>
                        <span class="price">280 грн.</span>
                    </article>
                    <article class="col-sm-4">
                        <div class="product-icon">
                            <img src="img/shampoo-small-icon-3.jpg" alt="Шампунь ежедневного пользования">
                        </div>
                        <h3><a href="#">Шампунь ежедневного пользования</a></h3>
                        <span class="price">280 грн.</span>
                    </article>
                    <article class="col-sm-4">
                        <div class="product-icon">
                            <img src="img/shampoo-small-icon-1.jpg" alt="Шампунь ежедневного пользования">
                        </div>
                        <h3><a href="#">Шампунь ежедневного пользования</a></h3>
                        <span class="price">280 грн.</span>
                    </article>
                    <article class="col-sm-4">
                        <div class="product-icon">
                            <img src="img/shampoo-small-icon-2.jpg" alt="Шампунь ежедневного пользования">
                        </div>
                        <h3><a href="#">Шампунь ежедневного пользования</a></h3>
                        <span class="price">280 грн.</span>
                    </article>
                </section>
            </div>
        </div>
</main>
<footer class="f-page">
    <div class="container-fluid">
        <?php require 'blocks/footer.php'; ?>
    </div>
</footer>
</div>

</body>
</html>