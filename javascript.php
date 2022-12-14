<?php include_once("./header.php"); ?>

<div>Here coming data from 
   <strong>Javascript</strong> page. 
   <a href="#" class="link">Click</a>
</div>
<!-- add script -->
<script>
   document.querySelector(".link").addEventListener("click", function( e ) {
      e.preventDefault();
      alert("I am Javascript page.");
   });
</script>

<?php include_once("./footer.php"); ?>