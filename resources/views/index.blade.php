<!DOCTYPE html>
<html ng-app="homepage">
<head>
<title>Mortgage Chance</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->

<link href="css/main.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
<link href="css/main2.css" rel="stylesheet">
<link href="js/pnotify/jquery.pnotify.default.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery.ui.all.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-controller="homepageController">
  <div class="spinner" id="overlay" ng-show="loading"></div>

<!----------------------------SIGN IN Header---------------------------->
<div class="mc-header clearfix">
  <div class="mc-logo"> <a href="index.html"><img src="img/mortgage-chance-logo.png"></a> </div>
  <div class="sign-in">
    <ul>
      <li class="sign-in-drop"> <a class="menu" id="sign_in_click" href "#">SIGN IN</a>
        <div class="sign-in-dropdown">
          <form name="signInForm" id="sign-in-form">
            <span class="grey-caret"></span> 
            
            <!-- <a class="user-search" href="#">
                    <span class="sign-img"><img src="img/sigin-up-img.jpg"></span>
                    <h2>Michael Moore, Borrower</h2>
                    </a> -->
            
            <label>Username/Email</label>
            <br clear="all">
            <span class="form-hold4 clearfix">
            <div class="validate-line">
              <input type="text" validate-type="email" required class="input-field" ng-model="signInData.username" name="username">
              <div class="input-wrapper"></div>
            </div>
            </span>
            <label class="signin-space">Password</label>
            <br clear="all">
            <span class="form-hold4 clearfix">
            <div class="validate-line">
              <input type="password" validate-type="novalid" validate-on-blur required class="input-field" ng-model="signInData.login_password" name="login_password">
              <div class="input-wrapper"></div>
            </div>
            <button class="mc-btn sign-in-dropdown-btn2" type="submit" ng-click="submitSignIn()">SIGN IN</button>
            <div class="pull-right pointer"><a data-toggle="modal" data-target="#forgotPasswordModal" href="#">Forgot your password?</a></div>
            </span>
          </form>
          <div class="social-signin"> <a id="facebook-link" href="social/facebook/borrower"><span class="social-sprite fb-icon transition"></span></a> <a id="google-link" href="social/google/borrower"><span class="social-sprite gplus-icon transition"></span></a> <a id="linkedin-link" href="social/linkedIn/borrower"><span class="social-sprite lin-icon transition"></span></a> </div>
        </div>
      </li>
      <li><a class="menu" href="aboutus.html">ABOUT US</a></li>
      <li class="how-it-works"><a class="menu hw" href >HOW IT<br>
        WORKS</a>
        
        <div class="how-it-works-drop">
            <ul>
               <li><a href="find-out-more-borrower.html"> <span class="text-block"> <span class="head-text">For a Borrower</span> </span> </a> </li>
               <li><a href="find-out-more-investor.html"> <span class="text-block"> <span class="head-text">For an Investor</span> </span> </a> </li>
               <li><a href="faq.html"> <span class="text-block"> <span class="head-text">FAQ</span> </span> </a> </li>
            </ul>
         </div>
        
        </li>
      <li><a class="menu ca"  href="currentAuctionsSignedIn.html">CURRENT<br>
        AUCTIONS</a></li>
      <li class="select-country">
        <select class="selectpicker" id="selectCountry">
          <option value="AUS" data-content="<span class='sprite aus-icon'>Aus</span>">AUS</option>
          <option value="NZ" data-content="<span class='sprite nz-icon'>NZ</span>">NZ</option>
          <option value="US" data-content="<span class='sprite us-icon'>US</span>">US</option>
          <option value="UK" data-content="<span class='sprite uk-icon'>UK</span>">UK</option>
          <option value="IRE" data-content="<span class='sprite irl-icon'>IRE</span>">IRE</option>
          <option value="SA" data-content="<span class='sprite sa-icon'>SA</span>">SA</option>
        </select>
      </li>
    </ul>
  </div>
</div>
<!---------------------------- End SIGN IN Header----------------------------> 

<!----------------------------Slider---------------------------->
<div class="row adjust-top"  ng-click="pay()">
  <div data-ride="carousel" class="carousel slide main-slider" id="carousel-example-captions">
    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#carousel-example-captions"></li>
      <li data-slide-to="1" data-target="#carousel-example-captions" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active"> <img src="img/slider-image-1.jpg">
        <div class="carousel-caption">
          <h3>We help finance your dream house through individual investors</h3>
          <a href="#" class="learn-how-it-works"></a> </div>
      </div>
      <div class="item"> <img src="img/slider-image-1.jpg">
        <div class="carousel-caption">
          <h3>Earn great returns on investment without risk</h3>
          <a href="#" class="learn-how-it-works"></a> </div>
      </div>
    </div>
    <!--<a data-slide="prev" href="#carousel-example-captions" class="left carousel-control"> <span class="glyphicon glyphicon-chevron-left"></span>
   </a> <a data-slide="next" href="#carousel-example-captions" class="right carousel-control"> <span class="glyphicon glyphicon-chevron-right"></span> </a>--> 
  </div>
</div>
<!----------------------------End Slider----------------------------> 

<!----------------------------borrower - investor - tab---------------------------->
<div class="row dotpattern be-a-borrower clearfix">
  <div class="container">
    <div class="tab-container active" id="borrower-select">
      <h3>BE A BORROWER</h3>
      <p>Denied a loan by your bank? Don't worry, Mortgage Chance provides a non-bank method to finance the house you want. </p>
      <div class="row"> <a href="signUp.html#borrower" class="mc-btn be-borrower-btn">BECOME A BORROWER</a> 
      <a href="find-out-more-borrower.html" class="mc-btn find-out-btn">Find Out More</a> </div>
      <div class="arrow-down"></div>
    </div>
    <div class="tab-container" id="investor-select">
      <h3>BE AN INVESTOR</h3>
      <p>Want to earn 100% cash flow positive returns on a fully secured investment property?</p>
      <div class="row"> <a href="signUp.html#investor" class="mc-btn be-borrower-btn">BECOME AN INVESTOR</a> 
      <a href="find-out-more-investor.html" class="mc-btn find-out-btn">Find Out More</a> </div>
      <div class="arrow-down2"></div>
    </div>
  </div>
</div>
<div class="tab-container-list-hold">
  <div class="container tab-container-list" align="center">
    <div class="row" id="steps-borrower">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cirle-notfiy-hold"> <span class="cirle-notfiy">1</span><img src="img/homepage_1.png" alt="borrower-step-1"/>
        <p>Found a house you love but can't get finance? Follow our easy sign up process and upload the property on the Mortgage Chance platform.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cirle-notfiy-hold"> <span class="cirle-notfiy">2</span><img src="img/homepage_2.png" alt="borrower-step-2"/>
        <p>Start an online mortgage finance auction where investors compete against each other to give you the best deal in finance.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cirle-notfiy-hold"> <span class="cirle-notfiy">3</span><img src="img/homepage_3.png" alt="borrower-step-3"/>
        <p>Select the deal which works best for you and Mortgage Chance will work with both parties to finalise the arrangement and then provide ongoing management services.</p>
      </div>
      <div class="row"> <a href="find-out-more-borrower.html" class="mc-btn find-out-btn">Find Out More</a> </div>
    </div>
    <div class="row" id="steps-investor" style="display:none">
      <div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cirle-notfiy-hold"> <span class="cirle-notfiy">1</span><img src="img/investor1.png" alt="invester-step-1"/>
          <p>Place your bid (proposal) on an active mortgage finance auction. Bid by both the interest rate and the mark up on the property. Don't worry the auction is nonbinding.
</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cirle-notfiy-hold"> <span class="cirle-notfiy">2</span><img src="img/investor2.png" alt="invester-step-2"/>
          <p>If the borrower chooses your proposal, purchase the property (by way of a traditional mortgage) and then with the help of Mortgage Chance enter into a <a href="#">instalment sales contract</a> with a second chance borrower. </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 cirle-notfiy-hold"> <span class="cirle-notfiy">3</span><img src="img/investor3.png" alt="invester-step-3"/>
          <p>Get paid monthly at a higher interest rate than the amount you borrowed from the bank. 100% positive cash flow returns.</p>
        </div>
        <div class="row"> <a href="find-out-more-investor.html" class="mc-btn find-out-btn">Find Out More</a> </div>
      </div>
    </div>
  </div>
</div>
<!----------------------------End borrower - investor - tab----------------------------> 

<!----------------------------services offered ---------------------------->
<div class="container services-offered">
  <div class="row">
    <h4>Services offered by Mortgage Chance</h4>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="pull-left"> <img class="pull-left" src="img/services-offered-1.png" alt="service-1"/> </div>
      <p>Our peer to peer platform  connects second chance borrowers directly with investors in order to finance property. </p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="pull-left"> <img class="pull-left" src="img/services-offered-2.png" alt="service-2"/> </div>
      <p>You are legally covered,  our tier one legal contracts are specifically written to protect the interests of both borrowers and investors. </p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="pull-left"> <img class="pull-left" src="img/services-offered-3.png" alt="service-3"/> </div>
      <p>We're experienced, our team has exceptional repayment management processes in place.  We will manage the whole process and provide you with monthly loan amortization schedules, statements, annual reports and investor summary reports. </p>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="pull-left"> <img class="pull-left" src="img/services-offered-4.png" alt="service-4"/> </div>
      <p>We're professional, your questions or concerns will be answered in a timely manner. </p>
    </div>
  </div>
</div>
<!----------------------------End service offered----------------------------> 

<!----------------------------Trending Property Auctions---------------------------->

<div class="row trending-pro">
  <div class="container">
    <h1><span class="star-house-icon"></span>Trending Auctions</h1>
  </div>
</div>
<div class="row trending-pro-thumb">
  <div class="container">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" ng-repeat="currentAuction in currentAuctions.auctioned_prpoerties">
      <div class="trend-thumbnail clearfix">
        <div class="days-left-hold"> <span class="days-left">{{currentAuction.no_days_left}}<br>
          days <br>
          left</span> <img class="img-responsive" src="img/your-properties-image-big.jpg">
          <div class="price-on-img">$ {{currentAuction.pricing}}</div>
        </div>
        <div class="bids-media clearfix"> <span class="pull-left bid-circle">{{currentAuction.no_bids}}<br>
          bids </span>
          <div class="bid-media-text">{{currentAuction.num_beds}} BHK Apartment, {{currentAuction.suburb}}, {{currentAuction.state_name}}</div>
        </div>
        <div class="list-rates clearfix">
          <ul class="clearfix">
            <li>
              <h5>Floating Rate</h5>
              <h6>{{currentAuction.floating_rate}} %</h6>
            </li>
            <li>
              <h5>Markup</h5>
              <h6>{{currentAuction.mark_up_premium}} %</h6>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row" align="center"> <a class="mc-btn interested-btn" href="currentAuctionsSignedIn.html">VIEW MORE</a> </div>
</div>
<!----------------------------End Trending Property Auctions----------------------------> 

<!----------------------------testimonials---------------------------->

<div class="container testimonials">
  <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" align="center">
      <div class="item active">
        <div class="row">
          <div class="loan-apply-hold"> <span class="pull-left"> <img src="img/borrower-profile-1.jpg" class="img-circle"> </span>
            <div class="loan-apply-text">
              <h2>I had some financial difficulties in my past which meant I could not qualify for a traditional home loan. Through Mortgage Chance 
I was able to connect with an investor online who provided me with the finance I needed for the property I wanted. Thanks Mortgage Chance. </h2>
              <h3>MICHAEL, borrower</h3>
            </div>
          </div>
        </div>
        <div class="row"> <a class="mc-btn apply-loan-btn" href="signUp.html#borrower">BECOME A BORROWER</a> </div>
      </div>
      
      <div class="item ">
        <div class="row">
          <div class="loan-apply-hold"> <span class="pull-left"> <img src="img/borrower-profile-2.jpg" class="img-circle"> </span>
            <div class="loan-apply-text">
              <h2>Mortgage Chance is all about cash flow! I have been able to connect with a borrower who pays predicable monthly instalments 
which are higher than the mortgage repayments to my bank.  Because you are borrowing to lend, I have achieved returns as high as 15% pa on funds invested and unlike buy to rent property investments there are no further outlays or maintenance bills. Make money off your ability to borrow on Mortgage Chance! </h2>
              <h3>ANNETTE, Investor </h3>
            </div>
          </div>
        </div>
        <div class="row"> <a class="mc-btn apply-loan-btn" href="signUp.html#investor">BECOME AN INVESTOR</a> </div>
      </div>
    </div>
    <a class="left carousel-control" href="#testimonials-carousel" data-slide="prev"> <span class="sprite left-arrow-icon"></span> </a> <a class="right carousel-control" href="#testimonials-carousel" data-slide="next"> <span class="sprite right-arrow-icon"></span> </a> </div>
</div>

<!----------------------------End testimonials----------------------------> 



<!----------------------------Numberings---------------------------->
<div class="row numberings">
	<div class="container">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      	<h2>{{currentAuctions.investor_count}}</h2>
        <h3>investors</h3>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      	<h2>{{currentAuctions.borrower_count}}</h2>
        <h3>borrowers benefited</h3>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      	<h2>{{currentAuctions.total_auctions}}</h2>
        <h3>active auctions</h3>
      </div>
    </div>
</div>

<!----------------------------End Numberings---------------------------->



<!----------------------------Social feed---------------------------->
<div class="row">
   <div class="container social-feed">
   		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         	<span class="sprite fb-feed-icon"></span>
          <div class="feed-hold">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=128024417277854";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script> 
            <div id="facebook">
            <div class="fb-like-box" data-href="https://www.facebook.com/mortchance?fref=ts" data-height="450" data-show-faces="true" data-stream="true" data-border-color="#fff" data-header="false"></div>
          </div>
        <!--facebook--> 
      </div>
         </div>
   		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         	<span class="sprite tw-feed-icon"></span>
            <div class="feed-hold">
            	<a class="twitter-timeline" href="https://twitter.com/mortgagechance1" data-widget-id="436457893047451648">Tweets by @mortgagechance1</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>




            </div>
         </div>
   		 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
         	<span class="sprite blog-feed-icon"></span>
            <div class="feed-hold">
            	<h4>MC Blog</h4>
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation </p>
            	
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation </p>
            	
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation </p>
            	
            	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation </p>
            
            </div>
         </div>
   </div>
</div>
<!----------------------------End Social feed---------------------------->

<!--  footer  -->
<div class="footer row">
	<div class="footer-container clearfix">
    		
        	<div class="col-lg-9 col-md-8 col-sm-6 col-xs-6">
            	<div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<h4>HOW TO INVEST</h4>
                        <ul>
                        	<li><a href="#">Create Investor Account</a></li>
                        	<li><a href="find-out-more-investor.html">How it works</a></li>
                        	<li><a href="#">Search for Auctions</a></li>
                        	<li><a href="#">Manage Portfolio</a></li>
                        	<li><a href="#">Get Updates</a></li>
                         </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<h4>HOW TO BORROW</h4>
                        <ul>
                        	<li><a href="#">Apply for a Loan</a></li>
                        	<li><a href="find-out-more-borrower.html">How it works</a></li>
                        	<li><a href="#">Manage Auctions</a></li>
                        	<li><a href="#">Get Updates</a></li>
                         </ul>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                    	<h4>ABOUT US</h4>
                        <ul>
                        	<li><a href="#">Who we are</a></li>
                        	<li><a href="#">The MC story</a></li>
                        	<li><a href="#">Jobs at MC</a></li>
                        	<li><a href="#">Blog</a></li>
                        	<li><a href="contactus.html">Contact us</a></li>
                         </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<h4>HELP & TRAINING</h4>
                        <ul>
                        	<li><a href="faq.html">Frequently asked questions</a></li>
                        	<li><a href="#">Raise support ticket</a></li>
                        	<li><a href="#">What is Second Chance Finance?</a></li>
                        	<li><a href="#">What is Peer to Peer lending?</a></li>
                         </ul>
                    </div>
                </div>
            </div>
        	<div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                    	<h4>SOCIAL</h4>
                        <div class="footer-icon-hold">
                            <span class="sprite fb-footer-icon transition"></span>
                            <span class="sprite gp-footer-icon"></span>
                            <span class="sprite tw-footer-icon"></span>
                            <span class="sprite in-footer-icon"></span>
                        </div>
            </div>
           
    </div>
    
            <div class="footer-copyright" align="center">
            	<span class="copyright">&copy; Mortgage Chance</span>  <span class="website">Website by <a href="#">Langoor</a></span>
            </div>
</div>
<form name="forgotPasswordForm">
  <div class="modal fade bid-property-modal" id="forgotPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
      </div>
      <div class="modal-body">
          <div class="main-form">

              <!--Expiry Date-->
              <label>Email Address</label>
              <br clear="all">
              <span class="form-hold2 clearfix">
                <div class="validate-line">
                 <input type="email" required class="input-field" name="fname" ng-model="forgotPasswordData.email">
                 <div class="input-wrapper"></div>
                 <div class="message"></div>
                </div>
             </span> <br clear="all">
          <button type="submit" class="mc-btn bid-property-btn" ng-click="forgotPassword()">Submit</button>
      </div>
  </div>
  </div>
  </div>
  </div>
</form>
<!---------------------End footer---------------------> 

<script src="./js/jquery2.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/bootstrap-select.js"></script> 
<script src="./js/angular.min.js" type="text/javascript"></script> 
<script src=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/pnotify/jquery.pnotify.js"></script> 
<script type="text/javascript">
    $(window).on('load', function () {
        $('.selectpicker').selectpicker({
            //'selectedText': 'cat'
        });
        // $('.selectpicker').selectpicker('hide');
    });

    jQuery(document).ready(function() {
      $.pnotify.defaults.styling = "jqueryui";
    });

</script> 
<!-- <script src="./js/script.js" type="text/javascript"></script> --> 
<script src="js/homepage.js" type="text/javascript"></script> 
<script type="text/javascript">
  $('#borrower-select').on('click',function(){
    $('#steps-borrower').css('display','block');
    $('#steps-investor').css('display','none'); 
     $('#borrower-select').addClass("active");
     $('#investor-select').removeClass("active");
  });
  $('#investor-select').on('click',function(){
    $('#steps-borrower').css('display','none');
    $('#steps-investor').css('display','block');
     $('#investor-select').addClass("active");
     $('#borrower-select').removeClass("active");
     
  });
  $("#sign_in_click").on('click',function(){
    $('.sign-in-dropdown').css('display','block');
  });

  $(document).mouseup(function (e)
  {
      var container = $(".sign-in-drop");

      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0) // ... nor a descendant of the container
      {
          jQuery('.sign-in-dropdown').hide();
      }
  });
</script>
</body>
</html>
