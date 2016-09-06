
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

                            <form role="form" method="post" action="<?php echo site_url('doctor/signup');?>">
                                <div class="form-group fg-line">
                                    <h4>Firstname<span style="color:red; ">*</span></h4>
                                    <input type="text" name="fname" value="<?php echo set_value('fname');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your firstname here">
                                </div>
                                <div class="form-group fg-line">
                                    <h4>Lastname<span style="color:red; ">*</span></h4>
                                    <input type="text" name="lname" value="<?php echo set_value('lname');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your lastname here">
                                </div>
                                <div class="form-group fg-line">
                                    <h4>GMC Number<span style="color:red; ">*</span></h4>
                                    <input type="text" name="Gmcno" value="<?php echo set_value('Gmcno');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Your GMC Number ">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Trust/Hospital Name<span style="color:red; ">*</span></h4>
                                    <input type="text" name="Trust_hospital" value="<?php echo set_value('Trust_hospital');?>" class="form-control input-lg" id="exampleInputPassword1" placeholder="Trust/Hospital Name">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Trust Email<span style="color:red; ">*</span></h4>
                                    <input type="email" name="email_address" value="<?php echo set_value('email_address');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your Trust Email here">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Mobile No<span style="color:red; ">*</span></h4>
                                    <input type="text" name="mobile_no" value="<?php echo set_value('mobile_no');?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Mobile No">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Password<span style="color:red; ">*</span></h4>
                                    <input type="password" name="password" value="<?php echo set_value('password');?>" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Confirm Password<span style="color:red; ">*</span></h4>
                                    <input type="password" name="password_confirm" value="<?php echo set_value('password');?>" class="form-control input-lg" id="exampleInputPassword1" placeholder="Re-Password">
                                </div>

                                <div class="form-group fg-line">
                                    <div class="g-recaptcha" data-sitekey="6LcUlhMTAAAAACUyXELA7LCmigDDrb7MMDi8ptzt"></div>
                                </div>


                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="terms"  required/>
                                        <i class="input-helper"></i>
                                        Agree to the <a href="">Terms and conditions</a>
                                        <br/><br/> Already registered <a href="<?php echo site_url('doctor');?>">Login here</a> 
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

