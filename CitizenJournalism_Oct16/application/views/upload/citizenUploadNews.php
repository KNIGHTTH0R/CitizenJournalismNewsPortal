<?php echo validation_errors(); 
    //var_dump($this->session->all_userdata());
	//echo hash('sha256', 'nazeef' . SALT);
     if($this->session->userdata('name'))
	    $author=$this->session->userdata('fname')." ".$this->session->userdata('mname')." ".$this->session->userdata('lname');
     else
	    $author="Anon";
	
?>


<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">

<form  id="uploadForm" name="uploadForm" action="upload" method="post"  enctype="multipart/form-data">

	<fieldset id="field1">

	<legend align="center"><h2><span class="label label-default">CITIZEN JOURNALISM</span></h2></legend>
	
	<!--<h4><span class="label label-info">Title</span></h4><input id="title" type="text" name="title" value="">-->
	<div style="float:right;width:60%;height:10%;position:relative;padding 30px;">
	
		<img class="img-responsive" src="<?php echo base_url();?>css/scraper.jpg" >
	
	</div>
	
	<div style="float:left;width:40%">
		<div class="row">
				<div class="col-xs-6 col-xs-5">
					<h3><span class="label label-default">Title</span></h3>
					<input type="text" name="title" class="form-control " placeholder="title">
				</div>
		</div>
		<br>
		<br>
			
		<div class="row">
			<div class="col-xs-6 col-xs-5"> 
			<h4><span class="label label-default">Author</span></h4>
		
				<?php if($author=="Anon") {?>
					 <input id="author" type="text" class="form-control " name="author" value="<?php echo $author; ?>">
				<?php }?>
				<?php if($author!="Anon") {?>
					 <input id="author" type="text" class="form-control " readonly name="author" value="<?php echo $author; ?>">
				<?php }?>
			</div>
		</div>
		<br>
		<br>
			
		<div class="row">
			<div class="col-xs-6 col-xs-5" ng-app="myApp" ng-controller="customersCtrl"> 
				 <h4><span class="label label-default">Category</span></h4>
				 <select id="category" name="category">
						<option ng-repeat="x in names" value="{{ x.Name }}"> {{ x.Country }}</option>
				</select>
			</div>
		</div>
		<br><br><br>
	</div>
	

	<h4 style="clear:both;"><span class="label label-default">News</span></h4><textarea rows="12" cols=150" name="body"></textarea>

	<h4><span class="label label-default">Attachments</span></h4><input type="file" name="userfile"/>
	<input type="file" name="userfile2"/>
	<input type="file" name="userfile3"/>
	<br/><input class="button medium gradient blue rnd8" type="submit" id="submit" name="submit" value="Upload"/>
	<input class="button medium gradient blue rnd8" type="reset" id="reset" name="reset"/>
		 
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
