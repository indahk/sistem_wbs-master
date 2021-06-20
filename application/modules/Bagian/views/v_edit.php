<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>

<body>

    <h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
    <h3>Edit Data</h3>

    <?php foreach ($bagian as $bagian) { ?>
        <form action="<?php echo base_url() . 'bagian/update'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>Nama Bagian</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $bagian->id_bagian ?>">
                        <input type="text" name="nama_bagian" value="<?php echo $bagian->nama_bagian ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>