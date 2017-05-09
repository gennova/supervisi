<?php
include ('../function/database.php');

$carinama=$_GET['cariguru'];
?>

<!DOCTYPE html>
<html lang="en">
    
<head>

    <style type="text/css">
	.td
	{
 		text-align: center;
  		vertical-align: middle;
	}
    </style>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insert AEP Kebon Dalem</title>

    <!-- Bootstrap Core CSS -->
    <link href="../kd/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../kd/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">Start AEP KD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../kd/index.php">Home</a>
                    </li>
                    <li>
                        <a href="../kd/pilihGuru.php">Insert Aep</a>
                    </li>
                    <li>
                        <a href="../kd/insertGuru.php">Insert Guru</a>
                    </li>
                    <li>
                        <a href="../kd/loginkepsek.php">Login Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('../kd/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h2>SUPERVISI GURU</h2>
                        <hr class="small">
                        <span class="subheading">Have questions? Contact 08190128121</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

   																																																					 <!-- Main Content -->
 <hr>																																																																																																																																																																																									
    <div align = "Center">

<?php

?>
    <form method ="GET" action ="">
   
            <div class="table-responsive">
                <table class="table table-hover" border="1">
                    <thead>
	<t> Data Pencarian Dengan Nama :  <?php echo $carinama;?> </t>
                        <tr>
                            
				<th bgcolor="#BCF5A9">Nip Guru</th>
				<th bgcolor="#BCF5A9">Nama Guru</th>
				<th bgcolor="#BCF5A9">Persiapan Pembelajaran BAB A </th>
				<th bgcolor="#BCF5A9">Kegiatan Pembuka BAB B</th>
				<th bgcolor="#BCF5A9">Kegiatan Inti BAB C</th>
				<th bgcolor="#BCF5A9">Kegiatan Penutup BAB D</th>
				
				<th bgcolor="#BCF5A9">Performa Guru BAB E</th>
				
				<th bgcolor="#BCF5A9">Lain - Lain BAB F</th>
				<th bgcolor="#BCF5A9">Total Nilai</th>
				
				<th bgcolor="#BCF5A9">Semester</th>
				<th bgcolor="#BCF5A9">Tahun Ajaran</th>
				<th bgcolor="#BCF5A9">Tanggal Insert Data</th>

                        </tr>

                    </thead>
                    <tbody>
                        
<?php
include('../function/showGuru.php');
	$res = cariuser ($carinama );

  	$i=0;
	if ($res) 
            {
		while ($row = mysql_fetch_array($res)) 
		{
                    echo "<tr>";
			echo "<td>".$row['nip']."</td>";
			echo "<td>".$row['nama']."</td>";
			echo "<td>".$row['bobot1']."</td>";
			echo "<td>".$row['bobot2']."</td>";
			echo "<td>".$row['bobot3']."</td>";
			echo "<td>".$row['bobot4']."</td>";
			echo "<td>".$row['bobot5']."</td>";
			echo "<td>".$row['bobot6']."</td>";
echo "<td>".$row['sum']." %</td>";
			echo "<td>".$row['semester']."</td>";	
			echo "<td>".$row['tahunajaran']."</td>";
			echo "<td>".$row['tanggalinsert']."</td>";

                       	/*
                        echo"<td>"."<a href='./formUpdateGuru.php?kode=".$row['0']."'>Edit Data </a></td>";
                        echo"<td>"."<a href='./formeditPembayaran.php?kode=".$row['0']."'>Delete </a></td>";
			*/
                    echo "</tr>";
			
		}
	}
		
?>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
      

            
       
    
    </form>


</div>    
    
   
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../kd/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../kd/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../kd/js/clean-blog.min.js"></script>

</body>

</html>
