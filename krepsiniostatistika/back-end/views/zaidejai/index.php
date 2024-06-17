<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
    <?php include '../../content/navbar.php'; ?>
    <h1>Žaidėjai</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Gimimo Data</th>
                <th>Aukštis</th>
                <th>Svoris</th>
                <th>Komanda</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($zaidejai as $zaidejas): ?>
                <tr>
                    <td><?= $zaidejas['ID'] ?></td>
                    <td><?= $zaidejas['Vardas'] ?></td>
                    <td><?= $zaidejas['Pavarde'] ?></td>
                    <td><?= $zaidejas['Gimimo_data'] ?></td>
                    <td><?= $zaidejas['Aukstis'] ?></td>
                    <td><?= $zaidejas['Svoris'] ?></td>
                    <td><?= $zaidejas['Komandos_ID'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php include '../../content/footer.php'; ?>
</body>
</html>
