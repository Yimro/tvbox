<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>TV Home</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<h1>📺 TV-Box Wohnzimmer</h1>

<div class="grid">

<a class="card" href="https://www.netflix.com" target="_self">
<img src="images/netflix.png">
<span>Netflix</span>
</a>

<a class="card" href="https://www.primevideo.com" target="_self">
<img src="images/prime.png">
<span>Prime Video</span>
</a>

<a class="card" href="https://www.youtube.com" target="_self">
<img src="images/youtube.png">
<span>YouTube</span>
</a>

<a class="card" href="https://www.ardmediathek.de" target="_self">
<img src="images/ard.jpg">
<span>ARD</span>
</a>
<!--
<a class="card" href="https://www.zdf.de" target="_self">
<img src="images/zdf.png">
<span>ZDF</span>
</a>

<a class="card" href="https://www.disneyplus.com" target="_self">
<img src="images/disney.png">
<span>Disney+</span>
</a>
-->
<a class="card" href="" target="_self">
<img src="images/internet.png">
<span>Internetz</span>
</a>
<!--
<a class="card" href="http://localhost:8080" target="_self">
<img src="images/kodi.png">
<span>Kodi</span>
</a>
-->
</div>

<div class="footer">
<?php
echo "Heute: ".date("d.m.Y H:i");
?>
</div>

</body>
</html>
