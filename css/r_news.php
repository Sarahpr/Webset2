<link href="../admin/style.css" rel="stylesheet" 

type="text/css"><center>
<?php
include("dp.php");
include_once("header.php");
$id_news= $_REQUEST['id'];

   

$quary=mysql_query("select * from news where Id=".$id_news);
$row=mysql_fetch_array($quary);
echo'

<div class="body_bloak">
<div class="newsbody">
<h3>'.$row['title'].'</h3>
<img src="'.$row['pic'].'" width="600px"  height="200px">
<p>'.$row['news'].'</p>
</div>
<br>
<div id="menu"><center><a href="index12.php">«·’›Õ… «·—∆Ì”Ì…</a></center></div>
<br>
</div>';


?>



<?php
include_once("footer.php");
?>