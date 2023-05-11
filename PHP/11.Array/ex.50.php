<?php
    $pessoa = [
        'Matheus' => 25,
        'Jesiel' => 27,
        'Tyrson' => 31,
        'Lucas' => 26
    ];
?>
<table border = "1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoa as $nome => $idade): ?>
            <tr>
                <td><?= $nome; ?></td>
                <td><?= $idade; ?></td>
            </tr>        
    <?php endforeach; ?>
</table>