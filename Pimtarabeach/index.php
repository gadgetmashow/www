<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pimtarabeach Resort | 038-638-842 ,061-464-9542</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>




    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-99022908-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1644774789106428'); // Insert your pixel ID here.
      fbq('track', 'PageView');
      </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1644774789106428&ev=PageView&noscript=1"/>
    </noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


  <!-- Menu -->

  <div class="row  menu_bar" style="background:none;">
    <div class="container" style="padding:0px;">
      <div class="row" style="margin:0px;">
          <div class="col-sm-12 col-xs-12 text-right" style="padding:0px;">
            <div class="book_now text-right"><a href="https://www.facebook.com/messages/t/1538597763057464" target="_blank">Book Now</a></div>
          </div>
      </div>
    </div>
  </div>
  <div class="row" style="background:#179146;margin:0px;">
    <div class="container" style="padding:0px;">
      <div class="row" style="margin:0px;">


        <div class="col-sm-12 col-xs-12" style="padding:0px;">
          <!-- menu -->

          <nav class="navbar navbar-default navbar-top text-center" role="navigation" style="margin-bottom:0px;border:0px;padding:10px 0;">
            <div class="col-xs-12 text-center">
              <a href="#" class="text-center col-xs-12 hidden-sm hidden-md hidden-lg">
                <img src="img/logo.png" style="height:auto;width:100%; display:block;" alt="">
              </a>
              <!--
              <button type="button" class="navbar-toggle text-center" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="float:none;margin-right:0px;">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>-->
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="display:block;">


                  <ul class="nav nav_2 navbar-nav navbar-left hidden-xs">
                    <li class=" hidden-xs">
                      <a href="#" class=" hidden-xs">
                      <img src="img/logo.png" class="img_logo" alt="">
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav_3 navbar-nav navbar-right">
                      <li><a href="?page=Home" class="col-xs-6 col-sm-12">หน้าแรก</a></li>
                      <li><a href="?page=About" class="col-xs-6 col-sm-12">เกี่ยวกับ</a></li>
                      <li><a href="?page=Rooms" class="col-xs-6 col-sm-12">ประเภทห้องพัก</a></li>
                      <li><a href="?page=Gallery" class="col-xs-6 col-sm-12">บรรยากาศ</a></li>
                      <!--<li><a href="?page=Near" class="col-xs-6 col-sm-12">ที่เที่ยวใกล้เคียง</a></li>-->
                      <li><a href="?page=Review" class="col-xs-6 col-sm-12">รีวิว</a></li>
                      <li><a href="?page=Contact" class="col-xs-6 col-sm-12">ติดต่อเรา</a></li>
                  </ul>
            </div>
          </nav>
          <!-- menu -->
        </div>

      </div>
    </div>
  </div>
  <!-- Menu -->


<!-- body -->
<?

switch (trim($_GET[page])) {
  case 'Home':      include("home-page.php");  break;
  case 'Review':    include("review-page.php");  break;
  case 'Gallery':   include("gallery-page.php");  break;
  case 'About':     include("about-page.php");  break;
  case 'Rooms':      include("room-page.php");  break;
  case 'Contact':   include("contact-page.php");  break;
  case 'Rooms-detail': include("room-detail.php"); break;
  default:          include("home-page.php"); break;
}

?>
<!-- End body -->




<!-- footer -->
<footer class="footer">
  <div class="col-xs-12" style="padding:0px;background:#000;color:#323232;">
    <div class="register  container" style="margin:5px  auto;">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="padding:0px;">

        <div class="row has-divider">
            <div class="footer-col contact col-xs-12 col-sm-8 col-md-9">
                <div class="footer-col-inner">
                    <div class="row" style="font-weight:200;">
                      <p class="adr clearfix"  style="font-size:17px;">
                        <span class="adr-group pull-left">
                            <b style="color:#fff;padding:15px;">Pimtarabeach resort © 2011</b>
                        </span>
                      </p>
                      <p class="email" style="font-size:17px;">
                        <font style="color:#fff;padding:15px;">311/3 ม.3 ต.กร่ำ อ.แกลง จ.ระยอง 21190 </font><br>
                        <font style="color:yellow;padding:15px;">038-638842 , 061-4649542</font>
                      </p>
                    </div>
                </div>
            </div>
            <div class="footer-col contact col-xs-12 col-sm-4 col-md-3">
              <div class=" col_footer ">
                <a href="https://line.me/R/ti/p/%40pimtarabeach1" target="_blank" style="display:block;">
                  <img src="img/line_xs.png" class="col-xs-6" style="padding:0px;" />
                </a>
                <a href="https://th-th.facebook.com/pimtarabeach/" target="_blank" style="display:block;">
                  <img src="img/fb_xs.png" class="col-xs-6" style="padding:0px;" />
                </a>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
</footer>
<style>
.footer {
  /*position: absolute;*/
  bottom: 0;
  width: 100%;
  color: #fff !important;
}
@media (max-width:767px){
  .col_footer{ width: 70% !important; margin:0px auto !important;}
}
</style>
<!-- End footer -->



  </body>
</html>
