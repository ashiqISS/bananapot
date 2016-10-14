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
                                <li><?= Html::a('About Us', ['/site/static', 'page' => 'about-us']); ?></li>
                                <!--<li><a href="#">About Us</a></li>-->
                                <li><a href="#">Login</a></li>
                                <!--<li><a href="#">Contact</a></li>-->
                                <li><?= Html::a('Contact', ['/contact']); ?></li>
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
        <section class="contact">
            <div class="contact_banner">
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs col-xs-12 col-sm-4">
                            <div class="contact_img">
                                <img class="cont_bnr img-responsive" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/contact_img.jpg">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                            <div class="row">
                                <div class="contact_right_side wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h2>Touch with us</h2>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur ad
                                    </p>
                                    <div class="col-sm-6">
                                        <span class="input input--ruri">
                                            <input class="input__field input__field--ruri" type="text" id="input-26" />
                                            <label class="input__label input__label--ruri" for="input-26">
                                                <span class="input__label-content input__label-content--ruri">Enter Your Name</span>
                                            </label>
                                        </span>

                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input input--ruri">
                                            <input class="input__field input__field--ruri" type="text" id="input-26" />
                                            <label class="input__label input__label--ruri" for="input-26">
                                                <span class="input__label-content input__label-content--ruri">Enter Your Telephone</span>
                                            </label>
                                        </span>

                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input input--ruri">
                                            <input class="input__field input__field--ruri" type="text" id="input-26" />
                                            <label class="input__label input__label--ruri" for="input-26">
                                                <span class="input__label-content input__label-content--ruri">Enter Your User Name</span>
                                            </label>
                                        </span>

                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input input--ruri">
                                            <input class="input__field input__field--ruri" type="text" id="input-26" />
                                            <label class="input__label input__label--ruri" for="input-26">
                                                <span class="input__label-content input__label-content--ruri">Company/Organization</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-12">
                                        <span class="input input--ruri">
                                            <textarea class="form-control input__field input__field--ruri" rows="1"></textarea>
                                            <label class="input__label input__label--ruri" for="input-26">
                                                <span class="input__label-content input__label-content--ruri">Enter Your Message</span>
                                            </label>
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-primary message_btn"><span>Send Message</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <footer class="footer">
            <div class="container">
                <div class="footer_cnt">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 wow fadeIn "data-wow-duration="1.5s" data-wow-delay=".5s">
                            <img class="ft_logo" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/logo.png">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem..</p>
                            <a href="#" class="Read_more">Read More </a>
                            <i class="fa fa-long-arrow-right read_arrow"></i>
                        </div>
                        <div class="footer_midd wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".8s">
                            <div class="col-xs-12 col-sm-2">
                                <h3>Home</h3>
                                <ul class="list-unstyled ">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">Collections</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Our Blog</a></li>
                                    <li><a href="">Faq</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-2 centr_contnt">
                                <ul class="list-unstyled ">
                                    <li><a href="">Security & Privacy</a></li>
                                    <li><a href="">Help</a></li>
                                    <li><a href="">Customer Services</a></li>
                                    <li><?= Html::a('Term Of Use', ['/site/static', 'page' => 'terms-use']); ?></li>
                                    <li><a href="">Term Of Use</a></li>
                                    <li><a href="">Site Map</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-2">
                                <h3>MY ACCOUNT</h3>
                                <ul class="list-unstyled ">
                                    <li><a href="">My Cart</a></li>
                                    <li><a href="">Checkout</a></li>
                                    <li><a href="">CMy account</a></li>
                                    <li><a href="">Order history</a></li>
                                    <li><a href="">My addresses</a></li>
                                </ul>
                            </div>
                        </DIV>
                        <div class="col-xs-12 col-sm-3 wow fadeIn" data-wow-duration="3s" data-wow-delay="1s">
                            <h3>SUBCRIBLE TO OUR NEWSLETTER</h3>
                            <p>Make sure you dont miss interesting happenings by joining our newsletter program.</p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <div class="form-group">
                                        <!--                                    <label class="sr-only" for="exampleInputEmail3">Email address</label>-->
                                        <input type="email" class="form-control email_subscri" id="exampleInputEmail3" placeholder="Enter Email Adress">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary subscribe_btn"><span>Subcrible</span></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="bottom_link">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <p> © 2016 Banana Pot. All Rights Reserved. Made by Intersmart.in</p>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <img class="img-responsive" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/cards.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal_dis">
                <div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><img class="tick" src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/tick.png">Success</h4>
                            </div>
                            <div class="modal-body">
                                <div class="modal_img">
                                    <img src="<?= Yii::getAlias('@web'); ?>/frontend/web/images/combo_img1.jpg">
                                </div>
                                <p>You have added <strong>Consectetur Adipisicing Elit</strong> to your shopping cart!</p>
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#" class="btn modal_btn btn-default"><span>Go To Shopping Bag </span></a></li>
                                    <li><a href="#" class="btn modal_btn btn-default"><span>Proceed To Checkout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <?php $this->endPage() ?>
    </body>
</html>
