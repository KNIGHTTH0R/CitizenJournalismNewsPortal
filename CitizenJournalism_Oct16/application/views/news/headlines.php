
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear" style="padding:18px;color:black;">

<?php
include('simple_html_dom.php');
 
// Retrieve the DOM from a given URL
$html = file_get_html('http://timesofindia.indiatimes.com/');
echo '<li>';
       echo' <h2>Times of India</h2>';
       echo ' <ul class="list arrow">';
		
foreach($html->find('div.top-story ul.list8 a') as $e)
        echo '<li>'.$e->innertext.' </li>';
         
     echo '</ul>';
     echo '   <!-- --></li>';
	
$html = file_get_html('http://www.navhindtimes.in/category/goanews/');
echo ' <br>';
echo '<li>';
       echo' <h2>Navhind Times</h2>';
       echo ' <ul class="list arrow">';
	
foreach($html->find('div.post-listing article.item-list h2.post-box-title a') as $e)
    echo '<li>'.$e->innertext . '</li>';	
	     
     echo '</ul>';
     echo '   <!-- --></li>';
?>	

</div>
</div>
</div>


