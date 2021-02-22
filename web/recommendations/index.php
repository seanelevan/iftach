<?php

include "../header.php";

?>

<title>Iftach - Meet the Team</title>

<div style="position:absolute;top:139px;left:0px;width:100%;text-align:center;background-color:#f5f5f5;">

<div style="margin:auto;margin-top:30px;margin-bottom:30px;width:800px;text-align:left:">

<?php
  
$teammembers = array("Jonathan Karten, Founder", "Ari Holzhauer, President", "Flurin Domenig, Chief Operating Officer", "David Heagy", "Phil Shnayderman", "Sean Le Van", "Thomas Li", "Noa Amzallag", "Hobart Pao", "Abigale Wang", "Jafar Tursunov");
  
  $descriptions = array("Jonathan is a military veteran of the IDF Air Force and a student of Financial Economics and Psychology with a concentration in Business Management. Jonathan has worked for the Israeli Economic Mission in New York City and the Prime Minister's Office in Jerusalem. He is CEO of Iftach Group.", "Ari is a rising senior pursuing study in Political Science, at  Columbia University, and Modern Jewish History, at the Jewish Theological Seminary. Ari has worked in several law firms in practices ranging from business, tech law, and international law. He is the President of Iftach Group.", "Flurin is the COO of Iftach Consulting.", "David is a Data Science student. David has an interest in machine learning and has worked with a non-profit disabilities group (AXS Lab) to analyze and manage the backend of their web application.", "Phillip has a degree in Physics & Math from Yeshiva University. Phillip is now a Mechanical Engineering student at Columbia University where he is part of the Rocketry and Racecar initiatives.", "Sean Le Van is a Political Science - Statistics major. He has developed startups in the past including Frizbee, featured on BBC News, and ACUMAN, featured on the #1 spot on Hacker News. He currently maintains a statistical analysis site Plural Vote in which forecasts for U.S. elections are published.", "Thomas studies Philosophy and Economics at Columbia University. Thomas is currently working for Tencent in the Marketing & Brand Public Relations division.", "Noa is an executive board member at Iftach.", "is a graduating senior at Columbia University studying mathematics who loves helping startups solve their problems. He is currently the Chief Analytics Officer of the Iftach Group, working to implement analytics and conduct market research.", "Abigale is a member at Iftach.", "Jafar is a Political Science student. Jafar has experience in supply chain management within the healthcare industry"); 
  
  $i = 0;
  
foreach($teammembers as $team){
  
  $i++;
  
  echo '<div style="margin:auto;width:800px;background-color:#FFFFFF;box-shadow:10px 0px 30px rgba(0, 0, 0, 0.1);margin-bottom:30px;"> <div style="padding:30px;">';
  echo '<div style="border: 3px solid #FFFFFF;text-shadow: 10px 0px 30px rgb(0 0 0 / 10%);padding-top: 25px;color: #FFFFFF;margin-top: -8px;padding-left: 13px;font-weight: 600;margin-right: 30px;border-radius: 100%;font-size: 60px;float: left;padding-bottom: 4px;box-shadow: 0px 6px 18px rgb(0 0 0 / 15%);padding-right: 14px;/* line-height: 0px; */line-height: 27px;background-color: #2CAFE4;">“</div>';
  echo '<div style="font-family:\'Montserrat\';font-weight:700;font-size:34px;color:#2CAFE4;text-align:left;"><span style="color:#f5f5f5;">#'.$i.' &bull;</span> '.$team.'</div> <div style="margin-top:22px;font-family:\'Vollkorn\';font-weight:400;font-size:18px;line-height:28px;text-align:left;color:#444444;">'.$descriptions[$i-1].'</div> </div> </div>';
  
}
  
?>
  
</div>
