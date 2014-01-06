var a=[[3,9,13,18],[4,10,14,19],[5,11,15,21],[6,13,17,22],[8,14,18,23],[9,15,18,23],[10,17,19,24]];
var darray=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var now=new Date();
var day=now.getDay();
var our=now.getHours();
var rem,day_chg,grp_no;
var intid,day_select,dselect_condn,day_flag=1;
var mint=now.getMinutes();
var ampm1,ampm2;
window.onload = function() {
ace(1);
document.getElementById('dayname').innerHTML=darray[day];
groupUnhide(); 
}

function ace(number)
{
if(day_flag==1)
{
document.getElementById('dayname').innerHTML=darray[day];
day_chg=day;
}
day_flag=1;
day_select=number;
clearInterval(intid);
var flag=0;
for(var i=0;i<6;i=i+2)
{
grp_no=number-day-1;
if(grp_no<0)
{
grp_no=7+grp_no;
}
var ini=a[grp_no][i];
if(ini>12)
{
ampm1=ini-12;
ampm1+="pm";
}
else
ampm1=ini+"am";
var end=a[grp_no][i+1];
if(end>12)
{
ampm2=end-12;
ampm2+="pm";
}
else
ampm2=end+"am";

var j=i/2;
if(ini!=undefined)
	document.getElementById('time'+[j]).innerHTML=ampm1+" - "+ampm2;
else
	document.getElementById('time'+[j]).innerHTML=" ";
if((our>=ini)&&(our<end)&&(flag==0))//batti gako belama
{
	rem=end-our-1;
	flag=2;
}
else
{
	if((our<ini)&&(flag==0))
	{
		rem=ini-our-1;
		flag=1;
		}
	}
}
if(flag==0)
	{
		rem=24-our-1+a[grp_no+1][0];
		flag=1;
}

mint=60-mint;
var sec=59;
var tick_tock=function()
{
if(sec==0)
{
	if(mint!=0)
	{
		mint--;
	}
	else
	{
		mint=59;
		if(rem!=0)
		{
			rem--;
		}
		else
		{
			ace(number);
		}
	}
sec=59;
}
else
{
sec--;
}
var type="for Electricity";
if(flag==1)
{
type="for Cutoff";
}
document.getElementById("timer").innerHTML=" "+rem+" hour "+mint+" minutes and "+sec+" seconds "+type;
}
intid=setInterval(function(){tick_tock();},1000);
}

function prv()
{
	if(day_chg==0)
		day_chg=6;
	else
		day_chg--;
	document.getElementById('dayname').innerHTML=darray[day_chg];
	day_flag=0;
	dselect_condn=day_select;
	if(dselect_condn==6)//
	dselect_condn=0;
	ace(dselect_condn+1);
	
}
function nxt()
{
	if(day_chg==6)
		day_chg=0;
	else
		day_chg++;
	document.getElementById('dayname').innerHTML=darray[day_chg];
	day_flag=0;
	dselect_condn=day_select;
	if(dselect_condn==1)//
	dselect_condn=8;
	ace(dselect_condn-1);
}
