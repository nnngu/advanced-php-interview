## nginx的log_format配置如下：

```
log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
                       '$upstream_response_time '
                       '$status $body_bytes_sent "$http_referer" '
                       '"$http_user_agent" "$http_x_forwarded_for"';
```

从今天的nginx log文件 access.log中：

- a、列出"request_time"最大的20行？

- b、列出早上10点访问量做多的20个url地址？

a: `cat /usr/local/var/log/nginx/access.log|sort -nrk9|head -2`

b: `grep "07/May/2018:10:" /usr/local/var/log/nginx/access.log|awk '{print $12}'|sort -rn|uniq -c|head -20`