<?php
/**
 * 写一个函数，获取一篇文章内容中的全部图片，并下载
 *
 * PHP通过正则表达式获取网页中的所有图片，用到的函数有：file_get_contents() 函数把整个文件读入一个字符串中，preg_match_all函数进行全局正则表达式匹配，array_unique函数去除数组中重复的值
 */

$url = "http://sports.qq.com/photo/?pgv_ref=aio";

// file_get_contents() 函数把整个文件读入一个字符串中
$string = file_get_contents($url);

// preg_match_all函数进行全局正则表达式匹配。
preg_match_all("/<img([^>]*)\s*src=('|\")([^'\"]+)('|\")/",
    $string, $matches); //带引号
//preg_match_all("/<img([^>]*)\ssrc=([^\s>]+)/",$string,$matches);//不带引号

$new_arr = array_unique($matches[0]); // 去除数组中重复的值
foreach ($new_arr as $key) {
    echo $key . "</br>";
}