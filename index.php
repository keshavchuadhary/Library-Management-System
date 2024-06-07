<?php
session_start();

include("connection.php");
include("function.php");

$user_logged_in = false; // Assume user is not logged in by default

if(isset($_SESSION['users_id'])) {
    // User is logged in
    $user_logged_in = true;

    // Fetch user data if needed
    $user_id = $_SESSION['users_id'];
    $query = "SELECT * FROM users_1 WHERE users_id = '$user_id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        // Now $user_data contains user information
    }
}

// Check if the session variable for borrowing success exists
if (isset($_SESSION['borrow_success']) && $_SESSION['borrow_success']) {
    // Display the notification
    echo '
    <script>
    alert("Book borrowed successfully!");
    </script>
    ';
    
    // Unset the session variable
    unset($_SESSION['borrow_success']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libr Management System</title>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        #brw-btn{
            background-color: blue;
            color: white;
            padding: 8px 12px;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="header-1">
            <a href="#" class="logo"><i class="fas fa-book"></i> lib MANAGEMENT SYSTEM </a>
        
            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>
            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <div class="icons">
                    
                    <?php if($user_logged_in): ?>
                        <p><?php echo ($user_data['username']); ?></p>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="fas fa-user" id="login-btn"></a>
                    <?php endif; ?>
                </div>
            </div> 
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="#Home">Home</a>
                <a href="#Arrivals">Arrivals</a>
                <a href="contact.php">Contact Us</a>
            </nav>
        </div>
    </header>
    
    <!-- Bottom Navbar -->
    <!-- <div class="header-2">
        <nav class="bottom-navbar">
            <a href="#Home" class="fas fa-home"></a>
            <a href="#Featured" class="fas fa-list"></a>
            <a href="#Arrivals" class="fas fa-tags"></a>
            <a href="#Review" class="fas fa-comment"></a>
            <a href="#blogs" class="fas fa-blog"></a>
        </nav>
    </div> -->
    
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>Top List</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ducimus explicabo vitae, autem, sit in modi error et distinctio quae magni incidunt soluta nam facere ad natus impedit aliquid reprehenderit?</p>
                <a href="#" class="btn">Read Now</a>
            </div>
            <div class=" swiper books-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide"><img src="Image/Book-1.jpg" alt="Book 1"></a>
                    <a href="#" class="swiper-slide"><img src="Image/Book-2.jpg" alt="Book 2"></a>
                    <a href="#" class="swiper-slide"><img src="Image/Book-3.jpg" alt="Book 3"></a>
                    <a href="#" class="swiper-slide"><img src="Image/Book-4.jpg" alt="Book 4"></a>
                    <a href="#" class="swiper-slide"><img src="Image/Book-5.jpg" alt="Book 5"></a>
                </div>
                <!-- <img src="Image/stand.svg" class="stand" alt="Stand"> -->
            </div>
        </div>
    </section>
    <!-- Arrivals section starts here -->
    <section class="Arrivals" id="Arrivals">
        <h1 class="heading"><span>new arrivals</span></h1>

        <div class=" arrivals-slider">
            <div class="wraper">
                <a href="#"  class="box">
                    <div class="image">
                        <img src="Image/Book-6.png" alt="Book 6">
                        
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <form action="addBookNew.php" method="POST">
                            <input type="number" name="book" value="1" id="">
                            <button id="brw-btn">Borrow</button>
                        </form>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </a>
                <a href="#"  class="box">
                    <div class="image">
                        <img src="Image/Book-7.png" alt="Book 7">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <form action="addBookNew.php" method="POST">
                            <input type="number" name="book" value="2" id="">
                            <button id="brw-btn">Borrow</button>
                        </form>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </a>
                <a href="#"  class="box">
                    <div class="image">
                        <img src="Image/Book-8.png" alt="Book 8">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <form action="addBookNew.php" method="POST">
                            <input type="number" name="book" value="3" id="">
                            <button id="brw-btn">Borrow</button>
                        </form>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </a>
                <a href="#"  class="box">
                    <div class="image">
                        <img src="Image/Book-9.png" alt="Book 9">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <form action="addBookNew.php" method="POST">
                            <input type="number" name="book" value="4" id="">
                            <button id="brw-btn">Borrow</button>
                        </form>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                </a>
                <a href="#"  class="box">
                    <div class="image">
                        <img src="Image/Book-10.png" alt="Book 10">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <form action="addBookNew.php" method="POST">
                            <input type="number" name="book" value="5" id="">
                            <button id="brw-btn">Borrow</button>
                        </form>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>

                </a>
            </div>
        </div>
    </section>



    <!-- Arrivals section ends here -->







    <!-- Custom JS File Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="JS/script.js"></script>
</body>
</html>
