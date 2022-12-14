<?php
   ini_set("error_reporting", 1);
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: pre-check=0, post-check=0", false);
   header("Pragma: no-cache");

   if ($_GET["rel"]!="tab") {
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="keywords" content="Without refresh change url content">
   <meta name="description" content="Without refresh change url content
   using php, css & Javascript. user can be change and load url and
   content without reloading or refreshing window with using xhr">
   <meta name="author" content="Modassir">
   <title>Coding Modassir – Without refresh change url content</title>
   <link rel="stylesheet" href="./style/style.css">
   <script src="./src/script.main.js" defer></script>
</head>
</body>
   <div class="wrapper">
      <h1>Without refresh change url content</h1>
      <div class="tabs">
         <a href="html">HTML</a>
         <a href="css">CSS</a>
         <a href="javascript">Javascript</a>
         <a href="index">PHP</a>
      </div>
      <div id="content">
<?php } ?>