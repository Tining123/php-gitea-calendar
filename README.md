![pic](https://github.com/Tining123/php-gitea-calendar/blob/main/doc/show.png)
## php-gitea-calendar
A php version of the git calendar but for gitea. You could embed it everywhere!

一个PHP版本的GitHub的编程日历，不过是针对Gitea的编程日历！

## Install / 安装
clone this repository

请clone本项目到本地
```bash
git clone https://github.com/Tining123/php-gitea-calendar.git
```
## Import / 引用
### Step 1

*   #### Configurate the src/config.php whit your url. Like the following style.

    #### 请配置src/config.php文件中的url，格式如下
```html
#http://{domian}/api/v1/user/{username}/heatmap
$url = "http://192.168.0.197:7006/api/v1/users/Tining/heatmap";
```

### Step 2

*   #### Make sure you have inport the css file in this repo.

    #### 请确保您引用了该仓库下的CSS文件
```html
<link rel="stylesheet" href="css/style.css">
```

### Step 3

*   #### include the content.php in any where you want to output the calendar.

    #### 在任意想要输出日历的地方引用content.php
```html
include("content.php");
```

More example please check the src/index.php file.
更多样例请参考src/index.php文件


### Finish! Enjoy your Gitea calendar
### 完成！请享用你的Gitea日历


## Development / 开发
### Expand this project to others language / 使用其他语言改写此项目

Please keep the css/js/dist directory. This file keep the appearance of the calendar

请保留css/js/dist三个目录，这支撑了基础的日历外观

### Developing for others git platform / 将本项目更改以适配其他种类git仓库
Gitlab,Gogs...

Please edit the src/content.php file. Here is the major analysis fucntion. Almost every sentens has been commented.

请直接修改 src/content.php文件。这里是主要的分析文件，几乎所有的语句都已经双语注释

## Thanks / 感谢
* [github-calendar](https://github.com/Bloggify/github-calendar)
* [php-simple-html-dom-parser](https://github.com/sunra/php-simple-html-dom-parser)
* [gitea](https://github.com/go-gitea/gitea)

This project was inspire by the github-calendar. However, the analysis file(javascript) was encode and hard to read. To support the Gitea.
I need to rewrite the ajax. However, I was stuck by the 'Access-Control-Allow-Origin'. So I decide to do it in the backend.

The spider tools I choosed is php simple html dom parser. It is a simple framwork having clear code style.

Finally, thanks to Gitea to allow me install git management in my slightly raspeberry pi.

这个项目是由github-calendar启发的，然而，github-calendar不支持Gitea并且压缩过后的JavaScript文件对我来说难以阅读。我需要重写ajax通信。可惜的是，Gitea的接口似乎有跨域问题，为了更快的解决，我决定用后端采纳数据

我才用的爬虫工具是php simple dom parse，很好用并且代码简洁.

最后由衷感谢Gitea，可以让我孱弱的树莓派拥有一个Git仓库


## License
This project is licensed under the MIT License. See the [LICENSE](https://github.com/Tining123/php-gitea-calendar/blob/main/LICENSE) file for the full license text.
