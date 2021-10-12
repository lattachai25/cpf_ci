@extends('.user.userlayout.adminpage')
@section('title', 'HOME')
@section('keywords', 'CPFAUSTRALIA')
@section('description', 'description CPFAUSTRALIA')
@section('google', 'google')
@section('facebook', 'Facebook')
@section('content')


        <!-- ========================  Header Slide ======================== -->

        <section class="header-content">

            <div class="owl-slider">

                <!-- === slide item === -->
                @foreach ($Slidehome as $Slidehomes)
                <div class="item" style="background-image:url({{ $Slidehomes->images_product1 }})">
                    <div class="box">
                        <div class="container">
                            <h2 class="title animated h1" data-animation="fadeInDown">{{ $Slidehomes->text_title_en }}</h2>
                            <div class="animated" data-animation="fadeInUp">
                            {{ $Slidehomes->name_product_en }}
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
              
            </div> <!--/owl-slider-->
        </section>
        <!-- ========================  Header Slide ======================== -->
        <!-- ========================  Icons slider ======================== -->
        <section class="owl-icons-wrapper owl-icons-frontpage">

            <!-- === header === -->



            <div class="container">

                <div class="owl-icons">

                    <!-- === icon item === -->

                    <a href="/Meat">
                        <figure>
                            <i class="flaticon-meat"></i>
                            <figcaption>MEAT</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Seafood">
                        <figure>
                            <i class="flaticon-seafood"></i>
                            <figcaption>SEAFOOD</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Fruit">
                        <figure>
                            <i class="flaticon-fruits"></i>
                            <figcaption>FRUITS</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Vegetable">
                        <figure>
                            <i class="flaticon-vegetable"></i>
                            <figcaption>VEGRTABLE</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Dairy">
                        <figure>
                            <i class="flaticon-milk"></i>
                            <figcaption>DAIRY</figcaption>
                        </figure>
                    </a>

                    <!-- === icon item === -->

                    <a href="/Cloche">
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

                <div class="row">

                    <!-- === product-item What_The_Best_Home === -->
                    
                    @foreach ($whatthebest as $whatthebests)
                    <div class="col-md-4 col-xs-6">
                        <article>
                            <div class="figure-grid">
                                <div class="image">
                                    <a href="/#">
                                        <img src="{{ $whatthebests->images_product1 }}" alt="" width="360" height="250" />
                                    </a>
                                </div>
                                <div class="text" style="background-color:#000000b0;">
                                    <h2 class="title h4" ><a href="" style="color:#fff !important;">{{ $whatthebests->text_title_en }}</a></h2>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
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

            <ul class="stretcher">

                <!-- === stretcher item === -->
                @foreach ($bestsellershome as $bestsellershomes)
                <li class="stretcher-item" style="background-image:url({{ $bestsellershomes->images_product1 }});">
                    <!--main text-->
                    <figure>
                        <h4>{{ $bestsellershomes->text_title_en }}</h4>
                        <figcaption>{{ $bestsellershomes->text_title_en }}</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="/"></a>
                </li>
                @endforeach

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

                    <!-- === blog item === -->
                    @foreach ($enjoyyourhome as $enjoyyourhomes)
                    <div class="col-sm-4">
                        <article>
                            <a href="/">
                                <div class="image">
                                    <img src="{{ $enjoyyourhomes->images_product1 }}" alt="" />
                                </div>
                                <div class="entry entry-block">
                                    <!-- <div class="date">06/06/2021</div> -->
                                    <div class="title">
                                        <h2 class="h4">{{ $enjoyyourhomes->text_title_en }} <br><br></h2>
                                    </div>
                                    <div class="description" style="background-color: rgba(0, 0, 0, 0.6); padding: 20px;">
                                        <p>
                                        {{ $enjoyyourhomes->detel_product_en }}
                                        </p>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block" style="box-shadow: rgb(255, 255, 255) 2px 2px 2px;">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    @endforeach

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
                        <p><a href="/About" class="btn btn-clean">Read full story</a></p>
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

                <div class="row">

                    <!-- === SHOW NOW item === -->

                    @foreach ($shownowhome as $shownowhomes)
                    <div class="col-sm-4">
                        <article>
                            <a href="">
                                <div class="image" style="background-image:url({{ $shownowhomes->images_product1 }})">
                                    <img src="{{ $shownowhomes->images_product1 }}" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <div class="date" style="text-transform:uppercase;">
                                            <span>{{ date('M', strtotime($shownowhomes->day)) }}</span>
                                            <strong>{{ date('d', strtotime($shownowhomes->day)) }}</strong>
                                            <span>{{ date('Y', strtotime($shownowhomes->day)) }}</span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h2 class="h5">{{ $shownowhomes->text_title_en }} ...</h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    @endforeach

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

            <div class="row">

                <!-- === VALUCE PARTNERS item === -->
                @foreach ($valucepartnershome as $valucepartnershomes)
                    <div class="col-sm-4">
                        <article>
                            <a href="">
                                <div class="image" style="background-image:url({{ $valucepartnershomes->images_product1 }})">
                                    <img src="{{ $valucepartnershomes->images_product1 }}" alt="" />
                                </div>
                                <div class="entry entry-table">
                                    <div class="date-wrapper">
                                        <div class="date" style="text-transform:uppercase;">
                                            <span>{{ date('M', strtotime($valucepartnershomes->day)) }}</span>
                                            <strong>{{ date('d', strtotime($valucepartnershomes->day)) }}</strong>
                                            <span>{{ date('Y', strtotime($valucepartnershomes->day)) }}</span>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h2 class="h5">{{ $valucepartnershomes->text_title_en }} ...</h2>
                                    </div>
                                </div>
                                <div class="show-more">
                                    <span class="btn btn-main btn-block">Read more</span>
                                </div>
                            </a>
                        </article>
                    </div>
                    @endforeach

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

            <div class="gallery clearfix">
                @foreach ($ourotherproductshome as $ourotherproductshomes)
                <a class="item" href="Showmeat">
                    <img src="{{ $ourotherproductshomes->images_product1 }}" min-height="200" alt="Alternate Text" />
                </a>
                @endforeach
            </div> <!--/gallery-->

        </section>
        <!-- ======================== สินค้าอื่นๆ ======================== -->
        <div class="scroll-top visible"><i class="icon icon-chevron-up"></i></div>

@endsection