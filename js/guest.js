$(function()
{
	$('.text1 > tbody').find('> tr:last').remove();

	$('.text1 > tbody').find('> tr:eq('+ $('.text1 > tbody').find('> tr').length +')').remove();
});