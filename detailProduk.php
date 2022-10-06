<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Halaman</title>

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
    <form>

        <table id="tabel">

            <tr>
                <td>Nama Produk :</td>
                <td><?php echo $_GET['nama']; ?></td>
            </tr>

            <tr>
                <td>Tipe Produk :</td>
                <td><?php echo $_GET['tipe']; ?></td>
            </tr>

            <tr>
                <td>Stock :</td>
                <td><?php echo $_GET['stock']; ?></td>
            </tr>

            <tr>
                <td>Deskripsi :</td>
                <td><?php echo $_GET['deskripsi']; ?></td>
            </tr>



        </table>

    </form>

</body>

</html>