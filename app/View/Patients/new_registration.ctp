<div class="">
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
                      <?php echo $this->Form->create('Patient', array('class'=>'form-horizontal')); ?>
                        <fieldset>
                          <legend>New Patient</legend>
                          <?php echo $this->Session->flash(); ?>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Name</label>
                            <div class="col-md-4">
                            <input  name="data[Patient][name]" placeholder="Full Name" class="form-control input-md" required type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Age</label>
                            <div class="col-md-4">
                            <input  name="data[Patient][age]" placeholder="Age" class="form-control input-md" required type="number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Sex</label>
                            <div class="col-md-4">
                              <select name="data[Patient][sex]" class="form-control">
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Address</label>
                            <div class="col-md-4">
                            <input  name="data[Patient][address]" placeholder="Address" class="form-control input-md"  type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Phone Number</label>
                            <div class="col-md-4">
                            <input  name="data[Patient][cell]" placeholder="Phone Number" class="form-control input-md" required type="number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Email</label>
                            <div class="col-md-4">
                            <input  name="data[Patient][email]" placeholder="Email address" class="form-control input-md" required type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-4 control-label" >Password</label>
                            <div class="col-md-4">
                            <input  name="data[Patient][password]" placeholder="Password" class="form-control input-md" required type="password">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label" for=""></label>
                            <div class="col-md-4">
                              <button  type="submit" name="" class="btn btn-primary">Add This Patient</button>
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
