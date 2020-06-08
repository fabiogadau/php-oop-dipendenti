<?php
   /* PHP OOP e exceptions
      Crea e modellizza classi per gestire i dipendenti di un’azienda.
      Inserire almeno un esempio di utilizzo di exceptions
   */
?>

<?php /* INCLUDES */
   @include_once __DIR__ . '/partials/classes/company/executives-database.php';
   @include_once __DIR__ . '/partials/classes/company/employees-database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OOP Company</title>
   <!-- Stylesheet -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,500&display=swap" rel="stylesheet"> 
   <link href="./assets/styles/main.css" rel="stylesheet">
</head>
<body>

   <!-- HEADER -->
   <header>
      <!-- Title -->
      <h1>
         OOP Company
      </h1>
   </header>

   <!-- MAIN -->
   <main>
      <!-- Executives -->
      <section class="executives">
         <h2>Company Executives</h2>

         <?php
            foreach ( $executives_list as $executive ) { ?>
               <div class="person">
                  <h3><?php echo $executive->complete_name; ?></h3>
                  <h3>Company ID: <?php echo $executive->company_id; ?></h3>
                  <span>Department: <?php echo $executive->department; ?><span>
                  <span>Hourly wage: <?php echo $executive->hourly_wage; ?><span>
                  <span>Management: <?php echo $executive->management_department; ?><span>
                  <?php // Try and Catch
                     $months = 12;
                     try {
                        echo '<span>Salary for ' . $months . ' months: ' . $executive->monthlySalary($months). '</span>';
                        //echo $employee->monthlySalary('12') . '<br>';
                     }
                     catch (Exception $e){
                        echo 'Messagge error: ' . $e->getMessage() . '<br>';
                        echo 'Error at line: ' . $e->getLine() . '<br>';
                        echo 'Error in file: ' . $e->getFile() . '<br>';
                     }
                  ?>
               </div>
         <?php } ?>
      </section>

      <!-- Employees -->
      <section class="employees">
         <h2>Company Employees</h2>

         <?php
            foreach ( $employees_list as $employee ) { ?>
               <div class="person">
                  <h3><?php echo $employee->complete_name; ?></h3>
                  <h3>Company ID: <?php echo $employee->company_id; ?></h3>
                  <span>Department: <?php echo $employee->department; ?><span>
                  <span>Hourly wage: <?php echo $employee->hourly_wage; ?><span>
                  <span>Job: <?php echo $employee->job; ?><span>
                  <?php // Try and Catch
                     $months = 12;
                     try {
                        echo '<span>Salary for ' . $months . ' months: ' . $employee->monthlySalary($months) . '<span>';
                        //echo $employee->monthlySalary('12') . '<br>';
                     }
                     catch (Exception $e){
                        echo 'Messagge error: ' . $e->getMessage() . '<br>';
                        echo 'Error at line: ' . $e->getLine() . '<br>';
                        echo 'Error in file: ' . $e->getFile() . '<br>';
                     }
                  ?>
               </div>
         <?php } ?>
      </section>
   </main>
   
</body>
</html>