<?php
$table = array(
    array("a1", "a2"),
    array("b1", "b2"),
);

print_r($table);

?>

<table border="1">
<thead>
<tr><th>c1</th><th>c2</th></tr>
<thead>
<tbody>
<?php foreach($table as $row): ?>
    <tr>
    <?php foreach($row as $cel): ?>
        <td><?= $cel ?></td>
    <?php endforeach; ?>
    </tr>
<?php endforeach; ?>
</tbody>
</table>