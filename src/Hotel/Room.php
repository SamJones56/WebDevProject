<?php
namespace Hotel;

class Room
{
    private $room_no;
    private $type;
    private $accessibility;
    private $price;
    
    
    public function __construct($room_no, $type, $accessibility, $price)
    {
        $this->room_no = $room_no;
        $this->type = $type;
        $this -> accessibility = $accessibility;
        $this -> price = $price;
    }
    
    /**
     * @return mixed
     */
    public function getRoom_no()
    {
        return $this->room_no;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getAccessibility()
    {
        return $this->accessibility;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $room_no
     */
    public function setRoom_no($room_no)
    {
        $this->room_no = $room_no;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $accessibility
     */
    public function setAccessibility($accessibility)
    {
        $this->accessibility = $accessibility;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    
    
    
}

?>