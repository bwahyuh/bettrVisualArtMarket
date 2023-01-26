<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/css/index.css" type="text/css">
  <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>BETTR HomePage</title>
</head>

<body style="background-color: black;">
<?php include 'partials/_dbconnect.php' ?>
<?php require 'partials/_nav.php' ?>

  <!-- bettr is -->
  <div class="position-relative overflow-hidden text-center bg-black parallaximg1 text-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5 py-5">
      <p class="lead fw-normal text-light">
        Bettr is a web-based application that allows you
        as a creator to find and publish your own work
      </p>
    </div>
    <div class="border border-bottom border-light"></div>
  </div>

  <!-- our community -->
  <div class="container col-xl-10 col-xxl-8 px-4 py-4">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start mb-4">
        <h1 class="display-4 fw-bold lh-1 mb-3"></h1>
        <p class="col-lg-10 fs-5 text-light">Our community creates more than 300 <br>
          visual works from various categories in a month</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <img
          src="https://images.squarespace-cdn.com/content/v1/5b2a2304da02bcdfa5960061/1531416388643-X56W9E9MFB4MO14K003W/image-asset.jpeg?format=1500w"
          class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        <div class="border border-bottom border-light"></div>
      </div>
    </div>
  </div>

  <!-- for us -->
  <div class="position-relative overflow-hidden text-center bg-black parallaximg2 text-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p class="lead fw-normal text-light">
        For us, it's just a piece of cake
      </p>
    </div>
  </div>

  <div class="position-relative overflow-hidden text-center bg-black parallaximg2 text-light">
    <div class="col-xl-8 p-lg-5 mx-auto my-5">
    <div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HISK8jSRht0"></iframe>
</div>
    </div>
  </div>

 

  <!-- we also -->
  <div class="position-relative overflow-hidden text-center bg-black parallaximg3 text-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p class="lead fw-normal text-light">
        We also did some project with your favourites artist like
        Avicii, Billie Eillish, Alesso, and more
      </p>
    </div>
    <div class="border border-bottom border-light"></div>
  </div>

  <!-- so? -->
  <div class="position-relative overflow-hidden text-center bg-black parallaximg2 text-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p class="lead fw-normal text-light">
        So? What are you waiting for?
      </p>
    </div>
  </div>

  <!-- explore -->
  <div class="container px-4 py-5" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 d-flex justify-content-center">

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsbFI4lK8KbMYWXyHUPr1fbbFfaqcyCZd55g&usqp=CAU');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" onclick="window.location='homePage.php'">Explore our community</h3>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://images.squarespace-cdn.com/content/v1/5b2a2304da02bcdfa5960061/1531415528168-7B1V87SFA6TOB1BTL4XE/image-asset.jpeg?format=750w');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold" onclick="window.location='featuredArtist.php'">Explore our Featured Artist</h3>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<!-- eplore, featured artist -->

<?php require 'partials/_footer.php' ?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>

</html>