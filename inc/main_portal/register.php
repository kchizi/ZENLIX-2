

<?php

include "head.inc.php";


include "navbar.inc.php";


?>
<div class="content-wrapper">
<section class="content">





<section class="invoice">
          <!-- title row -->
          <div class="row">



<div class="col-md-12">
<div class="box box-default">
                <div class="box-header with-border">
                  <center><h3 class="box-title"><?=lang('PORTAL_reg_user');?></h3></center>
<div class="box-tools pull-right">
                   
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
<center><img src="<?=get_logo_img(); ?>" width="128"></center><br><hr>
</div>
<form class="form-horizontal" id="main_form_register">


<div class="col-sm-6 col-sm-offset-3">
 <input id="login_fio" class="form-control input-lg" type="text" placeholder="<?=lang('PORTAL_fio');?>"><br>
</div>

<div class="col-sm-6 col-sm-offset-3">
 <input id="login_name" class="form-control input-lg" type="text" placeholder="<?=lang('PORTAL_login_name');?>"><br>
</div>

<div class="col-sm-6 col-sm-offset-3">
 <input id="login_mail" class="form-control input-lg" type="text" placeholder="<?=lang('PORTAL_email');?>"><br>
</div>

<div class="col-sm-6 col-sm-offset-3">
  <button class="btn btn-block btn-success btn-lg" id="register_new"><?=lang('PORTAL_reg');?> </button>
</div>

<div class="col-sm-12" id="error_result">

</div>

</form>

                </div><!-- /.footer -->
                </div>
                </div>

</div>






          </div>
          <!-- info row -->
          
        </section>




</section>
</div>


<?php
include "footer.inc.php";
?>