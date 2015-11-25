<div class="wrapper row3">

<div id="container" style="color:black">

<?php 
//var_dump($name);
if($this->session->userdata('role') != "admin")
	header('Location: '.base_url()."index.php/login");
echo $this->session->userdata('msg'); 
           $this->session->unset_userdata('msg');
?>


<div id="body">
<br/>
	<div style="font-size:18px;color:grey;font-weight:bold">Manage Ads :</div>
	<div class="divide"></div>

<br>
<div style="padding:18px">
<?php foreach ($name as $news_item): ?>


    <h2><?php echo '<div style="color:grey;font-weight:bold;font-size:16px;">'. $news_item['name'] .'</div>'?></h2>

		<div class="back">	
				     <img class="multimedia" src="<?php echo base_url().''.$news_item['path'] ?>" style="height:150px;width:150px;"/>
				
				</div>
	
    <p>
    	<?php 

    	//echo var_dump($news_item); 
    	if($news_item['status'] == '0')
    	{
    	?>
    	<a href="<?php echo base_url().'index.php/news/selectAd/'.$news_item['a_id'] ?>" style="color:#FF9900;;font-weight:bold;font-size:1.1em;">
    		Display Ad on Homepage
    	</a>
    	<?php
    	}
    	else
    	{
    	?>
    </br>
    	<a href="<?php echo base_url().'index.php/news/rejectAd/'.$news_item['a_id'] ?>" style="color:#FF9900;;font-weight:bold;font-size:1.1em;">
    		Hide Ad from Homepage
    	</a>
    	<?php 
    	}
    	?>
    </br>
    	<a href="<?php echo base_url().'index.php/news/deleteAd/'.$news_item['a_id'] ?>" style="color:#FF9900;;font-weight:bold;font-size:1.1em;">
    		Delete Ad
    	</a>
    </p>
    
	<br><br>
<?php endforeach ?>
</div>
</div>
</div>