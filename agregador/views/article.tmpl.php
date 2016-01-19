<?php include('includes/header.php'); ?>
<body> 
 
<div data-role="page">
 
   <header data-role="header" class="<?php echo $siteName; ?>">
      <h1> <?php echo ucWords($siteName); ?> </h1>
   </header>
 
   <div data-role="content">  
        <h1> <?php echo $feed->title; ?> </h1>
        <div> <?php echo $feed->description; ?> </div>
   </div>
 
   <footer data-role="footer" ">
      <h4> <a href="<?php echo $feed->guid->content;?>"> Leia em <?php echo ucWords($siteName); ?></a></h4>
   </footer>
</div>
 
</body>
</html>
