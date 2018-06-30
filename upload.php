<?php

/**
 * =======================================
 * Created by ZHIHUA·WEI
 * Author: ZHIHUA·WEI
 * Date: 2018/6/30
 * Time: 上午 8:49
 * Project: 医美商城
 * Power: 商家功能模块-商家分组控制器
 * =======================================
 */

$typeArr = array("jpg", "png", "gif", "jpeg"); //允许上传文件格式
$path = "uploads/"; //上传路径

if (isset($_POST)) {
    $name = $_FILES['file_upload']['name'];
    $size = $_FILES['file_upload']['size'];
    $name_tmp = $_FILES['file_upload']['tmp_name'];
    if (empty($name)) {
        echo json_encode(array("error" => "您还未选择图片"));
        exit;
    }
    $type = strtolower(substr(strrchr($name, '.'), 1)); //获取文件类型

    if (!in_array($type, $typeArr)) {
        echo json_encode(array("error" => "清上传jpg,png或gif类型的图片！"));
        exit;
    }
    if ($size >5*1024*1024) { //上传大小
        echo json_encode(array("message" => "图片大小已超过5m！"));
        exit;
    }
	$time_str = time() . rand(10000, 99999);
    $pic_name = $time_str . "." . $type; //图片名称
    $pic_url = $path . $pic_name; //上传后图片路径+名称
    if (move_uploaded_file($name_tmp, $pic_url)) { //临时文件转移到目标文件夹
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
?>