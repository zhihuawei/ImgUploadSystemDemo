# MultiGraphUploadDemo

#### 项目介绍
多图片上传(可拖动排序)系统基于jquery fileupload 插件开发，后台使用php进行数据接收。支持同时上传多张图片，多张图片之间可随意拖动调整位置；支持jpg、gif、png格式上传，建议使用尺寸800x800像素以上、大小不超过1M的正方形图片，上传后的图片将会自动保存。

#### 软件架构
软件架构说明
```
.
│
├── album								//图片资源库
│   ├── album_cover_default.png			//默认覆盖图
│   ├── default_goods_image_240.gif		//默认图片
│   └── uoload_ing.gif					//上传进度
│
├── demo								//系统效果图
│   └──  效果图.png						//效果图
│
├── js									//系统js插件库
│   ├── ajax_file_upload.js
│   ├── drag-arrange.js
│   ├── jquery-1.8.1.min.js
│   ├── jquery.fileupload.js
│   └──  jquery.ui.widget.js
│
├── uploads								//上传文件
│   └── ......							//所有上传的文件
│
├── index.html							//系统项目入口文件
├── upload.php							//项目后台代码文件
│
└── README.md

```


#### 效果展示

效果图
![系统效果图](https://gitee.com/uploads/images/2018/0629/161022_6a886952_880238.png "效果图.png")
