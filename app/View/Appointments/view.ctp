<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">&nbsp;</h3>
                    </div>



                    <div class="box-body">
                      <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title ">Appointment Details</h3>
          </div>
          <div class="panel-body">
            <div class="row">

              <div class=" col-md-6 col-lg-6 col-md-offset-3">
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>Doctor Name: </td>
                      <td><a href="<?php echo $this->Html->url(array('controller' => 'doctors', 'action' => 'view',$appointment['Doctor']['id']), true);?>"> <?php echo $appointment['Doctor']['name']?></a></td>
                    </tr>
                    <tr>
                      <td>Patient Name: </td>
                      <td><a href="<?php echo $this->Html->url(array('controller' => 'patients', 'action' => 'view',$appointment['Patient']['id']), true);?>"> <?php echo $appointment['Patient']['name']?></a></td>
                    </tr>
                    <tr>
                      <td>Appointment Date</td>
                      <td>
                        <?php $a = $appointment['Appointment']['appoint_date'];
                            $b = explode(" ",$a);
                            echo h($b[0]);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Date of Making Appointment: </td>
                      <td>
                      <?php $a = $appointment['Appointment']['created'];
                          $b = explode(" ",$a);
                          echo h($b[0]);
                      ?>
                      </td>
                    </tr>



                  </tbody>
                </table>

                <!--<a href="#" class="btn btn-primary">Button1</a>-->
              <!--  <a href="#" class="btn btn-primary">Button 2</a>-->
              </div>
            </div>
          </div>
               <div class="panel-footer">
                      <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary" disabled><i class="glyphicon glyphicon-envelope"></i></a>
                      <span class="pull-right">
                          <a href="<?php echo $this->Html->url(array('controller' => 'appointments', 'action' => 'edit',$appointment['Appointment']['id']), true);?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                          <!--<a href="" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                          <?php
                          echo $this->Form->postLink(
                            '<button class="btn btn-sm btn-danger" data-original-title="Remove this user" data-toggle="tooltip">
                            <i class="glyphicon glyphicon-remove"></i>
                            </button>',
                            array(
                            'action'   => 'delete', $appointment['Appointment']['id']
                            ),
                            array(
                            'class'    => 'tip',
                            'escape'   => false,
                            'confirm'  => 'Are you sure ?'
                            ));
                          ?>
                      </span>
                  </div>

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
