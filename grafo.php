<?php
error_reporting(0);
    $s=0; $i=0; $j=0;
    $n=array();
    $bin= array();
    if(isset($_POST ["MatrizNodo"])){
        $n[0][0]= (int)$_POST ["txtn00"];
        $n[0][1]= (int)$_POST ["txtn01"];
        $n[0][2]= (int)$_POST ["txtn02"];
        $n[0][3]= (int)$_POST ["txtn03"];
        $n[0][4]= (int)$_POST ["txtn04"];

        $n[1][0]= (int)$_POST ["txtn10"];
        $n[1][1]= (int)$_POST ["txtn11"];
        $n[1][2]= (int)$_POST ["txtn12"];
        $n[1][3]= (int)$_POST ["txtn13"];
        $n[1][4]= (int)$_POST ["txtn14"];

        $n[2][0]= (int)$_POST ["txtn20"];
        $n[2][1]= (int)$_POST ["txtn21"];
        $n[2][2]= (int)$_POST ["txtn22"];
        $n[2][3]= (int)$_POST ["txtn23"];
        $n[2][4]= (int)$_POST ["txtn24"];

        $n[3][0]= (int)$_POST ["txtn30"];
        $n[3][1]= (int)$_POST ["txtn31"];
        $n[3][2]= (int)$_POST ["txtn32"];
        $n[3][3]= (int)$_POST ["txtn33"];
        $n[3][4]= (int)$_POST ["txtn34"];

        $n[4][0]= (int)$_POST ["txtn30"];
        $n[4][1]= (int)$_POST ["txtn31"];
        $n[4][2]= (int)$_POST ["txtn32"];
        $n[4][3]= (int)$_POST ["txtn33"];
        $n[4][4]= (int)$_POST ["txtn34"];
    }
    for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            $bin[$i][$j]=$n[$i][$j];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td{ 
            border: 1px solid;
        }
    </style>
</head>
<body>
<form method="post" action="grafo.php">
<table width="115" border="0"> 
    <tr>
        <td colspan="6" style="text-align: center;" ><strong >ESCRIBIR PESO DE CONEXION</td>
    </tr>
    <tr>
        <td>  </td>
        <td> A </td>
        <td> B </td>
        <td> C </td>
        <td> D </td>
        <td> E </td>
    </tr>
    <tr>
        <td width="43"> A </td>
        <td width="43"><input name="txtn00" type="text" id="txtn00"
        value="<?= $n[0][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn01" type="text" id="txtn01"
        value="<?= $n[0][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn02" type="text" id="txtn02"
        value="<?= $n[0][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn03" type="text" id="txtn03"
        value="<?= $n[0][3]?>" size = "5"/> </td>
        <td width="62"><input name="txtn04" type="text" id="txtn04"
        value="<?= $n[0][4]?>" size = "5"/> </td>

    </tr>
    <tr>
        <td width="43"> B </td>
        <td width="43"><input name="txtn10" type="text" id="txtn10"
        value="<?= $n[1][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn11" type="text" id="txtn11"
        value="<?= $n[1][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn12" type="text" id="txtn12"
        value="<?= $n[1][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn13" type="text" id="txtn13"
        value="<?= $n[1][3]?>" size = "5"/> </td>
        <td width="62"><input name="txtn14" type="text" id="txtn14"
        value="<?= $n[1][4]?>" size = "5"/> </td>

    </tr>
    <tr>
        <td width="43"> C </td>
        <td width="43"><input name="txtn20" type="text" id="txtn20"
        value="<?= $n[2][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn21" type="text" id="txtn21"
        value="<?= $n[2][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn22" type="text" id="txtn22"
        value="<?= $n[2][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn23" type="text" id="txtn23"
        value="<?= $n[2][3]?>" size = "5"/> </td>
        <td width="62"><input name="txtn24" type="text" id="txtn24"
        value="<?= $n[2][4]?>" size = "5"/> </td>
    </tr>

    <tr>
        <td width="43"> D </td>
        <td width="43"><input name="txtn30" type="text" id="txtn30"
        value="<?= $n[3][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn31" type="text" id="txtn31"
        value="<?= $n[3][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn32" type="text" id="txtn32"
        value="<?= $n[3][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn33" type="text" id="txtn33"
        value="<?= $n[3][3]?>" size = "5"/> </td>
        <td width="62"><input name="txtn34" type="text" id="txtn34"
        value="<?= $n[3][4]?>" size = "5"/> </td>
    </tr>
    <tr>
        <td width="43"> E </td>
        <td width="43"><input name="txtn40" type="text" id="txtn40"
        value="<?= $n[4][0]?>" size = "5"/> </td>
        <td width="62"><input name="txtn41" type="text" id="txtn41"
        value="<?= $n[4][1]?>" size = "5"/> </td>
        <td width="62"><input name="txtn42" type="text" id="txtn42"
        value="<?= $n[4][2]?>" size = "5"/> </td>
        <td width="62"><input name="txtn43" type="text" id="txtn43"
        value="<?= $n[4][3]?>" size = "5"/> </td>
        <td width="62"><input name="txtn44" type="text" id="txtn44"
        value="<?= $n[4][4]?>" size = "5"/> </td>
    </tr>
    <tr></tr>
    <tr>
        <td>
            <input name= "MatrizNodo" type="submit" id="MatrizNodo" value="Mostrar"/></td>
        </td>
    </tr>
</table>
<?php
      for($i=0; $i<5; $i++){
        for($j=0; $j<5; $j++){
            if($bin[$i][$j]>0){
                $bin[$i][$j]=1;
            }
        }
    }
?>
<table width="115" border="0"> 
    <tr>
        <td colspan="6" style="text-align: center;" ><strong >Matriz De Adyacencia</td>
    </tr>   
    <tr>
        <td>  </td>
        <td> A </td>
        <td> B </td>
        <td> C </td>
        <td> D </td>
        <td> E </td>
    </tr>
    <tr>
        <td width="43"> A </td>
        <td><?php echo $bin[0][0];?></td>
        <td><?php echo $bin[0][1];?></td>
        <td><?php echo $bin[0][2];?></td>
        <td><?php echo $bin[0][3];?></td>
        <td><?php echo $bin[0][4];?></td>

    </tr>
    <tr>
        <td width="43"> B </td>
        <td><?php echo $bin[1][0];?></td>
        <td><?php echo $bin[1][1];?></td>
        <td><?php echo $bin[1][2];?></td>
        <td><?php echo $bin[1][3];?></td>
        <td><?php echo $bin[1][4];?></td>

    </tr>
    <tr>
        <td width="43"> C </td>
        <td><?php echo $bin[2][0];?></td>
        <td><?php echo $bin[2][1];?></td>
        <td><?php echo $bin[2][2];?></td>
        <td><?php echo $bin[2][3];?></td>
        <td><?php echo $bin[2][4];?></td>
    </tr>

    <tr>
        <td width="43"> D </td>
        <td><?php echo $bin[3][0];?></td>
        <td><?php echo $bin[3][1];?></td>
        <td><?php echo $bin[3][2];?></td>
        <td><?php echo $bin[3][3];?></td>
        <td><?php echo $bin[3][4];?></td>
    </tr>
    <tr>
        <td width="43"> E </td>
        <td><?php echo $bin[4][0];?></td>
        <td><?php echo $bin[4][1];?></td>
        <td><?php echo $bin[4][2];?></td>
        <td><?php echo $bin[4][3];?></td>
        <td><?php echo $bin[4][4];?></td>
    </tr>
</form>
 