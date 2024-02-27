<?php
namespace Hotel;

abstract class Reservation
{
    
    private $reservationNumber; //Will be auto Incremented. 
    private $loginId = 1;//Just for now 

        
 
        // Constructor
        public function __construct($reservationNumber, $loginId){
            $this->reservationNumber = $reservationNumber;
            $this->loginId = $loginId;
           
        }
        
        // Method to get reservation information
        public function getReservationInfo() {
            return "Reservation Number: " . $this->reservationNumber . ", Login ID: " . $this->loginId;
        }
    }
    


?>
