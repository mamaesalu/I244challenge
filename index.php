<?php require_once('func.php');?>

<!DOCTYPE html>

<html>
<head>
    <title>I244 eksam</title>
    <meta charset="utf-8">
    <link type="text/css"  rel="stylesheet" href="" />
</head>

<body>
    <form action="func.php" method="POST">
        <textarea maxlength='200' rows="4" cols="60" name="note" placeholder="Kirjuta siia oma märkus"></textarea>
        <input name = "lisa" type="submit" value="Postita!"/><br><br>
    </form>

    <?php include "kuva.php"; ?>
    <?php if (!empty($notes)): ?>
        <p>Kasutajate märkmed:</p>
            <?php foreach ($notes as $note): ?>
                <tr>
                    <td><?php echo htmlspecialchars($note['ID']) ?></td>
                    <td><?php echo htmlspecialchars($note['Notes']) ?>
                    <br><br>
                    <td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    <?php endif; ?>




</body>

</html>

