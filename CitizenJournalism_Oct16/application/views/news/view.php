
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
  
  
  
 
    
<?php                                                //   news data
echo $news_item['body'];
echo "<div>By ".$name." - ".$news_item['time']."  ".$news_item['date']."</div>";
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






</div>

</div>
</div>
</div>
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
	cls_butn.setAttribute("src","close.png");
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
