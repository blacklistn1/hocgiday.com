<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('client/modules/head', $this->data) ?>
</head>
<body ontouchstart="">
	<?php $this->load->view('client/modules/header', $this->data) ?>

	<?php $this->load->view('client/body/'.$view_body, $this->data) ?>

<?php $this->load->view('client/modules/footer', $this->data) ?>
</body>
</html>