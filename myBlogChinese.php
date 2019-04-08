<!DOCTYPE html>
<html>
<head>
	<title>Good Food Good Mood</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
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
<body>
	<div class="container">
	<h1 class="text-center" style="margin-top: 40px"><b style="font-family: Cursive">Good Food Good Mood</b></h1>

	<ul>
		<li><a href="myBlog.php">Home</a></li>
  		<li><a class="active" href="myBlogIndian.php">Indian</a></li>
  		<li><a href="myBlogChinese.php">Chinese</a></li>
  		<li><a href="myBlogFrench.php">French</a></li>
  		<li><a href="myBlogAmerican.php">American</a></li>
	</ul>


	<div class="row" style="margin-top: 40px">
		<div class="col-md-4">
			<div class="single-blog">
				<p class="blog-meta">
				<b>Dim Sums</b>
				<a href="myBlogImg1.php">
					<img style="width: 100%" src="img1.jpg">
					</a>
					<table border="2" class="text-center" style="width: 100%">
						<tr>
							<td>Difficulty level</td>
							<td>Easy</td>
						</tr>
						<tr>
							<td>Preparation time</td>
							<td>10 min</td>
						</tr>
						<tr>
							<td>Cooking time</td>
							<td>30 min</td>
						</tr>
						<tr>
							<td>Recipe servings</td>
							<td>5</td>
						</tr>
					</table>
				</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="single-blog">
				<p class="blog-meta">
				<b>Szechwan Chilli Chicken</b>
				<a href="myBlogImg2.php">
					<img style="width: 100%" src="img2.jpg">
					</a>
					<table border="2" class="text-center" style="width: 100%">
						<tr>
							<td>Difficulty level</td>
							<td>Easy</td>
						</tr>
						<tr>
							<td>Preparation time</td>
							<td>10 min</td>
						</tr>
						<tr>
							<td>Cooking time</td>
							<td>5 min</td>
						</tr>
						<tr>
							<td>Recipe servings</td>
							<td>2</td>
						</tr>
					</table>
				</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="single-blog">
				<p class="blog-meta">
				<b>Spring rolls</b>
				<a href="myBlogImg3.php">
					<img style="width: 100%" src="img3.jpg">
					</a>
					
					<table border="2" class="text-center" style="width: 100%">
						<tr>
							<td>Difficulty level</td>
							<td>Easy</td>
						</tr>
						<tr>
							<td>Preparation time</td>
							<td>10 min</td>
						</tr>
						<tr>
							<td>Cooking time</td>
							<td>15 min</td>
						</tr>
						<tr>
							<td>Recipe servings</td>
							<td>2</td>
						</tr>
					</table>
				</p>
			</div>
		</div>

	</div>
	</div>
</body>
</html>