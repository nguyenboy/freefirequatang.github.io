<?php
error_reporting(0);
include('acc_adm.php');
    
        if ($_GET['password'] != $pass ) {
            header('location: login.php');
            die();
            
        } else {
           // session_start();

}
include('config.php');
?>

<?php include('head.php');?>
<?php include('nav.php');?>
<?

?>
<?
if(isset($_POST['listacc'])) {
    unlink($name_facebook);
    $p = fopen($name_facebook, 'a');
    fwrite($p, $_POST['listacc']);
    fclose($p);
     echo '<script type="text/javascript">swal("Thành Công","Lưu Thành Công","success");
                </script>';
}
?>
 

  <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <h3><?=count(file($name_facebook))?></h3>

                <p>TỔNG ACCOUNT FACEBOOK</p>
              </div>
              <a href="fb.php?password=<?=$_GET['password']?>" class="small-box-footer">Quản Lí<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
   
            </div>
          </div>
        <div class="row mb-2">
          <div class="col-sm-6">
    
          </div><!-- /.col -->
        </div><!-- /.row -->
         
         <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                Thông Tin
              </div>
              <!-- /.card-header -->
              <div class="card-body">                
                  <div class="row">
                  <div class="col-md-6">
                <div class="form-group">
                 
                  
                  <label for="exampleInputEmail1">INFORMATION ACCOUNT<br>
                  <b style="color:red"><?=count(file($name_facebook))?></b> Nick Facebook.<br>
                  </label>
              </div>  
                </div>
               
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) -->
          
<form class="form-horizontal" action="" method="post">
        <div class="row">
          <div class="col-md-12">
            <button name="submit" type="submit" class="btn btn-info btn-block">LƯU THAY ĐỔI</button>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                List Account Facebook
              </div>
              <!-- /.card-header -->
              <div class="card-body">                
                  <div class="row">
                  <div class="col-md-6">
                
                <div class="form-group">
                 <label for="exampleInputEmail1">Nếu bạn cần xóa ACCOUNT, bạn chỉ cần xóa những acc nào muốn xóa phía dưới và Click <b style="color:red">LƯU THAY ĐỔI</b>. Vậy là bạn đã xóa Thành Công.</label>
                  <textarea class="textarea" name="listacc" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=file_get_contents($name_facebook)?></textarea>
                </div>
              </div>  
                </div>
               
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) --> </form> 
        <center><br>
      <div class="row mb-2">
          <div class="col-sm-6">
            <a href="index.php?password=<?=$_GET['password']?>" class="btn btn-primary btn-block">Trang Chủ</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
<br>
<div class="row mb-2">
          <div class="col-sm-6">
            <a href="logout.php" class="btn btn-primary btn-block">Đăng Xuất</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
<br>
</center>
<?php include('footer.php');?>