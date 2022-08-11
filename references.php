<?php
require_once("klase/classBaza.php");
$db=new Baza();
if(mysqli_connect_error())
{
	echo "Baza nije dostupna!!!!";
	exit();
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Portfolio</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="lightbox2-master/src/css/lightbox.css" rel="stylesheet">
<script src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>

<script>
$(document).ready(function() {
		
	var respmenu 		= $('#respmenu');
	var	menu 			= $('#nav>ul');

	$(respmenu).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var sirina = $(window).width();
		if(sirina > 768 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}	
	});
	
});	
	


</script>



</head>

<body>

<a name="top"></a>
	<header id="header">
    
    	<div id="headerTop">
        	<div class="wrapper">
            	<div id="headerTopLeft">
					<span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;061 14-61-056</span>
					<span><i class="fa fa-lg fa-envelope-o"></i>&nbsp;&nbsp;&nbsp;kovinka.markovic@gmail.com</span>
                </div>
            	<div id="headerTopRight">
                	<a href="#" target="_blank"><i class="fa fa-lg fa-facebook-square"></i></a>
                	<a href="#" target="_blank"><i class="fa fa-lg fa-twitter-square"></i></a>
                	<a href="#" target="_blank"><i class="fa fa-lg fa-linkedin-square"></i></a>
                </div>
            </div>
        </div>
        
        <div id="headerBottom">
        	<div class="wrapper">
            
            	<div id="logo">
                	<a href="index.html">
                    	<img src="images/logo.jpg" alt="logo">
                    </a>
                </div>
                
                <nav id="nav">
                	<ul>
                    	<li><a href="about.html">Usluge</a></li>
                    	<li><a href="products.html">Projekti</a></li>
						<li><a href="projektovanjebaza.html">O bazama</a></li>
						<li><a href="references.php">Portfolio</a></li>
                    	<li><a href="news.html">Blog</a></li>
                    	<li><a href="send_form_email.php">contact</a></li>
                    </ul>
                    <a href="#" id="respmenu" class="button"><i class="fa fa-lg fa-navicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;Navigation</a>
                </nav>
            
            </div>
        </div>   
    
    </header><!-- kraj #header -->
    
    
    
    <section id="central">
    	<div class="wrapper">
        
        	<main id="mainFull">
		<p><img src="images/about-banner.jpg" alt=""></p>
		
		
		<?php
	$upit="SELECT * FROM galerije order by vreme desc";
	$rez=$db->izvrsiUpit($upit);
	if($db->brojRedova($rez)>0)
	{
		echo "<ul>";
		while($red=$db->procitajRed($rez))
			echo "<li><a href='references.php?idGalerije=$red->id'>$red->nazivGalerije</a></li>";
		echo "</ul>";
	}else
		echo "Nema ni jedna galerija u bazi!!!!<br>";
	?>
	
	<center>
	<?php
	if(isset($_GET['idSlike']))
	{
		$idSlike=$_GET['idSlike'];
		$upit="SELECT * FROM galerijeslike WHERE id=$idSlike";
		$rez=$db->izvrsiUpit($upit);
		$red=$db->procitajRed($rez);
		echo "<img src='galerije/$red->slika' alt='Nema slike' height='100px' class='galerija' /><br>$red->komentar";
	}
	?>
	
	
	<?php
	if(isset($_GET['idGalerije']))
	{
		$idGalerije=$_GET['idGalerije'];
		$upit="SELECT * FROM galerijeslike WHERE idGalerije=$idGalerije";
		$rez=$db->izvrsiUpit($upit);
		if($db->brojRedova($rez)>0)
		{
			while($red=$db->procitajRed($rez))
				echo "<a href='galerije/$red->slika' data-lightbox='roadtrip' data-title='$red->komentar'><img  src='galerije/$red->slika' alt='Nema slike' height='100px' class='galerija' /></a>";
				//echo "<img  src='galerije/$red->slika' alt='Nema slike' height='100px' class='galerija' />";
		}else
			echo "Nema nijedna slika za izabranu galeriju!!!!<br>";
	}
	?>
	</center>
            </main>
      
            
        </div>
    </section>
    
    
    
    <footer id="footer" class="negative">
    	<div class="wrapper">
    		
            <div class="footerBlock">
            	<h3>Kontakt</h3>
            	 <div class="contactInfo">
                    <p><i class="fa fa-2x fa-phone"></i> 061.14.61.056</p>
                     <p><a href="send_form_email.php">Kontakt forma</a></p>
                    <p><i class="fa fa-2x fa-globe"></i>www.kovinkamarkovic.com</p>
                    
                </div>
            </div>
            <div class="footerBlock">
            	<h3>Blog</h3>
				<p><a href="one-article.html">Kako sam postala PHP programer 1-deo</a></p>
            	<p><a href="phpdrugideo.html">Kako sam postala PHP programer 2-deo</a></p>
				<p><a href="oprogramerima.html">Kako sam postala PHP programer 3-deo</a></p>
            </div>
            
            <div class="footerBlockR">
            	<img src="images/logo.jpg">
            </div>
            
    	</div>
        <div class="wrapper" id="footerBottom">
        	<a href="#top" class="button">back to top</a>
        	<p>Copyright @ Kovinka Markovic 2019 // <a href="#">privacy</a> / <a href="#">cookie policy</a> </p>
        
        </div>
    </footer>
    

</body>
</html>























