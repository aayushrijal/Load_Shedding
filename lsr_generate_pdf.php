<?php
header('Context-type : application/.pdf');   //code not effective
include('downloaded_libraries/font/courier.php');   // for hosting in server
include('downloaded_libraries/fpdf.php');           // for hosting in server
//include('courier.php');	code not working
//include('fpdf.php');          code not working
//include('/var/www/downloaded_libraries/font/courier.php');  for my local computer
//include('/var/www/downloaded_libraries/fpdf.php');  for my local computer
/* a variable set to generate the pdf */
	$g1 = array("03-09","13-18");
	$g2 = array("04-10","14-19");
	$g3 = array("05-11","15-21");
	$g4 = array("06-13","17-22");
	$g5 = array("08-14","18-23");
	$g6 = array("09-15","18-23");
	$g7 = array("10-17","19-24");
	$time_array = array($g1,$g2,$g3,$g4,$g5,$g6,$g7);
	
	$set_value = 0;  //for the execution of the loop to display the array in correct order
	$flag = 0;//for the execution of the loop to display the array in correct order

	$day_array = array('SUNDAY','MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY'); // this is the day array for pdf file	
        $group_array = array('G1','G2','G3','G4','G5','G6','G7');	// this is the array of group
	
	$pdf = new FPDF(); // a object of FPDF class
	$pdf->AddPage();	
		$pdf->AddFont(courier,'IB','courier.php');
		$pdf->SetFont('courier','BU',16);	
		$pdf->Cell(0,10,'NEPAL LOADSHEDDING ROUTINE',0,2,'C');  // For the title of the pdf file 
		
			

		$pdf->SetFont('courier','I',12);
		for($i=0;$i<=6;$i++){
				$set_value = $i;
				$flag = 7 - $set_value;
					if($flag > 6 )
						$flag = 0;
			$pdf->Cell(50,4,$day_array[$i]." ",1,2,'L');
			for($j=0;$j<=6;$j++){	
				if( $set_value == 0){
				$pdf->Cell(0,4,$group_array[$j]." --- ".$time_array[$flag][0]." ".$time_array[$flag][1],0,2,'L');
				++$flag;
				}else{
					$pdf->Cell(0,4,$group_array[$j]." --- ".$time_array[$flag][0]." ".$time_array[$flag][1],0,2,'L');
					++$flag;
						if( $flag > 6 ){
							$set_value = 0;
							$flag = 0;
						}
				}
			}
		}
	$pdf->Output();
