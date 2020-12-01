<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">&nbsp;</h3>
                    </div>




                          <?php
                             $single = array();
                             foreach($id as $patient){
                               $single = $patient['Patient'];
                             }
                             //debug($patient);
                             //debug($single);
                             //die();
                          ?>

                          <div class="box-body">
                            <div class="panel panel-info">
                          <div class="panel-heading">
                          <h3 class="panel-title">My Details</h3>
                          </div>
                          <div class="panel-body">
                          <div class="row">
                          <div class="col-md-3 col-lg-3 " align="center"> <img alt="Patient Pic" src="" class="img-circle img-responsive"> </div>

                          <div class=" col-md-9 col-lg-9 ">
                          <table class="table table-user-information">
                          <tbody>

                          <tr>
                            <td>Name: </td>
                            <td><?php echo h($single['name']); ?></td>
                          </tr>
                          <tr>
                            <td>Age: </td>
                            <td><?php echo h($single['age']); ?></td>
                          </tr>
                          <tr>
                            <td>Sex: </td>
                            <td><?php echo h($single['sex']); ?></td>
                          </tr>
                          <tr>
                            <td>Address: </td>
                            <td><?php echo h($single['address']); ?></td>
                          </tr>
                          <tr>
                            <td>Date of Registration: </td>
                            <td>
                            <?php $a = $single['created'];
                                $b = explode(" ",$a);
                                echo h($b[0]);
                            ?>
                            </td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:<?php echo h($single['email']); ?>"><?php echo h($single['email']); ?></a></td>
                          <tr>
                            <td>Mobile No: </td>
                            <td><?php echo h($single['cell']); ?></td>
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
                                     <a href="<?php echo $this->Html->url(array('controller' => 'patients', 'action' => 'edit_self', $single['id']), true);?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                     <!--<a href="" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                                     <?php
                                     echo $this->Form->postLink(
                                       '<button class="btn btn-sm btn-danger" data-original-title="Remove this user" data-toggle="tooltip">
                                       <i class="glyphicon glyphicon-remove"></i>
                                       </button>',
                                       array(
                                       'controller'=>'patients','action'=> 'delete', $single['id']
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
