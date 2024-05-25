searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}
document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.remove('active');
}
// let loginForm = document.querySelector('.container');
// // document.querySelector('login.html/#login-btn').onlick = () =>{
// //     loginForm.classList.toggle('active')
// // }

window.onscroll = () =>{
    
    searchForm.classList.remove('active');


    if(window.scrollY > 80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }
}
window.onload = () =>{
    if(window.scrollY > 80){
        document.querySelector('.header .header-2').classList.add('active');
    }else{
        document.querySelector('.header .header-2').classList.remove('active');
    }
}

var swiper = new Swiper(".books-slider", {
    loop:true,
    centeredSlides:true,
    autoplay:{
        delay:9500,
        disableOnInteraction: false,

    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        
      },
      768: {
        slidesPerView: 2,
        
      },
      1024: {
        slidesPerView: 3,
        
      },
    },
  });

// var swiper = new Swiper(".arrivals-slider", {
//     loop:true,
//     centeredSlides:true,
//     autoplay:{
//         delay:9500,
//         disableOnInteraction: false,

//     },
//     breakpoints: {
//       0: {
//         slidesPerView: 1,
        
//       },
//       768: {
//         slidesPerView: 2,
        
//       },
//       1024: {
//         slidesPerView: 3,
        
//       },
//     },
//   });  
$(document).ready(function() {
    // Attach click event to all borrow signs
    $(".borrow-sign").click(function() {
        // Get the book ID associated with the clicked borrow sign
        var bookID = $(this).data("book-id");

        // Redirect to borrow.php with the book ID as a parameter
        window.location.href = "borrow.php?book_id=" + bookID;
        return false; // Prevent default behavior of anchor tag
    });
});
// document.addEventListener('DOMContentLoaded', function() {
//     // Check if the session variable for borrowing success exists
//     var borrowSuccess = "<?php echo isset($_SESSION['borrow_success']) ? $_SESSION['borrow_success'] : '' ?>";
    
//     if (borrowSuccess) {
//         // Display floating notification
//         var notification = document.createElement('div');
//         notification.className = 'floating-notification';
//         notification.textContent = 'Book borrowed successfully!';
//         document.body.appendChild(notification);

//         // Remove notification after 2 seconds
//         setTimeout(function() {
//             document.body.removeChild(notification);
//         }, 2000);
//     }
// });
// document.addEventListener('DOMContentLoaded', function() {
//     // Remove notification after 1 second
//     setTimeout(function() {
//         var notification = document.querySelector('.floating-notification');
//         if (notification) {
//             notification.remove();
//         }
//     }, 1000);
// });
document.addEventListener('DOMContentLoaded', function() {
    // Get the notification element
    var notification = document.querySelector('.floating-notification');

    // Remove notification after 1 second
    setTimeout(function() {
        if (notification) {
            notification.remove();
        }
    }, 1000);
});