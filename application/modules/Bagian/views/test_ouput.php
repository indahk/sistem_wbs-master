<html>
    <title>Bagian</title>
    <head>
        <h2>Hasil Bagian</h2>
    </head>
    <body>

    <table>
        <tr>
            <td>Id Bagian</td>
            <td>Nama_bagian</td>
            <td>Edit</td>
        </tr>
        <?php foreach ($data as $bagian) { ?>
        <tr>
            <td><?= $bagian->id_bagian ?></td>
            <td><?php echo ($aspirasi->nama_bagian) ?></td>
            <td><a href="">Edit</a></td>
        </tr>

        <?php } ?>

    </table>

    </body>
</html>