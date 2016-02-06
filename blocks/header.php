
<div class="nav-section">
    <div class="container-fluid">
            <form action="#" method="get" class="clearfix">
                <input type="search" placeholder="Поиск" name="main-search">
                <input type="image" src="../img/search.png" alt="Поиск">
            </form>
            <nav >
                <a class="nav-btn visible-xs visible-sm" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
<?php include ('sidebar.php');?>
                <ul class="hidden-xs hidden-sm clearfix">
<?php foreach ($menu as $li){
    if($li['class']='dropdown_point') {?>
                    <li class="<?php echo "$li[class]";?>">
                        <a href="<?php echo "$li[url]";?>"><?php echo "$li[title]" ;?></a>

<!--              Не получилось сделать выпадающее меню, выдавало ошибку(Invalid argument supplied for foreach() in)-->
<!--                        подскажите, где неправильно-->


<!--                        <ul class="upper_menu">-->
<!--                            <li>-->
<!--                                <ul>-->
<!--                                    --><?php //foreach ($li['left'] as $left_sub_item) :?>
<!--                                        <li>-->
<!--                                            <a href="--><?php //echo "$left_sub_item[url]";?><!--">--><?php //echo "$left_sub_item[title]" ;?><!--</a>-->
<!--                                        </li>-->
<!--                                    --><?php //endforeach;?>
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <ul>-->
<!--                                    --><?php //foreach ($li['right'] as $right_sub_item) :?>
<!--                                        <li>-->
<!--                                            <a href="--><?php //echo "$right_sub_item[url]";?><!--">--><?php //echo "$right_sub_item[title]" ;?><!--</a>-->
<!--                                        </li>-->
<!--                                    --><?php //endforeach;?>
<!--                                </ul>-->
<!--                            </li>-->
<!---->
<!---->
<!--                        </ul>-->
                    </li>

<?php
    ;} else {
?>
                    <li>
                        <a href="<?php echo "$li[url]";?>"><?php echo "$li[title]" ;?></a>
                    </li>
<?php
    ;}
}
?>
                </ul>
            </nav>
            <a href="#" class="fa fa-shopping-cart"></a>
    </div>
</div>