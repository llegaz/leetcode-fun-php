class Solution {
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $ret = null;
        $curr = null;
        $listArr = [];
        while ($head->val !== null) {
            $listArr[] = $head->val;
            $head = $head->next;
        }
        $ret = new ListNode(array_pop($listArr));
        $curr = $ret;
        while(count($listArr)) {
            $curr->next = new ListNode(array_pop($listArr));
            $curr = $curr->next;
        }
        return $ret;
    }
}

