<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "office@geo-oprema.rs";
    $email_bcc = "nenadcv@gmail.com";
    $email_subject = "Your email subject line";
     
     
    function died($error) {
      $link_back=URL.'kontakt';
        // your error code can go here
        echo "Zao nam je, ali imate greske u vasoj formi.Molimo ispravite ih.Hvala ";
        echo "Greske ce biti ispisane ispod.<br /><br />";
        echo $error."<br /><br />";
        echo "Vratite se nazad i ispravite ih.<br /><br />";
        echo "<a href='".$link_back."'>Nazad na kontakt stranu</a>";
        // die();
    }

    function clean_val($val){
      return $val;
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['formMessage'])) {
      $error_msg='We are sorry, but there appears to be a problem with the form you submitted.<br/><br/>';
        if(!isset($_POST['name']) || empty($_POST['name'])){
          $error_msg.= 'Polje Ime ne moze biti prazno!<br/>';
        }
        if(!isset($_POST['email']) || empty($_POST['email'])){
          $error_msg.= 'Polje Email ne moze biti prazno!<br/>';
        }
        if(!isset($_POST['formMessage']) || empty($_POST['formMessage'])){
          $error_msg.= 'Polje Poruka ne moze biti prazno!<br/>';
        }
        died($error_msg);    
    }
     
    $name = clean_val($_POST['name']); // required
    $formMessage = clean_val($_POST['formMessage']); // required
    $email_from = clean_val($_POST['email']);
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Email adresa nije validna.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'Ime koje ste upisali nije validno.<br />';
  }
  
  if(strlen($formMessage) < 2) {
    $error_message .= 'Poruka koju ste upisali nije validna.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }else{
        $email_message = "Form details below.\n\n";
         
        function clean_string($string) {
          $bad = array("content-type","bcc:","to:","cc:","href");
          return str_replace($bad,"",$string);
        }
         
        $email_message .= "Name: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Message: ".clean_string($formMessage)."\n";
         
         
    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);  
    ?>
     
    <!-- include your own success html here -->   
    <ul>
      <li>Hvala vam na vasem kontaktu.</li>
      <li>Bicemo u kontaktu veoma brzo.</li>
      <li>Hvala</li>
      <br/>
      <li><a href="<?php echo URL; ?>proizvodi">Vratite se na proizvode</a></li>
    </ul>    
    <?php  
  }

}