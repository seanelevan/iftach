<?php

include "../header.php";

?>

<div style="position:absolute;top:139px;left:0px;width:100%;height:2458px;background-image:url('https://i.imgur.com/8NKlT0z.png');margin-bottom:80px;background-position:center;background-size:1366px;">

<div style="margin-top:280px;text-align:center;">

<div style="padding:16px;padding-top:24px;padding-bottom:24px;width:48px;margin:auto;border-radius:100%;border:2px solid #FFFFFF;transition:all 0.5s;top:0px;position:relative;transform:scale(0.6);cursor:pointer;" id="flourish" onclick='document.getElementById("info").scrollIntoView(true)'>
<img src="https://i.imgur.com/ItJRh1j.png" style="width:48px;">
</div>

<div style="margin:auto;margin-top:800px;width:700px;" id="info">

<div style="font-family:'Montserrat';font-weight:700;font-size:36px;color:#2CAFE4;text-align:left;">Bringing Israeli companies to the North American market</div>

<div style="margin-top:22px;font-family:'Vollkorn';font-weight:400;font-size:24px;line-height:30px;text-align:left;color:#444444;">We offer targeted, innovative market research and strategic insights tailored to the needs of Israeli companies hoping to penetrate the American market. Israeli innovation deserves an American audience — <span style="color:#2cafe4;">Iftach</span> is here to enable its clients to chart out new territories and turn risk & compliance into opportunities.


<br><br><br>

<span class="bluebutton">OUR MISSION</span><span class="bluebutton" style="color:#2CAFE4;background-color:#FFFFFF;padding:20px;padding-left:50px;padding-right:50px;box-shadow:inset 0px 0px 0px 2px #2cafe4, 0px 10px 30px #CDECF9;position:relative;left:15px;">OUR TEAM</span>

</div>

<div style="margin:auto;margin-top:290px;width:700px;background-color:#FFFFFF;box-shadow:10px 0px 30px rgba(0, 0, 0, 0.1);height:350px;">

<div style="padding:30px;">

<div style="font-family:'Montserrat';font-weight:700;font-size:30px;color:#444444;" id="inquire">Inquire about our Services</div>

<div style="font-family:'Montserrat';font-weight:700;font-size:14px;color:#444444;margin-top:30px;text-align:left;">Name
<br><br>
<form id="formsubmit" action="mailto:info@iftachgroup.com" method="post" enctype="text/plain" style="display:inline;">
  <input type="text" style="outline:0;width:100%;border:0px;background-color:#EEEEEE;border-radius:2px;padding:15px;font-family:'Montserrat';font-size:13px;font-weight:500;color:#111;" name="message"></div>


<div style="font-family:'Montserrat';font-weight:700;font-size:14px;color:#444444;margin-top:30px;text-align:left;">Subject
<br><br>
<input type="text" style="outline:0;width:100%;border:0px;background-color:#EEEEEE;border-radius:2px;padding:15px;font-family:'Montserrat';font-size:13px;font-weight:500;color:#111;" name="subject"></div>

<div style="margin-top:45px;">

<span class="bluebutton" style="border-radius:100px;" onclick='document.getElementById("formsubmit").submit();'>SUBMIT</span>
  
  </form>

</div>

</div>

</div>



</div>


</div>

</div>

<div style="position:absolute;top:200px;right:164px;">
  
  <div id="fb-root"></div> <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script> <div class="fb-page" data-href="https://www.facebook.com/IftachGroup/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/IftachGroup/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/IftachGroup/">The Iftach Group</a></blockquote></div>

</div>

<script>
function flourish(){

var property = document.getElementById("flourish").style.top;

if(property == "0px"){

document.getElementById("flourish").style.top="8px";

}

else{

document.getElementById("flourish").style.top="0px";

}


}

setInterval("flourish()", 500);
</script>
