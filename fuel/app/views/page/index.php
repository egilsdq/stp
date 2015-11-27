<?php 
	echo Asset::css('bootstrap.css'); 
?>
<html>
<head>
	<title>King Of Gags</title>
	<style>
		.post img{
			min-width: 100%;
			margin-bottom: 10px;
		}
		.post{
			border-bottom: 1px solid #ccc;
			padding: 10px;
		}
		.post a{
			font-size: 12pt;
		}
	</style>	
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<a class="navbar-brand" href="#">King of Gags</a>
		
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Hottest</a></li>
				<li><a href="#">Trending</a></li>
				<li><a href="#">Fresh</a></li>
			</ul>
			
			<ul class="nav navbar-nav pull-right">
				<p class="navbar-btn">
				<li><?php echo Html::anchor('pages/upload', 'Upload') ?></li>
				</p>
			</ul>			
			
		</div>
	</nav>
	
	<div class="container" style="max-width: 550px; margin-bottom: 100px;">
		<div class="post">
			<a href="#"><h1>Post title</h1></a>
			<?php echo Html::img("a.gif"); ?>
			<br/>
			<a href="#"><i class="glyphicon glyphicon-comment"></i> Comments: 0</a> 
			<a href="#" class="pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> Upvotes: 0</a>
		</div>
		<div class="post">
			<a href="#"><h1>Post title</h1></a>
			<?php echo Html::img("b.jpg"); ?>
			<br/>
			<a href="#"><i class="glyphicon glyphicon-comment"></i> Comments: 0</a> 
			<a href="#" class="pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> Upvotes: 0</a>			
		
		<div class="alert alert-danger" style="margin-top: 50px;">
			You've reched the end! No more posts beyond this point!
		</div>
	
		
	</div>
</body>
</html>