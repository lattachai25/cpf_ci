<?php
    $this->db->select("*");
    $this->db->from("beetroots");
    $query = $this->db->get();
    $beetroot = $query->result();
?>

<?php  if($this->session->userdata('lang') === 'th'){ ?>


<div class="wrapper">

        <!-- ========================  Header content ======================== -->

        <section id="page-home" class="header-content">

            <div class="owl-slider owl-slider-fullscreen">

                <!-- === slide item === -->
                <?php foreach($beetroot as $beetroots): ?>
                <div class="item" style="background-image:url(assets/uploads/<?php echo $beetroots->images_show1;?>)">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $beetroots->text_title_th;?></h2>
                            <div class="animated" data-animation="fadeInUp"><?php echo $beetroots->text_title_th;?></div>
                            <div class="animated" data-animation="fadeInUp"><?php echo $beetroots->detel_product_th;?></div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>" class="btn btn-clean">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div> <!--/owl-slider-->
        </section>


        <!-- ========================  News Products  ======================== -->

        <section id="page-interiors" class="cards" style="background-color:#000 !important;">

            <!-- === cards header === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title" style="color:#fff !important;">What's important to you is important to us.</h2>
                        <!-- <div class="text">
                            <p>Fresh products delivered to you every day</p>
                        </div> -->
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="row">

                    <!-- === item === -->
                    <?php foreach($beetroot as $beetroots): ?>
                    <div class="col-md-8">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $beetroots->images_show1;?>)">
                                <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" alt="" />
                            </figcaption>
                            <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    <?php endforeach; ?>

                    <!-- === item === -->
                    <?php foreach($beetroot as $beetroots): ?>
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $beetroots->images_show1;?>)">
                                <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" alt="" />
                            </figcaption>
                            <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    <?php endforeach; ?>
                    <!-- === item === -->

                </div> <!--/row-->

            </div> <!--/container-->
        </section>
        <!-- ======================== News Products ======================== -->
        <section class="owl-icons-wrapper">

            <!-- === header === -->
            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    <?php foreach($beetroot as $beetroots): ?>
                    <a href="<?php base_url();?>Beet_root/view/{{ $beetrootss->id }}">
                        <figure style="padding:10px;">
                            <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" width="100%" alt="">
                            <figcaption> <?php echo $beetroots->text_title_th;?> </figcaption>
                        </figure>
                    </a>
                    <?php endforeach; ?>
                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  beetroots PRODUCTS ======================== -->
        <section id="page-products" class="products" style="background-color:#808080 !important;">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#000 !important;">OUR MEAT PRODUCTS</h2>
                            <!-- <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest beetroots Product</p>
                            </div> -->

                            <!-- === box filters === -->
                            <div id="box-filters" class="box-filters">
                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->

                    <?php foreach($beetroot as $beetroots): ?>
                    <div class="col-xs-6 col-sm-4 item sofa">
                    <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>">
                                        <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" alt="" width="360px" height="210px" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;"><?php echo $beetroots->text_title_th;?></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php endforeach; ?>
                    <!-- === product-item === -->
                </div> <!--/row-->

            </div> <!--/container-->
        </section>

        <!-- ========================  beetroots PRODUCTS ======================== -->

</div>
<?php }if($this->session->userdata('lang') === 'en'){ ?>

    <div class="wrapper">

<!-- ========================  Header content ======================== -->

<section id="page-home" class="header-content">

    <div class="owl-slider owl-slider-fullscreen">

        <!-- === slide item === -->
        <?php foreach($beetroot as $beetroots): ?>
        <div class="item" style="background-image:url(assets/uploads/<?php echo $beetroots->images_show1;?>)">
            <div class="box">
                <div class="container text-center">
                <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $beetroots->text_title_en;?></h2>
                    <div class="animated" data-animation="fadeInUp"><?php echo $beetroots->text_title_en;?></div>
                    <div class="animated" data-animation="fadeInUp"><?php echo $beetroots->detel_product_en;?></div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>" class="btn btn-clean">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div> <!--/owl-slider-->
</section>


<!-- ========================  News Products  ======================== -->

<section id="page-interiors" class="cards" style="background-color:#000 !important;">

    <!-- === cards header === -->

    <header>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title" style="color:#fff !important;">What's important to you is important to us.</h2>
                <!-- <div class="text">
                    <p>Fresh products delivered to you every day</p>
                </div> -->
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">

            <!-- === item === -->
            <?php foreach($beetroot as $beetroots): ?>
            <div class="col-md-8">
                <figure>
                    <figcaption style="background-image:url(assets/uploads/<?php echo $beetroots->images_show1;?>)">
                        <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" alt="" />
                    </figcaption>
                    <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
                </figure>
            </div>
            <?php endforeach; ?>

            <!-- === item === -->
            <?php foreach($beetroot as $beetroots): ?>
            <div class="col-md-4">
                <figure>
                    <figcaption style="background-image:url(assets/uploads/<?php echo $beetroots->images_show1;?>)">
                        <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" alt="" />
                    </figcaption>
                    <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
                </figure>
            </div>
            <?php endforeach; ?>
            <!-- === item === -->

        </div> <!--/row-->

    </div> <!--/container-->
</section>
<!-- ======================== News Products ======================== -->
<section class="owl-icons-wrapper">

    <!-- === header === -->
    <div class="container">

        <div class="owl-icons">

            <!-- === icon item === -->

            <?php foreach($beetroot as $beetroots): ?>
            <a href="<?php base_url();?>Beet_root/view/{{ $beetrootss->id }}">
                <figure style="padding:10px;">
                    <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" width="100%" alt="">
                    <figcaption> <?php echo $beetroots->text_title_en;?> </figcaption>
                </figure>
            </a>
            <?php endforeach; ?>
        </div> <!--/owl-icons-->
    </div> <!--/container-->
</section>

<!-- ========================  beetroots PRODUCTS ======================== -->
<section id="page-products" class="products" style="background-color:#808080 !important;">

    <div class="container">

        <!-- === header title === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title" style="color:#000 !important;">OUR MEAT PRODUCTS</h2>
                    <!-- <div class="text" style="color:#3c3b3b !important;">
                        <p>Our latest beetroots Product</p>
                    </div> -->

                    <!-- === box filters === -->
                    <div id="box-filters" class="box-filters">
                    </div> <!--/box-filters-->

                </div>
            </div> <!--/row-->
        </header>

        <div id="box-filters-results" class="row">

            <!-- === product-item === -->

            <?php foreach($beetroot as $beetroots): ?>
            <div class="col-xs-6 col-sm-4 item sofa">
            <article>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="<?php base_url();?>Beet_root/view/<?php echo $beetroots->id;?>">
                                <img src="assets/uploads/<?php echo $beetroots->images_show1;?>" alt="" width="360px" height="210px" />
                            </a>
                        </div>
                        <div class="text radius">
                            <h2 class="title h4" style="color: #fff !important;"><?php echo $beetroots->text_title_en;?></h2>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
            <!-- === product-item === -->
        </div> <!--/row-->

    </div> <!--/container-->
</section>

<!-- ========================  beetroots PRODUCTS ======================== -->

</div>

<?php }?>