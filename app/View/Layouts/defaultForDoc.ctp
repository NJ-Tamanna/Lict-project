<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css([
            'bootstrap.min',
            'admin/_all-skins.min',
            'admin/AdminLTE.min',
            'admin/bootstrap3-wysihtml5.min',
            'admin/bootstrap-datepicker.min',
            'admin/daterangepicker',
            'admin/jquery-jvectormap',
            'admin/font-awesome.min',
            'admin/ionicons.min',
            'admin/jquery-jvectormap',
            'admin/icheck/all',
    ]);
    echo $this->Html->script([
            'jquery.min',
            'admin/jquery-ui.min',
//            'admin/jquery.min',
            'admin/bootstrap.min',
            'admin/raphael.min',
            'admin/morris.min.js',
            'admin/jquery.sparkline.min',
            'admin/jquery-jvectormap-1.2.2.min',
            'admin/jquery-jvectormap-world-mill-en',
            'admin/jquery.knob.min',
            'admin/moment.min',
            'admin/daterangepicker',
            'admin/bootstrap-datepicker.min',
            'admin/bootstrap3-wysihtml5.all.min',
            'admin/jquery.slimscroll.min',
            'admin/fastclick',
            'admin/adminlte.min',
            'admin/dashboard',
            'admin/demo',
            'admin/icheck.min',
            'admin/custom'

    ]);

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script src="http://cdn.ckeditor.com/4.6.0/full/ckeditor.js"></script>
    <script>
        var ROOT = '<?php echo $this->Html->url('/', true); ?>';
        var HERE = '<?php echo $this->here; ?>';
        /*$(function() {
            CKEDITOR.replace( 'editor');
            CKEDITOR.replace( 'editor1');


            CKEDITOR.replace( 'option-1');
            CKEDITOR.replace( 'option-2');
            CKEDITOR.replace( 'option-3');
            CKEDITOR.replace( 'option-4');
            CKEDITOR.replace( 'option-5');
        });*/
    </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">

<!--Header-->
     <?php echo $this->element('admin-header');?>
<!--/Header-->
<!-- Left side column. contains the logo and sidebar -->
     <?php echo $this->element('doctor-left-column');?>
<!-- /Left side column. contains the logo and sidebar -->


<div id="content">

    <?php //echo $this->Session->flash(); ?>

    <?php echo $this->fetch('content'); ?>

</div>
<!--Footer-->
    <?php echo $this->element('admin-footer'); ?>
<!--/Footer-pt>
</body>
</html>
