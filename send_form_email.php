<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="theme-color" content="#e84e1b">
<meta name="viewport" content="width=device-width">
<title>Kontakt</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,100italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
					<span><i class="fa fa-lg fa-phone"></i>&nbsp;&nbsp;&nbsp;061 14-61-0560</span>
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
    
    
    	<iframe id="map"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d170290.57654170992!2d20.282513040381428!3d44.815159727956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa3d7b53fbd%3A0x1db8645cf2177ee4!2z0JHQtdC-0LPRgNCw0LQ!5e1!3m2!1ssr!2srs!4v1567870158698!5m2!1ssr!2srs" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
    
    	<div class="wrapper">
        
        	<main id="mainFull">

            	<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "contact@kovinkamarkovic.com";
    $email_subject = "Your email subject line";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 

 
<?php
 
}
?>
	
	
	<div id="forma">
	<form name="contactform" method="post" action="send_form_email.php">
	<table width="450px">
		<tr>
		 <td valign="top">
		  <label for="first_name">First Name </label>
		 </td>
		 <td valign="top">
		  <input  type="text" name="first_name" maxlength="80" size="40">
		 </td>
		</tr>
			<tr>
			 <td valign="top"">
			  <label for="last_name">Last Name </label>
			 </td>
			 <td valign="top">
			  <input  type="text" name="last_name" maxlength="80" size="40">
			 </td>
			</tr>
			<tr>
				 <td valign="top">
				  <label for="email">Email Address </label>
				 </td>
				 <td valign="top">
				  <input  type="text" name="email" maxlength="80" size="40">
				 </td>
				</tr>
				<tr>
				 <td valign="top">
				  <label for="telephone">Telephone Number</label>
				 </td>
				 <td valign="top">
				  <input  type="text" name="telephone" maxlength="80" size="40">
				 </td>
				</tr>
						<tr>
						 <td valign="top">
						  <label for="comments">Comments </label>
						 </td>
						 <td valign="top">
						  <textarea  name="comments" maxlength="1000" cols="65" rows="15"></textarea>
						 </td>
						</tr>
						<tr>
						 <td colspan="2" style="text-align:center">
						  <input type="submit" value="Submit">   
						 </td>
						</tr>
						</table>
						</form>
</div>
	
	
	
	

    
    
                
                <div class="contactInfo">
                    <p>Za sva pitanja vezana za izradu sajta ili projektovanje baze podataka mozete da me kontaktirate.</p>
                    <p>Putem email adrese koja se nalazi odmah ispod ili na kontakt telefon</p>
                    <p>Svakako mozete da popunite i kontakt formu  i da postavite vasa pitanja</p>
                    
                </div>
                
            </main>
        
            
        </div>
    </section>
    
    
    
    <footer id="footer" class="negative">
    	<div class="wrapper">
    		
            <div class="footerBlock">
            	<h3>Kontakt</h3>
            	 <div class="contactInfo">
                    <p><i class="fa fa-2x fa-phone"></i> 061.14.61.056</p>
                    <p><i class="fa fa-2x fa-envelope"></i>kovinka.markovic@gmail.com</p>
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























