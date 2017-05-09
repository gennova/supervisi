<?php
include('koneksi.php');
$idgurunya = $_GET['kode'];
$no1=$_GET['no1'];
$no2a=$_GET['no2a'];
$no2b=$_GET['no2b'];
$no3=$_GET['no3'];
$no4=$_GET['no4'];
$no5a=$_GET['no5a'];
$no5b=$_GET['no5b'];
$no6=$_GET['no6'];
$no7=$_GET['no7'];
$no8a=$_GET['no8a'];
$no8b=$_GET['no8b'];
$no9a=$_GET['no9a'];
$no9b=$_GET['no9b'];
$no10a=$_GET['no10a'];
$no10b=$_GET['no10b'];
$no10c=$_GET['no10c'];
$no11=$_GET['no11'];
$no12=$_GET['no12'];
$no13=$_GET['no13'];
$no14a=$_GET['no14a'];
$no14b=$_GET['no14b'];
$no14c=$_GET['no14c'];
$no14d=$_GET['no14d'];
$no15a=$_GET['no15a'];
$no15b=$_GET['no15b'];
$no16=$_GET['no16'];
$no17=$_GET['no17'];
$no18=$_GET['no18'];
$no19=$_GET['no19'];
$duapuluhX=$_GET['no20'];
$supervisor=$_GET['supervisornya'];
$komennya=$_GET['komennya'];

$bab1=$_GET['bab1'];
$bab2=$_GET['bab2'];
$bab3=$_GET['bab3'];
$bab4=$_GET['bab4'];
$bab5=$_GET['bab5'];
$bab6=$_GET['bab6'];
$bab1temp;
$bab2temp;
$bab3temp;
$bab4temp;
$bab5temp;
$bab6temp;
?>
<title>Rekap Data Supervisi</title>
<!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="/../supervisi/jquery.dataTables.css">
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="/../supervisi/jquery-1.11.1.min.js"></script>
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="/../supervisi/jquery.dataTables.js"></script>
  <script src="/../supervisi/jquery-1.12.0.min.js"></script>
  <script src="/../supervisi/ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="/../supervisi/path/to/jquery.ntm.js"></script>
  <link rel="stylesheet" href="/../supervisi/sexybuttons.css" type="text/css" />
  <style>
	
  body {
    background: url('gambar/background.png');
    font-family: "open sans";
    font-size: 11pt;
  }
  #kiri {
    position: fixed;
    top: 0px;
    left: 40px;
    width: 200px;
    border-right: 1px solid #aaa;
  }
  #kanan {
    margin: 0 40px 40px 280px;
  }
  #menu {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  #menu li {
    padding-bottom: 10px;
    border-bottom: 1px solid #fff499;
  }
  #kiri p {
    font-size: 11px;
  }
  h1 {
    font-family: Verdana;
    color: #930808;
    font-size: 24pt;
  }
  #header {
    text-align: center;
  }
  #header img {
    width: 100%;
	height:200px;
  }
  .gallery {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  .gallery li {
    padding-bottom: 10px;
    display: inline-block;
  }
  .gallery img {
    width: 100px;
    margin-right:35px;
    margin-bottom:15px;
    margin-top:5px;   
    border: 5px solid #fcfcfc;
    border-radius: 4px;
  }
  .gallery img:hover{
    border: 5px solid #42C5BB;
    cursor:pointer;
  }
  #footer {
    border-top: 1px solid #dccbcb;
    padding-top: 10px;
    margin-top: 25px;
    text-align: center;
  }
  
  $("#browser").treeview({
 animated:"normal",
 persist: "cookie"
});
var defaults = {
  autoParentDetection: true,
  autoActiveDetection: true,
  itemsUniqueClasses: true,
  parentClass: 'parent',
  activeClass: 'active',
  selectedClass: 'selected',
  expandClass: 'opened',
  collapseClass: 'closed',
  spoilerButtonClickMinX: 4,
  spoilerButtonClickMaxX: 20,
  spoilerButtonClickMinY: 8,
  spoilerButtonClickMaxY: 24,
  slideEffect: true
};
.tree-menu ul { list-style: none; }
.tree-menu > ul { padding: 0; }
.tree-menu a {
  display: block;
  vertical-align: middle;
  text-decoration: none;
  padding: 6px;
  background-color: #efefef;
  border-radius: 4px;
  margin-bottom: 1px;
  color: #002888;
  -moz-transition: background-color 0.25s linear;
  -webkit-transition: background-color 0.25s linear;
  -o-transition: background-color 0.25s linear;
  transition: background-color 0.25s linear;
  -moz-transition-delay: 0.15s;
  -webkit-transition-delay: 0.15s;
  -o-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

.tree-menu a:hover {
  color: #f53d3e;
  -moz-transition: background-color 0.1s linear;
  -webkit-transition: background-color 0.1s linear;
  -o-transition: background-color 0.1s linear;
  transition: background-color 0.1s linear;
}

.tree-menu .active > a:hover,
.tree-menu .selected > a,
.tree-menu a:hover { background-color: #c6cdde; }

.tree-menu .selected > a {
  color: #f53d3e;
  font-weight: bold;
  text-decoration: none;
}

.tree-menu .active > a { background-color: #e1e3e9; }

.tree-menu .closed > a,
.tree-menu .opened > a {
  padding-left: 24px;
  background-position: 4px 8px;
  background-repeat: no-repeat;
}

.tree-menu .closed > a { background-image: url(../img/icon-expand.gif); }

.tree-menu .opened > a { background-image: url(../img/icon-collapse.gif); }
$(document).ready(function() {
  $('.demo').ntm();
});


</style>
<table>
<tr><td>
<a href="#" onclick="printIt(document.getElementById('printme').innerHTML); return false"><div><button class="sexybutton sexysimple sexylarge" id="button2">Print</button></div></td><td></a><a href='#'><div><button class="sexybutton sexysimple sexylarge" id="button" onclick="goBack()">Kembali</button></div></a></td>
</tr></table>
<div id='printme'>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="/gambar/Capture.jpg" />
<h3> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDetail Penilaian </h3>
<table class="table table-hover" border="0">
      <?php 
	  $result2 = mysqli_query($con,"SELECT * FROM guru JOIN unit ON guru.unit=unit.idunit WHERE guru.id=$idgurunya");
                    while($row = mysqli_fetch_array($result2)) {
                ?>
<tr><td>Nama</td><td>:</td><td><?php echo $row['namaguru'] ?></td></tr>
<tr><td>Unit Kerja</td><td>:</td><td><?php echo $row['namaunit'] ?></td></tr>
<tr><td>Nama Mapel</td></tr>
<tr><td>Kelas</td></tr>
<?php
					}
if ($bab1 <= 12 and $bab1 >= 7)
			{
				$bab1temp="Baik ";
			}
			else if ($bab1 >= 4 && $bab1 < 7)
			{
				$bab1temp="Sedang";
			}
			else if ($bab1 < 4)
			{
				$bab1temp="Kurang";
			}			

			if ($bab2 <= 8 and $bab2 >= 6)
			{
				$bab2temp="Baik ";
			}
			else if ($bab2 >= 2 && $bab2 < 6)
			{
				$bab2temp="Sedang";
			}
			else if ($bab2 < 2)
			{
				$bab2temp="Kurang";
			}		

			if ($bab3 <= 60 && $bab3 >= 40)
			{
				$bab3temp="Baik ";
			}
			else if ($bab3 >= 20 && $bab3 < 40)
			{
				$bab3temp="Sedang";
			}
			else if ($bab3 < 20)
			{
				$bab3temp="Kurang";
			}
			if ($bab4 <= 8 && $bab4 >= 5)
			{
				$bab4temp="Baik ";
			}
			else if ($bab4 >= 2 && $bab4 < 5)
			{
				$bab4temp="Sedang";
			}
			else if ($bab4 < 2)
			{
				$bab4temp="Kurang";
			}			
			if ($bab5 <= 10 and $bab5 >= 6)
			{
				$bab5temp="Baik ";
			}
			else if ($bab5 >= 2 && $bab5 < 6)
			{
				$bab5temp="Sedang";
			}
			else if ($bab5 < 2)
			{
				$bab5temp="Kurang";
			}			
			
			if ($bab6 <= 4 and $bab6 >= 3)
			{
				$bab6temp="Baik ";
			}
			else if ($bab6 >= 6 && $bab6 < 3)
			{
				$bab6temp="Sedang";
			}
			else if ($bab6 <=4)
			{
				$bab6temp="Kurang";
			}		
			
			
			if ($bab6 <= 4 and $bab6 >= 3)
			{
				$bab6temp="Baik ";
			}
			else if ($bab6 > 2 && $bab6 <= 3)
			{
				$bab6temp="Sedang";
			}
			else if ($bab6 < 2)
			{
				$bab6temp="Kurang";
			}
					?>
<tr><td>Tanggal Supervisi</td><td>:</td><td><?php echo date("Y-m-d") ?></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
</table>
	<table class="table table-hover" border="3"  bgcolor="#99999">
                    <thead>
                        <tr>                           
				<th bgcolor="#BCF5A9" colspan=2 >Persiapan <br />Pembelajaran <br /> BAB A </th>
				<th bgcolor="#BCF5A9"colspan=2>Kegiatan <br /> Pembuka <br /> BAB B</th>
				<th bgcolor="#BCF5A9"colspan=2>Kegiatan Inti <br /> BAB C</th>
				<th bgcolor="#BCF5A9"colspan=2>Kegiatan Penutup <br /> BAB D</th>				
				<th bgcolor="#BCF5A9" colspan=2>Performa Guru <br /> BAB E</th>				
				<th bgcolor="#BCF5A9" colspan=2>Lain - Lain <br /> BAB F</th>
				<th bgcolor="#BCF5A9" >Total Nilai  &nbsp&nbsp&nbsp</th>					
                </tr>
				<tr>
				<td align='center'><?php echo $no1+$no2a+$no2b ?></td><td><?php echo $bab1temp ?></td>
				<td align='center'><?php echo $no3+$no4 ?></td><td><?php echo $bab2temp ?></td>
				<td align='center'><?php echo $no5a+$no5b+$no6+$no7+$no8a+$no8b
			+$no9a+$no9b+$no10a+$no10b+$no10c+$no11+$no12+$no13+$no14a+$no14b+$no14c+$no14d ?></td><td><?php echo $bab3temp ?></td>
				<td align='center'><?php echo (($no15a+$no15b)/2)+$no16 ?></td><td><?php echo $bab4temp ?></td>
				<td align='center'><?php echo $no17+$no18+$no19 ?></td><td><?php echo $bab5temp ?></td>
				<td align='center'><?php echo $duapuluhX ?></td><td><?php echo $bab6temp ?></td>
				<td align='center'><?php echo $no1+$no2a+$no2b + $no3+$no4 + $no5a+$no5b+$no6+$no7+$no8a+$no8b
			+$no9a+$no9b+$no10a+$no10b+$no10c+$no11+$no12+$no13+$no14a+$no14b+$no14c+$no14d + (($no15a+$no15b)/2)+$no16  +$no17+$no18+$no19+$duapuluhX?></td>
				</tr>
                    </thead>
					</table>
<br/>
<table class="table table-hover" border="1">
	<thead>		
		<tr>
		    <th>No</th>
		    <th>Persiapan Pembelajaran</th>
		    <th>Sub</th>
		    <th>Score</th>		 
		</tr>
	</thead>
	<tbody>		
	<tr>
		<td colspan=4><center> BAB A </center></td>
	</tr>

		<tr>
			<td>1</td>
			<td>	
				Kelengkapan Administrasi 
				(Prota , Prosem , Silabus ,rpp)
			</td>
			<th></th>
			<th><?php echo $no1;?></th>
		<tr>

		<tr>
			<td rowspan=2>2</td>
			<td rowspan=2>Kelengkapan dan kejelasan unsur-unsur RPP
			</td>
			<td >2a</td>
			<th><?php echo $no2a;?></th>
		
		<tr>
			<td>2b</td>
			<th><?php echo $no2b;?></th>
		<tr>

	<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB A </center></b></td>
		<th><b> <?php echo $no1+$no2a+$no2b ?></b></th>
	</tr>



	<tr>
		<td colspan=3><center> BAB B </center></td>
		
	</tr>


	<tr>
			<td>3</td>
			<td>	
				Kesiapan guru 
				(tepat waktu, penampilan awal,
				perlengkapan, presensi siswa)
			</td>
			<th></th>
			<th><?php echo $no3;?></th>
	<tr>

	<tr>
			<td>4</td>
			<td>						
				Guru melakukan Apersepsi,
				Hook dan menyampaikan tujuan pembelajaran
			</td>
			<th></th>
			<th><?php echo $no4;?></th>
	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB B </center></b></td>
		<th><b> <?php echo $no3+$no4 ?></b></th>
	</tr>

	<tr>
		<td colspan=4><center> BAB C </center></td>
	</tr>


	<tr>
			<td rowspan=2>5</td>
			<td rowspan=2>						
				Penguasaan guru terhadap materi
			</td>
			<td>5a</td>
			<th><?php echo $no5a;?></th>

		<tr>
		
			<td>5b</td>
			<th><?php echo $no5b;?></th>
		<tr>

	<tr>


	<tr>
			<td>6</td>
			<td>						
				Penggunaan bahasa yang komunikatif
			</td>
			<th></th>
			<th><?php echo $no6;?></th>
	<tr>

	<tr>
			<td>7</td>
			<td>						
				Kemampuan menggunakan metode pembelajaran yang tepat
			</td>
			<th></th>
			<th><?php echo $no7;?></th>
	<tr>

	
	<tr>
			<td rowspan=2>8</td>
			<td rowspan=2>						
				Ketepatan penggunaan media, alat, dan sumber pembelajaran
			</td>
			<td>8a</td>
			<th><?php echo $no8a;?></th>

		<tr>
		
			<td>8b</td>
			<th><?php echo $no8b;?></th>
		<tr>

	<tr>


	<tr>
			<td rowspan=2>9</td>
			<td rowspan=2>						
				Kemampuan guru memberikan motivasi/penguatan kepada siswa
			</td>
			<td>9a</td>
			<th><?php echo $no9a;?></th>

		<tr>
		
			<td>9b</td>
			<th><?php echo $no9b;?></th>
		<tr>

	<tr>


	
	<tr>
			<td rowspan=4>10</td>
			<td rowspan=4>						
				Kemampuan guru melibatkan siswa dalam menemukan, membangun/mengkonstruksi konsep
			</td>
			<td>10a</td>
			<th><?php echo $no10a;?></th>

		<tr>
		
			<td>10b</td>
			<th><?php echo $no10b;?></th>
		<tr>
		<tr>
		
			<td>10c</td>
			<th><?php echo $no10c;?></th>
		<tr>

	<tr>


<!-- 11 -->
	<tr>
			<td>11</td>
			<td>						
					
				Kemampuan guru dalam menyampaikan materi
			</td>
			<th></th>
			<th><?php echo $no11;?></th>
	<tr>

	<tr>
			<td>12</td>
			<td>						
				Guru memberikan penilaian kinerja kepada siswa 
				selama kegiatan PBM (bukan test tertulis)
			</td>
			<th></th>
			<th><?php echo $no12;?></th>
	<tr>

	
	<tr>
			<td>13</td>
			<td>						
					
				Kemampuan guru menerapkanan COIS dalam PBM
			</td>
			<th></th>
			<th><?php echo $no13;?></th>
	<tr>



	
	<tr>
			<td rowspan=6>14</td>
			<td rowspan=6>						
				Kemampuan guru menerapkanan COIS dalam PBM
			</td>
			<td>14a</td>
			<th><?php echo $no14a;?></th>

		<tr>
		
			<td>14b</td>
			<th><?php echo $no14b;?></th>
		<tr>
		<tr>
		
			<td>14c</td>
			<th><?php echo $no14c;?></th>
		<tr>
	
		<tr>
		
			<td>14d</td>
			<th><?php echo $no14d;?></th>
		<tr>

	<tr>
	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB C </center></b></td>
		<th><b> <?php echo $no5a+$no5b+$no6+$no7+$no8a+$no8b
			+$no9a+$no9b+$no10a+$no10b+$no10c+$no11+$no12+$no13+$no14a+$no14b+$no14c+$no14d ?></b></th>
	</tr>
	


	<tr>
		<td colspan=4><center> BAB D </center></td>
	</tr>


	
	<tr>
			<td rowspan=2>15</td>
			<td rowspan=2>						
				Kemampuan guru memberikan motivasi/penguatan kepada siswa
			</td>
			<td>15a</td>
			<th><?php echo $no15a;?></th>

		<tr>
		
			<td>15b</td>
			<th><?php echo $no15b;?></th>
		<tr>

	<tr>

	
	<tr>
			<td>16</td>
			<td>						
					
					
				Kemampuan guru mengadakan evaluasi
			</td>
			<th></th>
			<th><?php echo $no16;?></th>
	<tr>


	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB D </center></b></td>
		<th><b> <?php echo $no15a+$no15b+$no16?></b></t>
	</tr>

	
	<tr>
		<td colspan=4><center> BAB E </center></td>
	</tr>

	<tr>
			<td>17</td>
			<td>						
					
			Ekspresi guru
			</td>
			<th></th>
			<th><?php echo $no17;?></th>
	<tr>

	<tr>
			<td>18</td>
			<td>						
					
			Kerapian Guru
			</td>
			<th></th>
			<th><?php echo $no18;?></th>
	<tr>		

	<tr>
			<td>19</td>
			<td>			
			Kematangan emosi guru (kehangatan, kesabaran, 
			keramahan, dan kepedulian)
			</td>
			<th></th>
			<th><?php echo $no19;?></th>
	<tr>	
	<tr>

		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB E </center></b></td>
		<th><b> <?php echo $no17+$no18+$no19?></b></th>
	</tr>

	<tr>
		<td colspan=4><center> BAB F </center></td>
	</tr>
		
	<tr>
			<td>20</td>
			<td>						
			Kesesuaian PBM dengan RPP
			</td>
			<th></th>
			<th><?php echo $duapuluhX;?></th>
	<tr>
		<tr>
		<tr>
		<td colspan=3><b><center> TOTAL NILAI BAB F </center></b></td>
		<th><b> <?php echo $duapuluhX?></b></th>
	</tr>
	
</tbody>	
</table>
	


Catatan : <?php echo $komennya ; ?> 
<br />
<br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php echo '................., '.date("Y-m-d") ; ?>	
<br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Supervisor		
<br />
<br />
<br />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php echo $supervisor ; ?>	
</div>	
	<script type="text/javascript">
	
  var win=null;
  function printIt(printThis)
  {
    win = window.open();
    self.focus();
    win.document.open();
    win.document.write('<'+'html'+'><'+'head'+'><'+'style'+'>');
    win.document.write('body, td { font-family: Verdana; font-size: 10pt;}');
    win.document.write('<'+'/'+'style'+'><'+'/'+'head'+'><'+'body'+'>');
    win.document.write(printThis);
    win.document.write('<'+'/'+'body'+'><'+'/'+'html'+'>');
    win.document.close();
    win.print();
    win.close();
  }
</script>
  <script>
$(document).ready(function(){
var div = document.getElementById('myDiv');
div.style.visibility = "hidden";
div.style.display = "none";
    $("#hide").click(function(){
        $("div").hide();
    });
    $("#show").click(function(){
        $("div").show();
    });
});
</script>
  <script type="text/javascript">
            $(document).ready( function () {
                $('#table_id').DataTable();
            });
        </script>
<script>
  $document.ready(function){
  $("#button2").click(function(){
        $("hide").show();
    });  
  }
  </script>
<script>
function goBack() {
    window.history.back();
}
</script>
  </script>

