<?php

include "../header.php";

?>

<div style="position:absolute;top:139px;left:0px;width:100%;text-align:center;background-color:#f5f5f5;">

<div style="margin:auto;margin-top:30px;margin-bottom:30px;width:800px;text-align:left:">

<?php
  
$teammembers = array("Jonathan Karten", "Ari Holzhauer", "David Heagy", "Phil Shnayderman", "Thomas Li", "Noa Amzallag", "Hobart Pao", "Abigale Wang", "Sean Le Van");
  
foreach($teammembers as $team){
  
  echo '<div style="margin:auto;width:800px;background-color:#FFFFFF;box-shadow:10px 0px 30px rgba(0, 0, 0, 0.1);"> <div style="padding:30px;"> <div style="font-family:\'Montserrat\';font-weight:700;font-size:36px;color:#2CAFE4;text-align:left;">".$team."</div> <div style="margin-top:22px;font-family:\'Vollkorn\';font-weight:400;font-size:18px;line-height:28px;text-align:left;color:#444444;">Member of Iftach Executive Board</div> </div> </div> </div>';
  
}
  
?>
  
</div>
