<?php
    $this->db->select("*");
    $this->db->from("yogurt");
    $query = $this->db->get();
    $this->db->order_by('id', 'DESC');
    $this->db->limit(4);
    $meat = $query->result();
?>
<?php
    $this->db->select("*");
    $this->db->from("yogurt");
    $this->db->order_by('id', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get();
    $a = $query->result();
?>


<?php
    $this->db->select("*");
    $this->db->from("yogurt");
    $this->db->order_by('id', 'DESC');
    $this->db->limit(5, 1);
    $query = $this->db->get();
    $b = $query->result();
?>


<style>
    .owl-carousel .owl-wrapper, .owl-carousel .owl-item img {
    width: 100%;
    height: 110px !important;
}
</style>



<?php  if($this->session->userdata('lang') === 'th'){ ?>


<div class="wrapper">

        <!-- ========================  Header content ======================== -->

        <section id="page-home" class="header-content">

            <div class="owl-slider owl-slider-fullscreen">

                <!-- === slide item === -->
                <?php foreach($meat as $meats): ?>
                <div class="item" style="background-image:url(assets/uploads/<?php echo $meats->images_show;?>)">
                    <div class="box">
                        <div class="container text-center">
                        <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $meats->text_title_th;?></h2>
                            <div class="animated" data-animation="fadeInUp"><?php echo $meats->text_title_th;?></div>
                            <div class="animated" data-animation="fadeInUp"><?php echo $meats->detel_product_th;?></div>
                            <div class="animated" data-animation="fadeInUp">
                                <a href="<?php base_url();?>yogurt/view/<?php echo $meats->id;?>" class="btn btn-clean">Read more</a>
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
                    <?php foreach($a as $as): ?>
                    <div class="col-md-8">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $as->images_show;?>)">
                                <img src="assets/uploads/<?php echo $as->images_show;?>" alt="" />
                            </figcaption>
                            <a href="<?php base_url();?>yogurt/view/<?php echo $as->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    <?php endforeach; ?>

                    <!-- === item === -->
                    <?php foreach($b as $bs): ?>
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $bs->images_show;?>)">
                                <img src="assets/uploads/<?php echo $bs->images_show;?>" alt="" />
                            </figcaption>
                            <a href="<?php base_url();?>yogurt/view/<?php echo $bs->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
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

                    <?php foreach($meat as $meats): ?>
                    <a href="<?php base_url();?>yogurt/view/{{ $meatss->id }}">
                        <figure style="padding:10px;">
                            <img src="assets/uploads/<?php echo $meats->images_show;?>" width="100%"  height="110px" alt="">
                            <figcaption> <?php echo $meats->text_title_th;?> </figcaption>
                        </figure>
                    </a>
                    <?php endforeach; ?>
                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>

        <!-- ========================  meats PRODUCTS ======================== -->
        <section id="page-products" class="products" style="background-color:#808080 !important;">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#000 !important;">OUR MEAT PRODUCTS</h2>
                            <!-- <div class="text" style="color:#3c3b3b !important;">
                                <p>Our latest meats Product</p>
                            </div> -->

                            <!-- === box filters === -->
                            <div id="box-filters" class="box-filters">
                            </div> <!--/box-filters-->

                        </div>
                    </div> <!--/row-->
                </header>

                <div id="box-filters-results" class="row">

                    <!-- === product-item === -->

                    <?php foreach($meat as $meats): ?>
                    <div class="col-xs-6 col-sm-4 item sofa">
                    <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="<?php base_url();?>yogurt/view/<?php echo $meats->id;?>">
                                        <img src="assets/uploads/<?php echo $meats->images_show;?>" alt="" width="360px" height="210px" />
                                    </a>
                                </div>
                                <div class="text radius">
                                    <h2 class="title h4" style="color: #fff !important;"><?php echo $meats->text_title_th;?></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php endforeach; ?>
                    <!-- === product-item === -->
                </div> <!--/row-->

            </div> <!--/container-->
        </section>

        <!-- ========================  meats PRODUCTS ======================== -->

</div>
<?php }if($this->session->userdata('lang') === 'en'){ ?>

    <div class="wrapper">

<!-- ========================  Header content ======================== -->

<section id="page-home" class="header-content">

    <div class="owl-slider owl-slider-fullscreen">

        <!-- === slide item === -->
        <?php foreach($meat as $meats): ?>
        <div class="item" style="background-image:url(assets/uploads/<?php echo $meats->images_show;?>)">
            <div class="box">
                <div class="container text-center">
                <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $meats->text_title_en;?></h2>
                    <div class="animated" data-animation="fadeInUp"><?php echo $meats->text_title_en;?></div>
                    <div class="animated" data-animation="fadeInUp"><?php echo $meats->detel_product_en;?></div>
                    <div class="animated" data-animation="fadeInUp">
                        <a href="<?php base_url();?>yogurt/view/<?php echo $meats->id;?>" class="btn btn-clean">Read more</a>
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
            <?php foreach($a as $as): ?>
                    <div class="col-md-8">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $as->images_show;?>)">
                                <img src="assets/uploads/<?php echo $as->images_show;?>" alt="" />
                            </figcaption>
                            <a href="<?php base_url();?>yogurt/view/<?php echo $as->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
                        </figure>
                    </div>
                    <?php endforeach; ?>

            <!-- === item === -->
            <?php foreach($b as $bs): ?>
            <div class="col-md-4">
                <figure>
                    <figcaption style="background-image:url(assets/uploads/<?php echo $bs->images_show;?>)">
                        <img src="assets/uploads/<?php echo $bs->images_show;?>" alt="" />
                    </figcaption>
                    <a href="/beef/<?php echo $bs->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a>
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

            <?php foreach($meat as $meats): ?>
            <a href="<?php base_url();?>yogurt/view/{{ $meatss->id }}">
                <figure style="padding:10px;">
                    <img src="assets/uploads/<?php echo $meats->images_show;?>" width="100%"  height="110px" alt="">
                    <figcaption> <?php echo $meats->text_title_en;?> </figcaption>
                </figure>
            </a>
            <?php endforeach; ?>
        </div> <!--/owl-icons-->
    </div> <!--/container-->
</section>

<!-- ========================  meats PRODUCTS ======================== -->
<section id="page-products" class="products" style="background-color:#808080 !important;">

    <div class="container">

        <!-- === header title === -->

        <header>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 text-center">
                    <h2 class="title" style="color:#000 !important;">OUR MEAT PRODUCTS</h2>
                    <!-- <div class="text" style="color:#3c3b3b !important;">
                        <p>Our latest meats Product</p>
                    </div> -->

                    <!-- === box filters === -->
                    <div id="box-filters" class="box-filters">
                    </div> <!--/box-filters-->

                </div>
            </div> <!--/row-->
        </header>

        <div id="box-filters-results" class="row">

            <!-- === product-item === -->

            <?php foreach($meat as $meats): ?>
            <div class="col-xs-6 col-sm-4 item sofa">
            <article>
                    <div class="figure-grid">
                        <div class="image">
                            <a href="<?php base_url();?>yogurt/view/<?php echo $meats->id;?>">
                                <img src="assets/uploads/<?php echo $meats->images_show;?>" alt="" width="360px" height="210px" />
                            </a>
                        </div>
                        <div class="text radius">
                            <h2 class="title h4" style="color: #fff !important;"><?php echo $meats->text_title_en;?></h2>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
            <!-- === product-item === -->
        </div> <!--/row-->

    </div> <!--/container-->
</section>

<!-- ========================  meats PRODUCTS ======================== -->

</div>

<?php }?>