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
                    <!--  <form action="/hms_system1/admins/add" id="AdminAddForm" method="post" accept-charset="utf-8" class="form-horizontal">
                        <div style="display:none;"><input type="hidden" name="_method" value="POST"/></div> -->
                      <?php echo $this->Form->create('Admin',array('class'=>'form-horizontal')); ?>
                      <fieldset>

                      <!-- Form Name -->
                      <legend>Add Admin</legend>
                      <?php echo $this->Session->flash(); ?>
                      <!-- Name input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="data[Admin][name]">Name</label>
                        <div class="col-md-4">
                        <input  name="data[Admin][name]" placeholder="Full Name" class="form-control input-md" required type="text">
                        </div>
                      </div>

                      <!-- Email input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="data[Admin][email]">Email</label>
                        <div class="col-md-4">
                        <input  name="data[Admin][email]" placeholder="Email" class="form-control input-md" required type="email">
                        </div>
                      </div>

                      <!-- Phone input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="data[Admin][cell]">Phone Number</label>
                        <div class="col-md-4">
                        <input  name="data[Admin][cell]" placeholder="Phone Number" class="form-control input-md" required type="number">
                        </div>
                      </div>

                      <!-- Password input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="data[Admin][password]">Password</label>
                        <div class="col-md-4">
                          <input  name="data[Admin][password]" placeholder="Password" class="form-control input-md" required type="password">
                        </div>
                      </div>

                      <!-- Button -->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-md-4">
                          <button  type="submit" name="" class="btn btn-primary">Add This Admin</button>
                        </div>
                      </div>

                      </fieldset>
                      </form>




                      <!-- ////////////////////////////////////// -->





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
