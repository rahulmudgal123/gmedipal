    <section id="main">
    <section id="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-3 col-md-3"> </div>
                    <div class="col-sm-6 col-md-6">    
                        <div class="card">   
                            <div class="card-body card-padding">
                                <?php 
                                    $errors = $this->session->flashdata('login_failed');
                                    if($errors) { 
                                        echo $errors;
                                    }
                                ?>
                                <form role="form" method="post" action="<?php echo site_url('patient');?>"> 
                                    <div class="form-group fg-line">
                                        <h4>Email address</h4>
                                        <input type="email" name="email_address" value="<?php echo set_value('email_address');?>"  class="input-lg form-control fg-input" id="exampleInputEmail1" placeholder="Enter email" required="">
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
                                            <br/><br/> Not registered yet? <a href="<?php echo site_url('patient/signup');?>">Register here</a> | <a href="<?php echo site_url('patient/forgotpasswd');?>">Forgot Password</a>
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
    