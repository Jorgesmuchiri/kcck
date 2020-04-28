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

  <title>K.C.C.K</title>



<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
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
  
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>




  <link rel="stylesheet" href="css/css-circular-prog-bar.css">


</head>

<body>


<style>input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=email]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #a81818;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */


/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}</style>

  <div class="top_container sub_pages">
    <!-- header section strats -->
   <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
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
  <!-- end header section -->


  <!-- teacher section -->
  <section class="teacher_section layout_padding-bottom">
    <div class="container">
    
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
    
    
      <h2 class="main-heading ">
Host
      </h2>
     <p class="text-center">
        
A host is expected to set up a coding club and provide a computer teacher as a patron to the club. In addition, the host will avail computers for the students to undertake the training. It is expected that there is Internet connection for online tasks and resources. A projector is also ideal for use during training. The host is further encouraged to take part in the meetups and competitions that will be prepared for the coding clubs.
      </p>

    
    <section class="vehicle_section layout_padding">
      
      <div class="container">
         <h2 class="main-heading ">
Unlocking Technological Capacity for a Digital Future
      </h2>
<form method="post" action="{{ route('hosts.store') }}" autocomplete="off" id="hostform" class="form-horizontal" enctype="multipart/form-data" >
            @csrf
            @method('post')
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your Name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="email" placeholder="Email.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Phone No</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="phone_no" placeholder="Phone No.." required>
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="fname">Motivation for Hosting</label>
      </div>
      <div class="col-75">
        <input type="text" id="motivation" name="motivation" placeholder="Motivation for hosting.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Hosting Location</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="location" placeholder="Hosting Location.." required>
      </div>
    </div>
    
    <div class="row">
       <div class="col-25">
        <label for="Captcha"></label>
      </div>
      <div class="col-75">
      <div class="g-recaptcha" data-sitekey="6LeCeewUAAAAAFJJZpdk484FnGcHBG6tfu3JJQ6s" required >
                                 
                             </div>
      </div>
    </div>
    
    
   
    <div class="row">
      <input type="submit" value="Submit" class="call_to-btn">
    </div>
  </form>
</div>
    </div>
  </section>
  
     
 
  </section>
<br>
<br>
<br>
<br>
<br>
  <!-- teacher section -->


  <!-- footer section -->
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

  <a href="resources" style="color: #fff;">Resources</a>
</p>
<p class="text-center">
  <a href="partners" style="color: #fff;">Partner</a>

</p>
<p class="text-center">
   <a href="" style="color: #fff;">Blog</a>

</p>

<p class="text-center">
<a href="terms" style="color: #fff;">Terms and Conditions</a></p>
  </div>
  <div class="column" style="background-color:#082465;">
 <h1 class="text-center" style="color: #b42025;font-size: 18px;">Follow Us</h1>
    <p class="text-center">
<a href="https://www.facebook.com/iLabAfricaStrathmore/?fref=ts" class="fa fa-facebook" style="color: #fff;"></a> 
</p>
<p class="text-center">
<a href="https://twitter.com/ilabafrica" class="fa fa-twitter" style="color: #fff;"> </a>
</p>
<p class="text-center">
<a href="https://www.linkedin.com/company/ilabafrica/" class="fa fa-linkedin" style="color: #fff;"> </a>
</p>

<p class="text-center">
<a href="https://www.instagram.com/ilabafrica/?hl=en" class="fa fa-instagram" style="color: #fff;"> </a>
</p>
<p class="text-center"><a href="https://www.youtube.com/channel/UCeo0kj1SRiVkje78cyxnAzQ" class="fa fa-youtube" style="color: #fff;"></a>
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
  
  document.getElementById("hostform").addEventListener("submit",function(evt)
  {
  
  var response = grecaptcha.getResponse();
  if(response.length == 0) 
  { 
    //reCaptcha not verified
    alert("please verify you are humann!"); 
    evt.preventDefault();
    return false;
  }
  //captcha verified
  //do the rest of your validations here
  
});
  
  
  
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