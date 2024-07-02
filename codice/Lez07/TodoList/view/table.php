<table>
    <tr>
        <th>Id</th>
        <th>Descrizione</th>
        <th>Data</th>
        <th>Completato</th>
    </tr>

    <?php foreach ($todos as $todo) : ?>
    <tr>
        <td><?=$todo->id ?></td>
        <td><?=$todo->descrizione ?></td>
        <td><?=$todo->data_creazione ?></td>
        <td><?=$todo->completato ?></td>
    </tr>            

    <?php endforeach;?>

</table>