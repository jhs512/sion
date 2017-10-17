<div class="commonSubNav">
	<div class="title">회사소개</div>
	<div class="subNav">
		<a href="/index.php">홈</a>
		<a href="/intro/greet">회사소개</a>
		<a href="/intro/greet">인사말</a>
	</div>
	<div class="nav">
		<div class="content">
			인사말
		</div>
		<div class="content active">
			영업안내
		</div>
		<div class="content">

		</div>
		<div class="content">

		</div>
	</div>
</div>
<script>
	$('.introWrap .nav .content').click(function(){
		var index = $(this).index() + 1;
		if(index == 3 || index == 4){
			return false;
		}
		$('.introWrap .nav .content').removeClass("active");
		$(this).addClass("active");
		if(index == 1){
			$('.manageWrap').removeClass("active");
			$('.greetWrap').addClass("active");
		} else if(index == 2) {
			$('.greetWrap').removeClass("active");
			$('.manageWrap').addClass("active");
		}
	});
</script>
<div class="introWrap">
	<div class="greetWrap">
		<div class="imgWrap">
			<img src="/custom/assets/img/intro/intro_img1.png" alt="">
		</div>
		<div class="textWrap">
			<p>안녕하세요 <span style="font-weight:bold;">시온냉동</span> 방문을 감사드립니다</p>
			<p>풍부한 경험으로 작은일 하나도 최고의 정성과 기술로서 만족시켜
드리고 고객을 먼저 생각하는 업체가 되도록 더욱 노력하겠습니다. <br><br>
임직원 모두 철저한 업무계획과 프로정신이 주어진 여건 아래 최선을 다하여
미래의 가치를 지닌 비젼있는 기업으로 발전하도록 최선을 다할 것입니다.
항상 정성을 다하는 마음으로 고객님께 다가서겠습니다.
많은 이용 부탁드립니다. <br><br>
감사합니다.</p>
		</div>
	</div>
	<div class="manageWrap active">
		<div class="imgText">
			<p>공사설치</p>
			<p>A/S</p>
		</div>
		<div class="titleWrap">
			<p>목적에 따라 다양한 제품들이 있습니다.</p>
			<p>각종 냉동 냉장 주문제작 <span>A/S</span></p>
		</div>
		<div class="textWrap">
			<p>제작, 설치, 사후관리전문 : 냉동, 냉장고, 정육쇼케이스, 저장고, 냉동창고</p>
			<p>냉 난방 공조, 닥트공사 및 에어컨, 저장고, 저장창고</p>
			<p>식당, 정육, 슈퍼, 꽃집, ,교회, 회관, 사무실, 식당</p>
			<p>대전, 충남 일부지역 (공주, 청주, 논산, 부여)</p>
		</div>
		<img src="/custom/assets/img/intro/intro_img2.png" alt="">

	</div>
</div>
