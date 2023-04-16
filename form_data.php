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
<section>
            <?php 
            if(isset($_REQUEST["userMsg"])){
                $username=$_REQUEST["userName"];
                $usermail=$_REQUEST["userMail"];
                $issuetype=$_REQUEST["issueType"];
                $usercomment=$_REQUEST["userComment"];
                ?>
                <section class=" p-5 shadow bg-light text-center" >
                    <div class="row py-2">
                        <div class="col text-secondary fst-italic">Name: </div><div class="col"><?php echo $username; ?></div>
                    </div>
                    <div class="row py-2">
                        <div class="col text-secondary fst-italic">Email: </div><div class="col"><?php echo $usermail; ?></div>
                    </div>
                    <div class="row py-2">
                        <div class="col text-secondary fst-italic">Issue: </div><div class="col"><?php echo $issuetype; ?></div>
                    </div>
                    <div class="row py-2">
                        <div class="col text-secondary fst-italic">Comment: </div><div class="col"><?php echo $usercomment; ?></div>
                    </div>
                </section>
               
                <?php



            }
            
            ?>
        </section>
        </main>
    
</body>
</html>