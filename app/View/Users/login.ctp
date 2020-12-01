

<div class="login-box">
  <div class="login-logo">
    <b>Login For Dashboard</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Form->create('User');?>
    <?php echo $this->Session->flash(); ?>
      <div class="form-group has-feedback">
        <?php //echo $this->Form->input('email',array('type'=>'email','class'=>'form-control','placeholder'=>'email')); ?>
        <input type="email" class="form-control" placeholder="Email" name="data[User][email]">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <?php //echo $this->Form->input('password',array('type'=>'password','class'=>'form-control','placeholder'=>'Password jloj')); ?>
        <input type="password" class="form-control" placeholder="Password" name="data[User][password]">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-8">
        <a type="button" href="<?php echo $this->Html->url(array('controller'=>'patients','action' => 'new_registration'), true) ?>"  target="_self" class="btn btn-primary btn-block btn-flat">Register</a>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      <div style="font-size: 18px; color: #f70606">
      </div>
    </form>
    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
