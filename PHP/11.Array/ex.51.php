<?php   
    $pt = [
        "EpicMause" => 78.10,
        "Thythu" => 25.789,
        "Zeus" =>7.89,
        "JesielM" => 89.41,
        "Polar" => 89.42,
        "Luna" => 78.11
    ];
    arsort($pt);
?>
    <h1>Ranking </h1>
    <table>
        <tr>
            <Th>Nick</th>
            <th>Pontos</th>
        <tr>
        <?php foreach($pt as $nick => $pts): ?>
        <tr>
                <td><?= $nick; ?></td>
                <td><?= $pts; ?></td>
         </tr> 
        <?php endforeach; ?>
    </table>