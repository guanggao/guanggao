<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加广告活动信息<a href="<?php echo createUrl('admin','adscode_list');?>" class="sgbtn">返回广告列表</a></h3>
	<div class="mainbox">
	 <?php if(isset($errormsg) && !empty($errormsg)) {?>		<div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
			<?php } ?>
		<div id="custom">
			<form action="<?php echo createUrl("admin", "advert_add_post");?>" method="post">
			<table class="opt">
				<tbody>                    
                     <tr>
						<td>广告:</td>
						<td>
						<select name="advid">
							<option value="0">--请选择--</option>
							<?php foreach($adverts as $v){?>
							<option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
							<?php }?>
						</select>
						</td>
					</tr>                  
                     <tr>
						<td>名称:</td>
						<td><input type="text"  name="name" value=""></td>
					</tr>
					<tr>
						<td>类型:</td>
						<td>
						<select name="type">						
						<?php if(!empty($ads_code_types) foreach($ads_code_types as $k=>$v){?>
						<option value="<?php echo $k; ?>"><?php echo $v; ?></option>
						<?php }?>
						</select>
						</td>
                    </tr>
					<tr>
						<td>尺寸:</td>
						<td><input type="text"  name="size" value=""></td>
                    </tr>
					<tr>
						<td>内容:</td>
						<td><textarea name="content" rows="3" cols="60"></textarea>
						</td>
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