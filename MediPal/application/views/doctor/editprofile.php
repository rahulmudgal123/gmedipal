
<section id="main">


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">



                </div>
                <div class="col-sm-4 col-md-4">   
                    <div class="card">   
                        <div class="card-body card-padding">
                            <?php 
                                echo $errors = $this->session->flashdata('feedback');
                                error_reporting(0);
                            ?>

                            <form role="form" method="post" action="<?php echo site_url('doctor/update_doctor');?>">
                                <div class="form-group fg-line">
                                    <h4>Firstname<span style="color:red; ">*</span></h4>
                                    <input type="text" name="fname" value="<?php echo set_value('fname',$doctor_details->firstname);?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your firstname here">
                                </div>
                                <div class="form-group fg-line">
                                    <h4>Lastname<span style="color:red; ">*</span></h4>
                                    <input type="text" name="lname" value="<?php echo set_value('lname',$doctor_details->lastname);?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your lastname here">
                                </div>
                                <div class="form-group fg-line">
                                    <h4>GMC Number<span style="color:red; ">*</span></h4>
                                    <input type="text" name="Gmcno" value="<?php echo set_value('Gmcno',$doctor_details->gmc_no);?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Your GMC Number ">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Trust/Hospital Name<span style="color:red; ">*</span></h4>
                                    <input type="text" name="Trust_hospital" value="<?php echo set_value('Trust_hospital',$doctor_details->trust_hospital);?>" class="form-control input-lg" id="exampleInputPassword1" placeholder="Trust/Hospital Name">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Trust Email<span style="color:red; ">*</span></h4>
                                    <input type="email" name="email_address" value="<?php echo set_value('email_address',$doctor_details->email);?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter your Trust Email here">
                                </div>

                                <div class="form-group fg-line">
                                    <h4>Mobile No<span style="color:red; ">*</span></h4>
                                    <input type="text" name="mobile_no" value="<?php echo set_value('mobile_no',$doctor_details->mobile_no);?>" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter Mobile No">
                                </div>

                                <div class="form-group fg-line">
                                    <div class="g-recaptcha" data-sitekey="6LcUlhMTAAAAACUyXELA7LCmigDDrb7MMDi8ptzt"></div>
                                </div>

                                <p><button class="btn btn-primary btn-lg waves-effect pull-right"  type="submit" name="submit"  >UPDATE</button></p>


                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4 col-md-4"> </div>



            </div>
    </section>
</section>

