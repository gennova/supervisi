<?php
/*
session_start();
	if (isset($_SESSION['username'])==false) {          
        header('Location: logout.php');
    }	
*/
 include('koneksi.php');
 session_start();
 $idunits   = $_SESSION["idunit"];
 $idunit   = $_GET['idb'];
 ?>
<html>
<head>
  <title>Supervisi Guru YPII Semarang</title>
  <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="jquery.dataTables.css">
        <!-- jQuery -->
        <script type="text/javascript" charset="utf8" src="jquery-1.11.1.min.js"></script>
        <!-- DataTables -->
        <script type="text/javascript" charset="utf8" src="jquery.dataTables.js"></script>
  <script src="jquery-1.12.0.min.js"></script>
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="path/to/jquery.ntm.js"></script>
  <link rel="stylesheet" href="sexybuttons.css" type="text/css" />
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

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
  <div id="kiri" >
   <h3>Menu Utama</h3>
	<div class="tree-menu demo" id="tree-menu">
	  <ul>
	    <li><a href="data.php?idunit=<?php echo $idunits; ?>">HOME</a></li>
		<li><a href="nilai.php">NILAI SUPERVISI</a></li>	
		<li><a href="#">SINKRONISASI</a></li>	
		
	  </ul>
	  <a href="logout.php"><div><button class="sexybutton sexysimple sexylarge" id="button2">Logout / Exit Program</button></div></a>
	</div>	
    <p>
      Jl. Wotgandul Dalam  <br>
      No 252 Semarang Kota<br>
      Phone: 085643221232<br>
      Email: atanasiustendy@hotmail.com
    </p> 
  </div>
  <div id="kanan">
    <div id="header">
      <img src="/gambar/header.jpg" />
	  <h1>Lembar Supervisi Guru </h1>  
	  
    </div>
    <div id="content">
	<div id="printme">
	
	<?php 
	/*
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con,"SELECT * FROM guru JOIN unit ON guru.unit=unit.idunit");
        ?>	  
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>NOMOR</th>
                    <th>NAMA GURU</th>
					<th>UNIT</th>
					<th>ALAMAT UNIT</th>
					<th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['namaguru'] . "</td>";
						echo "<td>" . $row['namaunit'] . "</td>";
						echo "<td>" . $row['alamatunit'] . "</td>";
						echo "<td> <a href='ubarang.html?idb=". $row['id'] ."'><div><button class='sexybutton sexysimple sexylarge' id='button2'>Supervisi</button></div></a> </td>";
                        echo "</tr>";
                    }
					*/
                ?>
            </tbody>
        </table>
		</div> 
		
		
		 <div class="container" left=" 10px" ; >
                <p align='justify'><h2><center>INSTRUKSI:</center></h2>
				<ol type="1">
				<li>Bpk/Ibu memiliki tugas untuk memberikan supervisi terhadap  guru sesuai dengan kewenangan yang diberikan oleh Yayasan Penyelenggaraan Ilahi. </li>
<li>Evaluasi supervisi guru ini sangat penting untuk dijadikan dasar pengembangan para guru. Oleh sebab itu, Bpk/Ibu dimohon untuk mengisi secara obyektif terhadap guru-guru yang disupervisi.</li>
<li>Tuliskan identitas guru yang Bapak/Ibu Supervisi di lembar identitas yang sudah disediakan. Berikan penilaian pada para guru sesuai dengan Kegiatan Belajar Mengajar yang berlangsung. </li>
<li>Semua pernyataan harus diisi.</li></p>
    </div>
    
    <hr>
    <div align = "Center">

<?php
$d=date("Y-m-d H:i:s");
?>
    <form method ="GET" action ="./form/insertData6.php" name="form" id="form" class="confirm">
    <table border =1 >
        <tr>
            <th width="3%">NO</th>
            <th width="30%">UNSUR YANG DINILAI</th>
            <th width="65%">RUBRIK</th>
            <th colspan="2"> CHECK POINT</th>
           
        </tr>        
	    <input type="hidden" name="waktusekarang" value="<?php echo $d; ?>"></input>
		<input type="hidden" name="idguru" value="<?php echo $_GET['idb']; ?>"></input>

        <tr>
            <th>A</th>
            <th>Persiapan Pembelajaran</th>
            <u><th>Dari pernyataan di bawah ini mana yang terlihat / tampak dalam persiapan pembelajaran?</th></u>
            <td> </td>
         
        </tr>
        
        <tr>
            <td rowspan="4" > 1 </td>
            <th  rowspan="4"><h4> Kelengkapan Administrasi <br \> (Prota , Prosem , Silabus ,rpp)</h4> </th>
            <td>Prosem/Prota lengkap sesuai dengan format YPII(SK-KD-Indikator-waktu). </td>
            <td class="td">  <input type="checkbox" name="satu[]" value="1" id="satu"> </td>
         
        </tr>
        
        
        <tr>
            <td>
                Silabus lengkap sesuai SK-KD-Indikator <br \ >

                Didalamnya terdapat komponen : <br \>
                1. pengunaan sumber (mis. buku, internet, jurnal, dll) yang beragam. (min. 2 buku teks dan 1 yang lainnya).<br \>
                2. penggunaan Media (mis. alat peraga, presentasi, film,video,dll)<br \>
                3. bentuk penilaiannya (mis. formative atau produk atau kuis).<br \> 
            </td>
            <td class="td">  <input type="checkbox" name="satu[]" value="2" id="satu" checked> </td>
        </tr>
        
        <tr>
            <td> 
                RPP menunjang Silabus (jumlah RPP - alurnya 
                mendukung pencapaian Indikator yang tertuang pada Silabus
            </td>
            <td class="td"> <input type="checkbox" name="satu[]" value="3" id="satu" checked> </td>
        </tr>
        
        <tr>
            <td>
                Penyampaian  administrasi pengajaran (prota,prosem, silabus, 
                rpp)) ke pimpinan - dengan tepat waktu.
            </td>
            <td class="td"><input type="checkbox" name="satu[]" value="4" id="satu"> </td>
        </tr>
       
        <td></td>
        
        
        
        <!-- ini ke 2 --> 
        
        <tr>
            <td rowspan="10">2</td>
            <th  rowspan="10"><h4>Kelengkapan dan kejelasan unsur-unsur RPP</h4> </th>
            <th colspan="2">2A Pilihlah salah satu yang paling sesuai dengan RPP Guru !</th>       
        </tr>
        
        
        <tr>
            <td>RPP tidak mencakup semua unsur dari hal di bawah ini: <br \>
                a. dibuat sesuai format YPII <br \>
                b. menunjukkan keterkaitan kegiatan dengan Indikator yang dituju dan 
                sesuai dengan yang terdapat pada silabus (Kurrikulum YPII) <br \>
                c.  mengandung unsur Pembukaan, Kegiatan Inti dan Penutup yang saling berkaitan
            </td>
            <td class="td">  <input type="radio" name="duasub1" value="1" id="duasub1" checked> </td>
        </tr>
        
        
        <tr>
            <td>
                RPP mencakup 1  unsur dari hal di bawah ini <br \>
                a. dibuat sesuai format YPII <br \>
                b. menunjukkan keterkaitan kegiatan dengan Indikator yang dituju dan sesuai dengan 
                yang terdapat pada silabus (Kurrikulum YPII) <br \>
                c.  mengandung unsup Pembukaan, Kegiatan Inti dan Penutup yang saling berkaitan
            </td>
            <td class="td">  <input type="radio" name="duasub1" value="2" id="duasub1" > </td>
        </tr>
        
        
        <tr>
            <td>
                RPP mencakup 2  unsur dari hal di bawah ini <br \>
                a. dibuat sesuai format YPII<br \>
                b. menunjukkan keterkaitan kegiatan dengan Indikator yang dituju dan sesuai dengan yang terdapat 
                pada silabus (Kurrikulum YPII)<br \>
                c.  mengandung unsur Pembukaan, Kegiatan Inti dan Penutup yang saling berkaitan
            </td>
            <td class="td">  <input type="radio" name="duasub1" value="3" id="duasub1"> </td>
        </tr>
        
        <tr>
            <td> 
            RPP mencakup semua unsur di bawah ini <br \>
            a. dibuat sesuai format YPII <br \>
            b. menunjukkan keterkaitan kegiatan dengan Indikator yang dituju dan sesuai dengan yang terdapat pada silabus (Kurikulum YPII)<br \>
            c.  mengandung unsur Pembukaan, Kegiatan Inti dan Penutup yang saling berkaitan
            </td>
            <td class="td">  <input type="radio" name="duasub1" value="4" id="duasub1"> </td>
        </tr>
        <th colspan="4">2B Pilihlah salah satu yang paling sesuai dengan RPP Guru !</th>
     
        <tr>
            <td>
                RPP belum menunjukan suatu  pembelajaran yang konstruk dan juga belum dengan aktivitas yang beragam
            </td>
            <td class="td">  <input type="radio" name="duasub2" value="1" id="duasub2"> </td>
        </tr>
        
        
        <tr>
            <td>
                RPP sudah dengan aktivitas yang beragam tetapi belum menunjukan suatu pembelajaran yang 
                konstruk
            </td>
            <td class="td"><input type="radio" name="duasub2" value="2" id="duasub2" checked> </td>
        </tr>
        
        
        <tr>
            <td>
                RPP sudah menunjukan suatu  pembelajaran yang konstruk tetapi belum dengan aktivitas yang beragam
            </td>
            <td class="td">  <input type="radio" name="duasub2" value="3" id ="duasub2"> </td>
         </tr>
        
        
        <tr>
            <td>
                RPP menunjukan suatu  pembelajaran yang konstruk dengan aktivitas yang beragam 
            </td>
            <td class="td">  <input type="radio" name="duasub2" value="4" id="duasub2"> </td>
        </tr>
        
	
	 
        <tr>
            <th>B</th>
            <u><th>Kegiatan Pembuka</th></u>
            <u><th></th></u>
            <td> </td>
        </tr>
        
        <tr>
            <td rowspan="4"> 3 </td>
            <th  rowspan="4">
                <h4>
                    Kesiapan guru <br \>(tepat waktu, penampilan awal,<br \> perlengkapan, presensi siswa)
                </h4>
            </th>
            <td colspan="2"><b> Dari pernyataan dibawah ini mana yang telihat dalam PBM? </b></td>
           
        </tr>

        
        <tr>
            <td>
                Guru hadir tepat waktu di dalam kelas 
            </td>
         <td class="td">  <input type="checkbox" name="tiga[]" value="1" checked> </td>
        </tr>

        
        <tr>
            <td>
                Guru sudah lengkap membawa semua peralatan yang dibutuhkan untuk PBM
            </td>
            <td class="td"><input type="checkbox" name="tiga[]" value="2" checked> </td>
        </tr>
        
        
        
          
        <tr>
            <td>
                Guru mengetahui dan mencatat siswa yang tidak hadir 
                pada saat guru tersebut mengajar (tidak perlu diabsen satu persatu)   
            </td>
            <td class="td"><input type="checkbox" name="tiga[]" value="3"> </td>
        </tr>
      
        <td></td>
            
        <!-- ini ke 4 --> 
        
        
        
        
        
        
        
        
        
        <tr>
            <td rowspan="4">4</td>
            <th  rowspan="4">
                <h4>Guru melakukan Apersepsi,<br \> Hook dan menyampaikan tujuan pembelajaran</h4> 
            </th>
            <th colspan="2"> 
                Dari Pernyataan dibawah ini mana yang terlihat dalam PBM? 
            </th>       
        </tr>
        
        
        <tr>
            <td>
                Melakukan pembukaan dengan melakukan "hook" aktivitas yang berhubungan dengan kehidupan sehari-hari  
            </td>
            <td class="td">  <input type="checkbox" name="empat[]" value="1" checked> </td>
        </tr>
        
        <tr>
            <td>
               Mengingatkan siswa terhadap pengetahuan / pengalaman yang lalu  yang bisa dihubungkan dengan topik yang akan dibahas
                 
            </td>
            <td class="td">  <input type="checkbox" name="empat[]" value="2" checked> </td>
          </tr>
        
        <tr>
            <td>
                 Secara jelas menyampaikan tujuan pembelajaran
                
            </td>
            <td class="td">  <input type="checkbox" name="empat[]" value="3"> </td>
           
        </tr>
       

	
  <tr>
                    <th>C</th>
                    <th>Kegiatan Inti</th>
                    <th>
                        
                    </th>
                    <td> </td>

                </tr>
                
                <tr>
                    <td rowspan="10"> 5 </td>
                    <th  rowspan="10"><h4>Penguasaan guru terhadap materi</h4></th>
                <th colspan="2">5A  Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                </tr>


                <tr>
                    <td> 
                        Guru tidak menguasai dengan baik materi/topik bidang studi yang diampuh
                    </td>
                    <td class="td">  <input type="radio" name="limaI" value="1" checked> </td>
                </tr>


                <tr>
                    <td>
                        Guru kurang menguasai dengan baik materi/topik bidang studi yang diampuh
                    </td>
                    <td class="td">  <input type="radio" name="limaI" value="2"> </td>

                </tr>

                <tr>
                    <td>
                        Guru cukup menguasai dengan baik materi/topik bidang studi yang diampuh
                    </td>
                    <td class="td">  <input type="radio" name="limaI" value="3"> </td>
                </tr>

                <tr>
                    <td>Guru menguasai dengan baik materi/topik bidang studi yang diampuh
                        
                    </td>
                    <td class="td">  <input type="radio" name="limaI" value="4"> </td>
                </tr>

                <!-- 5b -->
                
                <tr>
                    <th colspan="2"> 5B Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM ! </th>
                </tr>

                <tr>
                    <td>
                        Kedalaman materi seluruhnya tidak sesuai dengan indikator pencapaian kompetensinya
                    </td>
                    <td class="td">  <input type="radio" name="limaII" value="1" checked> </td>
                </tr>


                <tr>
                    <td>
                        Kedalaman materi sebagian kecil sesuai dengan indikator pencapaian kompetensi
                    </td>
                    <td class="td">  <input type="radio" name="limaII" value="2"> </td>
                </tr>


                <tr>
                    <td>Kedalaman materi sebagian besar  sesuai dengan indikator pencapaian kompetensi
                        
                    </td>
                    <td class="td">  <input type="radio" name="limaII" value="3"> </td>
                </tr>


                <tr>
                    <td>
                        Kedalaman materi seluruhnya sesuai dengan indikator pencapaian kompetensi
                    </td>
                    <td class="td">  <input type="radio" name="limaII" value="4"> </td>
                </tr>






                <!-- ini ke 6 --> 

                <tr>
                    <td rowspan="4">6</td>
                    <th  rowspan="4"><h4>Penggunaan bahasa yang komunikatif</h4> </th>
                    <th colspan="2"> 
                        Dari Pernyataan dibawah ini mana yang terlihat dalam PBM?
                    </th>       
                </tr>

                <tr>
                    <td>
                        Guru secara konsisten dan"persisten" menciptakan komunikasi 2 arah   
                    </td>
                    <td class="td">  <input type="checkbox" name="enam[]" value="1"> </td>
                </tr>

                <tr>
                    <td>
                        Mayoritas siswa terlihat sangat memahami dan menjalankan apa yang diharapkan (tidak ada mispersepsi)
                    </td>
                    <td class="td">  <input type="checkbox" name="enam[]" value="2" checked> </td>
                </tr>

                <tr>
                    <td>
                        Guru mengeluarkan kata-kata sesuai dengan pedagogi
                    </td>
                    <td class="td">  <input type="checkbox" name="enam[]" value="3" checked> </td>
                </tr>



                <!-- Ini yang ke 7 --> 



                <tr>
                    <td rowspan="5">7</td>
                    <th  rowspan="5">
                        <h4>Kemampuan menggunakan metode <br \>pembelajaran yang tepat  </h4> 
                    </th>
                    <th colspan="2"> 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !
                    </th>       
                </tr>



                <tr>
                    <td>
                        Guru menggunakan hanya 1 metode yang sesuai topik
                    </td>
                    <td class="td">  <input type="radio" name="tujuh" value="1" checked> </td>
                </tr>

                
                <tr>
                    <td>
                        Guru menggunakan 2 metode dalam mengajar menggunakan  3 metode, misalnya pertanyaan, diskusi, ceramah,<br \>
                        role play, modelling, eksperimen)  yang sesuai topik    
                    </td>
                    <td class ="td">  <input type="radio" name="tujuh" value="2"> </td>
                </tr>


                <tr>
                    <td>
                        Guru menggunakan beragam metode dalam mengajar menggunakani  3 metode, misalnya pertanyaan,
                        <br \>diskusi, ceramah, role play, modelling, eksperimen)  yang sesuai topik
                    </td>
                    <td class="td">  <input type="radio" name="tujuh" value="3"> </td>
                </tr


                <tr>
                    <td>
                        Guru menggunakan beragam metode dalam mengajar lebih dari  3 metode, <br \> misalnya pertanyaan, diskusi, ceramah, role play, modelling, eksperimen)  yang sesuai topik
                    </td>
                    <td class="td">  <input type="radio" name="tujuh" value="4"> </td>
                </tr>


                <!-- ini yang ke 8 --> 


                <tr>
                    <td rowspan="11">8</td>
                    <th  rowspan="11">
                        <h4>
                            Ketepatan penggunaan media, <br \> alat, dan sumber pembelajaran<br \>
                        </h4> 
                     </th>
                    <th colspan="2"> 
                       
                    </th>       
                </tr>


                <tr>
                    <th colspan="2">8A 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                    </td>
                </tr>

                <tr>
                    <td>
                        Penggunaan Media, alat dan sumber pembelajaran  beserta referensinya tidak sesuai topik
                    </td>
                    <td class="td">  <input type="radio" name="delapanI" value="1" checked> </td>
                </tr>

                <tr>
                    <td>
                        Penggunaan sebagian kecil Media, alat dan sumber pembelajaran  beserta referensinya sesuai topik 
                    </td>
                    <td class="td">  <input type="radio" name="delapanI" value="2"> </td>
                </tr>


                <tr>
                    <td>
                        Penggunaan sebagian besar Media, alat dan sumber pembelajaran  beserta referensinya sesuai topik
                        
                    </td>
                    <td class="td">  <input type="radio" name="delapanI" value="3"> </td>
                </tr>

                <tr>
                    <td>
                        Penggunaan seluruh  Media, alat dan sumber pembelajaran  beserta referensinya sesuai topik
                    </td>
                    <td class="td">  <input type="radio" name="delapanI" value="4"> </td>
                </tr>

                
                <!-- 8b -->

                <tr>
                    <th colspan="2">8B 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                </tr>



                <tr>
                    <td>
                        Sumber pembelajaran tidak  up to date dan kontekstual  
                    </td>
                    <td class="td">  <input type="radio" name="delapanII" value="1" checked> </td>
                </tr>


                <tr>
                    <td>
                        Sebagian kecil sumber pembelajaran up to date dan kontekstual </td>
                    <td class="td">  <input type="radio" name="delapanII" value="2"> </td>
                </tr>

                <tr>
                    <td>
                        Sebagian besar sumber pembelajaran up to date dan kontekstual
                    <td class="td">  <input type="radio" name="delapanII" value="3"> </td>
                </tr>


                <tr>
                    <td>
                        Seluruh sumber pembelajaran up to date dan kontekstual
                    <td class="td">  <input type="radio" name="delapanII" value="4"> </td>
                </tr>



                <!-- ini yang ke 9 --> 


                <tr>
                    <td rowspan="11">9</td>
                    <th  rowspan="11"><h4>
                    Kemampuan guru memberikan motivasi/<br \>penguatan kepada siswa
                    </h4> 
                    </th>
                </tr>



                <tr>
                    <th colspan="2">9A 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                    </td>
                </tr>


                <tr>
                    <td>
                        Belum mendukung siswa mengidentifikasi dimana siswa kurang paham<br \>
                        dan apa yang dibutuhkan siswa untuk memahami topik    
                    </td>
                    <td class="td">  <input type="radio" name="sembilanI" value="1" checked> </td>
                </tr>


                <tr>
                    <td>
                        Kadang-kadang mendukung siswa mengidentifikasi dimana siswa kurang paham dan apa yang<br \> 
                        dibutuhkan siswa untuk memahami topik          
                    </td>
                    <td class="td">  <input type="radio" name="sembilanI" value="2"> </td>
                </tr>


                <tr>
                    <td>
                        Sering  mendukung siswa mengidentifikasi dimana siswa kurang paham dan apa yang dibutuhkan siswa <br \>
                        untuk memahami topik       
                    </td>
                    <td class="td">  <input type="radio" name="sembilanI" value="3"> </td>
                </tr>

                <tr>
                    <td>
                        Selalu mendukung siswa mengidentifikasi dimana siswa kurang paham dan apa yang 
                        dibutuhkan siswa <br \>untuk memahami topik   
                    </td>
                    <td class="td">  <input type="radio" name="sembilanI" value="4"> </td>
                </tr>

                
                
                <tr>
                    <th colspan="2">9B 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                    </td>
                </tr>


                <tr>
                    <td>
                        Belum  memberikan pujian kepada siswa  
                    </td>
                    <td class="td">  <input type="radio" name="sembilanII" value="1"> </td>
                </tr>



                <tr>
                    <td>
                        Kadang-kadang memberikan pujian kepada siswa  
                    </td>
                    <td class="td">  <input type="radio" name="sembilanII" value="2" checked> </td>
                </tr>

                <tr>
                    <td>
                        Sering memberikan pujian kepada siswa  
                    </td>
                    <td class="td">  <input type="radio" name="sembilanII" value="3"> </td>
                </tr>


                <tr>
                    <td>
                        Selalu memberikan pujian kepada siswa 
                    </td>
                    <td class="td">  <input type="radio" name="sembilanII" value="4"> </td>
                </tr>



                <!-- ini yang ke 10 -->


                <tr>
                    <td rowspan="16">10</td>
                    <th  rowspan="16"><h4>
                    Kemampuan guru melibatkan siswa dalam menemukan, <br \>  membangun/mengkonstruksi konsep  </h4> 
                </th>
                <th colspan="2"> 
                  </tr>



                <tr>
                    <th colspan="2">10A 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM ! </th>
                    </td>
                  </tr>


                <tr>
                    <td>
                            Runutan untuk siswa mampu mengkostruksi suatu konsep tidak jelas 
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhI" value="1" checked> </td>
                </tr>


                <tr>
                    <td>
                        Runutan untuk siswa mampu mengkostruksi suatu konsep sudah mulai terarah tapi perlu ditingkatkan
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhI" value="2"> </td>
                </tr>


                <tr>
                    <td>
                        Runutan untuk siswa mampu mengkostruksi suatu konsep jelas dan terarah hanya pada LKS pertanyaan- <br \>
                        pertanyaannya belum sepenuhnya mendukung untuk konstruk 
                    </td>
                    <td class="td"><input type="radio" name="sepuluhI" value="3"> </td>
                </tr>


                <tr>
                    <td>
                        Runutan untuk siswa mampu mengkonstruksi suatu konsep jelas dan terarah termasuk didalamnya <br \>pertanyaan-pertanyaan dalam LKS
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhI" value="4"> </td>
                </tr>

                <!-- 10b -->
                <tr>
                    <th colspan="2">10B 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Siswa belum  terlibat dalam proses penemuan konsep 
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhII" value="1"> </td>
                </tr>


                
                <tr>
                    <td>
                        Siswa terlibat dalam proses penemuan konsep hanya pada tahapan tertentu 
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhII" value="2" checked> </td>
                </tr>

                <tr>
                    <td>
                        Siswa terlibat dalam proses penemuan konsep hampir pada sebagian  besar tahapan
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhII" value="3"> </td>
                </tr>

                
                <tr>
                    <td>
                        Siswa terlibat dalam proses penemuan konsep hampir pada seluruh tahapan 
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhII" value="4"> </td>
                </tr>

                
                <tr>
                    <th colspan="2">10C 
                        Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                    </td>
                </tr>
                
                
                <tr>
                    <td>
                        Siswa  belum berhasil   merumuskan konsep sendiri
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhIII" value="1"> </td>
                </tr>
                
                
                  
                <tr>
                    <td>
                        Siswa sendiri yang merumuskan konsep dengan bantuan hampir sepenuhnya dari guru
                    </td>
                    <td class="td"><input type="radio" name="sepuluhIII" value="2" checked> </td>
                </tr>
                
                
                <tr>
                    <td>
                        Siswa sendiri yang merumuskan konsep tersebut dengan bahasa siswa sendiri dengan bantuan guru </td>
                    <td class="td"><input type="radio" name="sepuluhIII" value="3"> </td>
                </tr>
                
                
                <tr>
                    <td>
                        Siswa sendiri yang sudah mampu merumuskan konsep tersebut dengan bahasa siswa sendiri
                    </td>
                    <td class="td">  <input type="radio" name="sepuluhIII" value="4"> </td>
                </tr>
                
                
               



                <tr>
                    <td rowspan="4">11</td>
                    <th  rowspan="4"><h4>
                    Kemampuan guru dalam menyampaikan materi </h4>  </th>
                       
                </tr>
                
		
                <tr>
                    <td colspan="2">
                      <b> Dari penyataan dibawah ini mana yang terlihat dalam PBM?</b>
                    </td>
                </tr>

                
                
                <tr>
                    <td>
                        Penyampaian materi disampaikan secara jelas dan  tegas
                    <td class="td"><input type="checkbox" name="sebelas[]" value="1" checked> </td>
                </tr>
		
                <tr>
                    <td>
                        Diberikan  contoh-contoh yang jelas   dan terkait dengan topik  
                    </td>
                    <td class="td"><input type="checkbox" name="sebelas[]" value="2" checked> </td>
                </tr>
                



                
                <!-- 12--> 
                
                <tr>
                    <td rowspan="5">12</td>
                    <th  rowspan="5"><h4>
                    Guru memberikan penilaian kinerja kepada siswa <br \>selama kegiatan PBM (bukan test tertulis)</h4> </th>
                    <th colspan="2"> 
                       Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !
                    </th>       
                </tr>
                
                
                  
                <tr>
                    <td>
                        Guru tidak memantau kondisi siswa 
                    </td>
                    <td class="td">  <input type="radio" name="duabelas" value="1" checked> </td>
                </tr>
                  
                <tr>
                    <td>
                        Guru terus berkeliling namun belum   menggunakan strategi apapun  (mis. class assessment,<br \> group assessment, peer assessment) 
                        untuk melihat apakah siswa sudah paham
                    </td>
                    <td class="td">  <input type="radio" name="duabelas" value="2"> </td>
                </tr>
                  
                <tr>
                    <td>
                        Guru belum secara  konsisten terus berkeliling dan menggunakan beberapa strategi (mis.
                        class assessment, group assessment, peer asessement)  
                        untuk melihat apakah siswa sudah paham 
                    </td>
                    <td class="td">  <input type="radio" name="duabelas" value="3"> </td>
                </tr>
                  
                <tr>
                    <td>
                        Guru secara konsisten terus berkeliling dan menggunakan beberapa strategi (mis. 
                        class assessment, group assessment, peer asessment)  untuk melihat apakah siswa sudah paham
                    </td>
                    <td class="td">  <input type="radio" name="duabelas" value="4"> </td>
                </tr>
                
                
                
                
                <tr>
                    <td rowspan="3">13</td>
                    <th  rowspan="3">
                    <h4>Kemampuan guru menerapkanan COIS dalam PBM</h4></th>
                    <th colspan="2"> 
                   Dari pernyataan dibawah ini mana yang terlihat dalam PBM?</th>       
                </tr>
                
                <tr>
                    <td>
                        Kegiatan PBM menunjang COIS
                    </td>
                    <td class="td">  <input type="checkbox" name="tigabelas[]" value="1" checked> </td>
                </tr>
                
                <tr>
                    <td>
                        Guru mengingatkan akan nilai COIS
                    </td>
                    <td class="td">  <input type="checkbox" name="tigabelas[]" value="2"> </td>
                </tr>
                
                
                <!-- ini yang ke 14 --> 
                
                
                <tr>
                    <td rowspan="21">14</td>
                    <th  rowspan="21"><h4>
                      Kemampuan guru menerapkanan COIS dalam PBM</h4></th>
                    <th colspan="2"> 
                   </th>       
                </tr>
                
                
                
                <!-- 14 -->
                <tr>
                    <th colspan="2">14A Pilihlah salah satu pernyataan berikut yang terlihat dalam 				PBM !</th>
                    </td>
                </tr>
                
                
                    
                 <tr>
                    <td>
                         Tidak ada viariasi kegiatan
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasI" value="1" checked> </td>
                </tr>
                
                
                
                <tr>
                    <td>
                         Penerapan kegiatan sudah variasi terdiri dari lebih dari 2 kombinasi  kerja individu/berpasangan/berkelompok atau klasikal
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasI" value="2"> </td>
                </tr>
                
                
                <tr>
                    <td>
                        Penerapan kegiatan sudah variasi terdiri dari  dari 3 kombinasi  kerja individu/berpasangan/berkelompok atau klasikal
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasI" value="3"> </td>
                </tr>
                
                
                <tr>
                    <td>
                        Penerapan kegiatan sudah variasi terdiri dari lebih dari 3 kombinasi  kerja individu/berpasangan/berkelompok atau klasikal
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasI" value="4"> </td>
                </tr>
                
                
                
                
                <tr>
                    <th colspan="2">14B Pilihlah salah satu pernyataan berikut yang terlihat dalam 				PBM !</th>
                </tr>
                
                
                <tr>
                    <td>
                        Kelas tidak kondusive
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasII" value="1" checked> </td>
                </tr>
                
                
                <tr>
                    <td>
                        Kelas kurang kondusive
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasII" value="2"> </td>
                </tr>
                
                
                <tr>
                    <td>
                        Kelas cukup kondusive
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasII" value="3"> </td>
                </tr>
                
                
                <tr>
                    <td>
                    Kelas sangat kondusive untuk belajar
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasII" value="4"> </td>
                </tr>
                
                
                <tr>
                    <th colspan="2">14C Pilihlah salah satu pernyataan berikut yang terlihat dalam 				PBM !</th>
                </tr>
                
                
                <tr>
                    <td>
                         Belum ada penerapan signal dan/atau  prosedur
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIII" value="1"> </td>
                </tr>
                
                
                
                <tr>
                    <td>
                        Penerapan signal dan/atau prosedur kadang-kadang  diterapkan sesuai dengan kebutuhannya
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIII" value="2" checked> </td>
                </tr>
                
                
                
                <tr>
                    <td>
                        Penerapan signal dan/atau prosedur sering diterapkan sesuai dengan kebutuhannya
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIII" value="3"> </td>
                </tr>
                
                
                
                <tr>
                    <td>
                        Penerapan signal dan/atau prosedur selalu diterapkan sesuai dengan kebutuhannya
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIII" value="4"> </td>
                </tr>
                
                
                
                <tr>
                    <th colspan="2">14D Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Urutan pengajaran, alokasi waktu sangat  perlu ditingkatkan
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIV" value="1" checked> </td>
                </tr>
              
                
                <tr>
                    <td>
                        Urutan pengajaran, alokasi waktu masih perlu ditingkatkan
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIV" value="2"> </td>
                </tr>
                
              
                <tr>
                    <td>
                        Secara jelas terlihat bahwa urutan pengajaran, alokasi waktu,  walaupun belum terlalu tepat
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIV" value="3"> </td>
                </tr>
                
                <tr>
                    <td>
                        Secara jelas terlihat bahwa urutan pengajaran, alokasi waktu,  sangat tepat  
                    </td>
                    <td class="td">  <input type="radio" name="empatbelasIV" value="4"> </td>
                </tr>


                
   <tr>
            <th>D</th>
            
            <u><th>Kegiatan Penutup</th></u>
            <u><th> <br \>
            </th></u>
            <td> </td>
         
        </tr>
        
        
        <!-- ini no 15 --> 
        
        
         
        <tr>
            <td rowspan="10"> 15 </td> 
            <th  rowspan="10"><h4>Kemampuan guru membimbing siswa dalam merangkum</h4></th>
    
            <th colspan="2">15A Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
            

        </tr>
        
        
        <tr>
           
            <td> 
                Kesimpulan tidak dibuat
            </td>
            <td class="td">  <input type="radio" name="limabelasI" value="1" checked> </td>
         
        </tr>
         
         
        <tr>
            <td> 
                Kesimpulan dibuat guru  
            </td>
            <td class="td">  <input type="radio" name="limabelasI" value="2"> </td>
         </tr>
         
         
        <tr>
            <td> 
                Membantu siswa secara detil  untuk merangkum apa yang dipelajari     
            </td>
            <td class="td">  <input type="radio" name="limabelasI" value="3"> </td>
        </tr>
         
        <tr>
            <td> 
                Memberikan garis besar acuan kepada siswa untuk merangkum apa yang dipelajari    
            </td>
            <td class="td">  <input type="radio" name="limabelasI" value="4"> </td>
        </tr>
        
        
        
        <tr>
            <th colspan="2">15B Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !</th>
            </td>
        </tr> 
         
         
        
                 
        <tr>
            <td>
                Tidak membantu siswa sehingga siswa tidak mampu
                untuk menghubungkan/ menganalogikan dengan kondisi kontekstual   
            </td>
            <td class="td">  <input type="radio" name="limabelasII" value="1" checked> </td>
         </tr>
        
         
                    
        <tr>
            <td> 
                Membantu siswa namun siswa belum mampu untuk menghubungkan/ menganalogikan dengan kondisi kontekstual 
            </td>
            <td class="td">  <input type="radio" name="limabelasII" value="2"> </td>
        </tr>
        
                    
        <tr>
            <td>
                Membantu siswa sehingga siswa mampu untuk menghubungkan/ menganalogikan dengan satu kondisi kontekstual   
            </td>
            <td class="td">  <input type="radio" name="limabelasII" value="3"> </td>
        </tr>
        
                    
        <tr>
            <td> 
                Membantu siswa sehingga siswa mampu untuk menghubungkan/ menganalogikan dengan beragam kondisi kontekstual  
            </td>
            <td class="td">  <input type="radio" name="limabelasII" value="4"> </td>
        </tr>
        
        
        <!-- ini no 16 --> 
        
        
        <tr>
            <td rowspan="5"> 16 </td>
            <th  rowspan="5"><h4>Kemampuan guru mengadakan evaluasi</h4></th>

            <td><b>Pilihlah salah satu pernyataan berikut yang terlihat dalam PBM !
		</b></td>
          
        </tr>
        
	      
        <tr>
            <td> 
              Tidak melakukan evaluasi 
            </td>
            <td class="td">  <input type="radio" name="enambelas" value="1" checked> </td>
        </tr>
      


      
        <tr>
            <td> 
               Melakukan evalusi bagaimana  bagaimana mayoritas siswa memahami materi  denggan memberikan PR
            </td>
            <td class="td">  <input type="radio" name="enambelas" value="2"> </td>
        </tr>
         
        <tr>
            <td> 
                Melakukan evaluasi dengan satu strategi (bukan PR) untuk melihat/mengevaluasi bagaimana mayoritas siswa memahami materi    
            </td>
            <td class="td">  <input type="radio" name="enambelas" value="3"> </td>
        </tr>
        
        
        <tr>
            <td> 
                Menggunakan beragam strategi (ct. tanya jawab, refleksi, quiz, dll) untuk melihat / mengevaluasi bagaimana
                mayoritas siswa memahami materi (tidak hanya test tertulis)
            </td>
            <td class="td">  <input type="radio" name="enambelas" value="4"> </td>
        </tr>
        
        <tr>
           <td></td>
        </tr>
               <tr>
            <th>E</th>
            <u><th>Performa Guru</th></u>
            <u><th> <br \>
            </th></u>
            <td> </td>
         
        </tr>
        
        
        <!-- ini no 17 --> 
        
        
         
        <tr>
            <td rowspan="5"> 17 </td>
            <th  rowspan="5"><h4>Ekspresi guru</h4></th>
            <td colspan="2">
		<b>
			Dari penyataan dibawah ini mana yang terlihat dalam PBM?
		</b>
            </td>
            
        </tr>
        

	<tr>
		<td>Suara dengan volume terdengar, artikulasi yang jelas dan intonasi yang tepat
		</td>
		
		<td class="td"><input type="checkbox" name="tujuhbelas[]" value="1"> </td>
	</tr>
        
        <tr>
            <td>
                Terjalinnya  kontak mata dengan siswa
            </td>
            <td class="td"><input type="checkbox" name="tujuhbelas[]" value="2" checked> </td>
        </tr>
         
         
        <tr>
            <td>
                Gerak (gesture) tubuh (mis. tidak memasukkan tangan ke dalam saku celana) menunjukkan semangat.
            </td>
            <td class="td">  <input type="checkbox" name="tujuhbelas[]" value="3"> </td>
        </tr>
         
         
        <tr>

         </tr>
         
         
         
        <tr>
            <td rowspan="5"> 18 </td>
            <th  rowspan="5"><h4>Kerapian Guru
            <th colspan="2">
              Dari penyataan dibawah ini mana yang terlihat dalam PBM?
            </th>
           
        </tr>
      
      
      
        <tr>
            <td>
                Pakaian rapi (tidak kusut dan tidak "belel/pudar") dan sopan (mis. tidak ketat, tidak transparan)
             </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="1"> </td>
            

        </tr>
        
         
        <tr>
            <td>
                Pakaian "matching" (mis. untuk pria antara dasi dan kemeja) dan sesuai dengan kondisi (mis. tidak memakai pakaian pesta ke sekolah) 
            </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="2"> </td>
        </tr>
         
        <tr>
            <td>
                Sepatu bersih dan tertutup           
            </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="3"> </td>
        </tr>
         
        <tr>
           <td>
               Rambut rapi dan bagi wanita diikat/gelung dan wajah dirias sewajarnya
            </td>
            <td class="td">  <input type="checkbox" name="delapanbelas[]" value="4" checked> </td>
        </tr>
         
       
        <tr>
            <td rowspan="4"> 19 </td>
            <th  rowspan="4"><h4>Kematangan emosi guru (kehangatan, kesabaran, <br \> keramahan, dan kepedulian)
                <th>Dari penyataan dibawah ini mana yang terlihat dalam PBM?
                </th>
            <td>   </td>

        </tr>
      
      
      
        
        <tr>
            <td> 
                Guru mampu menunjukkan ketenangan diri dalam menghadapi situasi apa pun (terjadi polemik, kelas kurang/tidak terkendali)
            </td>
            <td class="td">  <input type="checkbox" name="sembilanbelas[]" value="1" checked> </td>
        </tr>
           
        <tr>
            <td>
                Guru sudah konsisten menunjukkan sikap penuh perhatian
            </td>
            <td class="td">  <input type="checkbox" name="sembilanbelas[]" value="2" checked> </td>
        </tr>
 		
	
        <tr>
           <td></td>
        </tr>
        
        <tr>
            <th>F</th>
            <u><th>Lain - Lain </th></u>
            <u><th> <br \>
            </th></u>
            <td> </td>
         
        </tr>
        
        
        <!-- ini no 20 --> 
        
        
         
        <tr>
            <td rowspan="5"> 20 </td>
            <th  rowspan="5"><h4>Kesesuaian PBM dengan RPP</h4></th>
    
            <th>Dari penyataan dibawah ini mana yang terlihat dalam PBM?</th>

            <td> </td>

        </tr>
        
        
        <tr>
           
            <td> PBM tidak sesuai dengan RPP
            </td>
            <td class="td"> <input type="radio" name="duapuluh" value="1" checked> </td>
         
         </tr>
         
         
        <tr>
            <td> 
                Sebagian kecil dari PBM sesuai dengan RPP
            </td>
            <td class="td">  <input type="radio" name="duapuluh" value="2"> </td>
         
        </tr>
         
         
        <tr>
            <td> 
                Hampir seluruh PBM sesuai dengan RPP
            </td>
            <td class="td">  <input type="radio" name="duapuluh" value="3"> </td>
        </tr>
         
         
         
        <tr>
            <td> 
                Seluruh PBM sesuai dengan RPP.
            </td>
            <td class="td">  <input type="radio" name="duapuluh" value="4"> </td>
        </tr>

		<tr>
            <td rowspan="1"> 21 </td>
			<td>Catatan Tambahan</td>    
			<td class="td">  <textarea id="txtArea" name="txtArea" rows="4" cols="60"></textarea> </td>			
		</tr>
		<tr></tr>
	    <tr>
            <td rowspan="1"> 22 </td>
			<td>Supervisor</td>    
			<td class="td">  <input type="text" name="supervisornya"> </td>			
		</tr>
		<tr>
            <td rowspan="1"> 23 </td>
      <td>Semester</td>    
      <td class="td">  
  <select name="semesternya">
  <option value="Ganjil">Ganjil</option>
  <option value="Genap">Genap</option>
</select> 
      </td>     
    </tr>
        <tr>
            <td rowspan="1"> 24 </td>
      <td>Tahun Pelajaran</td>    
      <td class="td">  
  <select name="ajarannya">
  <option value="2015/2016">2015/2016</option>
  <option value="2016/2017">2016/2017</option>
  <option value="2017/2018">2017/2018</option>
  <option value="2018/2019">2018/2019</option>
  <option value="2019/2020">2019/2020</option>
  <option value="2020/2021">2020/2021</option>
  <option value="2021/2022">2021/2022</option>
  <option value="2022/2023">2022/2023</option>
  <option value="2023/2024">2023/2024</option>
  <option value="2024/2025">2024/2025</option>
</select> 
      </td>     
    </tr>
    </table>
<center>	<button type="submit" id="reset">Submit</button> <center>
        
    </form>
</div> 
		<!-- <div><button class="sexybutton sexysimple sexylarge" id="button2">Tambah Barang</button></div> -->
		<div id="myDiv"><h1>alohaa</h1></div>
		<a href="#" onclick="printIt(document.getElementById('printme').innerHTML); return false"><div><button class="sexybutton sexysimple sexylarge" id="button2">Print</button></div></a>
	    <div style="clear: both"></div>
       
</div>	
    <div id="footer">
      &copy; 2017 - Tendy Developer
    </div>
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
</body>
<a href="http://multisoftdeveloper.worepress.com" src=""></a>
</html>
