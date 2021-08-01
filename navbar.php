<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NAVBAR</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<div id="wrap">
	<nav>
		<div class="logo">
			<img src="images/logo.png">
		</div>
		<button type="button" class="btn-hamburger" data-action="nav-toggle">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</button>
		<ul class="nav-menu">
			<li class="nav-item"><a href="#">Home</a></li>
			<li class="nav-item"><a href="#">About</a></li>
			<li class="nav-item dropdown">
				<a href="#" data-action="dropdown-toggle">Listing Property</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Rumah 1 Lantai</a>
					<a class="dropdown-item" href="#">Rumah 2 Lantai</a>
					<a class="dropdown-item" href="#">Ruko</a>
				</div>
			</li>
			<li class="nav-item"><a href="#">Contact Us</a></li>
		</ul>
	</nav>
	</div>

<div class="hero">

	<div class="row">
		<div class="col-1">
			<h1>EXPLORE<br> Best Property</h1>
			<p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>

			<button type="button">Explore Property</button>
			<div class="titik">
			<ul>
				<li class="btn active"></li>
				<li class="btn"></li>
				<li class="btn"></li>
			</ul>
		</div>
		</div>
		<div class="col-2">
			<img src="images/pic1.png" id="banner">
		</div>
	</div>

	<footer>
		<p>&copy; www.laeltes.com All Right Reserve</p>
	</footer>
	
</div>




<script type="text/javascript">
let nav = document.querySelector('nav');
let dropdown = nav.querySelector('.dropdown');
let dropdownToggle = nav.querySelector("[data-action='dropdown-toggle']");
let navToggle = nav.querySelector("[data-action='nav-toggle']");

dropdownToggle.addEventListener('click', () => {
	if (dropdown.classList.contains('show')) {
		dropdown.classList.remove('show');
	} else {
		dropdown.classList.add('show');
	}
})

navToggle.addEventListener('click', () => {
	if (nav.classList.contains('opened')) {
		nav.classList.remove('opened');
	} else {
		nav.classList.add('opened');
	}
})
</script>


<script type="text/javascript">
	var btn = document.getElementsByClassName("btn");
	var banner = document.getElementById("banner");

	btn[0].onclick=function(){
		banner.src="images/pic1.png";
		animation();
		this.classList.add("active");

	}

	btn[1].onclick=function(){
		banner.src="images/pic2.png";
		animation();
		this.classList.add("active");

	}
	btn[2].onclick=function(){
		banner.src="images/pic3.png";
		animation();
		this.classList.add("active");
	}

	function animation(){
		banner.classList.add("zoom");
		setTimeout(function(){
			banner.classList.remove("zoom");
		},500);

		for (b of btn){
			b.classList.remove("active");
		}

	}


</script>

</body>
</html>