<?
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php';
//
/** looping over list of ids of doctors **/
for($id = 1; $id <= 1; $id++)
	{
	 $url = ("https://beta.companieshouse.gov.uk/search?q=a&page=".$id);
	$link2 = file_get_html($url);
 
foreach($link2->find("//*[@id='results']")as $element){
	
	echo $element;
		if(is_object($element))
		{
			echo $url 		= $element->find("//*[@id='results']/li[1]/h3/a",0)->href;
		}
}	
	 

}
 
 ?>
