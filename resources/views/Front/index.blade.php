@extends('Front.layout.master')
    @section('title','Home')

    @section('navbar')
        @include('Front.includes.navbar')
    @stop

    @section('content')
    <div class="jumbotron" style="margin-top: 30px;
    padding: 0; background-color:white">




<!--End of header -->
    <section id="home" class="home" dir="auto">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home wow fadeInUp text-center animated animated" data-wow-duration="700ms" style="visibility: visible; animation-duration: 700ms; animation-name: fadeInUp;">
                            <div class="heading text-center h2" style="color: #FFFFFF;">أزاي هتطلب الخدمة  </div>
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-2 howorder">
                                    <img src="{{asset('image/computer.png')}}" style="height: 128px;width:128px">
                                    <h5 style="color:#FFF">  اكتب بياناتك</h5>
                                </div>
                                <div class=" col-sm-2 howorder">
                                    <img src="{{asset('image/selfie.png')}}" style="height: 128px;width:128px">
                                    <h5 style="color:#FFF">صور البيكيا اللى عندك</h5>
                                </div>

                                <div class=" col-sm-2 howorder">
                                    <img src="{{asset('image/choices.png')}}" style="height: 128px;width:128px">
                                    <h5 style="color:#FFF">اختار انواع البيكيا </h5>
                                </div>
                                <div class=" col-sm-2">
                                    <img src="{{asset('image/tap.png')}}" style="height: 128px;width:128px">
                                    <h5 style="color:#FFF;margin-left: 25px">اطلب</h5>
                                </div>
                                <div class=" col-sm-2 howorder">
                                    <img src="{{asset('image/delivery-man.png')}}" style="height: 128px;width:128px">
                                    <h5 style="color:#FFF">مندوبنا هيجيلك لباب البيت</h5>
                                </div>
                            </div>


                            <div class="home_btn">

                                <a href="{{url('/ordernow')}}" class="btn btn-md bt">أطلب الآن</a>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>




 <div class="clearfix"></div>
    <section id="service" class="service">
        <div class="container">
            <div class="heading text-center margin-top-20">
                <i class="glyphicon glyphicon-flash" style="color: orange"></i>
                ليه تستعمل بايوبيكيا ؟

            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <img src="{{asset('image/delivery-man1.png')}}" class="home-icon" alt="">
                    <h5>هنجيلك لحد باب البيت</h5>
                </div>
                <div class="col-sm-2">
                    <img src="{{asset('image/planet-earth.png')}}" class="home-icon" alt="">
                    <h5>هتحافظ على بيئتك</h5>
                </div>
                <div class="col-sm-2">
                    <img src="{{asset('image/price-tag.png')}}" class="home-icon" alt="">
                    <h5>أسعارنا معروفة</h5>
                </div>
                <div class="col-sm-2">
                    <img src="{{asset('image/stopwatch.png')}}" class="home-icon" alt="">
                    <h5>هتختار الميعاد المناسب ليك</h5>
                </div>
                <div class="col-sm-2">
                    <img src="{{asset('image/food-scale-tool.png')}}" class="home-icon" alt="">
                    <h5>ميزاننا مظبوط</h5>
                </div>
            </div>
        </div>
    </section>


   <!-- start carsoule -->


<section class="ourcarsoule" id="sr2">
    <div class="container">
    <div class="heading text-center margin-top-20">
        <i class="glyphicon glyphicon-ok" style="color: orange"></i>
        المسؤلية المجتمعية

    </div>
    <div class="bs-example" id="sr">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
            </ol>
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">

                <div class="item">
                    <img src="{{asset('image/Whole-Family-Recylcling-Together-1140x760.jpg')}}" alt="Third Slide">
                    <div class="carousel-caption">
                        <h3>نسعي لنشر ثقافة أعادة التدوير</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('image/Think-Marketing-The-Founder-Institute-Will-Launch-Its-Newest-Chapter-in-Cairo-Egypt.png')}}" alt="Third Slide">
                    <div class="carousel-caption">
                        <h3>هنساعدك في التخلص من مخلفاتك بطريقة مساعدة للبيئة</h3>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('image/Think-Marketing-The-Founder-Institute-Will-Launch-Its-Newest-Chapter-in-Cairo-Egypt.png')}}" alt="First Slide">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <h3>نقدم أسهاما نحو التنمية المستدامة للبيئة والمجتمع</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('image/save-environment.jpg')}}" alt="Second Slide">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">نحن نعمل علي تعزيز بيئة أمنة</h3>
                    </div>

                </div>
                <div class="item active">
                    <img src="{{asset('image/qmag_scrap_metal_recycling-770x511.jpg')}}" alt="Second Slide">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <h3>نساهم في تحويل المخلفات الي موارد</h3>
                    </div>

                </div>

            </div>




            <!-- Carousel controls -->


            <a class="carousel-control left" href="#myCarousel" data-slide="prev" ar="">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    </div>
</section>

<!-- end carsoule-->







    <section id="counter" class="counter">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="main_counter sections text-center">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12 col-md-6">
                                    <div class="single_counter_right">
                                        <img style="margin-bottom: 30px; width: 100px" src="{{asset('image/garbage-collected.png')}}" alt="">
                                        <h2 class="statistic-counter">0.5</h2>
                                        <p>  طن</p>
                                        <p> جمع قمامة</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12 col-md-6">
                                    <div class="single_counter_right">
                                        <img style="margin-bottom: 30px; width: 100px" src="{{asset('image/order.png')}}" alt="">
                                        <h2 class="statistic-counter">{{$orderCount}}</h2>
                                        <p>طلب</p>
                                    </div>
                                </div>

                               <!-- <div class="col-sm-4 col-xs-12">
                                    <div class="single_counter_right">
                                        <img style="margin-bottom: 30px; width: 100px" src="data/img/users.png" alt="">
                                        <h2 class="statistic-counter">17</h2>
                                        <p>مستخدم</p>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="clearfix"></div>



    <div class="container contact">
        <div class="row allcontact">
        <div class="col-sm-4 col-md-4 text-center">
                <h2>أتصل بنا</h2>
                <ul class="contactus">
                <li style="font-family:sans-serif;">01553575787 <i class="fa fa-phone"></i></li>
                <li style="font-family:sans-serif;">info@biobekia.com  <i class="fa fa-envelope"></i> </li>
                </ul>
            </div>

            <div class="col-sm-4  col-md-4 sociallink" dir="ltr">
            <h2 class="text-center">تواصل معنا</h2>
                                    <ul class="text-center social">
                                        <li><a href="#"><img src="{{asset('image/facebook.png')}}" alt="facebook"></a> </li>
                                        <li><a href="#"><img src="{{asset('image/linkedin.png')}}" alt="linkedin" class="center"></a></li>
                                        <li><a href="#"><img src="{{asset('image/instagram.png')}}" alt="instagram"></a> </li>
                                         </ul>
            </div>

              <div class="col-sm-4 col-md-4">
                 <img class="center-block logo" src="{{asset('image/New_logo.png')}}" alt="logo">
              </div>


             </div>

        </div>



                <div class="scrollup" style="display: block;">
                    <a href="#"><i class="fa fa-chevron-up"></i></a>
                </div>

    @stop

    @section('footer')
        @include('Front.includes.footer')
    @stop

