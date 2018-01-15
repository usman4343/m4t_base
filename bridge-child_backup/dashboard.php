<?php
session_start();
/*
Template Name: Dashboard Template
*/

if(isset($_GET["logout"]) && $_GET["logout"] == 1) {
	wp_logout();
	wp_redirect(get_site_url("", "/login/"));
	exit;
}

get_header("dashboard");

if(!isset($_GET["page"])) {
	wp_redirect("?page=index.html");
	exit;
}

$page = $_GET["page"];
$a = file_get_contents(get_stylesheet_directory() . "/Dark/" . $page);

if($a) {
    $link = get_stylesheet_directory() . "/Dark/";

    // change the links
    $b = preg_replace("~\[LINKS\]~", $link, $a);

    // inject the notifications bar
    $b = preg_replace("~\[RIGHT_SIDEBAR\]~", get_template_part("Dark/dash/sidebar"), $b);
    echo $b;
}

//start 

// $c = preg_replace("~\[FORM_FIELDS\]~", get_template_part("Dark/dash/change-profile-form"), $b);
// echo $c;
//end
?>
<!-- ============================================================== -->
<!-- Edit User profile page  content :WAQAS-->
<!-- ============================================================== -->
<?php if($_GET["page"]=="change-profile.html") { ?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
            	<div class="col-sm-12">
            		<div class="card-box">

            			<div class="row">
            				<div class="col-lg-6">
                                <h4 class="header-title m-t-0 m-b-30 text-center">Edit Profile</h4>
            					<?php       
			 // echo "change profile page";
			       $m4t_user = get_currentuserinfo(); 
			 //      var_dump($m4t_user);   
			 
			             if(isset($_POST['submit'])){ 
	                   
	                        // Counting number of checked checkboxes.
			                    $userdata = $_POST;
			                   $result = wp_update_user( $userdata );
			                   
			                        if($result)
			                               {
			                      $_SESSION['success'] = TRUE; 
			                      }
			                      else
			                      { 
			                        $_SESSION['fail'] = TRUE;

			                      }
			                      wp_redirect("?page=change-profile.html");    
			                }
			            ?>
				   <form class="form-horizontal" role="form" method="post">
				             <div class="form-group">
				             <?php if(isset($_SESSION['success'])) {
				                  ?>
				               <div class="form-group has-success">
                                <label class="col-md-3 control-label" for="state-success">Success</label>
                                <div class="col-md-6">
                                    <input type="text" id="state-success" name="state-success" class="form-control" placeholder="Successfully Edited">
                                </div>
                            </div>
                            <?php
                              
				             }  elseif(isset($_SESSION['fail']))
				                    {  ?>
				                       <div class="form-group has-success">
                                <label class="col-md-3 control-label" for="state-success">Unsuccessfull</label>
                                <div class="col-md-6">
                                    <input type="text" id="state-success" name="state-success" class="form-control" placeholder="Unable to Edit">
                                </div>
                            </div>
				                   <?php  } ?>
				                <label class="col-md-2 control-label">Nice Name</label>
				                <div class="col-md-10">
				                    <input type="text" class="form-control" name="user_nicename" value="<?php echo $m4t_user->data->user_nicename; ?>">
				                </div>
				                <input type="hidden" name="ID" value="<?php echo $m4t_user->data->ID;  ?>">
				            </div>
				            <div class="form-group">
				                <label class="col-md-2 control-label">Username</label>
				                <div class="col-md-10">
				                    <input type="text" class="form-control" disabled="" name="user_login" value="<?php echo $m4t_user->data->user_login;  ?>">
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="col-md-2 control-label" for="example-email">Email</label>
				                <div class="col-md-10">
				                    <input type="email" id="example-email" class="form-control" name="user_email" value="<?php echo $m4t_user->data->user_email; ?>" ">
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="col-md-2 control-label">Password</label>
				                <div class="col-md-10">
				                    <input type="password" class="form-control" name="user_pass" >
				                </div>
				            </div>
				            <span class="input-group-btn text-center" >
				            <button type="submit" name="submit" class="btn waves-effect waves-light btn-primary center-block">Submit</button>
				            </span>

				        </form> 

            				</div><!-- end col -->

            			</div><!-- end row -->
            		</div>
            	</div><!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer">
         [COPYRIGHT]
    </footer>

</div>

[RIGHT_SIDEBAR]
<?php  } ?>

<?php   if($_GET["page"]=="user_index.html") { 
	?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <h4>Invoice</h4>
                        </div> -->
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h3 class="logo">User Details</h3>
                                </div>
                                <div class="pull-right">
                                    <h4>Billing Details <br>
                                        <strong></strong>
                                    </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                        <?php 
                        $m4t_user1 = get_currentuserinfo(); 
                         ?>
                                    <div class="pull-left m-t-30">
                                        <form class="form-horizontal" role="form">
                                      <div class="form-group">
                                        <label class="col-md-2 control-label">Nice Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" value="<?php echo $m4t_user1->data->user_nicename; ?>">
                                        </div>
                                        <!-- <label class="col-sm-2 control-label">Static control</label>
                                        <div class="col-sm-10">
                                          <p class="form-control-static">email@example.com</p>
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">User Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" value="<?php echo $m4t_user1->data->user_login; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" value="<?php echo $m4t_user1->data->user_email; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="ID" value="<?php echo $m4t_user1->data->ID;  ?>">
                                   </form>
                                    </div>
                                    <!-- <div class="pull-right m-t-30">
                                        <p><strong>Order Date: </strong> Jan 17, 2016</p>
                                        <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
                                        <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                                    </div> -->
                                    <!-- <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Readonly</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" readonly="" value="Readonly value">
                                        </div>
                                    </div>
                                   </form> -->
                                </div><!-- end col -->
                            </div>
                            <!-- end row -->

                            <!-- <div class="m-h-50"></div> -->
                            <?php
							   global $wpdb;
						      $m4t_user_detail = wp_get_current_user();

						      $m4t_user_id = $m4t_user_detail->ID;
						     

						$qry = "SELECT subscription_plan_id FROM wpgj_pms_member_subscriptions WHERE user_id='$m4t_user_id' ";
						  $results = $wpdb->get_results($qry);
						  //var_dump($results);	     
							?>
                            <div class="row">
                                <div class="col-md-6">
                                	<h3 >Your Packages</h3>
                                    <div class="table-responsive">

                                        <table class="table m-t-10">
                                            <thead>
                                                <tr><th>#</th>
                                                <th>Item</th>
                                                <th>Description</th>
                                               <!--  <th>Quantity</th>
                                                <th>Unit Cost</th>
                                                <th>Total</th> -->
                                            </tr></thead>
                                            <tbody>
                                            <?php $i=1;	foreach ($results as $value) {
										  	
										  	    $sub_plan_id = $value->subscription_plan_id;
										  	    //echo $sub_plan_id.'<br />';
										  	     $qry = "SELECT post_title FROM wpgj_posts WHERE ID ='$sub_plan_id' ";
										         $res = $wpdb->get_row($qry);
										         if($res){
										  	   ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $res->post_title;  ?></td>
                                                    <td>Lorem ipsum dolor sit amet.</td>
                                                    <!-- <td>1</td>
                                                    <td>$380</td>
                                                    <td>$380</td> -->
                                                </tr>
                                          <?php  $i++; 
                                                     }
                                                 else{ ?>
                                                 	<tr><td><?php echo "No Records to Display" ?></td></tr>
                                                 	<?php	
                                                 }     

                                                }  ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                           <!--  <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="clearfix m-t-40">
                                        <h5 class="small text-inverse font-600">Details</h5>

                                        <small>
                                            All accounts are to be paid within 7 days from receipt of
                                            invoice. To be paid by cheque or credit card or direct payment
                                            online. If account is not paid within 7 days the credits details
                                            supplied as confirmation of work undertaken will be charged the
                                            agreed quoted fee noted above.
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">
                                    <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                                    <p class="text-right">Discout: 12.9%</p>
                                    <p class="text-right">VAT: 12.9%</p>
                                    <hr>
                                    <h3 class="text-right">USD 2930.00</h3>
                                </div>
                            </div> -->
                            
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Area Chart with Point</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #35b8e0;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-area-with-dotted" style="height: 300px;"></div>

                    </div>
                </div><!-- end col-->

                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30"> Donut Chart</h4>

                        <div id="morris-donut-example" style="height: 300px;"></div>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>In-Store Sales</h5>
                                </li>
                                <li>
                                    <h5 style="color: #35b8e0;"><i class="fa fa-circle m-r-5"></i>Mail-Order Sales</h5>
                                </li>
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Download Sales</h5>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div><!-- end col-->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Line Chart</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Line Chart</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-line-example" style="height: 300px;"></div>

                    </div>
                </div><!-- end col-->

                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Bar Chart</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                                <li>
                                    <h5 style="color: #35b8e0;"><i class="fa fa-circle m-r-5"></i>Series C</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-bar-example" style="height: 300px;"></div>
                    </div>
                </div><!-- end col-->

            </div>
                            <hr>
                            <div class="hidden-print">
                                <div class="pull-right">
                                    <!-- <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a> -->
                                    <a href="?page=change-billing-profile.html" class="btn btn-primary waves-effect waves-light">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer">
       [COPYRIGHT]
    </footer>

</div>
<?php } ?>

<?php if($_GET["page"]=="change-billing-profile.html") { ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Area Chart with Point</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #35b8e0;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-area-with-dotted" style="height: 300px;"></div>

                    </div>
                </div><!-- end col-->

                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30"> Donut Chart</h4>

                        <div id="morris-donut-example" style="height: 300px;"></div>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>In-Store Sales</h5>
                                </li>
                                <li>
                                    <h5 style="color: #35b8e0;"><i class="fa fa-circle m-r-5"></i>Mail-Order Sales</h5>
                                </li>
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Download Sales</h5>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div><!-- end col-->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Line Chart</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Line Chart</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-line-example" style="height: 300px;"></div>

                    </div>
                </div><!-- end col-->

                <div class="col-lg-6">
                    <div class="card-box">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="zmdi zmdi-more-vert"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="header-title m-t-0 m-b-30">Bar Chart</h4>

                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li>
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle m-r-5"></i>Series A</h5>
                                </li>
                                <li>
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle m-r-5"></i>Series B</h5>
                                </li>
                                <li>
                                    <h5 style="color: #35b8e0;"><i class="fa fa-circle m-r-5"></i>Series C</h5>
                                </li>
                            </ul>
                        </div>
                        <div id="morris-bar-example" style="height: 300px;"></div>
                    </div>
                </div><!-- end col-->

            </div>
            <!-- end row -->




        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer">
        [COPYRIGHT]
    </footer>

</div>

[RIGHT_SIDEBAR]
<?php  } ?>
<!-- ============================================================== -->
<!-- Edit content  here : WAQAS -->
<!-- ============================================================== -->


 
<?php

get_footer("dashboard");
