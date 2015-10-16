
<!--
<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['body'] ?>
    </div>
    <p><a href="<?php echo base_url().'index.php/news/'.$news_item['n_id'] ?>">View article</a></p>

<?php endforeach ?>
-->

<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
      <div class="two_third first">
		<div class="divider2"></div>
		
		<?php
			$i=0; $j=0;
		foreach ($images as $news_item): ?>
		
       <?php
          
          $storedNew[$i][0] = $news_item['title'] ;
          $storedNew[$i][1] = $news_item['body'] ;
		  $storedNew[$i][2] = $news_item['n_id'] ;
		  $storedNew[$i++][3] = $news_item['url'] ; ?>		
	
		<?php endforeach ?>
		
		<?php for($i=0;$i<count($storedNew);$i=$i+2){ 
		   $j=$i+1;
		?>
			
			  <article class="one_half push30 first" style="padding:18px">
			  <div class="push20">
				  <img src="<?php echo base_url().''. $storedNew[$i][3]; ?>" alt="" style="height:200px;width:250px;"></div>
				  <h2><?php echo  $storedNew[$i][0]; ?></h2>
				  <p><?php echo  $storedNew[$i][1]; ?></p>
				  <footer class="read-more"><a href="<?php echo base_url().'index.php/news/'. $storedNew[$i][2]; ?>">Read More &raquo;</a></footer>
			</article>
			
			<article class="one_half push30" style="padding:18px">
			  <div class="push20">
				  <img src="<?php echo base_url().''. $storedNew[$j][3]; ?>" alt="" style="height:200px;width:250px;"></div>
				  <h2><?php echo  $storedNew[$j][0]; ?></h2>
				  <p><?php echo  $storedNew[$j][1]; ?></p>
				  <footer class="read-more"><a href="<?php echo base_url().'index.php/news/'. $storedNew[$j][2]; ?>">Read More &raquo;</a></footer>
			</article>
			
			
		
		<?php }?>

	   </div>
	   
	   <div class="one_third">
        <div class="tab-wrapper clear">
          
          <div class="tab-container">

            <div id="tab-1" class="tab-content clear">
			<?php foreach ($imagesAll as $news_item): ?>
              <article class="clear push20" style="padding:18px">
                <div class="imgl"><img src="<?php echo base_url().''. $news_item['url']; ?>" style="height:50px;width:50px;" alt=""></div>
                <h2 class="font-medium nospace"><a href="<?php echo base_url().'index.php/news/'.$news_item['n_id'] ?>"><?php echo $news_item['title'] ?></a></h2>
                
              </article>
              <?php endforeach ?>
              
            </div>
          </div>
        </div>
		
        <div class="clear push30"></div>
        <?php /*
        <div class="clear">
          <h2 class="nospace font-medium push20">Vivamuslibero Auguer</h2>
          <ul class="nospace spacing clear">
            <li class="one_half first"><a href="#"><img src="<?php echo base_url();?>css/rs-1200-prototype-50/images/demo/150x150.gif" alt=""></a></li>
            <li class="one_half"><a href="#"><img src="<?php echo base_url();?>css/rs-1200-prototype-50/images/demo/150x150.gif" alt=""></a></li>
            <li class="one_half first"><a href="#"><img src="<?php echo base_url();?>css/rs-1200-prototype-50/images/demo/150x150.gif" alt=""></a></li>
            <li class="one_half"><a href="#"><img src="<?php echo base_url();?>css/rs-1200-prototype-50/images/demo/150x150.gif" alt=""></a></li>
          </ul>
        </div>
		*/?>
      </div>
	  
	  <div class="two_third first">
		<div class="divider2"></div>
		
		<?php
			$i=0; 
		foreach ($news as $news_item): ?>
		
       <?php
          
          $storedNews[$i][0] = $news_item['title'] ;
          $storedNews[$i][1] = $news_item['body'] ;
		  $storedNews[$i++][2] = $news_item['n_id'] ;?>		
	
		<?php endforeach ?>
		
		
		<?php for($i=0;$i<count($storedNews);$i=$i+2){ 
		   $j=$i+1;
		?>
		
        <article class="one_half  first">
          
          <h2><?php echo $storedNews[$i][0] ?></h2>
          <p><?php echo $storedNews[$i][1] ?></p>
          <footer class="read-more"><a href="<?php echo base_url().'index.php/news/'.$storedNews[$i][2] ?>">Read More &raquo;</a></footer>
        </article>
		
		<article class="one_half">
          
          <h2><?php echo $storedNews[$j][0] ?></h2>
          <p><?php echo $storedNews[$j][1] ?></p>
          <footer class="read-more"><a href="<?php echo base_url().'index.php/news/'.$storedNews[$j][2] ?>">Read ddMore &raquo;</a></footer>
        </article>
		<?php }?>
		

	   </div>
	   
	   
	</div>
	
	
	
		<div class="accordion-wrapper"><a href="javascript:void(0)" class="accordion-title orange"><span>Times Of India</span></a>
          <div class="accordion-content">
            <?php

			include('simple_html_dom.php');
 
			// Retrieve the DOM from a given URL
			$html = file_get_html('http://timesofindia.indiatimes.com/');

			foreach($html->find('div.top-story ul.list8 a') as $e)
			echo "<p>$e->innertext </p>";
			?>
			</div>
        </div>
		
        <div class="accordion-wrapper"><a href="javascript:void(0)" class="accordion-title orange"><span>Navhind Times</span></a>
          <div class="accordion-content">
            <?php
			$html = file_get_html('http://www.navhindtimes.in/category/goanews/');
	
			foreach($html->find('div.post-listing article.item-list h2.post-box-title a') as $e)
			echo "<p>$e->innertext</p>";
			?>	
			
          </div>
        </div>
		
		<div id="videos">
		<?php foreach ($videos as $news_item): ?>
			<div class="videos">
				<a href="news/viewVideo?videoLink=<?php echo base_url().''.$news_item['url'] ?>" target="_blank">
					<img class="multimedia" src="<?php echo base_url().'uploads/default.jpg'?>" style="height:150px;width:150px;"/>
				</a>
				<p><a href="<?php echo base_url().'index.php/news/'.$news_item['n_id'] ?>"><?php echo $news_item['title'] ?></a></p>
			</div>
			
		<?php endforeach ?>
		
	</div>
	
	<div class="videosClear"></div>
	
	<div id="images">
		<?php foreach ($images as $news_item): ?>
			<div class="videos">
				<a href="<?php echo base_url().'index.php/news/'.$news_item['n_id'] ?>">
					<img class="multimedia" src="<?php echo base_url().''.$news_item['url'] ?>" style="height:150px;width:150px;"/>
					<p><?php echo $news_item['title'] ?></p>
				</a>	
			</div>
			
		<?php endforeach ?>
		
	</div>
	<div class="imagesClear"></div>
	
  </div>

       
	
	
	
	</div>
	
<script>
    var links=document.getElementsByTagName('a');
	/*
	for(var i=0;i<links.length;i++){
	    links[i].href="#";
		links[i].style.textDecoration="none";
	}*/
</script>