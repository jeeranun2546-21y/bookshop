<?php include('boot4.php');?>
<div class="col-md-12">
<form  name="register" action="member_form_add_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
<div class="border" style="background:#E8CFF8; width: 40rem;">
<div class="form-group">
    <div class="col-sm-12" align="left"><br>
    <div class="alert alert-warning" role="alert" style="color: #990099;">
      <h4 class="text-center"> สมัครสมาชิก </h4>
    </div></div>
  </div>
  
  <div class="form-group">
  
    <div class="col-sm-3" align=""> Username :</div>
    <div class="col-sm-12" align="center">
      <input  name="m_user" type="text" autocomplete="off" required  class="form-control" placeholder="Username สำหรับเข้าสู่ระบบ" />  
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-2" align=""> Password :</div>
    <div class="col-sm-12" align="left">
      <input  name="m_pass" type="password" autocomplete="new-password" required class="form-control" id="m_pass" placeholder="ตั้งรหัสผ่าน"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อ-สกุล :</div>
    <div class="col-sm-12" align="left">
      <input  name="m_name" type="text" required class="form-control" id="m_name" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-3" align=""> อีเมล : </div>
    <div class="col-sm-12" align="left">
      <input  name="m_email" type="email" class="form-control" id="m_email" required  placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-3" align=""> เบอร์โทรศัพท์ : </div>
    <div class="col-sm-12" align="left">
      <input  name="m_tel" type="text" class="form-control" id="m_tel" required  placeholder="ตัวเลขเท่านั้น" maxlength="10" pattern="^[0-9]+$" title="ตัวเลขเท่านั้น" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ที่อยู่ : </div>
    &nbsp;&nbsp;&nbsp;<font color="red">** หมายเหตุ: กรุณากรอกที่อยู่จริง ** </font>
    <div class="col-sm-12" align="left">
      <textarea name="m_address" class="form-control" id="m_address" required></textarea>
    </div>
  </div>
    <div class="form-group">   
          <div class="col-sm-12">
            รูปภาพ :
            <input type="file" name="m_img" id="card_img" class="form-control" />
          </div>
        </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-12" align="left">
      <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-saved"></span> สมัครสมาชิก  </button>
      <button type="reset" class="btn btn-warning me-3">ล้างข้อมูล
      </button> <a href="index.php" type="button" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a>
    </div>
    </span>
  </div>

</form>
</div></div>