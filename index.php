<?php
require_once 'database.php';
require_once 'function.php';

session_start();  
if(isset($_POST["send"])) { 
    $name = htmlspecialchars ($_POST["name"]);
	$email = htmlspecialchars ($_POST["email"]);
	$question = htmlspecialchars ($_POST["question"]);
	$_SESSION["name"] = $name;  
	$_SESSION["email"] = $email;
	$_SESSION["question"] = $question;

	
	//$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";	
	$to = "vovuxa2013@yandex.ru";
	$subject = "Question from ".$name." ".$email;
	$subject = "=?utf-8?B?".base64_encode($subject)."?="; 
	$message = $question;
    mail ($to, $subject, $message); 
	//header("Location: success.php?send=1");  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Acnostia</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- стили-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	  	<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	  	<!-- мой js -->
	    <script src="js/main.js"></script>

		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body>
<a id="aHome"></a>
<!-- ==========================  Навигация, главное меню, слоган======================== -->
<section id="Home" style="background-image: url(img/home_bg.jpg);">
	<div class="wr">
		<div class="nav_top">
			<a href="#aContact" class="logo">acrostia</a>
			<nav class="big_menu">
				<ul>
					<li class="act"><a href="#aHome">Home</a> </li>
					<li><a href="#aService">Service</a></li>
					<li><a href="#aAbout">About</a></li>
					<li><a href="#aWork">Work</a></li>
					<li><a href="#aContact">Contacts</a></li>
				</ul>
			</nav>
			<span class="button_hidden_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</span>
		</div>

		<div class="hidden_menu">
			<ul>
				<li><a href="#aHome">Home</a> </li>
				<li><a href="#aService">Service</a></li>
				<li><a href="#aAbout">About</a></li>
				<li><a href="#aWork">Work</a></li>
				<li><a href="#aContact">Contacts</a></li>
			</ul>
		</div>

		<div class="for-image" style="background-image: url(img/slogan26.svg);">
		</div>
		
		<ul class="dots">
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
			<li><a href="#"></a></li>
		</ul>
	</div>
</section>

<a id="aService"></a>
<!-- ==============================  Service  =================================== -->
<section id="Service" style="background-image: url(img/service_bg.jpg);">
	<div class="wr">
		<div class="nav_top">
			<a href="#" class="logo">acrostia</a>
			<nav class="big_menu">
				<ul>
					<li><a href="#aHome">Home</a> </li>
					<li class="act"><a href="#aService">Service</a></li>
					<li><a href="#aAbout">About</a></li>
					<li><a href="#aWork">Work</a></li>
					<li><a href="#aContact">Contacts</a></li>
				</ul>
			</nav>
			<span class="button_hidden_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</span>
		</div>
		<div class="hidden_menu">
			<ul>
				<li><a href="#aHome">Home</a> </li>
				<li><a href="#aService">Service</a></li>
				<li><a href="#aAbout">About</a></li>
				<li><a href="#aWork">Work</a></li>
				<li><a href="#aContact">Contacts</a></li>
			</ul>
		</div>
		
		<div class="ourservice container_for_text">
			<h1>OUR SERVICES</h1>
			<h3>Cras commodo mattis justo nec <span>lobortis</span>. Nam ut tellus lobortis, ullamcorper massa sit amet</h3>
			<h5>Cras suscipit porttitor porttitor. Morbi sit amet tincidunt sapien. Curabitur posuere lectus aliquet erat rutrum sollicitudin. In enim diam, ullamcorper quis libero et, ultricies commodo est. Quisque at ante vitae justo fermentum viverra ac eu justo. Ut luctus imperdiet lacus, eget laoreet erat posuere quis.</h5>
		</div>
		<div class="services">
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img rotate">
							<img src="img/card1.jpg" alt="RESEARCHING" width="46px" height="69px">
						</div>
					</div>
				</div>
				<h2>Researching</h2>
				<h5>Praesent interdum blandit quam. Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</h5>

			</div>
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img rotate">
							<img src="img/card2.jpg" alt="DESIGN" width="69px" height="69px">
						</div>	
					</div>
				</div>
				<h2>DESIGN</h2>
				<h5>Praesent interdum blandit quam. Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</h5>
			</div>
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img rotate">
							<img src="img/card3.jpg" alt="DEVELOPMENT" width="69px" height="69px">
						</div>	
					</div>
				</div>
				<h2>Development</h2>
				<h5>Praesent interdum blandit quam. Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</h5>
			</div>
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img rotate">				
							<img src="img/card4.jpg" alt="LAUNCH" width="69px" height="69px">
						</div>	
					</div>
				</div>
				<h2>launch</h2>
				<h5>Praesent interdum blandit quam. Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</h5>
			</div>
		</div>
	</div>
</section>

<a id="aAbout"></a>
<!-- ==============================  About  ====================================== -->
<section id="About" style="background-image: url(img/About_bg.jpg);">
	<div class="wr">
		<div class="nav_top">
			<a href="#" class="logo">acnostia</a>
			<nav class="big_menu">
				<ul>
					<li><a href="#aHome">Home</a> </li>
					<li><a href="#aService">Service</a></li>
					<li class="act"><a href="#aAbout">About</a></li>
					<li><a href="#aWork">Work</a></li>
					<li><a href="#aContact">Contacts</a></li>
				</ul>
			</nav>
			<span class="button_hidden_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</span>
		</div>
		<div class="hidden_menu">
			<ul>
				<li><a href="#aHome">Home</a> </li>
				<li><a href="#aService">Service</a></li>
				<li><a href="#aAbout">About</a></li>
				<li><a href="#aWork">Work</a></li>
				<li><a href="#aContact">Contacts</a></li>
			</ul>
		</div>
		
		<div class="about container_for_text">
			<h1>Who we are & what we do</h1>
			<h5>Cras suscipit porttitor porttitor. Morbi sit amet tincidunt sapien. Curabitur posuere lectus aliquet erat rutrum sollicitudin. In enim diam, ullamcorper quis libero et, ultricies commodo est. Quisque at ante vitae justo fermentum viverra ac eu justo. Ut luctus imperdiet lacus, eget laoreet erat posuere quis.</h5>
			<div class="green"><h2 class="bold">Meet the team</h2></div>
			<div class="green_arrow_vn">  
				<div class="green_arrow"></div>
			</div>
		</div>

		<div class="team">
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img">
						</div>
					</div>
				</div>
				<h2 class="bold">Anton Petrov</h2>
				<h5>General manager</h5>
				<ul class="social">
					<li class="fb"> <a href="#"></a> </li>
					<li class="tw"> <a href="#"></a> </li>
					<li class="gplus"> <a href="#"></a> </li>
					<li class="in"> <a href="#"></a> </li>
				</ul>
			</div>
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img">
						</div>	
					</div>
				</div>
				<h2 class="bold">Kiril DONCHEV</h2>
				<h5>Design Master</h5>
				<ul class="social">
					<li class="fb"> <a href="#"></a> </li>
					<li class="tw"> <a href="#"></a> </li>
					<li class="gplus"> <a href="#"></a> </li>
					<li class="in"> <a href="#"></a> </li>
				</ul>
			</div>
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img">
						</div>	
					</div>
				</div>
				<h2 class="bold">Ilian Bonev</h2>
				<h5>Developer Ninja</h5>
				<ul class="social">
					<li class="fb"> <a href="#"></a> </li>
					<li class="tw"> <a href="#"></a> </li>
					<li class="gplus"> <a href="#"></a> </li>
					<li class="in"> <a href="#"></a> </li>
				</ul>
			</div>
			<div class="card">
				<div class="bl">
					<div class="cardbg">
						<div class="img">				
						</div>	
					</div>
				</div>
				<h2 class="bold">Doni Stamov</h2>
				<h5>SEO guru</h5>
				<ul class="social">
					<li class="fb"> <a href="#"></a> </li>
					<li class="tw"> <a href="#"></a> </li>
					<li class="gplus"> <a href="#"></a> </li>
					<li class="in"> <a href="#"></a> </li>
				</ul>
			</div>
		</div>
	</div>
</section>

<a id="aWork"></a>
<!-- ==============================  Workss ====================================== -->
<section id="Work" style="background-image: url(img/work_bg.jpg);">
	<div class="wr">
		<div class="nav_top">
			<a href="#" class="logo">acrostia</a>
			<nav class="big_menu">
				<ul>
					<li><a href="#aHome">Home</a> </li>
					<li><a href="#aService">Service</a></li>
					<li><a href="#aAbout">About</a></li>
					<li class="act"><a href="#aWork">Work</a></li>
					<li><a href="#aContact">Contacts</a></li>
				</ul>
			</nav>
			<span class="button_hidden_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</span>
		</div>
		<div class="hidden_menu">
			<ul>
				<li><a href="#aHome">Home</a> </li>
				<li><a href="#aService">Service</a></li>
				<li><a href="#aAbout">About</a></li>
				<li><a href="#aWork">Work</a></li>
				<li><a href="#aContact">Contacts</a></li>
			</ul>
		</div>

		<div class="ourWork container_for_text">
			<h1>OUR WORK</h1>
			<h5>Cras suscipit porttitor porttitor. Morbi sit amet tincidunt sapien. Curabitur posuere lectus aliquet erat rutrum sollicitudin. In enim diam, ullamcorper quis libero et, ultricies commodo est. Quisque at ante vitae justo fermentum viverra ac eu justo. Ut luctus imperdiet lacus, eget laoreet erat posuere quis.</h5>
		</div>

		<div class="row" id="PORTFOLIO">
			<h3>PORTFOLIO</h3>
			<nav>
				<ul>
				<?php $categories = get_categores(); ?>
					<li><a href="?id=0#aWork">All</a></li>

					<?php foreach ($categories as $category): ?>
					<li><a href="?id=<?=$category["id"]?>#aWork"> <?=$category["type"]?> </a></li>
					<?php endforeach;?>
					
					<!--
					<li><a href="#">Photography</a></li>
					<li><a href="#">Logo design</a></li>
					<li><a href="#">Web design</a></li>
					-->
				</ul>
			</nav>
		</div>

		<?php $works = get_works ($_GET["id"]); ?>

		<div class="works">
			<?php foreach ($works as $work): ?>
				<div class="card">
					<div class="img" style="background-image: url(img/<?=$work['name_file']?>);"></div>
					<div class="for-hover"></div>
					<h3><?=$work['Name_of_work']?></h3>
				</div>
			<?php endforeach;?>

<!--		<div class="card">
				<div class="img" style="background-image: url(img/work1.jpg);"></div>
				<div class="for-hover"></div>
				<h3>AAenean a elit</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work2.jpg);"></div>
				<div class="for-hover"></div>
				<h3>Aliquam</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work3.jpg);"></div>
				<div class="for-hover"></div>
				<h3>Suspendisse libero</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work4.jpg);"></div>
				<div class="for-hover"></div>
				<h3>Maecenas fringilla</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work5.jpg);"></div>
				<div class="for-hover"></div>
				<h3>Donec vehicula</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work6.jpg);"></div>
				<div class="for-hover"></div>
				<h3>Ut et sapien</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work7.jpg);"></div>
				<div class="for-hover"></div>
				<h3>quis malesuada</h3>
			</div>
			<div class="card">
				<div class="img" style="background-image: url(img/work8.jpg);"></div>
				<div class="for-hover"></div>
				<h3>Vestibulum ante</h3>
			</div>
-->			
		</div>
	</div>
</section>

<a id="aContact"></a>
<!-- ==============================  Contacts  ==================================== -->
<section id="Contact" style="background-image: url(img/contact_bg2.jpg);">
	<div class="wr">
		<div class="nav_top">
			<a href="#" class="logo">acrostia</a>
			<nav class="big_menu">
				<ul>
					<li><a href="#aHome">Home</a> </li>
					<li><a href="#aService">Service</a></li>
					<li><a href="#aAbout">About</a></li>
					<li><a href="#aWork">Work</a></li>
					<li class="act"><a href="#aContact">Contacts</a></li>
				</ul>
			</nav>
			<span class="button_hidden_menu">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</span>
		</div>
		<div class="hidden_menu">
			<ul>
				<li><a href="#aHome">Home</a> </li>
				<li><a href="#aService">Service</a></li>
				<li><a href="#aAbout">About</a></li>
				<li><a href="#aWork">Work</a></li>
				<li><a href="#aContact">Contacts</a></li>
			</ul>
		</div>

		<div class="contactUs container_for_text">
			<h1>CONTACT US</h1>
			<h5>Cras suscipit porttitor porttitor. Morbi sit amet tincidunt sapien. Curabitur posuere lectus aliquet erat rutrum sollicitudin. In enim diam, ullamcorper quis libero et, ultricies commodo est. Quisque at ante vitae justo fermentum viverra ac eu justo. Ut luctus imperdiet lacus, eget laoreet erat posuere quis.</h5>
		</div>

		<div class="container">
			<div class="adress">
				<div class="row1">Address</div>
				<div class="row2">
					<div class="text">
						<span>Acrostia</span>
						<br>
						<p>Sevenoaks Rd <br>
						Sevenoaks TN14 7HR, UK</p>
						<br>
						<span>Phone:  </span><a href="tel:+44 555 555 555">+44 555 555 555</a> <br>
						<span>Fax:    </span><a href="tel:+44 555 555 555">+44 555 555 555</a> <br>
						<span>E-mail: </span><a href="mailto:info@acrostia.com">info@acrostia.com</a><br>
						<span>Skype:  </span><a href="callto:AcOstia">AcOstia</a>

					</div>
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4984.405652280902!2d0.1268162280763615!3d51.344180868434606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df532cfb5715e9%3A0x243a488f1ffa4431!2z0KXQvtC70YHRgtC10LQsINCh0LXQstC10L3QvtGD0LrRgSBUTjE0IDdIUiwg0JLQtdC70LjQutC-0LHRgNC40YLQsNC90LjRjw!5e0!3m2!1sru!2sru!4v1488819091658" width="300" height="220" frameborder="0" style="border:0" allowfullscreen></iframe></div>
				</div>				
				<div class="row3"></div>
			</div>
			<div class="forms">
				<div class="row1">Ask a question</div>
				
				<form action="" method="post" name="Question">
					<div class="row2">
						<input type="text" name="name" placeholder="Name" value="<?=$_SESSION["name"]?>">
						<input type="email" name="email" placeholder="Your e-mail" value="<?=$_SESSION["email"]?>">
						<textarea name="question" placeholder="Your question"><?=$_SESSION["question"]?></textarea>
					</div>		
					<div class="row3">
						<div class="button">
							<input type="submit" name="send" value="send" class="chart1"> 
							<div class="chart2">Thanks you!</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="social">
		<ul class="for-social">
			<li class="fb"> <a href="#"></a> </li>
			<li class="tw"> <a href="#"></a> </li>
			<li class="gplus"> <a href="#"></a> </li>
			<li class="in"> <a href="#"></a> </li>
		</ul>

	</div>
</section>

</body>
</html>