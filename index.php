<?php define('FPDF_FONTPATH','./font/');
 require('./fpdf.php'); 
 $pdf = new FPDF(); 
 $pdf -> AddFont('Ansana','B','angsab.php'); 
 $pdf -> SetFont('Ansana','B',32); 
 $pdf -> SetTextColor(0,0,255); 
//  $pdf -> Image('pic.jpg', 20 , 100 , 50 , 50 ); 
 $pdf -> AddPage(); 
 $pdf -> Text(100,100,iconv('UTF-8', 'cp874', 'สวัสดี')); 
 $pdf -> AddPage('L'); 
 $pdf -> Text(100,100,iconv('UTF-8', 'cp874', "ลาก่อน")); 
 $pdf -> Output( );
  ?>