<?php

/**
 * =======================================
 * Created by ZHIHUA·WEI
 * Author: ZHIHUA·WEI
 * Date: 2018/6/29
 * Time: 上午 9:08
 * Project: 多图片上传DEMO(可拖拽排序)
 * Power: 接收文件
 * =======================================
 */
//允许上传文件格式
$typeArr = array("jpg", "png", "gif", "jpeg");
//上传路径
$path = "uploads/";

if (isset($_POST)) {
    $name = $_FILES['file_upload']['name'];
    $size = $_FILES['file_upload']['size'];
    $name_tmp = $_FILES['file_upload']['tmp_name'];
    if (empty($name)) {
        echo json_encode(array("error" => "您还未选择图片"));
        exit;
    }
    //获取文件类型
    $type = strtolower(substr(strrchr($name, '.'), 1));

    if (!in_array($type, $typeArr)) {
        echo json_encode(array("error" => "清上传jpg,png或gif类型的图片！"));
        exit;
    }
    //上传大小
    if ($size > 5 * 1024 * 1024) {
        echo json_encode(array("message" => "图片大小已超过5m！"));
        exit;
    }
    $time_str = time() . rand(10000, 99999);
    //图片名称
    $pic_name = $time_str . "." . $type;
    //上传后图片路径+名称
    $pic_url = $path . $pic_name;
    //临时文件转移到目标文件夹
    if (move_uploaded_file($name_tmp, $pic_url)) {
        //这些数据可根据需要进行返回，字段如果修改需要和前端保持一致
        $ret = array(
            'file_id' => $time_str,
            'file_name' => $pic_url,
            'origin_file_name' => $name,
            'file_path' => $pic_url,
            'state' => '1',
        );
        echo json_encode($ret);
    } else {
        $ret = array(
            'message' => "图片上传失败",
            'origin_file_name' => $name,
            'state' => '0',
        );
        echo json_encode($ret);
    }
}