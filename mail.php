<?php
//
// *** To Email ***
$to = 'dhruveshpatel2004@gmail.com';
//
// *** Subject Email ***
$subject = 'Subject to Here';
//
// *** Content Email ***
$content = 'Content to Here';
//
//*** Head Email ***
$headers = "From: smartautomation7093@gmail.com\r\n";
//
//*** Show the result... ***
if (mail($to, $subject, $content, $headers))
{
	echo "Success !!!";
} 
else 
{
   	echo "ERROR";
}