<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
good morning
            </div>
            <div class="col-sm-6 ">
                <form method="POST" action="save.php">
                    <legend style="text-align:center">customers details</legend>
                    <div class="form">
                        <label for="lastname">Name:</label>
                        <input class="form-control" type="text" name="lastname">

                        <div class="form">
                        <label for="age">Age:</label>
<input  class="form-control" type="number" name="age">
            
                        </div>

                        <div class="form">
                        <label for="phone">Phone::</label>
<input  class="form-control" type="tel" name="phone">
            </form>
                        </div>
                </form>
            </div>


        </div>
    </div>
    </div>
</body>

</html>