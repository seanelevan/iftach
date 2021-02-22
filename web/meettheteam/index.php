<?php

include "../header.php";

?>

<title>Iftach - Meet the Team</title>

<div style="position:absolute;top:139px;left:0px;width:100%;text-align:center;background-color:#f5f5f5;">

<div style="margin:auto;margin-top:30px;margin-bottom:30px;width:800px;text-align:left:">

<?php
  
$teammembers = array("The Government of Israel Economic Mission in New York",
                    "Orly Cactus",
                    "Booth Guru",
                    "Y2Risk");
  
  $descriptions = array("The goal of the Israel Economic Mission is to promote and facilitate trade and investment between Israel and the United States. The Iftach Group has become a key partner and valuable resource in achieving that goal. Their commitment, work ethic, flexibility, and on-the-ground research skills have allowed them to provide invaluable assistance to a wide variety of Israeli businesses.",
                       "The Iftach Group provided our business with consulting services that were absolutely indispensable towards achieving our goal of expanding operations into the United States. Their team put their wide variety of skills at our disposal, taking on any task we required and accomplishing it efficiently. Whether they were scouting locations for a new farming operation, redesigning our packaging in order to better appeal to the U.S. market, or making connections with potential distribution partners, The Iftach Group always prioritized our company’s needs.",
                       "Our company’s proprietary software is one of our greatest strengths — The Iftach Group recognized that strength, and worked with us to research various new applications for that software within market sectors we had not yet explored. Their carefully researched analyses not only helped to guide our strategy, they also saved us crucial time and effort as we work towards expanding our U.S. operations. Thanks to The Iftach Group, our team was able to concentrate our efforts where it mattered most.",
                       "It was a great pleasure to work with the The Iftach Group #liquidityrisk in the past couple of months. Jonathan Karten and his team deliver a spot on analysis of the #financialrisk sector and help Y2RISK focus on our target market. We are highly appreciated of the professional delivery and depth of their report. Looking forward to continue this great collaboration.
Thank you for all the team at The Iftach Group !!!");
  
  $i = 0;
  
foreach($teammembers as $team){
  
  $i++;
  
  echo '<div style="margin:auto;width:800px;background-color:#FFFFFF;box-shadow:10px 0px 30px rgba(0, 0, 0, 0.1);margin-bottom:30px;"> <div style="padding:30px;"> <div style="font-family:\'Montserrat\';font-weight:700;font-size:34px;color:#2CAFE4;text-align:left;"><span style="color:#f5f5f5;">#'.$i.' &bull;</span> '.$team.'</div> <div style="margin-top:22px;font-family:\'Vollkorn\';font-weight:400;font-size:18px;line-height:28px;text-align:left;color:#444444;">'.$descriptions[$i-1].'</div> </div> </div>';
  
}
  
?>
  
</div>
