<?php

    function product_exists(){
        if(isset($_SESSION["loggued_on_use"]))
        {
            $count = 0;
            foreach($_SESSION["cart"] as $keys => $values)  
            {  
                if($values["item_id"] === $_POST["h_id"])  
                {  
                        return ($count);
                }
                $count++; 
            }
        }
        return (-1);
    }



session_start();  
 $connect = mysqli_connect("localhost", "root", "123456", "vz_shop");  
 if(isset($_POST["add_to_cart"]))  
 {  
    if(!($_SESSION["loggued_on_use"] === ''))
    { 
          if(isset($_SESSION["cart"]))  
          {  
               $item_array_id = array_column($_SESSION["cart"], "item_id");  
               if(!in_array($_GET["id"], $item_array_id))  
               { 
                    if (($key_prod = product_exists()) != -1){
                        $_SESSION["cart"][$key_prod]['item_quantity']++;
                    } else {
                        $count = count($_SESSION["cart"]);  
                        $item_array = array(
                            'item_image'          =>     $_POST["h_image"],
                            'item_id'               =>     $_POST["h_id"],  
                            'item_name'               =>     $_POST["h_name"],  
                            'item_price'          =>     $_POST["h_price"],  
                            'item_quantity'          =>     $_POST["h_quantity"]                                                     
                         );  
                         $_SESSION["cart"][$count] = $item_array;
                    }
                      
                    /* PLACE FOR POPUP WINDOW - SUCCESSES EDIT*/ ;
               }  
               else  
               {  
                    /* PLACE FOR POPUP WINDOW - EXCEPTION NO ID*/  
               }  
          }  
          else  
          {  
               $item_array = array(
                    'item_image'          =>     $_POST["h_image"],
                    'item_id'               =>     $_POST["h_id"],  
                    'item_name'               =>     $_POST["h_name"],  
                    'item_price'          =>     $_POST["h_price"],  
                    'item_quantity'          =>     $_POST["h_quantity"]                    
               );  
               $_SESSION["cart"][0] = $item_array;
               /* PLACE FOR POPUP WINDOW - SUCCESSES NEW*/  
          }
    } else{
        /* PLACE REDIRECT - ASK LOGIN (echo '<script>window.location="index.php"</script>';)*/
    }
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["cart"] as $keys => $values)  
           {  
                if($values["item_id"] === $_GET["id"])  
                {  
                     unset($_SESSION["cart"][$keys]);  
                     /* PLACE FOR POPUP WINDOW - REMOVE*/    
                }  
           }  
      }  
 } 
?>