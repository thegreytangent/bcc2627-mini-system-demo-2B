<main class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>Create New Student </h2>
                <a href="?page=students" class="btn btn-dark mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8z" />
                    </svg>
                    back</a>

                <div class="col-lg-8">
                    <form method="POST" action="modules/student_create.php">

                        <div class="form-group">
                            <label>Student Number</label>
                            <input type="text"  name="student_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Firstname</label>
                            <input type="text" name="firstname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Lastname</label>
                            <input type="text"  name="lastname" class="form-control">
                        </div>
                       
                        <div class="form-group">
                            <label>Date of Birth:</label>
                            <input type="date"  name="dob" class="form-control">
                        </div>
                          
                        
                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>



            </div>
        </div>

    </div>


</main>