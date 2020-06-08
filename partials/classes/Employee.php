<?php /* EMPLOYEE CLASS */

   // Includes
   @include_once __DIR__ . '/Person.php';

   class Employee extends Person {
      // Properties
      public $job;

      // Constructor
      public function __construct($_complete_name, $_company_id, $_department, $_hourly_wage, $_job){
         parent::__construct($_complete_name, $_company_id, $_department, $_hourly_wage);

         $this->job = $_job;
      }
   }