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
                    <?php echo $this->Form->create('Doctor',array('type' => 'file','class'=>'form-horizontal')); ?>
                    <fieldset>
                    <legend>Edit Doctor Info</legend>
                    <?php echo $this->Session->flash(); ?>
                    <div class="form-group">
                      <label class="col-md-4 control-label">&nbsp;</label>
                      <div class="col-md-4">
                      <?php echo $this->Form->input('name',array('class'=>'form-control input-md', 'placeholder' => 'Name', 'type'=>'text','required'));?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" >&nbsp;</label>
                      <div class="col-md-4">
                      <?php echo $this->Form->input('specialist',array('class'=>'form-control input-md', 'placeholder' => 'Specialization Fields', 'type'=>'text'));?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" >&nbsp;</label>
                      <div class="col-md-4">
                      <?php echo $this->Form->input('daysInWeek',array('class'=>'form-control input-md', 'placeholder' => 'Visiting Days', 'type'=>'text','required'));?>
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
                      <?php echo $this->Form->input('address',array('class'=>'form-control input-md', 'placeholder' => 'Address', 'type'=>'text'));?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" >&nbsp;</label>
                      <div class="col-md-4">
                      <?php echo $this->Form->input('email',array('class'=>'form-control input-md', 'placeholder' => 'Email', 'type'=>'text','required'));?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" >&nbsp;</label>
                      <div class="col-md-4">
                      <input  name="data[Doctor][password]" placeholder="Password" class="form-control input-md" required type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" ></label>
                      <div class="col-md-4">
                        <?php
                          $ab = '/files/doctor/photo/' . $this->request->data['Doctor']['photo_dir'] . '/' . $this->request->data['Doctor']['photo'];
  											//echo $ab;
  											  echo $this->Html->image($ab,array('class'=>'img-responsive'));
                          //echo $this->Form->input('photo',array('type' => 'file'));
                          echo $this->Form->input('photo', array('type' => 'file','required'=>'false'));
                          echo $this->Form->input('photo_dir', array('type' => 'hidden'));
                        ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for=""></label>
                      <div class="col-md-4">
                        <button  type="submit" name="" class="btn btn-primary">Update The Doctor Info</button>
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
