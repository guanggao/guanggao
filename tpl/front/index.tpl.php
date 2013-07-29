<?php include_once TPL_FRONT."/header.tpl.php"?>

<div class="index_header">
		<div class="header_info">
			<a href="http://www.duomai.com/index.php" class="logo" alt="多麦CPS广告联盟">多麦CPS广告联盟</a>
			<div class="top_nav">
			<div class="fl" style="height:20px;margin-right:5px;">
				<a id="setHomepage" href="javascript:void(0);">设为首页</a> <span class="gray">|</span> <a href="javascript:bookmark();">加入收藏</a> </div>
				<div class="fl" style="height:20px;"><wb:follow-button uid="2535828454" type="gray_1" width="63" height="24" class="guanzhu"><iframe src="./多麦CPS广告联盟_home_files/followbutton.htm" width="63" height="24" frameborder="0" scrolling="no" marginheight="0"></iframe></wb:follow-button></div>
			</div>
		</div>
		<div id="nav">
			<div class="overall">
				<ul>
					<li class="selected">
						<a href="http://www.duomai.com/index.php" title="首页">首页</a>
					</li>
					<li>
						<a href="http://www.duomai.com/index.php?m=article&a=view&cate_id=35&id=97" title="网站主">网站主</a>
					</li>
					<li>
						<a href="http://www.duomai.com/index.php?m=article&a=view&cate_id=41&id=102" title="广告主">广告主</a>
					</li>
					<li>
						<a href="http://www.duomai.com/index.php?m=article&a=view&cate_id=15&id=130" title="赚钱教程">赚钱教程</a>
					</li>
					<li>
						<a href="http://www.duomai.com/index.php?m=article&a=artlist&cate_id=5" title="广告活动">广告活动</a>
					</li>
					<li class="last">
						<a href="http://www.duomai.com/index.php?m=scoremall&a=index" title="积分兑换">积分兑换</a>
					</li>
				</ul>
				<div class="search">
					<form action="http://www.duomai.com/index.php?m=article&a=artlist&cate_id=0" method="post">
						<input name="keyword" type="text" class="input">
						<input type="submit" value="搜索" class="btn">
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="./多麦CPS广告联盟_home_files/idTabs.js" type="text/javascript"></script>
<script src="./多麦CPS广告联盟_home_files/img_slide.js" type="text/javascript"></script>
<script>
	$(function() {
		$("#adv1").Slide({
			effect : "scroolY",
			speed : "normal",
			timer : 3000
		});
	})
</script>
<script>
	//促销商品鼠标经过出现橙色边框
	$(document).ready(function() {
		showtabs($("#index_login"))
		showtabs($("#index_act"))

		$(".sales_con dl").hover(function() {
			$(this).addClass("dl_hover")
		})
		$(".sales_con dl").mouseleave(function() {
			$(this).removeClass("dl_hover")
		})
	})
</script>
<script type="text/javascript">
	//首页促销7页广告图
	$(function() {
		var len = $(".adv_num_nav li").length;
		var index = 0;
		var adTimer;
		$(".adv_num_nav li").mouseover(function() {
			index = $(".adv_num_nav li").index(this);
			showImg(index);
		}).eq(0).mouseover();
		//滑入 停止动画，滑出开始动画.
		$('#adv_show').hover(function() {
			clearInterval(adTimer);
		}, function() {
			adTimer = setInterval(function() {
				showImg(index)
				index++;
				if (index == len) {
					index = 0;
				}
			}, 4000);
		}).trigger("mouseleave");
	})
	// 通过控制top ，来显示不同的幻灯片
	function showImg(index) {
		var adHeight = $("#adv_show").height();
		$(".adv_pic").stop(true, false).animate({
			top : -adHeight * index
		}, 1000);
		$(".adv_num_nav li").removeClass("on").eq(index).addClass("on");
	}
</script>
<script>
	//登陆框切换
	$(document).ready(function() {
		$("#tab_siter").click(function() {
			$("#login_siter").show();
			$("#login_adser").hide();
			$(".loginup_tab").removeClass("loginup_tab_hover");
			$(this).addClass("selected");
			$("#tab_adser").removeClass("selected");
		})
		$("#tab_adser").click(function() {
			$("#login_siter").hide();
			$("#login_adser").show();
			$(".loginup_tab").addClass("loginup_tab_hover");
			$(this).addClass("selected");
			$("#tab_siter").removeClass("selected");
		})
	})
</script>
<script>
	//优惠券商品鼠标经过出现橙色边框
	$(document).ready(function() {
		$(".yhq_con dl").hover(function() {
			$(this).addClass("dl_hover")
		})
		$(".yhq_con dl").mouseleave(function() {
			$(this).removeClass("dl_hover")
		})
		
//头部通栏广告位
		t=setInterval(advSlide,2000)


		function advSlide(){
		   $(".top_adv").slideUp("slow");
		   $(".top_adv1").show();
		}

	})
</script>


<div class="clearfix">
	<!--新的banner-->
	<div class="throughbar">
		<!-- <div class="banner">
			<div id="adv_show">
				<div class="adv_pic" style="top: -270px;">
					<ul>
						<li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9393" target="_blank">
								<img src="/uploads/2013-07-26/51f20e8357430.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=activity&a=index&id=3" target="_blank">
								<img src="/uploads/2013-07-01/51d0f399a4c26.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=4219" target="_blank">
								<img src="/uploads/2013-02-04/510f554687051.gif" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://cuxiao.lefeng.com/zhuanti_yrkq.html" target="_blank">
								<img src="/uploads/2013-07-19/51e88fd2ece8f.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9354" target="_blank">
								<img src="/uploads/2013-07-26/51f1c6bb92aaa.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.amazon.cn/b?ie=UTF8&node=322693071" target="_blank">
								<img src="/uploads/2013-07-26/51f1cdfd301e3.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9414" target="_blank">
								<img src="/uploads/2013-07-28/51f51943a8ec8.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9450" target="_blank">
								<img src="/uploads/2013-07-29/51f5eb4634ef7.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9282" target="_blank">
								<img src="/uploads/2013-07-24/51ef6e2ac5c7d.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9126" target="_blank">
								<img src="/uploads/2013-07-19/51e8eddf085f5.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9063" target="_blank">
								<img src="/uploads/2013-07-19/51e8c092defea.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li><li>
							<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9066" target="_blank">
								<img src="/uploads/2013-07-18/51e7766d6464a.jpg" alt="" border="0" width="700" height="225" />
							</a>
						</li>					</ul>
				</div>
				<div class="adv_num_nav_bg"></div>
				<div class="adv_num_nav">
					<ul>
						<li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li>					</ul>
					<div class="clear"></div>
				</div>
			</div>
		</div> -->
		
		<script type="text/javascript" src="./多麦CPS广告联盟_home_files/slideimg.js"></script>
		<div class="banner fl">
        	<div id="J_SlidePlayer_510" class="tb-slide">
              <ul class="img-box" style="top: -1350px;">
              	<li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9393" target="_blank"><img src="./多麦CPS广告联盟_home_files/51f20e8357430.jpg" alt="【1号店】5周年庆最后一波，疯团3天" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=activity&a=index&id=3" target="_blank"><img src="./多麦CPS广告联盟_home_files/51d0f399a4c26.jpg" alt="7月活动" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=4219" target="_blank"><img src="./多麦CPS广告联盟_home_files/510f554687051.gif" alt="多麦可以天天提现啦" border="0" width="690" height="270"></a></li><li><a href="http://cuxiao.lefeng.com/zhuanti_yrkq.html" target="_blank"><img src="./多麦CPS广告联盟_home_files/51e88fd2ece8f.jpg" alt="乐蜂5周年" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9354" target="_blank"><img src="./多麦CPS广告联盟_home_files/51f1c6bb92aaa.jpg" alt="聚美3.5周年庆" border="0" width="690" height="270"></a></li><li><a href="http://www.amazon.cn/b?ie=UTF8&node=322693071" target="_blank"><img src="./多麦CPS广告联盟_home_files/51f1cdfd301e3.jpg" alt="亚马逊之夏,清凉来袭,千万消暑商品1折起!" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9414" target="_blank"><img src="./多麦CPS广告联盟_home_files/51f51943a8ec8.jpg" alt="【苏宁易购】降到底，一触即发" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9450" target="_blank"><img src="./多麦CPS广告联盟_home_files/51f5eb4634ef7.jpg" alt="京东7月" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9282" target="_blank"><img src="./多麦CPS广告联盟_home_files/51ef6e2ac5c7d.jpg" alt="【骆驼商城】商务客VS背包客，满299减20，满499减50" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9126" target="_blank"><img src="./多麦CPS广告联盟_home_files/51e8eddf085f5.jpg" alt="【网酒网】原装进口葡萄酒直降200元，再送真空酒塞！" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9063" target="_blank"><img src="./多麦CPS广告联盟_home_files/51e8c092defea.jpg" alt="【窝窝团】星级好食惠第二季" border="0" width="690" height="270"></a></li><li><a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9066" target="_blank"><img src="./多麦CPS广告联盟_home_files/51e7766d6464a.jpg" alt="【团委会】键康水嫩肌肤保卫战——做一个不会蒸发的水女孩" border="0" width="690" height="270"></a></li>              </ul>
            <ul class="flash_item"><li class="">1</li><li class="">2</li><li class="">3</li><li class="">4</li><li class="">5</li><li class="on">6</li><li class="">7</li><li class="">8</li><li class="">9</li><li class="">10</li><li class="">11</li><li class="">12</li></ul></div>
            <script type="text/javascript">
			$("#J_SlidePlayer_510").slideImg({
                speed: "normal",
                timer: 3000
            });
			</script>
        </div>
		<div class="login" id="index_login">
			<ul class="tabs">
				<li class="selected">网站主登陆</li>
				<li>广告主登陆</li>
			</ul>
			<div class="clear"></div>
			<!--网站主登陆  -->
			<div class="tabs_con" style="display: block;">
				<form action="http://www.duomai.com/index.php?m=siter&a=dologin" method="post" id="siterform">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr height="52">
								<th>邮箱：</th>
								<td align="left">
									<input type="text" name="email" id="email" class="input_text">
								</td>
							</tr>
							<tr height="53">
								<th>密码：</th>
								<td align="left">
									<input type="password" class="input_text" id="password" name="password">
								</td>
							</tr>
							<!-- <tr>
								<th>
									验证码：
								</th>
								<td>
									<input type="text"
									class="input_text input_text_short fl" id="" name=""> <img
									src="images/validate_pic.gif" width="93" height="22" alt="验证码"
									class="fl">
								</td>
							</tr> -->
							<tr>
								<td>&nbsp;</td>
								<td align="left">
									<label>
										<input type="checkbox" name="weeklogin" id="weeklogin">
										一周内自动登录
									</label>
									<a href="http://www.duomai.com/index.php?m=siter&a=forget_pwd" class="f999">忘记密码?</a>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<a class="login_btn" href="javascript:void(0))" onclick="$(&#39;#siterform&#39;).submit()">立即登录</a>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
				<div class="reg_btn">
					<a href="http://www.duomai.com/index.php?m=siter&a=register">10秒钟免费注册</a>
				</div>
							</div>
			<!--广告主登陆  -->
			<div class="tabs_con" style="display: none;">
				<form method="post" action="http://www.duomai.com/index.php?m=adser&a=dologin" id="adserform">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr height="52">
								<th>邮箱：</th>
								<td align="left">
									<input type="text" name="email" id="email" class="input_text">
								</td>
							</tr>
							<tr height="53">
								<th>密码：</th>
								<td align="left">
									<input type="password" class="input_text" id="password" name="passwd">
								</td>
							</tr>
							<!-- <tr>
								<th>
									验证码：
								</th>
								<td>
									<input type="text"
									class="input_text input_text_short fl" id="" name=""> <img
									src="images/validate_pic.gif" width="93" height="22" alt="验证码"
									class="fl">
								</td>
							</tr> -->
							<tr>
								<td>&nbsp;</td>
								<td align="left">
									<label>
										<input type="checkbox" name="weeklogin" id="weeklogin">
										一周内自动登录
									</label>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<a class="login_btn" href="javascript:void(0))" onclick="$(&#39;#adserform&#39;).submit()">立即登录</a>
								</td>
							</tr>
					</tbody></table>
				</form>
				<div class="reg_btn">
					<a href="http://www.duomai.com/index.php?m=article&a=view&cate_id=16&id=133">联系多麦</a>
				</div>
							</div>
			<!--圆角底部-->
		</div>
		<div class="clear"></div>
	</div>
	<!--新的banner结束-->
	<!--公告、咨询和详情-->
	<div class="throughbar news">
		<div class="news_box">
			<h3>
				<a href="http://www.duomai.com/index.php?m=article&a=artlist&cate_id=5">更多&gt;&gt;</a>
				多麦公告
			</h3>
			<ul>
				<li>
					<em class="orange_bg">1</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=8793">
						<font color="red">						【好消息】多麦商家数据咨询客服功能正式上线了						</font>					</a>
					<span class="fl">07-09</span>
				</li><li>
					<em class="orange_bg">2</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=1052">
						<font color="red">						【重要通知】广告主活动及确认数据每日更新						</font>					</a>
					<span class="fl">06-05</span>
				</li><li>
					<em class="orange_bg">3</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=8553">
												【好消息】多麦大逆袭4月活动佣金奖励已经发放完毕											</a>
					<span class="fl">07-02</span>
				</li><li>
					<em class="blue_bg">4</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=7263">
												【重要通知】多麦联盟最新积分政策通知											</a>
					<span class="fl">05-30</span>
				</li><li>
					<em class="blue_bg">5</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=3391">
						<font color="red">						【亚马逊】关于违规推广之声明						</font>					</a>
					<span class="fl">01-04</span>
				</li><li>
					<em class="blue_bg">6</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=5&id=4219">
						<font color="red">						【特大好消息】多麦联盟支持站长天天提现，天天拿钱拿到手软！						</font>					</a>
					<span class="fl">02-01</span>
				</li>			</ul>
		</div>
		<div class="news_box">
			<h3>
				<a href="http://www.duomai.com/index.php?m=article&a=artlist&cate_id=51">更多&gt;&gt;</a>
				网站主激励
			</h3>
			<ul>
				<li>
					<em class="orange_bg">1</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=51&id=8406">
						<font color="red">						【1号店】5周年庆,7月整月佣金提升开始啦~~！						</font>					</a>
					<span class="fl">07-01</span>
				</li><li>
					<em class="orange_bg">2</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=51&id=8409">
						<font color="red">						【1号商城】5周年庆,7月整月佣金提升开始啦~~！						</font>					</a>
					<span class="fl">07-01</span>
				</li><li>
					<em class="orange_bg">3</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=51&id=8943">
						<font color="red">						【手礼网】7月佣金翻倍奖励来啦~~！						</font>					</a>
					<span class="fl">07-15</span>
				</li><li>
					<em class="blue_bg">4</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=51&id=9408">
						<font color="red">						【天天网】佣金翻倍活动继续进行中~~！						</font>					</a>
					<span class="fl">07-26</span>
				</li><li>
					<em class="blue_bg">5</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=51&id=9399">
						<font color="red">						【凡客移动】8月份佣金调整，佣金大幅提升啦~~						</font>					</a>
					<span class="fl">07-26</span>
				</li><li>
					<em class="blue_bg">6</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=51&id=9333">
						<font color="red">						【凡客诚品】8月份佣金调整，佣金大幅提升啦~~						</font>					</a>
					<span class="fl">07-25</span>
				</li>			</ul>
		</div>
		<div class="news_box last">
			<h3>
				<a href="http://www.duomai.com/index.php?m=article&a=artlist&cate_id=52">更多&gt;&gt;</a>
				用户促销
			</h3>
			<ul>
				<li>
					<em class="orange_bg">1</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9393">
						<font color="red">						【1号店】5周年庆最后一波，疯团3天						</font>					</a>
					<span class="fl">07-26</span>
				</li><li>
					<em class="orange_bg">2</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9354">
						<font color="red">						【聚美优品】3.5周年庆全网最底价再次来袭~						</font>					</a>
					<span class="fl">07-26</span>
				</li><li>
					<em class="orange_bg">3</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9411">
												【国美在线】买99返100 买49返50 买29返30											</a>
					<span class="fl">07-27</span>
				</li><li>
					<em class="blue_bg">4</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9063">
												【窝窝团】星级好食惠第二季											</a>
					<span class="fl">07-18</span>
				</li><li>
					<em class="blue_bg">5</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9471">
												【母婴之家】周二精品团，费雪海马99元抢！											</a>
					<span class="fl">07-29</span>
				</li><li>
					<em class="blue_bg">6</em>
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9468">
												【易视眼镜网】三周年店庆！惊喜第一波 红包抢不停！											</a>
					<span class="fl">07-29</span>
				</li>			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<!--公告、咨询和详情结束-->
	<!--广告-->
	<div class="throughbar">
	<div class="fl"><a href="http://c.duomai.com/track.php?sid=10026&aid=125&euid=index&t=http://www.paixie.net/topic/1891.html"><img src="./多麦CPS广告联盟_home_files/480x80.jpg" alt="拍鞋网" width="480" height="80"></a></div>
	<div class="fr"><a href="http://c.duomai.com/track.php?sid=10026&aid=58&euid=index&t=http://www.yihaodian.com/"><img src="./多麦CPS广告联盟_home_files/yihaodian.jpg" alt="yihaodian" width="480" height="80"></a></div>	
	<div class="clear"></div>
	</div>
	<!--广告结束-->
	<!--活动-->
	<div id="index_act" class="throughbar">
		<ul class="tabs">
			<li class="selected">推荐活动</li>
			<li>最新活动</li>
			<!-- <li>独家活动</li> -->
		</ul>
		<div class="clear"></div>
		<!-- 推荐活动-->
		<div class="tabs_con" style="display: block;">
			<dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=58">
						<img src="./多麦CPS广告联盟_home_files/m_51b18456079cf.jpg" width="150" height="53" alt="1号店cps推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=58">
														1号店cps推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 7.7% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=61">
						<img src="./多麦CPS广告联盟_home_files/m_517c8fdbce285.jpg" width="150" height="53" alt="京东商城CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=61">
														京东商城CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.7% - 5.6% 0元 - 43元</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=399">
						<img src="./多麦CPS广告联盟_home_files/m_51a33012de8c4.jpg" width="150" height="53" alt="糯米网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=399">
														糯米网CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 4.9% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=313">
						<img src="./多麦CPS广告联盟_home_files/m_51cac21cae653.jpg" width="150" height="53" alt="1号商城CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=313">
														1号商城CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 7.7% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=304">
						<img src="./多麦CPS广告联盟_home_files/m_50c04f31869fb.jpg" width="150" height="53" alt="乐蜂网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=304">
														乐蜂网CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：2% - 15% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=299">
						<img src="./多麦CPS广告联盟_home_files/m_50a1ef6e4d0ad.jpg" width="150" height="53" alt="大众点评网">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=299">
														大众点评网													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：4% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=206">
						<img src="./多麦CPS广告联盟_home_files/m_4febc9f2f1121.png" width="150" height="53" alt="窝窝团CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=206">
														窝窝团CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：1.4% - 10% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=168">
						<img src="./多麦CPS广告联盟_home_files/m_5194a4cdc2802.jpg" width="150" height="53" alt="唯品会CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=168">
														唯品会CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.7% - 4.5% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=160">
						<img src="./多麦CPS广告联盟_home_files/m_4f66db7f87d41.jpg" width="150" height="53" alt="银泰网址站ROI推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=160">
														银泰网址站ROI推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 8% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=128">
						<img src="./多麦CPS广告联盟_home_files/m_4f3899809ae81.gif" width="150" height="53" alt="亚马逊CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=128">
														亚马逊CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.6% - 6% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=84">
						<img src="./多麦CPS广告联盟_home_files/m_51591f6422d25.jpg" width="150" height="53" alt="苏宁CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=84">
														苏宁CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.4% - 4% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=83">
						<img src="./多麦CPS广告联盟_home_files/m_51c93cd366365.jpg" width="150" height="53" alt="携程 CPS 推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=83">
														携程 CPS 推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.4% - 3.5% </p>
				</dd>
			</dl>			<div class="clear"></div>
		</div>
		<!--最新活动  -->
		<div class="tabs_con" style="display: none;">
			<dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=435">
						<img src="./多麦CPS广告联盟_home_files/m_51e62ffa3b118.jpg" width="150" height="53" alt="网酒网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=435">
							<font color="red">							网酒网CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:14%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=405">
						<img src="./多麦CPS广告联盟_home_files/m_51ad47c9cb45d.jpg" width="150" height="53" alt="华阳彩票CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=405">
														华阳彩票CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：5.00%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=423">
						<img src="./多麦CPS广告联盟_home_files/m_51d6571a73fcf.jpg" width="150" height="53" alt="天品网ROI CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=423">
							<font color="red">							天品网ROI CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:18%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=396">
						<img src="./多麦CPS广告联盟_home_files/m_519deb2dd3e07.jpg" width="150" height="53" alt="比度克CPS">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=396">
														比度克CPS													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：17.5%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=414">
						<img src="./多麦CPS广告联盟_home_files/m_51d3ec67e5114.jpg" width="150" height="53" alt="窝夫小子CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=414">
							<font color="red">							窝夫小子CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:14%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=390">
						<img src="./多麦CPS广告联盟_home_files/m_519d8214cdd3a.jpg" width="150" height="53" alt="唯品会移动cps推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=390">
														唯品会移动cps推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.7%-3.5%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=361">
						<img src="./多麦CPS广告联盟_home_files/m_515584a8681c5.gif" width="150" height="53" alt="Vjia移动版CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=361">
							<font color="red">							Vjia移动版CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:0%-11%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=411">
						<img src="./多麦CPS广告联盟_home_files/m_51c401a6cce99.jpg" width="150" height="53" alt="步淘商城cps推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=411">
							<font color="red">							步淘商城cps推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:11%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=384">
						<img src="./多麦CPS广告联盟_home_files/m_51c9371c3f100.jpg" width="150" height="53" alt="药房网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=384">
														药房网CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：8.50%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=301">
						<img src="./多麦CPS广告联盟_home_files/m_50aee7e28d9cb.gif" width="150" height="53" alt="拍拍网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=301">
							<font color="red">							拍拍网CPS推广							</font>						</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0-50%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=375">
						<img src="./多麦CPS广告联盟_home_files/m_519202c087b12.jpg" width="150" height="53" alt="佐卡伊珠宝CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=375">
														佐卡伊珠宝CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.56%-7%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=399">
						<img src="./多麦CPS广告联盟_home_files/m_51a33012de8c4.jpg" width="150" height="53" alt="糯米网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="http://www.duomai.com/index.php?m=siter_act&a=view&ads_id=399">
							<font color="red">							糯米网CPS推广							</font>						</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0%-4.9%</p>
				</dd>
			</dl>			<div class="clear"></div>
		</div>
		<!--独家活动  -->
		<!-- <div class="tabs_con" style="display: none;">
						<div class="clear"></div>
		</div> -->
	</div>
	<!--活动结束-->
	<!--积分奖励和优惠券-->
	<div class="throughbar">
		<div class="jf_reward">
			<h2>
				<span>积分奖励</span>
			</h2>
			<ul>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=29">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/sj.jpg" alt="iphone5">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=60">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/ipad.jpg" alt="iPod touch 4代">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=32">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/xl.jpg" alt="我心飞扬水晶项链">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=28">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/xs.jpg" alt="JLO詹妮弗.洛佩兹still故我女士香水50ml">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=59">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/xj.jpg" alt="三星（SAMSUNG） NX1000 单电双镜头套装">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=38">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/qb.jpg" alt="[浪美]夏日情调系列长款钱包（米白色） ">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=62">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/up.jpg" alt="SSK 飚王 SFD199 K5 16G U盘 银色">
					</a>
				</li>
				<li>
					<a href="http://www.duomai.com/index.php?m=scoremall&a=detail&production_id=63">
						<img width="65" height="65" src="./多麦CPS广告联盟_home_files/hj.jpg" alt="法国原瓶进口 波尔多AOC级 夏利耶庄园干红葡萄酒+曼特宁咖啡">
					</a>
				</li>
			</ul>
			<div class="clear"></div>
			<p align="right">
					<a href="http://www.duomai.com/index.php?m=scoremall&a=index">更多&gt;&gt;</a>
			</p>
			<!-- <div class="jf_btn">
				<a href="" class="jf_earn">积分赚取</a>
				<a href="" class="jf_exchange">积分兑换</a>
				<a href="" class="jf_query">积分查询</a>
			</div>
			<div class="clear"></div>
			<div class="jf_intro">
				<p>
					<a href="#">1.什么是积分奖励计划？</a>
				</p>
				<p>
					<a href="#">2.如何获得积分？</a>
				</p>
				<p align="right">
					<a href="/index.php?m=scoremall&a=index">更多&gt;&gt;</a>
				</p>
			</div> -->
		</div>
		<div class="index_yhq">
			<h2>
				<a href="http://www.duomai.com/index.php?m=siter_act&a=yhqlist">更多&gt;&gt;</a>
				<span>优惠劵</span>
			</h2>
			<div class="index_yhq_con">
				<dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_51b4382f05a13.jpg" width="110" height="39" alt="天品网">
					</dt>
					<dd>
						<span>天品网500-50</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_50d3e127477e6.png" width="110" height="39" alt="牛尔官网">
					</dt>
					<dd>
						<span>牛尔官网80-15</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_50c04f31869fb.jpg" width="110" height="39" alt="">
					</dt>
					<dd>
						<span>200</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_51cac21cae653.jpg" width="110" height="39" alt="">
					</dt>
					<dd>
						<span>500-50</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_51b18456079cf.jpg" width="110" height="39" alt="一号店超市">
					</dt>
					<dd>
						<span>一号店超市1000-50</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_503c378e7e30f.jpg" width="110" height="39" alt="爱戴眼镜网">
					</dt>
					<dd>
						<span>爱戴眼镜网200-20</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_4fbf578fa0187.jpg" width="110" height="39" alt="拍鞋网">
					</dt>
					<dd>
						<span>拍鞋网300-100</span>
					</dd>
				</dl><dl>
					<dt>
							<img src="./多麦CPS广告联盟_home_files/m_5194a4cdc2802.jpg" width="110" height="39" alt="唯品会">
					</dt>
					<dd>
						<span>唯品会300-30</span>
					</dd>
				</dl>			</div>
		</div>
		<div class="clear"></div>
	</div>
	<!--积分奖励和优惠券结束-->
	<!--联系电话和广告-->
	<div class="throughbar">
		<div class="fl">
			<img src="./多麦CPS广告联盟_home_files/contact.jpg" width="320" height="61" alt="联系我们">
		</div>
		<div class="fr">
					<a href="http://www.duomai.com/index.php?m=article&a=notice&cate_id=52&id=9453" target="_blank">
				<img src="./多麦CPS广告联盟_home_files/51f5ec84746ff.jpg" width="650" height="61" alt="唯品会非常10号">
			</a>
				</div>
		<div class="clear"></div>
	</div>
	<!--合作伙伴-->
	<div class="throughbar">
		<div class="partner_pic">
			<h3>合作伙伴</h3>
			<table width="980" border="0" cellspacing="1" cellpadding="1">
				<tbody>
					<tr>
						<td>
							<ul>
								<li style="width: 140px; float: left;height:40px;">
									<a href="http://www.taofen8.com/" target="_blank" style="width:140px;height:40px">
										<img alt="淘粉吧" src="./多麦CPS广告联盟_home_files/m_51ac23fb83b09.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.4.cn/" target="_blank" style="width:140px;height:40px">
										<img alt="金名网" src="./多麦CPS广告联盟_home_files/m_4e708e059a7f3.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.gome.com.cn/" target="_blank" style="width:140px;height:40px">
										<img alt="国美电器网上商城" src="./多麦CPS广告联盟_home_files/m_50c59ab721189.jpg">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.taoku.com/" target="_blank" style="width:140px;height:40px">
										<img alt="淘酷网" src="./多麦CPS广告联盟_home_files/m_4e708e52b8730.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.liangao.com/" target="_blank" style="width:140px;height:40px">
										<img alt="联告" src="./多麦CPS广告联盟_home_files/m_4f3cbbaa716b1.jpg">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.bengbeng.com/" target="_blank" style="width:140px;height:40px">
										<img alt="蹦蹦家园" src="./多麦CPS广告联盟_home_files/m_5100ea8c10431.gif">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.mizhe.com/" target="_blank" style="width:140px;height:40px">
										<img alt="米折网" src="./多麦CPS广告联盟_home_files/m_507cb61b6477b.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.5w.com/" target="_blank" style="width:140px;height:40px">
										<img alt="5w 导航" src="./多麦CPS广告联盟_home_files/m_4e708e4219334.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.yite.com/" target="_blank" style="width:140px;height:40px">
										<img alt="易特集团-易特网络" src="./多麦CPS广告联盟_home_files/m_4e708df329a72.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.liqu.com/" target="_blank" style="width:140px;height:40px">
										<img alt="利趣网" src="./多麦CPS广告联盟_home_files/m_50235b88ed339.jpg">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.ete.cn/" target="_blank" style="width:140px;height:40px">
										<img alt="易特联盟" src="./多麦CPS广告联盟_home_files/m_4e7092410f33a.png">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.yihaodian.com/channel/8644_1/" target="_blank" style="width:140px;height:40px">
										<img alt="进口食品" src="./多麦CPS广告联盟_home_files/m_4f56e0b6b06d1.jpg">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://baike.hao123.cn/" target="_blank" style="width:140px;height:40px">
										<img alt="hao123.cn" src="./多麦CPS广告联盟_home_files/m_51ba8b412ec35.gif">
									</a>
								</li><li style="width: 140px; float: left;height:40px;">
									<a href="http://www.55haitao.com/" target="_blank" style="width:140px;height:40px">
										<img alt="海淘" src="./多麦CPS广告联盟_home_files/m_519f1b0e6c109.gif">
									</a>
								</li>							</ul>
						</td>
				</tr></tbody>
			</table>
		</div>
		<div class="clear"></div>
	</div>
	<!--底部  -->
	<script language="javascript">
		function ScrollImgLeft() {
			var speed = 35
			var scroll_begin = document.getElementById("scroll_begin");
			var scroll_end = document.getElementById("scroll_end");
			var scroll_div = document.getElementById("scroll_div");
			scroll_end.innerHTML = scroll_begin.innerHTML
			function Marquee() {
				if (scroll_end.offsetWidth - scroll_div.scrollLeft <= 0)
					scroll_div.scrollLeft -= scroll_begin.offsetWidth
				else
					scroll_div.scrollLeft++
			}
			var MyMar = setInterval(Marquee, speed)
			scroll_div.onmouseover = function() {
				clearInterval(MyMar)
			}
			scroll_div.onmouseout = function() {
				MyMar = setInterval(Marquee, speed)
			}
		}
	</script>
</div>
<script type="text/javascript">
	ScrollImgLeft();
</script>
