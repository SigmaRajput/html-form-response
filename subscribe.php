<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Validate the email address (optional but recommended)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Append the email address to a text file
        $file = 'subscribers.txt'; // Replace with the path to your text file
        $current = file_get_contents($file);
        $current .= $email . "\n";
        file_put_contents($file, $current);
        
        echo "Thank you for subscribing!";
    } else {
        echo "Invalid email address. Please enter a valid email.";
    }
}
?>
