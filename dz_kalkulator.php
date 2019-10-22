<?php

$rezultat=''; 

    if (isset($_POST["submit"])){
       
        switch ($_POST["operator"]) {
            
            case "zbrajanje":
                $rezultat = $_POST['broj_1'] + $_POST['broj_2'];
                break;

            case "oduzimanje":
                $rezultat = $_POST['broj_1'] - $_POST['broj_2'];
                break;

            case "mnozenje":
                $rezultat = $_POST['broj_1'] * $_POST['broj_2'];
                break;

            case "dijeljenje":
                $rezultat = $_POST['broj_1'] / $_POST['broj_2'];
                break;

            case "modulo":
                $rezultat = $_POST['broj_1'] % $_POST['broj_2'];
                break;
            
            default:
                echo 'Molimo unesite brojeve.';
                break;
        }
        
    }


?>

<form action="" method="POST">
    <p>
        <label for="broj_1">Broj 1</label>
        <input type="text" name="broj_1" id="broj_1" placeholder="<?php isset($_POST['broj_1']) ? print $_POST['broj_1'] : '' ?>">
        
        <select name="operator" id="operator">
            <option value="zbrajanje">+</option>
            <option value="oduzimanje">-</option>
            <option value="mnozenje">*</option>
            <option value="dijeljenje">/</option>
            <option value="modulo">%</option>
        </select>

        <input type="text" name="broj_2" id="broj_2" placeholder="<?php isset($_POST['broj_2']) ? print $_POST['broj_2'] : '' ?> ">
        <label for="broj_2">Broj 2</label>

        <input type="submit" name="submit" value="Izračunaj">
    </p>

    <p>
        <label for="rezultat">Rezultat:</label>
        <input type="text" name="rezultat" id="rezultat" value="<?php echo $rezultat; ?> ">
    </p>
   
</form>