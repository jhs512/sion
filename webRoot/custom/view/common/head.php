<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="/custom/assets/css/style.css">
	<link rel="stylesheet" href="/custom/assets/css/view/intro/intro.css">
	<link rel="stylesheet" href="/custom/assets/css/view/product/product.css">
	<link rel="stylesheet" href="/custom/assets/css/view/question/question.css">
	<link rel="stylesheet" href="/custom/assets/css/view/way/way.css">
	<link rel="stylesheet" href="/custom/assets/css/view/right/right.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/custom/assets/lib/bxslider/bx.css">
	<script src="/custom/assets/lib/bxslider/bx.js"></script>
</head>
<body>
<div id="headerBox">
	<div class="headerWrap">
		<div class="logo" onclick="location.href='/index.php'" style="cursor:pointer">
			<img src="/custom/assets/img/home/logo.png" alt="">
		</div>
		<ul class="nav">
			<li><a href="">회사소개</a></li>
			<li><a href="">제품소개</a></li>
			<li><a href="">견적문의</a></li>
			<li><a href="">오시는길</a></li>
		</ul>
		<div class="subNav">
			<a href="/index.php">홈</a>
			<a href="#s">관리자 로그인</a>
		</div>
	</div>
</div>
<div id="downNav">
	<div class="downNavWrap">
		<ul class="nav">
			<li>
				<ul>
					<li><a href="/intro/greet">인사말</a></li>
					<li><a href="/intro/manage">영업관리</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="/product/productA">냉동/냉장고</a></li>
					<li><a href="/product/productB">정육쇼케이스</a></li>
					<li><a href="/product/productC">저장고</a></li>
					<li><a href="/product/productD">기타제품</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="/question/mail">견적문의</a></li>
				</ul>
			</li>
			<li>
				<ul>
					<li><a href="/way/detail">오시는길</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<script>
$('#headerBox .nav li a').click(function(e){
	e.preventDefault();
});
	$('#headerBox .nav li a, #downNav').mouseover(function(){
		$('#downNav').addClass("navOn");
	});
	$('#downNav').mouseleave(function(){
		$('#downNav').removeClass("navOn");
	});
</script>
