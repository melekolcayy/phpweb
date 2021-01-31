$("#kategoriEkleBtn").on("click", function(){
    var datakategori=$("#kategoriEkleForm").serialize();
$.ajax({
    url:"ayarlar/islem.php?islem=kategoriEkle",
    type:"POST",
    data: datakategori,
    success: function(cevap){
        $("#kategoriEkleAlert").html(cevap).hide().fadeIn(700);
    }
});
    });
    $("#kategoriGuncelleBtn").on("click", function(){
        var datakategori=$("#kategoriGuncelleForm").serialize();
    $.ajax({
        url:"ayarlar/islem.php?islem=kategoriGuncelle",
        type:"POST",
        data: datakategori,
        success: function(cevap){
            $("#kategoriGuncelleAlert").html(cevap).hide().fadeIn(700);
        }
    });
        });
        $("#yGiris").on("click", function(){
            var datakategori=$("#yGirisForm").serialize();
        $.ajax({
            url:"ayarlar/islem.php?islem=yGiris",
            type:"POST",
            data: datakategori,
            success: function(cevap){
                $("#yGirisAlert").html(cevap).hide().fadeIn(700);
            }
        });
            });
