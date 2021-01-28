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

*   #### Configurate the src/config.php whit your url. Like the following style

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

*   #### include the content.php in any where you want to output the calendar

    #### 在任意想要输出日历的地方引用content.php
```html
include("content.php");
```

## Finish! Enjoy your Gitea calendar
## 完成！请享用你的Gitea日历
