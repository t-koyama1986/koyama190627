$(document).ready(function(){
    $("#random1").on("click", function(){
        var random1= Math.floor(Math.random() *3+1);
        console.log(random1);
// この内容を、DBから引っ張ってきたい。
        if(random1==1){
            $("#category2").html("今日は●●℃の熱が出ましたが、就寝時には平熱に戻りました。元気よく遊んでいますが、時々苦しそうなしぐさを見せることがあります。食事は冷めたもの・やわらかいものを完食しました。");
        }else if(random1==2){
            $("#category2").html("今日は一人で車のおもちゃで遊んだり、父親に本を読んでもらっていました。お気に入りの本を読み終えると、もう一回読んでほしいのか、泣いてせがんでいました。");
        }else if(random1==3){
            $("#category2").html("今日は●●●でした。ありがとうございました。");
        }
        })
})
