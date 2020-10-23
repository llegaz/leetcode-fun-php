/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{
    /**
     * @param ListNode $head
     *
     * @return ListNode
     */
    function reverseList($head) {
        $arr = [];
        while ($head) {
            $arr[] = $head;
            $head = $head->next;
        }

        $reverted = new ListNode(array_pop($arr)->val);
        $node = $reverted;
        while (count($arr)) {
            $node->next = new ListNode(array_pop($arr)->val);
            $node = $node->next;
        }

        return $reverted;
    }
}
