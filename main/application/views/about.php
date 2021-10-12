<style>
    .history .history-desc {
    background-color: #313133fc !important;
    color: #fff !important;
    padding-left: 120px;
}
.history .history-title:before {
    background-color: #060606 !important;
}
</style>


<?php
    $this->db->select("*");
    $this->db->from("abouts");
    $query = $this->db->get();
    $about = $query->result();
?>

<?php  if($this->session->userdata('lang') === 'th'){ ?>
    <div class="wrapper">
        <!-- ========================  Main header ======================== -->
        <section class="banner" style="background-image:url(assets/images/gallery-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="title">Our story</h2>
                        <?php foreach($about as $abouts): ?>
                            <?php echo $abouts->story_th;?>
                        <?php endforeach; ?>    
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================  History ======================== -->

        <section class="history">
            <div class="container">

                <!-- === History header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">A bit of history</h1>
                            <div class="text">
                            <?php foreach($about as $abouts): ?>
                                <?php echo $abouts->history_th;?>
                            <?php endforeach; ?>  
    
                            </div>
                        </div>
                    </div>
                </header>
                    <!-- === row item === -->
                    <?php foreach($about as $abouts): ?>
                    <div class="row row-block">
                        <div class="col-md-5 history-image" style="background-image:url(assets/uploads/<?php echo $abouts->images;?>)">
                            <div class="history-title">
                                <h2 class="title"><?php echo $abouts->protion_th;?></h2>
                                <p style="font-size:13px !important;">CPF AUSTRALIA</p>
                            </div>
                        </div>
                        <div class="col-md-7 history-desc">
                            <div class="h5 title"><?php echo $abouts->name_th;?></div>
                            <?php echo $abouts->content_th;?>
 
                        </div>
                    </div>
                    <?php endforeach; ?>  
                    <!-- === row item === -->
            </div>
        </section>
  
</div>
<?php }if($this->session->userdata('lang') === 'en'){ ?>
<div class="wrapper">
        <!-- ========================  Main header ======================== -->
        <section class="banner" style="background-image:url(assets/images/gallery-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 text-center">
                        <h2 class="title">Our story</h2>
                        <?php foreach($about as $abouts): ?>
                            <?php echo $abouts->story_en;?>
                        <?php endforeach; ?>    
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================  History ======================== -->

        <section class="history">
            <div class="container">

                <!-- === History header === -->

                <header>
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h1 class="h2 title">A bit of history</h1>
                            <div class="text">
                            <?php foreach($about as $abouts): ?>
                                <?php echo $abouts->history_en;?>
                            <?php endforeach; ?>  
    
                            </div>
                        </div>
                    </div>
                </header>
                    <!-- === row item === -->
                    <?php foreach($about as $abouts): ?>
                    <div class="row row-block">
                        <div class="col-md-5 history-image" style="background-image:url(assets/uploads/<?php echo $abouts->images;?>)">
                            <div class="history-title">
                                <h2 class="title"><?php echo $abouts->protion_en;?></h2>
                                <p style="font-size:13px !important;">CPF AUSTRALIA</p>
                            </div>
                        </div>
                        <div class="col-md-7 history-desc">
                            <div class="h5 title"><?php echo $abouts->name_en;?></div>
                            <?php echo $abouts->content_en;?>
 
                        </div>
                    </div>
                    <?php endforeach; ?>  
                    <!-- === row item === -->
            </div>
        </section>
  
</div>
<?php }?>