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
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                   <center><h3>Expenditure incurred as HEAD OF EXPENDITURE per School Statement 2018-19 (in Rupees)</h3></center>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Principal Salary</label>
                                    <input type="number" class="form-control" placeholder="" name="pris"  >
                                </div> 



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Teaching Staff Salary</label>
                                    <input type="number" class="form-control" placeholder="" name="tss"  >  
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Non Teaching Staff Salary </label>
                                    <input type="number" class="form-control" placeholder=""  name="ntss"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>E.P.F. Contribution </label>
                                    <input type="number" class="form-control" placeholder=""  name="epf"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>ESI</label>
                                    <input type="number" class="form-control" placeholder="" name="esi"  >  
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Electricity Charges</label>
                                    <input type="number" class="form-control" placeholder="" name="eb"  >  
                                </div>





                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Water Charges</label>
                                    <input type="number" class="form-control" placeholder="" name="wc"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Property Tax</label>
                                    <input type="number" class="form-control" placeholder="" name="pt">  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Telephone and Mobile Phone Charges</label>
                                    <input type="number" class="form-control" placeholder="" name="mobile"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Internet and SMS Charges</label>
                                    <input type="number" class="form-control" placeholder="" name="internet"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Postage</label>
                                    <input type="number" class="form-control" placeholder="" name="post"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Printing of Cash Book,Ledgers, Fee-Receipts, School Magazines,Circulars etc.,</label>
                                <input type="number" class="form-control" placeholder="" name="print"  >
                                </div>  



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Stationery Items</label>
                                    <input type="number" class="form-control" placeholder="" name="stationery"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Examination Expenses</label>
                                    <input type="number" class="form-control" placeholder="" name="examination"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Books and Periodicals(Library)</label>
                                    <input type="number" class="form-control" placeholder="" name="library"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Teaching Aids</label>
                                    <input type="number" class="form-control" placeholder="" name="teaching"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Gratuity</label>
                                    <input type="number" class="form-control" placeholder="" name="graut"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Sports and Games</label>
                                    <input type="number" class="form-control" placeholder="" name="sports"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Incentives for Good Results</label>
                                    <input type="number" class="form-control" placeholder="" name="incentives"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Gifts Given on Occasions and Festivals </label>
                                    <input type="number" class="form-control" placeholder="" name="gifts"  >  
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Retirement Purse</label>
                                    <input type="number" class="form-control" placeholder="" name="retirement"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Staff Uniform</label>
                                    <input type="number" class="form-control" placeholder="" name="suniform"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Staff Welfare</label>
                                    <input type="number" class="form-control" placeholder="" name="staffwelfare"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Staff Insurance</label>
                                    <input type="number" class="form-control" placeholder="" name="staffinsurance"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Professional Fee (Legal & Audit) Administrative Charge</label>
                                    <input type="number" class="form-control" placeholder="" name="profffee"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Hospitality</label>
                                    <input type="number" class="form-control" placeholder="" name="hosp"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Advertisement for Recruitment of Teachers</label>
                                    <input type="number" class="form-control" placeholder="" name="adver"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Gardening(Salary and Materials)</label>
                                    <input type="number" class="form-control" placeholder="" name="garden"  >  
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Security Services</label>
                                    <input type="number" class="form-control" placeholder="" name="security"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Sanitation(Salary and Materials)</label>
                                    <input type="number" class="form-control" placeholder="" name="sanitation"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Educational Tour</label>
                                    <input type="number" class="form-control" placeholder="" name="tour"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Seminar</label>
                                    <input type="number" class="form-control" placeholder="" name="seminar"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Group Activities(NCC/NSS/Scouts/JRC/RS)</label>
                                    <input type="number" class="form-control" placeholder="" name="group"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Medical Expenses</label>
                                    <input type="number" class="form-control" placeholder="" name="medical"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Smart Class / Any other modern technology of Teaching</label>
                                    <input type="number" class="form-control" placeholder="" name="smartclass"  >  
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Functions and Celebrations</label>
                                    <input type="number" class="form-control" placeholder="" name="functions"  >  
                                </div>



                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Extra- Curricular Activities with in the Curriculam</label>
                                    <input type="number" class="form-control" placeholder="" name="eca"  >  
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label></label>
                                </div>



                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>Total Expenditure</label>
                                    <input type="number" class="form-control" placeholder="" name="total"  >  
                                </div>



                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <label>No.of Students</label>
                                    <input type="number" class="form-control" placeholder="" name="students"  >
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
        <a href="#"><h3>&copy; Copyright owned by Tamilnadu Private Schools Fee Determination Committee<br>Developed by TN EMIS Team</h3></a>
    </section>

    
    
    
    

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?php echo asset_url(); ?>fee_comm/js/all.js"></script>
    
    <!-- ALL PLUGINS -->
    <script src="<?php echo asset_url(); ?>fee_comm/js/custom.js"></script>

</body>
</html>