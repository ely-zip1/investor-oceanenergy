
         <section class="section">
               <div class="container mt-5">
                     <div class="row">
                           <div class="col-lg-6">
                                 <div class="row">
                                       <div class="col-12">
                                          <div class="login-brand">
                                          </div>
                                       </div>
                                 </div>

                                 <div class="card ">

                                       <div class="card-body">
                                         <div class="row">
                                           <div class="col-12 text-center">
                                               <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/img/lm-logo.png" alt="logo" width="150"></a> <br>
                                               <br>
                                               <h3 class="login-title">Login</h3> <br>
                                           </div>
                                         </div>

                                                <?php

                                                if(isset($validation_error)){
                                                      echo '<div class="alert alert-danger">';
                                                      echo $validation_error;
                                                      echo '</div>';
                                                }

                                                ?>
                                             <!-- <form method="POST" action="#" class="needs-validation" novalidate=""> -->
                                             <?php echo form_open('login'); ?>
                                             <div class="form-group">
                                                   <label for="username">Username</label>
                                                   <input id="username" type="text"
                                                         class="form-control <?php if(strlen(form_error('username')) > 0){echo "is-invalid";} ?>"
                                                         name="username" tabindex="1" autofocus
                                                         value="<?= set_value('username','',true)?>">
                                                   <div class="invalid-feedback">
                                                         <?php echo form_error('username');?>
                                                   </div>
                                             </div>

                                             <div class="form-group">
                                                   <div class="d-block">
                                                         <label for="password" class="control-label">Password</label>

                                                   </div>
                                                   <input id="password" type="password"
                                                         class="form-control <?php if(strlen(form_error('password')) > 0){echo "is-invalid";} ?>"
                                                         name="password" tabindex="2">
                                                   <div class="invalid-feedback">
                                                         <?php echo form_error('password');?>
                                                   </div>
                                                   <div class="float-right">
                                                         <a href="<?php echo base_url(); ?>forgot_password"
                                                               class="text-small">
                                                               Forgot Password?
                                                         </a>
                                                   </div>
                                             </div>

                                             <div class="form-group text-right">
                                                   <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin:10px 0px;"
                                                         tabindex="4">
                                                         Login
                                                   </button>
                                             </div>
                                             </form>

                                       </div>
                                 <div class="mb-3 text-muted text-center" >
                                       <a href="<?php echo base_url(); ?>registration">Register Now</a>
                                 </div>
                                 </div>
                           </div>
                           <div class="col-lg-6">

                           </div>
                     </div>
               </div>
         </section>
