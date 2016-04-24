<?php
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="sample.csv"');



// very simple to increment with i++ if looping through a database result 
$user_CSV[1] = array('Anjali', '01', 34);
$user_CSV[2] = array('Rohan', '02', 55);
$user_CSV[3] = array('Archi', '03', 15);
$user_CSV[4] = array('Atishay', '04', 15);
$user_CSV[5] = array('Aayush', '05', 15);
$user_CSV[6] = array('Aarti', '06', 15);
$user_CSV[7] = array('meena', '07', 15);
$user_CSV[8] = array('Soniya', '08', 15);
$user_CSV[9] = array('monika', '09', 15);
$user_CSV[10] = array('vedanika', '10', 15);
$user_CSV[11] = array('Anee', '11', 15);
$user_CSV[12] = array('Sumi', '12', 15);
$user_CSV[13] = array('shyron', '13', 15);
$user_CSV[14] = array('tee', '14', 15);
$user_CSV[15] = array('venu', '15', 15);
$user_CSV[16] = array('Bhanu', '16', 15);

$fp = fopen('php://output', 'w');
foreach ($user_CSV as $line) {
    // though CSV stands for "comma separated value"
    // in many countries (including France) separator is ";"
    fputcsv($fp, $line, ',');
}
fclose($fp);
?>