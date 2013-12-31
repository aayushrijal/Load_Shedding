var a=[[710,1316,1922],[811,1417,2023],[609,1215,1821],[508,1114,1720],[407,1013,1619],[711,1621],[912,1518,2124]];
var now=new Date();
var temp1=0,temp2=0,temp3=0,temp4=0,temp5=0,flag;//var to store the pointer for routine
var count=now.getHours();
var countm=60-now.getMinutes();
function ace(number)
{
flag=0;
temp1=temp2=temp3=temp4=temp5=0;
temp1=now.getHours();
temp2=now.getDay();
temp2=temp2+number-1;
if(temp2>6)
temp2=temp2-7;
for(var i=0;i<3;i++)
{
temp3=a[temp2][i]/100;
temp3=parseInt(temp3);
temp4=a[temp2][i]%100;
document.getElementById('time'+[i]).innerHTML="Time:"+temp3+"-"+temp4;
if((temp1>temp3)&&(temp1<temp4))
{
	temp5=temp4-temp1;
	temp5=temp5-1;
	flag=1;
}
}
if(flag==1)
{
document.bgColor="Orange";
	alert("The time remaining is"+temp5+"Hours and "+countm+" minutes");
var counter=function()
{
if(count==0)
{
	countm--;
	if(countm>0)
	count=59;
if(countm==0)
{
temp5--;
if(temp5>0)
countm=59;
}
}
if(temp5==-1&&count==0)
{
	alert("Batti Aayo");
	clearInterval(intr);
}
count--;
document.getElementById("timer").innerHTML="Tero gharma"+temp5+"Hours\t"+countm+"minutes\t"+count+"secs pachi matra batti balcha";
}
var intr=setInterval(counter,1000);
}
else
{
document.bgColor="Yellow";
alert("Batti Gako chaina");
}
}

