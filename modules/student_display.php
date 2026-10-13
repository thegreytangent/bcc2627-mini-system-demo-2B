 <?php 
 $student =  new Student('12-234','John', 'Dela Cruz',  'Sep. 2, 2023');
 ?>
 
 <main class="content"> 
            <h2>Student Info</h2>
             <p> Student Number: <?php echo $student->student_number; ?> </p> <br/>
            <p> Complete Name: <?php echo $student->completeName(); ?></p> <br/>
            <p> Date of Birth: <?php echo $student->getDOB(); ?></p> <br/>
        </main>