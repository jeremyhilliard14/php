<?php
	include 'includes/db_connect.php';


	print_r($_POST);

$title = "'".$_POST['title']."'"; 
$header = "'".$_POST['header']."'";
$header_text = "'".$_POST['header_text']."'";
$body_text = "'".$_POST['body_text']."'"; 
$lower_image = "'".$_POST['lower_image']."'";
$lower_header = "'".$_POST['lower_header']."'";
$lower_body = "'".$_POST['lower_body']."'";
$lower_image_2 = "'".$_POST['lower_image_2']."'"; 
$lower_header_2 = "'".$_POST['lower_header_2']."'";
$lower_body_2 = "'".$_POST['lower_body_2']."'";

$query = 'INSERT INTO promos 
    (title, header, header_text, body_text, lower_image, lower_header, lower_body, lower_image_2, lower_header_2, lower_body_2) 
    VALUES 
    ('.$title.','.$header.','.$header_text.','.$body_text.','.$lower_image.','.$lower_header.','.$lower_body.','.$lower_image_2.','.$lower_body_2.','.$lower_header_2.')';

print $query;
exit;


    $result = mysql_query($query);
    print mysql_error();
    print "<br />";
    print 'Finished';

?>
