<?php
//creates an array where each line of the file is an array element
$products = file("product_info.txt") or die('ERROR: Cannot find file');
//data is tilde-delimited
$delimiter = "~"; 
// loop through each line of the file
for ($i = 0; $i<count($products); $i++) { 
// returns an array of strings where each element in the array corresponds to each substring between the delimiters
    $products[$i] = explode($delimiter, $products[$i]);
}

//manufacturers array
$mans = file("manufacturers.txt") or die('ERROR: Cannot find file');
?>

<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
	<title>Align | Products </title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
  
    <!-- NAVBAR -->
    <nav class="navbar navbar-default" id="navbar">
      <div class="container-fluid">
        <!-- Logo and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html">
                <img src="images/align_logo_clear.png" alt="Align Home Health Care Logo" height="100" width="auto"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">PRODUCTS</a></li>
            <!--<li><a href="#">CONTACT US</a></li>-->
            <li><a href="/fundingAgencies.html">FUNDING AGENCIES</a></li>
          </ul>
          
          <!-- SEARCH BAR
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> -->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav> 
    
    
    <div class="container-fluid">
      <div class="row">
      <!-- PRODUCT NAV -->
      <div class="col-xs-3">
        <nav class="navbar navbar-default navbar-fixed-side" id="productNavbar">
          <ul class="nav">
            <li><a href="#access">Accessibility</a></li>
            <li><a href="#aids">Aids For Daily Living</a></li>
            <li><a href="#bathroom">Bathroom Safety</a></li>
            <li><a href="#ceiling">Ceiling / Floor Lifts and Slings</a></li>
            <li><a href="#folding">Lightweight Folding Manual Wheelchairs</a></li>
            <li><a href="#tilt">Manual Tilt Wheelchairs</a></li>
            <li><a href="#equip">Pediatric Equipment</a></li>
            <li><a href="#recliners">Power Recliners</a></li>
            <li><a href="#power">Power Wheelchairs</a></li>
            <li><a href="#rigid">Rigid Manual and Custom Manual Wheelchairs</a></li>
            <li><a href="#scooters">Scooters</a></li>
            <li><a href="#beds">Surfaces and Beds</a></li>
            <li><a href="#walkers">Walkers and Mobility Aids</a></li>
            <li><a href="#cushions">Wheelchair Seating / Cushions / Backs / Positioning</a></li>
            <li style="border-top: 1px solid #b5cbe3"><a href="#mans">Manufacturers</a></li>
          </ul>
        </nav> 
      </div>
      
      <!-- PRODUCT INFO -->
      <div class="col-xs-3">
        
        <h2 id="access">Accessibility</h2>
        <?php
          
          for ($x=0; $x<2; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>


        <h2 id="aids">Aids For Daily Living</h2>
        </div>
        <div class="col-xs-3">
        <h2 id="bathroom">Bathroom Safety</h2>
        <?php
          
          for ($x=2; $x<4; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="ceiling">Ceiling / Floor Lifts and Slings</h2>
        <?php
          
          for ($x=4; $x<6; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="folding">Lightweight Folding Manual Wheelchairs</h2>
        <?php
          
          for ($x=6; $x<8; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>
        
        <h2 id="tilt">Manual Tilt Wheelchairs</h2>
        <?php
          
          for ($x=8; $x<10; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="equip">Pediatric Equipment</h2>
        <?php
          
          for ($x=10; $x<12; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="recliners">Power Recliners</h2>
        <?php
          
          for ($x=12; $x<14; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="power">Power Wheelchairs</h2>
        <?php
          
          for ($x=14; $x<16; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="rigid">Rigid Manual and Custom Manual Wheelchairs</h2>
        <?php
          
          for ($x=16; $x<18; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="scooters">Scooters</h2>
        <?php
          
          for ($x=18; $x<20; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="beds">Surfaces and Beds</h2>
        <?php
          
          for ($x=20; $x<22; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>

        
        <h2 id="walkers">Walkers and Mobility Aids</h2>
        <?php
          
          for ($x=22; $x<24; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>
        
        <h2 id="cushions">Wheelchair Seating / Cushions / Backs / Positioning</h2>
        <?php
          
          for ($x=24; $x<26; $x++) {
                echo 
                '<img class="img-circle product_image" src="/images/'.$products[$x][0].'" alt="'.$products[$x][1].'" title="'.$products[$x][1].'" style="width:'.$products[$x][2].'; height:'.$products[$x][3].'"/>';
          }
        ?>
       
        <h2 id="mans">Manufacturers</h2>
        <div class="row">
          <div class="col-xs-6">
          <?php
          for ($i=0; $i<(count($mans)/2); $i++) {
            echo '<a href="'.$mans[$i].'" target="_blank">'.$mans[$i].'</a></br>';
            
          }
          ?>
          </div>
          <div class="col-xs-6">
          <?php
          for ($i=(count($mans)/2); $i<count($mans); $i++) {
            echo '<a href="'.$mans[$i].'" target="_blank">'.$mans[$i].'</a></br>';
            
          }
          ?>
          </div>
        </div>
      
      </div>
      </div>
    </div>
    
    <!-- FOOTER NAV -->
    
    <!-- FOOTER -->
    <div class="container-fluid">
        <div class="row">
            <footer>
              <small>&copy; 2017 Align Home Health Care</small>
              <div class="fbIcon"><a href="https://www.facebook.com/AlignPeterborough/" target="_blank"><img src="images/facebook_icon.png" width="30px" height="30px"></a>
              <a href="https://www.facebook.com/AlignPeterborough/" target="_blank">Find us on Facebook!</a></div>
            </footer>
        </div>
    </div>
    
    <script src="js/jquery.v2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>