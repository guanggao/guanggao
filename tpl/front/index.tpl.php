<?php include_once TPL_FRONT."/header.tpl.php"?>
<div class="index_header">
		<div class="header_info">
			<a href="/index.php" class="logo" alt="多麦CPS广告联盟">多麦CPS广告联盟</a>
			<div class="top_nav">
			<div class="fl" style="height:20px;margin-right:5px;">
				<a id="setHomepage" href="javascript:void(0);">设为首页</a> <span class="gray">|</span> <a href="javascript:bookmark();">加入收藏</a> </div>
				<div class="fl" style="height:20px;"></div>
			</div>
		</div>
		<div id="nav">
			<div class="overall">
				<ul>
					<li class="selected"><a href="/index.php" title="首页">首页</a></li>
					<li><a href="/index.php?m=article&a=view&cate_id=35&id=97" title="网站主">网站主</a></li>
					<li><a href="/index.php?m=article&a=view&cate_id=41&id=102" title="广告主">广告主</a></li>
					<li><a href="/index.php?m=article&a=view&cate_id=15&id=130" title="赚钱教程">赚钱教程</a></li>
					<li><a href="/index.php?m=article&a=artlist&cate_id=5" title="广告活动">广告活动</a></li>
				</ul>
				<div class="search">
					<form action="/index.php?m=article&a=artlist&cate_id=0" method="post">
						<input name="keyword" type="text" class="input">
						<input type="submit" value="搜索" class="btn">
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="/styles/site/idTabs.js" type="text/javascript"></script>
<script src="/styles/site/img_slide.js" type="text/javascript"></script>
<script>
	$(function() {
		$("#adv1").Slide({
			effect : "scroolY",
			speed : "normal",
			timer : 3000
		});
	})

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

<div class="clearfix">
	<!--新的banner-->
	<div class="throughbar">		
		<script type="text/javascript" src="/styles/site/slideimg.js"></script>
		<div class="banner fl">
        	<div id="J_SlidePlayer_510" class="tb-slide">
              <ul class="img-box" style="top: -1350px;">
              	<li><a href="" target="_blank"><img src="/styles/site/51f20e8357430.jpg" alt="" border="0" width="690" height="270"></a></li>
			</ul>
            <ul class="flash_item"><li class="">1</li></ul>
			</div>
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
				<form action="/index.php?m=siter&a=dologin" method="post" id="siterform">
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
									<a href="/index.php?m=siter&a=forget_pwd" class="f999">忘记密码?</a>
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
					<a href="/index.php?m=siter&a=register">10秒钟免费注册</a>
				</div>
							</div>
			<!--广告主登陆  -->
			<div class="tabs_con" style="display: none;">
				<form method="post" action="/index.php?m=adser&a=dologin" id="adserform">
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
					<a href="/index.php?m=article&a=view&cate_id=16&id=133">联系多麦</a>
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
			<h3><a href="/index.php?m=article&a=artlist&cate_id=5">更多&gt;&gt;</a>	多麦公告</h3>
			<ul>
				<li>
					<em class="orange_bg">1</em>
					<a href="/index.php?m=article&a=notice&cate_id=5&id=8793">
						<font color="red">						【好消息】多麦商家数据咨询客服功能正式上线了						</font>					</a>
					<span class="fl">07-09</span>
				</li>			
			</ul>
		</div>
		<div class="news_box">
			<h3><a href="/index.php?m=article&a=artlist&cate_id=51">更多&gt;&gt;</a>网站主激励</h3>
			<ul>
				<li>
					<em class="orange_bg">1</em>
					<a href="/index.php?m=article&a=notice&cate_id=51&id=8406">
						<font color="red">						【1号店】5周年庆,7月整月佣金提升开始啦~~！						</font>					</a>
					<span class="fl">07-01</span>
				</li>
			</ul>
		</div>
		<div class="news_box last">
			<h3>
				<a href="/index.php?m=article&a=artlist&cate_id=52">更多&gt;&gt;</a>用户促销</h3>
			<ul>
				<li>
					<em class="orange_bg">1</em>
					<a href="/index.php?m=article&a=notice&cate_id=52&id=9393">
						<font color="red">						【1号店】5周年庆最后一波，疯团3天						</font>					</a>
					<span class="fl">07-26</span>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<!--公告、咨询和详情结束-->
	<!--广告-->
	<div class="throughbar">
	<div class="fl"><a href=""><img src="/styles/site/480x80.jpg" alt="拍鞋网" width="480" height="80"></a></div>
	<div class="fr"><a href=""><img src="/styles/site/yihaodian.jpg" alt="yihaodian" width="480" height="80"></a></div>	
	<div class="clear"></div>
	</div>
	<!--广告结束-->
	<!--活动-->
	<div id="index_act" class="throughbar">
		<ul class="tabs">
			<li class="selected">推荐活动</li>
			<li>最新活动</li>
		</ul>
		<div class="clear"></div>
		<!-- 推荐活动-->
		<div class="tabs_con" style="display: block;">
			<dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=58">
						<img src="./多麦CPS广告联盟_home_files/m_51b18456079cf.jpg" width="150" height="53" alt="1号店cps推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=58">
														1号店cps推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 7.7% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=61">
						<img src="./多麦CPS广告联盟_home_files/m_517c8fdbce285.jpg" width="150" height="53" alt="京东商城CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=61">
														京东商城CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.7% - 5.6% 0元 - 43元</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=399">
						<img src="./多麦CPS广告联盟_home_files/m_51a33012de8c4.jpg" width="150" height="53" alt="糯米网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=399">
														糯米网CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 4.9% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=313">
						<img src="./多麦CPS广告联盟_home_files/m_51cac21cae653.jpg" width="150" height="53" alt="1号商城CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=313">
														1号商城CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0% - 7.7% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=304">
						<img src="./多麦CPS广告联盟_home_files/m_50c04f31869fb.jpg" width="150" height="53" alt="乐蜂网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=304">
														乐蜂网CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：2% - 15% </p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=299">
						<img src="./多麦CPS广告联盟_home_files/m_50a1ef6e4d0ad.jpg" width="150" height="53" alt="大众点评网">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=299">
														大众点评网													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：4% </p>
				</dd>
			</dl>
			<div class="clear"></div>
		</div>
		<!--最新活动  -->
		<div class="tabs_con" style="display: none;">
			<dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=435">
						<img src="./多麦CPS广告联盟_home_files/m_51e62ffa3b118.jpg" width="150" height="53" alt="网酒网CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=435">
							<font color="red">							网酒网CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:14%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=405">
						<img src="./多麦CPS广告联盟_home_files/m_51ad47c9cb45d.jpg" width="150" height="53" alt="华阳彩票CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=405">
														华阳彩票CPS推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：5.00%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=423">
						<img src="./多麦CPS广告联盟_home_files/m_51d6571a73fcf.jpg" width="150" height="53" alt="天品网ROI CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=423">
							<font color="red">							天品网ROI CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:18%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=396">
						<img src="./多麦CPS广告联盟_home_files/m_519deb2dd3e07.jpg" width="150" height="53" alt="比度克CPS">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=396">
														比度克CPS													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：17.5%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=414">
						<img src="./多麦CPS广告联盟_home_files/m_51d3ec67e5114.jpg" width="150" height="53" alt="窝夫小子CPS推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=414">
							<font color="red">							窝夫小子CPS推广							</font>						</a>
					</p>
					<p>类型:cps</p>
					<p style="height: 20px;overflow:hidden;">佣金:14%</p>
				</dd>
			</dl><dl>
				<dt>
					<a href="/index.php?m=siter_act&a=view&ads_id=390">
						<img src="./多麦CPS广告联盟_home_files/m_519d8214cdd3a.jpg" width="150" height="53" alt="唯品会移动cps推广">
					</a>
				</dt>
				<dd>
					<p>
						<a href="/index.php?m=siter_act&a=view&ads_id=390">
														唯品会移动cps推广													</a>
					</p>
					<p>类型：CPS</p>
					<p style="height: 20px;overflow:hidden;">佣金：0.7%-3.5%</p>
				</dd>
			</dl>
			<div class="clear"></div>
		</div>
	</div>
	<!--活动结束-->
	<!--联系电话和广告-->
	<div class="throughbar">
		<div class="fl">
			<img src="/styles/site/contact.jpg" width="320" height="61" alt="联系我们">
		</div>
		<div class="fr">
					<a href="" target="_blank">
				<img src="/styles/site/51f5ec84746ff.jpg" width="650" height="61" alt="唯品会非常10号">
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
<script type="text/javascript">	ScrollImgLeft();</script>
<?php include_once TPL_FRONT."/footer.tpl.php"?>