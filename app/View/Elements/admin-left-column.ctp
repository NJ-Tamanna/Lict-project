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
        <p><?php echo "Admin" //h($admin['Admin']['name']); ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- search form -->

<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>

<!-- Manage Dashboard-->
<li>
        <a href="<?php echo $this->Html->url(array('controller'=>'users','action' => 'admins'), true); ?>">
        <i class="fa fa-list-alt"></i> <span>My Info</span>
      </a>
</li>
<!--/Manage Dashboard-->
<?php
//pr($this->params);die;
$ctrl = strtolower($this->params['controller']);
$action = strtolower($this->params['action']);
?>

<!--Manage Admins-->
<li class="treeview <?php echo $ctrl=='users' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-users"></i> <span>Manage Admins</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='users' && $action=='admin_add'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'admins','action' => 'index'), true) ?>"><i
                    class="fa fa-user-plus"></i> List of Admins</a></li>
        <li class="<?php echo $ctrl=='users' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'admins','action' => 'add'), true) ?>"><i
                    class="fa fa-list"></i>Add Admin</a></li>
    </ul>
</li>
<!--/Manage Admins-->

<!--Manage Doctors-->
<li class="treeview <?php echo $ctrl=='users' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-users"></i> <span>Manage Doctors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='users' && $action=='admin_add'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'doctors','action' => 'index'), true) ?>"><i
                    class="fa fa-user-plus"></i> List of Doctors</a></li>
        <li class="<?php echo $ctrl=='users' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'doctors','action' => 'add'), true) ?>"><i
                    class="fa fa-list"></i>Add Doctor</a></li>
    </ul>
</li>
<!--/Manage Doctors-->
<!--Manage Patients-->
<li class="treeview <?php echo $ctrl=='users' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-users"></i> <span>Manage Patients</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='users' && $action=='admin_add'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'patients','action' => 'index'), true) ?>"><i
                    class="fa fa-user-plus"></i> List of Patients</a></li>
        <li class="<?php echo $ctrl=='users' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'patients','action' => 'add'), true) ?>"><i
                    class="fa fa-list"></i>Add Patient</a></li>
    </ul>
</li>
<!--/Manage Patients-->
<!--Manage Appointments-->
<li class="treeview <?php echo $ctrl=='users' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-calendar"></i> <span>Manage Appointments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='users' && $action=='admin_add'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'appointments','action' => 'index'), true) ?>"><i
                    class="fa fa-user-plus"></i> List of Appointments</a></li>
        <li class="<?php echo $ctrl=='users' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url(array('controller'=>'appointments','action' => 'add'), true) ?>"><i
                    class="fa fa-list"></i>Add Appointment</a></li>
    </ul>
</li>
<!--/Manage Appointments-->




</ul>
</section>
<!-- /.sidebar -->
</aside>
