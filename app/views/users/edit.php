<h2>Edit User</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>email</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="password" name="user_password"></td>
        </tr>
        <tr>
            <td>user_name</td>
            <td><input type="text" name="user_name" value="<?php echo $data['row']['user_name']; ?>" required></td>
        </tr>
        <tr>
            <td>user_alamat</td>
            <td><input type="text" name="user_alamat" value="<?php echo $data['row']['user_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>user_hp</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['row']['user_hp']; ?>" required></td>
        </tr>
        <tr>
            <td>user_pos</td>
            <td><input type="text" name="user_pos" value="<?php echo $data['row']['user_pos']; ?>" required></td>
        </tr>
        <tr>
            <td>user_role</td>
            <td><input type="text" name="user_role" value="<?php echo $data['row']['user_role']; ?>" required></td>
        </tr>
        <tr>
            <td>user_aktif</td>
            <td><input type="text" name="user_aktif" value="<?php echo $data['row']['user_aktif']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>