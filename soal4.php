<script>
    var tahunAwal = 2021;
    var tahunN = 2; // disini untuk mengganti tahun //
    var tinggiAwal = 1;
    var musimSemi = 1;
    var musimPanas = 3;
    var musimGugur = 1.5;
    var musimDingin = 15/100;

    for(let i = 0; i <= tahunN; i++){
        var jumlahSemi = tinggiAwal + musimSemi;
        var jumlahPanas = jumlahSemi * musimPanas;
        var jumlahGugur = jumlahPanas - musimGugur;
        var jumlahDingin = jumlahGugur * musimDingin;

        if(i % 2 == 0) {
            var jumlahGenap = jumlahDingin * 1 / 2;
        } else {
            var jumlahGanjil = jumlahDingin * 2;
        }
    }
    var hitungPohon = jumlahGenap + jumlahGanjil;
    document.write("hitungPohon(tinggiAwal,tahun = tinggi akhir <br>");
    document.write("hitungPohon("+tinggiAwal+","+tahunN+") = "+hitungPohon);

</script>