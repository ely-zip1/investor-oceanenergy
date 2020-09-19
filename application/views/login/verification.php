<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="login-brand">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                          <div class="card-body text-center">
                            <div class="row text-center">
                              <div class="col-12">
                                 <h6>Almost there!</h6> <br>
                                 <h6>Enter the code that we have sent to your email to activate your account.</h6>
                                 <br>

                                 <?php echo form_open('verification'); ?>
                                 <div class="form-group">
                                  <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="" aria-label="" name="v_code">
                                    <div class="input-group-append">
                                      <button class="btn btn-primary" type="submit">Confirm</button>
                                    </div>
                                  </div>
                                </div>
                                <?php  echo form_close(); ?>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="simple-footer">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
