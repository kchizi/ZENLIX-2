<!DOCTYPE html>
<html lang="ru" class="c">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <title><?php echo $CONF['title_header']; ?></title>


</head>
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/js/bootstrap/css/bootstrap.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/jquery-ui.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/ionicons.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/style.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/font-awesome/css/font-awesome.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/chosen.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet"type="text/css" media="print" href="<?php echo $CONF['hostname'] ?>/css/print.css?<?=get_conf_param('version');?>"><link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/summernote-bs3.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/summernote.css?v2.5">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/inc/main_portal/css/AdminLTE.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/inc/main_portal/css/skins/_all-skins.min.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/css/dropzone.css?<?=get_conf_param('version');?>">
<link rel="stylesheet" href="<?php echo $CONF['hostname'] ?>/js/bootstrap3-editable/css/bootstrap-editable.css?<?=get_conf_param('version');?>">
<style type="text/css">
 

.input-longtext{
   width: 400 px;
}

  /*!
 * iCheck v1.0.1, http://git.io/arlzeA
 * =================================
 * Powerful jQuery and Zepto plugin for checkboxes and radio buttons customization
 *
 * (c) 2013 Damir Sultanov, http://fronteed.com
 * MIT Licensed
 */
/* iCheck plugin Minimal skin, black
----------------------------------- */
.icheckbox_minimal,
.iradio_minimal {
  display: inline-block;
  *display: inline;
  vertical-align: middle;
  margin: 0;
  padding: 0;
  width: 18px;
  height: 18px;
  background: rgba(255, 255, 255, 0.7) url(css/iCheck/minimal/minimal.png) no-repeat;
  border: none;
  cursor: pointer;
}
.icheckbox_minimal {
  background-position: 0 0;
}
.icheckbox_minimal.hover {
  background-position: -20px 0;
}
.icheckbox_minimal.checked {
  background-position: -40px 0;
}
.icheckbox_minimal.disabled {
  background-position: -60px 0;
  cursor: default;
}
.icheckbox_minimal.checked.disabled {
  background-position: -80px 0;
}
.iradio_minimal {
  background-position: -100px 0;
}
.iradio_minimal.hover {
  background-position: -120px 0;
}
.iradio_minimal.checked {
  background-position: -140px 0;
}
.iradio_minimal.disabled {
  background-position: -160px 0;
  cursor: default;
}
.iradio_minimal.checked.disabled {
  background-position: -180px 0;
}
/* Retina support */
@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-moz-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5) {
  .icheckbox_minimal,
  .iradio_minimal {
    background-image: url('iCheck/minimal/minimal@2x.png');
    -webkit-background-size: 200px 20px;
    background-size: 200px 20px;
  }
}



.pace .pace-progress {
  background: #00c0ef;
  position: fixed;
  z-index: 2000;
  top: 0;
  left: 0;
  height: 2px;
  -webkit-transition: width 1s;
  -moz-transition: width 1s;
  -o-transition: width 1s;
  transition: width 1s;
}
.pace-inactive {
  display: none;
}
</style>

<body class="skin-black">
<div class="wrapper">