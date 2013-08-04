<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加广告信息<a href="<?php echo createUrl('admin','advert_list');?>" class="sgbtn">返回广告列表</a></h3>
	<div class="mainbox">
	 <?php if(isset($errormsg) && !empty($errormsg)) {?>		<div class="errormsg">
				<p><em><?php echo $errormsg;?></em></p>
			</div>
			<?php } ?>
		<div id="custom">
			<form action="<?php echo createUrl("admin", "advert_edit_post");?>" method="post">
			<table class="opt">
				<tbody>                    
                     <tr>
						<td>广告主:</td>
						<td>
						<select name="advid">
							<option value="0">--请选择--</option>
							<?php print_r($row);foreach($advertisers as $v){?>
							<option <?php if($row['advid'] == $v['id']) echo "selected";?> value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
							<?php }?>
						</select>
						</td>
					</tr>                  
                     <tr>
						<td>名称:</td>
						<td><input type="text"  name="name" value="<?php echo $row['name']; ?>"></td>
					</tr>               
                     <tr>
						<td>LOGO:</td>
						<td><input type="text"  name="logo" value="<?php echo $row['logo']; ?>"></td>
					</tr>	
					
					<tr>
						<td>类型:</td>
						<td>
						<select name="type">						
						<?php foreach($ads_types as $k => $v){?>
						<option value="<?php echo $k; ?>"><?php echo $v; ?></option>
						<?php }?>
						</select>
						</td>
                    </tr>
					<tr>
						<td>分类:</td>
						<td>
							<select name="cate">
							<?php foreach($ads_cates as $k=>$v){?>
							<option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
							<?php }?>
							</select>
						</td>
                    </tr>
					<tr>
						<td>简介:</td>
						<td><textarea name="info" rows="3" cols="60"><?php echo $row['info'];?></textarea></td>
                    </tr>
					<tr>
						<td>价格(前台):</td>
						<td><input type="text" class="txt" name="viewprice" value="<?php echo $row['viewprice'];?>"></td>
                    </tr>
					<tr>
						<td>单价:</td>
						<td><input type="text" class="txt" name="price" value="<?php echo $row['price'];?>">元</td>
                    </tr>
					<tr>
						<td>投放周期:</td>
						<td><input type="text" class="txt" name="expire" value="<?php echo $row['expire'];?>"></td>
                    </tr>
					<tr>
						<td>是否申请:</td>
						<td>
						<input type="radio"  <?php if($row['isaudit'] == 1) echo "checked";?> name="isaudit" value="1"  />是<input type="radio"  <?php if($row['isaudit'] == 0) echo "checked";?> name="isaudit" value="0">否
						</td>
                    </tr>
					<tr>
						<td>是否推荐:</td>
						<td>
						<input type="radio" <?php if($row['iscommend'] == 1) echo "checked";?> name="iscommend" value="1" checked />是
						<input type="radio" <?php if($row['iscommend'] == 0) echo "checked";?> name="iscommend" value="0">否
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