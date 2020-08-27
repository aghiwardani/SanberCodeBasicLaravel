<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>

</head>
<body>
    <h1>Berlatih Looping</h1>
    <h3>Contoh Hasil Looping</h3>
    <div id="example">

    </div>
    <h3>Soal No. 1</h3>
    <div id="jawaban1">

    </div>
    <h3>Soal No. 2</h3>
    <div id="jawaban2"></div>


    <script>
        // Contoh untuk melakukan looping dengan for
        var jawabanContoh = ""
        for (var i = 0; i < 5; i++) {
            jawabanContoh += "ini adalah angka ke: " + [i] + "<br>"
            
        }
        
        // Driver Code
        document.getElementById("example").innerHTML = jawabanContoh
    
    
        // Soal No. 1 Looping menggunakan While
        /* 
            Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax while. Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk membuat suatu looping yang menghitung maju dan menghitung mundur. Jangan lupa tampilkan di console juga judul 'LOOPING PERTAMA' dan 'LOOPING KEDUA'." 
    
            OUTPUT :
    
            LOOPING PERTAMA
            2 - I love coding
            4 - I love coding
            6 - I love coding
            8 - I love coding
            10 - I love coding
            12 - I love coding
            14 - I love coding
            16 - I love coding
            18 - I love coding
            20 - I love coding
            LOOPING KEDUA
            20 - I will become web developer
            18 - I will become web developer                                                                              
            16 - I will become web developer
            14 - I will become web developer
            12 - I will become web developer
            10 - I will become web developer
            8 - I will become web developer
            6 - I will become web developer
            4 - I will become web developer
            2 - I will become web developer
        */
        var jawaban1 = ""
        // Code kamu di sini, lakukan looping dengan while
        var i = 2;
        var flag = 1;
        jawaban1 += "LOOPING PERTAMA  <br>"
        while (i <= 20) {
            jawaban1 += `${i} - I love coding <br>`;
            i += 2;
        }
        jawaban1 += "LOOPING KEDUA  <br>"
        while (i >= 0) {
            jawaban1 += `${i} - I will become web developer <br>`;
            i -= 2;
        }
    
        // Driver Code, Jangan diganggu !
        document.getElementById("jawaban1").innerHTML = jawaban1
    
        // Soal No. 2
        /* 
            Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax for. Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk memenuhi syarat tertentu yaitu: 
    
            SYARAT: 
            A. Jika angka ganjil maka tampilkan Santai
            B. Jika angka genap maka tampilkan Berkualitas
            C. Jika angka yang sedang ditampilkan adalah kelipatan 3 DAN angka ganjil maka tampilkan I Love Coding. 
    
            OUTPUT 
            1 - Santai
            2 - Berkualitas
            3 - I Love Coding 
            4 - Berkualitas
            5 - Santai
            6 - Berkualitas
            7 - Santai
            8 - Berkualitas
            9 - I Love Coding
            10 - Berkualitas
            11 - Santai
            12 - Berkualitas
            13 - Santai
            14 - Berkualitas
            15 - I Love Coding
            16 - Berkualitas
            17 - Santai
            18 - Berkualitas
            19 - Santai
            20 - Berkualitas
        */      
    
        var jawaban2 = ""
        // Code kamu di sini, lakukan looping dengan syntax for
        for (let i = 1; i <= 20; i++) {
            if(i % 2 != 0){
                if(i%3 != 0){
                    jawaban2 += `${i} - Santai <br>`
                }else{
                    jawaban2 += `${i} - I Love Coding <br>`
                }
            }else{
                jawaban2 += `${i} - Berkualitas <br>`
            }
        }
    
        document.getElementById("jawaban2").innerHTML = jawaban2
    
    </script>
</body>

</html>