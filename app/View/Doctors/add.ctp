<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">






											<div class="box-body">
                        <?php $errors=$this->validationErrors;
                          foreach($errors as $error){
                            foreach($error as $message){
                              echo "*".$message[0]."<br>";
                            }
                          }
                          //debug($this->validationErrors);
                        ?>
											<?php echo $this->Form->create('Doctor', array('type' => 'file','class'=>'form-horizontal')); ?>
												<fieldset>
													<legend>Add Doctor</legend>
                          <?php echo $this->Session->flash(); ?>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Name</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][name]" placeholder="Full Name" class="form-control input-md" required type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Specialization</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][specialist]" placeholder="Specialization" class="form-control input-md"  type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Visiting Days</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][daysInWeek]" placeholder="Visiting Days Number" class="form-control input-md" required type="number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Phone Number</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][cell]" placeholder="Phone Number" class="form-control input-md" required type="number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Address</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][address]" placeholder="Address" class="form-control input-md"  type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Email</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][email]" placeholder="Email address" class="form-control input-md" required type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Password</label>
                            <div class="col-md-4">
                            <input  name="data[Doctor][password]" placeholder="Password" class="form-control input-md" required type="password">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" ></label>
                            <div class="col-md-4">
                              <?php
      													//echo $this->Form->input('photo',array('type' => 'file'));
      													echo $this->Form->input('photo', array('type' => 'file','required'=>'false'));
      											    echo $this->Form->input('photo_dir', array('type' => 'hidden'));
      												?>
                            </div>
                          </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for=""></label>
                          <div class="col-md-4">
                            <button  type="submit" name="" class="btn btn-primary">Add This Doctor</button>
                          </div>
                        </div>
												</fieldset>
											</form>
											</div>





										</div>
								<!-- /.box -->


								<!-- /.box -->
						</div>
						<!-- /.col -->
				</div>
				<!-- /.row -->
		</section>
		<!-- /.content -->
</div>
