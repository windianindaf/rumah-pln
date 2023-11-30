<h2>Posts</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb">
    <thead>
        <tr>
            <th>NO</th>
            <th>NO PELANGGAN</th>
            <th>GOLONGAN</th>
            <th>NAMA</th>
            <th>NO. HP</th>
            <th>KTP</th>
            <th>SERI</th>
            <th>METERAN</th>
            <th>AKTIF</th>
            <th>PETUGAS</th>
            <th>CREATE AT</th>
            <th>UPDATE AT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data['rows'] as $row) { ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row['pel_no']; ?>
                </td>
                <td>
                    <?php echo $row['gol_nama']; ?>
                </td>
                <td>
                    <?php echo $row['pel_nama']; ?>
                </td>
                <td>
                    <?php echo $row['pel_hp']; ?>
                </td>
                <td>
                    <?php echo $row['pel_ktp']; ?>
                </td>
                <td>
                    <?php echo $row['pel_seri']; ?>
                </td>
                <td>
                    <?php echo $row['pel_meteran']; ?>
                </td>
                <td>
                    <?php echo $row['pel_aktif']; ?>
                </td>
                <td>
                    <?php echo $row['user_name']; ?>
                </td>
                <td>
                    <?php echo $row['create_at']; ?>
                </td>
                <td>
                    <?php echo $row['update_at']; ?>
                </td>
                <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn"
                        onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
            <?php $no++;
        } ?>
    </tbody>
</table>