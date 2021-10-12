<?php $id; ?>
<?php
$this->db->select("*");
$this->db->from("sweetpotatoes");
$this->db->where("sweetpotatoes.id",$id);
$query = $this->db->get();
$beef = $query->row();
?>

<?php $id_brands = $beef->id_brand; ?>
<?php $id_cat = $beef->id_cat; ?>
<?php $id_subcat = $beef->id_subcat; ?>

<?php
$this->db->select("*");
$this->db->from("brands");
$this->db->where("brands.id_brand",$id_brands);
$query = $this->db->get();
$brand = $query->row();
?>

<?php
$this->db->select("*");
$this->db->from("categories");
$this->db->where("categories.id_cat",$id_cat);
$query = $this->db->get();
$cat = $query->row();
?>

<?php
$this->db->select("*");
$this->db->from("sub_categories");
$this->db->where("sub_categories.id_subcat",$id_subcat);
$query = $this->db->get();
$subcat = $query->row();
?>

<style>
    .product .main {
    background: #000000c7 !important;
}
.products {
    background-color: #e2e2e2 !important;
}
.product .info {
    background-color: #e2e2e2 !important;
    padding: 20px 0;
    z-index: 1;
}
.product {
    background: #000000 !important;
}
.product .title {
    color: #fff !important;
}
.popup-main .mfp-close {
    color: white !important;
}
</style>

<?php  if($this->session->userdata('lang') === 'th'){ ?>


<div class="wrapper">

        <!-- ========================  Product  beef  ======================== -->

        <section class="product">
            <div class="main">
                <div class="container">

                <br><br><br><br><br><br>
                
                    <div class="row product-flex">
                        <div class="col-md-4 col-sm-12 product-flex-info">
                            <div class="clearfix">

                                <!-- === product-title === -->

                                <h1 class="title" data-title="beef"> <?php echo $brand->name_brand_th;?> <small>BROWNES beef PRODUCT</small></h1>

                                <div class="clearfix">

                                    <!-- === price wrapper === -->

                                    <div class="price">
                                        <span class="h3">
                                        <?php echo $subcat->name_sub_categories;?>
                                        </span>
                                    </div>
                                    <hr />

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Brand name</strong></span>
                                        <span> <?php echo $brand->name_brand_th;?> </span>
                                    </div>

                                    <!-- === info-box === -->

                                    <div class="info-box">
                                        <span><strong>Type Product</strong></span>
                                        <span>  <?php echo $cat->name_categories;?></span>
                                    </div>

                                    <!-- === info-box === -->

                                    <hr />
                                                            <!-- === product-designer === -->

                                    <div class="info-box">
                                        <div class="image">
                                        <img src="<?php echo base_url();?>assets/uploads/<?php echo $brand->images;?>" width="80%" />
                                        </div>
                                    </div>
                                </div> <!--/clearfix-->
                            </div> <!--/product-info-wrapper-->
                        </div> <!--/col-md-4-->
                        <!-- === product item gallery === -->

                        <div class="col-md-8 col-sm-12 product-flex-gallery">
                            <!-- === product gallery === -->

                            <div class="owl-product-gallery open-popup-gallery">
                            <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show;?>" alt="" style="height:500px;" /></a>  
                            <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show1;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show1;?>" alt="" style="height:500px;" /></a>  
                            <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show2;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show2;?>" alt="" style="height:500px;" /></a>  
                            <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show3;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show3;?>" alt="" style="height:500px;" /></a>  
                            <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show4;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show4;?>" alt="" style="height:500px;" /></a>  
                            <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show5;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show5;?>" alt="" style="height:500px;" /></a>  
                          
                            </div>
                        </div>
                        <a href="<?php echo base_url('/Sweet_potatoes');?>" class="btn btn-clean" style="margin-top:80px; width:150px; float:right;"> Back </a>

                    </div>
                </div>
            </div>

            <!-- === product-info === -->

            <div class="info">
                <div class="container">
                    <div class="row">

                        <!-- === nav-tabs === -->

                        <div class="col-md-12">
                            <ul class="nav nav-tabs" role="tablist">
                                <!-- <li role="presentation" class="active">
                                    <a href="#designer" aria-controls="designer" role="tab" data-toggle="tab">
                                        <i class="icon icon-eye"></i>
                                        <span>PRODUCT LIST</span>
                                    </a>
                                </li> -->
                                <li role="presentation" class="active">
                                    <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                                        <i class="icon icon-sort-alpha-asc"></i>
                                        <span>Description</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- === tab-panes === -->

                            <div class="tab-content">

                                <!-- ============ tab #2 ============ -->

                                <div role="tabpanel" class="tab-pane active" id="design">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h3>Dimensions</h3>
                                                <p>
                                                <img class="full-image" src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show;?>"  width="250" />
                                                   
                                                </p>
                                                         
                                                <div class="icon_right" style="float: right;">
                                                <b>Read Attachment</b> <i class="icon icon-arrow-right"></i> <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->attachment;?>" target="_blank"  class="btn btn-main btn-xs" ><i class="icon icon-layers"></i></a>
                                                </div>
                                                <br>
                                                <hr />

                                            </div>
                                            <div class="col-md-8">
                                                <h3><?php echo $beef->text_title_th;?></h3>
                                                <p>
                                                <?php echo $beef->detel_product_th;?>
                                                </p>
                                            
                                            </div>
                                        </div> <!--/row-->
                                    </div> <!--/content-->
                                </div> <!--/tab-pane-->
                                <!-- ============ tab #3 ============ -->

                            </div> <!--/tab-content-->
                        </div>
                    </div> <!--/row-->
                </div> <!--/container-->
            </div> <!--/info-->
        </section>

   
<?php }if($this->session->userdata('lang') === 'en'){ ?>


    <div class="wrapper">

<!-- ========================  Product  beef  ======================== -->

<section class="product">
    <div class="main">
        <div class="container">

        <br><br><br><br><br><br>
        
            <div class="row product-flex">
                <div class="col-md-4 col-sm-12 product-flex-info">
                    <div class="clearfix">

                        <!-- === product-title === -->

                        <h1 class="title" data-title="beef"> <?php echo $brand->name_brand_en;?> <small>BROWNES beef PRODUCT</small></h1>

                        <div class="clearfix">

                            <!-- === price wrapper === -->

                            <div class="price">
                                <span class="h3">
                                <?php echo $subcat->name_sub_categories;?>
                                </span>
                            </div>
                            <hr />

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Brand name</strong></span>
                                <span> <?php echo $brand->name_brand_en;?> </span>
                            </div>

                            <!-- === info-box === -->

                            <div class="info-box">
                                <span><strong>Type Product</strong></span>
                                <span>  <?php echo $cat->name_categories;?></span>
                            </div>

                            <!-- === info-box === -->

                            <hr />
                                                    <!-- === product-designer === -->

                            <div class="info-box">
                                <div class="image">
                                <img src="<?php echo base_url();?>assets/uploads/<?php echo $brand->images;?>" width="80%" />
                                </div>
                            </div>
                        </div> <!--/clearfix-->
                    </div> <!--/product-info-wrapper-->
                </div> <!--/col-md-4-->
                <!-- === product item gallery === -->

                <div class="col-md-8 col-sm-12 product-flex-gallery">
                    <!-- === product gallery === -->

                    <div class="owl-product-gallery open-popup-gallery">
                    <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show;?>" alt="" style="height:500px;" /></a>  
                    <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show1;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show1;?>" alt="" style="height:500px;" /></a>  
                    <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show2;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show2;?>" alt="" style="height:500px;" /></a>  
                    <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show3;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show3;?>" alt="" style="height:500px;" /></a>  
                    <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show4;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show4;?>" alt="" style="height:500px;" /></a>  
                    <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show5;?>"><img src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show5;?>" alt="" style="height:500px;" /></a>  

                    </div>
                </div>
                <a href="<?php echo base_url('/Sweet_potatoes');?>" class="btn btn-clean" style="margin-top:80px; width:150px; float:right;"> Back </a>

            </div>
        </div>
    </div>

    <!-- === product-info === -->

    <div class="info">
        <div class="container">
            <div class="row">

                <!-- === nav-tabs === -->

                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <!-- <li role="presentation" class="active">
                            <a href="#designer" aria-controls="designer" role="tab" data-toggle="tab">
                                <i class="icon icon-eye"></i>
                                <span>PRODUCT LIST</span>
                            </a>
                        </li> -->
                        <li role="presentation" class="active">
                            <a href="#design" aria-controls="design" role="tab" data-toggle="tab">
                                <i class="icon icon-sort-alpha-asc"></i>
                                <span>Description</span>
                            </a>
                        </li>
                    </ul>

                    <!-- === tab-panes === -->

                    <div class="tab-content">

                        <!-- ============ tab #2 ============ -->

                        <div role="tabpanel" class="tab-pane active" id="design">
                            <div class="content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3>Dimensions</h3>
                                        <p>
                                        <img class="full-image" src="<?php echo base_url();?>assets/uploads/<?php echo $beef->images_show;?>"  width="250" />
                                           
                                        </p>
                                                 
                                        <div class="icon_right" style="float: right;">
                                        <b>Read Attachment</b> <i class="icon icon-arrow-right"></i> <a href="<?php echo base_url();?>assets/uploads/<?php echo $beef->attachment;?>" target="_blank"  class="btn btn-main btn-xs" ><i class="icon icon-layers"></i></a>
                                        </div>
                                        <br>
                                        <hr />

                                    </div>
                                    <div class="col-md-8">
                                        <h3><?php echo $beef->text_title_en;?></h3>
                                        <p>
                                        <?php echo $beef->detel_product_en;?>
                                        </p>
                                    
                                    </div>
                                </div> <!--/row-->
                            </div> <!--/content-->
                        </div> <!--/tab-pane-->
                        <!-- ============ tab #3 ============ -->

                    </div> <!--/tab-content-->
                </div>
            </div> <!--/row-->
        </div> <!--/container-->
    </div> <!--/info-->
</section>

<?php }?>    