<link href="style.css" rel="stylesheet" type="text/css" />

<?php
include("dp.php");
include_once("header.php");
echo'<center>';

if($_POST['sear'])
{
$table=$_POST['aa'];
$sit=$_POST['sit_name'];
$sql="select * from ".$table." where Numstu=".$sit."";
$query=mysql_query($sql);

if($query)
{$row=mysql_fetch_array($query);
echo'<div class="newsbody">';
echo'<h3>‰ ÌÃ… «·ÿ«·»  '.$row['Name'].'</h3>';
echo'
<table align=" center" width="90%" dir="rtl" border="1">
<tr>
<td>—ﬁ„ Ã·Ê” «·ÿ«·»</td>
<td> «”„ «·ÿ«·»</td>
<td>«·ﬁ—«‰ «·ﬂ—Ì„ </td>
<td>«· —»Ì… «·«”·«„Ì…</td>
<td>«··€… «·⁄—»Ì…</td>
<td>«··€… «·«‰Ã·Ì“Ì…</td>
<td>«·⁄·Ê„</td>
<td>«·—Ì«÷Ì« </td>
<td>«·Õ«”Ê»</td>

<td>«·„Ã„Ê⁄</td>
</tr>

<tr>
<td>'.$row['Numstu'].'</td>
<td> '.$row['Name'].'</td>
<td>'.$row['Quraan'].' </td>
<td>'.$row['eslam'].'</td>
<td>'.$row['arabic'].'</td>
<td>'.$row['english'].'</td>
<td>'.$row['since'].'</td>
<td>'.$row['math'].'</td>
<td>'.$row['com'].'</td>
<td>'.$row['sum'].'</td>
</tr>
</table>
'; if($row['arabic']>=50&&$row['english']>=50&&$row['Quraan']>=50&&$row['eslam']>=50&&$row['since']>=50&&$row['math']>=50&&$row['com']>=50)
echo'<br><img src="../images1/ff.JPG" width="50%" />';
else
echo'<br><img src="../images1/da.png" width="50%" />';}}
else 
echo'<p>H]og fdhkhj wpdpm</p>';

echo'</div>
';

echo'</center>
<br> <br>
<div id="menu"><center><a href="index12.php">«·’›Õ… «·—∆Ì”Ì…</a></center></div>';
?>
