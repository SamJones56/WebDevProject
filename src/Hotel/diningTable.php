<?php
namespace Hotel;

class diningTable{

    private $capacity;
    private $table_no;

    
    public function __construct($table_no, $capacity)
    {
        $this->capacity = $capacity;
        $this->table_no = $table_no; 
     
    }
    /**
     * @return mixed
     */
    public function getTable_no()
    {
        return $this->table_no;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }


    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

}


?>



 
    