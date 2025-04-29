<?php include("./includes/header.php"); ?>
<?php include("./includes/nav.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>My Video</title>
  <link rel="stylesheet" href="../global/main.css" />
  <link rel="icon" type="image/x-icon" href="../assets/images/icon.webp" />
  <style>
    .video-container {
      text-align: center;
      margin: 40px auto;
      max-width: 800px;
      padding: 20px;
    }

    object {
      width: 100%;
      height: 450px;
      border: 3px solid #0c2d57;
      border-radius: 10px;
      background-color: black;
    }
    .caption{
      margin-top: 1rem;
    }

    @media screen and (max-width: 600px) {
      object {
        height: 250px;
      }
    }
  </style>
</head>
<body>
  <div class="content">
    <div class="video-container">
      <h2>Welcome to My Video</h2>
      <!-- Replace the video ID below with your actual one -->
      <object data="https://www.youtube.com/embed/Vm-9aafTQ8k" allowfullscreen="true"></object>
      <p class="caption">This video I created with a friend gives you an introduction to Socket Programming</p>
    </div>
  </div>
<?php include("./includes/footer.php"); ?>
</body>
</html>
