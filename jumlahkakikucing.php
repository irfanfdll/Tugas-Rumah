<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend></legend>
            <table>
                <tr>
                    <td>Jumlah Kaki Kucing </td>
                    <td>:</td>
                    <td><input type="number" name="bilangan1"></td>
                </tr>
                    <td></td><td></td>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

<?php 
if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
   }
class Aritmatika{
    public function __construct($bilangan1){
        $this-> bilangan1 = "$bilangan1";
    
    }
    public function tambah()
        {
            if ($this->bilangan1 > 4) {
                $outpu = "Siluman Kucing";
            } elseif ($this->bilangan1 < 4) {
                $outpu = "Kucing Cingked";
            } elseif ($this->bilangan1 = 4){
                $outpu = "Kucing Normal";
            }
            return $outpu  ;
        }
        
        
        
}
$penjumlahan = new aritmatika($bilangan1);
echo "<table>";
echo "<tr><td>Jumlah Kaki</td><td>:</td><td>".$penjumlahan->bilangan1 . "</td></tr>";
echo "<tr><td>Info</td><td>:</td><td>".$penjumlahan->tambah() . "</td></tr>";
echo "</table>";
