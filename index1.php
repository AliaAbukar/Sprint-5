<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['username'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

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

  <title>Dasani Order Management System - User Homepage</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

</head>

        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="#">
            <img src="images/dlogo.png" style="width: 200px;" alt="" />
            <span>
               
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#mod"> My Module</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#data">Database </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="php/logout.php">
                <span>
                  Logout
                </span>
              </a>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>! 
                    </h1>
                    <p>
                      Order Pure, Refreshing Water Online Today!
                    </p>
                    <div class="btn-box">
                      <a href="#mod" class="btn-1">
                        My Module
                      </a>
                      <a href="#data" class="btn-2">
                        Database
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/smiling.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!
                    </h1>
                    <p>
                      Customize Your Delivery Schedule with Dasani!
                    </p>
                    <div class="btn-box">
                      <a href="#mod" class="btn-1">
                        My Module
                      </a>
                      <a href="#data" class="btn-2">
                        Database
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/wink.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       Welcome <?php echo $row1['User_Type']; ?>, <?php echo $row1['Fullname']; ?>!
                    </h1>
                    <p>
                       For Premium Quality Water, Delivered Straight to Your Doorstep!
                    </p>
                    <div class="btn-box">
                      <a href="#mod" class="btn-1">
                        My Module
                      </a>
                      <a href="#data" class="btn-2">
                        Database
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/happy.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- database section -->

  <section id="data" class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Database
              </h2>
              <br>
              <h3><br>
                <br>List of Products</h3>
            </div>
            <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Product ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Description</th>
 <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Picture</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `Product_ID`, `Name`, `Description`, `Quantity`, `Price`, `Image` FROM `product` WHERE `Quantity` > 0";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Description"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Price"]); ?> kshs.</td>
<td><img src="images/<?php echo($row["Image"]); ?>" style="width: 150px;" alt></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
            <div class="btn-box">
              <a onclick="printData1();" class="btn-1">
                Print Report
              </a>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="detail-box">
            <div class="heading_container">
              <h3><br>
                <br>List of Orders</h3>
            </div>
            <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Order ID</th>
  <th style="text-align: left;
  padding: 8px;">Product</th>
 <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `orders`.`Order_ID`, `orders`.`User_ID`, `orders`.`Product_ID`, `orders`.`Total_Price`, `orders`.`Quantity`, `orders`.`Created_At`, `orders`.`Status` FROM `orders` WHERE `orders`.`User_ID` = '$filter'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Order_ID"]); ?></td>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Total_Price"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
<?php
if (($row['Status'] != 'Completed') || ($row['Status'] != 'Cancelled')){
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to cancel this order?')?window.location.href='php/functions.php?action=cancelO&id=<?php echo($row["Order_ID"]); ?>':true;" title='Cancel Order'>Cancel</button></td>
<?php
}else{
?>
<td></td>
<?php
}
?>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
            <div class="btn-box">
              <a onclick="printData2();" class="btn-1">
                Print Report
              </a>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end database section -->

<!-- my module section -->

  <section id="mod" class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <span>
              My Module
            </span>
          </div>
        </div>

        <div class="info_main">
          <div class="row">

            <div class="col-md-12">
              <div class="info_form ">
                <h5>
                  Make An Order
                </h5>
                <form action="php/functions.php" method="POST">
                <select required name="sp">
                <option selected disabled value="0">Select A Product</option>
                <?php
                $sql = "SELECT * FROM `product`";
                $all_categories = mysqli_query($conn,$sql);
                while ($category = mysqli_fetch_array(
                $all_categories,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $category["Name"];?>,<?php echo $category["Price"];?>,<?php echo $category["Quantity"];?>"><?php echo $category["Name"];?></option>
                <?php
                endwhile;
                ?>
                  </select>
                  <br>
                  <br>
                  <input type="number" name="quan" min="0" required placeholder="Quantity">                  
                  <button name="makeO" type="submit">
                    Make An Order
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end my module section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/dlogo.png" alt="" />
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-6">
              <div class="info_link-box">
                <h5>
                  Useful Links
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="#mod">My Module </a>
                  </li>
                  <li class="">
                    <a class="" href="#data">Database </a>
                  </li>
                  <li class="">
                    <a class="" href="php/logout.php">Logout </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-6">
              <h5>
                Who We Are
              </h5>
              <p>
                Dasani is committed to delivering pure, great-tasting water straight to your doorstep, ensuring hydration is never out of reach. With our easy-to-use online platform, staying hydrated has never been simpler.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Nairobi, Kenya.
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        info@dasani.org
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +254 7123456789
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved.
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>

</body>
</body>

</html>