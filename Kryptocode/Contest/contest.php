<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certify</title>
    <link rel="stylesheet" href="contest.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

  <!-- Menubar Starts here -->
    
<div class="menubar">
    <h1 class="logo"> Krypto<span>Code</span></h1>
    <ul>
        <li><a href="../index.php"><i class="fa fa-home"></i>Home</a> </li>
        <li class="active"><a href="#">Contest</a>
            <div class="sub-menu-1">
                <ul>
                    <li class="hover-me"> <a href="contest.php">Join a contest</a>
                    
                    </li>




                    <li class="hover-me"> <a href="practice.html">Practice Coding</a><i class=" fa fa-angle-right"></i>
                        <div class="sub-menu-2">
                            <ul>
                            <li> <a href="../xcode-main/index.html">C</a></li>
                                <li> <a href="../xcode-main/index.html">Javascript</a></li>
                                <li> <a href="../xcode-main/index.html">C++</a></li>
                                <li> <a href="../xcode-main/index.html">Python</a></li>
                                <li> <a href="../xcode-main/index.html">Java</a></li>
                                <li> <a href="../xcode-main/index.html">C#</a></li>
                                <li> <a href="./xcode-main/index.html">HTML</a></li>
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
        <li><a href="../Forum/forum.php">Forum</a></li>
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


<!-- Menubar Ends here -->




<!-- Code Starts here -->


    <div class="certify_title">
        <h1>Join Contest</h1>
    </div>
    <div class="main">
        <?php
        require_once('db_connect.php');

        $connect = mysqli_connect(HOST,USER,PASS,DB)
    
            or die("Can not connect");
    
    
    
        
        $results = mysqli_query( $connect, "SELECT * FROM contest_question " )
    
                        or die("Can not execute1 query");
            
    
        while( $rows = mysqli_fetch_array( $results ) ){
            extract( $rows );
            echo'<div class="certify_cards">';

            echo'<div class="title">';
                echo"<h3> $contest_session</h3>";
    
            echo'</div>';
    
            echo'<div class="description">';
                echo"<p><h4>Get a certificate by showing your skills on<h2 style='text-align: center;'> </h2> $contest_session</h4></p>";
            echo'</div>';
            
                echo"<a href='../xcode-main/index1.html'> <button class='button'> Attempt </button> </a>";
                
    
            echo'</div>';
        }

        ?>

        
<!-- Code Ends here -->

        

</div>
</body>
</html>