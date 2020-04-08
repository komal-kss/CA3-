<?php
 echo"<html>
<style>
.tb,.head,.data{
border:2px solid black;
text-align:left;
}
.tb{
background-color:#ABB2B9;
border-collapse:collapse;
width:100%;
}
.head,.data{
padding:15px;
}
.center{
text-align:center;
border:3px solid black;
width:50%;
padding:20px;

}
.button{
padding:10px 25px;
background-color:#ABB2B9;
border-radius:25px;
border:1px;
color:black;
display:inline-block;
margin:6px 2px;
}
</style>
<h1><center>Renting portal</center></h1>
<center><div style='background-color:#1C2833' class='center'><table class='1px solid black'><form method='post'><tr>
<td><font color='white'>Flat type:</font></td>
<td><select  id='flat' name='flat'>
<option value='1BHK'>1BHK</option>
<option value='2BHK'>2BHK</option>
<option value='3BHK'>3BHK</option>
</select></td></tr>
<tr>
<td><font color='white'>Area:</font></td>
<td><input type='text' name='area'></td>
<td><font color='white'>Sq.ft.</font></td>
</tr>
<tr><td><input class='button' type='submit' value='Check'></td></tr>
</form>
</table></div></center>
</html>";
function show_data($a1,$flat)
{
echo"<hr><br>";
echo"<h2><b><center>".$flat."  Rooms"."</center></b></h2>";
 echo "<center><table class='tb' style='border:1px solid black'><tr>
<th class='head'>Owner</th>
<th class='head'>Owner Contact no.</th>
<th class='head'>Locality</th>
<th class='head'>Rent</th></tr>";
for($row=0;$row<count($a1);$row++)
{
echo"<tr>";
for($col=0;$col<4;$col++){
echo "<td class='data'>".$a1[$row][$col]."</td>";
}
echo"</tr>";
}
echo"</table></center>";
}
$flat=$area='';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$a=array(array('subhash','8968732220','Law gate','6000'),array('Aryan','8968703332','Deep Nagar','7000'));
$b=array(array('Shivam','8968712223','Rama mandi','7000'),array('Vikas','6589784512','Jalandhar','8000'),array('Rajat','8574964152','Phagwara','7000'),array('Komal','8745895612','Law gate','8000'));
$c=array(array('Harman','8529637418','Dakua Fatak','10000'),array('Amit','789456845','Law gate','9000'),array('Saurav','875464861','Deep nagar','1000'));
$d=array(array('Ankur','7584425196','Phagwara','10000'),array('Harsh','7845115551','Law gate','11000'),array('Taniya','8956784558','Jalandhar','10000'),array('Sufiya','8458715568','Law gate','13000'));
$e=array(array('Soumya','7458962145','Rama mandi','13000'),array('Rohan','7539514862','Dakua Fatak','15000'));
$f=array(array('Prabhat','7418529637','Jalandhar','15000'),array('Rajesh','9517534862','Phagwara','13000'),array('Chanchal','8642753951','Rama mandi','14000'));
$g=array(array('Kishore','7788445522','Phagwara','17000'),array('Aman','9874563124','Phagwara','not specified'));
$flat=$_POST['flat'];
$area=$_POST['area'];
if($flat=='1BHK')
{
if((int)$area>=500 && (int)$area<=900){
show_data($a,$flat);
}
else if((int)$area>=900 && (int)$area<=1500)
show_data($b,$flat);
else
echo "<center><font color='red'>Sorry!No rooms available as per your choice</font></center>";
}
else if($flat=='2BHK')
{
if((int)$area>=900 && (int)$area<=1200)
show_data($c,$flat);
else if((int)$area>=1200 && (int)$area<=2000)
show_data($d,$flat);
else
echo"<center><font color='red'>Sorry!No rooms available as per your choice.</font></center>";
}
else if($flat=='3BHK')
{
if((int)$area>1200 && (int)$area<=2000)
show_data($e,$flat);
else if((int)$area>2000 && (int)$area<=2500)
show_data($f,$flat);
else if((int)$area>2500 && (int)$area<=3000)
show_data($g,$flat);
else
echo"<center><font color='red'>Sorry!No rooms available as per your choice.</font></center>";
}
}
?>

