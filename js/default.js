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
					$('#visual').addClass('web');
					$('#visual').css('marginLeft',0);
				}		
				else
				{
					$('#visual').removeClass('web');
					$('#visual').css('marginLeft','-' + $('#visual').find(' > *').width() / 2 + 'px');
				}

			}).resize();

			$('#menu').find('a').on('click', function()
			{
				if ($(this).parent('li').hasClass('close') == false)
				{
					if ($(this).attr('href') == '#main')
					{
						$('#menu').find('li').removeClass('close');
						$('#main').removeClass('off');
						$('section').removeClass('on');
					}
					else
					{
						$('section').removeClass('on');
						$(this.hash).addClass('on');

						$('#menu').find('li').removeClass('close');
						$('#main').removeClass('off');
						$(this).parent('li').addClass('close');
					}

					if ($(this).attr('href') == '#guide')
					{
						$('#main').addClass('off');
					}
				}
				else
				{
					$(this.hash).removeClass('on');
					$('#main').removeClass('off');
					$(this).parent('li').removeClass('close');
				}

				return false;
			});

		}, 800);
	});
});