<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">






										<div class="table-responsive">
											<h2><?php echo __('My Appointments'); ?></h2>
											<table class="table table-bordred table-striped">
											<thead>
											<tr>
													<th><?php echo __('Name'); ?></th>
													<th><?php echo __('Sex');   ?></th>
													<th><?php echo __('Age');  ?></th>
													<th><?php echo __('Address');  ?></th>
													<th><?php echo __('Visited');  ?></th>
													<th class="actions"><?php echo __('Actions'); ?></th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($id as $key): ?>
											<tr>
												<td>
													<?php echo $this->Html->link($key['Patient']['name'], array('controller' => 'patients', 'action' => 'doctors_view', $key['Patient']['id'])); ?>
												</td>
												<td><?php echo h($key['Patient']['sex']); ?>&nbsp;</td>
												<td><?php echo h($key['Patient']['age']); ?>&nbsp;</td>
												<td><?php echo h($key['Patient']['address']); ?>&nbsp;</td>
										    <td><select>
										      <option value='0' selected>Not Visited</option>
										      <option value='1'>Visited</option>
										    </select>&nbsp;</td>

                        <td class="actions">
                    			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $admin['Admin']['id'])); ?>
                          <a href="<?php echo $this->Html->url(array('controller' => 'appointments', 'action' => 'doctors_view',$key['Appointment']['id']), true);?>" data-original-title="view this appointment" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-info-sign"></i></a>
                    			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $admin['Admin']['id'])); ?>
                          <a href="<?php echo $this->Html->url(array('controller' => 'appointments', 'action' => 'doctors_edit',$key['Appointment']['id']), true);?>" data-original-title="Edit this appointment" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

                    			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $admin['Admin']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $admin['Admin']['id']))); ?>
                          <?php
                            echo $this->Form->postLink(
                            '<button class="btn btn-sm btn-danger" data-original-title="Remove this appointment" data-toggle="tooltip">
                            <i class="glyphicon glyphicon-remove"></i>
                            </button>',
                            array(
                            'controller'=>'appointments','action'   => 'delete_doc', $key['Appointment']['id']
                            ),
                            array(
                            'class'    => 'tip',
                            'escape'   => false,
                            'confirm'  => 'Are you sure ?'
                            ));
                          ?>
                        </td>
											</tr>
										<?php endforeach; ?>
											</tbody>
											</table>
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
