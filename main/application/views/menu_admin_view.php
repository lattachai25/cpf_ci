<style>
.circle {
  border-radius: 0%;
  width: 30%;
  height: auto;

  margin-left: 0px;
  /* width and height can be anything, as long as they're equal */
  margin-top: 25px;
  margin-bottom: 30px;
  position: relative;
}

.navbar-default {
    background-color: #fff;
    border-color: #100f0f;
}

#page-wrapper {
    padding: 0 15px;
    min-height: 568px;
    background-color: #fff;
}
.sidebar ul li a.active {
    background-color: #f6f7f900 !important;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #eee !important;
}


.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
}
a.active {
    color: #096d9d !important;
    text-decoration: none;
    font-size: 14px;
}

</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url($this->uri->segment(1).'/administrator');?>"> cpfaustralia | Administrator</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                <li><a href="<?php echo base_url('/admin/logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li class="sidebar-search" style='text-align:center;'>

                <!-- <img class='circle' src='<?php echo base_url();?>assets/images/logo.png'> -->
                    <div class="" >
                     USERNAME :  <font color='#337ab7'> <?php echo $this->session->userdata['logged_in']['username'];?> </font>
                    </div>

                </li>
           
                <li>
                    <a href="<?php echo base_url('administrator/User');?>"><i class="fa fa-bullseye fa-fw"></i> User</a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/about');?>"><i class="fa fa-bullseye fa-fw"></i> ABOUT</a>
                </li> 
                <li>
                    <a href="<?php echo base_url('administrator/contact');?>"><i class="glyphicon glyphicon-map-marker"></i> CONTACT US</a>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-plus-sign"></i> HOME<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/slidehomes');?>"> <i class="fa fa-circle-o fa-fw"></i>SLIDE HOME</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/the_best');?>">  <i class="fa fa-circle-o fa-fw"></i>WHAT THE BEST</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/best_sellers');?>"> <i class="fa fa-circle-o fa-fw"></i>BEST SELLERS</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/enjoy_your');?>">  <i class="fa fa-circle-o fa-fw"></i>ENJOY YOUR MENU</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/show_now');?>">  <i class="fa fa-circle-o fa-fw"></i>SHOP NOW!</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/valuce_partners');?>">  <i class="fa fa-circle-o fa-fw"></i>VALUDE PARTNERS</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/other_products');?>">  <i class="fa fa-circle-o fa-fw"></i> OUR OTHERS</a>
                        </li>
                    </ul>    
                </li>

                <li>
                    <a href=""><i class="glyphicon glyphicon-plus-sign"></i> MEAT<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li>
                            <a href=""><i class="glyphicon glyphicon glyphicon-plus-sign"></i>MAIN MEAT PAGE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('administrator/slide_meat');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>SLIDE MEAT</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/meat_passion');?>">&nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>A PASSION</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/beef_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>BEEF PRODUCTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/lamb_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>LAMB PRODUCTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/venison_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>VENISON PRODUCTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/turkey_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>TURKEY PRODUCTS</a>
                                </li>
                            </ul>    
                        </li> 

                        <li>
                            <a href="<?php echo base_url('administrator/beef');?>"> <i class="fa fa-circle-o fa-fw"></i>BEEF PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/lamb');?>">  <i class="fa fa-circle-o fa-fw"></i>LAMB PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/venison');?>">  <i class="fa fa-circle-o fa-fw"></i>VENISON PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/turkey');?>">  <i class="fa fa-circle-o fa-fw"></i>TURKEY PAGE</a>
                        </li>
                    </ul>    
                </li>  
                

                <li>
                    <a href="#"><i class="glyphicon glyphicon glyphicon-plus-sign"></i> SEAFOOD<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                <li>
                            <a href=""><i class="glyphicon glyphicon glyphicon-plus-sign"></i>MAIN SEAFOOD PAGE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('administrator/slide_seafood');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>SLIDE MEAT</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/seafood_passion');?>">&nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>A PASSION</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/fish_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>FISH PRODUCTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/shells_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>SHELLS PRODUCTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/cephalopod_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>CEPHALOPOD PRODUCTS</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('administrator/shrimp_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>SHRIMP PRODUCTS</a>
                                </li>
                            </ul>    
                        </li> 

                        <li>
                            <a href="<?php echo base_url('administrator/seafood');?>"> <i class="fa fa-circle-o fa-fw"></i>SEAFOOD PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/fish');?>">  <i class="fa fa-circle-o fa-fw"></i>FISH PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/shells');?>">  <i class="fa fa-circle-o fa-fw"></i>SHELLS PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/cephalopod');?>">  <i class="fa fa-circle-o fa-fw"></i>CEPHALOPOD PAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/shrimp');?>">  <i class="fa fa-circle-o fa-fw"></i>SHRIMP PAGE</a>
                        </li>
                    </ul>    
                </li>


                <li>
                    <a href="#"><i class="glyphicon glyphicon glyphicon-plus-sign"></i> FRUIT<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">


                    <li>
                    <a href=""><i class="glyphicon glyphicon glyphicon-plus-sign"></i>MAIN FRUIT PAGE<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/slide_fruit');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Slide Fruit</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/fruit_passion');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>A Passion</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/apple_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>apple Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/cherries_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Cherries Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/stone_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Stone Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/citrus_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Citrus Products</a>
                        </li>
                    </ul>    
                </li> 

                        <li>
                            <a href="<?php echo base_url('administrator/fruit');?>"> <i class="fa fa-circle-o fa-fw"></i>FRUIT</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/apple');?>">  <i class="fa fa-circle-o fa-fw"></i>APPLE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/cherries');?>">  <i class="fa fa-circle-o fa-fw"></i>CHERRIES</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/stone_fruit');?>">  <i class="fa fa-circle-o fa-fw"></i>STONE FRUIT</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/navel_citrus');?>">  <i class="fa fa-circle-o fa-fw"></i>NAVEL CITRUS</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/strawberry');?>">  <i class="fa fa-circle-o fa-fw"></i>STRAWBERRY</a>
                        </li>
                    </ul>    
                </li>


                <li>
                    <a href="#"><i class="glyphicon glyphicon glyphicon-plus-sign"></i> VEGETABLE<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                <li>
                    <a href=""><i class="glyphicon glyphicon glyphicon-plus-sign"></i>MAIN VEGETABLE PAGE<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/Slide_vegetable');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Slide Vegrtable</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/vegetable_passion');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>A Passion</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/carrot_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Carrot Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/beetroot_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Beetroot Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/onion_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Onion Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/potatoes_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Potatoes Products</a>
                        </li>
                    </ul>    
                </li> 

                        <li>
                            <a href="<?php echo base_url('administrator/vegetable');?>"> <i class="fa fa-circle-o fa-fw"></i>VEGETABLE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/carrot');?>">  <i class="fa fa-circle-o fa-fw"></i>CARROT</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/beet_root');?>">  <i class="fa fa-circle-o fa-fw"></i>BEET ROOT</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/whit_onion');?>">  <i class="fa fa-circle-o fa-fw"></i>WHITE ONION</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/sweet_potatoes');?>">  <i class="fa fa-circle-o fa-fw"></i>SWEET POTATOES</a>
                        </li>
                    </ul>    
                </li>


                <li>
                    <a href="#"><i class="glyphicon glyphicon glyphicon-plus-sign"></i> DAIRY<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                    <li>
                    <a href=""><i class="glyphicon glyphicon glyphicon-plus-sign"></i>MAIN DAIRY PAGE<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/slide_dairy');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Slide Dairy</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/dairy_passion');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>A Passion</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/yogurt_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Yogurt Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/cheese_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Cheese Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/butter_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Butter Products</a>
                        </li>
                    </ul>    
                </li> 

                        <!-- <li>
                            <a href="<?php echo base_url('administrator/dairy');?>"> <i class="fa fa-circle-o fa-fw"></i>DAIRY</a>
                        </li> -->
                        <li>
                            <a href="<?php echo base_url('administrator/yogurt');?>">  <i class="fa fa-circle-o fa-fw"></i>YOGURT</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/cheese');?>">  <i class="fa fa-circle-o fa-fw"></i>CHEESE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/butter');?>">  <i class="fa fa-circle-o fa-fw"></i>BUTTER</a>
                        </li>
                    </ul>    
                </li>
             
                <li>
                    <a href="#"><i class="glyphicon glyphicon glyphicon-plus-sign"></i> OTHRES<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                    <li>
                    <a href=""><i class="glyphicon glyphicon glyphicon-plus-sign"></i>MAIN OTHERS PAGE<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url('administrator/slide_others');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Slide Others</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/others_passion');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>A Passion</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/processed_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Processed Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/beverage_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Beverage Products</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/confectionary_products');?>"> &nbsp;&nbsp;&nbsp; <i class="fa fa-certificate fa-fw"></i>Confectionary Products</a>
                        </li>
                    </ul>    
                </li> 

                        <li>
                            <a href="<?php echo base_url('administrator/other');?>"> <i class="fa fa-circle-o fa-fw"></i>OTHRES</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/processed_foods');?>">  <i class="fa fa-circle-o fa-fw"></i>PROCESSED FOODS</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/beveage');?>">  <i class="fa fa-circle-o fa-fw"></i>BEVEAGE</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('administrator/confetionary');?>">  <i class="fa fa-circle-o fa-fw"></i>CONFETIONARY</a>
                        </li>
                    </ul>    
                </li>

                <li>
                    <a href="<?php echo base_url('administrator/brand');?>"><i class="glyphicon glyphicon-map-marker"></i> BRAND</a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/category');?>"><i class="glyphicon glyphicon-map-marker"></i> CATEGORY</a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/sub_category');?>"><i class="glyphicon glyphicon-map-marker"></i>SUB CATEGORY</a>
                </li>


                <li>
                    <a href="<?php echo base_url('administrator/socal');?>"><i class="glyphicon glyphicon-map-marker"></i> SOCAL</a>
                </li>
                <li>
                    <a href="<?php echo base_url('administrator/footer');?>"><i class="glyphicon glyphicon-map-marker"></i> Footer</a>
                </li>


</nav>
