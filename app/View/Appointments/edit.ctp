<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">My Details</h3>
                    </div>




											<div class="box-body">

                        <?php echo $this->Form->create('Appointment',array('class'=>'form-horizontal')); ?>
                        <fieldset>
                        <!-- Form Name -->
                        <legend>Edit Appointment Info</legend>
                        <?php echo $this->Session->flash(); ?>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('doctor_id',array('class'=>'form-control input-md','required'));?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" >&nbsp;</label>
                          <div class="col-md-4">
                          <?php echo $this->Form->input('patient_id',array('class'=>'form-control input-md','required'));?>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" >Month</label>
                          <div class="col-md-4">
                            <select name="data[Appointment][appoint_date][month]" class="form-control input-md" required="required" id="AppointmentAppointDateMonth">
                            <option value="01" <?php echo date('M')=='Jan'?"selected":"" ?>>January</option>
                            <option value="02"<?php echo date('M')=='Feb'?"selected":"" ?>>February</option>
                            <option value="03"<?php echo date('M')=='Mar'?"selected":"" ?>>March</option>
                            <option value="04"<?php echo date('M')=='Apr'?"selected":"" ?>>April</option>
                            <option value="05"<?php echo date('M')=='May'?"selected":"" ?>>May</option>
                            <option value="06"<?php echo date('M')=='Jun'?"selected":"" ?>>June</option>
                            <option value="07"<?php echo date('M')=='Jul'?"selected":"" ?>>July</option>
                            <option value="08"<?php echo date('M')=='Aug'?"selected":"" ?>>August</option>
                            <option value="09"<?php echo date('M')=='Sep'?"selected":"" ?>>September</option>
                            <option value="10"<?php echo date('M')=='Oct'?"selected":"" ?>>October</option>
                            <option value="11"<?php echo date('M')=='Nov'?"selected":"" ?>>November</option>
                            <option value="12"<?php echo date('M')=='Dec'?"selected":"" ?>>December</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >Date</label>
                          <div class="col-md-4">
                            <select name="data[Appointment][appoint_date][day]" class="form-control input-md" required="required" id="AppointmentAppointDateDay">
                              <option value="01" <?php echo date('d')=='01'?"selected":"" ?>>1</option>
                              <option value="02" <?php echo date('d')=='02'?"selected":"" ?>>2</option>
                              <option value="03" <?php echo date('d')=='03'?"selected":"" ?>>3</option>
                              <option value="04" <?php echo date('d')=='04'?"selected":"" ?>>4</option>
                              <option value="05" <?php echo date('d')=='05'?"selected":"" ?>>5</option>
                              <option value="06" <?php echo date('d')=='06'?"selected":"" ?>>6</option>
                              <option value="07" <?php echo date('d')=='07'?"selected":"" ?>>7</option>
                              <option value="08" <?php echo date('d')=='08'?"selected":"" ?>>8</option>
                              <option value="09" <?php echo date('d')=='09'?"selected":"" ?>>9</option>
                              <option value="10" <?php echo date('d')=='10'?"selected":"" ?>>10</option>
                              <option value="11" <?php echo date('d')=='11'?"selected":"" ?>>11</option>
                              <option value="12" <?php echo date('d')=='12'?"selected":"" ?>>12</option>
                              <option value="13" <?php echo date('d')=='13'?"selected":"" ?>>13</option>
                              <option value="14" <?php echo date('d')=='14'?"selected":"" ?>>14</option>
                              <option value="15" <?php echo date('d')=='15'?"selected":"" ?>>15</option>
                              <option value="16" <?php echo date('d')=='16'?"selected":"" ?>>16</option>
                              <option value="17" <?php echo date('d')=='17'?"selected":"" ?>>17</option>
                              <option value="18" <?php echo date('d')=='18'?"selected":"" ?>>18</option>
                              <option value="19" <?php echo date('d')=='19'?"selected":"" ?>>19</option>
                              <option value="20" <?php echo date('d')=='20'?"selected":"" ?>>20</option>
                              <option value="21" <?php echo date('d')=='21'?"selected":"" ?>>21</option>
                              <option value="22" <?php echo date('d')=='22'?"selected":"" ?>>22</option>
                              <option value="23" <?php echo date('d')=='23'?"selected":"" ?>>23</option>
                              <option value="24" <?php echo date('d')=='24'?"selected":"" ?>>24</option>
                              <option value="25" <?php echo date('d')=='25'?"selected":"" ?>>25</option>
                              <option value="26" <?php echo date('d')=='26'?"selected":"" ?>>26</option>
                              <option value="27" <?php echo date('d')=='27'?"selected":"" ?>>27</option>
                              <option value="28" <?php echo date('d')=='28'?"selected":"" ?>>28</option>
                              <option value="29" <?php echo date('d')=='29'?"selected":"" ?>>29</option>
                              <option value="30" <?php echo date('d')=='30'?"selected":"" ?>>30</option>
                              <option value="31" <?php echo date('d')=='31'?"selected":"" ?>>31</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label" >Year</label>
                          <div class="col-md-4">
                            <select name="data[Appointment][appoint_date][year]" class="form-control input-md" required="required" id="AppointmentAppointDateYear">
                              <option value="<?php echo date('Y');?>" selected ><?php echo date('Y');?></option>
                              <option value="<?php echo date('Y')+1;?>" ><?php echo date('Y')+1;?></option>
                            </select>
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-md-4 control-label"></label>
                          <div class="col-md-4">
                            <button  type="submit" name="" class="btn btn-primary">Edit This Appointment</button>
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
