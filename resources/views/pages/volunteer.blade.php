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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.min.css">
<link rel="stylesheet" href="{{ asset('css/Volunteer.css') }}">
    <!--TEAAM-->
    <section id="volunteer" style="padding:100px 0px 110px 0px">
        <div class="container">
            <h1 class="quest-header">FEATURED VOLUNTEERS</h1>
             <div class="horizontal-line">
    									<hr>
             </div>
             <p class="quest-paragraph wow fadeIn animated" style="margin-bottom:0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
             </p>

    <div class="row" style="margin-top:52px">
       <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 team-padding">
                      <div class="item-container wow slideInLeft animated" >
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
                      <div class="item-container wow slideInLeft animated">

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
                      <div class="item-container wow slideInRight animated" >
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
                      <div class="item-container wow slideInRight animated" >
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
                      <div class="item-container wow slideInRight animated" >

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
           <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="item wow slideInRight animated" style=" border: 1px solid #8abfe6;height: 326px;   width: 100%; ">
                  <h5 class="quest-header" style="margin-top: 87px; font-size: 1.4em;ext-align: center; margin-bottom: -10px;">BE A VOLUNTEER</h5>
                  <div class="horizontal-line">
    									<hr>
                    </div>
                   <p style="text-align: center;font-size: 1.2em; max-width: 241px; margin: auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt
                   </p>
                   <div class="donate-button" style="padding: 29px 0px;text-align:center">
                    <a class="btn-default blue" style="padding: 12px 33px;"><strong>REGESTER</strong></a>
                   </div>
              </div>
           </div>

        </div>
      </div>
    </section>

    <!--................................RESPONSIBLITIES..........................-->

    <section id="responsiblities">
      <div class="section-overlay">
       <div class="container">
          <div class="row wow fadeIn wow" style="margin-top:33px">
             <h1 class="quest-header" style="text-align:left;color:#fff">RESPONSIBLITIES</h1>
             <div class="horizontal-line" style="color#fff">
    									<hr style="background: #fff;border-top: 1px solid #fff;width: 72px;height: 1.3px;margin-left: 0px;">
             </div>
              <p style="font-size:18px;color:#fff;max-width:482px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              </p>
          </div>
       </div>
      </div>
    </section>


    <!----------------------------TAB_BAR------------------------------->
    <section id="tab-bar">
       <div class="container">
        <div class="row">

                <ul class="nav nav-tabs wow fadeInDown" role="tablist" style="border-bottom:3px solid #8abfe6;margin-bottom:80px ">
                  <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">SCHOOL</a></li>
                  <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">FLOODS</a></li>
                  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">EARTHQUKAE</a></li>
                  <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">DROUGHT</a></li>
               </ul>

      <div class="tab-content wow zoomIn">
            <div role="tabpanel" class="tab-pane fade in active" id="home">

                   <div class="col-md-6 col-sm-12">

                             <div class="volunteer-about-img">
                               <figure>
                                     <img src="img/responsiblities.jpg" class="img-responsive" alt="r">
                               </figure>
                            </div>

                        </div>
                   <div class="col-md-6  col-sm-12 col-sm-12">
                       <ul class="leaders wow zoomIn">
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>

                        </ul>
                    </div>
           </div> <!-- col-md-6 col-sm-12-->



              <div role="tabpanel" class="tab-pane fade " id="profile">
                   <div class="col-md-6 col-sm-12">

                             <div class="volunteer-about-img">
                               <figure>
                                     <img src="img/responsiblities.jpg" class="img-responsive" alt="r">
                               </figure>
                            </div>

                        </div>
                   <div class="col-md-6  col-sm-12 col-sm-12">
                       <ul class="leaders wow zoomIn">
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>

                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade " id="messages">

                   <div class="col-md-6 col-sm-12">

                             <div class="volunteer-about-img">
                               <figure>
                                     <img src="img/responsiblities.jpg" class="img-responsive" alt="r">
                               </figure>
                            </div>

                        </div>
                   <div class="col-md-6  col-sm-12 col-sm-12">
                       <ul class="leaders wow zoomIn">
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>

                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                   <div class="col-md-6 col-sm-12">

                             <div class="volunteer-about-img">
                               <figure>
                                     <img src="img/responsiblities.jpg" class="img-responsive" alt="r">
                               </figure>
                            </div>

                        </div>
                   <div class="col-md-6  col-sm-12 col-sm-12">
                       <ul class="leaders wow zoomIn">
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                        <li>
                          <p class="menu-text"><span>DUTY TIME</span>
                         </p>

                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>

                        </ul>
                    </div>
              </div>
            </div>
    	 </div>
       </div>
    </section>

    <section id="terms" style="padding:80px 0px 85px">
        <div class="container">
              <h1 class="quest-header" style="text-align:left;color:#5a5a5a">TERMS & CONDITIONS</h1>
             <div class="horizontal-line" style="color#fff">
    									<hr style="    background: #8abfe6;border-top: 1px solid #8abfe6;width: 72px;height: 2px;margin-left: 0px;">
             </div>
            <div class="row">
               <div class="col-md-6">
                <ul class="leaders wow fadeIn animated">

                        <li>


                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                       <li>


                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                         <li>


                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>

                        </ul>
               </div>

               <div class="col-md-6">
                <ul class="leaders wow fadeIn animated">

                        <li>


                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                         <li>


                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>
                         <li>


                          <p style="font-size:17px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</p>

                      </li>

                        </ul>
               </div>
            </div>
        </div>
    </section>


    <section id="registration">
      <div class="section-overlay">
       <div class="container">
          <div class="row wow fadeIn wow" style="margin-top:33px">
             <h1 class="quest-header" style="text-align:left;color:#fff">REGISTRATION FORM</h1>
             <div class="horizontal-line" style="color#fff">
    									<hr style="background: #fff;border-top: 1px solid #fff;width: 72px;height: 1.3px;margin-left: 0px;">
             </div>
              <p style="font-size:18px;color:#fff;max-width:482px;margin:20px 0px 24px 0px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              </p>
          </div>
       </div>
      </div>
    </section>

    <section id="registration-form">
        <div class="container">
            <div class="row">
    		        <form action="/register" method="POST">
    				    <fieldset>
                            <div class="form-group" >
                                <p>NAME: <input name="name" type="text" style="display:inline-block;width:26%"  class="form-control" ></p>
                            </div>
                            <div class="row"  style="0px 0px 30px">
                            	<div class="form-group col-md-4" >
                                	<p>BIRTHDAY: <input name="birth_day" type="text" id="datepicker" style="display:inline-block;width:73%"  class="form-control" ></p>
                                </div>
        	                    <div class="form-group col-md-4" >
        	                        <p class="gender"> SEX:
        								<label>
        									<input type="radio" name="sex" value="Male" id="genderStatus_1" tabindex="40">
        									<span>&nbsp;</span>
        									MALE
        								</label>
        	                            <label>
        									<input type="radio" name="sex" value="Female" id="genderStatus_2" tabindex="40"/>
        									<span>&nbsp;</span>
        									FEMALE
        								</label>
        	                        </p>
        	                    </div>
                                <div class="form-group col-md-4">
                                    <p>BLOOD GROUP:
                                        <select name="blood_group" id="area_filter" style="width: 59%;display: inline-block;text-indent:2vw">
                                            <option value="Unknown" selected="selected">Unknown</option>
                                            <option value="A+" style="text-align: right;">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="AB+">AB+ </option>
                                            <option value="AB-">AB-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                	<p>PRESENT ADRESS :
        								<textarea name="present_address" class="form-control" row="1" style="display:inline-block;width:67%;height:36px;margin: -11px 0px"  name="message">
        								</textarea>
        								<br>
                                 	</p>
                                </div>
                                <div class="col-md-6 form-group">
                                    <p>PERMANENT ADRESS :
        								<textarea name="permanent_address" class="form-control" row="1" style="display:inline-block;height:36px;width:67%;margin: -11px 0px"  name="message">
                                    	</textarea>
        								<br>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group" style="margin: 10px 0px 42px">
                                	<p>NATIONAL ID NO:
        								<textarea name="national_id_no" class="form-control" rows="1" style="width: 73.5%; display: inline-block; margin: -8px 0px;display:inline-block"  name="message">
        								</textarea>
                                	</p>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="form-group col-md-3" >
                                	<p>PHONE:
        								<input name="phone_no" type="number" style="display:inline-block;width:72%"  class="form-control" >
        							</p>
                                </div>
                                <div class="form-group col-md-4" >
        	                        <p>E-MAIL:
        								<input name="email" type="email" style="display:inline-block;width:81%"  class="form-control" >
        							</p>
                                </div>
                                <div class="form-group col-md-5" >
                                	<p>FACEBOOK:
        								<input name="facebook" type="text" style="display:inline-block;width:75%"  class="form-control" >
        							</p>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom:24px">
                                <div class="form-group col-md-4" >
                                	<p>OCCUPATION:
        								<input name="occupation" type="text" style="display:inline-block;width:65%"  class="form-control" >
        							</p>
                               	</div>
                               	<div class="form-group col-md-8" >
                                	<p>ORGANIZATION/INSTITUTION:
        								<input name="organization" type="text" style="display:inline-block;width:64%"  class="form-control">
        							</p>
                               </div>
                            </div>
                           	<div class="row">
                            	<div class="col-md-6 form-group">
                                	<p>WHY DO YOU WANT TO JOIN WITH US?
        								<textarea name="why_join" class="form-control" row="1" style="display:inline-block;width:90%;margin: 17px 0px;"  name="message">
        								</textarea>
        								<br>
        	                        </p>
        	                    </div>
                                <div class="col-md-6">
                                	<p>IN WHICH PROJECT YOU WANT TO JOIN WITH US?
        							</p>
                                    <select name="which_project" id="area_filter 2">
                                        <option value="PUT A SMILE ON FACE">PUT A SMILE ON FACE</option>
        	                            <option value="HELPING">HELPING</option>
        	                            <option value="CHARITY">CHARITY </option>
        	                            <option value="FUNDRISING">FUNDRISING</option>
        	                            <option value="CEREMONY">CEREMONY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                    			<div id="submit">
                         			<p>UPLOAD AN IMG:</p>
        			                <p class="shown">Congratulations!Image has been Uploaded</p>
        			                <div class="myLabel">
        			                    <input type="file" name="pic" accept="image/*">
        			                    <span>BROWSE</span>
        			                </div>
        			                <div class="myLabel two" >
        			                    <input type="file" name="pic" accept="image/*">
        			                    <span>SUBMIT</span>
        			                </div>
        			            </div>
                        <div class="form-group donate-button register" style="float:right">
                            <!-- <a class="btn-default blue" style="margin-left:-13px;padding:14px 51px">REGISTER</a> -->
        				<input type="submit" value="REGISTER" class="btn-default blue" style="margin-left:-13px;">
                    </div>
                	<!-- </div> -->
                    </fieldset>
        	    </form>
         	</div>
        </div> <!--container-->
    </section> <!--registration-form-->

<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script>
     $( function() {
        $( "#datepicker" ).datepicker();
    });
    </script>
@endsection
