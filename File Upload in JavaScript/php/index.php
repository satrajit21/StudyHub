<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
    <head>
        <title>File Download</title>
        <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <th>ID</th>
                    <th>File Name</th>
                    <th>Size</th>
                    <th>Action</th>
</thead>
<tbody>
    <?php foreach($files as $file):?>
        <tr>
            <td><?php echo $file['Id'];?></td>
            <td><?php echo $file['file_name'];?></td>
            <td><?php echo $file['size']. "KB" ?></td>
            <td>
                <a href="index.php?file_id=<?php echo $file['Id']?>">Download</a>
            </td>
    </tr> 
    <?php endforeach ;?>
</tbody>
</table>
</div>
</div>
</body>
</html>

