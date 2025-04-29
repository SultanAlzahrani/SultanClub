<?php include("./includes/header.php"); ?>
<?php include("./includes/nav.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>My Resume</title>
  <link rel="stylesheet" href="../global/main.css" />
  <link rel="icon" type="image/x-icon" href="../assets/images/icon.webp" />
  <style type="text/css">
    .resume-container {
      text-align: center;
      margin: 40px auto;
      max-width: 900px;
      padding: 20px;
    }

    .resume-container h2 {
      margin-bottom: 20px;
    }

    object {
      width: 100%;
      height: 700px;
      border: 2px solid #0c2d57;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 600px) {
      object {
        height: 500px;
      }
    }
  </style>
</head>
<body>
  <div class="content">
    <div class="resume-container">
      <h2>My Resume</h2>
      <object data="../assets/my_resume.pdf" type="application/pdf">
        <p>Your browser doesn't support PDF embedding.
          <a href="../assets/pdf/my_resume.pdf" target="_blank">Click here to view it.</a>
        </p>
      </object>
    </div>
  </div>
<?php include("./includes/footer.php"); ?>
</body>
</html>
