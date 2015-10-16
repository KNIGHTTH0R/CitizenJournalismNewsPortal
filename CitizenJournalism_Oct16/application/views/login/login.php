<?php echo validation_errors(); 
  // var_dump($this->session->all_userdata());
  
 
if($this->session->userdata('msg'))
	    echo $this->session->userdata('msg');
   ?>   

  
		
	
    

<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <div id="homepage" class="clear">

	<form  id="uploadForm" name="uploadForm" action="login" method="post">

		<fieldset id="field1">

			<legend align="center"><h2><span class="label label-primary">MEMBER LOGIN</span></h2></legend>
             <?php if($this->session->userdata('message')){
	                   echo $this->session->userdata('message');
                       $this->session->unset_userdata('message');					   
					}   
					   ?>
			
			<h4><span class="label label-info">Email</span></h4><input id="email" type="email" name="email" value="">
			<br>
			<h4><span class="label label-info">Password</span></h4><input id="password" type="password" name="password" value="">
			<br>
			


			<br/><input class="button medium gradient blue rnd8" type="submit" id="submit" name="submit" value="Login"/>
			<input class="button medium gradient purple rnd8" type="reset" id="reset" name="reset"/>
     
		</fieldset>
	</form>
	</div>
	<div class="imagesClear"></div>
	
  </div>

       
	
	
	
	</div>