<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
	<h3 class="marginbot">广告活动列表 &gt;<a href="<?php echo createUrl('admin','adscode_add');?>" class="sgbtn">添加广告活动</a></h3>
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
							<th>LOGO</th>
							<th>广告主</th>
							<th>分类</th>
							<th>类型</th>
							<th>名称</th>
							<th>是否审核</th>
							<th>期限</th>
							<th>创建时间</th>
							<th>状态</th>
							<td>操作</td>
					</tr>
					<?php if(!empty($rows)) foreach($rows as $k => $row) {?>					
					<tr>
						 						<td><?php echo $row['id'];?></td>
                                                <td>--</td>               
                                                <td><?php echo $row['advid'];?></td>
                                                <td><?php echo $row['cate'];?></td>
                                                <td><?php echo $row['type'];?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['expire'];?></td>
                                                <td><?php echo $row['isaudit'];?></td>
                                                <td><?php echo $row['createtime'];?></td>
                                                <td><?php  echo  ($row['status'] == 0) ? '<font color="green">通过</font>':
                                                '<font color="red">拒绝</font>';?></td>
                        						<td><a href="<?php echo createUrl('admin','advert_edit',array(),array('id'=>$row['id']));?>">编辑</a></td>
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