<?php
include('h.php');
include("condb.php");
error_reporting(0);
ini_set('display_errors',0);
?>

<!DOCTYPE html>
<head>
  <?php include('boot4.php');?>
</head>
<body style="background-image: url('2.jpg');  background-position: center;">
  <div style="position: sticky; top: 0; z-index: 1000;">
<?php
  include('banner.php');
  include('navbar.php');
  ?>
  </div>
  <div class="container" >
    <div class="row" >
     
      <div class="col-md-12" style="margin-top: 10px">
        <div class="row">
          
            <?php
            $act = (isset($_GET['act']) ? $_GET['act'] : '');
            $q = $_GET['q'];
            if($act=='showbytype'){
            include('show_product_type.php');
            }else if($q!=''){
            include("show_product_q.php");
            }else if($act=='add'){
            include("member_form_add.php");
            }else{
            include('show_product.php');
            }
            ?>
          </div>
        </div>
      </div>
    </div>
          </div>
</body>
</html>
<?php include('script4.php');?>