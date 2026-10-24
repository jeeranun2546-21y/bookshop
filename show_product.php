<?php
$q = $_GET['q'];
include("condb.php");
$sql = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type  as t ON p.type_id=t.type_id
ORDER BY p.p_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($con, $sql);
while($row_prd = mysqli_fetch_array($result)){
?>
<div class="col-sm-3" align="center">
    <div class="card border-Light mb-1" style="background-color: #E1FEFE; width: 15.5rem; height: 27rem;">
        <br>
        <img class="card-img-top">
        <a href=""> <?php echo"<img src='p_img/".$row_prd['p_img']."'width='200' height='200'>";?></a>
        <div class="card-body">
            <a href="prd.php?id=<?php echo $row_prd[0]; ?>"><b> <?php echo $row_prd["p_name"];?></b> </a>
            <br>
            ราคา <b class="text-danger"> <?php echo $row_prd["p_price"];?></b> บาท
            <br>
            คงเหลือ <b class="text-success"><?php echo $row_prd["p_qty"];?></b> <?php echo $row_prd["p_unit"];?>
            <br>
            <a href="prd.php?id=<?php echo $row_prd[0]; ?>" class="btn btn-outline-primary mt-2" style="color: #990099;">รายละเอียด</a>

            </button>
        </div>
        <br>
    </div>
</div>

<?php } ?>