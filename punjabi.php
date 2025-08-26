<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Punjabi Hits | BeatSpire</title>
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
    <h1>Punjabi Hits</h1>
    <p>“Your daily dose of swag – Punjabi hit bag!”</p>
  </section>
</main>


<section class="playlist">
  <div class="song-grid">
    <div class="song-card">
      <img src="https://m.media-amazon.com/images/M/MV5BM2M1NjFlNDgtOGIxYS00ZWExLWJiNTMtNGE2NzM4ZjllNmE2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="lamborgini" class="img">
      <h3>Laembadgini</h3>
      <p>Diljit Dosanjh</p>
      <button onclick="playTrack('media/laembadgini.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://qqcdnpictest.mxplay.com/pic/4b8fb496b0ea28deb8c23fe879767674/en/16x9/640x360/test_pic1556194100308.jpg" alt="angreji beat" class="img">
      <h3>Angreji Beat</h3>
      <p>Yo Yo Honey Singh</p>
      <button onclick="playTrack('media/angreji-beat.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://c.saavncdn.com/178/Wavy-Punjabi-2024-20250523044332-500x500.jpg" alt="Wavy" class="img">
      <h3>Wavy</h3>
      <p>Karan Aujla</p>
      <button onclick="playTrack('media/wavy.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i.ytimg.com/vi/uiNBqLphO2Y/maxresdefault.jpg" alt="Millionaire" class="img">
      <h3>Millionaire</h3>
      <p>Yo Yo Honey Singh</p>
      <button onclick="playTrack('media/millionaire.mp3')">▶ Play</button>
    </div>
  </div>
</section>

<section class="playlist">
  <div class="song-grid">
    <div class="song-card">
      <img src="https://i.ytimg.com/vi/VNs_cCtdbPc/maxresdefault.jpg" alt="Brown Munde" class="img">
      <h3>Brown Munde</h3>
      <p>AP Dhillon</p>
      <button onclick="playTrack('media/brown-munde.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i.ytimg.com/vi/0pWsCiBvLOk/sddefault.jpg" alt="One Love" class="img">
      <h3>One Love</h3>
      <p>Shubh</p>
      <button onclick="playTrack('media/one-love.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i.ytimg.com/vi/SUQfY2ZBx9Q/maxresdefault.jpg" alt="Water" class="img">
      <h3>Water</h3>
      <p>Diljit Dosanjh</p>
      <button onclick="playTrack('media/water.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i1.sndcdn.com/artworks-We1nyasvwiK3nQGu-UTxdQg-t500x500.png" alt="Thodi Si Daaru" class="img">
      <h3>Thodi Si Daaru</h3>
      <p>AP Dhillon</p>
      <button onclick="playTrack('media/thodi-si-daaru.mp3')">▶ Play</button>
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
