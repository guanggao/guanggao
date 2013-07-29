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