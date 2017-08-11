$(function()
{
	$(document).ready(function()
	{
		setTimeout(function()
		{
			$(window).resize(function()
			{
				if ($(window).width() >= ($(window).height() * 1.4))
				{
					$('#main').addClass('web');
				}		
				else
				{
					$('#main').removeClass('web');
					$('#main').find('.img > *').css('marginLeft','-' + $('#main').find('.img > *').width() / 2 + 'px');
				}

			}).resize();

			$('#menu').find('a').on('click', function()
			{
				if ($(this).parent('li').hasClass('close') == false)
				{
					if ($(this).attr('href') == '#main')
					{
						$('#menu').find('li').removeClass('close');
						$('section').removeClass('on');
					}
					else
					{
						$('section').removeClass('on');
						$(this.hash).addClass('on');

						$('#menu').find('li').removeClass('close');
						$(this).parent('li').addClass('close');
					}
				}
				else
				{
					$(this.hash).removeClass('on');
					$(this).parent('li').removeClass('close');
				}

				return false;
			});
		}, 200);

		$.ajax
		({
			type		: 'POST',
			url			: './m2_request.php',
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
				url			: './m2_request.php',
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

	});
});