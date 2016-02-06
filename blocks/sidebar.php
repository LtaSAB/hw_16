<?php
$menu = array(
    array(
        'title' =>'Новости',
        'class'=>'',
        'url' => 'index.php'),
    array(
        'title' =>'Рекомендую',
        'class'=>'dropdown_point',
        'url' => '#',
        'left'=> array(
            array(
                'title' => 'Кондиционер',
                'class'=>'left',
                'url' => 'products.php?#id=0'),
            array(
                'title' => 'Бальзам для век',
                'class'=>'left',
                'url' => '#'),
            array(
                'title' => 'Динамический увлажняющий крем',
                'class'=>'left',
                'url' => '#'),
            array(
                'title' => 'Лосьон для тела "Солярис"',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Очищающее молочко для лица',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Комплект пробников кремов',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Грязевая маска для лица',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Крем для рук и ногтей',
                'class'=>'',
                'url' => '#')
        ),
        'right'=> array(
            array(
                'title' => 'Кондиционер',
                'class'=>'left',
                'url' => '#'),
            array(
                'title' => 'Бальзам для век',
                'class'=>'left',
                'url' => '#'),
            array(
                'title' => 'Динамический увлажняющий крем',
                'class'=>'left',
                'url' => '#'),
            array(
                'title' => 'Кондиционер',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Бальзам для век',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Динамический увлажняющий крем',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Грязевая маска для лица',
                'class'=>'',
                'url' => '#'),
            array(
                'title' => 'Крем для рук и ногтей',
                'class'=>'',
                'url' => '#')
        ),
    ),
    array(
        'title' =>'Приглашаю',
        'class'=>'',
        'url' => '../invitation.php'),
    array(
        'title' =>'Акции',
        'class'=>'',
        'url' => '../promotion.php'),
    array(
        'title' =>'Контакты',
        'class'=>'',
        'url' => '#contacts')
);
$slides = array (
    array(
        'title'=>'Купить продукцию сейчас',
        'href'=>'#',
        'img'=>'img/manager.png',
        'img_alt'=>'менеджер'
    ),
    array(
        'title'=>'Купить продукцию сейчас',
        'href'=>'#',
        'img'=>'img/manager.png',
        'img_alt'=>'менеджер'
    ),
    array(
        'title'=>'Купить продукцию сейчас',
        'href'=>'#',
        'img'=>'img/manager.png',
        'img_alt'=>'менеджер'
    )
);
$news = array(
            array(
        'img'=>'img/news-icon-1.jpg',
        'preview'=>'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
        'href'=>'#',
        'alt'=>'news-1'
    ),
    array(
        'img'=>'img/news-icon-2.jpg',
        'preview'=>'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
        'href'=>'#',
        'alt'=>'news-2'
    ),
    array(
        'img'=>'img/news-icon-3.jpg',
        'preview'=>'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
        'href'=>'#',
        'alt'=>'news-3'
    ),
    array(
        'img'=>'img/news-icon-4.jpg',
        'preview'=>'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"',
        'href'=>'#',
        'alt'=>'news-4'
    )
);
$recomended = array(
    array(
        'title'=>'Соли и грязи',
        'href'=>'#'
    ),
    array(
        'title'=>'Кремы и лосьены',
        'href'=>'#'
    ),
    array(
        'title'=>'Парфюмерия',
        'href'=>'#'
    ),
    array(
        'title'=>'Витамины и бады',
        'href'=>'#'
    ),
    array(
        'title'=>'Чаи',
        'href'=>'#'
    )
);
$recomended_products = array (
    array(
        'img'=>'img/shampoo-1.png',
        'img_alt'=>'шампунь',
        'name'=>'Шампунь ежедневного пользования',
        'href'=>'products.php?id=0',
        'price'=>'267'
    ),
    array(
        'img'=>'img/shampoo-2.png',
        'img_alt'=>'шампунь',
        'name'=>'Кондиционер',
        'href'=>'products.php?id=1',
        'price'=>'567'
    ),
    array(
        'img'=>'img/shampoo-3.png',
        'img_alt'=>'шампунь',
        'name'=>'Бальзам для век',
        'href'=>'products.php?id=2',
        'price'=>'240'
    ),
    array(
        'img'=>'img/shampoo-1.png',
        'img_alt'=>'шампунь',
        'name'=>'Динамический увлажняющий крем',
        'href'=>'products.php?id=3',
        'price'=>'200'
    ),
    array(
        'img'=>'img/shampoo-2.png',
        'img_alt'=>'шампунь',
        'name'=>'Лосьон для тела "Солярис"',
        'href'=>'products.php?id=4',
        'price'=>'260'
    ),
    array(
        'img'=>'img/shampoo-3.png',
        'img_alt'=>'шампунь',
        'name'=>'Очищающее молочко для лица',
        'href'=>'products.php?id=5',
        'price'=>'360'
    ),
);
$top_product = array(
    array('img'=>'img/shampoo-top-1.png',
        'img_alt'=>'шампунь',
        'name'=>'Шампунь ежедневного пользования',
        'href'=>'products.php?id=0',
        'price'=>'267',
        'describe'=>'Доктор Нонна на телеканале домашний в программе
                спросите повара Доктор Нонна на телеканале
                домашний в программе спросите повара Доктор
                Нонна на телеканале домашний в программе Доктор
                Нонна на телеканале домашний в программе...')
);
$video = array (
    array(
        'href'=>'videos/Web-technologies.mp4',
        'href_alt'=>'videos/Web-technologies.ogg',
        'href_alt1'=>'Web-technologies.webm'
    ),
    array(
        'href'=>'videos/Web-technologies.mp4',
        'href_alt'=>'videos/Web-technologies.ogg',
        'href_alt1'=>'Web-technologies.webm'
    ),
    array(
        'href'=>'videos/Web-technologies.mp4',
        'href_alt'=>'videos/Web-technologies.ogg',
        'href_alt1'=>'Web-technologies.webm'
    ),
    array(
        'href'=>'videos/Web-technologies.mp4',
        'href_alt'=>'videos/Web-technologies.ogg',
        'href_alt1'=>'Web-technologies.webm'
    )
);
$video_top =array(
    array(
        'href'=>'videos/Web-technologies.mp4',
        'href_alt'=>'videos/Web-technologies.ogg',
        'href_alt1'=>'Web-technologies.webm'
    )
);
$new_video = array (
    array(
        'name'=>'Шампунь ежедневного пользования (16:54)',
        'href'=>'#'
    ),
    array(
        'name'=>'ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)',
        'href'=>'#'
    ),
    array(
        'name'=>'Анжелика Варум - Я Всегда С Тобой (Official Video)',
        'href'=>'#'
    )
);
$popular_video = array(
    array(
        'name'=>'Шампунь ежедневного пользования (16:54)',
        'href'=>'#'
    ),
    array(
        'name'=>'ПРЕМЬЕРА! Ева Бушмина - Религия  (05:14)',
        'href'=>'#'
    ),
    array(
        'name'=>'Анжелика Варум - Я Всегда С Тобой (Official Video)',
        'href'=>'#'
    )
);
$my_parthner = array(
    array(
        'img'=>'img/parthner-1.jpg',
        'alt_img'=>'Диорнева Татьяна',
        'post'=>'Директор',
        'location'=>'Мариуполь',
        'href_map'=>'#',
        'vk'=>'#',
        'facebook'=>'#',
        'odnoklasniki'=>'#',
        'twitter'=>'#'
    ),
    array(
        'img'=>'img/parthner-2.jpg',
        'alt_img'=>'Проценко Мария',
        'post'=>'Директор',
        'location'=>'Донецк',
        'href_map'=>'#',
        'vk'=>'#',
        'facebook'=>'#',
        'odnoklasniki'=>'#',
        'twitter'=>'#'
    ),
    array(
        'img'=>'img/parthner-1.jpg',
        'alt_img'=>'Диорнева Татьяна',
        'post'=>'Директор',
        'location'=>'Мариуполь',
        'href_map'=>'#',
        'vk'=>'#',
        'facebook'=>'#',
        'odnoklasniki'=>'#',
        'twitter'=>'#'
    ),
    array(
        'img'=>'img/parthner-2.jpg',
        'alt_img'=>'Диорнева Татьяна',
        'post'=>'Директор',
        'location'=>'Черкассы',
        'href_map'=>'#',
        'vk'=>'#',
        'facebook'=>'#',
        'odnoklasniki'=>'#',
        'twitter'=>'#'
    )

);
$catalog = array(
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'267',
        'title'=>'Шампунь ежедневного пользования',
        'href'=>'products.php?id=0'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'567',
        'title'=>'Кондиционер',
        'href'=>'products.php?id=1'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'240',
        'title'=>'Бальзам для век',
        'href'=>'products.php?id=2'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'200',
        'title'=>'Динамический увлажняющий крем',
        'href'=>'products.php?id=3'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'280',
        'title'=>'Лосьон для тела "Солярис"',
        'href'=>'products.php?id=4'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'280',
        'title'=>'Лосьон для тела "Солярис"',
        'href'=>'products.php?id=5'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'267',
        'title'=>'Шампунь ежедневного пользования',
        'href'=>'products.php?id=6'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'567',
        'title'=>'Кондиционер',
        'href'=>'products.php?id=7'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'240',
        'title'=>'Бальзам для век',
        'href'=>'products.php?id=8'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'200',
        'title'=>'Динамический увлажняющий крем',
        'href'=>'products.php?id=9'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'280',
        'title'=>'Лосьон для тела "Солярис"',
        'href'=>'products.php?id=10'
    ),
    array(
        'img'=>'img/sol-icon-1.png',
        'img_alt'=>'Соль',
        'price'=>'280',
        'title'=>'Лосьон для тела "Солярис"',
        'href'=>'products.php?id=11'
    ),
);