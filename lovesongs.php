<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Love Songs | BeatSpire</title>
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
    <h1>Love Songs</h1>
    <p>“Where melodies meet emotions.”</p>
  </section>
</main>

<section class="playlist">
  <div class="song-grid">
    <div class="song-card">
      <img src="https://m.media-amazon.com/images/I/71fqFyMSaNL._UF1000,1000_QL80_.jpg" alt="Perfect" class="img">
      <h3>Perfect</h3>
      <p>ED Sheeran</p>
      <button onclick="playTrack('media/perfect.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://c.saavncdn.com/598/Saiyaara-Hindi-2025-20250703061754-500x500.jpg" alt="Saiyaara(Title Track)" class="img">
      <h3>Saiyaara(Title Track)</h3>
      <p>Mohit Chauhan</p>
      <button onclick="playTrack('media/saiyaara.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i.ytimg.com/vi/lrAM_H7v8wM/maxresdefault.jpg" alt="Ky Mujhe Pyaar Hai" class="img">
      <h3>Ky Mujhe Pyaar Hai</h3>
      <p>KK</p>
      <button onclick="playTrack('media/ky-mujhe-pyaar-hai.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i1.sndcdn.com/artworks-4NpIhTHaKGE49RCU-ACzktg-t500x500.jpg" alt="Die For You" class="img">
      <h3>Die For You</h3>
      <p>The Weeknd</p>
      <button onclick="playTrack('media/die-for-you.mp3')">▶ Play</button>
    </div>
  </div>
</section>

<section class="playlist">
  <div class="song-grid">


    <div class="song-card">
      <img src="https://i1.sndcdn.com/artworks-sdPpwNKM826y1NRM-SSSWQA-t500x500.jpg" alt="A Thousand Years" class="img">
      <h3>A Thousand Years</h3>
      <p>Christina Perri</p>
      <button onclick="playTrack('media/a-thousand-years.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i.ytimg.com/vi/l7GR1S-HNGo/maxresdefault.jpg" alt="Ajeeb Dastan Hai Yeh" class="img">
      <h3>Ajeeb Dastan Hai Yeh</h3>
      <p>Lata Mangeshkar</p>
      <button onclick="playTrack('media/ajeeb-dastan-hai-yeh.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://m.media-amazon.com/images/M/MV5BYTNkZTU4ZmItZDlmMy00MzFhLWJiMzAtMjliZWEzM2YzN2Y1XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg" alt="Just the Way You Are" class="img">
      <h3>Just the Way You Are</h3>
      <p>Bruno Mars</p>
      <button onclick="playTrack('media/just-the-way-you-are.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://i.ytimg.com/vi/oDfK3RfSlKk/sddefault.jpg" alt="Abhi Na Jao Chhod Kar" class="img">
      <h3>Abhi Na Jao Chhod Kar</h3>
      <p>Mohammad Rafi</p>
      <button onclick="playTrack('media/abhi-na-jao-chhod-kar.mp3')">▶ Play</button>
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