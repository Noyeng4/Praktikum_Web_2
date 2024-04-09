<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, td, th{
                border: 1px solid black;
            }
        </style>
            <title>PRAK 104</title>
    </head>
    <body>
        <table>
            <tr>
                <th>
                    Daftar Smartphone samsung
                </th>
            </tr>
            <?php $hp = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy AO3", "Samsung Galaxy Xcover5");?>
            <tr>
                <td><?php echo $hp[0]?></td>
            </tr>
            <tr>
                <td><?php echo $hp[1]?></td>
            </tr>
            <tr>
                <td><?php echo $hp[2]?></td>
            </tr>
            <tr>
                <td><?php echo $hp[3]?></td>
            </tr>
        </table>
    </body>
</html>
