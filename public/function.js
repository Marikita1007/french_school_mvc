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
    //this.console.log(window.scrollY);

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

//ここからエクササイズのクイズ用のJS
var skip = document.getElementById('skip');
var next = document.getElementById('next');
var score = document.getElementById('score');
var totalScore = document.getElementById('totalScore');
var countdown = document.getElementById('countdown');
var count = 0;
var scoreCount = 0;
var duration = 0;
var exerciceSet = document.querySelectorAll('.exercice_set');
var exerciceAnsRow = document.querySelectorAll('.exercice_set .exercice_ans_row input');

skip.addEventListener('click',function(){
    step();
    duration = 60
});
skip.addEventListener('click',function(){
    step();
    duration = 60
});

exerciceAnsRow.forEach(function(exerciceAnsRowSingle){
    exerciceAnsRowSingle.addEventListener('click', function(){
        setTimeout(function(){
            step();
            duration = 60
        },500) 

        var valid = this.getAttribute("valid");
        if(valid == "valid"){
            scoreCount += 20;
            score.innerHTML = scoreCount;
            totalScore.innerHTML = scoreCount; 
        }else{
            scoreCount += 0;
            score.innerHTML = scoreCount;
            totalScore.innerHTML = scoreCount; 
        }
    })
});

function step(){
    count += 1;
    for(var i = 0; i < exerciceSet.length; i++ ){
        exerciceSet[i].className = 'exercice_set';
    }
    
    exerciceSet[count].className = 'exercice_set active';
    if(count == 5){
        skip.style.display = 'none';
        clearInterval(duration);
    }
}



