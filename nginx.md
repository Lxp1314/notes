### nginx变量记录
> 浏览器访问：http://nginx.local/abc?user_name=1&token=xxxxxxxxxx#abc
```
$args: user_name=1&token=xxxxxxxxxx
$body_bytes_sent: 0
$content_length: 
$content_type: 
$document_root: /etc/nginx/html
$document_uri: /abc
$fastcgi_path_info: 
$host: nginx.local
$http_referer: 
$http_user_agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.84 Safari/537.36
$http_cookie: 
$limit_rate: 0
$remote_addr: 192.168.10.1
$remote_port: 64549
$remote_user: 
$request_body_file: 
$request_method: GET
$request_filename: /etc/nginx/html/abc
$request_uri: /abc?user_name=1&token=xxxxxxxxxx
$time_local: 15/Jan/2019:14:42:17 +0800
$query_string: user_name=1&token=xxxxxxxxxx 
$request_time: 0.000
$ssl_protocol: 
$ssl_cipher: 
$status: 200
$scheme: http
$server_protocol: HTTP/1.1
$server_addr: 172.18.0.5
$server_name: nginx.local
$server_port: 80
$uri: /abc
$upstream_status: 
$upstream_addr: 
$upstream_response_time: 
```
