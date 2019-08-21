<?php
class Bank
{
   var $bal=5000;
   private function credit($amt)
   {
       $this->bal+=$amt;
   }
   private function debit($amt)
   {
   	$this->bal-=$amt;
   }
   private function checkbalance()
   {
   	echo $this->bal;
   }
   function login($pin)
   {
        if($pin==1234)
        {
        	$this->credit(12000);
        	$this->debit(3000);
        	$this->checkbalance();
        }
        else
        {
        	echo "Invalid Pin Code";
        }

   }
}

$obj = new Bank();
$obj->login(1234);


?>