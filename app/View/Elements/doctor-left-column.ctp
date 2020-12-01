<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
        <?php echo $this->Html->image('user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
    </div>
    <div class="pull-left info">
        <p><?php echo "Doctor"//h($key['Doctor']['name']); ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- search form -->

<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>

<!-- Manage Appointments-->
<li>
        <a href="<?php echo $this->Html->url(array('controller'=>'users','action' => 'doctors'), true); ?>">
        <i class="fa fa-calendar"></i> <span>My Appointments</span>
      </a>
</li>
<!--/Manage Dashboard-->
<!-- Manage Dashboard-->
<li>
        <a href="<?php echo $this->Html->url(array('controller'=>'patients','action' => 'doctors_add'), true); ?>">
        <i class="fa fa-list-alt"></i><i class="fa fa-users"></i> <span>New Patients Appointment</span>
      </a>
</li>
<!--/Manage Dashboard-->
<!-- Manage Dashboard-->
<li>
        <a href="<?php echo $this->Html->url(array('controller'=>'Appointments','action' => 'doctors_add'), true); ?>">
        <i class="fa fa-calendar"></i> <span>New Apppointment</span>
      </a>
</li>
<!--/Manage Dashboard-->




</ul>
</section>
<!-- /.sidebar -->
</aside>
