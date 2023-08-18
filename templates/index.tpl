<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <h1>Smarty CRUD App - Read</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Nmuber</th>
        </tr>
        {foreach $users as $user}
            <tr>
                <td>{$user.id}</td>
                <td>{$user.name}</td>
                <td>{$user.number}</td>
            </tr>
        {/foreach}
    </table>
</body>
</html>
