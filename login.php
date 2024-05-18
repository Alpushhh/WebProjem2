<?php
if($_POST["email"]=="g231210029@sakarya.edu.tr" && $_POST["password"]=="g231210029")
			{
        echo"Merhaba ".$_POST["email"];
        echo"<br>Girişin Onaylandı.";
		echo"<br>Girişiniz yapılıyor lütfen bekleyiniz...";
		header("refresh:2; about.html");
			}
      else{
        echo "Kullanıcı e postası ya da şifre hatalı!";
        header("refresh:2; index.html");
      }    
 ?>