
<table>

    <tr>
        <th>Titolo</th>
        <th>Cantante</th>
    </tr>

<?php foreach($canzoni as $canzone) : ?>

    <tr>
        <td>
            <a target="_blank" href="https://www.google.com/search?q=<?=$canzone->titolo?>">
            <?=$canzone->titolo?>
        </a>
    </td>
        <td>
            <a target="_blank" href="https://www.google.com/search?q=<?=$canzone->cantante?>">
            <?=$canzone->cantante?>
        </a>
    </td>
    </tr>

<?php endforeach; ?>    

</table>
