<?php include("./db/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Home | My Website</title>
    <link rel="stylesheet" href="../global/main.css" />
    <link rel="stylesheet" href="../global/home.css" />
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.webp" />
    <script src="../js/home.js" type="text/javascript" defer="defer"></script>
</head>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/nav.php"); ?>

    <div class="home-container">
        <section class="greeting-section">
            <h2 id="greeting">Hello, Visitor!</h2>
            <p>Welcome to my personal website. Here you’ll find my resume, photo gallery, feedback form, and more!</p>
        </section>

        <section class="about-highlight">
            <h2>More About Me</h2>
            <p>I'm <strong>Sultan Bandar</strong>, a Computer Science student at KAU - FCIT with a passion for full-stack web development, game development, and all things tech!</p>
        </section>

        <section class="skills-section">
            <h2>Tech Stack &amp; Skills</h2>
            <ul class="skills-list">
                <li>⚛️ React.js</li>
                <li>🌐 Node.js</li>
                <li>🐘 PHP</li>
                <li>☕ Java</li>
                <li>🐍 Python</li>
                <li>🗃️ SQL / MySQL</li>
                <li>📦 NoSQL / MongoDB</li>
            </ul>
        </section>

        <section class="notes-section">
            <h2>Project Info</h2>
            <p>This website was created as a <strong>Final Project</strong> for the course <strong>CPCS-403</strong>.</p>
            <p>The focus is mainly on backend logic, PHP/MySQL integration, and functional design over styling.</p>
            <p>Feel free to explore all the sections using the navigation menu above!</p>
        </section>

        <section class="database-section">
            <h2>Message from MySQL Database</h2>
            <?php
                $sql = "SELECT message FROM welcome_text LIMIT 1";
                $result = $conn->query($sql);
                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo "<p class='db-message'>" . htmlspecialchars($row['message']) . "</p>";
                } else {
                    echo "<p class='db-message'>No welcome message found.</p>";
                }
            ?>
        </section>
    </div>

    <?php include("./includes/footer.php"); ?>
</body>
</html>
