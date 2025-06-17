<?php
class Node
{
    public $data;
    public $next;
    
    public function __construct($data)
    {
        $this->data = null;
        $this->next = null;
    }
    
}

class linkedList
{
    public $head, $tail;
    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }
    
    public function insertList($data)
    {
        $Node = new Node($data);
        if( $this->head == NULL )
        {
            // insert node 
            
        }
        else
        {
            // insert more nodes 
            
        }
        
    }
    public function dispList()
    {
        while( $this->next != null )
        {
            
        }
    }
}

$obj = linkedlist();
$obj->insertList(10);
$obj->insertList(110);
$obj->insertList(10008);
$obj->dispList();