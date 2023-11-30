<h2>Input golongan</h2>

<form action="<?php echo URL; ?>/golongan/save" method="post">
    <table>
        <tr>
            <td>gol_kode</td>
            <td><input type="text" name="gol_kode" required></td>
        </tr>
        <tr>
            <td>gol_nama</td>
            <td><input type="text" name="gol_nama" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>