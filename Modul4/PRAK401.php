<?php
$P = "";
$L = "";
$N ="";

    if(isset($_POST["cetak"])){
        $P = $_POST["P"];
        $L = $_POST["L"];
        $N =$_POST["N"];
    }
?>
<html>
    <head>
        <style>
            table, tr, td{
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        </style>
        <title>Prak401</title>
    </head>
    <body>
        <form action="" method="post">
            Panjang : <input type="text" name="P" value="<?=$P;?>"><br>
            Lebar : <input type="text" name="L" value="<?=$L;?>"><br>
            Nilai : <input type="text" name="N" value="<?=$N;?>"><br>
            <button type="submit" name="cetak">Cetak</button>
        </form>
        <?php
        if (isset($_POST["cetak"])){
            $isi = explode(" ", $N);
            if ($P * $L == count($isi)){
                $count = 0;
                for ($i=0; $i < $P; $i++) {
                    for ($j=0; $j < $L; $j++) { 
                        $tampil[$i][$j] = $isi[$count];
                        $count++;
                    }
                }
                echo "<table>";
                for ($i=0; $i < $P; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $L; $j++) { 
                        echo "<td>".$tampil[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
    </body>
</html>