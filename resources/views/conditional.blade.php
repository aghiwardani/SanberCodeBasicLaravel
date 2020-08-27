<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditional HTML</title>
</head>
<body>
    <h1>Berlatih Kondisional</h1>
    
    <h3>Masukkan nama dan peranmu!</h3>
    <form action="#" id="formConditional">
        <input type="text" id="name" placeholder="Isi nama di sini">
        <input type="text" id="role" placeholder="Isi peran di sini">
        <input type="submit" value="Mulai Permainan">
    </form>

    <h3>Jawaban dari console game: </h3>
    <div id="jawaban">

    </div>
</body>

<script>

    var form = document.getElementById("formConditional")
    var jawaban = document.getElementById("jawaban")

    form.addEventListener("submit", function(e) {
        e.preventDefault()

        /* 
            ATURAN PERMAINAN 
            // Output untuk Input nama = '' dan peran = ''
            // => "Nama harus diisi!"
    
            //Output untuk Input nama = 'Mikael' dan peran = ''
            // => "Halo Mikael, Pilih peranmu untuk memulai game!"
    
            //Output untuk Input nama = 'Nina' dan peran 'Penyihir'
            // => "Selamat datang di Dunia Werewolf, Nina"
            // => "Halo Penyihir Nina, kamu dapat melihat siapa yang menjadi Werewolf!"
    
            //Output untuk Input nama = 'Danu' dan peran 'Werewolf'
            // => "Selamat datang di Dunia Werewolf, Danu"
            // "Halo Werewolf Danu, kamu dapat memilih siapa yang akan kamu makan malam ini!"
    
            //Output untuk Input nama = 'Zero' dan peran 'Rakjel'
            // => "Selamat datang di Dunia Werewolf, Zero"
            // => "Halo Rakjel Zero, Kamu menjadi rakyat jelata "
    
            PETUNJUK MENGERJAKAN
            1. Buat Kondisional agar output dari konsol sesuai yang diharapkan
            2. masukkan lah jawaban dari kondisi yang diberikan oleh User ke dalam variabel jawabanKonsol
        */

        // Tuliskan Code kamu di sini
        var name = document.getElementById("name").value
        var role = document.getElementById("role").value       
        // buatlah kondisional berdasarkan dua variabel di atas yaitu name dan role, ketentuannya dapat dibaca di atas

        var jawabanKonsol // = jawaban dari kondisional di-assign di sini
        // Code Sampai sini
        console.log(name);
        console.log(role);
        if (name == "") {
            jawabanKonsol = "Nama harus diisi!";
        }else{
            if (role == "") {
                jawabanKonsol = `Halo ${name}, Pilih peranmu untuk memulai game!`;
            }else if(role == "Penyihir"){
                jawabanKonsol = `Selamat datang di Dunia Werewolf, ${name} <br> kamu dapat melihat siapa yang menjadi Werewolf!`;
            }else if(role == "Werewolf"){
                jawabanKonsol = `Selamat datang di Dunia Werewolf, ${name} <br> kamu dapat memilih siapa yang akan kamu makan malam ini!`;
            }else if(role == "Rakjel"){
                jawabanKonsol = `Selamat datang di Dunia Werewolf, ${name} <br> Kamu menjadi rakyat jelata`;
            }
        }
        jawaban.innerHTML = jawabanKonsol;
    })
        

</script>
</html> 