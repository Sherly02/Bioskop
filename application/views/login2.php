<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
      <title>LOGIN  !</title>
      <link href="<?=base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url()?>asset/style_login.css" rel="stylesheet" type="text/css">
      <script src="<?=base_url()?>asset/js/jquery-3.2.js" type="text/javascript"></script>
      <script src="<?=base_url()?>asset/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<?php 
    if($this->session->flashdata('pesan')!=null)
    {
      echo "<div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";}?>
    <img src="<?=base_url()?>asset/img/user1.png" style="width: 9%;margin-left: -33%;margin-top: 1%;">
	<div class="col-md-4 jarak-atas col-md-offset-4">
        <div class="panel panel-danger">
          <div class="panel-heading">
          </div>
          <div class="panel-body">
            <div  id="warning" class="alert alert-warning"></div>
            <br>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            </div>
            <br>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            </div>
            <center>
                <br>
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

<a href="<?=base_url('index.php/bioskop/register')?>"><button type="button" class="btn btn-success">Register</button></a>
            </center>
          </div>
        </div>

    </div>

</body>
</html>


