<?php include_once TPL_FRONT."/header_idx.tpl.php"?>

<link rel="stylesheet" type="text/css" href="./多麦CPS广告联盟-reg_files/style.css">
<script type="text/javascript" src="/style/site/formvalidator.js"></script>
<script type="text/javascript" src="/style/site/formvalidatorregex.js"></script>
<div id="reg_con">
    <div class="siter">
    	<h2>网站主注册</h2>
        <form id="register_account" method="post" action="/site/reg_post">
        <table width="780" border="0" cellspacing="1" cellpadding="1">
          <tbody><tr>
            <th width="90"><span class="red">*</span>Email 地址：</th>
            <td><input type="text" name="email" id="email" class="input_text" size="40">
            <div id="emailTip" class="onError">邮件格式有误</div></td>
          </tr>
          <tr>
            <th><span class="red">*</span>输入密码：</th>
            <td>
            	<input type="password" name="password" id="password" class="input_text" size="40">
            <div id="passwordTip" class="onError">请输入密码，不得小于6位</div></td>
          </tr>
          <tr>
            <th><span class="red">*</span>密码确认：</th>
            <td>
            	<input type="password" name="confirm_password" id="confirm_password" class="input_text" size="40">
            <div id="confirm_passwordTip" class="onCorrect">重复输入密码正确</div></td>
          </tr>
          <tr>
            <th>QQ：</th>
            <td>
            	<input type="text" name="qq" id="qq" class="input_text" size="40" value="">
			</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <td><input type="submit" name="dosubmit" value=" " class="reg_btn step_1_btn"></td>
          </tr>
        </tbody></table>
        <h2>服务协议</h2>
  <div class="reg_agreement">
    <textarea readonly="readonly">
	本服务条款中所指的媒介网站是指下述符合要求的网站所有人：
1.个人网站：网站的所有人应拥有中华人民共和国公民资格，具有完全的民事行为能力，并能够独立承担法律责任。
2.商业网站：商业网站是指除个人网站之外的，从事商务行为的企业法人、实体、组织机构等所拥有的网站。商业网站的所有人应为在中华人民共和国领域内合法登记注册的企业法人或实体、组织机构。
3.对网站的要求：网站的经营严格遵守相关法律法规，网站所进行的市场开拓、广告宣传及相关经营活动合法。网站不得包含下列内容(以下简称"违法内容")：
⑴反对宪法所确定的基本原则的；
⑵危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的；
⑶损害国家荣誉和利益的；
⑷煽动民族仇恨、民族歧视，破坏民族团结的；
⑸破坏国家宗教政策，宣扬邪教和封建迷信的；
⑹散布谣言，扰乱社会秩序，破坏社会稳定的；
⑺散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的；
⑻侮辱或者诽谤他人，侵害他人合法权益的；
⑼侵犯他人知识产权的，包括但不限于专利权、商标权、著作权；
⑽侵犯他人商业秘密的；
⑾含有法律、行政法规禁止的其他内容的。
无论媒介网站是个人还是公司，网站的所有人对自己的主页应具有完全的所有权、使用权、决策权等相应权利，并确保其网站的网页能够在 800X600 的解析度下正常显示。
4. 媒介网站的所有人必须拥有一个固定的常住地址或办公地址，并具有经常上网收发电子邮件的能力。
★媒介网站注册、投放广告程序
1.媒介网站注册 -&gt; 填写注册信息并验证网站。多麦联盟采取媒介会员审核机制，当媒介会员网站涉及违法 信息或不能正常运作时，多麦联盟保留取消其会员资格的权力。
2. 媒介网站通过审核后即可登陆多麦联盟平台获取广告代码。
3.将代码放到网站的网页上，多麦联盟将根据多麦联盟广告效果跟踪系统的统计结果和广告主返回的确认数据作为媒介网站的结算依据。
★媒介网站的权利
1.媒介网站注册、验证，通过审核后，正式成为多麦联盟的联盟会员。
2.广告费用结算： 多麦联盟将按合约中规定的实际产生的广告业绩进行结算 。
3.付费方式：
⑴按照在媒介网站网站上广告的实际投放数量及实际广告效果，生成广告统计报表，供媒介网站在登录界面中查看。
⑵按照上述报表反映的实际数据与广告模式的单价，来确定网站的广告发布收入，按照实际结果向会员支付费用。
⑶支付费用的最低数额为人民币五十元整。
★媒介网站的义务
1.媒介网站必须保证其网站的所有网页不包含任何违法内容，并保证不连接到含有违法内容的网页。
2.如果媒介网站提供给多麦联盟的资料、信息等发生变化，包括姓名、联系电话等，应及时登陆多麦联盟平台修改个人资料修改或网站信息。
3.会员应保管好自己的用户名和密码，不得透露给第三方。如果自己的账号被盗用，请及时通知多麦联盟，否则后果自负。
4.如果发现有不符合多麦联盟或广告主指定的规范所投放的广告，多麦联盟有权要求会员修正。
5.对于注册后三个月内无任何广告效果的会员，多麦联盟保留删除其账户内所有佣金，暂停或终止其帐户的权利。
6.多麦联盟有权随时单方面决定更改本服务条款。如服务条款有任何变更，多麦联盟将及时刊载公告，通知媒介网站。经修订的须知自公布时开始生效。
7.本服务条款变更后，如媒介网站继续使用多麦联盟提供的服务，则表示媒介网站接受经修订的服务条款。
★违约责任
(1)严禁通过设备、程序以及其他不合法的手段提高个人收入。一经发现，多麦联盟有权立即取消其媒介网站资格，撤回正在投放的广告，并追回已经支付的全部广告发布费用，多麦联盟保留进一步追索责任的权利；同时，该媒介网站必须承担因此给多麦联盟带来的所有损失。
(2)媒介网站承诺其向多麦联盟平台提交的任何资料，包括但不限于其注册信息、网页地址，联系方式等的真实性。多麦联盟不承担对上述资料的真实性的审查责任。但是，一旦多麦联盟发现媒介网站提供虚假信息或采取其它欺骗手段，有权暂停或终止媒介网站的账户，删除其账户内所有佣金，并保留追究媒介网站责任的权利。
(3)媒介网站承诺其在多麦联盟平台中的任何行为均不会使多麦联盟公司、多麦联盟平台的其它媒介网站、多麦联盟的任何其它用户、向多麦联盟提供服务的第三方网站、公司，或与多麦联盟有合作关系的第三方承担任何法律责任和处罚。
(4)媒介网站同意因媒介网站违反本服务条款或在本服务条款中提及的应遵守的其他文件，或因媒介网站违反了法律或侵害了第三方的权利，而使第三方对多麦联盟及其子公司、分公司、董事、职员、代理人提出索赔要求(包括但不限于司法费用和其他专业人士的费用)，媒介网站必须全额赔偿给多麦联盟。
★免责声明
除多麦联盟提供的网络广告之外，媒介网站的网站内容包含或涉及色情、暴力、反动及任何违反中华人民共和国国家法律的内容，多麦联盟不承担任何责任。相关责任完全由媒介网站承担。
★不可抗力
对于因多麦联盟合理控制范围以外的原因，包括但不限于自然灾害、罢工、骚乱、物质短缺或定量配给、暴动、战争行为、政府行为、通讯或其他设施故障或严重伤亡事故等，致使新多麦联盟延迟或未能履约的，多麦联盟不对加盟成员承担任何责任。</textarea>
  </div>
        <input type="hidden" name="step" value="1">
   </form>
            </div>
</div>
<script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({formid:"register_account",autotip:true});
		
		$("#email").formValidator({onshow:"您将使用此邮箱登录，请正确填写",onfocus:"您将使用此邮箱登录，请正确填写",oncorrect:"可以注册"})
			.regexValidator({regexp:"email",datatype:"enum",onerror:"邮件格式有误"})
			.ajaxValidator({type : "get",url : "",data :"/siter/ajax_check_email",datatype : "html",async:'false',success : function(data){if( data == "1" ){return true;}else{return false;}},onerror : "此邮箱已经被注册",onwait : "正在检测，请稍后..."});

		$("#password").formValidator({onshow:"请输入密码，不得小于6位",onfocus:"请输入密码，不得小于6位"}).inputValidator({min:6,onerror:"请输入密码，不得小于6位"});
		$("#confirm_password").formValidator({
			onshow:"请重复输入以上密码",
				onfocus:"请重复输入以上密码",
				oncorrect:"重复输入密码正确"}
		).compareValidator({desid:"password",operateor:"=",onerror:"2次密码输入不一致"});
	})


function fleshVerify(){
	var timenow = new Date().getTime();
	$(".verification_code_img").attr("src", "/siter/verify?rnd="+timenow);
}
</script>
<?php include_once TPL_FRONT."/footer.tpl.php"?>