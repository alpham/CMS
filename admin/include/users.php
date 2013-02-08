


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
							  	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 255px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
						  </thead>   
						  
					  <tbody role="alert" aria-live="polite" aria-relevant="all">

<?php
require_once "include/user.php";
require_once "include/general.php";
$user=new user();
//$con=mysql_connect("localhost","root","root") or die(mysql_error());
$result=$user->getAll();
$counter=1;
while($row=mysql_fetch_array($result))
{?>
<tr class="<?php if($counter%2==1){
	echo "odd";
}
else {
	echo "even"; 
}
$counter++;?>">
		<td class=""><?php echo $row['id']?></td>
		<td style="padding: 0px;">
		<table class="table" style="margin: 0px;">
		<tr><snap style="display: none"><?php echo $row['id']?></snap><td class="center " colspan="2"><b><?php echo $row['name']?></b></td>
			<td class="center  sorting_1" style="width: 107px;" rowspan="2">
				<span class="<?php if($row['state']=="ACTIVATED"){
				echo "label label-success";}
			else if($row['state']=="DEACTIVATED") {
				echo "label label-important";
				}
			else if($row['state']=="PENDING") {
				echo "label label-warning";
				}
			 ?>"><?php echo $row['state']; ?></span>
		</td>
		</tr>
		<tr>
			<td class="center " style="width: 707px;font-size: 0.8em;color: rgb(114, 114, 114)"><?php echo $row['real_name']; ?></td>
			<td class="center " style="width: 707px;font-size: 0.8em;color: rgb(114, 114, 114)"><?php echo $row['email']; ?></td>
		
		</tr>
		</table></td>
			<td class="center ">
				<a class="btn btn-success" href="#">
					<i class="halflings-icon zoom-in halflings-icon"></i>                                            
				</a>
				<a class="btn btn-info" href="user.php?action=edit&id=<?php echo $row['id'];?>">
					<i class="halflings-icon edit halflings-icon"></i>                                            
				</a>
				<a class="btn btn-danger" href="?action=remove&id=<?php echo $row['id']?>">
					<i class="halflings-icon trash halflings-icon"></i> 
				</a>
					</td>
	</tr><?php } ?>


</tbody>
					  </table>
					  
					  </div>            

				</div><!--/span-->
				