<?php
$page = "dashboard";
require_once "include/admin-header.php";
require_once "include/navbar.php";
?>
<div class="container-fluid">
	<div class="row-fluid">
		<?php
		require_once "include/sidebar.php";
		require_once "include/posts.php";
	?>
	</div>
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				×
			</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>
				Here settings can be configured...
			</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
</div>
<div class="clearfix"></div>
