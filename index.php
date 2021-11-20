<?php
// Reads the variables sent via POST
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];

//This is the first menu screen
if ($text == "") {
    $response = "CON Welcome to The PASSCO App \n";
    $response .= "1. Enter 1 to continue";
}

// Menu for a user who selects '1' from the first menu// Will be brought to this second menu screen
elseif ($text == "1") {
    $response = "CON  Please select an exams type below \n";
    $response .= "1. BECE \n";
    $response .= "2. WASSCE \n";
    
}

//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
elseif ($text == "1*1") {
    $response = "CON Please select your subject \n";
    $response .= "1. Maths \n";
    $response .= "2. Science \n";
} elseif ($text == "1*1*1") {
    $response = "CON Please select year for Maths questions \n";
    $response .= "1. 2018 \n";
    $response .= "2. 2019 \n";
    $response .= "Enter 0 to cancel";
  elseif ($text == "1*1*2") {
        $response = "CON Please select year for Science questions \n";
        $response .= "1. 2018 \n";
        $response .= "2. 2019 \n";
        $response .= "Enter 0 to cancel";
} elseif ($text == "1*1*1*1") {
    $response = "END Your Table reservation for 2 has been booked";
} elseif ($text == "1*1*1*0") {
    $response = "END Your Table reservation for 2 has been canceled";
}
// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
elseif ($text == "1*2") {
    $response = "CON You are about to book a table for 4 \n";
    $response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who selects "1" from the fourth menu screen
elseif ($text == "1*2*1") {
    $response = "CON Table for 4 cost -N- 150,000.00 \n";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
} elseif ($text == "1*2*1*1") {
    $response = "END Your Table reservation for 4 has been booked";
} elseif ($text == "1*2*1*0") {
    $response = "END Your Table reservation for 4 has been canceled";
}
// Menu for a user who enters "3" from the second menu above
// Will be brought to this fifth menu screen
elseif ($text == "1*3") {
    $response = "CON You are about to book a table for 6 \n";
    $response .= "Please Enter 1 to confirm \n";
}

// Menu for a user who enters "1" from the fifth menu
elseif ($text == "1*3*1") {
    $response = "CON Table for 6 cost -N- 250,000.00 \n";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
} elseif ($text == "1*3*1*1") {
    $response = "END Your Table reservation for 6 has been booked";
} elseif ($text == "1*3*1*0") {
    $response = "END Your Table reservation for 6 has been canceled";
}
// Menu for a user who enters "4" from the second menu above
// Will be brought to this sixth menu screen
elseif ($text == "1*4") {
    $response = "CON You are about to book a table for 8 \n";
    $response .= "Please Enter 1 to confirm \n";
}
// Menu for a user who enters "1" from the sixth menu
elseif ($text == "1*4*1") {
    $response = "CON Table for 8 cost -N- 250,000.00 \n";
    $response .= "Enter 1 to continue \n";
    $response .= "Enter 0 to cancel";
} elseif ($text == "1*4*1*1") {
    $response = "END Your Table reservation for 8 has been booked";
} elseif ($text == "1*4*1*0") {
    $response = "END Your Table reservation for 8 has been canceled";
}

//echo response
header('Content-type: text/plain');
echo $response;
?>

