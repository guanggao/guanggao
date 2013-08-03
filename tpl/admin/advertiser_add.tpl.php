<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加广告主信息<a href="<?php echo createUrl('admin','advertiser_list');?>" class="sgbtn">返回广告主列表</a></h3>
	<div class="mainbox">
	 <?php if(isset($errormsg) && !empty($errormsg)) {?>		<div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
			<?php } ?>
		<div id="custom">
			<form action="<?php echo createUrl("admin", "advertiser_add_post");?>" method="post">
			<table class="opt">
				<tbody>                    
                     <tr>
						<td>名称:</th>
						<td><input type="text" class="txt" name="name" value=""></td>
					</tr>                  
                     <tr>
						<td>网址:</th>
						<td><input type="text" class="txt" name="url" value=""></td>
					</tr>
					<tr>
						<td>联系人:</td>
						<td><input type="text" class="txt" name="linkman" value=""></td>
                    </tr> 
                    <tr>
						<td>联系方式:</td>
						<td><input type="text" class="txt" name="contact" value=""></td>
					</tr>
					<tr>
						<td>地址:</td>
						<td><input type="text" class="txt" name="address" value=""></td>
                    </tr>
					<tr>
						<td>简介:</td>
						<td><textarea name="info" rows="3" cols="60"></textarea></td>
                    </tr>
					
					
									</tbody>
			</table>
			<div class="opt">
			<input type="submit" name="submit" value=" 提 交 " class="btn" tabindex="3">
			</div>
			</form>
		</div>
	</div>
</div>
<?php include ROOTDIR."/tpl/admin/footer.tpl.php";?>