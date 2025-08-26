<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BeatSpire - Music for Everyone</title>
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
  <div class="space">
    <nav><a href="home.php">HOME</a></nav>
  </div>
  <div class="space">
    <nav><a href="contact.php">CONTACT_US</a></nav>
  </div>
  <div class="space">
    <nav><a href="faq.php">FAQ'S</a></nav>
  </div>
  <button class="login-btn">
    <a href="login.php">Login</a>
  </button>
</header>

<main>
  <section class="hero">
    <h1>Welcome to BeatSpire</h1>
    <p>Stream millions of songs for free.</p>
  </section>
</main>

<!-- Featured Songs -->
<section class="playlist">
  <h2>Featured Songs</h2>
  <div class="song-grid">

    <div class="song-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQsUc_Ta8jJoujVC2okyZWPMFdfXhklicI8Q&s" alt="Shape of You" class="img">
      <h3>Shape of You</h3>
      <p>Ed Sheeran</p>
      <button onclick="playTrack('media/shape-of-you.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn1rntKOLMKE9_w19VKaB7JzCf_RG6ErL9gA&s" alt="Blinding Lights" class="img">
      <h3>Blinding Lights</h3>
      <p>The Weeknd</p>
      <button onclick="playTrack('media/blinding-lights.mp3')">▶ Play</button>
    </div>

    <div class="song-card">
      <img src="https://m.media-amazon.com/images/M/MV5BNzQ1ZjlmZDktMDJhMS00ZTAyLWIwZTUtYTE2YzkzZmQwNzZkXkEyXkFqcGc@._V1_.jpg" class="img"> 
      <h3>We Are The Champions</h3>
      <p>Queen</p>
      <button onclick="playTrack('media/we-are-the-champions.mp3')">▶ Play</button>
    </div>
  </div>
  <br>
  <!-- Categories -->
  <div class="card-grid">
    <div class="category-card">
     <a href="punjabi.php"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGqZ2sPzxAic7sPYWOcFRfIEa0kh8lS5u1Fg&s" alt="Punjabi Hits"></a>
      <h3>Punjabi Hits</h3>
    </div>
    <div class="category-card">
      <img src="https://www.shutterstock.com/image-photo/shirtless-man-listening-music-through-260nw-2358936207.jpg" alt="Workout Mix">
      <h3>Workout Mix</h3>
    </div>
    <div class="category-card">
      <a href="lovesongs.php"><img src="https://m.media-amazon.com/images/I/514e4LNOR6L._UXNaN_FMjpg_QL85_.jpg" alt="Love Songs"></a>
      <h3>Love Songs</h3>
    </div>
    <div class="category-card">
      <a href="sadsongs.php"><img src="https://im.indiatimes.in/content/2025/Jul/GwTi8FpWsAAjiVn_687df84884aa5.jpg?w=400&h=225&cc=1&webp=1&q=75" alt="Sad Songs"></a>
      <h3>Sad Songs</h3>
    </div>
  </div>
</section>

<!-- Popular Artists -->
<section class="artist-playlists">
  <h2>Popular Artists</h2>
  <div class="artist-grid">

    <div class="artist-card">
      <img src="https://www.thestatesman.com/wp-content/uploads/2025/04/arijit-singh-pahalgam-attack-jpg.webp" alt="Arijit Singh" />
      <h3>Arijit Singh</h3>
      <ul>
        <li><span>Tum Hi Ho</span> <button onclick="playTrack('media/tum-hi-ho.mp3')">▶</button></li>
        <li><span>Channa Mereya</span> <button onclick="playTrack('media/channa-mereya.mp3')">▶</button></li>
      </ul>
    </div>

    <div class="artist-card">
      <img src="https://www.bollywoodhungama.com/wp-content/uploads/2017/10/12-Rare-aspects-of-the-genius-that-was-Kishore-Kumar.jpg" alt="Kishore Kumar" />
      <h3>Kishore Kumar</h3>
      <ul>
        <li><span>Pal Pal Dil Ke Paas</span> <button onclick="playTrack('media/pal-pal-dil-ke-paas.mp3')">▶</button></li>
        <li><span>Mere Sapno Ki Rani</span> <button onclick="playTrack('media/mere-sapno-ki-rani.mp3')">▶</button></li>
      </ul>
    </div>

    <div class="artist-card">
      <img src="https://images.indianexpress.com/2023/03/Collage-Maker-15-Mar-2023-02-39-PM-6708.jpg" alt="Kumar Sanu" />
      <h3>Kumar Sanu</h3>
      <ul>
        <li><span>Dheere Dheere Se</span> <button onclick="playTrack('media/dheere-dheere-se.mp3')">▶</button></li>
        <li><span>Tumse Milna</span> <button onclick="playTrack('media/tumse-milna.mp3')">▶</button></li>
      </ul>
    </div>
  </div>
</section>

<!-- Trending Playlists -->
<section class="image-playlist">
  <h2>🔥 Trending Playlists</h2>
  <div class="playlist-grid">
    <div class="playlist-card">
      <img src="https://i.scdn.co/image/ab67616d0000b27376ebe2ce25a745b767f9cb72" alt="Trending Hits" class="img">
      <h3>Trending Hits</h3>
      <button onclick="playTrack('media/tum-hi-ho.mp3')">▶ Play</button>
    </div>
    <div class="playlist-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSswmQEaCS8L-uBT_20wpfsyyJNlKmI5vmjA&s" alt="Retro Vibes" class="img">
      <h3>Retro Vibes</h3>
      <button onclick="playTrack('media/mere-sapno-ki-rani.mp3')">▶ Play</button>
    </div>
    <div class="playlist-card">
      <img src="https://i.ytimg.com/vi/ljnGl5nvUJY/maxresdefault.jpg" alt="Mood Booster" class="img">
      <h3>Mood Booster</h3>
      <button onclick="playTrack('media/levitating.mp3');">▶ Play</button>
    </div>
  </div>
</section>

<!-- Single Audio Player -->
<audio id="audio-player" controls style="width: 100%; margin-top: 20px; display: none;"></audio>

<!-- JS for Playing Songs -->
<script>
  function playTrack(src) {
    const audioPlayer = document.getElementById('audio-player');
    audioPlayer.src = src;
    audioPlayer.style.display = 'block';
    audioPlayer.play();
  }
</script>



<?php
include('include/footer.php');
?>