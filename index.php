<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>TV Home</title>
<link rel="stylesheet" href="style.css">
</head>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const cards = Array.from(document.querySelectorAll('.card'));
  if (!cards.length) return;

  function getCols() {
    const y0 = cards[0].getBoundingClientRect().top;
    let cols = 1;
    for (let i = 1; i < cards.length; i++) {
      if (Math.abs(cards[i].getBoundingClientRect().top - y0) < 5) cols++;
      else break;
    }
    return cols;
  }

  let cur = 0;

  function setFocus(i) {
    const next = Math.max(0, Math.min(cards.length - 1, i));
    cards[cur].classList.remove('focused');
    cur = next;
    cards[cur].classList.add('focused');
    cards[cur].focus();
  }

  cards.forEach((c, i) => {
    c.setAttribute('tabindex', i === 0 ? '0' : '-1');

    c.addEventListener('keydown', (e) => {
      const cols = getCols();
      const map = { ArrowRight: 1, ArrowLeft: -1, ArrowDown: cols, ArrowUp: -cols };
      if (map[e.key] !== undefined) {
        e.preventDefault();
        setFocus(cur + map[e.key]);
      }
    });

    c.addEventListener('click', () => setFocus(i));
  cards[0].classList.add('focused'); cards[0].focus();
  });
})();
</script>


<body>

<h1>📺 TV-BOX 📺</h1>

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

<a class="card" href="https://www.spotify.com" target="_self">
<img src="images/spotify.png">
<span>Spoddivei</span>
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

<a class="card" href="" target="_self">
<img src="images/internet.png">
<span>Internet</span>
</a>

<a class="card" href="http://localhost:8080" target="_self">
<img src="images/kodi.png">
<span>Kodi</span>
</a>
-->
</div>

<div class="footer">
<?php
echo "Jetzt ist es der ".date("d.m.Y H:i");
?>
</div>

</body>
</html>
