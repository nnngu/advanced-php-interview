<?php
/**
 * 从扑克牌中随机抽5张牌，判断是不是一个顺子,即这5张牌是连续的,JQK用11、12、13表示
 *
 * 思路：既然是顺子,那么肯定没有对子,找到最小的值后,顺序加1看是否存在,如果都存在,则为顺子
 */

function seriesCheck($data)
{
    $min = min($data);
    for ($i = $min; $i < $min + 5; ++$i) {
        if (!in_array($i, $data)) {
            return false;
        }
    }
    return true;
}

var_dump(seriesCheck([1, 3, 5, 2, 4]));
var_dump(seriesCheck([10, 13, 11, 12, 14]));
var_dump(seriesCheck([1, 3, 5, 7, 9]));
