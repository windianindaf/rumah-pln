<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
            <input type="hidden" name="create_at" value="<?php echo date('Y-m-d H:i:s'); ?>" required>
        <tr>
            <td>NOMOR PELANGGAN</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['getgol'] as $gol) { ?>
                        <option value="<?php echo $gol['gol_id']; ?>">
                            <?php echo $gol['gol_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td>
                <select name="pel_aktif">
                    <option value="Option1">Y</option>
                    <option value="Option2">N</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>PETUGAS</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['getuser'] as $gol) { ?>
                        <option value="<?php echo $gol['user_id']; ?>">
                            <?php echo $gol['user_name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>