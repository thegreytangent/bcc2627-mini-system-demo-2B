<?php
$students = [
  [
    'id' => 1,
    'student_number' => '12-123',
    'firstname' => 'Juan',
    'lastname' => 'Dela Cruz',
    'date_of_birth' => 'Sep. 2, 2023'
  ],
  [
    'id' => 2,
    'student_number' => '12-234',
    'firstname' => 'Mike',
    'lastname' => 'Cruz',
    'date_of_birth' => 'Sep. 2, 2023'
  ]
];

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
            <?php foreach ($students as $student) { ?>
              <tr>
                <td><?php echo $student['student_number'] ?></td>
                <td><?php echo $student['firstname'] ?></td>
                <td><?php echo $student['date_of_birth'] ?></td>
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