<!DOCTYPE html>
<html>
    <head>
        <style>
            table, tr, td, th{
                border: 1px solid black;
            }
        </style>
            <title>PRAK 105</title>
    </head>
    <body>
        <table>
            <tr style="background-color: red; height: 70px; font-size: 24px">
                <th>
                    Daftar Smartphone Samsung
                </th>
            </tr>
            <?php $hp = array("hp1" => "Samsung Galaxy S22","hp2" => "Samsung Galaxy S22+", "hp3" => "Samsung Galaxy AO3", "hp4" => "Samsung Galaxy Xcover5");?>
            <?php foreach($hp as $item):?>
            <tr>
                <td><?php echo ($item); ?></td>
            </tr>
            <?php endforeach?>
        </table>
    </body>
</html>