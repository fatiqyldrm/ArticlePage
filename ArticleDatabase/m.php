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
	      <li><a href="makaleler.php">Makaleler</a></li>
	    </ul></li>

	  <li><a <?php  
	  			if ($_SESSION['aktif'] == 2) {?>
	  				class = "aktif"
	  			<?php }?>
	 href="#" onclick="return false">Dersler</a>
	  	   <ul>
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
	  <a href="login.php"><button class="button" id="loginbutonu" style="top: 10px;">Login</button></a>
</ul>
</div>