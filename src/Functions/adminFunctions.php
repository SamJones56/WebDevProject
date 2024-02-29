<?php

function adminPageRedirect(){
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Check if the 'services' field is set in the POST data
        if (isset($_POST['services'])){
            $selectedService = $_POST['services'];
            
            // Use to load Correct Forms:
            if ($selectedService == 'room') {
                header('Location:addRoom.php');
                exit;
            }
            else if ($selectedService == 'table'){
                header('Location:addResterauntTable.php');
                
            }
            
            else if ($selectedService == 'treatment') {
                header('Location:addTreatment.php');
                exit;
                
                echo "Treatment selected";
            }
            else {
                echo "Invalid selection";
            }
        }
        
    }
    
    function search(){
        //Function to search for pages. Make an admin page template. 
        
    }
    
    function addToDB(){
        
        //Function to ad entry to DB for any of the fields. 
        
    }
    
    
    
}
