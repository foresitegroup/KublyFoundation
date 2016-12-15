<?php
session_start();

$salt = "KublyConnectForm";

if ($_POST['confirmationCAP'] == "") {
  if (
      $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
      $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
     )
  {
    $Subject = "Contact From Kubly Foundation Website";
    $SendTo = "krick@charlesekublyfoundation.org";
    $Headers = "From: Contact Form <connectform@charlesekublyfoundation.org/>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    $Headers .= "Bcc: mark@foresitegrp.com\r\n";

    $Message = "Message from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";
    
    if (isset($_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
    $Message .= "\n" . $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])];

    if (isset($_POST[md5('citystatezip' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
    $Message .= "\n" . $_POST[md5('citystatezip' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    if (isset($_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
    $Message .= "\n\n" . $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])];
    
    if (isset($_POST['subscribe'])) {
      $Message .= "\n\nI would like to receive the Charles E. Kubly newsletter and event information.";
    }

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";
    
    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 200 OK");
      echo $feedback;
    }
  } else {
    $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

    if (!empty($_REQUEST['src'])) {
      header("HTTP/1.0 500 Internal Server Error");
      echo $feedback;
    }
  }
}

if (empty($_REQUEST['src'])) {
  $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#connect-form");
}
?>