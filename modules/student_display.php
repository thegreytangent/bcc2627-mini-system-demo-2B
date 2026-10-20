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
            
          <?php foreach (StudentRepository::all() as $student) { ?>
              <tr>
               <td><?php echo $student->getStudentNumber(); ?></td>
                <td><?php echo $student->completeName(); ?></td>
                 <td><?php echo $student->getDOB(); ?></td>
                <td>
                  <button class="btn btn-info">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>

              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>
    </div>

  </div>


</main>