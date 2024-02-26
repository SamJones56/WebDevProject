<?php
namespace Hotel;

 class TableReservation extends Reservation
{
    private $thisTable;
    
    private $date ;
    private $time;
    private $no_attendees;   
    private $table_id;
    //private $customer_id = Customer.CustomerID.
  
    
 public function __construct($date, $time, $no_attendees, $table_id) {
 
        //Auto Assigned from DB 
        parent::__construct($reservationNumber, $loginId);
        
        //WEB UI Form Input
        $this->date = $_POST["date"];
        $this->time = $_POST["time"];
        $this->no_attendees =$_POST["no_attendees"];
 
  
        //Gets ID of table on booking & sets tabkle no as the entry in the DB. 
        $this->table_id = thisTable.getTable_no();
        
      
    }
}

?>


     
