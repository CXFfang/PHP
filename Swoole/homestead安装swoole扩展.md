# homestead安装swoole扩展

1.配置好ubuntu的国内镜像源并更新  
2.查看php版本，并安装对应php版本的dev
````
sudo apt install php7.3-dev
````
3.配置pecl
````
sudo pecl channel-update pecl.php.net
sudo pear clear-cache
sudo pear update-channels
sudo pear upgrade
````

4.安装php的swoole扩展
````
sudo pecl install swoole
````

5.在php.ini中增加extension=swoole.so
````
php -i | grep php.ini
sudo vim /etc/php/7.3/cli/php.ini

>i

// 在php.ini的尾部增加如下代码

extension=swoole.so

Esc->:wq
````
6.重启php
````
sudo service php7.3-fpm restart
````
7.查看php是否成功安装swoole模块
````
php -m | grep swoole
````


### 补充
>默认数据库账号密码  
账号： homestead 密码：secret  
默认 ssh 账号密码  
账号：vagrant 密码：vagrant  
创建默认 root 用户  
sudo passwd root  