<?php
$salt = "KublyNewsletterForm";

if ($_POST['confirmationCAP'] == "") {
  if ($_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "") {
    $Subject = "Kubly Foundation Newsletter Signup";
    $SendTo = "info@charlesekublyfoundation.org";
    $Headers = "From: Contact Form <newsletterform@charlesekublyfoundation.org/>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    $Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = "I would like to receive the Charles E. Kubly newsletter and event information.\n" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);

    $nlfeedback = "Thank you for signing up for our newsletter!";
    
    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $nlfeedback;
    }
  } else {
    $nlfeedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $nlfeedback;
    }
  }
}
?>