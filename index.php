<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ko" xml:lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/default.js"></script>
<link type="text/css" rel="stylesheet" href="css/default.css" />

<title>좋은 날</title>
</head>

<body>
<h1 class="hidden">청첩장</h1>

<div id="menu">
	<h1 class="hidden">메뉴</h1>
	<ul>
		<li><a href="#main"><i class="fa fa-home"></i><span class="hidden">초대의 글</span></a></li>
		<li><a href="#location"><i class="fa fa-map-marker"></i><span class="hidden">오시는 길</span></a></li>
	</ul>
</div>

<div class="group" id="main">
	<div class="desc">
		<h1 class="hidden">초대의 글</h1>
		<strong><span>좋은 사람을</span> 만났습니다<br /><span>좋은 사람이</span> 되고 싶습니다</strong>
		<p><em>순영이와 민지가 처음 만난<span> </span>2012년 10월 13일로부터 5년 뒤인 2017년 10월 14일<span>, </span></em>좋은 사람들과 함께 하는 좋은 날</p>
	</div>
	<div class="img">
		<video autoplay loop>
			<source src="img/img.mp4" type="video/mp4">
			<source src="img/img.ogv" type="video/ogv">

			<img src="img/img.jpg" alt="" />
		</video>
	</div>
</div>

<div class="group" id="location">
	<h1 class="hidden">오시는 길</h1>

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1638.9029460301622!2d127.7082883698775!3d34.76048218879154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356ddf388be106f5%3A0xa02e04d679848602!2z7Jes7IiY7KCV7JuQ7Y6c7IWY!5e0!3m2!1sko!2skr!4v1502345735553" title="펜션 지도"></iframe>

	<p class="contents">
		<strong>여수 정원펜션</strong>
		<span>전라남도 여수시 영은문길 9-12 (오림동 471)</span>
	</p>
</div>

<div class="group" id="guest">
	<h1 class="hidden">축하의 글</h1>

	<div class="write">
      <h2 class="hidden">111</h2>
      <textarea name="" id="memo" cols="30" rows="10"></textarea>
      <button onclick="ajax_ok();return false;">확인</button>
	  <div>
		<ul id="add">
		</ul>
	  </div>
	</div>


	<script type="text/javascript">
		/*
		$.ajax
		({
			type		: 'POST',
			url			: 'm2_request.php',
			dataType	: 'html',
			success		: function (data)
			{
				$('ul#add').append(data);

			}
		});

		function ajax_ok()
		{
			var params="memo="+$('#memo').val();  

			$.ajax
			({
				type		: 'POST',
				url			: 'm2_request.php',
				data		: params,
				dataType	: 'html',
				success		: function (data)
				{
					$('ul#add').html('');
					$('ul#add').append(data);

				}
			});

			return false;
		}
		*/
		</script>

</div>
</body>
</html>