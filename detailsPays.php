<?php require_once 'header.php'; ?>

<?php require_once 'inc/manager-db.php';
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $id = $_GET['name'];
    $lePays = getInfo($id);

}

var_dump($lePays)

    ?>

<main role="main" class="flex-shrink-0"></main>

<div class="container">



    <div class="d-flex align-items-stretchl">
        <div class="card shadow-sm ">
            <h1><?php echo $lePays->Name ?></h1>
            <div class="card-body lh-sm d-flex flex-column">
                <p class=" lh-sm">
                </p>
            </div>
        </div>
        <div class="card shadow-sm ">
            <img src="image/flag/<?php echo strtolower($lePays->Code2)?>.png" alt="<?php echo $lePays->Code2 ?>">
            <div class="card-body lh-sm d-flex flex-column">
                <p class=" lh-sm">
                </p>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-stretchl">
        <div class="card shadow-sm ">

            <table class="table">

                <tr>
                    <td>Code</td>
                    <td>Continent</td>
                    <td>Capitale</td>
                    <td>Population</td>
                    <td>Superficie</td>
                </tr>
                <tr>
                    <td> <?php echo $lePays->Code ?> </td>
                    <td> <?php echo $lePays->Continent ?> </td>
                    <td> <?php echo getCapitale($pays->Capital)->Name ?> </td>
                    <td> <?php echo $lePays->Population ?> </td>
                    <td> <?php echo $lePays->SurfaceArea ?> </td>
                </tr>

            </table>

            <div class="card-body lh-sm d-flex flex-column">
                <p class=" lh-sm">
                </p>
            </div>
        </div>
    </div>

</div>



<?php require_once 'footer.php'; ?>

