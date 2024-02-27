<?php
namespace Hotel;

final class RoomReservation extends Reservation
{
    private $date;
    private $checkin;
    private $checkout;
    private $total_price;
    private $paidStatus;
    
    
    // Constructor
    public function roomReservation(){
      super(); 
      
    }
//     room_id INT,
//     customer_id INT,
//     FOREIGN KEY (room_id) REFERENCES Rooms(room_no),
//     FOREIGN KEY (customer_id) REFERENCES Customer(customer_id)
    
    
}

?>