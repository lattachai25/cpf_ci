<?php
    $this->db->select("*");
    $this->db->from("footer");
    $query = $this->db->get();
    $footer = $query->row();
?>



<footer>
            <div class="container">

                <!--footer showroom-->
                <div class="footer-showroom" style="color:#fff !important">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2><?php echo $footer->name_brand_en;?></h2>
                            <p><?php echo $footer->	address_en;?></p>

                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="Contact" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                            <div class="call-us h4"><span class="icon icon-phone-handset"></span>  <?php echo $footer->tel;?></div>
                        </div>
                    </div>
                </div>

                <!--footer links-->
                <div class="footer-links" style="font-weight: 600 !important">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                    
                            <ul>
                                <li><a href="<?php echo base_url('/Meat');?>">MEAT</a></li>
                                <li><a href="<?php echo base_url('/Seafood');?>">SEAFOOD</a></li>
                                <li><a href="<?php echo base_url('/Fruit');?>">FRUIT</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                      
                            <ul>
                                <li><a href="<?php echo base_url('/Vegetable');?>">VEGETABLE</a></li>
                                <li><a href="<?php echo base_url('/Dairy');?>">DAIRY</a></li>
                                <li><a href="<?php echo base_url('/Others');?>">OTHERS</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                         
                            <ul>
                                <li><a href="<?php echo base_url('/About');?>">ABOUT</a></li>
                                <li><a href="<?php echo base_url('/Contact');?>">CONTACT</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5>Fresh products imported from Australia</h5>
                            
                            <div class="form-group form-newsletter">
                                <input class="form-control" type="text" name="email" value="" placeholder="Email address" />
                                <input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
                            </div>
                        </div>
                    </div>
                </div>

                <!--footer social-->

                <div class="footer-social" >
                    <div class="row">
                        <div class="col-sm-6">
                        <a href="#">CPFAUSTRALIA.COM</a>
                        </div>
                        <div class="col-sm-6 links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>











<?php  if($this->session->userdata('lang') === 'th'){ ?>
<footer>
            <div class="container">

                <!--footer showroom-->
                <div class="footer-showroom" style="color:#fff !important">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2><?php echo $footer->name_brand_th;?></h2>
                            <p><?php echo $footer->	address_th;?></p>

                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="Contact" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                            <div class="call-us h4"><span class="icon icon-phone-handset"></span>  <?php echo $footer->tel;?></div>
                        </div>
                    </div>
                </div>

                <!--footer links-->
                <div class="footer-links" style="font-weight: 600 !important">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                    
                            <ul>
                                <li><a href="<?php echo base_url('/Meat');?>">เนื้อ</a></li>
                                <li><a href="<?php echo base_url('/Seafood');?>">อาหารทะเล</a></li>
                                <li><a href="<?php echo base_url('/Fruit');?>">ผลไม้</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                      
                            <ul>
                                <li><a href="<?php echo base_url('/Vegetable');?>">ผัก</a></li>
                                <li><a href="<?php echo base_url('/Dairy');?>">นม</a></li>
                                <li><a href="<?php echo base_url('/Others');?>">อื่นๆ</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                         
                            <ul>
                                <li><a href="<?php echo base_url('/About');?>">เกี่ยวกับเรา</a></li>
                                <li><a href="<?php echo base_url('/Contact');?>">ติดต่อ</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5>Fresh products imported from Australia</h5>
                            
                            <div class="form-group form-newsletter">
                                <input class="form-control" type="text" name="email" value="" placeholder="Email address" />
                                <input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
                            </div>
                        </div>
                    </div>
                </div>

                <!--footer social-->

                <div class="footer-social" >
                    <div class="row">
                        <div class="col-sm-6">
                        <a href="#">CPFAUSTRALIA.COM</a>
                        </div>
                        <div class="col-sm-6 links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<?php }if($this->session->userdata('lang') === 'en'){ ?>
    <footer>
            <div class="container">

                <!--footer showroom-->
                <div class="footer-showroom" style="color:#fff !important">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2><?php echo $footer->name_brand_en;?></h2>
                            <p><?php echo $footer->	address_en;?></p>

                        </div>
                        <div class="col-sm-4 text-center">
                            <a href="Contact" class="btn btn-clean"><span class="icon icon-map-marker"></span> Get directions</a>
                            <div class="call-us h4"><span class="icon icon-phone-handset"></span>  <?php echo $footer->tel;?></div>
                        </div>
                    </div>
                </div>

                <!--footer links-->
                <div class="footer-links" style="font-weight: 600 !important">
                    <div class="row">
                        <div class="col-sm-4 col-md-2">
                    
                            <ul>
                                <li><a href="<?php echo base_url('/Meat');?>">MEAT</a></li>
                                <li><a href="<?php echo base_url('/Seafood');?>">SEAFOOD</a></li>
                                <li><a href="<?php echo base_url('/Fruit');?>">FRUIT</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                      
                            <ul>
                                <li><a href="<?php echo base_url('/Vegetable');?>">VEGETABLE</a></li>
                                <li><a href="<?php echo base_url('/Dairy');?>">DAIRY</a></li>
                                <li><a href="<?php echo base_url('/Others');?>">OTHERS</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2">
                         
                            <ul>
                                <li><a href="<?php echo base_url('/About');?>">ABOUT</a></li>
                                <li><a href="<?php echo base_url('/Contact');?>">CONTACT</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h5>Fresh products imported from Australia</h5>
                            
                            <div class="form-group form-newsletter">
                                <input class="form-control" type="text" name="email" value="" placeholder="Email address" />
                                <input type="submit" class="btn btn-clean btn-sm" value="Subscribe" />
                            </div>
                        </div>
                    </div>
                </div>

                <!--footer social-->

                <div class="footer-social" >
                    <div class="row">
                        <div class="col-sm-6">
                        <a href="#">CPFAUSTRALIA.COM</a>
                        </div>
                        <div class="col-sm-6 links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<?php }?>