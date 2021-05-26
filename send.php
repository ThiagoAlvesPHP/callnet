<?php
require 'dados.php';
$number = preg_replace("/[^0-9]/", "", $config['phone1']);
if (!empty($_GET['comentario'])) {
	$msg  = $_GET['comentario'];
	$url = "https://api.whatsapp.com/send?phone=55{$number}&text=".$msg;
	//http_build_query
	?>
	<script>
		window.location.href = "<?=$url; ?>";
	</script>
	<?php
}