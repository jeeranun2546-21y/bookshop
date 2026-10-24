<?php 
$type_id = $_GET['type_id'];
// echo $type_id;
// exit();

$query_Product_type = "SELECT * FROM tbl_product as p 
INNER JOIN tbl_type as t 
ON p.type_id = t.type_id 
WHERE p.type_id = $type_id
ORDER BY p.p_id ASC";
 $result_pro =mysqli_query($con, $query_Product_type) or die ("Error in query: $query_type " . mysqli_error());

    //  echo($query_Product_type);
    //  exit(); 
?>
<div class="row">
<?php foreach ($result_pro as $row_pro) { ?>  
<div class="col-sm-4 mb-4" align="center">
    <div class="card" style="background-color: #c4f6f6; width: 20rem; height:31rem;" >&nbsp;

     <img class="card-img-top mb-4">
    <a href=""><img src="p_img/<?php echo $row_pro ['p_img']; ?>"  width='200' height='250'><br></a>
     <div class="card-body">
      <h5 class="card-title text-primary"><?php echo $row_pro ['p_name']; ?></h5>
      <p class="card-text"> 
      ประเภท : <b class="text-success"><?php echo $row_pro ['type_name']; ?></b><br>
      ราคา <b class="text-danger"> <?php echo $row_pro["p_price"];?></b> บาท
      </p>
      <a href="prd.php?id=<?php echo $row_pro['p_id']?>" class="btn btn-outline-success mt-2">รายละเอียด</a><br>
    </div>
</div>
  </div>
  <?php } ?>