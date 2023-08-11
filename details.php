<?php

$id=$_GET["id"];
 $link=mysqli_connect('localhost','root','','superblac');
$query=mysqli_query($link,"SELECT * FROM listings where id='$id'");

$query1=mysqli_query($link,"SELECT * FROM listings where id='$id'");
while ($res1=mysqli_fetch_array($query1)) {

$name=$res1["name"];
}

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>SuperBlac Homes</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
  </head>
  <body>
  
<div class="main-container">
  <div class="container-fluid jumbo2 ">
    
    <div class="container-fluid main-nav othernav">
      <div class="row p-0">
        <div class="col-sm-6 mini-nav">
          <div class="row p-0">
            <div class="col-sm-2">
              <img src="images/logo.png" height="60px" onclick="window.location='index.html'" style="cursor: pointer;">
            </div>
           <div class="col-sm-3 f" onclick="window.location='listings.html'">Find House</div>
            <div class="col-sm-2 f" onclick="window.location='index.html#blog'">Blog</div>
            
             <div class="col-sm-4 f" onclick="window.location='index.html#footer'">Book Appointment</div>
          </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-1"></div>
        
         <div class="col-sm-1"> <button class="btn btn-lg" style="background-color: #dfa550; width: 150px; margin-top: 10px; font-weight: bolder;"> Login</button></div>
      </div>
    </div>
      <div class=" mobile-nav">
          
          <nav role="navigation">
            <div id="menuToggle">
              <input type="checkbox" />
                <span></span>
                <span class="io"></span>
                <span class="ioo"></span>

                <img src="images/logo.png" height="40px" class="mobileimg">
                 <button class="btn btn-lg mobilelog" style="background-color: #dfa550; width: 150px; margin-top: 10px; font-weight: bolder;"> Login</button>
            <ul id="menu">
              <li class="mb-1"><a href="search.php">Find House</a><br><img src="images/stroke.png" width="50px" height="9px" style="position: relative; top: -9px;"></li>
                 <li class="mb-1"><a href="#blog">Blog</a><br><img src="images/stroke.png" width="50px" height="9px" style="position: relative; top: -9px;"></li>
                    <li class="mb-1"><a href="#book">Book Appointment</a><br><img src="images/stroke.png" width="50px" height="9px" style="position: relative; top: -9px;"></li>

            
            </ul>
           </div>
          </nav>
        </div>
    <div class="bread mj" style="">
     <span onclick="window.location='index.html'" style="cursor: pointer;"> Home </span>   <span class="iconify" data-icon="bi:caret-right-square-fill" data-inline="false" style="margin-left: 20px; margin-right: 20px;"> </span> <span onclick="window.location='listings.html'" style="cursor: pointer;"> Listings </span>   <span class="iconify" data-icon="bi:caret-right-square-fill" data-inline="false" style="margin-left: 20px; margin-right: 20px;"> </span><?php echo $name;  ?>
    </div>
    
  </div>
<div class="content1 container">
                   <p style="font-weight: bolder; color: grey" class="mb-3"> <?php echo $name;  ?></p>
                  <p style="font-family: boldd; font-weight: bolder; font-size: 2.4em" class="mb-5">House Details</p>
            <div class="container mb-5" >
              <div class="row">
                <div class="col-sm-12">
                    <div class="container">
                            <div class="splide"  id="splide2">
                              <div class="splide__track">
                                <ul class="splide__list">



                                  <?php
                                  while ($res=mysqli_fetch_array($query)) {
                               ?>




                                 <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image1"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>
                                      <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image2"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>

                                      <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image3"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>

                                      <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image4"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>

                                      <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image5"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>


                                      <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image6"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>

                                      <li class="splide__slide"> 
                                    <center><img src="images/<?php echo $res["image7"];  ?>" class="img-fluid mb-3" style="max-height: 700px">
                                                                      <p style="font-family: boldd; font-weight: bolder; font-size: 2.0em" class="mb-2">
                                                        <?php echo $res["name"];  ?></p>
                                                        <p style="color: grey"><?php echo $res["location"];  ?></p>
                                                        <p style="color: #82CDE5; font-size: 2em; font-weight: bolder;"><?php echo $res["price"];  ?></p></center>
                                    


                                  </li>
                                  
                                
                                 
                                            </ul>
                          </div>
                        </div>
                  
                 </div>
                </div>
                <div class="col-sm-2">
              
                </div>
                 <div class="col-sm-8"><h3 class="mb-5">House Details</h3>

<?php echo $res["details"];  ?>

                 </div>
                  <?php
                                   }

                                  ?>
                  <div class="col-sm-2">
                    
                  </div>
              </div>
            </div>
  </div>






   <div class="footer">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-6 fo" >
                        <h2 class="mb-5" style="font-family: boldd; color: white;" >Contact Us For More Information</h2>
                        <div class="fo1 mb-5">
                          <span style="color: #d6c6c6">
                            Mail
                          </span><br>
                          <span>dream@house.com</span>
                        </div>
                        <div class="fo1 mb-5">
                          <span style="color: #d6c6c6">
                            Phone
                          </span><br>
                          <span>080 23 9795 75</span>
                        </div>
                        <div class="fo1 mb-5">
                          <span style="color: #d6c6c6">
                            Address
                          </span><br>
                          <span>Jl. MH. Thamrin No 990, Surabaya,<br>
                          Jawa Timur, Indonesia</span>
                        </div>
                        <div class="fo1 mb-5">
                          <span style="color: #d6c6c6">
                            Mail
                          </span><br>
                          <span>dream@house.com</span>
                        </div>
                      </div>
                      <div class="col-sm-6 s2">
                        <img src="images/footer1.png" class="footers2 img-fluid">
                        <center>
                          <div class="footercontact">
                          <center><h3 class="mb-5" style="font-family: boldd">What do you want to ask?</h3></center>
                          <input type="text" name="" placeholder="firstname" class="form-control mb-3" style="height: 50px;">
                           <input type="email" name="" placeholder="firstname" class="form-control mb-3" style="height: 50px;">
                           <textarea class="form-control mb-3" style="height: 150px;"></textarea>
                           <button class="btn btn-lg" style="width: 100%; background: #866631bf; color: white">Send Now</button>
                        </div>
                        </center>
                        
                      </div>
                    </div>
                  </div>
  </div>
</div>

<div class="overlay" id="overlay">
  <center><img src="images/91.gif"></center>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  

      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <script type="text/javascript">

       new Splide( '#splide2', {
  perPage: 1,
  rewind : true,
   
} ).mount();
    </script>
    <script type="text/javascript">
        window.onload= function(argument) {
          document.getElementById('overlay').style.display="none";
        }
      </script>
    <script type="text/javascript"  src="js/js.js"></script>
    

  </body>
</html>