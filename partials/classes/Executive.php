<?php /* EXECUTIVE CLASS */

   // Includes
   @include_once __DIR__ . '/Person.php';

   class Executive extends Person {
      // Properties
      public $management_department;

      // Constructor
      public function __construct($_complete_name, $_company_id, $_department, $_hourly_wage, $_management_department){
         parent::__construct($_complete_name, $_company_id, $_department, $_hourly_wage);

         $this->management_department = $_management_department;
      }
   }