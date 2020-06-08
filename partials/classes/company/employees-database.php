<?php /* EMPLOYEES DATABASE */

   // Includes
   @include_once __DIR__ . '/../Employee.php';

   // Employees
   $employees = [
      ['Tevin Haynes', 'R134', 'Production', rand(5.25, 6.25), 'Backend Developer'],
      ['Henri Alcock', 'B522', 'Marketing', rand(5.25, 6.25), 'Media and Social Media'],
      ['Kirk Sharp', 'S398', 'Human Resources', rand(5.25, 6.25), 'Employees recruiting and Remuneration policies'],
      ['Chanel Haas', 'A923', 'Sales', rand(5.25, 6.25), 'Customers recruiting'],
      ['Charlton Farley', 'M847', 'Production', rand(5.25, 6.25), 'Frontend Developer'],
      ['Areebah Crane', 'V639', 'Production', rand(5.25, 6.66), 'Junior Developer']
   ];

   $employees_list = [];

   foreach ($employees as $employee){
      $employees_list[] = new Employee(...$employee);
   }