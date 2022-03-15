//Initialiser AOS AOSを初期化する
AOS.init();

var nav = document.querySelector('nav');
//navbar color change
window.addEventListener('scroll', function(){
    //Faire défiler le contenu de 100 pixels, cette animation commence
    if(window.pageYOffset > 100){
        nav.classList.add('bg-light','shadow');
    }else{
        nav.classList.remove('bg-light','shadow');
    }
});

// scroll and arrow appears
window.addEventListener('scroll', function(){
    //this.console.log(window.scrollY);

    if(window.scrollY > 500){
        document.getElementById('back-to-top').style.display = 'block';  
    }else{
        document.getElementById('back-to-top').style.display = 'none';
    }

});

//These js works on exercices pages
if(window.location.href.includes("op=beginner_exercice") == true || window.location.href.includes("op=intermediate_exercice") == true || window.location.href.includes("op=advanced_exercice") == true){

    //ここからエクササイズのクイズ用のJS
    var skip = document.getElementById('skip');
    var score = document.getElementById('score');
    var totalScore = document.getElementById('totalScore');
    var count = 0;
    var scoreCount = 0;
    var duration = 0;
    var exerciceSet = document.querySelectorAll('.exercice_set');
    var exerciceAnsRow = document.querySelectorAll('.exercice_set .exercice_ans_row input');

    skip.addEventListener('click', function () {
        step();
        duration = 60
    });

    exerciceAnsRow.forEach(function (exerciceAnsRowSingle) {
        exerciceAnsRowSingle.addEventListener('click', function () {
            setTimeout(function () {
                step();
                duration = 60
            }, 500)

            var valid = this.getAttribute("valid");
            if (valid == "valid") {
                scoreCount += 20;
                score.innerHTML = scoreCount;
                totalScore.innerHTML = scoreCount;
            } else {
                scoreCount += 0;
                score.innerHTML = scoreCount;
                totalScore.innerHTML = scoreCount;
            }
        })
    });

    //解答を選んだ後に次の問題が表示される
    function step() {
        count += 1;
        for (var i = 0; i < exerciceSet.length; i++) {
            exerciceSet[i].className = 'exercice_set';
        }

        exerciceSet[count].className = 'exercice_set active';
        // This is because there are 5 questions to each level of exercises.
        if (count == 5) {
            skip.style.display = 'none';
        }
    }
    
}else if(document.querySelector('.home-page-container') ){ // these js works on home page only

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

    //Où activer le compteur de numéros à partir d'ici. ここからナンバーカウンターを発動させる場所
    var achievements = document.getElementById("achievements");
    //IntersectionObserverというAPI。この要素が画面に表示されたタイミングでアニメーションを発火させる
    //API appelée IntersectionObserver, qui déclenche une animation lorsque cet élément est affiché à l'écran.
    var observer = new IntersectionObserver(numCounter);
    //呼び出したい関数を指定。この場合はachievements
    // Spécifie la fonction à appeler. Dans ce cas, achievement (l'id de la parti Statistiques)
    observer.observe(achievements);

    //In the html there are data-count and this number will show up in the end.
    function numCounter (entries) {

        //ページ読み込み時には、「交差の比率」は「0」。これを書くことでページをリフレッシュしたとたんにアニメーション発動を回避。
        //En écrivant cela, on évite de déclencher l'animation dès que la page est rafraîchie.
        if (entries[0].intersectionRatio == 0){
            return;
        }else{
            //ここからナンバーカウンター　jQuery
            $('.num-counter').each(function(){
                const This = $(this);
                $({Count: This.text()}).animate(
                    {Count: This.parent().attr
                    ("data-count")},
                    {
                        duration: 3000,
                        easing: "linear",
                        step: function(){
                            This.text(Math.floor(this.Count)
                            )
                        }
                    }
                )
            });
        }
    };
}




