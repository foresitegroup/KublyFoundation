<?php
include_once "inc/dbconfig.php";

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$RCkey."&response=".$_POST['g-recaptcha']);
$responsekeys = json_decode($response);

if ($responsekeys->success) {
  if ($_POST['username'] == "") {
    if ($_POST['name'] != "" && $_POST['email'] != "") {
      $Subject = "Contact From YLC Form";
      $SendTo = "info@ceck.org";
      $Headers = "From: YLC Form <donotreply@charlesekublyfoundation.org>\r\n";
      $Headers .= "Reply-To: ".$_POST['email'] . "\r\n";
      $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

      $Message = "Message from ".$_POST['name']." (".$_POST['email'].")";

      if (isset($_POST['address'])) $Message .= "\n".$_POST['address'];

      if (isset($_POST['citystatezip'])) $Message .= "\n".$_POST['citystatezip'];

      if (isset($_POST['subscribe'])) {
        $data = [
          'email'  => $_POST['email'],
          'status' => 'subscribed'
        ];

        function syncMailchimp($data, $apiKey, $listId) {
          $memberId = md5(strtolower($data['email']));
          $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
          $url = 'https://'.$dataCenter.'.api.mailchimp.com/3.0/lists/'.$listId.'/members/'.$memberId;

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

      if (isset($_POST['ambassador'])) $Message .= "\nI am interested in becoming a CEKF / YLC Ambassador.\n";

      $Message = stripslashes($Message);

      mail($SendTo, $Subject, $Message, $Headers);

      $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";
    } else {
      $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";
    } // required
  } // honeypot
} // recaptcha

echo $feedback;
?>