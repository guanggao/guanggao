<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加广告活动信息<a href="<?php echo createUrl('admin','advcode_list');?>" class="sgbtn">返回广告活动列表</a></h3>
	<div class="mainbox">
	 <?php if(isset($errormsg) && !empty($errormsg)) {?>		<div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
			<?php } ?>
		<div id="custom">
			<form action="<?php echo createUrl("admin", "advcode_edit_post");?>" method="post">
			<table class="opt">
				<tbody>                    
                     <tr>
						<td>广告:</td>
						<td>
						<select name="advid">
							<option value="0">--请选择--</option>
							<?php foreach($adverts as $v){?>
							<option <?php if($row['advid'] == $v['id'])  echo "selected";?> value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
							<?php }?>
						</select>
						</td>
					</tr>                  
                     <tr>
						<td>名称:</td>
						<td><input type="text"  name="name" value="<?php echo $row['name'];?>"></td>
					</tr>
					<tr>
						<td>类型:</td>
						<td>
						<select name="type">						
						<?php if(!empty($advcode_types)) foreach($advcode_types as $k=>$v){?>
						<option <?php if($row['type'] == $k)  echo "selected";?> value="<?php echo $k; ?>"><?php echo $v; ?></option>
						<?php }?>
						</select>
						</td>
                    </tr>
					<tr>
						<td>尺寸:</td>
						<td><input type="text"  name="size" value="<?php echo $row['size'];?>"></td>
                    </tr>
					<tr>
						<td>内容:</td>
						<td><textarea name="content" rows="3" cols="60"><?php echo $row['content'];?></textarea>
						</td>
                    </tr>
					<tr>
						<td>状态</td>
						<td>待审: <input <?php if($row['status'] == 0) echo "checked";?> type="radio" name="status" value="0"/>
							通过: <input  <?php if($row['status'] == 1) echo "checked";?> type="radio" name="status" value="1"/>
							拒绝: <input  <?php if($row['status'] == -1) echo "checked";?> type="radio" name="status" value="-1"/>
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