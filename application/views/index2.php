

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>21 Cinema !</title>
      <link href="<?=base_url()?>asset/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url()?>asset/style.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.theme.default.min.css">
      <script src="<?=base_url()?>asset/js/jquery-3.2.js" type="text/javascript"></script>
      <script src="<?=base_url()?>asset/js/bootstrap.js" type="text/javascript"></script>
      <script src="<?=base_url()?>asset/js/owl.carousel.min.js"></script>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
         <div class="container-fluid">
            <div class="navbar-header">
               <!--brand-->
               <a class="navbar-brand" href="#"><img  class="img-circle" src="<?=base_url()?>asset/img/icon.jpg"></a>
               <!-- end brand-->
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <!--kiri-->
               <ul class="nav navbar-nav">
                  <li class="active"><a href="<?= base_url()?>index.php/bioskop/rumah"><span class="glyphicon glyphicon-film"></span> Home</a></li>

                  <li><a href="<?= base_url()?>index.php/bioskop/jadwal_hari_ini"><span class=" glyphicon glyphicon-thumbs-up"></span> Jadwal Hari ini</a></li>
                  <li><a href="<?= base_url()?>index.php/bioskop/kritik_saran"><span class=" glyphicon glyphicon-comment"></span> Kritik dan Saran</a></li>

        
               </ul>
               <?php if($this->session->userdata('login')){ ?>
              <ul class="nav navbar-nav navbar-right">
                                   <li><a href="<?=base_url()?>index.php/cart/index"><i class="glyphicon glyphicon-shopping-cart"></i><span class="label label-succes"><?= $this->cart->total_items();?></span></a></li>
      <li class="dropdown">
        <a href="#" class=" dropdown-toggle"  data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata("username");?><b class="caret"></b></a>
        <ul class="dropdown-menu">
          </a></li>
           <li><a href="<?=base_url('index.php/bioskop/register')?>"><span class="glyphicon glyphicon-eye-open"> Register</a></li>
             <li><a href="<?=base_url('index.php/pesanan')?>"><span class="glyphicon glyphicon-envelope"> Pesanan</a></li>
          <li class="divider"></li>
             <li><a href="<?= base_url()?>index.php/bioskop/Logout"><span class="glyphicon glyphicon-warning-sign"> Logout</a></li>
        </ul>
      </li>
    </ul>
<?php } else { ?>
 <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class=" dropdown-toggle"  data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?=base_url('index.php/bioskop/login')?>"><span class="glyphicon glyphicon-cloud-upload"> Login
          </a></li>
           <li><a href="<?=base_url('index.php/bioskop/register')?>"><span class="glyphicon glyphicon-eye-open"> Register</a></li>
          <li class="divider"></li>
        </ul>
      </li>
    </ul>
<?php } ?>


               <!--end kiri-->
               <!--kanan-->
               
            </div>
         </div>
      </nav>
      <!--end kanan-->
   </head>
   <body data-spy="scroll" data-target="">
    <div class="container-fluid header">
      
    </div>
  <!--JUMBOTRON-->
  <br>
  <div class="jumbotron">
  <div class="container">
    <center><h1>November Hot Promo !! </h1>
    <p>- For those who born in November, get your ticket for free -</p></center>
  </div>
</div>
<!--END JUMBOTRON-->

<?php
$this->load->view($konten);
   ?>
</html>
<script>
var acuan=$(".jumbotron").offset().top;
var menu=function(){
    var scrol=$(window).scrollTop();
    if (800<scrol) {
      $(".navbar-default").addClass("berubah-menu");

    } else{
      $(".navbar-default").removeClass("berubah-menu");

    }


}
menu();
$(window).scroll(function(){
  menu();
});
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
