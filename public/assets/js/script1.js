$("#button-kiri").click(function () {
    var getAngkaKiri = $("#angka-kiri").html();
    var hitungKiri = parseInt(getAngkaKiri) + 1;
    $("#angka-kiri").remove();
    $(".loket-kiri-isi").append("<h1 id=angka-kiri>" + hitungKiri + "</h1>");
});

$("#button-kanan").click(function () {
    var getAngkaKanan = $("#angka-kanan").html();
    var hitungKanan = parseInt(getAngkaKanan) + 1;
    $("#angka-kanan").remove();
    $(".loket-kanan-isi").append("<h1 id=angka-kanan>" + hitungKanan + "</h1>");
});

$("#reset").click(function () {
    $("#angka-kiri").remove();
    $(".loket-kiri-isi").append("<h1 id=angka-kiri>0</h1>");
    $("#angka-kanan").remove();
    $(".loket-kanan-isi").append("<h1 id=angka-kanan>0</h1>");
});
