<html>
    <head>
        <title>Data Mahasiswa</title>
        <style>
            table tr th {
                border:solid 1px #000;
                padding:5px;
                margin:0px;
            }
            table tr td {
                border:solid 1px #000;
                padding:5px;
                margin:0px;
            }
        </style>
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <button>Tambah</button>
        <table>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>Email</td>
                <td>Alamat</td>
                <td>Phone</td>
                <td>Option</td>
            </tr>
            <?php foreach ($data_mahasiswa as $val) : ?>
            <tr>
                <td><?=$val['nama']?></td>
                <td><?=$val['email']?></td>
                <td><?=$val['alamat']?></td>
                <td><?=$val['phone']?></td>
                <td>
                    <button>Edit</button>
                    <button>Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
