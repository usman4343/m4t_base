<?php       
 // echo "change profile page";
       $m4t_user = get_currentuserinfo(); 
 //      var_dump($m4t_user);   
  ?>  
   
        <?php
             if(isset($_POST['submit'])){ 

                   
                // Counting number of checked checkboxes.
                    $userdata = $_POST;
                   $result = wp_update_user( $userdata );
                   

                        if($result)
                               {
                      $_SESSION['success'] = TRUE; ?>
                    <!-- "<div class="form-group has-success">
                                <label class="col-md-3 control-label" for="state-success"><b>Updated Successfull.</label>
                                
                            </div>" -->
                     <?php       
                       
                      }
                      else
                      { 
                        $_SESSION['fail'] = TRUE;
                        ?>
                        <!-- "<div class="form-group has-warning">
                                <label class="col-md-3 control-label" for="state-warning"><?php  echo "<b>Unable To Update Fileds .</b>"; ?></label>
                                
                            </div>" -->
                       <?php 
                      
                      }
                       
               
                }

            ?>
                   

   <form class="form-horizontal" role="form" method="post">
             <div class="form-group">
             <?php if(isset($_SESSION['success'])) {
              echo $_SESSION['success'];
             }  elseif(isset($_SESSION['fail']))
                    {
                        echo $_SESSION['fail'];
                    } ?>
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
                    <input type="password" class="form-control" name="user_pass" value="<?php echo $m4t_user->data->user_pass; ?>">
                </div>
            </div>
            <span class="input-group-btn text-center" >
            <input type="submit" name="submit" class="btn waves-effect waves-light btn-primary center-block">
            </span>

        </form> 