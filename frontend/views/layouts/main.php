<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
//use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

//use common\widgets\Alert;

AppAsset::register($this);
$bundle = AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
                <meta charset="<?= Yii::$app->charset ?>">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <?= Html::csrfMetaTags() ?>
                <title><?= Html::encode($this->title) ?></title>
                <script type="text/javascript">
                        var baseurl = "<?php print \yii\helpers\Url::base() . "/index.php/"; ?>";
                        var basepath = "<?php print \yii\helpers\Url::base(); ?>";

                </script>
                <?php $this->head() ?>
        </head>
        <body>
                <?php $this->beginBody(); ?>

                <header>
                        <div class="top_links">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-xs-12">
                                                        <ul>
                                                                <li><a href="#" class="active">Home</a></li>
                                                                <li class="dropdown collection_drop">
                                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collections <span class="caret"></span></a>
                                                                        <ul class="dropdown-menu">
                                                                                <li><a href="#">Action</a></li>
                                                                                <li><a href="#">Another action</a></li>
                                                                                <li><a href="#">Something else here</a></li>
                                                                        </ul>
                                                                </li>
                                                                <li><a href="#">Blog</a></li>
                                                                <li><a href="#">About Us</a></li>
                                                                <li><a href="#">Contact</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>


                        <div class="menu">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-xs-12 col-sm-3">
                                                        <div class="logo">
                                                                <img src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/logo.png">
                                                                <div class="items hidden-lg hidden-md hidden-sm">
                                                                        <ul class="list-inline list-unstyled">
                                                                                <li class="has_dropdown "><a class="mycart" href="javascript:void(0)"> <button class="btn btn-default items_btn">Items <img class="cart_bag" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/cartbag.png">


                                                                                                        <div class="ng_dropdown cart_box" id="cart_box"  >

                                                                                                                <div class="drop_cart"><div class="my_cart_item cart_product_detail cart_item">
                                                                                                                                <img src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/cart_img.png">
                                                                                                                                <h3>demo</h3>
                                                                                                                                <p><span>Qty:</span>	1</p>
                                                                                                                                <p><span>Price:</span>

                                                                                                                                        <i class="fa fa-inr"></i>3750.00</p>
                                                                                                                                <div class="clearfix"></div>
                                                                                                                                <div class="remove_item" canname="anaya" cartid="342"><a class="cart_close1">Remove</a></div>
                                                                                                                        </div>

                                                                                                                        <div class="sub_total">
                                                                                                                                <div class="pull-left">ORDER SUB TOTAL</div>
                                                                                                                                <div class="pull-right"><i class="fa fa-inr"></i>3750.00</div>
                                                                                                                                <div class="clearfix"></div>
                                                                                                                        </div>
                                                                                                                        <a class="btn-dark btn-full" href="javascript:void(0)">VIEW SHOPPING BAG / CHECKOUT</a>
                                                                                                                        <div class="text-center"><a class="btn-continue" href="javascript:void(0)">CONTINUE SHOPPING</a></div></div>


                                                                                                        </div>



                                                                                                </button></a>

                                                                                </li>
                                                                        </ul>

                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                        <div class="search_fld ">
                                                                <div class="dd hidden-xs">
                                                                        <select name="pro-dropdown" class="pro-dropdown categ_btn hidden-xs">
                                                                                <option>All Categories</option>
                                                                                <option value="1">One</option>
                                                                                <option value="2">Two</option>
                                                                                <option value="3">Three</option>
                                                                        </select>
                                                                </div>
                                                                <div class="form-group form_serach">
                                                                        <input type="text" class="search_box" placeholder="Search Product Here">

                                                                </div>
                                                                <button type="submit" class="btn btn-default search_btn"><i class="fa fa-search"></i></button>
                                                        </div>

                                                </div>
                                                <div class="col-xs-12 col-sm-2">
                                                        <div class="items hidden-xs">
                                                                <ul class="list-inline list-unstyled">
                                                                        <li class="has_dropdown "><a class="mycart" href="javascript:void(0)"> <button class="btn btn-default items_btn">Items <img class="cart_bag" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/cartbag.png">

                                                                                                <div class="ng_dropdown cart_box" id="cart_box"  >

                                                                                                        <div class="drop_cart"><div class="my_cart_item cart_product_detail cart_item">
                                                                                                                        <img src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/cart_img.png">
                                                                                                                        <h3>demo</h3>
                                                                                                                        <p><span>Qty:</span>	1</p>
                                                                                                                        <p><span>Price:</span>

                                                                                                                                <i class="fa fa-inr"></i>3750.00</p>
                                                                                                                        <div class="clearfix"></div>
                                                                                                                        <div class="remove_item" canname="anaya" cartid="342"><a class="cart_close1">Remove</a></div>
                                                                                                                </div>

                                                                                                                <div class="sub_total">
                                                                                                                        <div class="pull-left">ORDER SUB TOTAL</div>
                                                                                                                        <div class="pull-right"><i class="fa fa-inr"></i>3750.00</div>
                                                                                                                        <div class="clearfix"></div>
                                                                                                                </div>
                                                                                                                <a class="btn-dark btn-full" href="javascript:void(0)">VIEW SHOPPING BAG / CHECKOUT</a>
                                                                                                                <div class="text-center"><a class="btn-continue" href="javascript:void(0)">CONTINUE SHOPPING</a></div></div>


                                                                                                </div>

                                                                                        </button></a>

                                                                        </li>
                                                                </ul>

                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </header>




                <?= $content ?>

                <section class="newsletter">
                        <div class="container">
                                <div class="row">

                                        <div class="col-md-4 col-sm-6 col-xs-6 six">
                                                <img class="min img-responsive" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/logo.png">
                                                <h6 class="hid">© Copyright 2016 Master mbbs.
                                                        All Rights Reserved
                                                        Developed By Intersmart</h6>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 six">
                                                <h4>CONTACT DETAILS</h4>
                                                <ul>
                                                        <li><a href="#">Home</a></li>
                                                        <li><a href="#">About Us</a></li>
                                                        <li><a href="#">Services</a></li>
                                                        <li><a href="#">Contact Us</a></li>
                                                        <li><a href="#">Login</a></li>
                                                        <li><a href="#">Register</a></li>
                                                </ul>
                                        </div>
                                        <div class="col-md-2 col-sm-6 col-xs-6 six">
                                                <h4>Find Us On</h4>
                                                <h3><a href="#">Facebook</a></h3>
                                                <h3><a href="#">Google+</a></h3>
                                                <h3><a href="#">Twitter</a></h3>
                                                </ul>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-6 six">
                                                <h4>CONTACT DETAILS</h4>
                                                <p>Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit, sed do
                                                        info@mastermbbs.com</p>
                                                <p>+90 123 45 67, +90 123 45 68</p>
                                                <h6 class="show">© Copyright 2016 Master mbbs.
                                                        All Rights Reserved
                                                        Developed By Intersmart</h6>
                                        </div>

                                </div>
                        </div>
                </section>

        </body>
</html>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
