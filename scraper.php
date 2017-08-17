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
			echo $url 		= $element->find("h3/a"[onclick]', 0)->onclick;
		}
		$url = str_get_html($str);
		if($url){
		echo $role =    = $str->find('dd[id="appointment-type-value1"]',0)->plaintext;

		}
}	
	 

}
 
 ?>
