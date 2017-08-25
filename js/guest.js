$(function()
{
	$('.text1 > tbody').find('> tr:last').remove();

	$('.text1 > tbody').find('> tr:eq('+ $('.text1 > tbody').find('> tr').length - 1 +')').remove();
});