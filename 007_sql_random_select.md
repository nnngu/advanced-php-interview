## 应用中我们经常会遇到在user表随机调取10条数据来展示的情况，简述你如何实现该功能。

```sql
select * from user where rand() limit 10;
```