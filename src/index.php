<?php 
    require_once 'connexion.php';
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Page d'accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link href="homepage.css" rel="stylesheet" type="text/css" />

    <link
        href="https://fonts.googleapis.com/css?family=Montserrat|Rubik:300|Roboto:300,400,500,700|Playfair+Display:700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/960ffcdeb4.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="container">
        <img id="cover" src="ressources/header.jpg" width="100%" heigth="100%">

        <!-- Afficher les jobs de bases -->
        <ul id="basic_jobs">
            <li id="job_name"></li>
            <ul id="jobs_img">
                <?php foreach($jobs as $job){?><li><img id="<?php echo $job->nom_m ?>" src="<?php echo $job->src ?>"></li>
                <?php } ?></ul>
        </ul>
        <!-- Fin -->

        <!-- Infos des jobs -->
        <?php $cpt=0 ?>
        <div id="tab_jobs">
        <table>
            <tr>
                <th colspan='8'>Aptitudes actives</th>
                <th colspan='4'>Aptitudes passives</th>
            </tr>
            <tr>
                <?php for($i=0;$i<3;$i++){?><td colspan='4'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?></tr>
            <tr>
                <?php for($i=0;$i<3;$i++){?><td colspan='4'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?></tr>
            <tr>
                <?php for($i=0;$i<3;$i++){?><td colspan='4'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?></tr>
            <tr>
                <?php for($i=0;$i<3;$i++){?><td colspan='4'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?></tr>
            <tr>
                <th colspan='2' rowspan='4'>Bonus</th>
                <th colspan='2'>PV Max</th>
                <th colspan='2'>PT Max</th>
                <th colspan='2'>Att P</th>
                <th colspan='2'>Def P</th>
                <th colspan='2'>Att Elem</th>
            </tr>
            <tr>
                <?php for($i=0;$i<5;$i++){?><td colspan='2'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?></tr>
            </tr>
            <tr>
                <th colspan='2'>Def Elem</th>
                <th colspan='2'>Pre</th>
                <th colspan='2'>Crit</th>
                <th colspan='2'>Vit</th>
                <th colspan='2'>Esq</th>
            </tr>
            <tr>
                <?php for($i=0;$i<5;$i++){?><td colspan='2'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?></tr>
            </tr>
            <tr>
                <th colspan='6'>Armes</td>
                <th colspan='6'>Obtention</td>
            </tr>
            <tr>
                <?php for($i=0;$i<2;$i++){?><td colspan='3'><div id="job_info_<?php echo $cpt++ ?>"></td>
                <?php }?>
                <td colspan='6'><div id="job_info_<?php echo $cpt++ ?>"></td>
            </tr>
        </table>
        </div>
        <!-- Fin -->

    </div>

    <?php include "scripts.php" ?>

</body>

</html>