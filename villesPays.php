<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
 <?php require_once 'header.php'; ?>
 <?php require_once 'inc/manager-db.php';
 if (isset($_GET['id']) && !empty($_GET['id'])) {
   $nom = $_GET['id'];
   $villes = getVillesPays($nom);
   //test($villes);
 }

 ?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les grandes villes en ... </h1>
    <div>
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Region</th>
           <th>Population</th>
         </tr>
       <?php
       
        foreach ($villes as $ville): ?>

          <tr>
            <td> <?php echo $ville->Name ?> </td>

            <td> <?php echo $ville->District ?> </td>

            <td> <?php echo $ville->Population ?></td>
          </tr>
        <?php endforeach ?>
     </table>
    </div>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
