## 什么是CSRF攻击？XSS攻击？如何防范？

```
CSRF:https://baike.baidu.com/item/CSRF/2735433
防范方式: CSRF TOKEN, 即提交表单时同时提交一段由服务端渲染表单时生成的token,通过校验token来防范csrf攻击

XSS:https://baike.baidu.com/item/xss/917356
简单来说,XSS就是正常页面执行了用户或黑客提交的前端代码,比如你用了eval('这里执行了用户提交的代码'),
或者你的页面正常解析了用户提交的html代码,如用户提交的个人信息是:<img src="广告连接"><script>window.href="恶意网站连接"</script>,
而你不加过滤转义就入库,然后页面正常解析html代码,最终用户访问这个页面就会跳转到恶意网站 ,这就是XSS
防范方式: 过滤&&转义用户输入(如htmlentities、htmlspecialchars),永久不要信任客户端
```