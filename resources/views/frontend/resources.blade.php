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

  <title>Adward</title>



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
  <div class="top_container sub_pages">
    <!-- header section strats -->
 <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
          <!--   <img src="images/ilab.png" alt=""> -->
            <span>
              K.C.C.P
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="home">  <span >Home</span></a>
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

              </ul>
             
            </div>
        </nav>
      </div>
    </header>
  </div>
  <!-- end header section -->


  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
      <h2 class="main-heading ">
        Learning Resources
      </h2>
      <p class="text-center">
 
      </p>
      <div class="teacher_container layout_padding2">
        <div class="card-deck">
          <div class="card">
               <a href="https://scratch.mit.edu/"> <img class="card-img-top" src="images/SCRATCH.png" alt="Card image cap" ></a>
            <div class="card-body">
                      <a href="https://scratch.mit.edu/">
              <h5 class="card-title">Scratch</h5></a>
            </div>
          </div>
          <div class="card">
            <a href="https://csunplugged.org/en/">    <img class="card-img-top" src="images/csunplugged.png" alt="Card image cap"></a>
            <div class="card-body">
              <a href="https://csunplugged.org/en/">    <h5 class="card-title">CS Unplugged</h5></a>
            </div>

          </div>
          <div class="card">
          <a href="https://www.python.org/">  <img class="card-img-top" src="images/python.png" alt="Card image cap" ></a>
            <div class="card-body">
          <a href="https://www.python.org/">    <h5 class="card-title">Python</h5></a>

            </div>

          </div>

          <div class="card">
          <a href="https://microbit.org/">  <img class="card-img-top" src="images/Microbit-logo-stacked.png" alt="Card image cap"></a>
            <div class="card-body">
            <a href="https://microbit.org/">  <h5 class="card-title">Micro Bit</h5></a>

            </div>

          </div>

           <div class="card">
          <a href="https://www.raspberrypi.org/">  <img class="card-img-top" src="images/raspberry-pi-logo1.png" alt="Card image cap" ></a>
            <div class="card-body">
          <a href="https://www.raspberrypi.org/">    <h5 class="card-title">Raspberry Pi</h5></a>

            </div>

          </div>

 <div class="card">
          <a href="https://code.org/">  <img class="card-img-top" src="images/CODELOGO.png" alt="Card image cap" height="50%" width="50%"></a>
            <div class="card-body">
          <a href="https://code.org/">    <h5 class="card-title">Code</h5></a>

            </div>

          </div>

        </div>
      </div>


  <!--     <div class="d-flex justify-content-center mt-3">
        <a href="" class="call_to-btn  ">

          <span>
            See More
          </span>
          <img src="images/right-arrow.png" alt="">
        </a>
      </div> -->
    </div>
  </section>

  <!-- teacher section -->


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