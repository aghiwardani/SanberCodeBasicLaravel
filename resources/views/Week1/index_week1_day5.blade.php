<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan DOM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/')}}/css/bootstrap.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Mini Ecommerce</a>
            <form class="form-inline" id="formItem">
                <input class="form-control mr-sm-2" type="search" placeholder="Search"  id="keyword" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchItem">Search</button>
            </form>
            <button class="btn btn-primary" id="cart"><i class="fas fa-shopping-cart"></i>(0)</button>
        </nav>
        <div class="row">
            <div class="col-md-12 mt-2 card-deck form-group"  id="listBarang" >
                
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="{{ url('/')}}/js/bootstrap.min.js"></script>   

    <script>
        var items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
        ]
        var card =""
        var cart = 0;
        for (i = 0; i < items.length; i++) {
            card += `<div class="card col-md-4 mb-4" style="width: 18rem;">
                        <img src="/img/${items[i][4]}" class="card-img-top" alt="Card image cap" style='width: 100%;height: 200px;'>
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${items[i][1]}</h5>
                            <p class="card-text" id="itemDesc">${items[i][3]}</p>
                            <p class="card-text">Rp ${items[i][2]}</p>
                            <a href="#" class="btn btn-primary addCart" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>`;
        }
        document.getElementById("listBarang").innerHTML = card;            

        // function myFunction() {
        //     document.getElementById("listBarang").empty();
        //     var search = document.getElementById("keyword");
        //     for (i = 0; i < items.length; i++) {
        //         if(items[i][1] == search){
        //             card += `<div class="card" style="width: 18rem;">
        //                 <img src="/img/${items[i][4]}" class="card-img-top" alt="Card image cap">
        //                 <div class="card-body">
        //                     <h5 class="card-title" id="itemName">${items[i][1]}</h5>
        //                     <p class="card-text" id="itemDesc">${items[i][3]}</p>
        //                     <p class="card-text">Rp ${items[i][2]}</p>
        //                     <a href="#" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
        //                 </div>
        //             </div>`;
        //         }
        //     }
        //     document.getElementById("listBarang").innerHTML = card     

        // }
        // document.getElementById("formItem").onsubmit = function() {myFunction()};
        
        $("#searchItem").click(function(){
            // document.getElementById("listBarang").empty();
            $("#listBarang").empty();
            var search = $( "#keyword" ).val();
            console.log(search);
            card = "";
            for (i = 0; i < items.length; i++) {
                if(items[i][1].match(search)){
                    card += `<div class="card col-md-4" style="width: 18rem;">
                        <img src="/img/${items[i][4]}" class="card-img-top" alt="Card image cap" style='width: 100%;height: 200px;'>
                        <div class="card-body">
                            <h5 class="card-title" id="itemName">${items[i][1]}</h5>
                            <p class="card-text" id="itemDesc">${items[i][3]}</p>
                            <p class="card-text">Rp ${items[i][2]}</p>
                            <a href="#" class="btn btn-primary addCart" id="addCart">Tambahkan ke keranjang</a>
                        </div>
                    </div>`;
                }
            }
            document.getElementById("listBarang").innerHTML = card ;
            // event.preventDefault(); 
        });
    
        $(".addCart").click(function(){
            cart += 1;
            document.getElementById("cart").innerHTML = `<i class="fas fa-shopping-cart"></i>(${cart})`;
        });

        // $( "form" ).submit(function( event ) {
        //     if ( $( "input" ).first().val() === "correct" ) {
        //         $( "span" ).text( "Validated..." ).show();
        //         return;
        //     }
            
        //     $( "span" ).text( "Not valid!" ).show().fadeOut( 1000 );
        //     event.preventDefault();
        // });

    </script>
</body>
</html>