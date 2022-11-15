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


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                    <div class="form-group">
                        <label for="studentName">Name</label>
                        <input type="text" class="name form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="fName">phone</label>
                        <input type="text" class="phone form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="mName">Address</label>
                        <input type="text" class="address form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Education</label>
                        <select class="edu form-select">
                            <option value="">------ Select Option ------</option>
                            <option value="1">SSC</option>
                            <option value="2">HSC</option>
                            <option value="3">BSC</option>
                            <option value="4">MSC</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Skill</label>
                        <select class="skill form-select">
                            <option value="">------ Select Option ------</option>
                            <option value="1">PHP</option>
                            <option value="2">Wordpress</option>
                            <option value="3">Laravel</option>
                        </select>
                    </div>

                    <button class="add btn btn-success mt-2">Submit</button> 
            </div>
            <div class="table col-md-6 mt-5">
                <table class="data table">
                    
                </table>
            </div>
        </div>
    </div>

<!-- JavaScript Bundle with Popper -->
<script src="jquery.3.6.1.js"></script>
<script src="ajax.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>