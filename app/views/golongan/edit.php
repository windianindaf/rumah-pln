<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['gol_id']; ?>">
    <table>
        <tr>
            <td>gol_kode</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>" required></td>
        </tr>
        <tr>
            <td>gol_nama</td>
            <td><input type="text" name="gol_nama" value="<?php echo $data['row']['gol_nama']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>