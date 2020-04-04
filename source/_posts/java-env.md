---
title: 安装JDK和配置Java环境
date: 2020-04-03 15:35:00
tags:
cover: https://wx1.sinaimg.cn/mw690/90861b86gy1gdh37lb27ij20gg0a9q2w.jpg
coverWidth: 1200
coverHeight: 750
---
# Java环境搭建
进行java开发，java环境搭建是最开始的也是最重要的一步。其实不只是开发，很多软件的运行都要基于java环境，下面就由鄙人来讲一讲如何搭建java环境吧（*下面的例子是基于windows 10 操作系统*）
<!--more-->
## Java 下载与安装
> 搭建java环境，首先要[下载并安装java](https://www.java.com/zh_CN/download)。下载完成后，打开安装。一般情况下，一直点击下一步就行（想修改安装目录可以自行修改），安装大概过程如下图
> 
![图片1](https://wx1.sinaimg.cn/mw690/90861b86gy1gdh1rbhvidj20dz0am0sw.jpg)
![图片2](https://wx1.sinaimg.cn/mw690/90861b86gy1gdh1red5oej20dv0almxg.jpg)

## 配置系统环境变量
> java安装完成后，就要开始配置java的环境变量了，以win10为例，配置过程如下图所示
>
1. 右键我的电脑，选择属性
![图片3](https://wx1.sinaimg.cn/mw690/90861b86gy1gdh1ryb7k4j209x0b3abq.jpg)
<br />
2. 选择高级系统设置
![图片4](https://wx1.sinaimg.cn/mw690/90861b86gy1gdh1s1wmtkj20uw0ftmym.jpg)
<br />
3. 选择高级 -> 环境变量
![图片5](https://wx1.sinaimg.cn/mw690/90861b86gy1gdh1s4krozj20d90gljrn.jpg)
<br />
4. 找到下方的系统变量，点击新建，变量名填写**JAVA_HOME**，变量值填写刚刚安装的java路径，点击确定
![图片6](https://wx4.sinaimg.cn/mw690/90861b86gy1gdh1s78zpbj20hb0icdgf.jpg)
<br />
5. 找到系统变量Path，点击编辑
![图片7](https://wx2.sinaimg.cn/mw690/90861b86gy1gdh1sa4u25j20h80ibaan.jpg)
<br />
6. 选择新建，填写 **%JAVA_HOME%\bin**，表示java的bin文件夹路径，（如果非win10版本，则在Path最后追加 **%JAVA_HOME%\bin;** 若Path最后没有分号“;”，则需追加 **;%JAVA_HOME%\bin;** 用来跟前面的路径分隔）
![图片8](https://wx4.sinaimg.cn/mw690/90861b86gy1gdh1szk0c5j20ek0fm74x.jpg)
<br />
**至此，环境变量已经配置完成**

## 检验是否配置成功
1. 按 win + R 打开运行窗口，输入cmd打开命令行
![图片9](https://wx3.sinaimg.cn/mw690/90861b86gy1gdh1t2s2dqj20b206dweh.jpg)
<br />
2. 入 java -version，就能看到java的版本信息，如下图所示，证明已经安装配置成功
![图片10](https://wx2.sinaimg.cn/mw690/90861b86gy1gdh1t5ewdwj20r60e8jrd.jpg)