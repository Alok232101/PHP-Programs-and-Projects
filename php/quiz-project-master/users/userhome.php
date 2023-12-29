
<?php


    session_start();
    $userId = $_SESSION['userId'];
    if($userId == NULL){
        header('Location: ../index.php');
    }
    
    
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    
    <title>Online exam</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container">
                <h3><a class="navbar-brand" href="index.html">Online Exam</a></h3>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                       <li class="nav-item">
                           <a href="exam.php" class="nav-link">Exam</a>
                        </li>
                        
                       <li class="nav-item">
                           <a href="user_profile.php" class="nav-link">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <section id="body" class="mt-5">
        <div class="container">
            <div class="jumbotron bg-secondary" style="text-align: center; font-size: 50px;">
                <p class="mylead" style="color: white;font-style: italic;">
                    
                    Welcome in Online Exam System
                    
                </p>
            </div>

            

          
        </div>
    </section>






<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</body>
</html>