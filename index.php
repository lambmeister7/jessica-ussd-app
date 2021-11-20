<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$text = $_POST["text"];

//This is the first menu screen

if ( $text == "" ) {
  $response  = "CON Welcome to the PASSCO app \n";
  $response .= "1. Enter 1 to continue";
}


// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen

else if ($text == "1") {
  $response  = "CON  Select exams type \n";
  $response .= "1. BECE \n";
  $response .= "2. WASSCE \n";
  
}


//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
  $response = "CON Select Subject \n";
  $response .= "1. Maths \n";
  $response .= "2. Science \n";
}

else if ($text == "1*1*1") {
  $response = "CON Select Year \n";
  $response .= "1. 2018 \n";
  $response .= "2. 2019 \n";
  $response .= "Enter 0 to cancel";
}

else if ($text == "1*1*1*1") {
  $response = "Enter your email to receive the PASSCO \n" ;
  $response = "END PASSCO sent to your email";

  

// Menu for a user who selects "2" from the second menu above
// Will be brought to this fourth menu screen
else if ($text == "1") {
  $response  = "CON  Select exams type \n";
  $response .= "1. BECE \n";
  $response .= "2. WASSCE \n";
  
}


//Menu for a user who selects '2' from the second menu above
// Will be brought to this third menu screen
else if ($text == "2*1") {
  $response = "CON Select Subject \n";
  $response .= "1. Maths \n";
  $response .= "2. Science \n";
}

else if ($text == "2*1*1") {
  $response = "CON Select Year \n";
  $response .= "1. 2018 \n";
  $response .= "2. 2019 \n";
  $response .= "Enter 0 to cancel";
}

else if ($text == "2*1*1*1") {
  $response = "Enter your email to receive the PASSCO \n" ;
  $response = "END PASSCO sent to your email";

//echo response

header('Content-type: text/plain');
echo $response


?>
