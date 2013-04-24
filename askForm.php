<?php  
header("Content-Type:text/html; charset=big5");
$to = "abc.hk@gmail.com";
$subject = "Subject:Message from HKSHP Suggestion Box";
$a1 = $_REQUEST['ask1'] ;
$a2 = $_REQUEST['ask2'] ;
$a3 = $_REQUEST['ask3'] ;
$a4 = $_REQUEST['ask4'] ;
$a5 = $_REQUEST['ask5'] ;
$a6 = $_REQUEST['ask6'] ;
$a7 = $_REQUEST['ask7'] ;
$a8 = $_REQUEST['ask8'] ;
$a9 = $_REQUEST['ask9'] ;
$a10 = $_REQUEST['ask10'] ;
$a11 = $_REQUEST['ask11'] ;
$h1 = $_REQUEST['usremail'] ;
$h2 = $_REQUEST['classify'] ;
$h3 = $_REQUEST['bdaymonth'] ;
$h4 = $_REQUEST['requestname'] ;
$h5 = $_REQUEST['title'] ;

$totalmessage = "
    Name:       $h4 \n
    Title:      $h5 \n
    Classification: $h2 \n 
    Date:       $h3 \n
    E-mail:     $h1 \n 
    Question1:  $a1 \n
    Question2:  $a2 \n
    Question3:  $a3 \n
    Question4:  $a4 \n
    Question5:  $a5 \n
    Question6:  $a6 \n
    Question7:  $a7 \n
    Question8:  $a8 \n
    Question9:  $a9 \n
    Question10: $a10 \n
    Question11: $a11 \n";
$headers = "From: $h1";
$sent = mail($to, $subject, $totalmessage, $headers);
if($sent)
{
 echo 'Message from Hong Kong Society of Humanities. Thank you for submitting a form!';		
}
 else
 {
 print "We encountered an error sending your mail";
 }
 ?>
