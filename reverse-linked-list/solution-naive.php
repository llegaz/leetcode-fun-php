/***
* best Runtime : 4ms   		best Memory print : 17.2 MB
*
*
*
* OFFICIAL Solution given for
*
* https://leetcode.com/problems/reverse-linked-list/
*
* exercise implemented in PHP - Laurent LEGAZ
*/
/* ------------------------------------------------------------------- */
/* ------------------------------------------------------------------- */
/* ------------------------------------------------------------------- */
class Solution {
    function reverseList($head) {
        $prev = null;
        $curr = $head;
        while ($curr !== null) {
            $tmp = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $tmp;
        }
        return $prev;
    }
}

