<?php
require_once('email/class.php');

// Replace this with your own email address
$siteOwnersEmail = 'mertcanekren@windowslive.com';

error_reporting(0);
if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $email = trim(stripslashes($_POST['contactEmail']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));
    $message = "";
   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Lütfen isminizi yazınız.";
	}
	// Check Email
	if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
		$error['email'] = "Lütfen geçerli bir email adresi yazınız.";
	}
	// Check Message
	if (strlen($contact_message) < 10) {
		$error['message'] = "Lütfen mesaj yazınız. Mesajınız 10 karakterden uzun olmalı..";
	}
   // Subject
	if ($subject == '') { $subject = "İletişim Formu"; }




   if (!$error) {



       $mail_adresiniz = "iletisim@mertcanekren.com";
       $mail_sifreniz  = "ilmaiL1q2w";
       $gidecek_adres  = "mertcanekren@windowslive.com";
       $domain_adresi  = "mertcanekren.com";


       $mail_icerik ="<table>";
       foreach($_POST as $key => $d):
           if($key != "PAGE"){
               $mail_icerik .= '<tr><td>'.strtoupper(str_replace("_"," ",$key))."</td><td>:</td><td>".mysql_real_escape_string(strip_tags(trim($d)))."<br/>";
           }

       endforeach;
       $mail_icerik .= "</table>";

       $mail = new PHPMail();
       $mail->Host       = "smtp.".$domain_adresi;
       $mail->SMTPAuth   = true;
       $mail->Username   = $mail_adresiniz;
       $mail->Password   = $mail_sifreniz;
       $mail->IsSMTP();
       $mail->IsHTML(true);
       $mail->AddAddress($gidecek_adres);
       $mail->From       = $mail_adresiniz;
       $mail->FromName   = "mertcanekren.com";
       $mail->Subject    = "İletişim Formu | mertcanekren.com";
       $mail->Body       = $mail_icerik;
       $mail->AltBody    = "";
       if(!$mail->Send()){
           echo "Mesaj gönderilemedi. Lütfen tekrar deneyiniz.";
       }else{
           echo "OK";
       }

		
	} # end if - no validation error

	else {

		$response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
		$response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
		$response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
		
		echo $response;

	} # end if - there was a validation error

}

?>