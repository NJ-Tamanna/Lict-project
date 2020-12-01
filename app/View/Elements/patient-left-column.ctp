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
        <p><?php echo "Patient"; ?></p>
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
        <a href="<?php echo $this->Html->url(array('controller'=>'users','action' => 'patients'), true); ?>">
        <i class="fa fa-list-alt"></i> <span>My Details</span>
      </a>
</li>
<!--/Manage Dashboard-->
<!-- Manage Dashboard-->
<li>
        <a href="<?php echo $this->Html->url(array('controller'=>'doctors','action' => 'list_doc'), true); ?>">
        <i class="fa fa-users"></i><i class="fa fa-users"></i> <span>List of Doctors</span>
      </a>
</li>
<!--/Manage Dashboard-->
<!-- Manage Dashboard-->
<li>
        <a href="<?php echo $this->Html->url(array('controller'=>'appointments','action' => 'patients_add'), true); ?>">
        <i class="fa fa-calendar"></i> <span>New Apppointment</span>
      </a>
</li>
<!--/Manage Dashboard-->




</ul>
</section>
<!-- /.sidebar -->
</aside>
