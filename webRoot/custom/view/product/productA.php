<?php
require_once __DIR__ . "/template/template.php";
?>
<script>
	$('.commonSubNav .nav .content:nth-child(1)').addClass('active');
	var name = $('.commonSubNav .nav .content:nth-child(1)').text().trim();
	$('.commonSubNav .subNav a:nth-child(3)').html(name);
	$('.commonSubNav .subNav a:nth-child(2)').attr('href', '/product/productA');
	$('.commonSubNav .subNav a:nth-child(3)').attr('href', '/product/productA');
</script>
