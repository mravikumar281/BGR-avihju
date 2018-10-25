<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>TN Fee Committee</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo asset_url(); ?>fee_comm/images/logo_sed.png" type="image/x-icon" />
    <link rel="logo_sed" href="<?php echo asset_url(); ?>fee_comm/images/logo_sed.png"    >
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>fee_comm/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>fee_comm/css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>fee_comm/css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>fee_comm/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>fee_comm/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo asset_url(); ?>fee_comm/css/custom.css">
    <!-- material bootstrap -->
    <!-- <link href="<?php echo asset_url(); ?>fee_comm/css/mdb.min.css" rel="stylesheet"> -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="seo_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="cupcake" class="box">
            <span class="letter">L</span>
            <div class="cupcakeCircle box">
                <div class="cupcakeInner box">
                    <div class="cupcakeCore box"></div>
                </div>
            </div>
            <span class="letter box">A</span>
            <span class="letter box">D</span>
            <span class="letter box">I</span>
            <span class="letter box">N</span>
            <span class="letter box">G</span>
        </div>
    </div>
    <!-- END LOADER -->

    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo asset_url(); ?>fee_comm/images/logos/logo_sed.png" alt="image"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    
                    <ul class="nav navbar-nav navbar-right menu-top">
                        <li><a href="/index.php/feecom">Home</a></li>
                        <li><a href="/index.php/feecom/ann1">School Details</a></li>
                        <li><a class="active" href="/index.php/feecom/ann2">Expenditures</a></li>
                        <li><a href="/index.php/feecom/ann3">Fee Proposed</a></li>
                        <!-- <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    

    

    <div id="support" class="section wb" style="margin-top: 100px;">
        <div class="container">
            <div class="section-title text-center">
                <h3>Annexure - 2</h3>
                <p class="lead">
                    <h4>Format of Expenditure</h4>
                    <h6>Name of the School / Code No:&nbsp;&nbsp;<b>Name.Hr.sec.school, xxxxxx(udise code)</b></h6>
                </p>

            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="school_name" id="school_name" class="form-control" placeholder="School Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="ph_number" id="ph_number" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="town" id="town" class="form-control" placeholder="Village/Town Panchayat/Town/City">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Select Sector</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="vilg">Select Sector</option>
                                        <option value="vilg">Village</option>
                                        <option value="town_pan">Town Panchayat</option>
                                        <option value="dthq">Dt., Head Quarters</option>
                                        <option value="mncplty">Municipality</option>
                                        <option value="corp">Corporation</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="block" id="block" class="form-control" placeholder="Name of the Block">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="taluk" id="taluk" class="form-control" placeholder="Name of Taluk">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="edn_dt" id="edn_dt" class="form-control" placeholder="Educational District">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="rev_dt" id="rev_dt" class="form-control" placeholder="Revenue District">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Enter Year of Starting</label>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="town" id="town" class="form-control" placeholder="Primary">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="town" id="town" class="form-control" placeholder="High School">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="town" id="town" class="form-control" placeholder="Hr. Secondary">
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Nature of Management</label>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Nature of Management</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="ind">Individual</option>
                                        <option value="trust">Trust</option>
                                        <option value="cmte">Committee</option>
                                        <option value="assc">Association</option>
                                        <option value="cmpy">Company</option>                                      
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="man_name" id="man_name" class="form-control" placeholder="Name of Manager"><!-- if Individual -->
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <label>Whether Regisered ? </label>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="ind">Yes</option>
                                        <option value="trust">No</option>
                                                                              
                                    </select><!-- if Trust/Committee/Association/Company -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="man_name" id="man_name" class="form-control" placeholder="Name of the Correspondent/ Managing Trustee"><!-- if Trust/Committee/Association/Company -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="man_name" id="man_name" class="form-control" placeholder="Name of Manager"><!-- if Trust/Committee/Association/Company -->
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>If any other Management type, </label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="man_name" id="man_name" class="form-control" placeholder="Name of Manager"><!-- if Trust/Committee/Association/Company -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="princi" id="princi" class="form-control" placeholder="Name of Principal"><!-- if Trust/Committee/Association/Company -->
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Details of Permission obtained for opening :</label>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="stds" id="stds" class="form-control" placeholder="Standards">
                                </div>


                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="proc_no" id="proc_no" class="form-control" placeholder="Directors Proceeding No.">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" name="Date" id="Date" class="form-control" placeholder="Date">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Year of Recognition granted with Proceedings No. and Date :</label>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="stds" id="" class="form-control" placeholder="Proc. No. with date">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Standards and Period upto which Recognition is granted :</label>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="" id="" class="form-control" placeholder="Std. & Period of Recognition">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Building Stability Certificate (Form - D) Valid upto :</label>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="" id="" class="form-control" placeholder="Stability cert. Validity">
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Type of School (Please Tick in the appropriate box) :</label>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    Boys <input type="radio" name="gender" id="gender" class="form-control" placeholder="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    Girls<input type="radio" name="gender" id="gender" class="form-control" placeholder="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    Co.Ed<input type="radio" name="gender" id="gender" class="form-control" placeholder="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    Non-Residential<input type="radio" id="" name="residential_stat" class="form-control" placeholder="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    Fully Residential<input type="radio" id="" name="residential_stat" class="form-control" placeholder="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    Partly Residential<input type="radio" id="" name="residential_stat" class="form-control" placeholder="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="Medium of Instruction">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="Languages taught under Part – II">
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Details of Groups and Subjects offered :</label>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <table border=1>
                                        <tr>
                                            <td>Group</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3">Vocational Sub.</td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                            <td><input type="text" id="" name="" class="form-control" placeholder=""></td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Details of land made available :</label>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Total area of the land available for school including building area</label>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="in acres">
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="in Sq.feet">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Area of the buildings</label>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="in acres">
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="in Sq.feet">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Area Provided for any other purpose</label>
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="in acres">
                                </div>

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="in Sq.feet">
                                </div>

                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Ownership of the Land :</label>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="ind">Trust</option>
                                        <option value="trust">Society</option>
                                        <option value="ind">Management</option>
                                        <option value="trust">Individual</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="ind">Rented</option>
                                        <option value="trust">Released</option>
                                        <option value="ind">Owned</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                   <label>If on lease, the period of lease :</label> 
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="Date" id="" name="" class="form-control" placeholder="from">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" id="" name="" class="form-control" placeholder="to">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                   <label>Whether Registered :</label> 
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="ind">Yes</option>
                                        <option value="trust">No</option>
                                    </select>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="" name="" class="form-control" placeholder="Amount of Lease">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="" name="" class="form-control" placeholder="If rented, the amount of rent per year">
                                </div>

                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                   <label>Layout plan of the campus showing all the buildings and features on A3 Size :</label> 
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="" name="" class="form-control">
                                </div>






                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="align-self: center;">Save</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section nopad cac text-center">
        <a href="#"><h3>Interesting our awesome web design services? Just drop an email to us and get quote for free!</h3></a>
    </section>

    
    
    
    

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?php echo asset_url(); ?>fee_comm/js/all.js"></script>
    
    <!-- ALL PLUGINS -->
    <script src="<?php echo asset_url(); ?>fee_comm/js/custom.js"></script>

</body>
</html>