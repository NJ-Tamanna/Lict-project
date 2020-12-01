<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">






											<div class="table-responsive">
												<h2><?php echo __('Patients List'); ?></h2>
												<table class="table table-bordred table-striped">
												<thead>
												<tr>
														<th><?php echo $this->Paginator->sort('name'); ?></th>
														<th><?php echo $this->Paginator->sort('email'); ?></th>
														<th><?php echo $this->Paginator->sort('cell'); ?></th>
														<th><?php echo $this->Paginator->sort('address'); ?></th>
														<th><?php echo $this->Paginator->sort('age'); ?></th>
														<th><?php echo $this->Paginator->sort('sex'); ?></th>
														<th><?php echo $this->Paginator->sort('created'); ?></th>
														<th ></th>
												</tr>
												</thead>
												<tbody>
												<?php foreach ($patients as $patient): ?>
												<tr>
													<td><?php echo h($patient['Patient']['name']); ?>&nbsp;</td>
													<td><?php echo h($patient['Patient']['email']); ?>&nbsp;</td>
													<td><?php echo h($patient['Patient']['cell']); ?>&nbsp;</td>
													<td><?php echo h($patient['Patient']['address']); ?>&nbsp;</td>
													<td><?php echo h($patient['Patient']['age']); ?>&nbsp;</td>
													<td><?php echo h($patient['Patient']['sex']); ?>&nbsp;</td>
                          <td><?php
                              $a = $patient['Patient']['created'];
                              $b = explode(" ",$a);
                              echo h($b[0]);

                          ?>&nbsp;</td>
                          <td class="actions">
                            <a href="<?php echo $this->Html->url(array('controller' => 'patients', 'action' => 'view',$patient['Patient']['id']), true);?>" data-original-title="view this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-info-sign"></i></a>
                            <a href="<?php echo $this->Html->url(array('controller' => 'patients', 'action' => 'edit',$patient['Patient']['id']), true);?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <?php
                            echo $this->Form->postLink(
                            '<button class="btn btn-sm btn-danger" data-original-title="Remove this user" data-toggle="tooltip">
                            <i class="glyphicon glyphicon-remove"></i>
                            </button>',
                            array(
                            'action'   => 'delete', $patient['Patient']['id']
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
												<p>
												<?php
												echo $this->Paginator->counter(array(
													'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
												));
												?>	</p>
												<div class="paging">
												<?php
													echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
													echo $this->Paginator->numbers(array('separator' => ''));
													echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
												?>
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
