<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
	<h3 class="marginbot">广告申请列表</h3>
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
							<th>会员</th>
							<th>网站</th>
							<th>广告</th>
							<th>申请时间</th>
							<th>审核时间</th>
							<th>状态</th>
							<td>操作</td>
					</tr>
					<?php if(!empty($rows)) foreach($rows as $k => $row) {?>					
					<tr>
						 						<td><?php echo $row['id'];?></td>
                                                <td><?php $user_row = getUserById($row['userid']); echo $user_row['name'];?>(<?php echo $row['userid'];?>)</td>
                                                <td><?php $advert_row = getAdvertByid($row['advid']); echo $advert_row['name'];?></td>
                                                <td><?php $site_row = getSiteById($row['siteid']);echo $site_row['name'];?>(<?php echo $row['siteid'] ?>)</td>
                                                <td><?php echo $row['createtime'];?></td>
                                                <td><?php echo $row['audittime'];?></td>
                                                <td><?php echo view_status($row['status']);?></td>
                        						<td><a href="<?php echo createUrl('admin','advapply_edit',array(),array('id'=>$row['id']));?>">编辑</a></td>
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