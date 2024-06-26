# Typecho-Simple-Mibiao

基于 Typecho 打造的简单米表系统。

功能简单，安装完成即可使用。

## 版本信息
Typecho：```1.2.1```  
Typecho-Simple-Mibiao(TSM)：```1.0.5```

## 功能介绍

- [x] 域名管理；
  - 支持设置所属平台；
  - 支持设置出售页地址；
  - 支持设置标签（暂未使用）；

- [x] 主题选择；
  - 默认使用简单米表主题；
  - 集成[小票米表主题](https://github.com/BitCodepot/xp_mb)，感谢 @Sen.ge 分享；
  - 集成一个[米表网主题](http://1.demo1.mb.cn/)，感谢 [米表网](http://www.mb.cn/)；

- [x] 主题自定义设置；
- [x] 访问计数；
  - 需自行在域名服务商解析配置中，设置域名跳转地址为：```米表域名?referrer=售卖域名```
- [x] API接口(1.0.1新增)
  - 插件来源：[https://github.com/moefront/typecho-plugin-Restful](https://github.com/moefront/typecho-plugin-Restful)，感谢@moefront
  - 增加一个获取域名详情的接口，可供外部调用(可方便做数据展示)；
  - 接口地址：```/api/post?cid=xxx``` or ```/index.php/api/post?cid=xxx```

## 部署
### 环境变量
```plaintext
驱动：TYPECHO_ADAPTER_NAME
表前缀：TYPECHO_PREFIX
地址：TYPECHO_HOST
端口：TYPECHO_PORT，例如：3306
用户名：TYPECHO_USERNAME
密码：TYPECHO_PASSWORD
编码：TYPECHO_CHARSET
数据库名：TYPECHO_NAME
引擎：TYPECHO_ENGINE，例如：InnoDB
证书：TYPECHO_SSL_CA
```
### 主机/服务器部署
- 如需全新安装，可先删除```config.inc.php```文件，然后访问你的域名即可进入安装流程；  
- 如需使用```环境变量```，请将```config.inc.php```文件中的```$_ENV```替换为```$_SERVER```，然后部署到主机上即可；  
### Vercel
- 请先```Fork```本仓库
- 配置环境变量
- 然后在```Vercel```上进行部署；
### 参考资料
部署问题可参考：https://www.bmqy.net/2663.html
## 更新日志
- 1.0.5
  - 修复后台编辑bug；
  
- 1.0.4
  - 修复QQ客服链接失效问题；
  
- 1.0.3
  - 修复一些无关紧要的```bug```；
  - 支持部署到```Vercel```；
  
- 1.0.2
  - 简单米表主题支持自定义css样式；  
  - 简单米表主题支持当前访问域名标记；

- 1.0.1  
  - 更新api支持；
  
- 1.0.0  
  - 上线

## 截图预览

### 前台界面
![](https://image.bmqy.net/upload/tsm1.png)
![](https://image.bmqy.net/upload/tsm2.png)
![](https://image.bmqy.net/upload/xp1.png)

### 后台界面
![](https://image.bmqy.net/upload/tsma1.png)
![](https://image.bmqy.net/upload/tsma2.png)
![](https://image.bmqy.net/upload/tsma3.png)
![](https://image.bmqy.net/upload/tsma4.png)
![](https://image.bmqy.net/upload/tsma5.png)
![](https://image.bmqy.net/upload/tsma6.png)

### 访问量图表
![](https://image.bmqy.net/upload/photo_2024-02-26_18-10-08.jpg)
截图中软件[HTTPWidget](https://apps.apple.com/app/id6447097633)

## 联系作者
[@chanel](https://t.me/tcbmqy)

[@group](https://t.me/tgbmqy)
