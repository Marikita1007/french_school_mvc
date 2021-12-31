//AOS
AOS.init();

var nav = document.querySelector('nav');
//navbar color change
window.addEventListener('scroll', function(){
    if(window.pageYOffset > 100){
        nav.classList.add('bg-light','shadow');
        console.log('color added!');
    }else{
        nav.classList.remove('bg-light','shadow');
        console.log('transparent!');
    }
});

//introduction fontawesome shakes
let shake = document.querySelectorAll('.shake_anime')

//Animate.css animate__headShake
for(let i = 0; i < shake.length; i++){
    //test[i]の[i]はindex
    shake[i].addEventListener('mouseover', function(){
        this.classList.add("animate__headShake");
        this.classList.add("animate__animated");
        this.addEventListener('mouseout', function(){
            this.classList.remove("animate__headShake");
            this.classList.remove("animate__animated");
        });
        
    });
}

// scroll and arrow appears
window.addEventListener('scroll', function(){
    this.console.log(window.scrollY);

    if(window.scrollY > 500){
        document.getElementById('back-to-top').style.display = 'block';  
    }else{
        document.getElementById('back-to-top').style.display = 'none';
    }

});

// admin.view.php 
//If user click toggle slidebar, it appears
// $(document).ready(function () {
//     $('#sidebarCollapse').on('click', function () {
//         $('#sidebar').toggleClass('active');
//     });
// });

