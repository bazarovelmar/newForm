<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auth Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1 class="display-6 mt-5" style="width: 300px; padding-left: 510px">Authorization</h1>

    <div class="alert alert-success" role="alert" id="successMessage" style="display: none; width: 600px; height: 566px; margin-left: 350px">
        <h6 class="display-6 mt-5" style="padding-left: 117px; padding-top: 180px;">Success Authorization</h6>
        <button type="button" class="btn btn-danger" style="display: none; margin-left: 262px; margin-top: 180px;" id="back">Back</button>
    </div>


    <form action="main.php" style="width: 600px; margin-left: 350px" method="post" class="alert alert-primary mt-5" id="sendForm">
        <div id="errorMessage" style="text-align: center; color: red;"></div>

        <div class="mb-3 mt-5">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName" name="name">
        </div>
        <div class="mb-3">
            <label for="inputSurname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="inputSurname" name="surname">
        </div>

        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
        </div>
        <div class="mb-3">
            <label for="inputPasswordRepeat" class="form-label">Repeat the password</label>
            <input type="password" class="form-control" id="inputPasswordRepeat" name="passwordRepeat">
        </div>
        <button type="button" class="btn btn-primary mb-3" id="sendBtn">Submit</button>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="ajax.js"></script>

</body>
</html>