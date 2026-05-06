<h2>User List</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
    </tr>
    <?php foreach($users_list as $u): ?>
    <tr>
        <td><?= $u->id ?></td>
        <td><?= $u->username ?></td>
        <td><?= $u->email ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="<?= base_url('auth/logout') ?>">Logout</a>