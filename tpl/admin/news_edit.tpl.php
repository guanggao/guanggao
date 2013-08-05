<?php include ROOTDIR . "/tpl/admin/head.tpl.php"; ?>
<script type="text/javascript" src="/styles/ueditor/ueditor.config.js"></script>
<script type='text/javascript' src='/styles/ueditor/ueditor.all.js'></script>
<div class="container">
     <h3 class="marginbot">修改文章<a href="<?php echo createUrl('admin','news');?>" class="sgbtn">返回文章列表</a></h3>
    <div class="mainbox">
        <form action='/admin/news?op=edit_post' method='post' onsubmit='return submit_check();'>

            <table class="opt">
                <tbody> 
                  <tr>
                        <td>标题:</th>
                        <td> <input type='text' id='title' class="txt" name='title' value='<?php echo $news['title'];?>' style="width:700px;">
                         </td>
                    </tr>                    
                     <tr>
                        <td>分类:</th>
                        <td> <select name='type'>
                                <?php foreach ($news_type as $key => $value) { 
                                    $checked = '';
                                    if($key == $news['type']) $checked = 'selected';
                                ?>
                                    <option value='<?php echo $key;?>' <?php echo $checked;?>><?php echo $value;?></option>
                                <?php } ?>
                             </select>
                         </td>
                    </tr>                  
                     <tr>
                        <td>内容:</th>
                        <td><textarea name='content' id='richtxtedt' style="width:800px;"></textarea></td>
                    </tr>
                </tbody>
            </table>
           
            
            <input type='hidden' name='id' value='<?php echo $news['id']; ?>'>
            <input type='submit' value='提交' class="btn">
        </form>
    </div>
</div>
<script type='text/javascript'>
    var option = {
    minFrameHeight:320 ,
    minFrameWidth:500,
    textarea:'editorValue'
};
    var editor = new UE.ui.Editor(option);
    editor.render('richtxtedt');
    editor.ready(function(){
        //需要ready后执行，否则可能报错
        editor.setHeight(400);
        editor.setContent('<?php echo $news['content'];?>');
    });
    
    
    function submit_check(){
        var title = $('#title').val();
        if(title.length == 0){
            alert('标题不能为空');
            return false;
        }
    }
</script>

<?php include ROOTDIR . "/tpl/admin/footer.tpl.php"; ?>