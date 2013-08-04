<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加广告主信息<a href="<?php echo createUrl('admin','advertiser_list');?>" class="sgbtn">返回广告主列表</a></h3>
	<div class="mainbox">
	 <?php if(isset($errormsg) && !empty($errormsg)) {?>		<div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
			<?php } ?>
		<div id="custom">
			<form action="<?php echo createUrl("admin", "advertiser_edit_post");?>" method="post">
			<table class="opt">
				<tbody>                    
                     <tr>
						<td>名称:</th>
						<td><input type="text" class="txt" name="name" value="<?php echo $row['name'];?>"/></td>
					</tr>                  
                     <tr>
						<td>网址:</th>
						<td><input type="text" class="txt" name="url" value="<?php echo $row['url'];?>"></td>
					</tr>
					<tr>
						<td>联系人:</td>
						<td><input type="text" class="txt" name="linkman" value="<?php echo $row['linkman'];?>"></td>
                    </tr> 
                    <tr>
						<td>联系方式:</td>
						<td><input type="text" class="txt" name="contact" value="<?php echo $row['contact'];?>"></td>
					</tr>
					<tr>
						<td>地址:</td>
						<td><input type="text" class="txt" name="address" value="<?php echo $row['address'];?>"></td>
                    </tr>
					<tr>
						<td>简介:</td>
						<td><textarea name="info" rows="3" cols="60"><?php echo $row['info'];?></textarea></td>
                    </tr>
                    </tr>
					<tr>
						<td>状态</td>
						<td>待审: <input <?php if($row['status'] == 0) echo "checked";?> type="radio" name="status" value="0"/>
							通过: <input  <?php if($row['status'] == 1) echo "checked";?> type="radio" name="status" value="1"/>
							拒绝: <input  <?php if($row['status'] == －1) echo "checked";?> type="radio" name="status" value="－1"/>
						</td>
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