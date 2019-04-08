<!DOCTYPE html>
<html>
<head>
  <title>Good Food Good Mood</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

<style type="text/css">

	p
	{
		font-size: 20px;
		color: white;
		font-family: "Allerta Stencil", Sans-serif;
		background-color: black;
	}

	.makecenter
	{
		align-items: center;
		flex: center;
		justify-content: center;
	}

	table
	{
		border-style: dotted;
	}

	ul 
	{
  		list-style-type: none;
  		margin: 0;
  		padding: 0;
  		overflow: hidden;
  		background-color: green;
	}

	li 
	{
  		float: left;
	}

	li a 
	{
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
	}

	li a:hover 
	{
	  	background-color: white;
	}

</style>
</head>
<body style="background-image: url(mainimg.jpg);">
	<div class="container">
	<h1 class="text-center" style="margin-top: 40px"><b style="font-family: Cursive; color: ghostwhite">Good Food Good Mood</b></h1>

	<ul>
		<li><a href="myBlog.php">Home</a></li>
  		<li><a class="active" href="myBlogIndian.php">Indian</a></li>
  		<li><a href="myBlogChinese.php">Chinese</a></li>
  		<li><a href="myBlogFrench.php">French</a></li>
  		<li><a href="myBlogAmerican.php">American</a></li>
	</ul>


	<div class="row" style="margin-top: 200px ; color: white;" >
		<div class="col-md-1"></div>
		<div class="col-md-4 " style="height: 250px;">
		<a href="myBlogIndian.php">
			<img class="w3-round" src="img6.jpg" height="100%" width="100%">
			<div class="w3-display-bottomleft w3-container"><p>Biryani</p></div>
		</a>
		</div>
		<div class="col-md-1"></div>


		<div class="col-md-6">
		<div class="row" style="height: 125px; margin-top: 60px">
			<div class="col-md-6">
			<a href="myBlogChinese.php">
				<img src="img1.jpg" height="100%" width="100%">
				<div class="w3-display-bottomleft w3-container"><p>Dim Sums</p></div>
			</a>
			</div>
			<div class="col-md-6">
			<a href="myBlogChinese.php">
				<img src="img3.jpg" height="100%" width="100%">
				<div class="w3-display-bottomleft w3-container"><p>Spring rolls</p></div>
			</a>
			</div>
		</div>

<!--
		<div class="row" style="height: 125px">
			<div class="col-md-6">
				<img src="img3.jpg" height="100%" width="100%">
			</div>
			<div class="col-md-6">
				<img src="img5.jpg" height="100%" width="100%">
			</div>
		</div>

-->
		</div>
	</div>


	<div class="row" style="margin-top: 120px ; color: white;" >
	<div class="col-md-1"></div>
		<div class="col-md-4" style="height: 250px">
		<a href="myBlogFrench.php">
			<img src="img8.jpg" height="100%" width="100%">
			<div class="w3-display-bottomleft w3-container"><p>Pain au Chocolat</p></div>

		</a>
		</div>
	<div class="col-md-1"></div>
		<div class="col-md-6">
		<div class="row" style="height: 125px;">
			<div class="col-md-6">
			<a href="myBlogAmerican.php">
				<img class="w3-round" src="img10.jpg" height="100%" width="100%">
				<div class="w3-display-bottomleft w3-container"><p>S'mores dip</p></div>
			</a>
			</div>
			<div class="col-md-6">
			<a href="myBlogAmerican.php">
				<img src="img11.jpg" height="100%" width="100%">
				<div class="w3-display-bottomleft w3-container"><p>Texas BBQ medley</p></div>
			</a>
			</div>
		</div>

<!--
		<div class="row" style="height: 125px">
			<div class="col-md-6">
				<img src="img3.jpg" height="100%" width="100%">
			</div>
			<div class="col-md-6">
				<img src="img5.jpg" height="100%" width="100%">
			</div>
		</div>

-->
		</div>
	
	</div>


	</div>
</body>
</html>