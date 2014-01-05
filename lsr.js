var a=[[3,9,13,18],[4,10,14,19],[5,11,15,21],[6,13,17,22],[8,14,18,23],[9,15,18,23],[10,17,19,24]];
var darray=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var now=new Date();
var day=now.getDay();
var our=now.getHours();
var rem,day_chg=day;
var intid,day_select,dselect_condn,day_flag=1;
var mint=now.getMinutes();
/*window.onload = function() {
ace(1);
document.getElementById('dayname').innerHTML=darray[day];
 }*/

function ace(number)
{
if(day_flag==1)
{
document.getElementById('dayname').innerHTML=darray[day];
}
day_flag=1;
day_select=number;
clearInterval(intid);
var flag=0,grp_no;
for(var i=0;i<6;i=i+2)
{
grp_no=number-day-1;
if(grp_no<0)
{
grp_no=7-grp_no;
}
var ini=a[grp_no][i];
var end=a[grp_no][i+1];
var j=i/2;
if(ini!=undefined)
	document.getElementById('time'+[j]).innerHTML=ini+" - "+end;
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
	day_condn=day_select;
	if(day_select==0)
	day_select=7;
	ace(day_select-1);
}
function nxt()
{
	if(day_chg==6)
		day_chg=0;
	else
		day_chg++;
	document.getElementById('dayname').innerHTML=darray[day_chg];
	day_flag=0;
	if(day_select==6)
	day_select=-1;
	ace(day_select+1);

}
