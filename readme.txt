使用说明：
	
1、使用先配置数据库，conn.php中修改数据库连接参数，为你自己的参数，其中SQL文件夹中为数据库配置文件。
2、note-send-dispost.php中的17行的$post_data里面的"account" => "你的账号","password" => "你的密码"，修改即可。
3、余额查询功能我这边商家提供的接口文件有问题，暂时没弄。
4、其中大部分功能因为商家提供的接口文档中没写相关接口，都有写缺失，暂时未处理，不过具体功能已有预留。
整体样式需求：

---------------------------分割线----------------------
	框架及其技术：
			框架使用bootstrap3，后台需求用PHP + MySQL的实现。
	顶部的横幅样式的标志，固定顶部，不允许随着页面上下滑动。
	响应式导航栏固定在横幅的下面，不允许随着页面上下滑动。
	面包屑导航样式（实现当前位置）
	主体部分实现功能模块。{
		短信任务 - >发送 - >定时发送 - >批量发送
		彩信任务 - >发送 - >定时发送 - >批量发送
		余额查询-----投诉建议-----退出系统
	}
	底部友情链接及其版权所有。
----------------------------------------分割线-------- --------------------------------
已完成：（2019/3/13/23：00）
	具体顶部的横幅样式标志及其导航栏模块。
已完成：（2019/3/14/21：50）
	明天写全部注释文档。
	完善头部及导航栏。
	面包屑样式写完。
	搭建主体第一版。
	及其底部栏写完。
已完成：（2019/3/15/22：00）
	数据库注意及其表note_ad的建立。（note_ad用于存放账号密码）
	写完的login.php登录主页{
		登录-check.php处理的login.php传来表单信息去验证数据库是否正确，然后写入会话。
		跳转的index.php页面，进入前获取判断用户是否登录（未登录禁止访问）。
		logout.php退出销毁会话。
	}。
	登录模块的实现。
----------------------------------------分割线-------- --------------------------------
2019年4月6号，线上版本第一次提交，展示在->http://www.alone-tree.top/短信平台/note-send.php,网站简陋仅供观看，谢谢
目前项目已废弃
