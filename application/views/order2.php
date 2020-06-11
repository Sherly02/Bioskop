<html>
  <head>
    <title>
    
    </title>
    <style>
      form{line-height:2em} label, select,input{ margin-left: 95px; width: 120px; display: block; float: left; line-height: 15px } </style>
  </head>
  <center>
  <body style="background-color: orange">
     <img src="<?=base_url()?>asset/img/n3.jpg" alt="...">
    <h1>
      Form Penjualan Tiket <img src="<?=base_url()?>asset/img/ticket.png">
    </h1>
     <div class="container" align="left">
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email Address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Film</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Star Wars</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Studio</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>B</option>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Jam</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>10.00-12.00</option>
    </select>
  </div>
  </div>
</form>
<br>
<center><button type="button" class="btn btn-success">Send</button></center>
<br>
<br>