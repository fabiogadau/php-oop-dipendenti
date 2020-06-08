<?php /* EXECUTIVES DATABASE */

   // Includes
   @include_once __DIR__ . '/../Executive.php';

   // Executives
   $executives = [
      ['Ashlee Bender', 'A001', 'General Management', rand(12, 16), 'CEO'],
      ['Danielius Charlton', 'A220', 'Production', rand(8, 10), 'Production Manager'],
      ['Ashlee Bender', 'A098', 'Sales', rand(8, 10), 'Financial Manager']
   ];

   $executives_list = [];

   foreach ($executives as $executive){
      $executives_list[] = new Executive (...$executive);
   }

   // Try and Catch
   try {
      foreach ($executives_list as $executive){
         echo $executive->monthlySalary(12) . '<br>';
         //echo $employee->monthlySalary('12') . '<br>';
      }
   }
   catch (Exception $e){
      echo 'Messagge error: ' . $e->getMessage() . '<br>';
      echo 'Error at line: ' . $e->getLine() . '<br>';
      echo 'Error in file: ' . $e->getFile() . '<br>';
   }