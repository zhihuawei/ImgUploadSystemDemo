# MultiGraphUploadDemo

#### 项目介绍
多图片上传(可拖动排序)系统基于jquery fileupload 插件开发，后台使用php进行数据接收。支持同时上传多张图片，多张图片之间可随意拖动调整位置；支持jpg、gif、png格式上传，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存。

#### 软件架构
软件架构说明
```
.
│
├── album         						//图片资源库
│   ├── album_cover_default.png			//默认覆盖图
│   ├── default_goods_image_240.gif		//默认图片
│   └── uoload_ing.gif					//上传进度
│
├── demo          						//系统效果图
│   └──  效果图.png						//效果图
│
├── js             						//系统js插件库
│   ├── ajax_file_upload.js
│   ├── drag-arrange.js
│   ├── jquery-1.8.1.min.js
│   ├── jquery.fileupload.js
│   └──  jquery.ui.widget.js
│
├── uploads          					//上传文件
│   └── ......        					//所有上传的文件
│
├── index.html          //系统项目入口文件
├── upload.php            //项目后台代码文件
│
└── README.md            //应用接口服务，名称自取，可多组

```


#### 安装教程

1. xxxx
2. xxxx
3. xxxx

#### 使用说明

1. xxxx
2. xxxx
3. xxxx

#### 参与贡献

1. Fork 本项目
2. 新建 Feat_xxx 分支
3. 提交代码
4. 新建 Pull Request


#### 码云特技

1. 使用 Readme\_XXX.md 来支持不同的语言，例如 Readme\_en.md, Readme\_zh.md
2. 码云官方博客 [blog.gitee.com](https://blog.gitee.com)
3. 你可以 [https://gitee.com/explore](https://gitee.com/explore) 这个地址来了解码云上的优秀开源项目
4. [GVP](https://gitee.com/gvp) 全称是码云最有价值开源项目，是码云综合评定出的优秀开源项目
5. 码云官方提供的使用手册 [http://git.mydoc.io/](http://git.mydoc.io/)
6. 码云封面人物是一档用来展示码云会员风采的栏目 [https://gitee.com/gitee-stars/](https://gitee.com/gitee-stars/)