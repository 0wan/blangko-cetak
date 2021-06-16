<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * app.php
 *
 * Date         : 16/06/2021
 * Author       : Wawan Setyawan
 * Email        : wawans.setyawan@gmail.com
 * Description  :
 *
 *
 */
?>
	<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize/modern-normalize.min.css" crossorigin="anonymous">

		<title><?php echo ((isset($title) && $title && is_string($title)) ? ($title . ' - ') : ''); ?></title>

		<!-- Optional : jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	</head>
	<body>
	<?php if (isset($page) && isset($content)) {
		$this->load->view($page,$content);
	} elseif (isset($page)) {
		$this->load->view($page);
	} ?>
	</body>
	</html>
<?php
/* End of file app.php */
