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