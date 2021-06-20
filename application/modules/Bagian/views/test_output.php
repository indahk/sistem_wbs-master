<html>

<head>
    <title>Bagian</title>
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
                <td><?php echo ($bagian->nama_bagian) ?></td>
                <td>

                    <?php echo anchor('Bagian/edit/' . $bagian->id_bagian, 'Edit'); ?>

                    <?php echo anchor('Bagian/delete/' . $bagian->id_bagian, 'Hapus'); ?>

                </td>
               
            </tr>

        <?php } ?>

    </table>

</body>

</html>