

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sad Songs | BeatSpire</title>
  <link rel="stylesheet" href="asset/css/styles.css">
</head>
<body>

<header>
  <div class="logo">
    <img src="https://static.vecteezy.com/system/resources/previews/006/257/148/non_2x/corporation-letter-b-logo-with-creative-swoosh-liquid-icon-in-black-color-template-element-vector.jpg" alt="BeatSpire">
  </div>
  <div class="search-container">
    <input type="text" placeholder="Search for songs, artists..." />
  </div>
  <div class="space"><nav><a href="home.php">HOME</a></nav></div>
  <div class="space"><nav><a href="contact.php">CONTACT_US</a></nav></div>
  <div class="space"><nav><a href="faq.php">FAQ'S</a></nav></div>
  <button class="login-btn"><a href="login.php">Login</a></button>
</header>

<main>
  <section class="hero">
    <h1>Sad Songs</h1>
    <p>Let the music speak your heart...</p>
  </section>
</main>

<section class="playlist">
  <div class="song-grid">
    <div class="song-card">
      <img src="https://www.thestatesman.com/wp-content/uploads/2025/04/arijit-singh-pahalgam-attack-jpg.webp" alt="Tum Hi Ho" class="img">
      <h3>Tum Hi Ho</h3>
      <p>Arijit Singh</p>
      <button onclick="playTrack('media/tum-hi-ho.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://a10.gaanacdn.com/gn_img/song/2lV3d1WRgB/V3d56QQoWR/size_m_1516003439.jpg" alt="Dil Diyan Gallan" class="img">
      <h3>Dil Diyan Gallan</h3>
      <p>Atif Aslam</p>
      <button onclick="playTrack('media/dil-diyan-gallan.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://c.saavncdn.com/215/Tera-Ban-Jaunga-Remix--Hindi-2020-20200407012836-500x500.jpg" alt="Tera Ban Jaunga" class="img">
      <h3>Tera Ban Jaunga</h3>
      <p>Akhil Sachdeva</p>
      <button onclick="playTrack('media/tera-ban-jaunga.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2UfCkUleG1zRppBiyxtul7DIbFdYg14b4aw&s" alt="Phir Bhi Tumko Chaahunga" class="img">
      <h3>Phir Bhi Tumko Chaahunga</h3>
      <p>Arijit Singh</p>
      <button onclick="playTrack('media/phir-bhi-tumko-chaahunga.mp3')">▶ Play</button>
    </div>
  </div>
</section>

<section class="playlist">
  <div class="song-grid">
    <div class="song-card">
      <img src="https://i.scdn.co/image/ab67616d00001e02e211a32490d19aa970956a7d" alt="Agar Tum Saath Ho" class="img">
      <h3>Agar Tum Saath Ho</h3>
      <p>Arijit Singh</p>
      <button onclick="playTrack('media/agar-tum-saath-ho.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://c-cdnet.cdn.smule.com/rs-s80/arr/0d/eb/5968f580-ba12-426a-bf7e-47b237b25fca.jpg" alt="Roke Na Ruke Naina" class="img">
      <h3>Roke Na Ruke Naina</h3>
      <p>Arijit Singh</p>
      <button onclick="playTrack('media/roke-na-ruke-naina.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://c.saavncdn.com/608/Bekhayali-From-Kabir-Singh--Hindi-2019-20190524024538-500x500.jpg" alt="Bekhayali" class="img">
      <h3>Bekhayali</h3>
      <p>Sachet Tandon</p>
      <button onclick="playTrack('media/bekhayali.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/ec/Ae_Dil_Hai_Mushkil.jpg/250px-Ae_Dil_Hai_Mushkil.jpg" alt="Ae Dil Hai Mushkil" class="img">
      <h3>Ae Dil Hai Mushkil</h3>
      <p>Arijit Singh</p>
      <button onclick="playTrack('media/ae-dil-hai-mushkil.mp3')">▶ Play</button>
    </div>
  </div>
</section>


<audio id="audio-player" controls style="width: 100%; margin-top: 20px; display: none;"></audio>

<script>
  function playTrack(src) {
    const audioPlayer = document.getElementById('audio-player');
    audioPlayer.src = src;
    audioPlayer.style.display = 'block';
    audioPlayer.play();
  }
</script>

<?php
include("include/footer.php");
?>
