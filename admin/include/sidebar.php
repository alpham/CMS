<?php if(isset($page))
{
	?>
<!-- start: Header -->

<!-- start: Header -->

<!-- start: Main Menu -->
<div id="sidebar-left" class="span1">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li <?php
			if ($page == "dashboard") {echo "class=\"active\"";
			}
 ?>>
				<a href="index.php"><i class="fa-icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a>
			</li>
			<li <?php
				if ($page == "posts") {echo "class=\"active\"";
				}
 ?>>
				<a href="posts.php"><i class="fa-icon-file"></i><span class="hidden-tablet"> Posts</span></a>
			</li>
			<!-- <li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="messages.html"><i class="fa-icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="tasks.html"><i class="fa-icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="ui.html"><i class="fa-icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="widgets.html"><i class="fa-icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>>
			<a class="dropmenu" href="#"><i class="fa-icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span></a>
			<ul>
			<li><a class="submenu" href="submenu.html"><i class="fa-icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
			<li><a class="submenu" href="submenu.html"><i class="fa-icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
			<li><a class="submenu" href="submenu.html"><i class="fa-icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
			</ul>
			</li> -->
			<li <?php
				if ($page == "editor") {echo "class=\"active\"";
				}
 ?>>
				<a href="editor.php"><i class="fa-icon-edit"></i><span class="hidden-tablet"> Forms</span></a>
			</li>
			<li <?php
				if ($page == "users") {echo "class=\"active\"";
				}
 ?>>
				<a href="users.php"><i class="fa-icon-user"></i><span class="hidden-tablet"> Users</span></a>
			</li>
			<!-- <li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="typography.html"><i class="fa-icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="gallery.html"><i class="fa-icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="table.html"><i class="fa-icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="calendar.html"><i class="fa-icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="file-manager.html"><i class="fa-icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="icon.html"><i class="fa-icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
			<li <?php if($page=="dashboard"){echo "class=\"active\"";} ?>><a href="login.php"><i class="fa-icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
			</ul>-->
	</div>
</div>
<!-- end: Main Menu -->

<noscript>
	&lt;div class="alert alert-block span11"&gt;
	&lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
	&lt;p&gt;You need to have &lt;a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank"&gt;JavaScript&lt;/a&gt; enabled to use this site.&lt;/p&gt;
	&lt;/div&gt;
</noscript>

<!-- start: Content -->
<!--/#content.span10-->

<?php } ?>
