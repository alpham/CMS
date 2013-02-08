

<div id="content" class="span11" style="min-height: 298px;">
			<div class="row-fluid sortable ui-sortable">
				<div class="box span12">
					<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon home"></i><span class="break"></span>Posts</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>

					<div class="box-content">
						<div class="btn-overlay"><a href="editor.php?action=new" class="btn btn-large btn-success"><i class="halflings-icon plus"></i> New Post</a></div>
						<table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
						  <thead>
							  <tr role="row">
							  	<th class="sorting_desc" role="columnheader" tabindex="0" aria-sort="descending" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 30px;" aria-label="id of the post">#id</th>
							  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 250px;" aria-label="Post: sub-table with information of the post">Post</th>
							  </tr>
						  </thead>   
						  
					  <tbody role="alert" aria-live="polite" aria-relevant="all">
					  	<?php
					  	require_once "include/post.php";
						require_once "include/user.php";
						$g=new general();
						$result=mysql_query("SELECT * FROM `cms`.`post` ORDER BY id DESC");
						$counter=1;
						while($row=mysql_fetch_array($result))
						{?>
					  	<tr class="">
								<td class=""><?php echo $row['id']?></td>
								<td style="padding: 0px;">
								<table class="table" style="margin: 0px;">
								<tr><td class="center " colspan="2"><b><?php echo $row['title']?></b>
									<span style="float:right">
										<a class="btn btn-success" href="#">
										<i class="halflings-icon zoom-in halflings-icon"></i>                                            
									</a>
									<a class="btn btn-info" href="editor.php?action=edit&id=<?php echo $row['id']; ?>">
										<i class="halflings-icon edit halflings-icon"></i>                                            
									</a>
									<a class="btn btn-danger" href="?action=remove&id=<?php echo $row['id']?>">
										<i class="halflings-icon trash halflings-icon"></i> 
									</a>
									</span>
								</td>
									<td class="center  sorting_1" style="width: 107px;" rowspan="3">
									<span class="<?php
									if ($row['state'] == "PUBLISHED") {
										echo "label label-success";
									} else if ($row['state'] == "UNPUBLISHED") {
										echo "label label-important";
									}
 ?>"><?php echo $row['state']; ?>
 </span>
								</td>
								</tr>
								<tr>
								<td class="center " style="width: 707px;font-size: 0.8em;color: rgb(114, 114, 114)" rowspan="2"><?php $g->convertPost($row['body']) ?></td>
								<td class="center " style="width: 70px;font-size: 0.8em;color: rgb(114, 114, 114)"><?php $u = new user();
									$r = $u -> getUserById($row['author_id']);
									echo $r['name'];
								 ?></td>
								
								</tr><tr>
								<td class="center " style="width: 70px;font-size: 0.8em;color: rgb(114, 114, 114)"><?php echo $row['state'] ?></td>
								</tr>
								</table></td>
								
						</tr><?php } ?>
					  </tbody>
					  </table>
					  
					  </div>            

				</div><!--/span-->
				