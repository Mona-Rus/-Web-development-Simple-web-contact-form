<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
   
</head>

<body class="bg-primary bg-opacity-25">
    <nav class="navbar bg-light shadow-sm mb-5 py-3">
        <h1 class="mx-2" style="font-family: 'Lobster', cursive;">Contact</h1>
    </nav>
    <main class="container py-5">
        <section class=" p-5 shadow bg-light" id="mainform">
            <form class="px-5" method="post">
                <h2 class="text-center fst-italic py-4" style="font-family: 'Lobster', cursive;">Form</h2>
                <div class="form-group row py-2">
                    <label for="username" class="col-3 text-secondary fst-italic">Name: </label>
                    <input class="form-control col" type="text" name="userName" id="userName" />
                </div>
                <div class="form-group row py-2">
                    <label for="usermail" class="col-3  text-secondary fst-italic">Email: </label>
                    <input class="form-control col" type="email" name="userMail" id="userMail" />
                </div>
                <div class="form-group row py-2">
                    <label class="col-3 text-secondary fst-italic">Issue: </label>
                    <select class="form-control col" name="issueType">
                        <option>Query</option>
                        <option>Feedback</option>
                        <option>Complaint</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group row py-2">
                    <label class="col-3 text-secondary fst-italic">Comment: </label>
                    <textarea class="col form-control" name="userComment"></textarea>
                </div>
                <div class="text-end mt-5">
                    <button type="submit" class="btn btn-outline-dark" name="userMsg" formaction="form_data.php">Submit</button>
                    <button class="btn btn-outline-dark" type="reset">Cancel</button>
                </div>



            </form>
        </section>

    </main>
    <footer></footer>


</body>

</html>