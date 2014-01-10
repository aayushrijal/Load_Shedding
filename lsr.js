//array of the list of schedule for loadshedding
var a=[[3,9,13,18],[4,10,14,19],[5,11,15,21],[6,13,17,22],[8,14,18,23],[9,15,18,23],[10,17,19,24]];
//list of the name of Days
var darray=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var now=new Date();
var todaychecker=0;//to check if the day is today
var day=now.getDay();//name of day
var our=now.getHours();//hour of day
//rem=remainder hour day_chg=dayDisplayChangewrtnxtPrv()group_no=lsgroupwrtday
var rem,day_chg,grp_no;
//intid=ClocktickingFunctionSwitch day_select=next&previousfunction day_flag=checkingwhetherit's nxt()prv() or Group select
var intid,day_select,dselect_condn,day_flag=1;
//opacity_id=Opacitytickingswitch
var opacity_id,opaCT=0;
var mint=now.getMinutes();
mint=60-mint;//minutes remaining
var sec=59;
//ampm1&2 start and end times of the day with comverted 12 hour values from 24 hour ones
var ampm1,ampm2;
//grouplist's id assigned to a variable
var grp123 = document.getElementById("groupshow");

window.onload = function() {
        //php compatibility update with the values of php variables in if statement
        if(typeof b !== "undefined"){
                alert("value of array changed");
                for(i=0;i<7;i++){
                        for(j=0;j<4;j++){
                                a[i][j]=b[i][j];
                        }
        }                                
        }        
ace(1);//to show the routine of group 1 on start
//document.getElementById('dayname').innerHTML=darray[day];//to display today's day of week
}

function ace(number){
        document.getElementById("grp_switch").style.visibility="visible";//set the visibility of group switch
        grp123.style.visibility = "hidden";//hide the group list on selecting a group on list

if(day_flag==1){//if it was called by the grouplist by the user
	document.getElementById('dayname').innerHTML=darray[day];//show today's day value
	clearInterval(intid);
	day_chg=day;//set today's day value to the temporary variable
	todaychecker=0;
}
if(todaychecker==0){//if the day is today the countdown is displayed	
	document.getElementById('time_remain').style.visibility='visible';
}else{
	document.getElementById('time_remain').style.visibility='hidden';
	
}
day_flag=1;
day_select=number;
clearInterval(intid);//stop the currently running countdown function
var flag=0;
for(var i=0;i<6;i=i+2){//interval 0-6 for 0-3 routine schedules per day with start and end times
        grp_no=number-day-1;
        if(grp_no<0){
                grp_no=7+grp_no;//less than 0 so negative hence added previously was a bug
        }
var ini=a[grp_no][i];//cutoff time value
if(ini>12){
        ampm1=ini-12;//24 to 12 hour format conversion
        ampm1+=" pm";//addition of am or pm
}
else
{
        ampm1=ini+" am";
}
var end=a[grp_no][i+1];//Electricity return back tiem value
if(end>12)
{
        ampm2=end-12;
        ampm2+=" pm";
}
else
{
        ampm2=end+" am";
}
var j=i/2;
//if there is a schedule ie there is a cutoff time then display time else display nothing in the html body
if(ini!=undefined){
        document.getElementById('time'+[j]).innerHTML=ampm1+" - "+ampm2;
}else{
        document.getElementById('time'+[j]).innerHTML=" ";
}
//In cutoff conditiion and flag is unset set flag to cutoff state
//else if electricity is on and is before cutoff time and flag is unset set flag to live state
if((our>=ini)&&(our<end)&&(flag==0)){
        rem=end-our-1;
        flag=2;
}else{
        if((our<ini)&&(flag==0)){
                rem=ini-our-1;
                flag=1;
                }
        }
}
//if flag is unset then the time remaining is compared with the first cutoff time of next day and the flag is again set to represent live state
if(flag==0){
                if(grp_no==0){
                        rem=24-our-1+a[6][0];
                }else{
                        rem=24-our-1+a[grp_no-1][0];
                }
                flag=1;
}
//function for the countdown from current time to zerro
var tick_tock=function()
{
if(sec==0){
        if(mint!=0){
                mint--;
        }else{
                mint=59;
                if(rem!=0){
                        rem--;
                }else{
                        ace(number);
                }
        }
sec=59;
}else{
        sec--;
}
//set the type to cutoff for all cases
var type="for Electricity";
//change the colour of horizontal line according to the state of electricity
document.getElementById("line1").className="hr1";
document.getElementById("line2").className="hr1";
//if flag is set to live state then set the colour of line to green
if(flag==1){
        document.getElementById("line1").className="hr2";
        document.getElementById("line2").className="hr2";
        type="for Cutoff";
}
//display countdown
document.getElementById("timer").innerHTML=" "+rem+" Hours "+mint+" Minutes and "+sec+" Seconds  "+type;
}
intid=setInterval(function(){tick_tock();},1000);//recursive call for the realtime running of countdown function
}

//function for next arrow
function prv()
{
        //checking and decreasing the value of the today's day
        if(day_chg==0){
                day_chg=6;
        }else{
                day_chg--;
        }
	if(todaychecker==0){
		todaychecker=6;
	}else{
		todaychecker--;
	}

        //display today's day        
        document.getElementById('dayname').innerHTML=darray[day_chg];
        day_flag=0;//reset the day flag to let the function ace(parameter) know it was called by nxt function not grouplist
        dselect_condn=day_select;
        if(dselect_condn==6)//call condition by incrementing the value of group in a different variable
        dselect_condn=0;
        ace(dselect_condn+1);
        
}
function nxt()
{
        if(day_chg==6){
                        day_chg=0;
        }else{
                day_chg++;
        }
	if(todaychecker==6){
		todaychecker=0;
	}else{
		todaychecker++;
	}
        document.getElementById('dayname').innerHTML=darray[day_chg];
        day_flag=0;
        dselect_condn=day_select;
        if(dselect_condn==1)
        dselect_condn=8;
        ace(dselect_condn-1);
}
//function to unhide the group list after the group switch has been pressed
function groupUnhide() {
        if(grp123.style.visibility=="hidden"){
        grp123.style.visibility="visible";
        }else{
        grp123.style.visibility="hidden";
        }
        document.getElementById("grp_switch").style.visibility="visible";
}
//function to switch the display of about us's content
 function contact(){
        if(document.getElementById("background").style.display=="block"){
		//opacity_id=setInterval(function(){opd()},200);
		document.getElementById("background").style.display="none";
		//opaCT=0;
	}else{
		opacity_id=setInterval(function(){opi()},30); 
		opaCT=0;            
}
}
function opi()
{
						if(opaCT>=1){
						clearInterval(opacity_id);
						}
						opaCT+=0.1;
						document.getElementById("background").style.opacity=opaCT;
						document.getElementById("background").style.display="block";
}
/*function opd(){
						if(opaCT<=0){
						//document.getElementById("background").style.display="none";
						clearInterval(opacity_id);
						}
						opaCT-=0.1;
						document.getElementById("background").style.opacity=opaCT;
						//document.getElementById("background").style.display="block";
						console.log(opaCT);
}*/
function slctplce(number)
{
document.getElementById('selectplace').style.display="none";
document.getElementById('plce'+number).style.display="block";
}
function chace(number1,number2)
{
close_location();
document.getElementById('plce'+number2).style.display="none";

ace(number1);
}
function location_select()
{
document.getElementById('checkout').style.display="block";
}
function close_location()
{
document.getElementById('selectplace').style.display="block";
document.getElementById('checkout').style.display="none";
for(i=1;i<=18;i++){
document.getElementById('plce'+i).style.display="none";
}
}
