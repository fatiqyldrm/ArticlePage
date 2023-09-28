function Log(btn)
{
	if (btn.value == "Login") 
	{
		var uName = document.getElementById("uName").value;
		var pWord = document.getElementById("pWord").value;
		if (uName.length != 0 && pWord.length != 0)
		{
			document.getElementById("labeltext1").innerHTML = "Login işlemi başarılı.";
			document.getElementById("giristext").innerHTML = "Hoşgeldin, "+ uName;
			document.getElementById("loginbutonu").innerHTML = "Logout"
		}
		else
		{
			document.getElementById("labeltext1").innerHTML = "Login işlemi başarısız.";
		}
	}
	else if (btn.value == "Logout") {
		document.getElementById("giristext").innerHTML = "Hoşgeldin, "+ uName;
	}
}