<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
<h3 class="marginbot">添加广告信息<a href="<?php echo createUrl('admin','advert_list');?>" class="sgbtn">返回广告列表</a></h3>
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
						<td>广告主:</td>
						<td>
						<select name="advid">
							<option value="0">--请选择--</option>
							<?php foreach($advertisers as $v){?>
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
						<td>分组:</td>
						<td>
						<input type="radio" name="group" value="0" checked  />WEB
						<input type="radio"  name="group" value="1" />WAP		
						</td>
                    </tr>
					<tr>
						<td>类型:</td>
						<td>
						<select name="cate">						
						<?php foreach($ads_types as $v){?>
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
						<td><textarea name="info" rows="3" cols="60"></textarea></td>
                    </tr>
					<tr>
						<td>价格(前台):</td>
						<td><input type="text" class="txt" name="viewprice" value=""></td>
                    </tr>
					<tr>
						<td>单价:</td>
						<td><input type="text" class="txt" name="price" value="">元</td>
                    </tr>
					<tr>
						<td>投放周期:</td>
						<td><input type="text" class="txt" name="expire" value=""></td>
                    </tr>
					<tr>
						<td>是否申请:</td>
						<td>
						<input type="radio"  name="isaudit" value="1">是<input type="radio"  name="isaudit" value="0">否
						</td>
                    </tr>
					<tr>
						<td>是否推荐:</td>
						<td>
						<input type="radio" name="iscommend" value="1">是<input type="radio"  name="iscommend" value="0">否
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