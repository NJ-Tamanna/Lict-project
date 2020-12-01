<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">






												<div class="table-responsive">
													<h2><?php echo __('Doctors List'); ?></h2>
													<table class="table table-bordred table-striped">
													<thead>
													<tr>
															<th><?php echo $this->Paginator->sort('name'); ?></th>
															<th><?php echo $this->Paginator->sort('cell'); ?></th>
															<th><?php echo $this->Paginator->sort('specialist'); ?></th>
															<th><?php echo $this->Paginator->sort('daysInWeek'); ?></th>
													</tr>
													</thead>
													<tbody>
													<?php foreach ($doctors as $doctor): ?>
													<tr>
														<td><?php echo h($doctor['Doctor']['name']); ?>&nbsp;</td>
														<td><?php echo h($doctor['Doctor']['cell']); ?>&nbsp;</td>
														<td><?php echo h($doctor['Doctor']['specialist']); ?>&nbsp;</td>
														<td><?php echo h($doctor['Doctor']['daysInWeek']); ?>&nbsp;</td>
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
