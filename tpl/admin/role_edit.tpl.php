<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加权限组信息<a href="<?php echo createUrl('admin','role_list');?>" class="sgbtn">返回权限列表</a></h3>
	<div class="mainbox">
	 <?php if(isset($errormsg) && !empty($errormsg)) {?>		<div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
			<?php } ?>
		<div id="custom">
			<form action="<?php echo createUrl("admin", "role_edit_post");?>" method="post">
			<table class="opt">
				<tbody>

                    
                     <tr>
						<th colspan="2">权限组名:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="name" value="<?php echo $row['name'];?>"></td>
						<td></td>
                    </tr>
 
                    <tr>
						<th colspan="2">权限:</th>
					</tr>
					<tr>
						<td>
							<?php if(!empty($role_model)) foreach($role_model as $role => $role_name) {
								$role_arr = explode(",",$row['action']);
								?>
							<input type="checkbox" <?php if(in_array($role, $role_arr)) echo "checked";?> name="role[]" value="<?php echo $role;?>" /> <?php echo $role_name;?>
							<?php }?>
						</td>
						<td></td>
                    </tr>
					
					
				</tbody>
			</table>
			<div class="opt">
			<input type="hidden" name="id"	value="<?php echo $row['id'];?>">
			<input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3">
			</div>
			</form>
		</div>
	</div>
</div>
<?php include ROOTDIR."/tpl/admin/footer.tpl.php";?>