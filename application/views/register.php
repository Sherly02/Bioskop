<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Register  !</title>
      <link href="<?=base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url()?>asset/style_login.css" rel="stylesheet" type="text/css">
      <script src="<?=base_url()?>asset/js/jquery-3.2.js" type="text/javascript"></script>
      <script src="<?=base_url()?>asset/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
  
    <img src="<?=base_url()?>asset/img/user1.png" style="width: 9%;margin-left: -33%;margin-top: 1%;">
  <div class="col-md-4 jarak-atas col-md-offset-4">
        <div class="panel panel-danger">
          <div class="panel-heading">
          </div>
          <div class="panel-body">
    <p class="login-box-msg"><b><center>Register</center></b> </p>
    <?php 
    if($this->session->flashdata('pesan')!=null)
    {
      echo "<div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";}?>
       <form method="post" action="<?=base_url('index.php/bioskop/simpan')?>">

       <div class="input-group">
              <input type="text" class="form-control" name="nama_pembeli" placeholder="nama">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            </div>
            <br>
            <div class="input-group">
              <input type="text" class="form-control" name="username" placeholder="username">
              <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            </div>
            <br>
            <div class="input-group">
              <input type="password" class="form-control" name="password" placeholder="password">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            </div>
            <center>

      <div class="row">
        <br>
      
        <!-- /.col -->
        <div class="col-xs-12">
    <input type="submit" value="Register" name="submit" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
      </center>
    </form>

   <center><a href="<?=base_url()?>index.php/bioskop/login" class="text-center">I already have a membership</a></center> 
  </div>
            </center>
          </div>
        </div>

    </div>
</form>
</body>
</html>

 