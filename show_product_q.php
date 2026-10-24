<?php
$q = $_GET['q'];
$query_Product = "SELECT * FROM tbl_product as p 
INNER JOIN tbl_type as t 
ON p.type_id = t.type_id
WHERE p.p_name LIKE'%$q%' 
ORDER BY p.p_id ASC";
$result_pro =mysqli_query($con, $query_Product) or die ("Error in query: $query_type " . mysqli_error());

     //echo($query_type);
     //exit()
?>
<div class="row">
<?php foreach ($result_pro as $row_pro) { ?>
  <div class="col-md-12 " align="center">
    <img class="card-img-top" src="p_img/<?php echo $row_pro ['p_img']; ?>" alt="Card image cap" width='500' height='300'>
    <div class="card-body">
      <h5 class="card-title"><?php echo $row_pro ['p_name']; ?></h5>
      <p class="card-text"> 
      ประเภท : <?php echo $row_pro ['type_name']; ?>
      </p>
      <a href="product_detail.php?id=<?php echo $row_pro['p_id']?>" class="btn btn-outline-primary mt-2">รายละเอียด</a>
    </div>
  </div>
<?php } ?>
</div>