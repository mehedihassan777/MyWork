<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Insert</title>
</head>
<body>

<?php
include "classes.php";
if(isset($_POST['send'])){
    $student = new Student;
    $student->insert($_POST);

}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <a class="btn btn-info" href="show.php">Show Data</a>
                <form method="POST">
                   
                    <div class="form-group">
                        <label for="studentName">Student Name</label>
                        <input name="studentName" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="fName">Father's Name</label>
                        <input name="fName" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="mName">Mother's Name</label>
                        <input name="mName" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name ="email" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-select">
                            <option value="">------ Select Option ------</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>

                    <button name="send" class="btn btn-success mt-2">Send</button>
                </form> 
            </div>
        </div>
    </div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>