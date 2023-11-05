<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Client</title>
</head>
<body>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Client</th>
            <th>Alamat</th>
            <th>Instagram</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Tanggal Acara</th>
        </tr>

        <?php
        $no= 1;
        foreach ($appointment as $ap): ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ap->name ?></td>
            <td><?php echo $ap->address ?></td>
            <td><?php echo $ap->instagram ?></td>
            <td><?php echo $ap->email ?></td>
            <td><?php echo $ap->phone ?></td>
            <td><?php echo $ap->date_w ?></td>
        </tr>
        
        <?php endforeach;?>
    </table>
    
</body>
</html>