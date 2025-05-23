<?php
session_start();

require_once "inc/dbconfig.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$RCkey."&response=".$_POST['g-recaptcha-response']);
$responsekeys = json_decode($response);

$salt = "KublyConnectForm";

if ($responsekeys->success) {
  if ($_POST['confirmationCAP'] == "") {
    if (
        $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
       )
    {
      $Subject = "Contact From Kubly Foundation Website";
      $SendTo = "krick@charlesekublyfoundation.org";
      $Headers = "From: Contact Form <connectform@charlesekublyfoundation.org>\r\n";
      $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
      $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

      $Message = "Message from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

      if (isset($_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n" . $_POST[md5('address' . $_POST['ip'] . $salt . $_POST['timestamp'])];

      if (isset($_POST[md5('citystatezip' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n" . $_POST[md5('citystatezip' . $_POST['ip'] . $salt . $_POST['timestamp'])];

      if (isset($_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])]))
      $Message .= "\n\n" . $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])];

      if (isset($_POST['subscribe'])) {
        $data = [
          'email'  => $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])],
          'status' => 'subscribed'
        ];

        function syncMailchimp($data, $apiKey, $listId) {
          $memberId = md5(strtolower($data['email']));
          $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
          $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

          $json = json_encode([
            'email_address' => $data['email'],
            'status'        => $data['status']
          ]);

          $ch = curl_init($url);

          curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
          curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_TIMEOUT, 10);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

          $result = curl_exec($ch);
          $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          curl_close($ch);

          return $httpCode;
        }

        syncMailchimp($data, $apiKey, $listId);
      }

      if (isset($_POST['ambassador'])) $Message .= "\nI am interested in becoming a CEKF Ambassador.\n";

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
}

if (empty($_REQUEST['src'])) {
  // $_SESSION['feedback'] = $feedback;
  header("Location: " . $_POST['referrer'] . "#connect-form");
}
?>