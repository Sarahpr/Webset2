<?php

include("dp.php");
include("header.php");
?>
<link href="style.css" rel="stylesheet" 

type="text/css">
<div class="head_block">«·’›Õ… «·—∆Ì”Ì…</div>
<br>
<div id="container">

<img class="slides" src="../images1/l.jpg"/></div>
<center>
<div id=s>
<marquee direction="right" behavior="alternate"  bgcolor="#996666">
 <?php
$quary=mysql_query("select * from news order by id desc");
while($row=mysql_fetch_array($quary))
{$allnews.="  ".$row['title']." | ";}
echo $allnews;
?>
</marquee></div></center><br />
<center>
<div class="body_bloak">
  <p>
    <?php
$quary=mysql_query("select * from news order by id desc");
while($row=mysql_fetch_array($quary))
{
echo'
<div class="all_news">
<h3>'.$row['title'].' </h3>
<img src='.$row['pic'].' width="100" height="100" >
<p> '.$row['short'].'</p>
<h4><a href="r_news.php?id='.$row['Id'].'">«·„“Ìœ...</a></h4></div>


';
}
?>
  </p>
</div>
</center>



<?php
include("footer.php");
?>