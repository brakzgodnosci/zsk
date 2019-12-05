<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
    <style media="screen">
      input{
        color:red;
        border-color:red;
        border-radius:10px;
        box-shadow: 1px 3px 5px black;
      }
    </style>
  </head>
  <body>
    <?php
    $localhost='localhost';
    $db ='sklep';
    $password='';
    $root='root';
    $connect = mysqli_connect($localhost,$root,$password,$db); //łązcenie z bazą
    mysqli_set_charset($connect,'utf8'); //na polskie znaki
    $sql = "SELECT `nazwa` FROM `towary` WHERE `promocja`=1"; //kwerenda
    $result = mysqli_query($connect,$sql); //rezultat kwerendy
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li>$row[nazwa]</li>";
    }
    echo '</ul>';
    mysqli_close($connect);
     ?>
     <form method="post">
       <select name="towar">
         <option value="a">Czekolada</option>
         <option value="b">Grześki</option>
         <option value="c">Baton</option>
         <option value="c">Wafle</option>
       </select>
       <input type="submit" name="button" value="WYBIERZ">
     </form>
     <?php
     $localhost='localhost';
     $db ='sklep';
     $password='';
     $root='root';
     $connect = mysqli_connect($localhost,$root,$password,$db); //łązcenie z bazą
if (isset($_POST['towar'])) {
$towar = $_POST['towar'];
     switch ($towar) {
  case 'a':
    $towar="Czekolada";
    break;
    case 'b':
      $towar="Grześki";
      break;
      case 'c':
        $towar="Baton";
        break;
        case 'd':
          $towar="Wafle";
          break;
}
     //echo $towar;
     //$sql = "SELECT `cena` FROM `towary` WHERE `nazwa`=\'$towar\'";
     $sql = "SELECT `cena` FROM `towary` WHERE `nazwa`='$towar'";
     $result = mysqli_query($connect,$sql); //rezultat kwerendy
     $row = mysqli_fetch_assoc($result);
     $promotion = round($row['cena']*0.85,2);
     echo $promotion;
}
     mysqli_close($connect);
      ?>
  </body>
</html>
