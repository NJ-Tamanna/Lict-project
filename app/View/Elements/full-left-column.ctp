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
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
              </span>
    </div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header">MAIN NAVIGATION</li>

<!-- Manage Dashboard-->
<li>
    <a href="<?php echo $this->Html->url("/dashboard", true) ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
</li>
<!--/Manage Dashboard-->
<?php
//pr($this->params);die;
$ctrl = strtolower($this->params['controller']);
$action = strtolower($this->params['action']);
?>

<!--Manage Users-->
<li class="treeview <?php echo $ctrl=='users' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-users"></i> <span>Manage Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='users' && $action=='admin_add'? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/users/add", true) ?>"><i
                    class="fa fa-user-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='users' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/users/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>
<!--/Manage Users-->


<!-- Manage Lectures   -->
<li class="treeview <?php echo $ctrl=='lectures' ? 'active menu-open' : ''?> ">
    <a href="#">
        <i class="fa  fa-file"></i> <span>Manage Lectures</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='lectures'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/lectures/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='lectures' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/lectures/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>
<!-- /Manages Lectures-->


<!-- Manage Question   -->
<li class="treeview <?php echo $ctrl=='questions' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-question-circle"></i> <span>Manage Question</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='questions' && $action=='admin_add'? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/questions/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='questions' && $action=='admin_index'? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/questions/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>
<!--/Manages Question-->

<!--Manages Subjects    -->
<li class="treeview <?php echo $ctrl=='subjects' ? 'active menu-open' : ''?> ">
    <a href="#">
        <i class="fa fa-book" aria-hidden="true"></i> <span>Manage Subjects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='subjects'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/subjects/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='subjects'&& $action=='admin_index' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/subjects/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>
<!--/Manages Subjects    -->
<!--Manages Result   -->
<li class=" treeview <?php echo $ctrl=='results' ? 'active menu-open' : ''?> ">
    <a href="#">
        <i class="fa fa-list-alt"></i> <span>Manage Result</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='results'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/results/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='results'&& $action=='admin_index' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/results/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>
<!--/Manages Result    -->

<!-- Manages Test    -->
<li class=" treeview <?php echo $ctrl=='tests' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-question-circle"></i> <span>Manage Tests</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='tests'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/tests/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='tests'&& $action=='admin_index' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/tests/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>

<!--/Manages Test    -->


<!-- Manages Notices    -->
<li class=" treeview <?php echo $ctrl=='notices' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-info"></i> <span>Manage Notices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='notices'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/notices/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='notices'&& $action=='admin_index' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/notices/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>

<!--/Manages Tests Question    -->


<li class=" treeview <?php echo $ctrl=='testsquestions' ? 'active menu-open' : ''?>">
    <a href="#">
        <i class="fa fa-question-circle"></i> <span>Manage TestsQuestion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='testsquestions'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/testsquestions/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='testsquestions'&& $action=='admin_index' ? 'active' : ''?>""><a href="<?php echo $this->Html->url("/admin/testsquestions/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>

<!--/Manages Tests Question    -->


<!--Manages Usersanswer    -->


<!--<li class="treeview <?php /*echo $ctrl=='usersanswers' ? 'active menu-open' : ''*/?>">
    <a href="#">
        <i class="fa fa-pencil-square-o"></i> <span>Manage Usersanswer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php /*echo $ctrl=='usersanswer'&& $action=='admin_add' ? 'active' : ''*/?>""><a href="<?php /*echo $this->Html->url("/admin/Usersanswers/add", true) */?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php /*echo $ctrl=='usersanswer'&& $action=='admin_index' ? 'active' : ''*/?>""><a href="<?php /*echo $this->Html->url("/admin/Usersanswers/index", true) */?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>-->

<!--/Manages Usersanswer    -->

<!--Manages Emails    -->
<li class="treeview <?php echo $ctrl=='emails' ? 'active menu-open' : ''?>" >
    <a href="#">
        <i class="fa fa-envelope"></i> <span>Manage Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='emails'&& $action=='admin_add' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/emails/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='emails'&& $action=='admin_index' ? 'active' : ''?>"><a href="<?php echo $this->Html->url("/admin/emails/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>

<!--/Manages Emails    -->

<!--Manages Group   -->
<li class=" treeview <?php echo $ctrl=='groups' ? 'active menu-open' : ''?>" >
    <a href="#">
        <i class="fa fa-question-circle"></i> <span>Manage Group</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="<?php echo $ctrl=='groups'&& $action=='admin_add' ? 'active' : ''?>""><a href="<?php echo $this->Html->url("/admin/groups/add", true) ?>"><i
                    class="fa fa-plus"></i> Add New</a></li>
        <li class="<?php echo $ctrl=='groups'&& $action=='admin_index' ? 'active' : ''?>""><a href="<?php echo $this->Html->url("/admin/groups/index", true) ?>"><i
                    class="fa fa-list"></i>List</a></li>
    </ul>
</li>

<!--/Manages Group    -->







<li>
    <a href="pages/calendar.html">
        <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
    </a>
</li>
<li>
    <a href="pages/mailbox/mailbox.html">
        <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
    </a>
</li>



</ul>
</section>
<!-- /.sidebar -->
</aside>