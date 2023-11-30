<h2>Edit Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['pel_id']; ?>">
    <input type="hidden" name="update_at" value="<?php echo date('Y-m-d H:i:s'); ?>" required>
    <table>
        <tr>
            <td>NO PELANGGAN</td>
            <td><input type="text" name="pel_no" value="<?php echo $data['row']['pel_no']; ?>" required></td>
        </tr>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['getgol'] as $gol) { ?>
                        <option value="<?php echo $gol['gol_id']; ?>" <?php echo $gol['gol_id'] == $data['row']['pel_id_gol'] ? "selected" : ""; ?>>
                            <?php echo $gol['gol_nama']; ?>
                        </option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>" required></td>
        </tr>
        <tr>
            <td>SERI</td>
            <td><input type="text" name="pel_seri" value="<?php echo $data['row']['pel_seri']; ?>" required></td>
        </tr>
        <tr>
            <td>METERAN</td>
            <td><input type="text" name="pel_meteran" value="<?php echo $data['row']['pel_meteran']; ?>" required></td>
        </tr>
        <tr>
            <td>AKTIF</td>
            <td>
                <select name="pel_aktif">
                    <option value="Y" <?php echo $data['row']['pel_aktif'] == 'Y' ? 'selected' : ''; ?>>Y</option>
                    <option value="N" <?php echo $data['row']['pel_aktif'] == 'N' ? 'selected' : ''; ?>>N</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>PETUGAS</td>
            <td>
                <select name="pel_id_user">
                    <?php foreach ($data['getuser'] as $user) { ?>
                        <option value="<?php echo $user['user_id']; ?>" <?php echo $user['user_id'] == $data['row']['pel_id_user'] ? "selected" : ""; ?>>
                            <?php echo $user['user_nama']; ?>
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