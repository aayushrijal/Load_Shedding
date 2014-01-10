<!DOCTYPE html>
<html>


<?php
	$g1 = array(3,9,13,18);
	$g2 = array(4,10,14,19);
	$g3 = array(5,11,15,21);
	$g4 = array(6,13,17,22);
	$g5 = array(8,14,18,23);
	$g6 = array(9,15,18,23);
	$g7 = array(10,17,19,24);
	$time_array = array($g1,$g2,$g3,$g4,$g5,$g6,$g7);
	$k =1; $l=1;
	
?>
<script>
	var b= new Array(7);
	var i,j;
	for(i = 0;i<=6;i++){
		b[i]=new Array(4);
	}

       <?php 
		for($i = 0; $i <= 6 ; $i++){
			for($j = 0;$j <=3 ;$j++){
				echo "b[$i][$j] = {$time_array[$i][$j]};";
			}
		}
	?>




	/*i = 0 ;
	j = 0 ;
	for(i = 0; i<=6; i++){
		for(j =0;j<=3;j++){
			b[i][j] = <?php echo $time_array[$k][$l++]; ?> ;
		alert(i+" "+j+" "+b[i][j]);
		console.log(b[i][j]);
		}
		<?php $l = 0; $k++;?>*/	
	/*
	b[0][0]=<?php echo $g1[0]; ?> ;
	b[0][1]=<?php echo $g1[1]; ?> ;	
	b[0][2]=<?php echo $g1[2]; ?> ;	
	b[0][3]=<?php echo $g1[3]; ?> ;	
	b[1][0]=<?php echo $g2[0]; ?> ;	
	b[1][1]=<?php echo $g2[1]; ?> ;	
	b[1][2]=<?php echo $g2[2]; ?> ;	
	b[1][3]=<?php echo $g2[3]; ?> ;	
	b[2][0]=<?php echo $g3[0]; ?> ;	
	b[2][1]=<?php echo $g3[1]; ?> ;	
	b[2][2]=<?php echo $g3[2]; ?> ;	
	b[2][3]=<?php echo $g3[3]; ?> ;	
	b[3][0]=<?php echo $g4[0]; ?> ;	
	b[3][1]=<?php echo $g4[1]; ?> ;	
	b[3][2]=<?php echo $g4[2]; ?> ;	
	b[3][3]=<?php echo $g4[3]; ?> ;	
	b[4][0]=<?php echo $g5[0]; ?> ;	
	b[4][1]=<?php echo $g5[1]; ?> ;	
	b[4][2]=<?php echo $g5[2]; ?> ;	
	b[4][3]=<?php echo $g5[3]; ?> ;	
	b[5][0]=<?php echo $g6[0]; ?> ;	
	b[5][1]=<?php echo $g6[1]; ?> ;	
	b[5][2]=<?php echo $g6[2]; ?> ;	
	b[5][3]=<?php echo $g6[3]; ?> ;	
	b[6][0]=<?php echo $g7[0]; ?> ;	
	b[6][1]=<?php echo $g7[1]; ?> ;	
	b[6][2]=<?php echo $g7[2]; ?> ;	
	b[6][3]=<?php echo $g7[3]; ?> ;	
	*/	
//	var b = <?php echo json_encode($time_array); ?>		
	
	
</script>









<head>
<title> load shedding routine</title>
<!--<link href='http://fonts.googleapis.com/css?family=Nova+Square' rel='stylesheet' type='text/css'>-->
<link rel='stylesheet' type='text/css' href='lsr.css'>


</head>

<body>
<section>
        <header>Nepal Load Shedding Routine</header>
        <div id='search_group'>Search via Location <input type='searchbox' class='search_box' placeholder=' Your location here'/><a href='#'><img src='location.svg'	 height='28px' width='28px' id='search'></a></div>
        
			<nav><a onclick="groupUnhide()" id='grp_switch'>Select Group</a>
			<div id='groupshow'>	
				<div onClick="ace(1)" class='navbar'>One</div>
				<div onClick="ace(2)" class='navbar'>Two</div>
				<div onClick="ace(3)" class='navbar'>Three</div>
				<div onClick="ace(4)" class='navbar'>Four</div>
				<div onClick="ace(5)" class='navbar'>Five</div>
				<div onClick="ace(6)" class='navbar'>Six</div>
				<div onClick="ace(7)" class='navbar'>Seven</div>
			</div>
			</nav>
        
        <div id='routine'>
        <div id='dayname'>DAY</div>
        <hr id='line1'>
		<div id='quote_left' onClick='prv()'><img src='moveleft.svg'></div>
        <div id='quote_right' onClick='nxt()'><img src='moveright.svg'></div>
		<br>
        <div id='time0' class='time'></div>
        <div id='time1' class='time'></div>
        <div id='time2' class='time'></div>
		<br>
        <hr id='line2'>
        Time Remaining:<span id='timer'></span>
        </div>
	<br>
		<br>
<div id='tools'>
	<div class='setting'><a href='#'>
							<img src='setting.svg' height='23px' width='23px'>
						</a>
	</div>
	<div class='update'><a href='#'>
							<img src='update.svg' height='20px' width='20px'>
						</a>
	</div>	
	<div class='download'><a href='#'>
							<img src='download.svg' height='27px' width='30px'>
							</a>
	</div>
</div>
	<footer><a onClick="contact()">About Us</a></footer>

	<div id='background'>
		<div id='about_us'>
			<div class='nlsr'><dl><em>Nepal Load shedding Routine(LSR)</em> is a Web Application developed to notify regular people about the timing and schedule of Load Shedding. <q><strong>LET THERE BE LIGHT</strong></q>
			</dl></div>
			<br>
		
			<div class='developed_by'><dt>Developed By</dt></div>
				<div class='developers'>
					<div class='picture'><img src='a2.png' height='50px' width='40px'></div>	
					<div class='aashish'>
						<div class='name'><a href='http://about.me/acesmndr' target='_blank'>Aashish Manandhar</a></div>
						<div class='post'>Developer</div>
					</div>
			
					<div class='picture'><img src='a1.png' height='50px' width='40px'></div>
					<div class='aayush'>
						<div class='name'><a href='http://about.me/aayushrijal' target='_blank'>Aayush Rijal</a></div>
						<div class='post'>Deginer</div>
					</div>
			
					
					<div class='picture'><img src='a4.png' height='50px' width='40px'></div>
					<div class='ankit'>
						<div class='name'><a href='http://about.me/acesmndr' target='_blank'>Abhishek Khatri</a></div>
						<div class='post'>Data Analyst</div>
					</div>
					
					<div class='picture'><img src='a7.png' height='50px' width='40px'></div>
					<div class='ankit'>
						<div class='name'><a href='http://about.me/acesmndr' target='_blank'>Ankit Shrestha</a></div>
						<div class='post'>Developer</div>
					</div>
										
					<div class='red'>
						<img src='red.png' height='70px' width='70px'>
					</div>
					<br>
					<br>
					<br>
					<br>
					<div class='company'>Red Developers</div>
				
				</div>
			<br>
			<br>
			<div id='version'>LSR Version 1.0</div>
			<br>
		</div>
	
	</div>

</section>
<script type='text/javascript' src='lsr.js'></script>
</body>
</html>
