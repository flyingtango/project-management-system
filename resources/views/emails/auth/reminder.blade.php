<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>重置密码</h2>

		<div>
			为了重置密码，请填写表格： {{ URL::to('password/reset', array($token)) }}.<br/>
			这个链接将在 {{ Config::get('auth.reminder.expire', 60) }} 分钟后过期.
		</div>
	</body>
</html>
