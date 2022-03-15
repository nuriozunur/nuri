<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
$mail->Host = "mail.dbtdora.com"; // Mail sunucusunun adresi (IP de olabilir)
$mail->Port = 587; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
$mail->IsHTML(true);
$mail->SetLanguage("tr", "phpmailer/language");
$mail->CharSet  ="utf-8";
$mail->Username = "tasarim@dbtdora.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
$mail->Password = "Dbt.2021**"; // Mail adresimizin sifresi
$mail->SetFrom("tasarim@dbtdora.com", $_POST["adsoyad"]); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
$mail->AddAddress("tasarim@dbtdora.com"); // Mailin gönderileceği alıcı adres
$mail->Subject =  $_POST["adsoyad"]; // Email konu başlığı

$isim = $_POST["adsoyad"];
$email = $_POST["email"];
$telefon = $_POST["tel"];
$mesaj = $_POST["mesaj"];



$mail->Body = "<table width='500' border='0'>
        <tr style='width:500px;border-bottom:1px solid #000;border-top:1px solid #000; height:35px'>
        <h3 style='color:red'>Website üzerinden gelen iletişim formu</h3>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
        <td><b>İsim:</b></td> <td>$isim</td>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
        <td><b>Telefon:</b></td> <td>$telefon</td>
        </tr>

        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
        <td><b>Email:</b></td> <td>$email</td>
        </tr>
        
        <tr style='width:500px;border-bottom:1px solid #000; height:35px'>
        <td><b>Mesaj:</b></td> <td>$mesaj</td>
        </tr>
        <tr></table>";


if(!$mail->Send()){
echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
}
else {
	$message = 'Mail gonderildi.';
	echo "<script type='text/javascript'>alert('$message');</script>";
	$geldigi_sayfa = $_SERVER['HTTP_REFERER'];  
	echo "<script>document.location.href=\"$geldigi_sayfa\"</script>";
}
?>