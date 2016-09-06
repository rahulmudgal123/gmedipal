<section id="main">
    <section id="content">
        <div class="container">

            <div class="row">
                <div class="col-sm-3 col-md-3"> </div>
                <div class="col-sm-6 col-md-6">    
                    <div class="card">   
                        <div class="card-body card-padding">
                            <form role="form" method="post" action="<?php echo site_url('doctor');?>"> 
                                <div class="form-group fg-line">
                                    <h4>GMC Number</h4>
                                    <input type="number" name="GMC_Number" class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="GMC Number" required="">
                                </div>
                                <div class="form-group fg-line">
                                    <h4>Password</h4>
                                    <input type="password" name="password" class="form-control input-lg" id="exampleInputPassword1" placeholder="Password" required="">
                                </div> 

                                <div class="form-group fg-line">
                                    <div class="g-recaptcha" data-sitekey="6LcUlhMTAAAAACUyXELA7LCmigDDrb7MMDi8ptzt"></div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">
                                        <i class="input-helper"></i>
                                        Remember me <a href="">- How this works</a>
                                        <br/><br/> Not registered yet? <a href="<?php echo base_url();?>doctor/signup">Register here</a> | <a href="forgotpassword.php">Forgot Password</a>
                                    </label>
                                </div>


                                <p><button class="btn btn-primary btn-lg waves-effect pull-right"  role="button">Login</button></p>

                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3"> </div>
            </div>
    </section>
</section>

