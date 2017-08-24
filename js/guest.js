$(function()
{
	$('.text1 > tbody').find('> tr:last').remove();

	$('.text1 > tbody > tr').each(function(i)
	{
		if ($(this).find('select.text').length == 1)
		{
			$('.text1 > tbody > tr:eq(i)').remove();
		}
	});
});