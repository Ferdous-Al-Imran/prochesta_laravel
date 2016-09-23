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
<link rel="stylesheet" href="{{ asset('css/Event.css') }}">
    <!--EVENT-LIsT -->

    <section id="event-list" style="padding:40px 0px 70px">
       <!-- Demo Content -->
      <div class="container">


     <div class="row">
     <div id="filters_and_sorters">
    <div id="sorting" class="flipInX">
    <select id="area_filter">
    <option value="all" selected="selected">ALL EVENTS</option>
    <option value=".bikes">DONATION</option>
    <option value=".cars">HELPING</option>
    <option value=".bikes">CHARITY </option>
    <option value=".hedgehogs">FUNDRISING</option>
    <option value=".cakes">CEREMONY</option>
    </select>




    <select id="rating_filter">
    <option value="all" selected="selected">SORT BY:NEWEST EVENT</option>
    <option value=".8">LATEST EVENTS</option>
    <option value=".4">OLDEST EVENTS</option>
    <option value=".5">UPCOMING EVENTS</option>

    </select>

    <div class="search" style="position: relative;display:inline-block">
     <input type="text" id="input" placeholder="SEARCH">
     <span style="position: absolute; top: 13px;color: #fff;left: 199px;font-size: 16px;" class="fa fa-search"></span>
    </div>

    <hr style="width: 200%; height: 1px;margin-top: 45px; margin-left: -136px;">
    </div>


    <div id="container">
    <div class="mix boats 8  " data-rating="1">
        <p class="title" style="display:none">WATER</p>
                 <div class="row clearfix no-gutter wow slideInLeft animated ">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT1.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>WATER CEREMONY</h4></div>
                                      <div class="horizontal-line" style="    width: 0px;height: 3px; margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                   </div>
        </div>
    </div>
    <div class="mix cars 4 " data-rating="2">
           <p class="title" style="display:none">HELP</p>
               <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT2.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header title"><h4>HELPING THE OLD</h4></div>
                                      <div class="horizontal-line" style="width: 0px;height: 3px;margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                        </div></div>
              </div>
    <div class="mix bikes 4" data-rating="3">
     <p class="title" style="display:none">SAVE</p>
         <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT3.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>SAVE AN EGG</h4></div>
                                      <div class="horizontal-line" style="    width: 0px; height: 3px;margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                        </div></div></div>
    <div class="mix hedgehogs 4" data-rating="4">
     <p class="title" style="display:none">YOUTH</p>
          <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT4.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>YOUTH POWER</h4></div>
                                      <div class="horizontal-line" style="    width: 0px; height: 3px; margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                     </div>
             </div>
    </div>
    <div class="mix cakes 5" data-rating="4">
        <p class="title" style="display:none">SPONSOR</p>
       <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT5.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>SPONSOR A CHILD</h4></div>
                                      <div class="horizontal-line" style="    width: 0px; height: 3px;margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                        </div></div></div>
    <div class="mix cakes 3" data-rating="4">
          <p class="title" style="display:none">SPREAD</p>
         <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT6.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>SPREAD HAPPINESS</h4></div>
                                      <div class="horizontal-line" style="width: 0px; height: 3px;margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                        </div></div></div>
    <div class="mix cakes 5" data-rating="4">
        <p class="title" style="display:none">DONATE</p>
          <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT7.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>DONATE FOR HER</h4></div>
                                      <div class="horizontal-line" style="    width: 0px; height: 3px;margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                               </div>
                          </div>
               </div>
       </div>


    <div class="mix cakes 8" data-rating="4">
        <p class="title" style="display:none">SPREAD</p>
        <div class="row clearfix no-gutter wow slideInLeft animated">
                      <div class="col-md-6 col-sm-12 ">
                         <div class="event-image">

                             <img src="img/EVENT8.jpg" class="img-responsive" alt=""/>

                         </div>
                      </div>
                      <div class="col-md-6 col-sm-12 event-right" >
                          <div class="content-box">

                                    <div class="event-header"><h4>LIGHT THE SHADOW</h4></div>
                                      <div class="horizontal-line" style="    width: 0px;height: 3px; margin: -11px 0px 20px;">
    									<hr>
                                      </div>
                                      <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                        pariatur. Excepteur sint occaecat
                                       </div>
                                    <div class="donation-progress-box">
                                       <div class="donation-values">
                                            Donation :  <span class="value">$68,214</span> / <span class="value">$85,870</span>
                                        </div>
                                         <div class="event-sub-header"><h4>DONATION</h4></div>
                                      <span class="menu-price">70%</span>
                                        <div class="donation-progress-bar">

                                            <div class="inner-bar" data-value-collected="68214" data-value-total="85870" style="width: 79%;"></div>
                                        </div>
                                       <span class="raised" style="float:left">Rasied:100$</span>
                                       <span class="goal" style="float:right">Goal:500$</span>
                                    </div>
                                    <div class="event-button">
                                    <a href="#" class="event-button1 blue"  >DONATE</a>
                                    <a href="#" class="event-button2 blue" style="margin-left:21px">VIEW EVENT</a>
                                  <div class="clearfix"></div>
                                   </div>
                          </div>
                        </div>
              </div>
      </div>
    </div>

    </div>
    </div>
    </div>
    </section>


@endsection
