<?php
include("dp.php");
?>
<link href="stylea.css" rel="stylesheet" type="text/css">
<body>
<div class="head">œ—Ã«  «·ÿ·«» </div>
<div class="body">
<div class="add"><a href="?action=add">«÷«›… ÿ«·» </a></div>
<?
if($_REQUEST['action']=='delete')
{
$get_id=$_GET['id'];

if($get_id)
{
$dele=mysql_query("delete from result where Numstu=".$get_id);
if($dele)
{
echo'<div class="sa"><p> „ «·Õ–›</p></div>';
echo'<meta http-equiv="refresh" content="1; url=result.php"/>';
exit;
}
}
}
if($_POST['edit_news'])
{echo'sss';
$post_id=$_POST['Id'];
$post_Num=$_POST['num'];
$post_Name=$_POST['name'];
$post_Q=$_POST['q'];
$post_e=$_POST['e'];
$post_a=$_POST['ar'];
$post_si=$_POST['si'];
$post_m=$_POST['ma'];
$post_en=$_POST['en'];
$post_c=$_POST['co'];
$post_s=$post_c+$post_en+$post_m+$post_si+$post_a+$post_Q+$post_e;
if($post_Num!=''||$post_Name!='')
{echo'dd'.$post_id.$post_s;

$update=mysql_query("UPDATE `school2`.`result` SET `Numstu` = '$post_Num', `Name` = '$post_Name', `Quraan` = '$post_Q',
`eslam` = '$post_e',
`arabic` = '$post_a',
`english` = '$post_en',
`since` = '$post_si',
`math` = '$post_m',
`com` = '$post_c',
`sum` = '$post_s' WHERE `result`.`Id` =".$post_id);
if($update)
{echo'<div class="sa"><p> „ «· ⁄œÌ·</p></div>';
echo'<meta http-equiv="refresh" content="1; url=result.php"/>';
exit;}
else {die("could not connect".mysql_error());}
}
else echo"«œŒ· »Ì«‰«  «·ÕﬁÊ·";
}
if($_REQUEST['action']=='Edit'){
$get_id=intval($_GET['id']);
if($get_id)
{
$quary_edit=mysql_query("select * from result where Numstu=".$get_id);
$row_edit=mysql_fetch_array($quary_edit);
echo'
<form method="post" action="">
<table border="0" align="center">
<tr>
<td>—ﬁ„ «·ÿ«·»</td>
<td><input type="text" name="num" value="'.$row_edit['Numstu'].'" /></td>
</tr>
<tr>
<td>«”„ «·ÿ«·»</td>
<td><input type="text" name="name" value="'.$row_edit['Name'].'" /></td>

</tr>
<tr>
<td>«·ﬁ—«‰</td>
<td><input type="text" name="q" value="'.$row_edit['Quraan'].'" /></td>
<tr>
<td>«·«”·«„Ì…</td>
<td><input type="text" name="e" value="'.$row_edit['eslam'].'" /></td>

</tr>
<tr>
<td>«··€… «·⁄—»Ì…</td>
<td><input type="text" name="ar" value="'.$row_edit['arabic'].'" /></td>

</tr>
<tr>
<td>«··€… «·«‰Ã·Ì“Ì…</td>
<td><input type="text" name="en" value="'.$row_edit['english'].'" /></td>

</tr>
<tr>
<td>«·⁄·Ê„</td>
<td><input type="text" name="si" value="'.$row_edit['since'].'" /></td>

</tr>
<tr>
<td>«·—Ì«÷Ì« </td>
<td><input type="text" name="ma" value="'.$row_edit['math'].'" /></td>

</tr>
<tr>
<td>«·Õ«”Ê»</td>
<td><input type="text" name="co" value="'.$row_edit['com'].'" /></td>

</tr>
<tr>
<td>«·„Ã„Ê⁄</td>
<td><input type="text" name="sum" value="'.$row_edit['sum'].'" /></td>
<td><input type="hidden" name="Id" value="'.$row_edit['Id'].'" /></td>

</tr>

</tr>


<tr>
<td></td>
<td><input type="submit" value="Õ›Ÿ "name="edit_news" id="input_s">
<input type="hidden" value="'.$get_id.'" name="id"> 
</td>
</tr>

</table>
</form>';
}

}
if($_POST['add_news'])
{$post_Num=$_POST['num'];
$post_Name=$_POST['name'];
$post_Q=$_POST['q'];
$post_e=$_POST['e'];
$post_a=$_POST['ar'];
$post_si=$_POST['si'];
$post_m=$_POST['ma'];
$post_en=$_POST['en'];
$post_c=$_POST['co'];

if($post_Num!=''||$post_Name!='')
{//echo "ok";

$post_s=$post_c+$post_en+$post_m+$post_si+$post_a+$post_Q+$post_e;
$insert=mysql_query("INSERT INTO `school2`.`result`(`Id`,`Numstu`,`Name`, `Quraan` ,`eslam`,`arabic`,`english`,`math`,`com`,`sum`,`since`)
VALUES ('Null','$post_Num','$post_Name','$post_Q' ,'$post_e','$post_a','$post_en','$post_m','$post_c','$post_s','$post_si')"
);
if($insert)
{echo'<div class="sa"><p> „ «·«÷«›Â</p></div>';
echo'<meta http-equiv="refresh" content="1; url=result.php"/>';
exit;
}
else {die("could not connect".mysql_error());}


}
else 
{echo'<div class="err"> Œÿ« </div> ';}

}

if($_REQUEST['action']=='add')
{echo'
<form method="post" action="">
<table border="0" align="center">
<tr>
<td>—ﬁ„ «·ÿ«·»</td>
<td><input type="text" name="num" /></td>
</tr>
<tr>
<td>«”„ «·ÿ«·»</td>
<td><input type="text" name="name" /></td>

</tr>
<tr>
<td>«·ﬁ—«‰ «·ﬂ—Ì„</td>
<td><input type="text" name="q" /></td>
<tr>
<td>«·«”·«„Ì…</td>
<td><input type="text" name="e" /></td>

</tr>
<tr>
<td>«··€… «·⁄—»Ì…</td>
<td><input type="text" name="ar"  /></td>

</tr>
<tr>
<td>«··€… «·«‰Ã·Ì“Ì…</td>
<td><input type="text" name="en" /></td>

</tr>
<tr>
<td>«·⁄·Ê„</td>
<td><input type="text" name="si" /></td>

</tr>
<tr>
<td>«·—Ì«÷Ì« </td>
<td><input type="text" name="ma"/></td>

</tr>
<tr>
<td>«·Õ«”Ê»</td>
<td><input type="text" name="co" /></td>

</tr>
<tr>
<td>«·„Ã„Ê⁄</td>
<td><input type="text" name="sum" /></td>

</tr>

</tr>


<tr>
<td></td>
<td><input type="submit" value="Õ›Ÿ  "name="add_news" id="input_s">

</td>
</tr>

</table>
</form>';
}
?>

<table border="1" align="center">
<tr>
<td>StudentNum</td>
<td>Name</td>
<td>update </td>
<td>delete</td>
</tr>
<?
$quary_news=mysql_query("select * from result");
while($row_news=mysql_fetch_array($quary_news))
{echo'<tr>
<td>'.$row_news['Numstu'].'</td>
<td>'.$row_news['Name'].'</td>
<td><a href="?action=Edit&id='.$row_news['Numstu'].'"> ⁄œÌ·</td>
<td><a href="?action=delete&id='.$row_news['Numstu'].'">Õ–›</td>
</tr>';}
?>
</table>
</div>
</body>
