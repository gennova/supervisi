     <?php  
    $server= "localhost";  
    $username = "root";   
    $password = "";   
    $database = "ypiisema_supervisi";  
      
    mysql_connect($server,$username,$password) or die ("Koneksi Gagal"); 
    mysql_select_db($database) or die ("Database Tidak Bisa Di Buka " );  
    $con=mysqli_connect($server,$username,$password,$database);  
    ?> 