<?php /* PERSON CLASS */

   class Person {
      // Properties
      public $complete_name;
      public $company_id;
      public $department;
      public $hourly_wage;

      // Constructor
      public function __construct($_complete_name, $_company_id, $_department, $_hourly_wage){
         $this->complete_name = $_complete_name;
         $this->company_id = $_company_id;
         $this->department = $_department;
         $this->hourly_wage = number_format($_hourly_wage, 2) . ' €';
      }

      // Methods
      public function monthlySalary($num_month){
         // Throw Exception
         if ( !is_int($num_month) ){
            throw new Exception('INVALID VALUE, NUMERIC VALUE REQUIRED');
         }

         return number_format(( (($this->hourly_wage * 8) * 30) * $num_month), 2) . ' €';
      }
   }