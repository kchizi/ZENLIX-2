<?php

include "head.inc.php";


include "navbar.inc.php";




$rkeys = array_keys($_GET);


$hn = $rkeys[1];



?>
<div class="content-wrapper">
<section class="content">







<section class="invoice">
          <!-- title row -->
          <div class="row">



<div class="col-md-9">
<?php
if ($hn) {


if ($hn == "new_feed") {
  ?>
<?php if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) { ?> 
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=lang('PORTAL_new_msg');?></h3>
<div class="box-tools pull-right">
                    <h4> <i class="fa fa-leaf"></i></h4>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="">


 <form class="form-horizontal">
  <div class="form-group">
    
    <div class="col-sm-9">
      <input type="text" class="form-control" id="subj" placeholder="<?=lang('PORTAL_subj');?>" value="">
    </div>
        <div class="col-sm-3">
      
    </div>
        <div class="col-sm-12"><br>
      <input type="text" class="form-control" id="title" placeholder="<?=lang('PORTAL_t');?>" value="">
    </div>
  </div>

    <div class="form-group">
    
<div class="col-sm-12">
<div id="note"></div>
</div>
<div class="col-sm-12" >


</div>

<div class="col-sm-12" id="post_res">



</div>



<div class="col-sm-6 col-sm-offset-3">
<br>
<button class="btn btn-block btn-info" id="make_new_feed" ><?=lang('PORTAL_news_create');?></button>
<input type="hidden" value="<?php echo md5(time()); ?>" id="news_hash">
</div>

  </div>


  </form>



                </div><!-- /.footer -->
                </div>
                </div>

  <?php
}
}
else if ($hn != "new_feed") {



$news_item=get_version_info($hn);

if (isset($_GET['edit_feed'])) {
  ?>
  <?php if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) { ?> 
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=lang('PORTAL_new_msg');?></h3>
<div class="box-tools pull-right">
                    <h4> <i class="fa fa-leaf"></i></h4>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="">


 <form class="form-horizontal">
  <div class="form-group">
    
    <div class="col-sm-9">
      <input type="text" class="form-control" id="subj" placeholder="<?=lang('PORTAL_subj');?>" value="<?=$news_item['subj'];?>">
    </div>
        <div class="col-sm-3">
      
    </div>
        <div class="col-sm-12"><br>
      <input type="text" class="form-control" id="title" placeholder="<?=lang('PORTAL_t');?>" value="<?=$news_item['title'];?>">
    </div>
  </div>

    <div class="form-group">
    
<div class="col-sm-12">
<div id="note"><?=$news_item['msg'];?></div>
</div>
<div class="col-sm-12" >


</div>

<div class="col-sm-12" id="post_res">



</div>



<div class="col-sm-6 col-sm-offset-3">
<br>
<button class="btn btn-block btn-info" id="make_edit_version" ><?=lang('PORTAL_news_save');?></button>
<input type="hidden" value="<?=$news_item['uniq_id'];?>" id="news_hash">
</div>

  </div>


  </form>



                </div><!-- /.footer -->
                </div>
                </div>
  <?php
}
}

else if (!isset($_GET['edit_feed'])) {





?>
<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=$news_item['subj'];?></h3>
<div class="box-tools pull-right">
                    <h4> <i class="fa fa-leaf"></i></h4>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
<p class="text-muted"><?=$news_item['title'];?></p>

                <?=$news_item['msg'];?>
                </div>
                <div class="box-footer">
                <small class="text-muted">
                <time id="c" datetime="<?=$news_item['dt'];?>"></time>
                </small>
                <small class="text-muted pull-right">
                <?=nameshort(name_of_user_ret_nolink($news_item['author_id']));?>

<?php if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) { ?> 
                <div class="btn-group ">
<button class="btn btn-xs bg-maroon" id="delete_version" value="<?=$news_item['uniq_id'];?>"><?=lang('PORTAL_act_del');?></button> 
<a class="btn btn-xs bg-orange btn-flat" href="version?<?=$news_item['uniq_id'];?>&edit_feed"><?=lang('PORTAL_act_edit');?></a>
 </div>
<?php } ?>

                </small>
                </div>
                </div>










<?php
}
}
}
if (!$hn) {



?><?php if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) { ?> 
<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=lang('PORTAL_todo_1');?></h3>

                </div><!-- /.box-header -->
                <div class="box-body">

                  
<style type="text/css">



        

        pre, code {
            font-size: 12px;
        }

        pre {
            width: 100%;
            overflow: auto;
        }

        small {
            font-size: 90%;
        }

        small code {
            font-size: 11px;
        }

        .placeholder {
            outline: 1px dashed #4183C4;
            /*-webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            margin: -1px;*/
            height: 20px;
        }

        .mjs-nestedSortable-error {
            background: #fbe3e4;
            border-color: transparent;
        }

        ul {
            margin: 0;
            padding: 0;
            padding-left: 30px;
        }

        ul.sortable, ul.sortable ul {
            margin: 0 0 0 25px;
            padding: 0;
            list-style-type: none;
        }

        ul.sortable {
            margin: 4em 0;
        }

        .sortable li {
            margin: 5px 0 0 0;
            padding: 0;
        }

        .sortable li div  {
            /*
            border: 1px solid #d4d4d4;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            border-color: #D4D4D4 #D4D4D4 #BCBCBC;
            padding: 6px;
            margin: 0;
            cursor: move;
            background: #f6f6f6;
            background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #ededed 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed));
            background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            background: -o-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            background: -ms-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            background: linear-gradient(to bottom,  #ffffff 0%,#f6f6f6 47%,#ededed 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
            */
        }

        .sortable li.mjs-nestedSortable-branch div {
           /* background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #f0ece9 100%);
            background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#f0ece9 100%);
            */
            list-style-type: none;

        }

        .sortable li.mjs-nestedSortable-leaf div {


        }

        li.mjs-nestedSortable-collapsed.mjs-nestedSortable-hovering div {
            border-color: #999;
            background: #fafafa;
        }

        .disclose {
            cursor: pointer;
            width: 10px;
            display: none;
        }

        .sortable li.mjs-nestedSortable-collapsed > ul {
            display: none;
        }

        .sortable li.mjs-nestedSortable-branch > div > .disclose {
            display: inline-block;
        }

        .sortable li.mjs-nestedSortable-collapsed > div > .disclose > span:before {
            content: '+ ';
        }

        .sortable li.mjs-nestedSortable-expanded > div > .disclose > span:before {
            content: '- ';
        }

        

        p, ol, ul, pre, form {
            margin-top: 0;
            margin-bottom: 1em;
        }

        dl {
            margin: 0;
        }

        dd {
            margin: 0;
            padding: 0 0 0 1.5em;
        }

        code {
            background: #e5e5e5;
        }

        input {
            vertical-align: text-bottom;
        }

        .notice {
            color: #c33;
        }

    </style>



<div id="content_items"> 


<?php

showMenu_todo();
?>


</div>



                </div>
                <div class="box-footer clearfix no-border">
                                    <button id="add_todo_item" class="btn btn-default pull-right"><i class="fa fa-plus"></i> <?=lang('NOTES_create');?></button>
                         

 
</div>
</div>


 <?php

}
?>

<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=lang('PORTAL_todo_2');?></h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="">
                <?=get_main_todo();?>
                </div>
                </div>
                </div>


<div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"><?=lang('PORTAL_versions');?></h3>
<div class="box-tools pull-right">
                    <h4> <i class="fa fa-leaf"></i></h4>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="">


 <ul class="products-list product-list-in-box ">


<?php
$news_arr=get_version_array();

foreach ($news_arr as $n) {
  # code...

?>



                    <li class="item">
                      
                      <div class="product-info" style="margin-left:0px;">
                        <a href="version?<?=$n['uniq_id'];?>" class="product-title"><h4><?=$n['subj'];?></h4> </a>
                        <span class="product-description">
                          <?=$n['title'];?>
                        </span>
                        <small class="text-muted pull-right">

<i class="fa fa-clock-o"></i> <time id="c" datetime="<?=$n['dt'];?>"></time>
                        </small>
                      </div>
                    </li><!-- /.item -->


<?php 

}
?>





                                        
                    
                  </ul>



                </div><!-- /.footer -->
                </div>
                </div>



<?php
}
?>



</div>



<div class="col-md-3">

<?php if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) { ?> 
<div class="box">
                <div class="box-header">
                  <h3 class="box-title"><?=lang('PORTAL_admin_menu');?></h3>
                </div>
                <div class="box-body">
                  <a href="version?new_feed" class="btn btn-default btn-block"><?=lang('PORTAL_news_create');?></a>
                </div>
              </div>
<?php } ?>


<?=view_release_bar();?>






<?=view_stat_cat();?>







</div>


          </div>
          <!-- info row -->
          
        </section>




</section>
</div>


<?php
include "footer.inc.php";
?>