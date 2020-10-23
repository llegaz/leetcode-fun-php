/***
* best Runtime : 4ms   		best Memory print : 17.7 MB
*
*
*
* 1st submissions for 
*
* https://leetcode.com/problems/reverse-linked-list/
*
* exercise  - Laurent LEGAZ
*/
/* ------------------------------------------------------------------- */
/* ------------------------------------------------------------------- */
/* ------------------------------------------------------------------- */
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

class Solution {
    private $nextNode = null;
    private $currNode = null;
    private $startNode = null;
    private $retListArr = [];

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $this->recursiveReverseList($head);
        //var_dump($this->startNode);
        return $this->startNode;
    }

    /**
     * REcursive attempt
     * 
     * @param ListNode $head
     * @return ListNode
     */
    function recursiveReverseList ($head) {
        if ($head->next === null) {
            // stop condition
            $this->startNode = new ListNode($head->val);
            return $this->startNode;
        }
        $prevNode = $this->recursiveReverseList($head->next);
        // current node
        return $prevNode->next = new ListNode($head->val);
    }

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function iterativeReverseList($head) {
        while ($head->val !== null) {
            $this->retListArr[] = $head->val;
            $head = $head->next;
        }
        while(count($this->retListArr)) {
            if ($this->nextNode === null) {
                // init
                $this->startNode = $this->currNode = new ListNode;
            } elseif ($this->nextNode instanceof ListNode) {
                //echo "ListNode OK" . PHP_EOL;
                $this->currNode = $this->nextNode;
            }
            $this->nextNode = new ListNode;
            $this->currNode->val = array_pop($this->retListArr);
            $this->currNode->next = $this->nextNode;
        }
        $this->currNode->next = null;
        return $this->startNode;
    }
}

