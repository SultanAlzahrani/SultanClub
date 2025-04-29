<?php
include("config.php");

$email = trim($_POST["email"]);

$sql = "SELECT * FROM feedback WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: /feedback.php?error=This email has already submitted feedback.");
    exit();
}

$sql = "INSERT INTO feedback (first_name, last_name, email, phone, age, city, gender, hobbies, feedback) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$first = $_POST["first_name"];
$last = $_POST["last_name"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$city = $_POST["city"];
$gender = $_POST["gender"];
$hobbies = isset($_POST["hobbies"]) ? implode(",", $_POST["hobbies"]) : "";
$feedback = $_POST["feedback"];

$stmt->bind_param("ssssissss", $first, $last, $email, $phone, $age, $city, $gender, $hobbies, $feedback);

if ($stmt->execute()) {
    header("Location: /feedback.php?success=1");
} else {
    header("Location: /feedback.php?error=Something went wrong.");
}
?>
