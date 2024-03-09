<?php
  
  
  include("connection.php");
  include("function.php");
  
  $user_data = check_login($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><i class="fas fa-book"> LIBRARY MANAGEMENT SYSTEM </i></a>
            <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="login.php" class="fas fa-user" id="login-btn"></a>
                <a href="logout.php">Logout</a>
            </div> 
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="#Home">Home</a>
                <a href="#Featured">Featured</a>
                <a href="#Arrivals">Arrivals</a>
                <a href="#Review">Review</a>
                <a href="#blogs">Blogs</a>
            </nav>
        </div>
       </header>

       <!-- header section end here -->
       <!-- bottom navbar -->
       <div class="header-2">
        <nav class="bottom-navbar">
            <a href="#Home" class="fas fa-home"></a>
            <a href="#Featured" class="fas fa-list"></a>
            <a href="#Arrivals" class="fas fa-tags"></a>
            <a href="#Review" class="fas fa-comment"></a>
            <a href="#blogs" class="fas fa-blog"></a>
        </nav>
    </div>
    <!-- home section starts -->
    <section class="home" id="home">
      <div class="row">
        <div class="content">
            <h3>Top List</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Esse ducimus explicabo vitae, autem, sit 
                in modi error et distinctio 
                quae magni incidunt soluta nam facere ad natus impedit aliquid 
                reprehenderit?
            </p>
            <a href="#" class="btn">Read Now</a>
        </div>

        <div class="books-slider">
           <div class="wrapper">
            <a href="#"><img src="Image/Book-1.jpg" alt=""></a>
            <a href="#"><img src="Image/Book-2.jpg" alt=""></a>
            <a href="#"><img src="Image/Book-3.jpg" alt=""></a>
            <a href="#"><img src="Image/Book-4.jpg" alt=""></a>
            <a href="#"><img src="Image/Book-5.jpg" alt=""></a>
           </div>
           <img src="Image/stand.svg" class="stand" alt="">
        </div>


      </div>

    </section>
    <!-- home section end -->


 



    <!-- custom Js file link -->
    <script  src="JS/script.js">
        
    </script>
</body>
</html>