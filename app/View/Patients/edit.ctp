<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">My Details</h3>
                    </div>






											<div class="box-body">
                        <?php $errors=$this->validationErrors;
                          foreach($errors as $error){
                            foreach($error as $message){
                              echo "*".$message[0]."<br>";
                            }
                          }
                          //debug($this->validationErrors);
                        ?>

                        <?php echo $this->Form->create('Patient',array('class'=>'form-horizontal')); ?>
                        <fieldset>
                        <legend>Edit Patient Info</legend>
                        <?php echo $this->Session->flash(); ?>
                        <div class="form-group">
                          <label class="col-md-4 control-label">&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('name',array('class'=>'form-control input-md', 'placeholder' => 'Name', 'type'=>'text','required'));?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('age',array('class'=>'form-control input-md', 'placeholder' => 'Age', 'type'=>'number','required'));?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >&nbsp;</label>
                          <div class="col-md-4">
                            <select name="data[Patient][sex]" class="form-control">
                              <option value="Male" selected>Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('address',array('class'=>'form-control input-md', 'placeholder' => 'Address', 'type'=>'text'));?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('cell',array('class'=>'form-control input-md', 'placeholder' => 'Phone Number', 'type'=>'text','required'));?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('email',array('class'=>'form-control input-md', 'placeholder' => 'Email', 'type'=>'text','required'));?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label"  >&nbsp;</label>
                          <div class="col-md-4">
                        <!--<input  name="data[Patient][password]" placeholder="Password" class="form-control input-md" required type="password"> -->
                          <?php echo $this->Form->input('password',array('class'=>'form-control input-md','value'=>'', 'placeholder' => 'Email', 'type'=>'password','required'));?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for=""></label>
                          <div class="col-md-4">
                            <button  type="submit" name="" class="btn btn-primary">Update Patient Info</button>
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
