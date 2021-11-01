<html lang="en">
<head>
    <title>Daftar Menu</title>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 80%;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table tr:nth-child(even){background-color: #f2f2f2;}

        table tr:hover {background-color: #ddd;}

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: red;
            color: white;
        }   

        p{
            background-color: red;
            width:12%;
            color:white;
            padding:7px;
            margin-left:15px;
        }

        input[type="submit"] {
			padding: 7px;
            margin-top:5px;
			cursor: pointer;
            color: white;
            background-color: red;
            border:0px;
		}
        form{
            padding: 7px 15px;
            margin-top:-30px;
        }
    
</style>
</head>
<body>
        <table>
        <tr>
            <th>Makanan</th>
            <th>Minuman</th> 
        </tr>
        <tr>
            <td>1. Nasi & Ikan Nila Bakar</td>
            <td>1. Es Teh</td>
        </tr>
        <tr>
            <td>2. Nasi & Ikan Lele Bakar</td>
            <td>2. Es Jeruk</td>
        </tr>
        <tr>
            <td>3. Nasi & Ayam Goreng</td>
            <td>3. Jeruk Panas</td>
        </tr>
        <tr>
            <td>4. Nasi & Bebek Goreng/td>
            <td>4. Teh Panas</td>
        </tr>
        </table>

        <p>Silahkan Pilih Menu Berikut</p>
        <form action="/menu/proses" method="POST">
        @csrf
        <br>
        <label> Makanan </label>
        <br>
        <input type="text" name="makan">
        <br>
        <label> Minuman </label>
        <br>
        <input type="text" name="minum">
        <br>
        <input type="submit" value="Pesan">
    </form>
</body>
</html>