<?php
    $this->db->select("*");
    $this->db->from("slidehomes");
    $query = $this->db->get();
    $slidehome = $query->result();
?>
<?php
    $this->db->select("*");
    $this->db->from("show__now__homes");
    $query = $this->db->get();
    $shownow = $query->result();
?>
<?php
    $this->db->select("*");
    $query = $this->db->get('enjoy__your__homes', 1, 3);
    $enjoy = $query->result();
?>
<?php
    $this->db->select("*");
    $this->db->from("best__sellers__homes");
    $query = $this->db->get();
    $bestseller = $query->result();
?>
<?php
    $this->db->select("*");
    $this->db->from("our__other_products__homes");
    $query = $this->db->get();
    $ourother = $query->result();
?>

<?php  if($this->session->userdata('lang') === 'th'){ ?>
  <!-- ========================  Header Slide ======================== -->

        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->
                <?php foreach($slidehome as $slidehomes): ?>
                <div class="item" style="background-image:url(assets/uploads/<?php echo $slidehomes->images_product1;?>)">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $slidehomes->text_title_th;?></h2>
                            <div class="animated" data-animation="fadeInUp">
                            <?php echo $slidehomes->name_product_th;?>
                            </div>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
              
            </div> <!--/owl-slider-->
        </section>
        <!-- ========================  Header Slide ======================== -->
        <!-- ========================  Icons slider ======================== -->
        <section class="owl-icons-wrapper owl-icons-frontpage">

            <!-- === header === -->



            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    <a href="<?php echo base_url('/meat');?>">
                        <figure>
                            <i class="flaticon-meat"></i>
                            <figcaption>เนื้อ</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="<?php echo base_url('/meat');?>/seafood">
                        <figure>
                            <i class="flaticon-seafood"></i>
                            <figcaption>อาหารทะเล</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="<?php echo base_url('/meat');?>/fruit">
                        <figure>
                            <i class="flaticon-fruits"></i>
                            <figcaption>ผลไม้</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="<?php echo base_url('/meat');?>/vegetable">
                        <figure>
                            <i class="flaticon-vegetable"></i>
                            <figcaption>ผัก</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="<?php echo base_url('/meat');?>/dairy">
                        <figure>
                            <i class="flaticon-milk"></i>
                            <figcaption>นม</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="<?php echo base_url('/cloche');?>">
                        <figure>
                            <i class="flaticon-cloche"></i>
                            <figcaption>อื่นๆ</figcaption>
                        </figure>
                    </a>

                </div> <!--/owl-icons-->
            </div> <!--/container-->
        </section>
        <!-- ========================  Icons slider ======================== -->

        <!-- ========================  NEW PRODUCTS  ======================== -->
        <section class="products">

            <div class="container">

                <!-- === header title === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color:#FFF;">WHAT THE BEST WE DELIVER</h2>
                            <div class="text">
                                <p>whan you join us. you're joining a community focused on caring about animals and our planet, improving livelihoods for farmers, and sharing better meals together.</p>
                            </div>
                        </div>
                    </div>
                </header>



<?php
    $this->db->select("*");
    $this->db->from("the_best_we");
    $query = $this->db->get();
    $this->db->order_by('id', 'DESC');
    $this->db->limit(4);
    $the_best = $query->result();
?>


                <div class="row">

                    <!-- === product-item What_The_Best_Home === -->
                    <?php foreach($the_best as $the_bests): ?>
                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/#">
                                        <img src="assets/uploads/<?php echo $the_bests->images_product1;?>" alt="" width="360" height="250" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4" ><a href="" style="color:#fff !important;"><?php echo $the_bests->text_title_th;?></a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    <?php endforeach; ?>
                    <!-- === product-item === -->
            </div> <!--/container-->
        </section>
        <!-- ========================  NEW PRODUCTS  ========================= -->
        <!-- ========================  4 Ping Effice  ======================== -->   
        <section class="stretcher-wrapper">

            <!-- === stretcher header === -->
      
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color: rgb(255, 255, 255);">BEST SELLERS</h2>
                            <!-- <div class="text">
                                <p> COOKNG & RECIPES & HEALTH MENU </p>
                            </div> -->
                        </div>
                    </div>
      

            <!-- === stretcher === -->
<?php
    $this->db->select("*");
    $this->db->from("best__sellers__homes");
    $query = $this->db->get();
    $this->db->order_by('id', 'DESC');
    $this->db->limit(6);
    $best_seller = $query->result();
?>
            <ul class="stretcher">
                
                <!-- === stretcher item === -->
                
                <?php foreach($best_seller as $best_sellers): ?>
                <li class="stretcher-item" style="background-image:url(assets/uploads/<?php echo $best_sellers->images_product1;?>);">
                    <!--main text-->
                    <figure>
                        <h4><?php echo $best_sellers->text_title_th;?></h4>
                        <figcaption><?php echo $best_sellers->text_title_th;?></figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="/"></a>
                </li>
                <?php endforeach; ?>
                

                <!-- === stretcher item more=== -->

                <li class="stretcher-item more">
                    <div class="more-icon">
                        <span data-title-show="Show more" data-title-hide="+"></span>
                    </div>
                    <a href="/"></a>
                </li>

            </ul>
        </section>
        <!-- ======================== 4 Ping Effice  ======================== -->   
        <!-- ========================  สินค้าเพื่อสุขภาพ ======================== -->      
        <section class="blog blog-block" style="background-color: rgba(0, 0, 0, 0.8);">

            <div class="container">

                <!-- === blog header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="title" style="color: rgb(255, 255, 255);">ENJOY YOUR MENU</h2>
                            <div class="text">
                                <p> COOKING & RECIPES & HEALTH MENU </p>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="row">

<?php
    $this->db->select("*");
    $query = $this->db->get('enjoy__your__homes', 3);
    $this->db->order_by('id', 'DESC');
    $this->db->where('status', '1');
    $enjoy_your = $query->result();
?>



                    <!-- === blog item === -->
                    <?php foreach($enjoy_your as $enjoy_yours): ?>
                    <div class="col-sm-4">
                        <article>
                            <a href="/">
                                <div class="image">
                                    <img src="assets/uploads/<?php echo $enjoy_yours->images_product1;?>" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <!-- <div class="date">06/06/2021</div> -->
                                    <div class="title">
                                        <h2 class="h4"><?php echo $enjoy_yours->text_title_th;?> <br><br></h2>
                                    </div>
                                    <div class="description" style="background-color: rgba(0, 0, 0, 0.6); padding: 20px;">
                                        <p>
                                        <?php echo $enjoy_yours->detel_product_th;?>
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block" style="box-shadow: rgb(255, 255, 255) 2px 2px 2px;">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    <?php endforeach; ?>

                </div> <!--/row-->
                <!-- === button more === -->

            </div> <!--/container-->
        </section>
        <!-- ========================  สินค้าเพื่อสุขภาพ ======================== -->                
        <!-- ========================  About ======================== --> 
        <section class="banner" style="background-image:url({{ asset('mainpage/assets/images/gallery-4.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h2 class="title">ABOUT Us</h2>
                        <p>
                        We are importers of meat, vegetables, fruit and dairy products from Australia that have standards.
                        </p>
                        <p><a href="<?php echo base_url('/About');?>" class="btn btn-clean">Read full story</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================  About ======================== --> 
        <!-- ========================  ช่องทางการจัดจำหน่าย ======================== -->
        <section class="blog" style="background-color: rgb(0, 0, 0);">

            <div class="container">

                <!-- === SHOW NOW header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title" style="color: rgb(255, 255, 255);">SHOW NOW!</h1>
                            <!-- <div class="text">
                                <p>( SHOW AND SUDE ALL BRAND LOGOS )</p>
                            </div> -->
                        </div>
                    </div>
                </header>
<?php
    $this->db->select("*");
    $this->db->from("show__now__homes");
    $query = $this->db->get();
    $this->db->order_by('id', 'DESC');
    $this->db->where('status', '1');
    $this->db->limit(2);

    $shownow = $query->result();
?>

                <div class="row">

                    <!-- === SHOW NOW item === -->

                    <?php foreach($shownow as $shownows): ?>
                    <div class="col-sm-4">
                        <article>
                            <a href="">
                                <div class="image" style="background-image:url(assets/uploads/<?php echo $shownows->images_product1;?>)">
                                    <img src="assets/uploads/<?php echo $shownows->images_product1;?>" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <!-- <div class="date" style="text-transform:uppercase;">
                                            <span><?php echo date('M', strtotime($shownows->day));?></span>
                                            <strong><?php echo date('d', strtotime($shownows->day));?></strong>
                                            <span><?php echo  date('Y', strtotime($shownows->day));?></span>
                                        </div> -->
                                    </div>
                                    <div class="title">
                                        <h2 class="h5"><?php echo $shownows->text_title_th;?> ...</h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    <?php endforeach; ?>

                </div> <!--/row-->
                <!-- === button more === -->

                <div class="wrapper-more">
                    <a href="blog-grid.html" class="btn btn-main">View all posts</a>
                </div>

            </div> <!--/container-->
        </section>
        <!-- ========================  SHOW NOW ======================== -->
        <!-- ========================  VALUCE PARTNERS ======================== -->
        <section class="blog" style="background-color: rgb(0, 0, 0);">

        <div class="container">

            <!-- === VALUCE PARTNERS header === -->

            <header>
                <div class="row">
                    <div class="col-md-offset-2 col-md-8 text-center">
                        <h1 class="h2 title" style="color: rgb(255, 255, 255);">VALUCE PARTNERS</h1>
                        <div class="text">
                            <p>( SHOW AND SLIDEALL BRAND LOGOS )</p>
                        </div>
                    </div>
                </div>
            </header>
<?php
    $this->db->select("*");
    $this->db->from("valuce_partners");
    $query = $this->db->get();
    $this->db->order_by('id', 'DESC');
    $this->db->where('status', '1');
    $this->db->limit(2);

    $valuce = $query->result();
?>
            <div class="row">

                <!-- === VALUCE PARTNERS item === -->
                <?php foreach($valuce as $valuces): ?>
                    <div class="col-sm-4">
                        <article>
                            <a href="">
                                <div class="image" style="background-image:url(assets/uploads/<?php echo $valuces->images_product1;?>)">
                                    <img src="assets/uploads/<?php echo $valuces->images_product1;?>" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <!-- <div class="date" style="text-transform:uppercase;">
                                            <span><?php echo date('M', strtotime($valuces->day));?></span>
                                            <strong><?php echo date('d', strtotime($valuces->day));?></strong>
                                            <span><?php echo  date('Y', strtotime($valuces->day));?></span>
                                        </div> -->
                                    </div>
                                    <div class="title">
                                        <h2 class="h5"><?php echo $valuces->text_title_th;?> ...</h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    <?php endforeach; ?>

            </div> <!--/row-->
            <!-- === button more === -->

            <div class="wrapper-more">
                <a href="blog-grid.html" class="btn btn-main">View all posts</a>
            </div>

        </div> <!--/container-->
        </section>
        <!-- ========================  VALUCE PARTNERS ======================== -->
        <!-- ======================== สินค้าอื่นๆ ======================== -->
        <section class="instagram">
            
            <!-- === instagram header === -->

            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2 class="h2 title">Our other products</h2>
                            <div class="text">
                                <p>( SHOW AND SLIDEALL PRODUCTS )</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- === instagram gallery === -->
        <?php
            $this->db->select("*");
            $this->db->from("our__other_products__homes");
            $query = $this->db->get();
            $this->db->order_by('id', 'DESC');
            $other = $query->result();
        ?>
            <div class="gallery clearfix">
                <?php foreach($other as $others): ?>
                <a class="item" href="Showmeat">
                    <img src="assets/uploads/<?php echo $others->images_product1;?>" min-height="200" alt="Alternate Text" />
                </a>
                <?php endforeach; ?>
            </div> <!--/gallery-->

        </section>
        <!-- ======================== สินค้าอื่นๆ ======================== -->
        <div class="scroll-top visible"><i class="icon icon-chevron-up"></i></div>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->




        <?php }if($this->session->userdata('lang') === 'en'){ ?>
           
          <!-- ========================  Header Slide ======================== -->

          <section class="header-content">

<div class="owl-slider">

    <!-- === slide item === -->
    <?php foreach($slidehome as $slidehomes): ?>
    <div class="item" style="background-image:url(assets/uploads/<?php echo $slidehomes->images_product1;?>)">
        <div class="box">
            <div class="container">
                <h2 class="title animated h1" data-animation="fadeInDown"><?php echo $slidehomes->text_title_en;?></h2>
                <div class="animated" data-animation="fadeInUp">
                <?php echo $slidehomes->name_product_en;?>
                </div>

            </div>
        </div>
    </div>
    <?php endforeach; ?>
  
</div> <!--/owl-slider-->
</section>
<!-- ========================  Header Slide ======================== -->
<!-- ========================  Icons slider ======================== -->
<section class="owl-icons-wrapper owl-icons-frontpage">

<!-- === header === -->



<div class="container">

    <div class="owl-icons">

        <!-- === icon item === -->

        <a href="<?php echo base_url('/meat');?>">
            <figure>
                <i class="flaticon-meat"></i>
                <figcaption>MEAT</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="<?php echo base_url('/seafood');?>">
            <figure>
                <i class="flaticon-seafood"></i>
                <figcaption>SEAFOOD</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="<?php echo base_url('/fruit');?>">
            <figure>
                <i class="flaticon-fruits"></i>
                <figcaption>FRUITS</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="<?php echo base_url('/vegetable');?>">
            <figure>
                <i class="flaticon-vegetable"></i>
                <figcaption>VEGRTABLE</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="<?php echo base_url('/dairy');?>">
            <figure>
                <i class="flaticon-milk"></i>
                <figcaption>DAIRY</figcaption>
            </figure>
        </a>

        <!-- === icon item === -->

        <a href="<?php echo base_url('/cloche');?>">
            <figure>
                <i class="flaticon-cloche"></i>
                <figcaption>CLOCHE</figcaption>
            </figure>
        </a>

    </div> <!--/owl-icons-->
</div> <!--/container-->
</section>
<!-- ========================  Icons slider ======================== -->

<!-- ========================  NEW PRODUCTS  ======================== -->
<section class="products">

<div class="container">

    <!-- === header title === -->

    <header>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title" style="color:#FFF;">WHAT THE BEST WE DELIVER</h2>
                <div class="text">
                    <p>whan you join us. you're joining a community focused on caring about animals and our planet, improving livelihoods for farmers, and sharing better meals together.</p>
                </div>
            </div>
        </div>
    </header>



<?php
$this->db->select("*");
$this->db->from("the_best_we");
$query = $this->db->get();
$this->db->order_by('id', 'DESC');
$this->db->limit(4);
$the_best = $query->result();
?>


    <div class="row">

        <!-- === product-item What_The_Best_Home === -->
        <?php foreach($the_best as $the_bests): ?>
        <div class="col-md-4 col-xs-6">
            <article>
                <div class="figure-grid">
                    <div class="image">
                        <a href="/#">
                            <img src="assets/uploads/<?php echo $the_bests->images_product1;?>" alt="" width="360" height="250" />
                        </a>
                    </div>
                    <div class="text" style="background-color:#000000b0;">
                        <h2 class="title h4" ><a href="" style="color:#fff !important;"><?php echo $the_bests->text_title_en;?></a></h2>
                    </div>
                </div>
            </article>
        </div>
        <?php endforeach; ?>
        <!-- === product-item === -->
</div> <!--/container-->
</section>
<!-- ========================  NEW PRODUCTS  ========================= -->
<!-- ========================  4 Ping Effice  ======================== -->   
<section class="stretcher-wrapper">

<!-- === stretcher header === -->

        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title" style="color: rgb(255, 255, 255);">BEST SELLERS</h2>
                <!-- <div class="text">
                    <p> COOKNG & RECIPES & HEALTH MENU </p>
                </div> -->
            </div>
        </div>


<!-- === stretcher === -->
<?php
$this->db->select("*");
$this->db->from("best__sellers__homes");
$query = $this->db->get();
$this->db->order_by('id', 'DESC');
$this->db->limit(6);
$best_seller = $query->result();
?>
<ul class="stretcher">
    
    <!-- === stretcher item === -->
    
    <?php foreach($best_seller as $best_sellers): ?>
    <li class="stretcher-item" style="background-image:url(assets/uploads/<?php echo $best_sellers->images_product1;?>);">
        <!--main text-->
        <figure>
            <h4><?php echo $best_sellers->text_title_en;?></h4>
            <figcaption><?php echo $best_sellers->text_title_en;?></figcaption>
        </figure>
        <!--anchor-->
        <a href="/"></a>
    </li>
    <?php endforeach; ?>
    

    <!-- === stretcher item more=== -->

    <li class="stretcher-item more">
        <div class="more-icon">
            <span data-title-show="Show more" data-title-hide="+"></span>
        </div>
        <a href="/"></a>
    </li>

</ul>
</section>
<!-- ======================== 4 Ping Effice  ======================== -->   
<!-- ========================  สินค้าเพื่อสุขภาพ ======================== -->      
<section class="blog blog-block" style="background-color: rgba(0, 0, 0, 0.8);">

<div class="container">

    <!-- === blog header === -->

    <header>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="title" style="color: rgb(255, 255, 255);">ENJOY YOUR MENU</h2>
                <div class="text">
                    <p> COOKING & RECIPES & HEALTH MENU </p>
                </div>
            </div>
        </div>
    </header>

    <div class="row">

<?php
    $this->db->select("*");
    $query = $this->db->get('enjoy__your__homes', 3);
    $this->db->order_by('id', 'DESC');
    $this->db->where('status', '1');
    $enjoy_your = $query->result();
?>

        <!-- === blog item === -->
        <?php foreach($enjoy_your as $enjoy_yours): ?>
        <div class="col-sm-4">
            <article>
                <a href="/">
                    <div class="image">
                        <img src="assets/uploads/<?php echo $enjoy_yours->images_product1;?>" alt="" />
                    </div>
                    <div class="entry entry-block">
                        <!-- <div class="date">06/06/2021</div> -->
                        <div class="title">
                            <h2 class="h4"><?php echo $enjoy_yours->text_title_en;?> <br><br></h2>
                        </div>
                        <div class="description" style="background-color: rgba(0, 0, 0, 0.6); padding: 20px;">
                            <p>
                            <?php echo $enjoy_yours->detel_product_en;?>
                            </p>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-main btn-block" style="box-shadow: rgb(255, 255, 255) 2px 2px 2px;">Read more</span>
                    </div>
                </a>
            </article>
        </div>
        <?php endforeach; ?>

    </div> <!--/row-->
    <!-- === button more === -->

</div> <!--/container-->
</section>
<!-- ========================  สินค้าเพื่อสุขภาพ ======================== -->                
<!-- ========================  About ======================== --> 
<section class="banner" style="background-image:url({{ asset('mainpage/assets/images/gallery-4.jpg') }})">
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h2 class="title">ABOUT Us</h2>
            <p>
            We are importers of meat, vegetables, fruit and dairy products from Australia that have standards.
            </p>
            <p><a href="<?php echo base_url('/About');?>" class="btn btn-clean">Read full story</a></p>
        </div>
    </div>
</div>
</section>
<!-- ========================  About ======================== --> 
<!-- ========================  ช่องทางการจัดจำหน่าย ======================== -->
<section class="blog" style="background-color: rgb(0, 0, 0);">

<div class="container">

    <!-- === SHOW NOW header === -->

    <header>
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h1 class="h2 title" style="color: rgb(255, 255, 255);">SHOW NOW!</h1>
                <!-- <div class="text">
                    <p>( SHOW AND SUDE ALL BRAND LOGOS )</p>
                </div> -->
            </div>
        </div>
    </header>
<?php
$this->db->select("*");
$this->db->from("show__now__homes");
$query = $this->db->get();
$this->db->order_by('id', 'DESC');
$this->db->where('status', '1');
$this->db->limit(2);

$shownow = $query->result();
?>

    <div class="row">

        <!-- === SHOW NOW item === -->

        <?php foreach($shownow as $shownows): ?>
        <div class="col-sm-4">
            <article>
                <a href="">
                    <div class="image" style="background-image:url(assets/uploads/<?php echo $shownows->images_product1;?>)">
                        <img src="assets/uploads/<?php echo $shownows->images_product1;?>" alt="" />
                    </div>
                    <div class="entry entry-table">
                        <div class="date-wrapper">
                            <div class="date" style="text-transform:uppercase;">
                                <span><?php echo date('M', strtotime($shownows->day));?></span>
                                <strong><?php echo date('d', strtotime($shownows->day));?></strong>
                                <span><?php echo  date('Y', strtotime($shownows->day));?></span>
                            </div>
                        </div>
                        <div class="title">
                            <h2 class="h5"><?php echo $shownows->text_title_en;?> ...</h2>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-main btn-block">Read more</span>
                    </div>
                </a>
            </article>
        </div>
        <?php endforeach; ?>

    </div> <!--/row-->
    <!-- === button more === -->

    <div class="wrapper-more">
        <a href="blog-grid.html" class="btn btn-main">View all posts</a>
    </div>

</div> <!--/container-->
</section>
<!-- ========================  SHOW NOW ======================== -->
<!-- ========================  VALUCE PARTNERS ======================== -->
<section class="blog" style="background-color: rgb(0, 0, 0);">

<div class="container">

<!-- === VALUCE PARTNERS header === -->

<header>
    <div class="row">
        <div class="col-md-offset-2 col-md-8 text-center">
            <h1 class="h2 title" style="color: rgb(255, 255, 255);">VALUCE PARTNERS</h1>
            <div class="text">
                <p>( SHOW AND SLIDEALL BRAND LOGOS )</p>
            </div>
        </div>
    </div>
</header>
<?php
$this->db->select("*");
$this->db->from("valuce_partners");
$query = $this->db->get();
$this->db->order_by('id', 'DESC');
$this->db->where('status', '1');
$this->db->limit(2);

$valuce = $query->result();
?>
<div class="row">

    <!-- === VALUCE PARTNERS item === -->
    <?php foreach($valuce as $valuces): ?>
        <div class="col-sm-4">
            <article>
                <a href="">
                    <div class="image" style="background-image:url(assets/uploads/<?php echo $valuces->images_product1;?>)">
                        <img src="assets/uploads/<?php echo $valuces->images_product1;?>" alt="" />
                    </div>
                    <div class="entry entry-table">
                        <div class="date-wrapper">
                            <!-- <div class="date" style="text-transform:uppercase;">
                                <span><?php echo date('M', strtotime($valuces->day));?></span>
                                <strong><?php echo date('d', strtotime($valuces->day));?></strong>
                                <span><?php echo  date('Y', strtotime($valuces->day));?></span>
                            </div> -->
                        </div>
                        <div class="title">
                            <h2 class="h5"><?php echo $valuces->text_title_en;?> ...</h2>
                        </div>
                    </div>
                    <div class="show-more">
                        <span class="btn btn-main btn-block">Read more</span>
                    </div>
                </a>
            </article>
        </div>
        <?php endforeach; ?>

</div> <!--/row-->
<!-- === button more === -->

<div class="wrapper-more">
    <a href="blog-grid.html" class="btn btn-main">View all posts</a>
</div>

</div> <!--/container-->
</section>
<!-- ========================  VALUCE PARTNERS ======================== -->
<!-- ======================== สินค้าอื่นๆ ======================== -->
<section class="instagram">

<!-- === instagram header === -->

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8 text-center">
                <h2 class="h2 title">Our other products</h2>
                <div class="text">
                    <p>( SHOW AND SLIDEALL PRODUCTS )</p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- === instagram gallery === -->
<?php
$this->db->select("*");
$this->db->from("our__other_products__homes");
$query = $this->db->get();
$this->db->order_by('id', 'DESC');
$other = $query->result();
?>
<div class="gallery clearfix">
    <?php foreach($other as $others): ?>
    <a class="item" href="Showmeat">
        <img src="assets/uploads/<?php echo $others->images_product1;?>" min-height="200" alt="Alternate Text" />
    </a>
    <?php endforeach; ?>
</div> <!--/gallery-->

</section>
<!-- ======================== สินค้าอื่นๆ ======================== -->
<div class="scroll-top visible"><i class="icon icon-chevron-up"></i></div>

<?php }?>