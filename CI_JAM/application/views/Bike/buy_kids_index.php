<!DOCTYPE html>
<html>

<head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" href="<?php echo base_url('css/mystyle.css');?>">
</head>
<p><i>All our bikes for sale are used but in great condition</i></p>
<h2>Bicycles for Sale</h2>
<button id=mbtn style="color:grey" >Men's</button>
<button id=wbtn style="color:grey">Women's</button>
<button id=kbtn style="color:black">Kids'</button>
<br>
Click the bicycle of your choice to buy now!

<div class="all_rental">
	<iframe class=iframe1 id=Mens src="<?php echo site_url('bike/buy_mens_oc'); ?>"></iframe>
</div>
<div class="all_rental">
	<iframe class=iframe1 id=Womans src="<?php echo site_url('bike/buy_womens_oc'); ?>"></iframe>
</div>
<div class="all_rental">
	<iframe class=iframe1 id=Kids src="<?php echo site_url('bike/buy_kids_oc'); ?>"></iframe>
</div>

<script>
$(document).ready(function () {
   mbtn = false;
   wbtn = false;
   kbtn = true;
   mid = $("#Mens");
   wid = $("#Womans");
   kid = $("#Kids");
   mid.hide();
   wid.hide();


   $("#mbtn").click(function () {
      wbtn = false;
      kbtn = false;
      mbtn = true;
      toggles();
      $(this).css("color", "black");
   });


   $("#wbtn").click(function () {
      wbtn = true;
      kbtn = false;
      mbtn = false;
      toggles();
      $(this).css("color", "black");   
   });


   $("#kbtn").click(function () {
      wbtn = false;
      kbtn = true;
      mbtn = false;
      toggles();
      $(this).css("color", "black");     
   });

   function toggles() {
       if (mbtn && !wbtn && !kbtn) {
         mid.show();
         wid.hide();
         kid.hide();
         $("#kbtn").css("color", "grey");
         $("#wbtn").css("color", "grey");

      } else if (!mbtn && wbtn && !kbtn) {
         mid.hide();
         wid.show();
         kid.hide();
         $("#kbtn").css("color", "grey");
         $("#mbtn").css("color", "grey");

      } else if (!mbtn && !wbtn && kbtn) {
         mid.hide();
         wid.hide();
         kid.show();
         $("#mbtn").css("color", "grey");
         $("#wbtn").css("color", "grey");
      }
   }

});

</script>