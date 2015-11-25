<?php
// Include the library
include('simple_html_dom.php');
 
// Retrieve the DOM from a given URL
$html = file_get_html('http://timesofindia.indiatimes.com/');

foreach($html->find('div.top-story ul.list8 a') as $e)
    echo $e->innertext . '<br>';
	
$html = file_get_html('http://www.navhindtimes.in/category/goanews/');
	
foreach($html->find('div.post-listing article.item-list h2.post-box-title a') as $e)
    echo $e->innertext . '<br>';
	

?>	
<script>
    var links=document.getElementsByTagName('a');
	/*
	for(var i=0;i<links.length;i++){
	    links[i].href="#";
		links[i].style.textDecoration="none";
	}*/
</script>