 
 <?php
    $this->db->select("*");
    $this->db->from("socal");
    $query = $this->db->get();
    $socal = $query->row();
?>
 <!-- ======================== Navigation EN ======================== -->

 <nav class="navbar-fixed">

<div class="container">

    <!-- ==========  Top navigation ========== -->
            <!--Language selector-->
                <?php  if($this->session->userdata('lang') === 'en'){ ?>
    <div class="navigation navigation-top clearfix">
        <ul>
            <!--add active class for current page-->

            <li><a href="<?php echo $socal->facebook;?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $socal->instagram;?>"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo $socal->youtube;?>"><i class="fa fa-youtube"></i></a></li>


                    <li class="nav-settings" class="lang">
                        <a href="<?php echo base_url();?>language/en" style="color: #89d907;"> EN </a>
                    <ul class="nav-settings-list">
                        <a href="<?php echo base_url();?>language/th" style="color: #89d907;">  <li>TH </li></a>
                    </ul>
                    </li>
                    </ul>
    </div> <!--/navigation-top-->                    
    <div class="navigation navigation-main">

                <!-- Setup your logo here-->

                <a href="/main" class="logo"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="" /></a>

                <!-- Mobile toggle menu -->

                <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

                <!-- Convertible menu (mobile/desktop)-->

                <div class="floating-menu">

                    <!-- Mobile toggle menu trigger-->

                    <div class="close-menu-wrapper">
                        <span class="close-menu"><i class="icon icon-cross"></i></span>
                    </div>

                    <ul>
                        <li><a href="<?php echo base_url('/home');?>">home</a></li>
                        
                        <!-- Start Meat -->
                        <li>
                            <a href="<?php echo base_url('/meat');?>"> MEAT <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">

                                    <!-- box-1 (left-side)-->

                                    <div class="box-1">
                                        <div class="box">
                                            <div class="h2">Find your MEAT</div>
                                            <div class="clearfix">
                                                <p>Meat is animal flesh that is eaten as food.[1] Humans have hunted and killed animals for meat since prehistoric times. The advent of civilization allowed the domestication of animals such as chickens, sheep, rabbits, pigs and cattle. This eventually led to their use in meat production on an industrial scale with the aid of slaughterhouses.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- box-2 (right-side)-->

                                    <div class="box-2">
                                        <div class="box clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li class="label">MEAT</li>
                                                        <!-- <li><a href="/Poultry">Poultry</a></li> -->
                                                        <li><a href="<?php echo base_url('/Beef');?>">Beef</a></li>
                                                        <li><a href="<?php echo base_url('/Lamb');?>">Lamb</a></li>
                                                        <li><a href="<?php echo base_url('/Venison');?>">Venison</a></li>
                                                        <li><a href="<?php echo base_url('/Turkey');?>">Turkey</a></li>
                                                    </ul>
                                                </div>
                                            </div> <!--/row-->
                                        </div> <!--/box-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <!--End Meat -->
                        <!-- Start SEAFOOD -->
                        <li>
                            <a href="<?php echo base_url('/seafood');?>"> SEAFOOD<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">

                                    <!-- box-1 (left-side)-->

                                    <div class="box-1">
                                        <div class="box">
                                            <div class="h2">Find your SEAFOOD</div>
                                            <div class="clearfix">
                                                <p>This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food.
                A seafood platter composed of shrimp, oyster, snail and crab.
                Seafood includes any form of food taken from the sea.
                Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- box-2 (right-side)-->

                                    <div class="box-2">
                                        <div class="box clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li class="label">SEAFOOD</li>
                                                        <li><a href="<?php echo base_url('/Fish');?>">Fish</a></li>
                                                        <li><a href="<?php echo base_url('/Shells');?>">Shells</a></li>
                                                        <li><a href="<?php echo base_url('/Cephalopod');?>">Cephalopod</a></li>
                                                        <li><a href="<?php echo base_url('/Shrimp');?>">Shrimp</a></li>
                                                    </ul>
                                                </div>
                                            </div> <!--/row-->
                                        </div> <!--/box-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <!--End SEAFOOD -->
                        <!-- Start Fruit -->
                        <li>
                            <a href="<?php echo base_url('/Fruit');?>">FRUIT <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">

                                    <!-- box-1 (left-side)-->

                                    <div class="box-1">
                                        <div class="box">
                                            <div class="h2">Find your Fruit</div>
                                            <div class="clearfix">
                                                <p>In botany, a fruit is the seed-bearing structure in flowering plants that is formed from the ovary after flowering. Fruits are the means by which flowering plants (also known as angiosperms) disseminate their seeds. Edible fruits in particular have long propagated using the movements of humans and animals in a symbiotic relationship that is the means for seed dispersal for the one group and nutrition for the other.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- box-2 (right-side)-->

                                    <div class="box-2">
                                        <div class="box clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li class="label"><FRUIT></li>
                                                        <li><a href="<?php echo base_url('/Apple');?>">Apple</a></li>
                                                        <li><a href="<?php echo base_url('/Cherries');?>">Cherries</a></li>
                                                        <li><a href="<?php echo base_url('/Stone_fruit');?>">Stone Fruit</a></li>
                                                        <li><a href="<?php echo base_url('/Navel_citrus');?>">Navel-Citrus</a></li>
                                                        <!-- <li><a href="/Strawberry">Strawberry</a></li> -->
                                                    </ul>
                                                </div>
                                            </div> <!--/row-->
                                        </div> <!--/box-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <!--End Fruit -->  
                        <!-- Start Vegetable -->
                        <li>
                            <a href="<?php echo base_url('/vegetable');?>"> VEGETABLE <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">

                                    <!-- box-1 (left-side)-->

                                    <div class="box-1">
                                        <div class="box">
                                            <div class="h2">Find your Vegetable</div>
                                            <div class="clearfix">
                                                <p>In botany, a fruit is the seed-bearing structure in flowering plants that is formed from the ovary after flowering. Fruits are the means by which flowering plants (also known as angiosperms) disseminate their seeds. Edible fruits in particular have long propagated using the movements of humans and animals in a symbiotic relationship that is the means for seed dispersal for the one group and nutrition for the other.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- box-2 (right-side)-->

                                    <div class="box-2">
                                        <div class="box clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li class="label">VEGETABLE</li>
                                                        <li><a href="<?php echo base_url('/Carrot');?>">Carrot</a></li>
                                                        <li><a href="<?php echo base_url('/Beet_root');?>">Beetroot</a></li>
                                                        <li><a href="<?php echo base_url('/White_onion');?>">White Onion</a></li>
                                                        <li><a href="<?php echo base_url('/Sweet_potatoes');?>">Sweet Potatoes</a></li>
                                                    </ul>
                                                </div>
                                            </div> <!--/row-->
                                        </div> <!--/box-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <!--End Vegetable -->  
                        <!-- Start Dairy -->
                        <li>
                            <a href="<?php echo base_url('/dairy');?>">DAIRY<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">

                                    <!-- box-1 (left-side)-->

                                    <div class="box-1">
                                        <div class="box">
                                            <div class="h2">Find your Dairy</div>
                                            <div class="clearfix">
                                                <p>dairy is a business enterprise established for the harvesting or processing (or both) of animal milk – mostly from cows or buffaloes, but also from goats, sheep, horses, or camels – for human consumption. A dairy is typically located on a dedicated dairy farm or in a section of a multi-purpose farm (mixed farm) that is concerned with the harvesting of milk.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- box-2 (right-side)-->

                                    <div class="box-2">
                                        <div class="box clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li class="label">DAIRY</li>
                                                        <li><a href="<?php echo base_url('/Yogurt');?>">Yogurt</a></li>
                                                        <li><a href="<?php echo base_url('/Cheese');?>">Cheese</a></li>
                                                        <li><a href="<?php echo base_url('/Butter');?>">Butter</a></li>
                                                    </ul>
                                                </div>
                                            </div> <!--/row-->
                                        </div> <!--/box-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <!--End Dairy -->  
                        <!-- Start Others -->
                        <li>
                            <a href="<?php echo base_url('/Others');?>">OTHERS<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                            <div class="navbar-dropdown">
                                <div class="navbar-box">

                                    <!-- box-1 (left-side)-->

                                    <div class="box-1">
                                        <div class="box">
                                            <div class="h2">Find your Others</div>
                                            <div class="clearfix">
                                                <p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant, animal or fungal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals. The substance is ingested by an organism and assimilated by the organism's cells to provide energy, maintain life, or stimulate growth. Different species of animals have different feeding behaviours that satisfy the needs of their unique metabolisms, often evolved to fill a specific ecological niche within specific geographical contexts.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- box-2 (right-side)-->

                                    <div class="box-2">
                                        <div class="box clearfix">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li class="label">OTHERS</li>
                                                        <li><a href="<?php echo base_url('/Processed_foods');?>">Processed Foods</a></li>
                                                        <li><a href="<?php echo base_url('/Beveage');?>">Beveage</a></li>
                                                        <li><a href="<?php echo base_url('/Confetionary');?>">Confectionary</a></li>
                                                    </ul>
                                                </div>
                        
                                            </div> <!--/row-->
                                        </div> <!--/box-->
                                    </div> <!--/box-2-->
                                </div> <!--/navbar-box-->
                            </div> <!--/navbar-dropdown-->
                        </li>
                        <!--End Others -->  
                        <li class="label"><a href="<?php echo base_url('/contact');?>">CONTACT</a></li>
                    
                    </ul>
                </div> <!--/floating-menu-->
                </div> <!--/navigation-main-->



<?php }if($this->session->userdata('lang') === 'th'){ ?>
                    <div class="navigation navigation-top clearfix">
        <ul>
            <!--add active class for current page-->

            <li><a href="<?php echo $socal->facebook;?>"><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $socal->instagram;?>"><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo $socal->youtube;?>"><i class="fa fa-youtube"></i></a></li>



                    <li class="nav-settings" class="lang">
                        <a href="<?php echo base_url();?>language/th" style="color: #89d907;"> TH </a>
                    <ul class="nav-settings-list">
                        <a href="<?php echo base_url();?>language/en" style="color: #89d907;"> EN </a>
                    </ul>
                    </li>
                    </ul>
            </div> <!--/navigation-top-->    
                <!-- ==========  Main navigation ========== -->


                <div class="navigation navigation-main">

                    <!-- Setup your logo here-->

                    <a href="/main" class="logo"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="" /></a>

                    <!-- Mobile toggle menu -->

                    <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

                    <!-- Convertible menu (mobile/desktop)-->

                    <div class="floating-menu">

                        <!-- Mobile toggle menu trigger-->

                        <div class="close-menu-wrapper">
                            <span class="close-menu"><i class="icon icon-cross"></i></span>
                        </div>

                        <ul>
                            <li><a href="<?php echo base_url('/home');?>">หน้าหลัก</a></li>
                            
                            <!-- Start Meat -->
                            <li>
                                <a href="<?php echo base_url('/meat');?>"> เนื้อ <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your MEAT</div>
                                                <div class="clearfix">
                                                    <p>Meat is animal flesh that is eaten as food.[1] Humans have hunted and killed animals for meat since prehistoric times. The advent of civilization allowed the domestication of animals such as chickens, sheep, rabbits, pigs and cattle. This eventually led to their use in meat production on an industrial scale with the aid of slaughterhouses.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li class="label">เนื้อ</li>
                                                            <!-- <li><a href="/Poultry">Poultry</a></li> -->
                                                            <li><a href="<?php echo base_url('/Beef');?>">เนื้อวัว</a></li>
                                                            <li><a href="<?php echo base_url('/Lamb');?>">เนื้อแกะ</a></li>
                                                            <li><a href="<?php echo base_url('/Venison');?>">เนื้อกวาง</a></li>
                                                            <li><a href="<?php echo base_url('/Turkey');?>">ไก่งวง</a></li>
                                                        </ul>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!--End Meat -->
                            <!-- Start SEAFOOD -->
                            <li>
                                <a href="<?php echo base_url('/seafood');?>"> อาหารทะเล<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your SEAFOOD</div>
                                                <div class="clearfix">
                                                    <p>This article is about the food. For the UK band, see Seafood (band). For the Chinese film, see Seafood (film). For just fish, see Fish as food.
A seafood platter composed of shrimp, oyster, snail and crab.
Seafood includes any form of food taken from the sea.
Seafood is any form of sea life regarded as food by humans, prominently including fish and shellfish. Shellfish include various species of molluscs (e.g. bivalve molluscs such as clams, oysters, and mussels and cephalopods such as octopus and squid), crustaceans (e.g. shrimp, crabs, and lobster), and echinoderms (e.g. sea cucumbers and sea urchins). Historically, marine mammals such as cetaceans (whales and dolphins) as well as seals have been eaten as food, though that happens to a lesser extent in modern times.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li class="label">อาหารทะเล</li>
                                                            <li><a href="<?php echo base_url('/Fish');?>">ปลา</a></li>
                                                            <li><a href="<?php echo base_url('/Shells');?>">หอย</a></li>
                                                            <li><a href="<?php echo base_url('/Cephalopod');?>">ปลาหมึก</a></li>
                                                            <li><a href="<?php echo base_url('/Shrimp');?>">กุ้ง</a></li>
                                                        </ul>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!--End SEAFOOD -->
                            <!-- Start Fruit -->
                            <li>
                                <a href="<?php echo base_url('/Fruit');?>">ผลไม้ <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your Fruit</div>
                                                <div class="clearfix">
                                                    <p>In botany, a fruit is the seed-bearing structure in flowering plants that is formed from the ovary after flowering. Fruits are the means by which flowering plants (also known as angiosperms) disseminate their seeds. Edible fruits in particular have long propagated using the movements of humans and animals in a symbiotic relationship that is the means for seed dispersal for the one group and nutrition for the other.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li class="label">ผลไม้</li>
                                                            <li><a href="<?php echo base_url('/Apple');?>">แอปเปิ้ล</a></li>
                                                            <li><a href="<?php echo base_url('/Cherries');?>">เชอร์รี่</a></li>
                                                            <li><a href="<?php echo base_url('/Stone_fruit');?>">ผลไม้หิน</a></li>
                                                            <li><a href="<?php echo base_url('/Navel_citrus');?>">ส้ม</a></li>
                                                            <!-- <li><a href="/Strawberry">Strawberry</a></li> -->
                                                        </ul>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!--End Fruit -->  
                            <!-- Start Vegetable -->
                            <li>
                                <a href="<?php echo base_url('/vegetable');?>"> ผัก <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your Vegetable</div>
                                                <div class="clearfix">
                                                    <p>In botany, a fruit is the seed-bearing structure in flowering plants that is formed from the ovary after flowering. Fruits are the means by which flowering plants (also known as angiosperms) disseminate their seeds. Edible fruits in particular have long propagated using the movements of humans and animals in a symbiotic relationship that is the means for seed dispersal for the one group and nutrition for the other.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li class="label">ผัก</li>
                                                            <li><a href="<?php echo base_url('/Carrot');?>">แครอท</a></li>
                                                            <li><a href="<?php echo base_url('/Beet_root');?>">บีทรูท</a></li>
                                                            <li><a href="<?php echo base_url('/White_onion');?>">หัวหอม</a></li>
                                                            <li><a href="<?php echo base_url('/Sweet_potatoes');?>">มันหวาน</a></li>
                                                        </ul>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!--End Vegetable -->  
                            <!-- Start Dairy -->
                            <li>
                                <a href="<?php echo base_url('/dairy');?>">นม<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your Dairy</div>
                                                <div class="clearfix">
                                                    <p>dairy is a business enterprise established for the harvesting or processing (or both) of animal milk – mostly from cows or buffaloes, but also from goats, sheep, horses, or camels – for human consumption. A dairy is typically located on a dedicated dairy farm or in a section of a multi-purpose farm (mixed farm) that is concerned with the harvesting of milk.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li class="label">นม</li>
                                                            <li><a href="<?php echo base_url('/Yogurt');?>">โยเกิร์ต</a></li>
                                                            <li><a href="<?php echo base_url('/Cheese');?>">ชีส</a></li>
                                                            <li><a href="<?php echo base_url('/Butter');?>">เนย</a></li>
                                                        </ul>
                                                    </div>
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!--End Dairy -->  
                            <!-- Start Others -->
                            <li>
                                <a href="<?php echo base_url('/Others');?>">อื่น<span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                <div class="navbar-dropdown">
                                    <div class="navbar-box">

                                        <!-- box-1 (left-side)-->

                                        <div class="box-1">
                                            <div class="box">
                                                <div class="h2">Find your Others</div>
                                                <div class="clearfix">
                                                    <p>Food is any substance[1] consumed to provide nutritional support for an organism. Food is usually of plant, animal or fungal origin, and contains essential nutrients, such as carbohydrates, fats, proteins, vitamins, or minerals. The substance is ingested by an organism and assimilated by the organism's cells to provide energy, maintain life, or stimulate growth. Different species of animals have different feeding behaviours that satisfy the needs of their unique metabolisms, often evolved to fill a specific ecological niche within specific geographical contexts.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- box-2 (right-side)-->

                                        <div class="box-2">
                                            <div class="box clearfix">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            <li class="label">อื่น</li>
                                                            <li><a href="<?php echo base_url('/Processed_foods');?>">อาหารแปรรูป</a></li>
                                                            <li><a href="<?php echo base_url('/Beveage');?>">เครื่องดื่ม</a></li>
                                                            <li><a href="<?php echo base_url('/Confetionary');?>">ขนมหวาน</a></li>
                                                        </ul>
                                                    </div>
                               
                                                </div> <!--/row-->
                                            </div> <!--/box-->
                                        </div> <!--/box-2-->
                                    </div> <!--/navbar-box-->
                                </div> <!--/navbar-dropdown-->
                            </li>
                            <!--End Others -->  
                            <li class="label"><a href="<?php echo base_url('/contact');?>">ติดต่อ</a></li>
                           
                        </ul>
                    </div> <!--/floating-menu-->

                <?php }?>


            </div> <!--/container-->


        </nav>

        <!-- ========================  Header content ======================== -->