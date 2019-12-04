
<?php
error_reporting(0);

$msg= $_POST['submit'];
echo "Thank you for submitting your lesson plan. Please print this file or save as a PDF for your records.";  


$msg="";
if(isset($_POST['submit'])){



    /* ****Important!****
    replace name@your-web-site.com below 
    with an email address that belongs to 
    the website where the script is uploaded.
    For example, if you are uploading this script to
    www.my-web-site.com, then an email like
    form@my-web-site.com is good.
    */


	$from_add = "lessonplan@bmslessonplan.x10host.com"; 

	$to_add = "prayerwm11@gmail.com";
       
	$subject = "Drexel Lesson Plan";


        
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #777;" cellpadding="10">';

$message .= "<tr style='background: #eee;'>
<td><strong>Teacher</strong> </td>
<td>" . strip_tags($_POST['fullname']) . "</td>
<td><strong>Email</strong> </td>
<td>" . strip_tags($_POST['email']) . "</td>
<td><strong>Date</strong> </td>
<td>" . strip_tags($_POST['tDate']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Lesson Title</strong> </td>
<td>" . strip_tags($_POST['lessontitle']) . "</td>
<td><strong>Unit:</strong>". strip_tags($_POST['unit']) ."</td>
<td></td>
<td><strong>Text</strong> </td>
<td>" . strip_tags($_POST['text']) . "</td>
</tr>";


$message .= "<tr style='background: #eee;'>
<td><strong>Course</strong> </td>
<td>" . strip_tags($_POST['course']) . "</td>
<td><strong>Lesson Type:</strong></td>
<td>" . strip_tags($_POST['LessonType']) . "</td>
<td><strong>Lexile</strong> </td>
<td>" . strip_tags($_POST['lexile']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td style='background: ##041690;'> </td>
<td><strong>Monday</strong> </td>
<td><strong>Tuesday</strong> </td>
<td><strong>Wednesday</strong> </td>
<td><strong>Thursday</strong> </td>
<td><strong>Friday</strong> </td>
</tr>";




$message .= "<tr style='background: #eee;'>
<td><strong> Grade 6 Standards</strong> </td>
<td>" . strip_tags($_POST['mathshifts1']) . " " . strip_tags($_POST['ss1']) . "</td>
<td>" . strip_tags($_POST['mathshifts2']) . " " . strip_tags($_POST['ss2']) . "</td>
<td>" . strip_tags($_POST['mathshifts3']) . " " . strip_tags($_POST['ss3']) . " </td>
<td>" . strip_tags($_POST['mathshifts4']) . " " . strip_tags($_POST['ss4']) . " </td>
<td>" . strip_tags($_POST['mathshifts5']) . " " . strip_tags($_POST['ss5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong> Grade 7 Standards</strong> </td>
<td>" . strip_tags($_POST['sgs1']) . " " . strip_tags($_POST['sgss1']) . "</td>
<td>" . strip_tags($_POST['sgs2']) . " " . strip_tags($_POST['sgss2']) . "</td>
<td>" . strip_tags($_POST['sgs3']) . " " . strip_tags($_POST['sgss3']) . "</td>
<td>" . strip_tags($_POST['sgs4']) . " " . strip_tags($_POST['sgss4']) . "</td>
<td>" . strip_tags($_POST['sgs5']) . " " . strip_tags($_POST['sgss5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Grade 8 standards</strong> </td>
<td>" . strip_tags($_POST['egs1']) . " " . strip_tags($_POST['egss1']) . "</td>
<td>" . strip_tags($_POST['egs2']) . " " . strip_tags($_POST['egss2']) . "</td>
<td>" . strip_tags($_POST['egs3']) . " " . strip_tags($_POST['egss3']) . "</td>
<td>" . strip_tags($_POST['egs4']) . " " . strip_tags($_POST['egss4']) . "</td>
<td>" . strip_tags($_POST['egs5']) . " " . strip_tags($_POST['egss5']) . "</td>
</tr>";


$message .= "<tr style='background: #eee;'>
<td><strong>Algebra I</strong> </td>
<td>" . strip_tags($_POST['a1']) . "</td>
<td>" . strip_tags($_POST['a2']) . "</td>
<td>" . strip_tags($_POST['a3']) . "</td>
<td>" . strip_tags($_POST['a4']) . "</td>
<td>" . strip_tags($_POST['a5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Physical Science</strong> </td>
<td>" . strip_tags($_POST['ps1']) . "</td>
<td>" . strip_tags($_POST['ps2']) . "</td>
<td>" . strip_tags($_POST['ps3']) . "</td>
<td>" . strip_tags($_POST['ps4']) . "</td>
<td>" . strip_tags($_POST['ps5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Chemistry</strong> </td>
<td>" . strip_tags($_POST['chemistry1']) . "</td>
<td>" . strip_tags($_POST['chemistry2']) . "</td>
<td>" . strip_tags($_POST['chemistry3']) . "</td>
<td>" . strip_tags($_POST['chemistry4']) . "</td>
<td>" . strip_tags($_POST['chemistry5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>SPI</strong> </td>
<td>" . strip_tags($_POST['spi1']) . "</td>
<td>" . strip_tags($_POST['spi2']) . "</td>
<td>" . strip_tags($_POST['spi3']) . "</td>
<td>" . strip_tags($_POST['spi4']) . "</td>
<td>" . strip_tags($_POST['spi5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Objective</strong> </td>
<td>" . strip_tags($_POST['os1']) ." " . strip_tags($_POST['verbs1']) ." " . strip_tags($_POST['objective1']) ."</td>
<td>" . strip_tags($_POST['os2']) ." " . strip_tags($_POST['verbs2']) ." " . strip_tags($_POST['objective2']) ."</td>
<td>" . strip_tags($_POST['os3']) ." " . strip_tags($_POST['verbs3']) ." " . strip_tags($_POST['objective3']) ."</td>
<td>" . strip_tags($_POST['os4']) ." " . strip_tags($_POST['verbs4']) ." " . strip_tags($_POST['objective4']) ."</td>
<td>" . strip_tags($_POST['os5']) ." " . strip_tags($_POST['verbs5']) ." " . strip_tags($_POST['objective5']) ."</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Guided Questions</strong> </td>
<td>" . strip_tags($_POST['qs1']) . " " . strip_tags($_POST['gq1']) . "</td>
<td>" . strip_tags($_POST['qs2']) . " " . strip_tags($_POST['gq2']) . "</td>
<td>" . strip_tags($_POST['qs3']) . " " . strip_tags($_POST['gq3']) . "</td>
<td>" . strip_tags($_POST['qs4']) . " " . strip_tags($_POST['gq4']) . "</td>
<td>" . strip_tags($_POST['qs5']) . " " . strip_tags($_POST['gq5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Bellwork</strong> </td>
<td>" . strip_tags($_POST['BW1']) . "</td>
<td>" . strip_tags($_POST['BW2']) . "</td>
<td>" . strip_tags($_POST['BW3']) . "</td>
<td>" . strip_tags($_POST['BW4']) . "</td>
<td>" . strip_tags($_POST['BW5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong> S&E Practices</strong> </td>
<td>" . strip_tags($_POST['engineering1']) . " </td>
<td>" . strip_tags($_POST['engineering2']) . " </td>
<td>" . strip_tags($_POST['engineering3']) . " </td>
<td>" . strip_tags($_POST['engineering4']) . " </td>
<td>" . strip_tags($_POST['engineering5']) . " </td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong> Prior Knowledge</strong> </td>
<td>" . strip_tags($_POST['PK1']) . " </td>
<td>" . strip_tags($_POST['PK2']) . " </td>
<td>" . strip_tags($_POST['PK3']) . " </td>
<td>" . strip_tags($_POST['PK4']) . " </td>
<td>" . strip_tags($_POST['PK5']) . " </td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Vocabulary</strong> </td>
<td>" . strip_tags($_POST['voc1']) . "</td>
<td>" . strip_tags($_POST['voc2']) . "</td>
<td>" . strip_tags($_POST['voc3']) . "</td>
<td>" . strip_tags($_POST['voc4']) . "</td>
<td>" . strip_tags($_POST['voc5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Material and Resources</strong> </td>
<td>" . strip_tags($_POST['mr1']) . "</td>
<td>" . strip_tags($_POST['mr2']) . "</td>
<td>" . strip_tags($_POST['mr3']) . "</td>
<td>" . strip_tags($_POST['mr4']) . "</td>
<td>" . strip_tags($_POST['mr5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Instructional Tasks <br>(Scaffolds that Increase Student Engagement)</strong> </td>
<td>" . strip_tags($_POST['it1']) . "</td>
<td>" . strip_tags($_POST['it2']) . "</td>
<td>" . strip_tags($_POST['it3']) . "</td>
<td>" . strip_tags($_POST['it4']) . "</td>
<td>" . strip_tags($_POST['it5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Instructional Tasks Options</strong> </td>
<td>" . strip_tags($_POST['itl1']) . "</td>
<td>" . strip_tags($_POST['itl2']) . "</td>
<td>" . strip_tags($_POST['itl3']) . "</td>
<td>" . strip_tags($_POST['itl4']) . "</td>
<td>" . strip_tags($_POST['itl5']) . "</td>
</tr>";
$message .= "<tr style='background: #eee;'>
<td><strong>Closure</strong> </td>
<td>" . strip_tags($_POST['cs1']) . "</td>
<td>" . strip_tags($_POST['cs2']) . "</td>
<td>" . strip_tags($_POST['cs3']) . "</td>
<td>" . strip_tags($_POST['cs4']) . "</td>
<td>" . strip_tags($_POST['cs5']) . "</td>
</tr>";


$message .= "<tr style='background: #eee;'>
<td><strong>Homework</strong> </td>
<td>" . strip_tags($_POST['hw1']) . "</td>
<td>" . strip_tags($_POST['hw2']) . "</td>
<td>" . strip_tags($_POST['hw3']) . "</td>
<td>" . strip_tags($_POST['hw4']) . "</td>
<td>" . strip_tags($_POST['hw5']) . "</td>
</tr>";



$message .= "<tr style='background: #eee;'>
<td><strong>Assessment/Exit Ticket</strong> </td>
<td>" . strip_tags($_POST['asm1']) . "</td>
<td>" . strip_tags($_POST['asm2']) . "</td>
<td>" . strip_tags($_POST['asm3']) . "</td>
<td>" . strip_tags($_POST['asm4']) . "</td>
<td>" . strip_tags($_POST['asm5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Details</strong> </td>
<td>" . strip_tags($_POST['asm1a']) . "</td>
<td>" . strip_tags($_POST['asm2a']) . "</td>
<td>" . strip_tags($_POST['asm3a']) . "</td>
<td>" . strip_tags($_POST['asm4a']) . "</td>
<td>" . strip_tags($_POST['asm5a']) . "</td>
</tr>";


$message .= "<tr style='background: #eee;'>
<td><strong>Intervention</strong> </td>
<td>" . strip_tags($_POST['Intervention1']) . "</td>
<td>" . strip_tags($_POST['Intervention2']) . "</td>
<td>" . strip_tags($_POST['Intervention3']) . "</td>
<td>" . strip_tags($_POST['Intervention4']) . "</td>
<td>" . strip_tags($_POST['Intervention5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Enrichment</strong> </td>
<td>" . strip_tags($_POST['Enrichment1']) . "</td>
<td>" . strip_tags($_POST['Enrichment2']) . "</td>
<td>" . strip_tags($_POST['Enrichment3']) . "</td>
<td>" . strip_tags($_POST['Enrichment4']) . "</td>
<td>" . strip_tags($_POST['Enrichment5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Addt'l Enrichment/Intervention <br>(Modifications & Accommodation) </strong> </td>
<td>" . strip_tags($_POST['tb1']) . "</td>
<td>" . strip_tags($_POST['tb2']) . "</td>
<td>" . strip_tags($_POST['tb3']) . "</td>
<td>" . strip_tags($_POST['tb4']) . "</td>
<td>" . strip_tags($_POST['tb5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Rigor</strong> </td>
<td>" . strip_tags($_POST['Rigor1']) . "</td>
<td>" . strip_tags($_POST['Rigor2']) . "</td>
<td>" . strip_tags($_POST['Rigor3']) . "</td>
<td>" . strip_tags($_POST['Rigor4']) . "</td>
<td>" . strip_tags($_POST['Rigor5']) . "</td>
</tr>";

$message .= "<tr style='background: #eee;'>
<td><strong>Higher Level Practices</strong> </td>
<td>" . strip_tags($_POST['comments1']) . "</td>
<td>" . strip_tags($_POST['comments2']) . "</td>
<td>" . strip_tags($_POST['comments3']) . "</td>
<td>" . strip_tags($_POST['comments4']) . "</td>
<td>" . strip_tags($_POST['comments5']) . "</td>
</tr>";






$message .= "</table>";
$message .= "</body></html>";




      


	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
        $header .= "CC: ".$cc."\r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";

    $headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
   
	
	
	if(mail($to_add,$subject,$message,$headers)) 
	{
		$msg = "Mail sent OK";
	} 
	else 
	{
 	   $msg = "Error sending email!";
	}

echo "<TABLE width:100%; border=5px; cellpadding= 10px;>
<tr >
<td ></td>
<td></td>
<td><strong>Drexel Lesson Plan</strong> </td>
<td><strong>2019-2020</strong> </td>
<td></td>
<td></td>
</tr>";




echo 
"<td ><strong>Name: {$_POST['fullname']}</strong></td>";
echo "<td><strong>Email: {$_POST['email']}</strong></td>";
echo"<td></td>";
echo"<td></td>";
echo"<td></td>";
echo "<td><strong>Date: {$_POST['tDate']}</strong></td></tr>";


echo "<td><strong>Lesson Title: {$_POST['lessontitle']}</strong></td>";
echo "<td><strong>Text Utilized: {$_POST['text']}</strong></td>";
echo "<td><strong>Lexile: {$_POST['lexile']}</strong></td>";
echo"<td><strong>Lesson Type: {$_POST['LessonType']}</strong></td>";
echo "<td><strong>Course: {$_POST['course']}</strong></td>";
echo"<td><strong>Unit:{$_POST['unit']}</strong></td>
</tr>";

echo
"<td></td>";
echo "<td><strong>Monday</strong> </td>";
echo "<td><strong>Tuesday</strong> </td>";
echo "<td><strong>Wednesday</strong> </td>";
echo "<td><strong>Thursday</strong> </td>";
echo "<td><strong>Friday</strong> </td>
 </tr>";


echo "<td><strong>Grade 6 Standards:</strong></td>";
echo "<td>{$_POST['mathshifts1']}{$_POST['ss1']}</td>";
echo "<td>{$_POST['mathshifts2']}{$_POST['ss2']}</td>";
echo "<td>{$_POST['mathshifts3']}{$_POST['ss3']}</td>";
echo "<td>{$_POST['mathshifts4']}{$_POST['ss4']}</td>";
echo "<td>{$_POST['mathshifts5']}{$_POST['ss5']}</td> </tr>";


echo "<td><strong>Grade 7 Standards</strong></td>";
echo "<td>{$_POST['sgs1']}{$_POST['sgss1']}</td>";
echo "<td>{$_POST['sgs2']}{$_POST['sgss2']}</td>";
echo "<td>{$_POST['sgs3']}{$_POST['sgss3']}</td>";
echo "<td>{$_POST['sgs4']}{$_POST['sgss4']}</td>";
echo "<td>{$_POST['sgs5']}{$_POST['sgss5']}</td> </tr>";

echo "<td><strong>Grade 8 Standards</strong></td>";
echo "<td>{$_POST['egs1']}{$_POST['egss1']}</td>";
echo "<td>{$_POST['egs2']}{$_POST['egss2']}</td>";
echo "<td>{$_POST['egs3']}{$_POST['egss3']}</td>";
echo "<td>{$_POST['egs4']}{$_POST['egss4']}</td>";
echo "<td>{$_POST['egs5']}{$_POST['egss5']}</td> </tr>";

echo "<td><strong>Algebra I</strong></td>";
echo "<td>{$_POST['a1']}</td>";
echo "<td>{$_POST['a2']}</td>";
echo "<td>{$_POST['a3']}</td>";
echo "<td>{$_POST['a4']}</td>";
echo "<td>{$_POST['a5']}</td> </tr>";


echo "<td><strong>Physical Science</strong></td>";
echo "<td>{$_POST['ps1']}</td>";
echo "<td>{$_POST['ps2']}</td>";
echo "<td>{$_POST['ps3']}</td>";
echo "<td>{$_POST['ps4']}</td>";
echo "<td>{$_POST['ps5']}</td> </tr>";


echo "<td><strong>Chemistry</strong></td>";
echo "<td>{$_POST['chemistry1']}</td>";
echo "<td>{$_POST['chemistry2']}</td>";
echo "<td>{$_POST['chemistry3']}</td>";
echo "<td>{$_POST['chemistry4']}</td>";
echo "<td>{$_POST['chemistry5']}</td> </tr>";

echo "<td><strong>SPI</strong></td>";
echo "<td>{$_POST['spi1']}</td>";
echo "<td>{$_POST['spi2']}</td>";
echo "<td>{$_POST['spi3']}</td>";
echo "<td>{$_POST['spi4']}</td>";
echo "<td>{$_POST['spi5']}</td> </tr>";

echo "<td><strong>Objective</strong></td>";
echo "<td>{$_POST['os1']} {$_POST['verbs1']} {$_POST['objective1']}</td>";
echo "<td>{$_POST['os2']} {$_POST['verbs2']} {$_POST['objective2']}</td>";
echo "<td>{$_POST['os3']} {$_POST['verbs3']} {$_POST['objective3']}</td>";
echo "<td>{$_POST['os4']} {$_POST['verbs4']} {$_POST['objective4']}</td>";
echo "<td>{$_POST['os5']} {$_POST['verbs5']} {$_POST['objective5']}</td> </tr>";

echo "<td><strong>Guided Question</strong></td>";
echo "<td>{$_POST['qs1']} {$_POST['gq1']}</td>";
echo "<td>{$_POST['qs2']} {$_POST['gq2']}</td>";
echo "<td>{$_POST['qs3']} {$_POST['gq3']}</td>";
echo "<td>{$_POST['qs4']} {$_POST['gq4']}</td>";
echo "<td>{$_POST['qs5']} {$_POST['gq5']}</td> </tr>";


echo "<td><strong>Bellwork</strong></td>";
echo "<td>{$_POST['BW1']}</td>";
echo "<td>{$_POST['BW2']}</td>";
echo "<td>{$_POST['BW3']}</td>";
echo "<td>{$_POST['BW4']}</td>";
echo "<td>{$_POST['BW5']}</td> </tr>";

echo "<td><strong>S&E Practices</strong></td>";
echo "<td>{$_POST['engineering1']}</td>";
echo "<td>{$_POST['engineering2']}</td>";
echo "<td>{$_POST['engineering3']}</td>";
echo "<td>{$_POST['engineering4']}</td>";
echo "<td>{$_POST['engineering5']}</td> </tr>";

echo "<td><strong>Prior Knowledge</strong></td>";
echo "<td>{$_POST['PK1']}</td>";
echo "<td>{$_POST['PK2']}</td>";
echo "<td>{$_POST['PK3']}</td>";
echo "<td>{$_POST['PK4']}</td>";
echo "<td>{$_POST['PK5']}</td> </tr>";

echo "<td><strong>Vocabulary</strong></td>";
echo "<td>{$_POST['voc1']}</td>";
echo "<td>{$_POST['voc2']}</td>";
echo "<td>{$_POST['voc3']}</td>";
echo "<td>{$_POST['voc4']}</td>";
echo "<td>{$_POST['voc5']}</td> </tr>";

echo "<td><strong>Material and Resources</strong></td>";
echo "<td>{$_POST['mr1']}</td>";
echo "<td>{$_POST['mr2']}</td>";
echo "<td>{$_POST['mr3']}</td>";
echo "<td>{$_POST['mr4']}</td>";
echo "<td>{$_POST['mr5']}</td> </tr>";

echo "<td><strong>Instructional Options </strong></td>";
echo "<td>{$_POST['itl1']}</td>";
echo "<td>{$_POST['itl2']}</td>";
echo "<td>{$_POST['itl3']}</td>";
echo "<td>{$_POST['itl4']}</td>";
echo "<td>{$_POST['itl5']}</td> </tr>";

echo "<td><strong>Instructional Tasks<br>(Scaffolds that Increase Student Engagement)</strong></td>";
echo "<td>{$_POST['it1']}</td>";
echo "<td>{$_POST['it2']}</td>";
echo "<td>{$_POST['it3']}</td>";
echo "<td>{$_POST['it4']}</td>";
echo "<td>{$_POST['it5']}</td> </tr>";

echo "<td><strong>Closure</strong></td>";
echo "<td>{$_POST['cs1']}</td>";
echo "<td>{$_POST['cs2']}</td>";
echo "<td>{$_POST['cs3']}</td>";
echo "<td>{$_POST['cs4']}</td>";
echo "<td>{$_POST['cs5']}</td> </tr>";

echo "<td><strong>Homework</strong></td>";
echo "<td>{$_POST['hw1']}</td>";
echo "<td>{$_POST['hw2']}</td>";
echo "<td>{$_POST['hw3']}</td>";
echo "<td>{$_POST['hw4']}</td>";
echo "<td>{$_POST['hw5']}</td> </tr>";

echo "<td><strong>Assessment/Exit Ticket</strong></td>";
echo "<td>{$_POST['asm1']}</td>";
echo "<td>{$_POST['asm2']}</td>";
echo "<td>{$_POST['asm3']}</td>";
echo "<td>{$_POST['asm4']}</td>";
echo "<td>{$_POST['asm5']}</td> </tr>";

echo "<td><strong>Details</strong></td>";
echo "<td>{$_POST['asm1a']}</td>";
echo "<td>{$_POST['asm2a']}</td>";
echo "<td>{$_POST['asm3a']}</td>";
echo "<td>{$_POST['asm4a']}</td>";
echo "<td>{$_POST['asm5a']}</td> </tr>";

echo "<td><strong>Intervention:</strong></td>";
echo "<td> {$_POST['Intervention1']}</td>";
echo "<td> {$_POST['Intervention2']}</td>";
echo "<td> {$_POST['Intervention3']}</td>";
echo "<td> {$_POST['Intervention4']}</td>";
echo "<td> {$_POST['Intervention5']}</td> </tr>";

echo "<td><strong>Enrichment</strong></td>";
echo "<td>{$_POST['Enrichment1']}</td>";
echo "<td>{$_POST['Enrichment2']}</td>";
echo "<td>{$_POST['Enrichment3']}</td>";
echo "<td>{$_POST['Enrichment4']}</td>";
echo "<td>{$_POST['Enrichment5']}</td> </tr>";

echo "<td><strong>Addt'l Enrichment/Intervention<br> (Modification & Accommodation) </strong></td>";
echo "<td>{$_POST['tb1']}</td>";
echo "<td>{$_POST['tb2']}</td>";
echo "<td>{$_POST['tb3']}</td>";
echo "<td>{$_POST['tb4']}</td>";
echo "<td>{$_POST['tb5']}</td> </tr>";


echo "<td><strong>Rigor</strong></td>";
echo "<td>{$_POST['Rigor1']}</td>";
echo "<td>{$_POST['Rigor2']}</td>";
echo "<td>{$_POST['Rigor3']}</td>";
echo "<td>{$_POST['Rigor4']}</td>";
echo "<td>{$_POST['Rigor5']}</td> </tr>";


echo "<td><strong>Higher Level Practices</strong></td>";
echo "<td>{$_POST['comments1']}";
echo "<td>{$_POST['comments2']}";
echo "<td>{$_POST['comments3']}";
echo "<td>{$_POST['comments4']}";
echo "<td>{$_POST['comments5']} </tr>";







  
















}
?>













