<?php include("./includes/header.php"); ?>
<?php include("./includes/nav.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Picture Gallery</title>
    <link rel="stylesheet" href="../global/main.css" />
    <link rel="stylesheet" href="../global/galery.css" />
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.webp" />
    <script src="../js/gallery.js" defer="defer"></script>
</head>
<body>
    <div class="content">
        <h2>Photo Gallery</h2>

        <div class="gallery">
            <div class="main-image">
                <img id="current-image" src="../assets/images/pic1.jpg" alt="Gallery Image" />
                <div class="nav-buttons">
                    <button type="button" onclick="prevImage()">← Prev</button>
                    <button type="button" onclick="nextImage()">Next →</button>
                </div>
            </div>

            <div class="thumbnails">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <img src="../assets/images/pic<?= $i ?>-thumb.jpg" 
                         data-full="../assets/images/pic<?= $i ?>.jpg"
                         alt="Thumbnail <?= $i ?>" 
                         onclick="showImage(this)" />
                <?php endfor; ?>
            </div>
        </div>
    </div>
<?php include("./includes/footer.php"); ?>
</body>
</html>
