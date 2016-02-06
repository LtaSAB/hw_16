<!DOCTYPE html>
<html lang="ru">
<head>
       <title>Шампунь ежедневного использования</title>
        <?php include 'blocks/meta.php' ;?>
</head>
<body>
<div class="wrapper">
    <header class="h-page">
        <?php require 'blocks/header.php'; ?>
    </header>
    <main class="m-page">
        <div class="describe-full shampoo-everyday-using">
             <div class="container-fluid">
<?php
    include('blocks/products-list.php');
    $id = $_GET['id'];
?>
                 <h2><?php echo $products[$id]['name'] ;?></h2>
                 <div class="description-product-top clearfix">
                     <div class="product-icon big-icon col-xs-12 col-sm-6">
                         <img src="img/shampoo-big-icon-1.jpg" alt="Шампунь ежедневного пользования">
                     </div>
                     <div class="product-parameters col-xs-12 col-sm-6 clearfix">
                         <dl class="clearfix">
                             <dt>Раздел: </dt>
                             <dd>Косметология</dd>
                             <dt>Объем / Вес:</dt>
                             <dd><?php echo $products[$id]['size'];?></dd>
                             <dt>Кол-во очков:</dt>
                             <dd>14
                                 <ul>
                                     <li><a href="#" class="fa fa-star"></a></li>
                                     <li><a href="#" class="fa fa-star"></a></li>
                                     <li><a href="#" class="fa fa-star"></a></li>
                                     <li><a href="#" class="fa fa-star"></a></li>
                                     <li><a href="#" class="fa fa-star"></a></li>
                                 </ul>
                             </dd>
                             <dt>Отзывов:</dt>
                             <dd> 15</dd>
                         </dl>
                         <span class="price">
                             <span class="new-price"><?php echo $products[$id]['newPrice'];?> грн.</span>
                             <span class="old-price"><?php echo $products[$id]['oldPrice'];?> грн.</span>
                         </span>
                         <span class="buy-less"><span>Хотите купить дешевле?</span> Позвоните представителю интернет-магазина.</span>
                         <a href="#" class="button">Купить</a>
                         <ul class="social-share">
                             <li>
                                 <dl>
                                     <dt>
                                         <a class="vkontakte-share" href="#">
                                             <span>В</span>Это интересно</a>
                                     </dt>
                                     <dd>1</dd>
                                 </dl>
                             </li>
                             <li>
                                 <dl>
                                     <dt>
                                         <a class="facebook-share" href="#">
                                             <span class="fa fa-facebook-square"></span>Я рекомендую</a>
                                     </dt>
                                     <dd>0</dd>
                                 </dl>
                             </li>
                             <li>
                                 <dl>
                                     <dt>
                                         <a class="twitter-share" href="#">
                                             <span class="fa fa-twitter"></span>Твитнуть</a>
                                     </dt>
                                     <dd>0</dd>
                                 </dl>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="dosage-form row clearfix">
                     <div class="ingredients col-xs-12 col-sm-6">
                         <h3>Основные ингредиенты</h3>
                         <p>Доктор Нонна на телеканале домашний в программе спросите повара
                             на телеканале домашний в программе спросите повара Доктор Нонна на
                             телеканале домашний в программе Доктор Нонна на телеканале домашний
                             в программе. Доктор Нонна на телеканале домашний в программе спросите
                             повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                         <a href="#" class="read-more">Развернуть</a>
                     </div>
                     <div class="indication  col-xs-12 col-sm-6">
                         <h3>Показания</h3>
                         <p>Доктор Нонна на телеканале домашний в программе спросите повара
                             на телеканале домашний в программе спросите повара Доктор Нонна на
                             телеканале домашний в программе Доктор Нонна на телеканале домашний
                             в программе. Доктор Нонна на телеканале домашний в программе спросите
                             повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                         <a href="#" class="read-more">Развернуть</a>
                     </div>
                     <div class="full-describe-of-product  col-xs-12 col-sm-6">
                         <h3>Полное описание продукта</h3>
                         <p>Доктор Нонна на телеканале домашний в программе спросите повара
                             на телеканале домашний в программе спросите повара Доктор Нонна на
                             телеканале домашний в программе Доктор Нонна на телеканале домашний
                             в программе. Доктор Нонна на телеканале домашний в программе спросите
                             повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                         <a href="#" class="read-more">Развернуть</a>
                     </div>
                     <div class="use-methods  col-xs-12 col-sm-6">
                         <h3>Способы применения</h3>
                         <p>Доктор Нонна на телеканале домашний в программе спросите повара
                         на телеканале домашний в программе спросите повара Доктор Нонна на
                         телеканале домашний в программе Доктор Нонна на телеканале домашний
                         в программе. Доктор Нонна на телеканале домашний в программе спросите
                         повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                         <a href="#" class="read-more">Развернуть</a>
                 </div>
             </div>
        </div>
            <div class="propositions maybe-recomended">
                <div class="container-fluid">
                    <h2>Вам также может понравиться</h2>
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