<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    
    // Store the feedback in a database or send it to a email address
    // ...
    
    echo "Thank you for submitting your feedback!";
  }
?>      