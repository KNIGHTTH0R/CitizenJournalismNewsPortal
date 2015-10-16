
<!DOCTYPE HTML>
<html>
    <head>
        <title>Citizen Journalism</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/registration/registration.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/registration/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet"  href="<?= base_url() ?>public/style/style.css">
        <link rel="icon" type="image/ico" href="<?= base_url() ?>public/images/favicon.ico">
    </head>
    <body style="background-color:#5c5c8a" >
        <div class="well well-sm" style="font-size:2em; text-align:center;"><strong>Journalist Profile</strong></div>
        <div class="container" style="background-color:white;height:65em;border:1px solid black;margin-top:2em;">
            <div class="row">
                <div style="background-color:#F0F0F5;height:62em;margin:2em;">

                    <!form action="" method="post">
                    <div id ="register_form_error" class="alert alert-error"><!---------------------------------Dynamic --></div>

                    <?php echo form_open_multipart('upload/do_upload'); ?>    
                    <div class="col-lg-6" >

                        <div  class="profilecontainer">			
                            <div class="form-group">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    
                                    <?php
                                            $this->db->select("*")
                                                    ->from("login l , member m , member_address a")
                                                    ->where("l.m_id = m.m_id and l.m_id = a.m_id ")
                                                    ->where("l_id ", $this->session->userdata('l_id'));

                                            $q = $this->db->get();
                                      
                                            foreach ($q->result() as $row) {
                                                
                                         ?> 
                                    
                                    <div class="fileupload-preview thumbnail " style="width: 120px; height:120px;margin-left:auto;margin-right:auto;border:1px dashed #5c5c8a;">
                                        <img id="output" src="<?php echo base_url() . 'profile/' . $row->profile_image;  ?>"  />

                                    </div>
                                </div>
                            </div> 

                            <div class="upBox">
                                <div class="form-group">

                                    <div class="input-group">
                                               
                                        Name * <input type="text" class="form-control" name="InputName" id="Name" value="<?= $row->fname . " " . $row->mname . " " . $row->lname;?> " readonly >
                                        
                                               
                                    </div>
                                </div>


                                <div class="form-group">

                                    <div class="input-group">
                                        Email * <input type="text" class="form-control" id="EmailFirst" name="InputEmail" value="<?= $row->email; ?>" readonly >

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group">
                                        Mobile No. *<input type="text" class="form-control" name="InputMobile" id="Mobile" value="<?= $row->contact; ?>" readonly>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group dob">

                                        DOB *<input type="text" class="form-control" name="InputDOB" id="DOB" value="<?= $row->dob; ?>" readonly>	

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group">
                                        Address *<input type="text" class="form-control" name="InputAddress" id="Address" value="<?= $row->address_line; ?>" readonly>

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group">
                                        Pin *<input type="text" class="form-control" name="InputPin" id="postal_code" value="<?= $row->pin; ?>" readonly>

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group">
                                        City *<input type="text" class="form-control" name="InputCity" id="locality" value="<?= $row->city; ?>" readonly>

                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="input-group">
                                        State *<input type="text" class="form-control" name="InputState" id="administrative_area_level_1" value="<?= $row->state; ?>" readonly>

                                    </div>
                                </div>
                               <?php
                                            }
                                         ?> 
                            </div>
                        </div>
                    </div>
                </div>  <!--formdiv -->
            </div>  <!-- row -->
        </div> <!-- Fluid -->
        <script src="<?= base_url() ?>public/js/jquery.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>
    </body>    
</html>

