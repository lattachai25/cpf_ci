<?php
    $this->db->select("*");
    $this->db->from("slide_meat");
    $query = $this->db->get();
    $this->db->order_by('id', 'DESC');
    $this->db->limit(4);
    $meat = $query->result();
?>
<?php
    $this->db->select("*");
    $this->db->from("meat_passion");
    $this->db->order_by('id', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get();
    $a = $query->result();
?>
<?php
    $this->db->select("*");
    $this->db->from("meat_passion");
    $this->db->order_by('id', 'DESC');
    $this->db->limit(5, 1);
    $query = $this->db->get();
    $c = $query->result();
?>


<?php
    $this->db->select("*");
    $this->db->from("meats");
    $this->db->order_by('id', 'DESC');
    $this->db->limit(5, 1);
    $query = $this->db->get();
    $b = $query->result();
?>

<style>
    .products article .image img {
    width: 100%;
    height: 210px !important;
}
</style>

<?php if($this->session->userdata('lang') === 'th'){ ?>
    <div class="wrapper">

        <!-- ========================  Header content ======================== -->
            
        <section id="page-home" class="header-content">
        <div class="owl-slider owl-slider-fullscreen">

            <?php foreach($meat as $meats): ?>
                <div class="item" style="background-image:url(assets/uploads/<?php echo $meats->images_show;?>)">
                        <div class="box">
                            <div class="container text-center">
                            <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $meats->content_th;?></h2>
                                <!-- <div class="animated" data-animation="fadeInUp">
                                    <a href="/Show_meat/<?php echo $meats->id;?>" class="btn btn-clean">Read more</a>
                                </div> -->
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
                        <h2 class="title" style="color:#fff !important;">A Passion for quality</h2>
                        <div class="text">
                            <p>The determination to provide it.</p>
                        </div>
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
                            <!-- <a href="<?php echo base_url('/Show/');?>" class="btn btn-clean mfp-open-scrollto">Read more</a> -->
                        </figure>
                    </div>
                    <?php endforeach; ?>
                    <!-- === item === -->
                    <?php foreach($c as $cs): ?>
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $cs->images_show;?>)">
                                <img src="assets/uploads/<?php echo $cs->images_show;?>" alt="" />
                            </figcaption>
                            <!-- <a href="<?php echo base_url('/Show/');?>" class="btn btn-clean mfp-open-scrollto">Read more</a> -->
                        </figure>
                    </div>
                    <?php endforeach; ?>
                    <!-- === item === -->

                


                    <!-- ========================  Article info popup - quick view ======================== -->
                </div> <!--/row-->

            </div> <!--/container-->
        </section>
        <!-- ======================== News Products ======================== -->

    <!-- ========================  POULTRY PRODUCTS ======================== -->
    <section id="page-products" class="products" style="background-color:#808080 !important;">

        <div class="container">

            <!-- === header title === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title" style="color:#000 !important;">OUR MEAT PRODUCTS</h2>
                        <!-- <div class="text" style="color:#3c3b3b !important;">
                            <p>Our latest Poultry Product</p>
                        </div> -->

                        <!-- === box filters === -->

                        <div id="box-filters" class="box-filters">

                            <!-- <figure data-filter=".1">
                                <figcaption>
                                <i class="flaticon-hen" style="font-size:60px;"></i>
                                    <span>POULTRY</span>
                                </figcaption>
                            </figure> -->

                            <figure data-filter=".2">
                                <figcaption>
                                <i class="flaticon-animal" style="font-size:60px;"></i>
                                    <span>BEEF</span>
                                </figcaption>
                            </figure>

                            <figure data-filter=".3">
                                <figcaption>
                                <i class="flaticon-lamb-1" style="font-size:60px;"></i>
                                    <span>LAMB</span>
                                </figcaption>
                            </figure>

                            <figure data-filter=".4">
                                <figcaption>
                                <i class="flaticon-deer-1" style="font-size:60px;"></i>
                                    <span>VENISON</span>
                                </figcaption>
                            </figure>

                            <figure data-filter=".5">
                                <figcaption>
                                <i class="flaticon-turkey" style="font-size:60px;"></i>
                                    <span>TURKEY</span>
                                </figcaption>
                            </figure>

                        </div> <!--/box-filters-->

                    </div>
                </div> <!--/row-->
            </header>

            <div id="box-filters-results" class="row">
                <!-- === product-item === -->
        
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");
                        $this->db->join('beef_products', 'beef_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou1 = $query->result();
                        ?>
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");;
                        $this->db->join('lamb_products', 'lamb_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou2 = $query->result();
                ?>
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");
                        $this->db->join('venison_products', 'venison_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou3 = $query->result();
                ?>
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");
                        $this->db->join('turkey_products', 'turkey_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou4 = $query->result();
                ?>


                <?php foreach($ou1  as $ou1s): ?>

                    <?php  $csid1 = $ou1s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid1);
                    $query = $this->db->get();
                    $bandname1 = $query->row();
                    ?>


                <div class="col-xs-6 col-sm-4 item <?php echo $ou1s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="/Show/<?php echo $ou1s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou1s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname1->name_brand_th;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>

                <?php foreach($ou2  as $ou2s): ?>
                    <?php  $csid2 = $ou2s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid2);
                    $query = $this->db->get();
                    $bandname2 = $query->row();
                ?>

                <div class="col-xs-6 col-sm-4 item <?php echo $ou2s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                
                                <a href="<?php base_url();?>Show/view/<?php echo $ou2s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou2s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname2->name_brand_th;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>

                <?php foreach($ou3  as $ou3s): ?>

                    <?php  $csid3 = $ou3s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid3);
                    $query = $this->db->get();
                    $bandname3 = $query->row();
                    ?>
                <div class="col-xs-6 col-sm-4 item <?php echo $ou3s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                            <a href="<?php base_url();?>Show/view/<?php echo $ou3s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou3s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname3->name_brand_th;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
                <?php foreach($ou4  as $ou4s): ?>
                    <?php $csid4 = $ou2s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid4);
                    $query = $this->db->get();
                    $bandname4 = $query->row();
                    ?>
                <div class="col-xs-6 col-sm-4 item <?php echo $ou4s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="<?php base_url();?>Show/view/<?php echo $ou4s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou4s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname4->name_brand_th;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>

            <!-- === product-item === -->
            </div> <!--/product-->

        </div> <!--popup-main-->
    </div> <!--/container-->
</section>

<!-- ========================  POULTRY PRODUCTS ======================== -->

</div>



<?php }if($this->session->userdata('lang') === 'en') { ?>

 
    <div class="wrapper">

        <!-- ========================  Header content ======================== -->
            
        <section id="page-home" class="header-content">
        <div class="owl-slider owl-slider-fullscreen">

            <?php foreach($meat as $meats): ?>
                <div class="item" style="background-image:url(assets/uploads/<?php echo $meats->images_show;?>)">
                        <div class="box">
                            <div class="container text-center">
                            <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $meats->content_en;?></h2>
                                <!-- <div class="animated" data-animation="fadeInUp">
                                    <a href="/Show_meat/<?php echo $meats->id;?>" class="btn btn-clean">Read more</a>
                                </div> -->
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
                        <h2 class="title" style="color:#fff !important;">A Passion for quality</h2>
                        <div class="text">
                            <p>The determination to provide it.</p>
                        </div>
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
                            <!-- <a href="<?php base_url();?>Show/view/<?php echo $as->id;?>" class="btn btn-clean mfp-open-scrollto">Read more</a> -->
                        </figure>
                    </div>
                    <?php endforeach; ?>
                    <!-- === item === -->
                    <?php foreach($c as $cs): ?>
                    <div class="col-md-4">
                        <figure>
                            <figcaption style="background-image:url(assets/uploads/<?php echo $cs->images_show;?>)">
                                <img src="assets/uploads/<?php echo $cs->images_show;?>" alt="" />
                            </figcaption>
                            <!-- <a href="<?php echo base_url('/Show/');?>" class="btn btn-clean mfp-open-scrollto">Read more</a> -->
                        </figure>
                    </div>
                    <?php endforeach; ?>
                    <!-- === item === -->

                


                    <!-- ========================  Article info popup - quick view ======================== -->
                </div> <!--/row-->

            </div> <!--/container-->
        </section>
        <!-- ======================== News Products ======================== -->

    <!-- ========================  POULTRY PRODUCTS ======================== -->
    <section id="page-products" class="products" style="background-color:#808080 !important;">

        <div class="container">

            <!-- === header title === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title" style="color:#000 !important;">OUR MEAT PRODUCTS</h2>
                        <!-- <div class="text" style="color:#3c3b3b !important;">
                            <p>Our latest Poultry Product</p>
                        </div> -->

                        <!-- === box filters === -->

                        <div id="box-filters" class="box-filters">

                            <!-- <figure data-filter=".POULTRY">
                                <figcaption>
                                <i class="flaticon-hen" style="font-size:60px;"></i>
                                    <span>POULTRY</span>
                                </figcaption>
                            </figure> -->

                            <figure data-filter=".2">
                                <figcaption>
                                <i class="flaticon-animal" style="font-size:60px;"></i>
                                    <span>BEEF</span>
                                </figcaption>
                            </figure>

                            <figure data-filter=".3">
                                <figcaption>
                                <i class="flaticon-lamb-1" style="font-size:60px;"></i>
                                    <span>LAMB</span>
                                </figcaption>
                            </figure>

                            <figure data-filter=".4">
                                <figcaption>
                                <i class="flaticon-deer-1" style="font-size:60px;"></i>
                                    <span>VENISON</span>
                                </figcaption>
                            </figure>

                            <figure data-filter=".5">
                                <figcaption>
                                <i class="flaticon-turkey" style="font-size:60px;"></i>
                                    <span>TURKEY</span>
                                </figcaption>
                            </figure>

                        </div> <!--/box-filters-->

                    </div>
                </div> <!--/row-->
            </header>

            <div id="box-filters-results" class="row">
                <!-- === product-item === -->
            

                <?php
                        $this->db->select("*");
                        $this->db->from("categories");
                        $this->db->join('beef_products', 'beef_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou1 = $query->result();
                        ?>
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");;
                        $this->db->join('lamb_products', 'lamb_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou2 = $query->result();
                ?>
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");
                        $this->db->join('venison_products', 'venison_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou3 = $query->result();
                ?>
                <?php
                        $this->db->select("*");
                        $this->db->from("categories");
                        $this->db->join('turkey_products', 'turkey_products.id_cat = categories.id_cat');
                        $query = $this->db->get();
                        $ou4 = $query->result();
                ?>


                <?php foreach($ou1  as $ou1s): ?>

                    <?php  $csid1 = $ou1s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid1);
                    $query = $this->db->get();
                    $bandname1 = $query->row();
                    ?>


                <div class="col-xs-6 col-sm-4 item <?php echo $ou1s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                
                                <a href="<?php base_url();?>Show/view/<?php echo $ou1s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou1s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname1->name_brand_en;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>

                <?php foreach($ou2  as $ou2s): ?>
                    <?php  $csid2 = $ou2s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid2);
                    $query = $this->db->get();
                    $bandname2 = $query->row();
                    ?>

                <div class="col-xs-6 col-sm-4 item <?php echo $ou2s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="<?php base_url();?>Show/view/<?php echo $ou2s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou2s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname2->name_brand_en;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>

                <?php foreach($ou3  as $ou3s): ?>

                    <?php  $csid3 = $ou3s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid3);
                    $query = $this->db->get();
                    $bandname3 = $query->row();
                    ?>
                <div class="col-xs-6 col-sm-4 item <?php echo $ou3s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="<?php base_url();?>Show/view/<?php echo $ou3s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou3s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname3->name_brand_en;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
                <?php foreach($ou4  as $ou4s): ?>
                    <?php $csid4 = $ou2s->id_brand;?>
                    <?php
                    $this->db->select("*");
                    $this->db->from("brands");
                    $this->db->where('id_brand', $csid4);
                    $query = $this->db->get();
                    $bandname4 = $query->row();
                    ?>
                <div class="col-xs-6 col-sm-4 item <?php echo $ou4s->id_subcat;?>">
                    <article>
                        <div class="figure-grid">
                            <div class="image">
                                <a href="<?php base_url();?>Show/view/<?php echo $ou4s->id;?>">
                                    <img src="assets/uploads/<?php echo $ou4s->images_show;?>" alt="" width="360" />
                                </a>
                            </div>
                            <div class="text radius">
                                <h2 class="title h4" style="color: #fff !important;"><?php echo $bandname4->name_brand_en;?></h2>
                            </div>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>

            <!-- === product-item === -->



            <!-- === product-item === -->

            </div> <!--/product-->
        </div> <!--popup-main-->
    </div> <!--/container-->
</section>

<!-- ========================  POULTRY PRODUCTS ======================== -->

</div>


<?php }?>    
