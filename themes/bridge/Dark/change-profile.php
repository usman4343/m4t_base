<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php
echo "I am called";
echo get_template_directory_uri().'/wp-includes/pluggable.php' ?>
?>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
            	<div class="col-sm-12">
            		<div class="card-box">

            			
                        <?php
                               $current_user = wp_get_current_user();
                               var_dump($currnt_user); 


                         ?>
            			<div class="row">
            				<div class="col-lg-6">
                                <h4 class="header-title m-t-0 m-b-30 text-center">Edit Profile</h4>
            					<form class="form-horizontal" role="form" action="edit-profile-action.php">
                                     <div class="form-group">
                                        <label class="col-md-2 control-label">Nice Name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="Some text value...">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                          <p class="form-control-static">email@example.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="example-email">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" value="password">
                                        </div>
                                    </div>
                                    <span class="input-group-btn text-center" >
                                    <button type="button" class="btn waves-effect waves-light btn-primary center-block">Submit</button>
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


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


 [RIGHT_SIDEBAR]


           