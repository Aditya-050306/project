<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - BeatSpire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/style.css">  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  


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
    <nav>
      <a href="home.php">HOME</a>
    </nav>
</div>
<div class="space">
    <nav>
      <a href="contact.php">CONTACT_US</a>
    </nav>
</div>
<div class="space">
    <nav>
      <a href="faq.php">FAQ'S</a>
</nav>
</div>
<button class="login-btn">
  <a href="login.php">Login</a>
</button>
</header>




<div class="bg-image">
  <img src="https://www.bensound.com/catalog/view/theme/next/image/background-contact.jpg" 
       alt="Contact Us" class="full-width-img">
  <div class="bg-overlay">
    <h1 class="display-4">Contact Us</h1>
    <br><br>
    <p class="lead">We are here to help you with any questions or concerns you may have.</p>
  </div>
</div>


<div class="container mt-5 p-3">
  <h2 class="form">Contact Form</h2>
  <br>
  <form>
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Full Name" name="f_name" required>
      </div>
      <div class="col">
        <input type="password" class="form-control" placeholder="Email" name="email" required>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Subject" name="subject" required>
      </div>
      <div class="col">
      
    <select class="form-select" name="choose" placeholder="Choose">
      <option value="Choose an Option" required>Select</option>
      <option value="Technical Issue" required>Technical Issue</option>
      <option value="Copyright Claim" required>Copyright Claim</option>
      <option value="Feedback" required>Feedback</option>
      <option value="Other" required>Other Question</option>
    </select>
      </div>
    </div>
    <br>
    <br>
    <div class="row_1">
       <textarea class="form-control" rows="5" id="comment" placeholder="Comment your Request here!" name="text"></textarea>
    </div>
    <br>
      <button type="submit" class="btn btn-success w-30">Send Request</button>
  </form>
</div>
<div class="container-fluid">
 
</div>
<?php
include('include/footer.php');
?>
