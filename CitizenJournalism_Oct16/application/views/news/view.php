
		<style type="text/css">
			@font-face {
				font-family: tamilFont1;
				src:url("<?php echo base_url(); ?>fonts/hindi.ttf");
			}
			@font-face {
				font-family: tamilFont2;
				src:url("<?php echo base_url(); ?>fonts/hindi.ttf");
			}
		</style>

	<style>
	#new{
		position:relative;		
	}
	
	.focus{
	position:absolute;
	width:700px;
	height:600px;	
	margin-left:300px;
	margin-top:-350px;
	}
	
	#close{
	border:1px solid black;
	width:20px;
	height:20px;
	position:absolute;
	margin-top:0px;
	margin-left:575px;
	opacity:0.2;
	z-index:2;
	}
	
	#close:hover{
	opacity:1;
	}
	
	.disabled{
	pointer-events:none;
	opacity:0.5;
	
	}
	
	
	
	</style>
	
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
	
<h2 class="nospace"><strong>News</strong></h2>
	<div class="divide"></div>
	<div style="float:right">
<a href="javascript:fbShare('<?php echo $news_item['title']; ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)">
<img src="<?php echo base_url().'css/fb.jpg'; ?>" class=" rnd8" style="height:30px; width:100px"/>
</a>



<p class="col-xs-5 col-xs-offset-1" id="custom-tweet-button"> 
<a target="_blank" class="twitter-share-button shareButton twitter popup" href="http://twitter.com/share?text=<?php echo $news_item['title']; ?>"  data-text="<?php echo $news_item['title']; ?>" data-count="none" data-url="https://www.google.com">
<img src="<?php echo base_url().'css/tweet.png'; ?>"  class="img-responsive rnd8" alt="" style="height:28px; width:160px" />
</a> 
</p>
</div>
<?php

echo '<h2>'.$news_item['title'].'</h2>';
?>



 <div class="main">
   <div id="main_container">
   <?php foreach ($multimedia as $mult_item): ?>

      <?php if(substr($mult_item['type'],0,5)=="image"){ ?>
						
				<div class="back">	
				     <img class="multimedia" src="<?php echo base_url().''.$mult_item['url'] ?>" style="height:150px;width:150px;" onclick= "clicked()"/>
				
				</div>
			   
	  <?php } ?>
	  
	  
      <?php if(substr($mult_item['type'],0,5)!="image"){ ?>
			<div class="back">
                <a href="<?php echo base_url().''.$mult_item['url'] ?>">
					<img name="<?php echo base_url().''.$mult_item['url'] ?>" class="multimedia" src="<?php echo base_url().'uploads/default.jpg'?>" style="height:150px;width:150px;"/>
                </a>		
		</div>
	  <?php } ?>	
	  
	<?php endforeach ;?>		
  </div>
  
   <div id="new">	
            	</div>
  
  
  
 
    <br/>
<?php
if($news_item['font']=="2"){
     echo "<div style='font-size:17px;font-family:tamilFont1'>".$news_item['body']."</div>";
	// echo "hi";
}	
else{
	echo "<div style='font-size:17px;'>".$news_item['body']."</div>";
}

echo "<br/>";
echo "<div style='font-weight:bold;'>By ".$name." <span style='color:#FF9900'> - At :</span> ".$news_item['time']."  <span style='color:#FF9900'> On </span>".$news_item['date']."</div>";
?>

<?php if($this->session->userdata('fname')==true && $this->session->userdata('role')=="admin"){ ?>
<div id="edit">
     <a href="<?php echo base_url().'index.php/news/edit/'.$news_item['n_id']; ?>">  Edit this post</a>
</div>
<?php } ?>

<?php if($this->session->userdata('fname')==true && $this->session->userdata('role')!="admin" && $this->session->userdata('m_id')== $news_item['m_id']){ ?>
<div id="edit">
     <a href="<?php echo base_url().'index.php/news/edit/'.$news_item['n_id']; ?>">  Edit this post</a>
</div>
<?php } ?>


</p>



</div>

</div>
</div>
</div>


<script>
    function fbShare(url, title, descr, image, winWidth, winHeight) {
        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
    }
</script>






	<script>
	function clicked(){
	
	newdiv = document.createElement("div");
	newdiv.setAttribute("class","focus");
	newdiv.setAttribute("id", "focused");

	
	new_img = document.createElement("img");
	img_src=event.target.src;
	//alert(img_src);
	new_img.setAttribute("src",img_src);
	new_img.style.width =600+"px";
    new_img.style.height =500+"px";
	
	cls_butn = document.createElement("img");
	cls_butn.setAttribute("id", "close");
		cls_butn.setAttribute("src","<?php echo base_url();?>css/close.png");
	cls_butn.setAttribute("onclick","close_focus()");
	
	newdiv.appendChild(cls_butn);
	newdiv.appendChild(new_img);
	
	document.getElementById("new").appendChild(newdiv);
	document.getElementById("main_container").blur();
	
	document.getElementById("main_container").setAttribute("class","disabled");
	//document.getElementById("new").removeAttribute("class","disabled");

	//document.getElementById("focused").focus();
	}
	
	function clickedVideo(){                                    // video
	
	newdiv = document.createElement("div");
	newdiv.setAttribute("class","focus");
	newdiv.setAttribute("id", "focused");

	
	new_img = document.createElement("iframe");
	img_src=event.target.name;
	//alert(img_src);
	new_img.setAttribute("src",img_src);
	
	new_img.style.width =600+"px";
    new_img.style.height =500+"px";
	
	cls_butn = document.createElement("img");
	cls_butn.setAttribute("id", "close");
	cls_butn.setAttribute("src","close.png");
	cls_butn.setAttribute("onclick","close_focus()");
	
	newdiv.appendChild(cls_butn);
	
	newdiv.appendChild(cls_butn);
	newdiv.appendChild(new_img);
	
	document.getElementById("new").appendChild(newdiv);
	document.getElementById("main_container").blur();
	
	document.getElementById("main_container").setAttribute("class","disabled");
	//document.getElementById("new").removeAttribute("class","disabled");

	//document.getElementById("focused").focus();
	}
	
	function call(){
	//alert("hello");
	}
	
	function close_focus() {
            newdiv = document.getElementById("new");
			child = document.getElementById("focused");				
          	newdiv.removeChild(document.getElementById("focused"));
			document.getElementById("main_container").removeAttribute("class","disabled");
        }
	
	</script>
