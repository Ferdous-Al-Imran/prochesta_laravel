@extends('base')

@section('header_text')
    <div class="header-text">
        <h1>WE ARE QUEST</h1>
        <p style="max-width: 679px;margin: 20px auto 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>
         veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo
        </p>

        <a class="btn-default white">Learn More</a>
    </div> <!--header-text-->
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<!--TEAAM-->
<section id="team" style="padding:100px 0px 90px 0px">
    <div class="container">
        <h1 class="quest-header">OUR TEAM</h1>
        <div class="horizontal-line"><hr></div>
        <p class="quest-paragraph wow fadeIn animated" style="margin-bottom:0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        </p>

        <div class="row " style="margin-top:52px">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
                <div class="item-container wow slideInLeft animated" >
                    <div class="social-icons">
                        <div class="team-social"><a class="fa fa-facebook"></a></div>
                        <div class="team-social"><a class="fa fa-google"></a></div>
                        <div class="team-social"><a class="fa fa-twitter"></a></div>
                        <div class="team-social"><a class="fa fa-linkedin"></a></div>
                    </div>
                    <figure class="team-member">
                        <img src="img/donar-1.jpg"  alt="">
                        <figcaption class="member-details text-center">
                            <h5>JESSE PINKMAN</h5>
                            <p>CEO | BLUE OCCEAN</p>
                        </figcaption>
                    </figure>
                    <div class="team-overlay">
                        <div class="team-name">
                            <h5>JESSE PINKMAN</h5>
                            <p>CEO | BLUE OCCEAN</p>
                        </div>
                        <p class="text-center team-social-overlay">
                            <span><a href=""><i class="fa fa-facebook"></i></a></span>
                            <span><a href=""><i class="fa fa-google-plus"></i></a></span>
                            <span><a href=""><i class="fa fa-twitter"></i></a></span>
                            <span><a href=""><i class="fa fa-linkedin"></i></a></span>
                        </p>
                    </div>
                </div>
            </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
            <div class="item-container wow slideInLeft animated" >
                <div class="social-icons">
                    <div class="team-social"><a class="fa fa-facebook"></a></div>
                    <div class="team-social"><a class="fa fa-google-plus"></a></div>
                    <div class="team-social"><a class="fa fa-twitter"></a></div>
                    <div class="team-social"><a class="fa fa-linkedin"></a></div>
                </div>
                <figure class="team-member">
                    <img src="img/donar-2.jpg"  alt="">
                    <figcaption class="member-details text-center">
                        <h5>JESSE PINKMAN</h5>
                        <p>CEO | BLUE OCCEAN</p>
                    </figcaption>
                </figure>
                <div class="team-overlay">
                <div class="team-name">
                    <h5>JESSE PINKMAN</h5>
                    <p>CEO | BLUE OCCEAN</p>
                    </div>
                    <p class="text-center team-social-overlay">
                        <span><a href=""><i class="fa fa-facebook"></i></a></span>
                        <span><a href=""><i class="fa fa-google-plus"></i></a></span>
                        <span><a href=""><i class="fa fa-twitter"></i></a></span>
                        <span><a href=""><i class="fa fa-linkedin"></i></a></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
                      <div class="item-container wow slideInLeft animated" >
                          <div class="social-icons">
                                <div class="team-social"><a class="fa fa-facebook"></a></div>
                                <div class="team-social"><a class="fa fa-google-plus"></a></div>
                                <div class="team-social"><a class="fa fa-twitter"></a></div>
                                <div class="team-social"><a class="fa fa-linkedin"></a></div>

                          </div>
                            <figure class="team-member">
                                <img src="img/donar-1.jpg"  alt="">

                            <figcaption class="member-details text-center">
                               <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                            </figcaption>
                        </figure>
                       <div class="team-overlay">
                           <div class="team-name">
                              <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                           </div>
                            <p class="text-center team-social-overlay">
                                          <span><a href=""><i class="fa fa-facebook"></i></a></span>
                                          <span><a href=""><i class="fa fa-google-plus"></i></a></span>
                                          <span><a href=""><i class="fa fa-twitter"></i></a></span>
                                          <span><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        </p>
                       </div>
                   </div>
           </div>

       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
                      <div class="item-container wow slideInLeft animated" >
                          <div class="social-icons">
                                <div class="team-social"><a class="fa fa-facebook"></a></div>
                                <div class="team-social"><a class="fa fa-google-plus"></a></div>
                                <div class="team-social"><a class="fa fa-twitter"></a></div>
                                <div class="team-social"><a class="fa fa-linkedin"></a></div>

                          </div>
                            <figure class="team-member">
                                <img src="img/donar-3.jpg"  alt="">

                            <figcaption class="member-details text-center">
                               <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                            </figcaption>
                        </figure>
                       <div class="team-overlay">
                           <div class="team-name">
                              <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                           </div>
                            <p class="text-center team-social-overlay">
                                          <span><a href=""><i class="fa fa-facebook"></i></a></span>
                                          <span><a href=""><i class="fa fa-google-plus"></i></a></span>
                                          <span><a href=""><i class="fa fa-twitter"></i></a></span>
                                          <span><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        </p>
                       </div>
                   </div>
           </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
                      <div class="item-container wow slideInLeft animated" >
                          <div class="social-icons">
                                <div class="team-social"><a class="fa fa-facebook"></a></div>
                                <div class="team-social"><a class="fa fa-google-plus"></a></div>
                                <div class="team-social"><a class="fa fa-twitter"></a></div>
                                <div class="team-social"><a class="fa fa-linkedin"></a></div>

                          </div>
                            <figure class="team-member">
                                <img src="img/donar-3.jpg"  alt="">

                            <figcaption class="member-details text-center">
                               <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                            </figcaption>
                        </figure>
                       <div class="team-overlay">
                           <div class="team-name">
                              <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                           </div>
                            <p class="text-center team-social-overlay">
                                          <span><a href=""><i class="fa fa-facebook"></i></a></span>
                                          <span><a href=""><i class="fa fa-google-plus"></i></a></span>
                                          <span><a href=""><i class="fa fa-twitter"></i></a></span>
                                          <span><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        </p>
                       </div>
                   </div>
           </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
                      <div class="item-container wow slideInLeft animated" >
                          <div class="social-icons">
                                <div class="team-social"><a class="fa fa-facebook"></a></div>
                                <div class="team-social"><a class="fa fa-google-plus"></a></div>
                                <div class="team-social"><a class="fa fa-twitter"></a></div>
                                <div class="team-social"><a class="fa fa-linkedin"></a></div>

                          </div>
                            <figure class="team-member">
                                <img src="img/donar-3.jpg"  alt="">

                            <figcaption class="member-details text-center">
                               <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                            </figcaption>
                        </figure>
                       <div class="team-overlay">
                           <div class="team-name">
                              <h5>JESSE PINKMAN</h5>
                                <p>CEO | BLUE OCCEAN</p>
                           </div>
                            <p class="text-center team-social-overlay">
                                          <span><a href=""><i class="fa fa-facebook"></i></a></span>
                                          <span><a href=""><i class="fa fa-google-plus"></i></a></span>
                                          <span><a href=""><i class="fa fa-twitter"></i></a></span>
                                          <span><a href=""><i class="fa fa-linkedin"></i></a></span>
                                        </p>
                       </div>
                   </div>
           </div>
        </div>
      </div>
    </section>

    <!--................................video..........................-->
    <section id="video">
      <div class="section-overlay">
        <div class="container-fluid">
            <div class="row wow zoomIn animated">
              <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/yENYxq75Kjw?autoplay=1">
                                        <!-- PLAY BUTTON -->
                                        <span class="play">
                                           <i class="fa fa-play fa-3x"  aria-hidden="true" style="padding:20px;margin-left:9px"></i>
                                        </span>


               </a>
                <div style="">
                 <div class="horizontal-line">
    									<hr style="margin-top: 50px;
        margin-bottom: 20px;">
                        </div>
                 <p style="    text-align: center;
        color: #fff;
        font-weight: 500;
        font-size: 18px;"> TAKE A LOOK TO OUR ACTIVITY</p>
                </div>
            </div>
        </div>
     </div>
    </section>



    <!----------------------------STORY------------------------------->
    <section id="story">
            <div class="container">
                <div class="row">
                   <h1 class="quest-header">THROWBACK</h1>
                        <div class="horizontal-line">
    									<hr>
                        </div>
                        <p class="quest-paragraph wow fadeIn animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                       </p>
                    </div>

                <div class="row ">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <div class="timeline-image up">

                                </div>
                                <p class="journey-text">2010-2012</p>
                             <li class="wow slideInRight">

                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="subheading">Our Humble Beginnings</h3>
                                    </div>
                                    <div class="horizontal" style="width: 72px; height: 3px;margin: 5px 1px 19px;"></div>
                                    <div class="timeline-body">
                                        <p class="text-muted">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        </p>

                                    </div>
                                </div>
                            </li>

                            <p class="journey-text" >2013-2014</p>
                            <li class="timeline-inverted wow slideInLeft animated">
                               <!-- <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="" alt="">
                                </div>-->

                                <div class="timeline-panel" id="two-text">
                                    <div class="timeline-heading">
                                       <h3 class="subheading">An Era is Born</h3>
                                        <div class="horizontal" style="width: 72px; height: 3px;margin: 5px 1px 19px;"></div>
                                    </div>
                                    <div class="timeline-body">
                                       <p class="text-muted">
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <p class="journey-text3" >2014-2016 </p>
                            <li class="wow slideInRight animated">
                            <div class="timeline-panel" style="margin-top:40px">
                                <div class="timeline-heading">
                                    <h3 class="subheading">Our Humble Beginnings</h3>
                                </div>
                                <div class="horizontal" style="width: 72px; height: 3px;margin: 5px 1px 19px;"></div>
                                <div class="timeline-body">
                                    <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                    </p>
                                </div>
                            </div>
                        </li>
                        <p class="journey-text" >2013-2014</p>
                        <li class="timeline-inverted wow slideInLeft animated">
                        <div class="timeline-panel" id="two-text">
                            <div class="timeline-heading">
                                <h3 class="subheading">An Era is Born</h3>
                                <div class="horizontal" style="width: 72px; height: 3px;margin: 5px 1px 19px;"></div>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                </p>
                            </div>
                        </div>
                    </li>
                    <p class="journey-text3" >2014-2016 </p>
                    <li class="wow slideInRight animated">
                        <div class="timeline-panel" style="margin-top:40px">
                            <div class="timeline-heading">
                                <h3 class="subheading">Our Humble Beginnings</h3>
                            </div>
                            <div class="horizontal" style="width: 72px; height: 3px;margin: 5px 1px 19px;"></div>
                            <div class="timeline-body">
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                </p>
                            </div>
                        </div>
                    </li>
                    <div class="timeline-image down"></div>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
