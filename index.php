<?php 
include("head.php");
?>
	<div class="main-body">
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background-color: #43ad45;"><img src="images/2.png" alt="轮播图2"></div>
				<div class="item" style="background-color: red;"><img src="images/3.png" alt="轮播图3"></div>
				<div class="item" style="background-color: green;"><img src="images/4.png" alt="轮播图4"></div>
			</div>
				<a href="#myCarousel" data-slide="prev" class="carousel-control left">
					<span class="glyphicon glyphicon-chevron-left"></span></a>
				<a href="#myCarousel" data-slide="next" class="carousel-control right">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
		</div>
	</div>
<?php 
include("footer.php");
?>