 <?php
    $student =  new Student('12-234', 'John', 'Dela Cruz',  'Sep. 2, 2023');
    ?>
    <main class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <h2>Student Info</h2>
                  <button class="btn btn-success mb-3">Add Student</button>
            
              <table class="table">
  <thead class="table-dark">
            <tr>
                <th>Student ID</th>
                <th>Complete Name</th>
                <th>Date Birth</th>
                <th>Action</th>
            </tr>
  </thead>
  <tbody>
    <tr>
        <td>12-123</td>
          <td>12-123</td>
            <td>12-123</td>
              <td>
                <button class="btn btn-info">Edit</button>
                 <button class="btn btn-danger">Delete</button>
              </td>
              
    </tr>
  </tbody>
</table>

             </div>
         </div>

     </div>


 </main>