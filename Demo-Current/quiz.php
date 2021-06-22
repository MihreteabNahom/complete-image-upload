<?php
if (isset($_GET['pp'])) {
	# code...
	$Prob= $_GET['pp'];
	if ($Prob >= 15) {
		# code...
		?>
		<script type="text/javascript">
			alert("Please Focus Your Face to the WebCame !!!");
		</script>
		<?php
	}
}
?>