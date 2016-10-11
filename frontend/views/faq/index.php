
<section class="content">
    <div class="container">
        <div class="row">
            <?= $this->render('../layouts/_leftmenu'); ?>
            <div class="main_content col-xs-12 col-sm-9" id="content">
                <div class="faq">
                    <h2>Faq</h2>
                    <?php
                    if ($model) {
                            $i = 1;
                            foreach ($model as $faq) {
                                    ?>
                                    <span><?= $i; ?></span><h4><?= $faq->question ?></h4>
                                    <p><?= $faq->answer ?> </p>
                                    <?php
                                    $i++;
                            }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

</section>