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
<link rel='stylesheet' type='text/css' href='lsr.css'>


</head>

<body>
<section>
        <header>Nepal Load Shedding Routine</header>
        <div id='search_group'>Select your Location <input type='searchbox' class='search_box' placeholder=' Your location here'/><a href='#'><img src='images/location.svg'         height='28px' width='28px' id='search' onClick='location_select()'></a></div>
        
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
        
        <div id='routine' class='draggable'>
        <div id='dayname' class='boxed'>DAY</div>
        <hr id='line1'>
                <div id='quote_left' onClick='prv()'><img src='images/moveleft.svg'></div>
        <div id='quote_right' onClick='nxt()'><img src='images/moveright.svg'></div>
                <br>
        <div id='time0' class='time'></div>
        <div id='time1' class='time'></div>
        <div id='time2' class='time'></div>
                <br>
        <hr id='line2' class='newhr' />
       <div id='time_remain'>Time Remaining:<span id='timer'></span></div>
        </div>
        <br>
                <br>
<div id='tools'>
        <div class='setting'><a href='#'><img src='images/setting.svg' height='23px' width='23px'></a></div>
        <div class='update'><a href='#'><img src='images/update.svg' height='20px' width='20px'></a></div>        
        <div class='download'><a href='lsr_generate_pdf.php' target='_blank'><img src='images/download.svg' height='27px' width='30px'></a></div>
</div>
        <footer><a onClick="contact()">About Us</a></footer>
        <div id='background'>
                <div id='about_us'>
                        <div class='nlsr'><dl><em>Nepal Load shedding Routine(LSR)</em> is a Web Application developed to notify regular people about the timing and schedule of Load Shedding. <q><strong>LET THERE BE LIGHT</strong></q>
                        </dl></div>
                        <br>
                
                        <div class='developed_by'><dt>Developed By</dt></div>
                                <div class='developers'>
				<div id='boxed4'>
                                        <div class='picture'><img src='images/a2.png' height='50px' width='40px'></div>        
                                        <div class='aashish'>
                                                <div class='name'><a href='http://about.me/acesmndr' target='_blank'>Aashish Manandhar</a></div>
                                                <div class='post'>Developer</div>
                                        </div>
                        </div><div id='boxed3'>
                                        <div class='picture'><img src='images/a1.png' height='50px' width='40px'></div>
                                        <div class='aayush'>
                                                <div class='name'><a href='http://about.me/aayushrijal' target='_blank'>Aayush Rijal</a></div>
                                                <div class='post'>Deginer</div>
                                        </div>
                        </div><div id='boxed2'>		
					<div class='picture'><img src='images/a7.png' height='50px' width='40px'></div>
                                        <div class='ankit'>
                                                <div class='name'><a href='http://about.me/shresthaankit7' target='_blank'>Ankit Shrestha</a></div>
                                                <div class='post'>Developer</div>
                                        </div>                                     
                        </div><div id='boxed1'>                
                                        <div class='picture'><img src='images/a4.png' height='50px' width='40px'></div>
                                        <div class='ankit'>
                                                <div class='name'><a href='http://about.me/' target='_blank'>Abhishek Khatri</a></div>
                                                <div class='post'>Data Analyst</div>
                                        </div>
                          </div>              
                                        <div class='X'><a onClick="contact()">x</a></div>                                        
                                        <div class='red'>
                                                <img src='images/red.png' height='70px' width='70px'>
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
	<div id='checkout'>
		<div id='location_topic'>
			<div class='locate'>Whats Your Location?</div>
			<a id='close_X' onClick='close_location()'>x</a>
				<div id='selectplace'>
				<ul>
					<li><a onClick="slctplce(8)">Balaju</a></li>
					<li><a onClick="slctplce(10)">Banepa</a></li>
					<li><a onClick="slctplce(4)">Baneshwor</a></li>
					<li><a onClick="slctplce(2)">Bhaktapur</a></li>
					<li><a onClick="slctplce(12)">K-2</a>	</li>
					<li><a onClick="slctplce(16)">K-3</a></li>
					<li><a onClick="slctplce(7)">Lainchour</a></li>
					<li><a onClick="slctplce(13)">Maharajgunj</a></li>
					<li><a onClick="slctplce(17)">Matatirtha</a></li>
					<li><a onClick="slctplce(6)">Naya Chabahil</a></li>
					<li><a onClick="slctplce(1)">Patan</a></li>
					<li><a onClick="slctplce(18)">Panchkhal</a></li>
					<li><a onClick="slctplce(5)">Purano Chabahil</a></li>
					<li><a onClick="slctplce(15)">Sundhara</a></li>
					<li><a onClick="slctplce(9)">Syuchatar</a></li>
					<li><a onClick="slctplce(3)">Teku</a></li>
					<li><a onClick="slctplce(11)">Thapathali</a></li>					
					<li><a onClick="slctplce(14)">Thimi</a></li>										
				</ul>
				</div>
				<div id='plce1'>
				<ul>
					<li><a onClick="chace(1,1)">MangalBajar</a></li>
					<li><a onClick="chace(2,1)">Pharphing</a></li>
					<li><a onClick="chace(3,1)">Patan</a></li>
					<li><a onClick="chace(4,1)">RingRoad</a></li>
					<li><a onClick="chace(5,1)"> Saibu</a></li>
					<li><a onClick="chace(6,1)">Radio Nepal</a></li>
					<li><a onClick="chace(6,1)">Pulchowk</a></li>
					<li><a onClick="chace(7,1)">Jawalakhel</a></li>
					<li><a onClick="chace(7,1)">Chapagaun</a></li>
				</ul>
				</div>
				<div id='plce2'>
				<ul>
					<li><a onClick="chace(2,2)">Byashi</a></li>
					<li><a onClick="chace(5,2)">Katunjey</a></li>
					<li><a onClick="chace(5,2)">NalinChowk</a></li>
					<li><a onClick="chace(6,2)">Nagarkot</a></li>
					<li><a onClick="chace(6,2)">Brick</a></li>
				</ul>
				</div>
				<div id='plce3'>
				<ul>
					<li><a onClick="chace(1,3)">Tripureshwor</a></li>
					<li><a onClick="chace(1,3)">Tahachal</a></li>
					<li><a onClick="chace(2,3)">Kalimati</a></li>
					<li><a onClick="chace(3,3)">Thankot</a></li>
					<li><a onClick="chace(4,3)">Pulchowk</a></li>
					<li><a onClick="chace(6,3)">Bhimsensthan</a></li>
					<li><a onClick="chace(7,3)">Kirtipur</a></li>
				</ul>
				</div>
				<div id='plce4'>
				<ul>
					<li><a onClick="chace(1,4)">Baneshwor</a></li>
					<li><a onClick="chace(1,4)">Koteshwor</a></li>
					<li><a onClick="chace(1,4)">Bagmati</a></li>
					<li><a onClick="chace(2,4)">Imadol</a></li>
					<li><a onClick="chace(2,4)">Gothatar</a></li>
					<li><a onClick="chace(3,4)">Godawari-1</a></li>
					<li><a onClick="chace(3,4)">Conference-hall</a></li>
					<li><a onClick="chace(4,4)">New Airport</a></li>
					<li><a onClick="chace(4,4)">DhobiKhola</a></li>
					<li><a onClick="chace(5,4)">Purano Airport</a></li>
					<li><a onClick="chace(6,4)">Lubhu</a></li>
					<li><a onClick="chace(7,4)">Sankhamul</a></li>
				</ul>
				</div>
				<div id='plce5'>
				<ul>
					<li><a onClick="chace(1,5)">Jorpati</a></li>
					<li><a onClick="chace(3,5)">Naxal</a></li>
					<li><a onClick="chace(3,5)">Airport</a></li>
					<li><a onClick="chace(4,5)">Dhobikhola</a></li>
					<li><a onClick="chace(4,5)">Dachi</a></li>
					<li><a onClick="chace(5,5)">Battisputali</a></li>
					<li><a onClick="chace(5,5)">Tangal</a></li>
					<li><a onClick="chace(7,5)">Pashupati</a></li>
				</ul>
				</div>
				<div id='plce6'>
				<ul>
					<li><a onClick="chace(1,6)">Sankhu</a></li>
					<li><a onClick="chace(3,6)">Om Hospital</a></li>
					<li><a onClick="chace(6,6)">Sundarijal</a></li>
					<li><a onClick="chace(7,6)">Kapan</a></li>
				</ul>
				</div>
				<div id='plce7'>
				<ul>
					<li><a onClick="chace(1,7)">Kesharmahal</a></li>
					<li><a onClick="chace(3,7)">GairiDhara</a></li>
					<li><a onClick="chace(4,7)">Lazimpat</a></li>
					<li><a onClick="chace(5,7)">King's Way</a></li>
					<li><a onClick="chace(6,7)">Thamel</a></li>
					<li><a onClick="chace(7,7)">Samakhusi</a></li>
				</ul>
				</div>
				<div id='plce8'>
				<ul>
					<li><a onClick="chace(2,8)">Naya Bazar</a></li>
					<li><a onClick="chace(4,8)">Nagarjun</a></li>
					<li><a onClick="chace(4,8)">Swoyambhu</a></li>
					<li><a onClick="chace(5,8)">Bishnumati</a></li>
					<li><a onClick="chace(5,8)">Maharajgunj-1</a></li>
					<li><a onClick="chace(6,8)">Dharmasthali</a></li>
				</ul>
				</div>
				<div id='plce9'>
				<ul>
					<li><a onClick="chace(1,9)">Tahachal</a></li>
					<li><a onClick="chace(2,9)">Thankot</a></li>
					<li><a onClick="chace(3,9)">Kalimati</a></li>
					<li><a onClick="chace(5,9)">Kalanki</a></li>
					<li><a onClick="chace(6,9)">Rope Way</a></li>
					<li><a onClick="chace(7,9)">Balaju</a></li>
					<li><a onClick="chace(7,9)">Swoyambhu</a></li>
				</ul>
				</div>
				<div id='plce10'>
				<ul>
					<li><a onClick="chace(2,10)">Dhulikhel</a></li>
					<li><a onClick="chace(3,10)">Sanga</a></li>
					<li><a onClick="chace(6,10)">Nala</a></li>
					<li><a onClick="chace(6,10)">Khawa</a></li>
					<li><a onClick="chace(7,10)">Aspatal</a></li>
					<li><a onClick="chace(7,10)">Khopashi</a></li>
					<li><a onClick="chace(7,10)">Panauti</a></li>
				</ul>
				</div>
				<div id='plce11'>
				<ul>
					<li><a onClick="chace(1,11)">Thahathali</a></li>
					<li><a onClick="chace(4,11)">Sanepa</a></li>
					<li><a onClick="chace(4,11)">Teku</a></li>
					<li><a onClick="chace(4,11)">Patan</a></li>
				</ul>
				</div>
				<div id='plce12'>
				<ul>
					<li><a onClick="chace(1,12)">Kamaladi</a></li>
					<li><a onClick="chace(2,12)">Asan</a></li>
					<li><a onClick="chace(3,12)">MahaBaudha</a></li>
					<li><a onClick="chace(6,12)">DurbarMarg</a></li>
					<li><a onClick="chace(7,12)">Bagbazar</a></li>
				</ul>
				</div>
				<div id='plce13'>
				<ul>
					<li><a onClick="chace(1,13)">Budhanilkantha</a></li>
					<li><a onClick="chace(2,13)">BansBari</a></li>
					<li><a onClick="chace(3,13)">Baluwatar</a></li>
					<li><a onClick="chace(3,13)">American Embassy</a></li>
					<li><a onClick="chace(3,13)">Gongabu</a></li>
					<li><a onClick="chace(5,13)">Dhapashi</a></li>
					<li><a onClick="chace(7,13)">Golfutar</a></li>
				</ul>
				</div>
				<div id='plce14'>
				<ul>
					<li><a onClick="chace(4,14)">Balkumari</a></li>
					<li><a onClick="chace(6,14)">Thimi</a></li>
					<li><a onClick="chace(7,14)">Sallaghari</a></li>
				</ul>
				</div>
				<div id='plce15'>
				<ul>
					<li><a onClick="chace(1,15)">Khichapokhari</a></li>
					<li><a onClick="chace(2,15)">Tripureshwor</a></li>
					<li><a onClick="chace(4,15)">Newroad</a></li>
					<li><a onClick="chace(6,15)">Bhotebahal</a></li>
				</ul>
				</div>
				<div id='plce16'>
				<ul>
					<li><a onClick="chace(1,16)">BhrikutiMandap</a></li>
					<li><a onClick="chace(3,16)">Kalikasthan</a></li>
					<li><a onClick="chace(5,16)">Anamnagar</a></li>
					<li><a onClick="chace(7,16)">Putalisadak</a></li>
				</ul>
				</div>
				<div id='plce17'>
				<ul>
					<li><a onClick="chace(3,17)">Matatirtha</a></li>
				</ul>
				</div>
				<div id='plce18'>
				<ul>
					<li><a onClick="chace(3,18)">Pipley</a></li>
					<li><a onClick="chace(3,18)">Palanchowk</a></li>
					<li><a onClick="chace(5,18)">Melamchi</a></li>
					<li><a onClick="chace(6,18)">Panchkhal</a></li>
				</ul>
				</div>
		</div>
	</div>
</section>
<script type='text/javascript' src='js/lsr.js'></script>
</body>
</html>
