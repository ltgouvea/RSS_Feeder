<html>
<link rel="stylesheet" type="text/css" href="/CSS/mobile.css">
<!-- Cabeçalho -->
<?php include('/includes/header.php'); ?> 

<body>
 <div data-role="page">
  

   <header data-role="header">
      <h1>News Feed</h1>
   </header>
 
 
   <div data-role="content" >
   		<ul data-role="listview" data-theme="a">
                <li>

                    <img src="http://estadao.com.br/estadao/img/favicon/favicon.ico" alt="Estadão" class="ui-li-icon"/>
                    <a href="site.php?siteName=estadao"> Estadão </a>
                </li>
                <li>
                    <img src="http://f.i.uol.com.br/favicon.ico" alt="Folha" class="ui-li-icon"/>
                    <a href="site.php?siteName=folha"> Folha </a>
                </li>
                <li>
                    <img src="http://g1.globo.com/media/portal/img/logos/favicon.png" alt="G1" class="ui-li-icon"/>
                    <a href="site.php?siteName=g1"> G1 </a>
                </li>
                <li>
                [ Adicionar um feed - TO DO]

                </li>

        </ul>
 
   </div>
 
 
   <footer data-role="footer">
 		<h4> www.fc.unesp.bauru </h4>
   </footer>
 
 </div>
  
</body>
</html>