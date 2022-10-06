<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <style>
        #tabel {
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            border: 3px solid rgb(0, 0, 0);
        }

        #form {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: medium;
            text-align: center;
        }

        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: medium;
            background-color: azure;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <h2 id="form">MASUKAN Deskripsi Barang mu</h2>
    <form action="detailProduk.php" method="GET">

        <table id="tabel">

            <tr>
                <td>Nama Produk :</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Tipe Produk :</td>
                <td><input type="text" name="tipe"></td>
            </tr>

            <tr>
                <td>Stock :</td>
                <td><input type="number" name="stock"></td>
            </tr>

            <tr>
                <td>Deskripsi :</td>
                <td><textarea rows="3" cols="21" name="deskripsi"></textarea>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>

        </table>

    </form>
</body>