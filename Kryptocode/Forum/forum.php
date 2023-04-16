<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!--FONT AWESOME-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- GOOGLE FONTS
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">  -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../Certify/certify.css">
    <title>Forum</title>
  </head>
  <body>
  
  
  


    <!--  Menubar Code Starts from here -->

    <div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li><a href="../Contest/contest.php">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="Contest/contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="../Contest/practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                                <li> <a href="../xcode-main/index.html">C</a></li>
                                <li> <a href="../xcode-main/index.html">Javascript</a></li>
                                <li> <a href="../xcode-main/index.html">C++</a></li>
                                <li> <a href="../xcode-main/index.html">Python</a></li>
                                <li> <a href="../xcode-main/index.html">Java</a></li>
                                <li> <a href="../xcode-main/index.html">C#</a></li>
                                <li> <a href="../xcode-main/index.html">HTML</a></li>
                                <li> <a href="../xcode-main/index.html">CSS</a></li>
                                <li> <a href="../xcode-main/index.html">PHP</a></li>

                            </ul>
                        </div>
                    </li>
                    

                   
                </ul>
            </div>
        </li>
        <li><a href="../Certify/certify.php">Certify</a></li>
        <li><a href="../Resource/resource.php">Resource</a></li>
        <li class="active"><a href="../Forum/forum.php">Forum</a></li>
        <li><a href="../About/about.html">About Us</a>
            <div class="sub-menu-1">
            <ul>
                    <li> <a href="../About/about.html">Mission</a></li>
                    <li> <a href="../About/vision.html">Vision</a></li>
                    <li> <a href="#">Team</a></li>
                   
                </ul>
            </div>
    </ul>
</div>

    <!--  Menubar Code Ends here -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        <div class="main">
            <div>
                <h1>Welcome To Our Blog</h1>
                <?php
    require_once('db_connect.php');

    $connect = mysqli_connect(HOST,USER,PASS,DB)

        or die("Can not connect");
    $results = mysqli_query( $connect, "SELECT * FROM forum" )
    
                        or die("Can not execute1 query");
    while( $rows = mysqli_fetch_array( $results ) ){
        extract( $rows );
        echo'<div class="container">';
        echo'<div class="row g-3">';
            echo'<div class="col-12 col-md-6 col-lg-4">';
                echo'<div class="card">';
                    echo"<img src='images/$image' alt='New Grading System' class='card-img-top'>";
                    echo'<div class="card-body">';
                        echo"<h5 class='card-title'> <a href='blog details/blog_details.html'> $post_title</a></h5>";
                        echo"<p class='card-text'>$post_description</p>";
                    echo'</div>';
                echo'</div>';
                echo'</div>';
            
                echo'</div>';
                echo'</div>';
                echo'<br>';
    }
    ?>
            </div>
        </div>


  
  </body>
</html>