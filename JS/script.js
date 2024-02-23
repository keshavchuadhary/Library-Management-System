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