<?php session_start(); ?>
 
<div>
<ul>
	  <a href="anasayfa.php"><img src="home.png" width="40" height="40" style="position: absolute;"></a>
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <li><a <?php  
	  			if ($_SESSION['aktif'] == 1) {?>
	  				class = "aktif"
	  			<?php }?>
	href="#" onclick="return false">Makaleler</a>
	  	<ul>
	      <li><a href="makaleekle.php">Makale Ekle</a></li>
	      <li><a href="makaleler.php">Makaleler</a></li>
	    </ul></li>

	  <li><a <?php  
	  			if ($_SESSION['aktif'] == 2) {?>
	  				class = "aktif"
	  			<?php }?>
	 href="dersler.php" onclick="return false">Dersler</a>
	  	   <ul>
	      <li><a href="dersekle.php">Ders Ekle</a></li>
	      <li><a href="dersler.php">Dersler</a></li>   
	    </ul></li>

	  <li><a <?php  
	  			if ($_SESSION['aktif'] == 3) {?>
	  				class = "aktif"
	  			<?php }?>
	 href="hobi.php">Hobiler</a></li>
	  <li><a <?php  
	  			if ($_SESSION['aktif'] == 4) {?>
	  				class = "aktif"
	  			<?php }?>
	 href="hakkimda.php">Hakkımda</a></li>
	  <li><a <?php  
	  			if ($_SESSION['aktif'] == 5) {?>
	  				class = "aktif"
	  			<?php }?>
	 href="iletisim.php">İletişim</a></li>
	  <?php echo "<label id='giristext'>Hoşgeldin, ".$_SESSION['isim']."</label>"?>
	  <a href="cikis.php"><button class="button" id="loginbutonu" name="logoutbtn" onclick="alert('Başarıyla Çıkış Yapıldı.')" style="top: 10px;">Logout</button></a>

</ul>
</div>