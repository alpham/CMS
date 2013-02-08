<?php
require_once "include/post.php";
$post = new Post();
$edit = "";
if (isset($_GET['action'])) {
	switch ($_GET['action']) {
		case 'edit' :
			$edit = $post -> selectPost($_GET['id']);

			break;

		default :
			break;
	}
}
?>

<div id="content" class="span11" style="min-height: 298px;">
	<div class="row-fluid sortable ui-sortable">
		<div class="box span12">
			<div class="box-header" data-original-title="">
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<form action="posts.php?action=<?php
				if (isset($_GET['action'])) { echo $_GET['action'];
				}
			?>" method="post" class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="typeahead">Title </label>
							<div class="controls">
								<input type="text" placeholder="Type something…" name="title" class="span6 typeahead" value="<?php
								if (isset($edit['title'])) {echo $edit['title'];
								}
 ?>" />
								<input name="id" type="hidden" value="<?php
									if (isset($_GET['id'])) { echo $_GET['id'];
									}
								?>" />
							</div>
						</div>
						<?php /*<div class="control-group">
							 <label class="control-label" for="date01">Date input</label>
							 <div class="controls">
							 <input type="text" class="input-xlarge datepicker hasDatepicker" id="date01" value="02/16/12">
							 </div>
							 </div>

							 <div class="control-group">
							 <label class="control-label" for="fileInput">File input</label>
							 <div class="controls">
							 <div class="uploader" id="uniform-fileInput"><input class="input-file uniform_on" id="fileInput" type="file" size="19" style="opacity: 0;"><span class="filename">No file selected</span><span class="action">Choose File</span></div>
							 </div>
							 </div>*/
						?>
						<div class="control-group hidden-phone">
							<label class="control-label" for="textarea2">Body</label>
							<div class="controls">
								<div class="cleditorMain" style="width: 500px; height: 250px;">
									<textarea name="body" class="cleditor" id="textarea2" rows="3" style="display: none; width: 500px; height: 197px;"><?php
									if (isset($edit['body'])) {echo $edit['body'];
									}
 ?></textarea>									<iframe frameborder="0" src="javascript:true;" style="width: 500px; height: 197px;"></iframe>
								</div>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="typeahead">State </label>
							<div class="controls">
								<select name="state" id="selectError3">
									<option value="PUBLISHED" class="btn-success" <?php
									if (isset($edit['state']) && $edit['state'] == 'PUBLISHED') {echo "selected=\"selected\"";
									}
								?>>PUBLISHED</option>
									<option value="UNPUBLISHED" class="btn-warning" <?php
										if (isset($edit['state']) && $edit['state'] == 'UNPUBLISHED') {echo "selected=\"selected\"";
										}
									?>>UNPUBLISHED</option>
								</select>
							</div>
						</div>

						<div class="form-actions">
							<div class="btn-overlay">
								<button type="submit" class="btn btn-primary">
									<span>Save changes</span>
								</button>
							</div>
							<div class="btn-overlay">
								<div class="btn-overlay" style="margin:5px;">
									<a href="index.php?action=cancel" class="btn btn-danger" ><span>Cancel</span></a>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div><!--/span-->

	</div>
