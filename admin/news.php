<?php
include("dp.php");
?>
<link href="stylea.css" rel="stylesheet" type="text/css">
<body>
<div class="head">������� </div>
<div class="body">
<div class="add"><a href="?action=add">����� ��� </a></div>
<?
if($_REQUEST['action']=='delete')
{
$get_id=$_GET['id'];

if($get_id)
{
$dele=mysql_query("delete from news where id=".$get_id);
if($dele)
{
echo'<div class="sa"><p>�� ����� �����</p></div>';
echo'<meta http-equiv="refresh" content="1; url=news.php"/>';
exit;
}
}
}
if($_POST['edit_news'])
{
$post_title=$_POST['title'];
$post_pice=$_POST['pic'];
$post_short=$_POST['short'];
$post_news=$_POST['news'];
$post_id=$_POST['id'];
if($post_title!=''||$post_short!=''||$post_news!='')
{$update=mysql_query("update `school2`.`news` set `title`='$post_title' ,`short`='$post_short' ,`news`='$post_news' ,`pic`='$post_pice' where Id=$post_id"
);
if($update)
{echo'<div class="sa"><p>�� ������� �����</p></div>';
echo'<meta http-equiv="refresh" content="1; url=news.php"/>';
exit;}
}
else echo"���� ������ ������";
}
if($_REQUEST['action']=='Edit'){
$get_id=intval($_GET['id']);
if($get_id)
{
$quary_edit=mysql_query("select * from news where id=".$get_id);
$row_edit=mysql_fetch_array($quary_edit);
echo'
<form method="post" action="">
<table border="0" align="center">
<tr>
<td>����� �����</td>
<td><input type="text" name="title" value="'.$row_edit['title'].'" /></td>
</tr>
<tr>
<td>������</td>
<td><input type="text" name="pic" value="'.$row_edit['pic'].'" /></td>
</tr>

<tr>
<td>��� �� �����</td>
<td><textarea name="short" value="" >'.$row_edit['short'].'</textarea></td>
</tr>
<tr>
<td>�����</td>
<td><textarea name="news">'.$row_edit['news'].'</textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="����� �����"name="edit_news" id="input_s">
<input type="hidden" value="'.$get_id.'" name="id"> 
</td>
</tr>

</table>
</form>';
}

}
if($_POST['add_news'])
{$post_title=$_POST['title'];
$post_pice=$_POST['pic'];
$post_short=$_POST['short'];
$post_news=$_POST['news'];
//$post_date=time();
if($post_title!=''||$post_short!=''||$post_news!='')
{//echo "ok";


$insert=mysql_query("INSERT INTO `school2`.`news` (`Id` ,`title` ,`short` ,`news` ,`pic`)
VALUES (NULL , '$post_title', '$post_short', '$post_news', '$post_pice')"
);
if($insert)
{echo'<div class="sa"><p>�� ����� �����</p></div>';
echo'<meta http-equiv="refresh" content="1; url=news.php"/>';
exit;
}
else {die("could not connect".mysql_error());}


}
else 
{echo'<div class="err"> ���� ���� ������ ����� </div> ';}

}

if($_REQUEST['action']=='add')
{echo'

<form method="post" action="">
<table border="0" align="center">
<tr>
<td>����� �����</td>
<td><input type="text" name="title" /></td>
</tr>
<tr>
<td>������</td>
<td><input type="file" name="pic"</td>
</tr>

<tr>
<td>��� �� �����</td>
<td><textarea name="short"></textarea></td>
</tr>
<tr>
<td>�����</td>
<td><textarea name="news"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="��� �����"name="add_news"> </td>
</tr>

</table>
</form>';}?>

<table border="1" align="center">
<tr>
<td>int</td>
<td>title</td>
<td>update </td>
<td>delete</td>
</tr>
<?
$quary_news=mysql_query("select * from news");
while($row_news=mysql_fetch_array($quary_news))
{echo'<tr>
<td>'.$row_news['Id'].'</td>
<td>'.$row_news['title'].'</td>
<td><a href="?action=Edit&id='.$row_news['Id'].'">�����</td>
<td><a href="?action=delete&id='.$row_news['Id'].'">���</td>
</tr>';}
?>
</table>
</div>
</body>
