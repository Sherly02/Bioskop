
      <!--carousel-->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
         </ol>
         <!-- Wrapper for slides -->
         <center>
            <div class="carousel-inner">
               <div class="item active">
                  <img src="<?=base_url()?>asset/img/p1.jpg" alt="hoka">
                  <div class="carousel-caption">
                    Our Hot Movie 
                  </div>
               </div>
               <div class="item">
                  <img src="<?=base_url()?>asset/img/p2.jpg" alt="hoka">
                  <div class="carousel-caption">
                     Our Hot Movie 
                  </div>
               </div>
               <div class="item">
                  <img src="<?=base_url()?>asset/img/p3.jpg" alt="hoka">
                  <div class="carousel-caption">
                     Our Hot Movie 
                  </div>
               </div>
            </div>
         </center>
         <!-- Controls -->
         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         </a>
         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         </a>
      </div>
      <br>
<!--TABLE-->
<table class="table table-hover">
    <thead>
      <tr>
        <th class="danger">No</th>
        <th class="danger">Film </th>
        <th class="danger">Viewers</th>        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Tom Cruise : Obvilion</td>
        <td>20.000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Avengers</td>
        <td>18.000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Star Wars : Awakening</td>
        <td>15.000</td>
      </tr>
    
    </tbody>
</table>
<!--ENDTABLE-->
<!--JUMBOTRON-->
<br>
  <div class="jumbotron">
  <div class="container">
    <center><h1>Why Choose Us ?</h1>
  <p>Fullfilled with many facilities and DOLBY cinema that will bring your highest cinema experience </p></center>
  </div>
</div>
<!--END JUMBOTRON-->
<!--car fas-->

  <!-- Wrapper for slides -->
  <center>  <div class="carousel-inner">
    <div class="item active">
      <img src="<?=base_url()?>asset/img/f1.jpg" alt="...">
      <div class="carousel-caption">
        <b>Dolby Cinema Powered</b>
      </div>
    </div>
    <div class="item">
      <img src="<?=base_url()?>asset/img/t2.jpg" alt="...">
      <div class="carousel-caption">
       <b> Dolby Cinema Powered</b>
      </div>
    </div>
    ...
  </div>
  </center>

  <!--end car fas-->
  <!--JUMBOTRON-->
<br>
  <div class="jumbotron">
  <div class="container">
    <center><h1>Come and Enjoy The Experience you never know before</h1>
  <p>- Trust Your Eyes -</p></center>
  </div>
</div>
<!--END JUMBOTRON-->
<br>
<!--OWL-->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Our Facilites</h1>
      <div class="owl-carousel owl-theme">
    <div class="item"><img src="<?=base_url()?>asset/img/h1.jpg"></div>
    <div class="item"><img src="<?=base_url()?>asset/img/h2.jpg"></div>
    <div class="item"><img src="<?=base_url()?>asset/img/h3.jpg"></div>
    <div class="item"><img src="<?=base_url()?>asset/img/h4.jpg"></div>
    <div class="item"><img src="<?=base_url()?>asset/img/h5.jpg"></div>
</div>
    </div>
  </div>
</div>
<!--OWLEND-->
<br>
      

<!--JUMBOTRON-->
<br>
  <div class="jumbotron">
  <div class="container">
    <center><h1>Now Playing Movie</h1>
  <p> - Enjoy Our Movie Selection - </p></center>
  </div>
</div>
<!--END JUMBOTRON-->
      <!--GRIDKU-->
      <div class="container atas">
         <div class="row">
            <div class="col-md-8">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 id="#review" class="panel-title"></h3>
                  </div>
                  <div class="panel-body">
                     <div class="row">
 <?php 
foreach ($tampil_film as $film) {
?>

  
<div class="col-md-8">
  <a href="<?=base_url('index.php/bioskop/detail_film/'.$film->id_film)?>" class="thumbnail">
    <img src="<?=base_url()?>asset/img/<?=$film->gambar_film;?>" style="width: 100%">
    <div class="caption">
      <?=$film->nama_film;?>
    
    </div>
  </a>
</div>
<?php 

}

?>

                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><b>Schedule of Now Playing Movie</b></h3>
                  </div>
                  <div class="panel-body">
                     <div class="row">
                        <div class="col-md-12 ">
                        <!--TABLE-->
                      <table class="table table-hover">
                          <thead>
                            <tr>
                              <th bgcolor="#fabe58">No</th>
                              <th bgcolor="#fabe58">Film </th>
                              <th bgcolor="#fabe58">Studio</th>
                              <th bgcolor="#fabe58">Jam Tayang </th>          
                            </tr>
                          </thead>
                          <tbody>
                            <tr >
                              <td bgcolor="#16a085" >1</td>
                              <td bgcolor="#16a085">Moonlight</td>
                              <td bgcolor="#16a085">A</td>
                              <td bgcolor="#16a085">10.00 - 12.00</td>
                             </tr>
                            <tr>
                              <td>2</td>
                              <td>Moonlight</td>
                              <td>A</td>
                              <td>12.30 - 14.30</td>
                            </tr>
                            <tr>
                              <td bgcolor="#16a085">3</td>
                              <td bgcolor="#16a085">Star Wars : Force Awake</td>
                              <td bgcolor="#16a085">B</td>
                              <td bgcolor="#16a085">10.00 - 12.00</td>
                            </tr>
                              <tr>
                              <td>3</td>
                              <td>Star Wars : Force Awake</td>
                              <td>B</td>
                              <td>12.30 - 14.30</td>
                            </tr>
                             <tr>
                              <td bgcolor="#16a085">4</td>
                              <td bgcolor="#16a085">Richard Parker</td>
                              <td bgcolor="#16a085">C</td>
                              <td bgcolor="#16a085">10.00 - 12.00</td>
                            </tr>
                             <tr>
                              <td>4</td>
                              <td>Richard Parker</td>
                              <td>C</td>
                              <td>12.30 - 14.30</td>
                            </tr>
                          
                          
                          </tbody>
                      </table>
                      <!--ENDTABLE-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--GRID END-->
      <!--MODAL1-->
      <div id="mod1" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Moonlight</h4>
      </div>
      <div class="modal-body">
        <p><b> Sinopsis  :</b> Moonlight is a 2016 American coming-of-age drama film written and directed by Barry Jenkins, based on Tarell Alvin McCraney's unpublished semi-autobiographical play In Moonlight Black Boys Look Blue. It stars Trevante Rhodes, Andre Holland, Janelle Monáe, Ashton Sanders, Jharrel Jerome, Naomie Harris, and Mahershala Ali.
        <br>
        <b>Cast :</b> <br>
      Trevante Rhodes as Adult Chiron  <br>
      Ashton Sanders as Teen Chiron  <br>
      Alex Hibbert as Child Chiron 
      <br>
      <b>Rate  : 4 / 5 Stars</b>
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Close</button>
 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!--MODAL1 END-->
  <!--MODAL2-->
      <div id="mod2" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Star Wars : Force Awakens</h4>
      </div>
      <div class="modal-body">
        <p><b> Sinopsis  :</b> Star Wars: The Force Awakens adalah sebuah film opera luar angkasa Amerika Serikat yang disutradarai oleh J. J. Abrams. Film ini merupakan yang ketujuh dari serial film Star Wars dan dibintangi oleh Harrison Ford, Mark Hamill, Carrie Fisher, Adam Driver, Daisy Ridley, John Boyega, Oscar Isaac, Lupita Nyong'o, Andy Serkis, Domhnall Gleeson, Anthony Daniels, Peter Mayhew, dan Max von Sydow. Kisah cerita film ini terjadi sekitar 30 tahun setelah peristiwa di dalam film Return of the Jedi (1983).
        <br>
        <b>Cast :</b> <br>
        Harrison Ford sebagai Han Solo <br>
        Ashton Sanders as Teen Chiron  <br>
        Alex Hibbert as Child Chiron 
      <br>
      <b>Rate  : 4 / 5 Stars</b>
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Close</button>
 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!--MODAL2 END-->
      <br>
       <!--MODAL3-->
      <div id="mod3" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Life of Richard Parker</h4>
      </div>
      <div class="modal-body">
        <p><b> Sinopsis  :</b> Life of Pi is a Canadian fantasy adventure novel by Yann Martel published in 2001. The protagonist is Piscine Molitor "Pi" Patel, an Indian boy from Pondicherry who explores issues of spirituality and practicality from an early age. He survives 227 days after a shipwreck while stranded on a lifeboat in the Pacific Ocean with a Bengal tiger named Richard Park
        <br>
        <b>Cast :</b> <br>
        Piscine Molitor sebagai "Pi" Patel   <br>
        Richard Parker as Richard Parker  <br>
        
      <br>
      <b>Rate  : 4 / 5 Stars</b>
      </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Close</button>
 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!--MODAL3 END-->

<!--footer-->
<div id="container">
    <div id="footer">
        Copyright &copy; 2018
        Designed by Bootstrap and Bisma
    </div>
</div>

<!--ENDfooter-->
   </body>
