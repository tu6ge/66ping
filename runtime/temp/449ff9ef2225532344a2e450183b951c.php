<?php /*a:3:{s:54:"D:\www\66ping\application/index/view\feedback\add.html";i:1520255524;s:48:"D:\www\66ping\application/index/view\layout.html";i:1520255422;s:46:"D:\www\66ping\application/index/view\base.html";i:1520160897;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>小茄子聆听</title>
    
<link rel="stylesheet" href="/static/weui.css"/>
<link rel="stylesheet" href="/static/weui-example.css"/>
<link rel="stylesheet" href="/static/libs/jquery-weui/1.2.0/jquery-weui.min.css"/>

    
</head>
<body ontouchstart>
<div class="container" id="container">
    
<div class="page js_show">
    <div class="page__bd">
        <div class="weui-cells__title">
            <div style="float:left;" >反馈内容 </div>
            <div class="weui-cell__ft">
                <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary">发送</a>
            </div>
        </div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__bd">
                    <textarea class="weui-textarea" placeholder="留下您的意见和建议" rows="5"></textarea>
                    <div class="weui-textarea-counter"><span>0</span>/200</div>
                </div>
            </div>
        </div>
        <div class="weui-cells weui-cells_form">
            <div class="weui-cell">
                <div class="weui-cell__bd">
                    <div class="weui-uploader">
                        <div class="weui-uploader__hd">
                            <p class="weui-uploader__title">图片上传</p>
                            <div class="weui-uploader__info">0/2</div>
                        </div>
                        <div class="weui-uploader__bd">
                            <ul class="weui-uploader__files" id="uploaderFiles">
                                <li class="weui-uploader__file" style="background-image:url(./images/pic_160.png)"></li>
                                <li class="weui-uploader__file" style="background-image:url(./images/pic_160.png)"></li>
                                <li class="weui-uploader__file" style="background-image:url(./images/pic_160.png)"></li>
                                <li class="weui-uploader__file weui-uploader__file_status" style="background-image:url(./images/pic_160.png)">
                                    <div class="weui-uploader__file-content">
                                        <i class="weui-icon-warn"></i>
                                    </div>
                                </li>
                                <li class="weui-uploader__file weui-uploader__file_status" style="background-image:url(./images/pic_160.png)">
                                    <div class="weui-uploader__file-content">50%</div>
                                </li>
                            </ul>
                            <div class="weui-uploader__input-box">
                                <!--<input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">-->
                                <div class="weui-uploader__input"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</div>

</div>
<script src="/static/libs/jquery-1.11.0.min.js"></script>
<script src="/static/libs/jquery-weui/1.2.0/jquery-weui.min.js"></script>

<script src="/static/libs/webuploader/0.1.5/webuploader.html5only.js" ></script>
<script>
    var uploader = WebUploader.create({

        // swf文件路径
        swf: BASE_URL + '/js/Uploader.swf',

        // 文件接收服务端。
        server: 'http://webuploader.duapp.com/server/fileupload.php',

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '.weui-uploader__input',

        // 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
        resize: false,
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        },
        //文件上传请求的参数表
        formData:{}
    });
</script>

</body>
</html>