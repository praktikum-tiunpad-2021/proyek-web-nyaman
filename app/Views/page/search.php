<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    
    <title>Nyaman</title>
    <style>
        *{
            margin: 0 0 0 0;
            font-family: 'Comfortaa';
        }
        header{
            height: 80px;
            background-color: black;
        }
        .logo{
            float: left;
            margin: 8px 16px;
        }
        a{
            color: #FFD700;
            float: right;
            text-decoration: none;
        }
        a:hover{
            color: antiquewhite;
        }
        
        li{
            margin: 2.5% 3%;
            float: right;
            font-family: 'confortaa';
        }

        ul{
            list-style-type: none;
        }
        body{
            background-image: url("img/hotel7.png");
            background-repeat: no-repeat;
            background-size:cover;

        }
        .isi{
            height: 500px;
            background-color: rgb(0, 0, 0, 0.5);
        }
        .img{
            max-width: 90%;
            height: auto;
            margin-left: 16px;
        }
        h1{
            text-align: center;
            color: white;
        }
        .text{
            margin: 4%;
            padding: 15% 3%;
            word-spacing: 10px;
            letter-spacing: 1px;
            line-height: 1.5;
        }
        .kotak{
            width: 48%;
            float: left;
        }
        #searchbox{
            width: 80%;
            margin: auto;
            background-color: white;
            float:inline-start;
        }
        .clearfix{
            clear: both;
        }
        input{
            
            font-size: 12px;
            border: none;
            margin: 2px;
        }
        select{
            border: none;
        }
        .search{
            height: 24px;
            font: 12px;
            padding: 4px;
            margin: 2px;
            border: 1px solid black;
        }
        #cari{
            background-color: #FFD700;;
            border: none;
            border-radius: 4px;
            padding: 4px;
            height: 34px;
            width: 68px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
        <?php echo img('assets/logoterang.png');?>
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Reservasi</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>
    <section class="isi">
        <div class="kotak">
            <a href="#">
            <?php echo img('assets/logoputih.png');?>
            </a>
        </div>
        <div class="kotak">
            <h1 class="text">Lakukan reservasi hotel yang nyaman dengan mudah dan cepat melalui NYAMAN</h1>
        </div>
        <div class="clearfix"></div>
        <div id="searchbox">
            <form action="#">
            <table>
                <tr>
                    <td><div class="search"><input type="text" placeholder="Pilih Area"></div></td>
                    <td><div class="search">Check in: <input type="date" name="awal"></div></td>
                    <td><div class="search">Check out: <input type="date" name="awal"></div></td>
                    <td><div class="search"><label for="jmlkamar">Jumlah Kamar: </label>
                        <select name="kamar" id="kamar">
                            <option value="kosong">--Pilih--</option>
                            <option value="kamar1">1 Kamar</option>
                            <option value="kamar2">2 Kamar</option>
                            <option value="kamar3">3 Kamar</option>
                            <option value="kamar4">4 Kamar</option></div>
                    </td>
                    <td>
                        <button type="submit" id="cari">Cari</button>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </section>
</body>
</html>