<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
            <?php echo (isset($message)) ? $message : 'No Data';?>
        </div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
	console.log('ready');
});
</script>