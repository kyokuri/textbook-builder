<?php
include("./mPDF/mpdf.php");
//echo $_GET['data'];
//$html = file_get_contents("http://www.yahoo.co.jp");
$mpdf=new mPDF('ja', 'A4');
$mpdf->WriteHTML(rawurldecode($_GET['data']));
$mpdf->Output();
exit;
?>
