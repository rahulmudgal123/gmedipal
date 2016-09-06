 <section id="main">
  <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                </div>
                <div class="col-sm-4 col-md-4">   
                    <div class="card">   
                        <div class="card-body card-padding">

                            <?php echo validation_errors(); 
                                $errors = $this->session->flashdata('feedback');
                                if($errors) { 
                                    echo $errors;
                                }
                            ?>
                            
                            <form role="form"  action="<?php echo site_url('patient/signup');?>" method="post">
                                <div class="form-group fg-line">
                                    <h4>Firstname <span style="color:red; ">*</span></h4>
                                    <input type="text" name="fname" value="<?php echo set_value('fname');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your firstname here"  required="">
                                </div>
                                <div class="form-group fg-line">
                                    <h4>Lastname <span style="color:red; ">*</span></h4>
                                    <input type="text" name="lname" value="<?php echo set_value('lname');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your lastname here" required="">
                                </div>

                                 <div class="form-group fg-line">
                                    <h4>Date of birth</h4>
                                    <input type="text" name="dobirth" value="<?php echo set_value('dobirth');?>"   class="form-control input-lg" id="exampleInputEmail1" placeholder="Enter Your DOB " >
                                </div>
                                
                                <div class="form-group fg-line">
                                    <h4>Gender</h4>
                                    <input type="text" name="pgender" class="form-control input-lg" id="exampleInputPassword1" placeholder="Trust/Hospital Name" >
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Address 1 <span style="color:red; ">*</span></h4>
                                    <input type="text" name="add1" value="<?php echo set_value('add1');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Address1" required="">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Address 2</h4>
                                    <input type="text" name="add2" value="<?php echo set_value('add2');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Address2">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Address 3</h4>
                                    <input type="text" name="add3" value="<?php echo set_value('add3');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Address3">
                                </div>


                                <div class="form-group fg-line">
                                    <h4>Postcode</h4>
                                    <input type="text" name="pcode" value="<?php echo set_value('pcode');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Postcode">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>NHS Number</h4>
                                    <input type="text" name="nhs_num" value="<?php echo set_value('nhs_num');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter NHS Number">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Mobile No <span style="color:red; ">*</span></h4>
                                    <input type="text" name="mobile" value="<?php echo set_value('mobile');?>" maxlength="10" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Mobile No" required="">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Email <span style="color:red; ">*</span></h4>
                                    <input type="email" name="email_address" value="<?php echo set_value('email_address');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your Trust Email here" required="">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Password <span style="color:red; ">*</span></h4>
                                    <input type="password" name="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password" required="">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Confirm Password <span style="color:red; ">*</span></h4>
                                    <input type="password" name="password_confirm" class="form-control input-lg" id="exampleInputPassword1" placeholder="Re-Password" required="">
                                </div>

                                <div class="form-group fg-line">
                                    <div class="g-recaptcha" data-sitekey="6LcUlhMTAAAAACUyXELA7LCmigDDrb7MMDi8ptzt"></div>
                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="terms" required />
                                        <i class="input-helper"></i>
                                        Agree to the <a href="">Terms and conditions</a>
                                        <br/><br/> Already registered <a href="doctorlogin.php">Login here</a> 
                                    </label>
                                </div>

                                <p><button class="btn btn-primary btn-lg waves-effect pull-right"  type="submit" name="submit"  >Register</button></p>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 col-md-4"> </div>
             </div>
    </section>
</section>

