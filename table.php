<?php include("./includes/header.php"); ?>
<?php include("./includes/nav.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Schedule Table</title>
    <link rel="stylesheet" href="../global/main.css" />
    <link rel="stylesheet" href="../global/table.css" />
    <link rel="stylesheet" href="../global/print.css" media="print" />
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.webp" />
</head>
<body>
    <div class="content">
        <h2>Weekly Class Schedule</h2>
        <button onclick="window.print()" class="print-button">🖨️ Print Table</button>
        <table class="schedule-table">
            <caption>My Weekly Class Schedule</caption>
            <thead>
                <tr>
                    <th>Day</th>
                    <th colspan="2">Morning</th>
                    <th colspan="2">Afternoon</th>
                </tr>
                <tr>
                    <th></th>
                    <th>8–10 AM</th>
                    <th>10–12 PM</th>
                    <th>1–3 PM</th>
                    <th>3–5 PM</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sunday</td>
                    <td>Math</td>
                    <td rowspan="2">Physics</td>
                    <td>Chemistry</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>English</td>
                    <td rowspan="2">Project Work</td>
                    <td>Biology</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td colspan="2">Computer Science</td>
                    <td>Lab</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>Math</td>
                    <td>Free</td>
                    <td>PE</td>
                    <td>Club</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td colspan="4">Self Study</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php include("./includes/footer.php"); ?>
</body>
</html>
