## 两条相交的单向链表，如何求它们的第一个公共节点

思路：

1. 如果两个链表相交，则从相交点开始，后面的节点都相同，即最后一个节点肯定相同；
2. 从头到尾遍历两个链表，并记录链表长度，当二者的尾节点不同，则二者肯定不相交；
3. 尾节点相同，如果A长为LA，B为LB，如果LA>LB,则A前LA-LB个先跳过，


   然后二者一起向后遍历，直到遇到相同的节点；LA<LB类似处理
   因为第一个公共节点距起始节点的距离start_a满足： LA - start_a == LB - start_b。