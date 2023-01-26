<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id="title">Category</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <style>
    .jumbotron {
        padding: 2rem 1rem;
    }
    #cont {
        min-height : 570px;
    }
    </style>
</head>
<body style="background-color: black;">
    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ?>

    <!-- carousell -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.squarespace-cdn.com/content/v1/5b2a2304da02bcdfa5960061/1531408435864-WIYVZULQOK2GLR2PN27W/image-asset.gif?format=1000w" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Work it Harder</h5>
        <p>the more you work, the more you gain.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.squarespace-cdn.com/content/v1/5b2a2304da02bcdfa5960061/1562872922027-VTQGVYEC43J3FCHKA9X0/ezgif-5-a7bdc680fdee.gif?format=1000w" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Make it Bettr</h5>
        <p>next step, it will be better do your job by yourself.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.squarespace-cdn.com/content/v1/5b2a2304da02bcdfa5960061/1530185020949-HWC6VVV3UJYTSOC6OA80/DN3A6031.jpg?format=1000w" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Do it Faster</h5>
        <p>Speed is not about limit, its about consistency.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <?php
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `categories` WHERE categorieId = $id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $catname = $row['categorieName'];
            $catdesc = $row['categorieDesc'];
        }
    ?>
  
    <!-- vart container starts here -->
    <div class="container my-3" id="cont">
    <h2 class="text-center text-light my-3"><span id="catTitle">Items</span></h2>
        <div class="row">
        <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `vart` WHERE vartCategorieId = $id";
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $vartId = $row['vartId'];
                $vartName = $row['vartName'];
                $vartPrice = $row['vartPrice'];
                $vartDesc = $row['vartDesc'];
            
                echo '<div class="d-flex justify-content-between mr-3">
                        <div class="p-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/vart-'.$vartId. '.jpg" class="card-img-top" alt="image for this vart" width="249px" height="270px">
                            <div class="card-body">
                                <h5 class="card-title">' . substr($vartName, 0, 20). '...</h5>
                                <h6 style="color: #ff0000">Rp. '.$vartPrice. '/-</h6>
                                <p class="card-text">' . substr($vartDesc, 0, 29). '...</p>   
                                <div class="row justify-content-center">';
                                if($loggedin){
                                    $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE vartId = '$vartId' AND `userId`='$userId'";
                                    $quaresult = mysqli_query($conn, $quaSql);
                                    $quaExistRows = mysqli_num_rows($quaresult);
                                    if($quaExistRows == 0) {
                                        echo '<form action="partials/_manageCart.php" method="POST">
                                              <input type="hidden" name="itemId" value="'.$vartId. '">
                                              <button type="submit" name="addToCart" class="btn btn-primary mx-2">Add to Cart</button>';
                                    }else {
                                        echo '<a href="viewCart.php"><button class="btn btn-primary mx-2">Go to Cart</button></a>';
                                    }
                                }
                                else{
                                    echo '<button class="btn btn-primary mx-2" data-toggle="modal" data-target="#loginModal">Add to Cart</button>';
                                }
                            echo '</form>                            
                                <a href="viewVart.php?vartid=' . $vartId . '" class="mx-2"><button class="btn btn-primary">Quick View</button></a> 
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>';
            }
            if($noResult) {
                echo '<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">Sorry In this category No items available.</p>
                        <p class="lead"> We will update Soon.</p>
                    </div>
                </div> ';
            }
            ?>
        </div>
    </div>


    <?php require 'partials/_footer.php' ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script> 
        document.getElementById("title").innerHTML = "<?php echo $catname; ?>"; 
        document.getElementById("catTitle").innerHTML = "<?php echo $catname; ?>"; 
    </script> 
</body>
</html>