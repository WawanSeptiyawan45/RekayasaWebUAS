<?php
// Proteksi halaman
$this->simple_login->cek_login();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title ?></title>
<link href="<?php echo base_url() ?>assets/images/logo-javawebmedia.png" rel="shortcut icon">
<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">

</head>

<body>
<section class="container">