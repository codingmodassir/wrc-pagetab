<?php include_once("./header.php"); ?>

<div>Here coming data from 
   <strong>CSS</strong> page. 
   <a href="#" class="link">Click</a>
</div>
<!-- add script -->
<script>
   document.querySelector(".link").addEventListener("click", function( e ) {
      e.preventDefault();
      alert("I am CSS page.");
   });
</script>

<?php include_once("./footer.php"); ?>