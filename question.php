1.购物车页面刷新问题:
	BuyController控制器中,跳转代码为啥写在if判断中能成功,写在if判断外页面显示重定向;
2.购物车添加新商品时,购物车页面总是迟一节拍;
POST /http/3.php HTTP/1.1
Host:localhost
content-type:multipart/form-data,boundary=AaB03x
content-length:140

--AaB03x
Content-Disposition: form-data; name="intro"; filename="a.txt"
Content-Type: text/plain

ni hao my intro
--AaB03x--