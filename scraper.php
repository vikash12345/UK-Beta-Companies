<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
/** looping over list of ids of doctors **/
for($id = 1; $id <= 2; $id++)
	{
	 $url = ("https://beta.companieshouse.gov.uk/search?q=a&page=".$id);
	$link2 = file_get_html($url);
 
 echo $link2;

}
 
 ?>
