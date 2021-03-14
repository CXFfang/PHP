<?php

0==null==false;
0!==null!==false;


// << 这个表示二进制
// 1 << 0 等于 001 等于 1
// 1 << 1 等于 010 等于 2
// 1 << 2 等于 100 等于 4

// 可用于常量值,结果一样
const TEST        = 1 << 0;
const TEST        =1;

// 优点： 取值的话比较方便，而且性能高，比in_array()性能高


compact(); // 函数创建一个包含变量名和它们的值的数组。

$filter = [['effect_time'=>111,'kind_name'=>22,'part_name'=>33]];
$kinds = collect($filter)->pluck('effect_time', 'kind_name')->toArray();
$parts = collect($filter)->pluck('effect_time', 'part_name')->toArray();
dd(compact('kinds', 'parts')); // 等同以下写法
dd(compact(['kinds'], 'parts'));

// 结果：
 [
  "kinds" =>  [
        22 => 111
    ],
  "parts" =>  [
        33 => 111
    ],
  ];


// 获取当天时间 （当天凌晨时间）
strtotime(date("Y-m-d",time()));

// php函数
array_filter(); // 过滤数组空值
array_unique(); // 数组去重
$data = ['id' => 1];
array_column($data,'id'); // 返回输入数组中某个单一列的值，返回数组中，id列的值。返回值为数组


// php 字符串函数
$fileUrl= 'http://baidu.com/abc.xlsx';
$name = urldecode(end(explode('/', $fileUrl)));
dd($name); // abc.xlsx


mb_strlen(); // 统计字符串长度

substr($str,0,1); // 字符串截取 0开始，截取1位
$str = 'N111111';
dd(substr($str,0,1)); // N

str_replace(); // 字符串替换
$time = 'N11111';
dd(str_replace('N', '', $time)); // 把N替换成'',结果 11111


// 日期+1day
$date = '2021-02-21';
$res = strtotime('+1 day', strtotime($date));
$res = date('Y-m-d',$res);
dd($res); // 2021-02-22


// 校验正整数[1,9999]，\d 1-9的整数  {0,3} 0-3位
public function checkNum($num)
{
    // 大于等于0的整数,范围值(0-9999]
    if (preg_match("/(^[1-9]\d{0,3})$/", $num, $parts)) {
        return true;
    } else {
        return false;
    }
}


// 校验日期格式 2021-02-21 00:00:00  |  2021/02/21 00:00:00
 public function checkDateFormat($date)
{
    //匹配日期格式
    if (preg_match(
        "/^([0-9]{4})[\-\/](0\d{1}|[1-9]{1}||1[0-2])[\-\/](0\d{1}|[1-9]{1}|[12]\d{1}|3[01])(\s+(0?[0-9]|1[0-9]|2[0-3])\:(0?[0-9]|[1-5][0-9])\:(0?[0-9]|[1-5][0-9]))$/",
        $date,
        $parts
    )) {
        //检测是否为日期
        if (checkdate($parts[2], $parts[3], $parts[1])) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>