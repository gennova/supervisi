<?php 
include "koneksi.php";
function redirect($url)
{
    if (!headers_sent())
    {    
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}
$idunit   = $_POST['unitnya'];
$namaguru   = $_POST['nguru'];
mysql_query("INSERT INTO guru (namaguru,unit) VALUES('$namaguru','$idunit')") or die(mysql_error());
redirect("halamanadmin.php")
?>