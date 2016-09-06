<body>
    <header id="header" class="clearfix bgm-white" >
        <!-- START HEADER.PHP--> 
		
		
		
        <ul class="header-inner">
		
			<li id="menu-trigger" data-trigger="#sidebar">
           <button class="btn btn-default btn-icon waves-effect waves-circle waves-float"><i class="zmdi zmdi-menu"></i></button>
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>
			
			
			<li class="logo">
            <a href="index.php">
                <img src="<?php echo  base_url();?>theme/assets/img/logo.png" alt="medipal">
            </a>
        </li>
           

            <li class="pull-right">
                <ul class="top-menu">
                      <li id="toggle-width">
                    <div class="toggle-switch" data-ts-color="green">
                        <input id="tw-switch" type="checkbox" hidden="hidden">
                        <label for="tw-switch" class="ts-helper"></label>
                    </div>
                </li>
                    <?php 
                        if($this->session->userdata('patient_id')) {
                     ?>
                     <li class="hidden-xs-down">
                        <a href="<?php echo base_url('patient/logout');?>">
                            <span class="tm-label">Logout</span>
                        </a>
                    </li>      
                      
                    <?php
                        } if($this->session->userdata('doctor_id')) {
                    ?>
                    
                     <li class="hidden-xs-down">
                        <a href="<?php echo base_url('doctor/logout');?>">
                            <span class="tm-label">Logout</span>
                        </a>
                    </li>  
                    
                    <?php } if((!($this->session->userdata('patient_id'))) AND (!($this->session->userdata('doctor_id'))) ) { ?>
                    
                    <li class="hidden-xs-down">
                        <a href="<?php echo base_url('patient');?>">
                            <span class="tm-label">Patient</span>
                        </a>
                    </li>
  
                     <li class="hidden-xs-down">
                        <a href="<?php echo base_url('doctor');?>">
                            <span class="tm-label">Doctor</span>
                        </a>
                    </li>  
                    
                    <?php } ?>
                   
                    
                </ul>
            </li>
        </ul>
      
        <!-- END HEADER.PHP--> 
    </header>
	 <section >
                    <aside id="sidebar" class="sidebar c-overflow">
                        <ul class="main-menu">
                            <li class="active">
                                <a href="index.php"><i class="zmdi zmdi-home"></i> Home</a>
                            </li>
                            <li class="sub-menu">
                                <a href=""><i class="zmdi zmdi-view-compact"></i> Dashboard</a>

                                <ul>
                                    <li><a href="<?php echo base_url('patient');?>">PATIENT</a></li>
                                    <li><a href="<?php echo base_url('doctor');?>">DOCTOR</a></li>

                                </ul>
                            </li>


                        </ul>
                    </aside>
                </section>
	
