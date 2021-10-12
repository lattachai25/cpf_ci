<style>
    .contact #map {
    width: 100%;
    height: 250px !important;
    background-color:#000 !important;
}


.white-block hr {
    border-top: 1px solid #000;
}
</style>

<?php
    $this->db->select("*");
    $this->db->from("contacts");
    $query = $this->db->get();
    $contact = $query->result();
?>



<?php  if($this->session->userdata('lang') === 'th'){ ?>
<div class="wrapper">

<section class="contact" style="background-color: #7e7f83 !important;">
<br><br><br><br><br>
<br><br><br>
<!-- === Goolge map === -->

<?php foreach($contact as $contacts): ?>
<div class="container">

    <div class="row">

    <div class="cart-wrapper">

        <div class="note-block">

            <div class="row">
                <!-- === left content === -->
                        <div class="col-md-12">
                            <center> 
                                <div class="h3" style="color:#000;">MAP CPF AUSTRALIA</div> 
                                <p style="color:#000;"><?php echo $contacts->text_title_th;?></p>
                            </center>
                            <br>
                        </div>
                <div class="col-md-6">

                    <div class="white-block">

                        <div class="row">
                            <div class="col-md-12">
                            <iframe src="<?php echo $contacts->link_map;?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>

                    </div> <!--/col-md-6-->

                </div>

                <!-- === right content === -->

                <div class="col-md-6">
                    <div class="white-block">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="h4" style="color:#000;">MAP CPF AUSTRALIA</div>
                                    <span style="color:#fff;"><?php echo $contacts->address_th;?></span>
                                <br><br><br>  
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="row">
                            <!-- <div class="h4">SOCAL MEDIA</div> -->
                            <div class="col-md-6">
                                <div class="form-group" style="color:#fff;">
                                <strong style="color:#000;">SOCAL MEDIA</strong><br /><hr />
                                <span>
                                <table style="width:100%">
                                    <tr>
                                        <td style="color:#000;">FACEBOOK </td>
                                        <td><a href="<?php echo $contacts->faceboot_link_th;?>" style="color:#fff;">: <?php echo $contacts->faceboot_link_th;?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#000;">LINE </td>
                                        <td><a href="<?php echo $contacts->line_link_th;?>" style="color:#fff;">: <?php echo $contacts->line_link_th;?></a></td>
                                    </tr>
                                </table>
                                </span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" style="color:#fff;">
                                <strong style="color:#000;">PHONE</strong><br /><hr />
                                <span>
                                <table style="width:100%">
                                    <tr>
                                        <td style="color:#000;">T </td>
                                        <td>:<?php echo $contacts->tel_link_th;?></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#000;">M </td>
                                        <td>:<?php echo $contacts->mobile_link_th;?></td>
                                    </tr>
                                </table>
                                </span>
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-group" style="color:#000;">
                                <strong>E-MAIL</strong><br /><hr />
                                <span>
                                   <a href="<?php echo $contacts->Email_link1_th;?>" style="color:#000;"><?php echo $contacts->Email_link1_th;?></a> <br />
                                   <a href="<?php echo $contacts->Email_link2_th;?>" style="color:#000;"><?php echo $contacts->Email_link2_th;?></a> 
                                </span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- ========================  Cart wrapper ======================== -->

    </div> <!--/row-->
</div><!--/container-->
<?php endforeach; ?>


<?php }if($this->session->userdata('lang') === 'en'){ ?>



    <div class="wrapper">

<section class="contact" style="background-color: #7e7f83 !important;">
<br><br><br><br><br>
<br><br><br>
<!-- === Goolge map === -->

<?php foreach($contact as $contacts): ?>
<div class="container">

    <div class="row">

    <div class="cart-wrapper">

        <div class="note-block">

            <div class="row">
                <!-- === left content === -->
                        <div class="col-md-12">
                            <center> 
                                <div class="h3" style="color:#000;">MAP CPF AUSTRALIA</div> 
                                <p style="color:#000;"><?php echo $contacts->text_title_en;?></p>
                            </center>
                            <br>
                        </div>
                <div class="col-md-6">

                    <div class="white-block">

                        <div class="row">
                            <div class="col-md-12">
                            <iframe src="<?php echo $contacts->link_map;?>" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>

                    </div> <!--/col-md-6-->

                </div>

                <!-- === right content === -->

                <div class="col-md-6">
                    <div class="white-block">

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="h4" style="color:#000;">MAP CPF AUSTRALIA</div>
                                    <span style="color:#fff;"><?php echo $contacts->address_en;?></span>
                                <br><br><br>  
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="row">
                            <!-- <div class="h4">SOCAL MEDIA</div> -->
                            <div class="col-md-6">
                                <div class="form-group" style="color:#fff;">
                                <strong style="color:#000;">SOCAL MEDIA</strong><br /><hr />
                                <span>
                                <table style="width:100%">
                                    <tr>
                                        <td style="color:#000;">FACEBOOK </td>
                                        <td><a href="<?php echo $contacts->faceboot_link_en;?>" style="color:#fff;">: <?php echo $contacts->faceboot_link_en;?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#000;">LINE </td>
                                        <td><a href="<?php echo $contacts->line_link_en;?>" style="color:#fff;">: <?php echo $contacts->line_link_en;?></a></td>
                                    </tr>
                                </table>
                                </span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" style="color:#fff;">
                                <strong style="color:#000;">PHONE</strong><br /><hr />
                                <span>
                                <table style="width:100%">
                                    <tr>
                                        <td style="color:#000;">T </td>
                                        <td>:<?php echo $contacts->tel_link_en;?></td>
                                    </tr>
                                    <tr>
                                        <td style="color:#000;">M </td>
                                        <td>:<?php echo $contacts->mobile_link_en;?></td>
                                    </tr>
                                </table>
                                </span>
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-group" style="color:#000;">
                                <strong>E-MAIL</strong><br /><hr />
                                <span>
                                   <a href="<?php echo $contacts->Email_link1_en;?>" style="color:#000;"><?php echo $contacts->Email_link1_en;?></a> <br />
                                   <a href="<?php echo $contacts->Email_link2_en;?>" style="color:#000;"><?php echo $contacts->Email_link2_en;?></a> 
                                </span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- ========================  Cart wrapper ======================== -->

    </div> <!--/row-->
</div><!--/container-->
<?php endforeach; ?>

<?php }?>


</section>

</div>




