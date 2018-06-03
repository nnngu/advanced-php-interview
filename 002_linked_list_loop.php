<?php
/**
 * 题目：写一段代码判断单向链表中有没有形成环，如果形成环，请找出环的入口处，即P点
 *
 * 定义两个指针slow, fast。slow指针一次走1个结点，fast指针一次走2个结点。如果链表中有环，那么快指针一定会在某一个时刻追上慢指针(slow == fast)。如果没有环，则快指针会第一个走到NULL。
 */

class Node
{
    public $data = null;
    public $next = null;
}

function eatList(Node $node)
{
    $fast = $slow = $node;
    if ($node->data == null) {
        return false;
    }

    while (true) {
        if ($fast->next != null && $fast->next->next != null) {
            $fast = $fast->next->next;      //快指针一次走两步
            $slow = $slow->next;           //慢指针一次走一步
        } else {
            return false;
        }
        if ($fast == $slow) {                //快指针追上慢指针,说明有环
            $p1 = $node;                    //p1指针指向head节点,p2指针指向它们第一次相交的点,然后两个指针每次移动一步,当它们再次相交,即为环的入口
            $p2 = $fast;
            while ($p1 != $p2) {
                $p1 = $p1->next;
                $p2 = $p2->next;
            }
            return $p1;                     //环的入口节点
        }
    }
}