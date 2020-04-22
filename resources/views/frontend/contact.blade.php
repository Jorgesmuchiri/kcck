<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>KCCK</title>



  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- progress barstle -->
  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- font wesome stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">
  


</head>

<body>
  <div class="top_container sub_pages ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index">
          <!--   <img src="images/ilab.png" alt=""> -->
            <span>
              <img src="images/code-kids-logo.png" alt="">
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
             <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">  <span >Home</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about"> About </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="courses"> Courses </a>
                </li>


           <!--      <li class="nav-item">
                  <a class="nav-link" href="vehicle.html"> Blog </a>
                </li> -->

                <li class="nav-item">
                  <a class="nav-link" href="media"> Media </a>
                </li>

                 <li class="nav-item">
                  <a class="nav-link" href="events"> Events </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact Us</a>
                </li>

                  <li class="nav-item">
                  <a class="nav-link" href="resources">Resources</a>
                </li>


                   <li class="nav-item">
                  <a class="nav-link" href="sign-up">Register<img src="images/new-user.png" alt="" width="20"></a>
                </li>

              </ul>
             
            </div>

        </nav>
      </div>
      
    </header>
  </div>
            
 @if(Session::has('success'))
  <script type="text/javascript">
     swal({
         title:'Success!',
         text:"{{Session::get('success')}}",
         timer:5000,
         type:'success'
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif

  <section class="hero_section ">
      <div class="hero-container container">
        <div class="hero_detail-box">
         
          <!-- <h1>
            About 
          </h1> -->
           <h1>
             <br>
Code into Your Future
          </h1>
          
              <p class="text-center" style="color: #000000">Strath­more University</p>
    <p class="text-center" style="color: #000000">4thFloor Stu­dent Centre Build­ing,Keri Road, Madaraka Estate,
</p>
    <p class="text-center" style="color: #000000">P.O Box 59857,00200,Nairobi.
</p>
    <p class="text-center" style="color: #000000">Mobile: +254 703 034616/ 0703 034 617.
</p>
<p class="text-center" style="color: #000000">Digital Learning Centre,
</p>
<p class="text-center" style="color: #000000">+254730734696
</p>
<p class="text-center" style="color: #000000">ilabafricaelearning@strathmore.edu</p>
          <div class="hero_btn-continer">
            <!-- <a href="" class="call_to-btn btn_white-border">
              <span>
                
              </span>
              <img src="images/right-arrow.png" alt="">
            </a> -->
          </div>
        </div>
 
        <div class="hero_img-container">
            <h2 class="main-heading">
        Contact Now

      </h2>
         <div class="contact-form">
            <form method="post" action="{{ route('Inquiries.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data" >
            @csrf
            @method('post')
                  <div class="input-icons">
                    <i  class="fa fa-user icon"></i>
        <input type="text" placeholder="Name" name="name" class="input-field" required> 
                    
                  </div>
               <div class="input-icons">
                     <i class="fa fa-phone icon"></i>
                    <input type="text" placeholder="Phone Number" name="phone" required>
                  </div>
               <div class="input-icons">
                     <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="email" required>
                  </div>

                <div class="input-icons">
                     <i class="fa fa-pencil icon"></i>
                    <input type="subject" placeholder="Subject" name="subject" required>
                  </div>
               <div class="input-icons">
                     <i class="fa fa-envelope icon"></i>
                    <input type="text" placeholder="Message" class="input_message" name="message" required>
                  </div>
                  
                    <div class="input-icons">
                    <div class="g-recaptcha" data-sitekey="6LeCeewUAAAAAFJJZpdk484FnGcHBG6tfu3JJQ6s">
                                 
                             </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn_on-hover">
                      Send Inquiry
                    </button>
                  </div>
                </form>

              </div>
      </div>
    </section>
  </div>
  <!-- end header section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">

      <h2 class="main-heading">
      Visit Us
      </h2>
      <p class="text-center">


      </p>
      <div class="">
        <div class="contact_section-container">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7752756327905!2d36.811054914941174!3d-1.3101529360226738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10f7e95364ed%3A0xde53f214e47a1069!2s%40iBizAfrica!5e0!3m2!1sen!2ske!4v1576516731116!5m2!1sen!2ske" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>


  <!-- end contact section -->

  <!-- footer section -->

<div class="row">
  <div class="column" style="background-color:#082465;">
    <h1 class="text-center" style="color: #b42025;font-size: 18px;">Contact Us</h1>
    <p class="text-center">Strath­more University</p>
    <p class="text-center">4thFloor Stu­dent Centre Build­ing,Keri Road, Madaraka Estate,
</p>
    <p class="text-center">P.O Box 59857,00200,Nairobi.
</p>
    <p class="text-center">Mobile: +254 703 034616/ 0703 034 617.
</p>
<p class="text-center">Digital Learning Centre,
</p>
<p class="text-center">+254730734696
</p>
<p class="text-center">ilabafricaelearning@strathmore.edu</p>
  </div>
  <div class="column" style="background-color:#082465;">
    <h1 class="text-center" style="color: #b42025; font-size: 18px;">Quick Links</h1>
    <p class="text-center">
<a href="about" style="color: #fff;">About Us</a>
</p>
<p class="text-center" >
  <a href="events" style="color: #fff;">Events & Training</a>
</p>
<p class="text-center">

  <a href="courses" style="color: #fff;">Courses</a>
</p>
<p class="text-center">
  <a href="partners" style="color: #fff;">Partner</a>

</p>
<p class="text-center">Newsletter</p>

<p class="text-center">
<a href="" style="color: #fff;">Terms and Conditions</a></p>
  </div>
  <div class="column" style="background-color:#082465;">
 <h1 class="text-center" style="color: #b42025;font-size: 18px;">Follow Us</h1>
    <p class="text-center">
<a href="#" class="fa fa-facebook"></a> 
</p>
<p class="text-center">
<a href="#" class="fa fa-twitter"></a>
</p>
<p class="text-center"><a href="#" class="fa fa-youtube"></a>
</p>
<p class="text-center">Community of Practice (CoP)</p>
  </div>
</div>


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; <script>document.write(new Date().getFullYear())</script>  All Rights Reserved By Kids Can Code Kenya
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- progreesbar script -->

  </script>
  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e6738748d24fc226586b796/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
  <!-- end google map js -->
</body>

</html>