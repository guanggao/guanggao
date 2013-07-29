<?php include ROOTDIR."/tpl/admin/head.tpl.php";?>
<div class="container">
	<h3 class="marginbot">用户列表</h3>
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
												<th>E-mail</th>
												<th>注册时间</th>
												<th>注册ip</th>
												<th>登陆时间</th>
												<th>登陆ip</th>
												<th>状态</th>
												<td>操作</td>
					</tr>
					<?php if(!empty($rows)) foreach($rows as $k => $row) {?>					
					<tr>
						 						<td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['email'];?></td>               
                                                <td><?php echo $row['regtime'];?></td>
                                                <td><?php echo $row['regip'];?></td>
                                                <td><?php echo $row['logintime'];?></td>
                                                <td><?php echo $row['loginip'];?></td>
                                                <td><?php  echo  ($row['status'] == 0) ? '<font color="green">通过</font>':
                                                '<font color="red">拒绝</font>';?></td>
                        						<td><a href="<?php echo createUrl('admin','user_edit',array(),array('id'=>$row['id']));?>">编辑</a></td>
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