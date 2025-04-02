<?php require_once 'header.php'; 

require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $id = $_GET['name'];
    $pays = getInfo($id);

}

var_dump($pays)

?>

<main role="main" class="flex-shrink-0"></main>

<div class="container">
    
    <table>
        <tr>
            <td><img src="images/flag/<?php echo strtolower($pays->Code2)?>.png" alt="<?php echo $pays->Code2 ?>"></td>
            <td><h1><?php echo $pays->Name ?></h1></td>
        </tr>
    </table>
    
    
    <table class="table">

        <tr>
            <td><b>Code</b></td>
            <td><b>Continent</b></td>
            <td><b>Capitale</b></td>
            <td><b>Population</b></td>
            <td><b>Superficie</b></td>
        </tr>
        <tr>
            <td> <?php echo $pays->Code ?> </td>
            <td> <?php echo $pays->Continent ?> </td>

            <td> <?php echo getCapitale($pays->Capital)->Name ?> </td>

            <td> <?php echo $pays->Population ?> </td>
            <td> <?php echo $pays->SurfaceArea ?> </td>
        </tr>

    </table>

</div>


<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>