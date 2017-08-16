
<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
/** looping over list of ids of doctors **/
for($id = 165314; $id <= 1199999; $id++)
	{
	 $url = ("https://beta.companieshouse.gov.uk/search?q=a&page=".$id);
	$link2 = file_get_html($url);
 
 echo $link2;
 
 ?>
