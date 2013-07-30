<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
	<h3 class="marginbot">权限列表 <a href="<?php echo createUrl('admin','role_add');?>" class="sgbtn">添加权限组</a></h3>
	<div class="mainbox">
	    <?php if(isset($errormsg) && !empty($errormsg)) {?>		
		    <div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
		<?php } ?>	
		<?php if(isset($correctmsg) && !empty($correctmsg)) {?>		
			<div class="correctmsg">
				<p><em><?php echo $correctmsg;?></em></p>
			</div>
		<?php } ?>		
		<form action="" method="post">
				<table class="datalist"  onmouseover="addMouseEvent(this);">
					<tr>
						 	<td>ID</td>
												<th>权限组名</th>
												<th>权限</th>
												<td>操作</td>
					</tr>
					<?php if(!empty($rows)) foreach($rows as $k => $row) {?>					
					<tr>
						 						<td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['name'];?></td>               
                                                <td><?php
                                                $role_arr = explode(",",$row['action']);
                                                
                                                foreach($role_arr as $k => $role) {?>
                                                	<?php echo $role_model[$role];?>.
                                                <?php } ?>
                                                </td>
                                               
                        						<td><a href="<?php echo createUrl('admin','role_edit',array(),array('id'=>$row['id']));?>">编辑</a></td>
					</tr>
					<?php } ?>					<tr class="nobg">
						<td></td>
						<td class="tdpage"></td>
					</tr>		
				</table>
				<p class="page_list"></p>
		</form>
	</div>
</div>


<?php include ROOTDIR."/tpl/admin/footer.tpl.php";?>