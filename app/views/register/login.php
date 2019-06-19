<?php $this->setSiteTitle('login'); ?>

<?php  $this->start('head');?>
<meta content='test' />
<?php  $this->end();?>

<?php  $this->start('body');?>


<div class="col-md-6 offset-md-3 mt-5 well">
  <form class="form" action="<?=PROOT?>register/login" method="post">
    <h3 class="text-center">log in</h3>
    <div class="form-group">
     <label for="username">Username</label>
     <input type="text" class="form-control"  name="username" id="username">   
    </div>
    <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control"  name="password" id="password">   
    </div>
    <div class="form-group">
     <input type="submit" class="btn btn-larg btn-primary"  value="login">   
    </div>
     <div class="text-right"><a href="<?=PROOT?>register/register" class="text-primary">register</a></div>
  </form>
</div>



<?php  $this->end();?>
