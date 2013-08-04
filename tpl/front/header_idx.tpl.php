<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="">
<title>多麦CPS广告联盟</title>
<script type="text/javascript" src="/styles/site/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/styles/site/common.js"></script>
<link rel="stylesheet" type="text/css" href="/styles/site/reset.css">
<link rel="stylesheet" type="text/css" href="/styles/site/common.css">
<link rel="stylesheet" type="text/css" href="/styles/site/style.css">
<script type="text/javascript">
	function bookmark() {
		var title = document.title
		var url = document.location.href
		if (window.sidebar)
			window.sidebar.addPanel(title, url, "");

		else if (window.opera && window.print) {
			var mbm = document.createElement('a');
			mbm.setAttribute('rel', 'sidebar');
			mbm.setAttribute('href', url);
			mbm.setAttribute('title', title);
			mbm.click();
		} else if (document.all) {
			window.external.AddFavorite(url, title);
		} else {
			alert('收藏失败,请按Ctrl + D 进行收藏');
		}
	}
</script>
</head>
<body>
<div class="index_header">
		<div class="header_info">
			<a href="/" class="logo" alt="多麦CPS广告联盟">广告联盟</a>
			<div class="top_nav">
			<div class="fl" style="height:20px;margin-right:5px;">
				<a id="setHomepage" href="javascript:void(0);">设为首页</a> <span class="gray">|</span> <a href="javascript:bookmark();">加入收藏</a> </div>
				<div class="fl" style="height:20px;"></div>
			</div>
		</div>
		<div id="nav">
			<div class="overall">
				<ul>
					<li class="selected"><a href="/" title="首页">首页</a></li>
					<li><a href="" title="网站主">网站主</a></li>
					<li><a href="" title="广告主">广告主</a></li>
					<li><a href="" title="赚钱教程">赚钱教程</a></li>
					<li><a href="" title="广告活动">广告活动</a></li>
				</ul>
				<div class="search">
					<form action="" method="post">
						<input name="keyword" type="text" class="input">
						<input type="submit" value="搜索" class="btn">
					</form>
				</div>
			</div>
		</div>
	</div>