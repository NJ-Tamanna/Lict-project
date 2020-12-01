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
                          ?>
                          <?php echo $this->Form->create('Admin',array('class'=>'form-horizontal')); ?>
                          <fieldset>

                          <!-- Form Name -->
                          <legend>Edit an Admin</legend>
                          <?php echo $this->Session->flash(); ?>
                          <!-- Name input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-4">
                            <?php echo $this->Form->input('name',array('class'=>'form-control input-md', 'placeholder' => 'Name', 'type'=>'text','required'));?>
                            </div>
                          </div>

                          <!-- Email input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="data[Admin][email]">&nbsp;</label>
                            <div class="col-md-4">
                            <?php echo $this->Form->input('email',array('class'=>'form-control input-md', 'placeholder' => 'Email', 'type'=>'email','required'));?>
                            </div>
                          </div>

                          <!-- Phone input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="data[Admin][cell]">&nbsp;</label>
                            <div class="col-md-4">
                            <?php echo $this->Form->input('cell',array('class'=>'form-control input-md', 'placeholder' => 'Phone Number', 'type'=>'number','required'));?>
                            </div>
                          </div>

                          <!-- Password input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="data[Admin][password]">&nbsp;</label>
                            <div class="col-md-4">
                              <input  name="data[Admin][password]" placeholder="Password" class="form-control input-md" required type="password">
                            </div>
                          </div>

                          <!-- Button -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for=""></label>
                            <div class="col-md-4">
                              <button  type="submit" name="" class="btn btn-primary">Update The Admin Info</button>
                            </div>
                          </div>

                          </fieldset>
                          </form>





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
