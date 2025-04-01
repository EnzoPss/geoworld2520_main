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
 if (isset($_GET['name']) && !empty($_GET['name'])) {
   $nom = $_GET['name'];
   $desPays = getCountriesByContinent($nom);
 } else {
   $nom = "Monde";
   $desPays = getAllCountries();
 }
 ?>

<main role="main" class="flex-shrink-0">

  <div class="container">
    <h1>Les pays en <?= $nom ?></h1>
    <div>
     <table class="table">
         <tr>
           <th>Nom</th>
           <th>Population</th>
           <th>Capitale</th>
           <th>Superficie</th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
        foreach ($desPays as $pays): ?>
          <tr>
            <td> <?php echo $pays->Name ?></td>

            <td> <?php echo $pays->Population ?></td>

            <?php if (!empty(getCapitale($pays->Capital))):?>
              <td> <?php echo getCapitale($pays->Capital)->Name ?></td>
            <?php else :?>
              <td><i> <?php echo "---Pas de capitale---" ?> </i>
            <?php endif ?>
            
            <td> <?php echo $pays->SurfaceArea ?></td>
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
