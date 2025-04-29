<?php include("./includes/header.php"); ?>
<?php include("./includes/nav.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Feedback</title>
  <link rel="stylesheet" href="../global/main.css" />
  <link rel="icon" type="image/x-icon" href="../assets/images/icon.webp" />
  <link rel="stylesheet" href="../global/form.css" />
  <script src="../js/validation.js" defer="defer"></script>
</head>
<body>
  <div class="content">
    <h2>Feedback Form</h2>

    <?php
      if (isset($_GET["error"])) {
        echo "<p class='error-msg'>" . htmlspecialchars($_GET["error"]) . "</p>";
      } elseif (isset($_GET["success"])) {
        echo "<p class='success-msg'>Thank you! Your feedback has been submitted.</p>";
      }
    ?>

    <form id="feedbackForm" action="../db/feedback_handler.php" method="POST" novalidate="novalidate">
      <div id="errorMessages" class="form-errors"></div>

      <fieldset>
        <legend>Personal Info</legend>
        <label>First Name: <input type="text" name="first_name" required="required" /></label>
        <label>Last Name: <input type="text" name="last_name" required="required" /></label>
        <label>Email: <input type="email" name="email" required="required" /></label>
        <label>Phone: <input type="text" name="phone" /></label>
        <label>Age: <input type="number" name="age" /></label>
        <label>City:
          <select name="city" required="required">
            <option value="">-- Select --</option>
            <option value="Jeddah">Jeddah</option>
            <option value="Riyadh">Riyadh</option>
            <option value="Dammam">Dammam</option>
          </select>
        </label>
      </fieldset>

      <fieldset>
        <legend>Preferences</legend>
        <label>Gender:
          <input type="radio" name="gender" value="Male" /> Male
          <input type="radio" name="gender" value="Female" /> Female
        </label>

        <label>Hobbies:
          <input type="checkbox" name="hobbies[]" value="Coding" /> Coding
          <input type="checkbox" name="hobbies[]" value="Gaming" /> Gaming
        </label>

        <label>Feedback:
          <textarea name="feedback" rows="5" required="required"></textarea>
        </label>
      </fieldset>

      <button type="submit">Submit</button>
    </form>
  </div>
<?php include("./includes/footer.php"); ?>
</body>
</html>
