var a=[[710,1316,1922],[811,1417,2023],[609,1215,1821],[508,1114,1720],[407,1013,1619],[711,1621],[912,1518,2124]];
//var darray=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var now=new Date();
var day=now.getDay();
var our=now.getHours();
var rem;
var intid;
var mint=60-now.getMinutes();
//rem=darray[day];
//document.getElementById("daytwo").innerHTML=rem;
function ace(number)
{
clearInterval(intid);
var flag=0,grp_no;
for(var i=0;i<6;i=i+2)
{
grp_no=number+day-2;
if(grp_no>6)
grp_no=grp_no-7;
var ini=a[grp_no][i];
var end=a[grp_no][i+1];
var j=i/2;
document.getElementById('time'+[j]).innerHTML=ini+" - "+end;
if((our>=ini)&&(our<end))
{
rem=end-our-1;
flag=2;
}
else
{
	if((our<ini)&&(flag!=1))
	{
		rem=ini-our-1;
		flag=1;
		}
	if(flag==0)
	{
		rem=24-our-1+a[grp_no+1][0];
		}
}
}
if(flag!=2)
flag=1;
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
document.getElementById("timer").innerHTML=rem+"hour "+mint+" minutes and "+sec+"seconds "+type;
}
intid=setInterval(function(){tick_tock();},1000);
}
