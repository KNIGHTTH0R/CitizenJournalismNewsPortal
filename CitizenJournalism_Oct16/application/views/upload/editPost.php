<?php //echo base_url();?>
<?php echo validation_errors(); 
var_dump($this->session->userdata('msg'));
$this->session->set_userdata('n_id',$news['n_id']);			
$i=0;
echo $this->session->userdata('msg');
?>


<div id="back">
     <a href="<?php echo base_url().'index.php/news/managePosts'; ?>">  Go Back</a>
</div>

<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">
<form  id="uploadForm" name="uploadForm" action="<?php $news['n_id']?>" method="post" enctype="multipart/form-data">

<fieldset id="field1">

<legend align="center"><h2><span class="label label-primary">CITIZEN JOURNALISM</span></h2></legend>

<div class="imagediv">
<img src="scraper.jpg" width="100px" height="100px">
</div>
<h4><span class="label label-info">Title</span></h4><input id="title" type="text" name="title" value="<?php echo $news['title']?>">
<h4><span class="label label-info">Category</span></h4>

	<div ng-app="myApp" ng-controller="customersCtrl"> 
		 <h4><span class="label label-info">Category</span></h4>
		 <select id="category" name="category">
				<option ng-repeat="x in names" value="{{ x.Name }}"> {{ x.Country }}</option>
		</select>
	</div>

<h4><span class="label label-info">Author</span></h4>
<input id="author" type="text" name="author" value="<?php echo $author ;?>" readonly>
<br><br><br>
<h4><span class="label label-info">News</span></h4>

<textarea rows="12" cols=150" name="body"><?php echo $news['body']?></textarea>



 <div class="main">
   <?php foreach ($multimedia as $mult_item): ?>
         <?php $i++; ?>
   
         <?php if(substr($mult_item['type'],0,5)=="image"){ ?>
			<!--a href="<?php echo base_url().''.$mult_item['url'] ?>"-->
				<img class="multimedia" src="<?php echo base_url().''.$mult_item['url'] ?>" style="height:150px;width:150px;"/>
			<!--/a-->
	    <?php } ?>
	  
        <?php if(substr($mult_item['type'],0,5)!="image"){ ?>
			<a href="<?php echo base_url().''.$mult_item['url'] ?>" target="_blank">
				<img class="multimedia" src="<?php echo base_url().'uploads/default.jpg' ?>" style="height:150px;width:150px;"/>
			</a>
	    <?php } ?>
	<?php endforeach ;?>		
  </div>

  
  
  <div class="del">
   <?php for($j=0;$j<$i;$j++){ ?>
        <a href="<?php echo base_url().'index.php/news/deleteMedia/'.$mult_item['n_id'].'/'.$mult_item['media_id'] ?>">
		   Delete
        </a>		
	<?php }?>		
  </div>
<h4><span class="label label-info">Attachments</span></h4>
<input type="file" name="userfile"/>
<br/>
<input type="submit" id="submit" name="submit" value="Save"/>
<input type="reset" id="reset" name="reset"/>
     
</fieldset>
</form>

</div>
</div></div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("http://localhost/citizen/category.php")
    .success(function (response) {$scope.names = response.records;});
});

</script>
