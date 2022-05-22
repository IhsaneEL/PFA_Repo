
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="script/jquery-1.8.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['annee','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT DISTINCT extract(year from `date-naissance`) as a ,count(*) as b from student group by a order by b ;";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['a']."',".$row['b']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
  </script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['ville de naissance','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT `ville` as c ,count(*) as d from student group by c order by d;";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['c']."',".$row['d']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: ' ',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div2'));
        chart.draw(data, options);
      };
  </script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['serie du bac','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT `serie-bac` as c ,count(*) as d from student group by c order by d";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['c']."',".$row['d']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: ' ',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div3'));
        chart.draw(data, options);
      };
  </script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['mention ','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT `mention` as c ,count(*) as d from student group by c order by d";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['c']."',".$row['d']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: ' ',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div4'));
        chart.draw(data, options);
      };
  </script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['annee du bac ','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT `annee-bac` as c ,count(*) as d from student group by c order by d";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['c']."',".$row['d']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: ' ',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div5'));
        chart.draw(data, options);
      };
  </script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['type d ecole ','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT `prive-public` as c ,count(*) as d from student group by c order by d";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['c']."',".$row['d']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: ' ',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div6'));
        chart.draw(data, options);
      };
  </script>
   <script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
         ['reponse ','nombre d etudiant'],
		 <?php 
		 $conn=new mysqli("127.0.0.1",'root','','test');
      $req="SELECT `reponse` as c ,count(*) as d from student group by c order by d";
      $result=$conn->query($req);
          while($row = $result->fetch_assoc()) {
			  echo "['".$row['c']."',".$row['d']."],";
		  }
		  ?>
        ]);

        var options = {
          title: '',
          width: 500,
          legend: { position: 'none' },
          chart: { title: ' ',
                   subtitle: '' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            y: {
              0: { side: 'top', label: 'nombre d etudiant'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div7'));
        chart.draw(data, options);
      };
  </script>
<style>
hr{
  border: 1px solid aqua;
}
a:link {
  color: teal;
  text-align: left;
  lign-height: 50px
}

/* visited link */
a:visited {
  color: teal;
}

/* mouse over link */
a:hover {
  color: aqua;
}

/* selected link */
a:active {
  color: aqua;
} 
.arrow {
  border: solid grey;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);

}
</style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
          <div class="col-lg-3 text-right">
		  <?php
$m=new mysqli("127.0.0.1",'root','','test');
$req=$m->query("select adminID from admin; ");
while($row=$req->fetch_row()){
echo "Welcome :".$row[0]."";
}
?>
            <a href="index.php" class="small btn btn-primary px-4 py-2 rounded-0"> log-out</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="list-complete.php" class="nav-link text-left">Liste des etudiants</a>
                </li>
                <li>
                  <a href="list.php" class="nav-link text-left">Recherche par ID</a>
                </li>
                <li class="has-children">
                  <li><a href="statistic.php">Statistiques</a></li>
                
                </li>
                
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-7">
              <h2 class="mb-0">Liste des graphes:</h2>
           
            </div>
          </div>
        </div>
      </div> 
   

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="admin.php">admin</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
       
      </div>
    </div><br>
<div align="center" >
<h3 >Afficher les graphes par :</h3>

<i class="arrow right"></i><a href="#1">Annee de naissance</a><br>
<i class="arrow right"></i><a href="#2">Ville de naissance</a><br>
<i class="arrow right"></i><a href="#3">Serie du bac</a><br>
<i class="arrow right"></i><a href="#4">Mention du bac</a><br>
<i class="arrow right"></i><a href="#5">Annee d'obtention du bac</a><br>
<i class="arrow right"></i><a href="#6">Type de lycee</a><br>
<i class="arrow right"></i><a href="#7">Type de reponse</a><br>
<br></div>


	<a name="1"><br> </a>
 <div id="top_x_div" align="center" style="width: 1250px; height: 500px;"></div><br>
<h3 align="center">Nombre d etudiant par annee de naissance </h3>
   <a name="2"><br></a>
   <HR>
 <div id="top_x_div2" align="center" style="width: 1250px; height: 500px;"></div><br> 
 <h3 align="center">Nombre d etudiant par ville de naissance </h3>
    <HR>
	<a name="3"><br> </a>
 <div id="top_x_div3" align="center" style="width: 1250px; height: 500px;"></div><br>
 <h3 align="center">Nombre d etudiant par serie de bac </h3>
    <HR>
<a name="4"><br></a>
 <div id="top_x_div4" align="center" style="width: 1250px; height: 500px;"></div><br>
  <h3 align="center">Nombre d etudiant par mention</h3> 
  <HR>
 <a name="5"><br></a>
 <div id="top_x_div5" align="center" style="width: 1250px; height: 500px;"></div><br>
  <h3 align="center">Nombre d etudiant par annee du bac</h3>
  <HR>
 <a name="6"><br></a>
 <div id="top_x_div6" align="center" style="width: 1250px; height: 500px;"></div><br>
  <h3 align="center">Nombre d etudiant par type de lycee</h3>
  <HR>
 <a name="7"><br></a>
 <div id="top_x_div7" align="center" style="width: 1250px; height: 500px;"></div><br>
  <h3 align="center">Nombre d etudiant par reponse</h3>
  <HR>


    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-mortarboard"></span>
              <h3>Our Philosphy</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-school-material"></span>
              <h3>Academics Principle</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
              <span class="icon flaticon-library"></span>
              <h3>Key of Success</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?
                Dolore, amet reprehenderit.</p>
            </div>
          </div>
        </div>
      </div>
      

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>