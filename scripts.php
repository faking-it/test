<script type="text/javascript">
// Afficher le nom du job au survol
        <?php foreach($jobs as $job){?>document.getElementById("<?php echo $job->nom_m ?>").addEventListener("mouseover", () => {
                if(<?php echo $job->id?> != 5)
                {document.getElementById("job_name").innerHTML = "<?php echo $job->nom_m ?>/<?php echo $job->nom_f ?>";}
                else
                {document.getElementById("job_name").innerHTML = "<?php echo $job->nom_m ?>";}

                document.getElementById("<?php echo $job->nom_m ?>").addEventListener("mouseout", () => {
                    document.getElementById("job_name").innerHTML = "";
                })
            })
        <?php } ?>
// Fin

// Afficher les infos du job sélectionné
    document.getElementById("tab_jobs").style.display = "none";
        <?php foreach($jobs as $job){?>document.getElementById("<?php echo $job->nom_m ?>").addEventListener("click", () => {
                <?php $cpt=0; $job_info_nom=$job->nom_m; foreach($jobs_info as $job_info){?>document.getElementById("job_info_<?php echo $cpt++ ?>").innerHTML = "<?php echo $job_info->$job_info_nom ?>"
                <?php } ?>document.getElementById("tab_jobs").style.display = "initial";
                job_select = "<?php echo $job->nom_m ?>";
                })
        <?php } ?>
// Fin

// Afficher les infos des données sélectionnées
        <?php $cpt=0; foreach($infos_bulle as $info_bulle){?>document.getElementById("job_info_<?php echo $cpt ?>").addEventListener("mouseenter", () => {
                let divInfo = document.createElement('div');
                divInfo.style.position = 'absolute';
                    
                    x = event.clientX;
                    y = event.clientY;
                    divInfo.style.left = x+15+'px';
                    divInfo.style.top = y+15+'px';

                divInfo.id = 'info_survol';    
                <?php foreach($jobs as $job){?>if (job_select == "<?php echo $job->nom_m;?>"){
                    divInfo.innerHTML = "<?php $info_bulle_nom=$job->nom_m; echo $info_bulle->$info_bulle_nom; ?>";
                }
                <?php } ?>document.body.appendChild(divInfo);

                document.getElementById("job_info_<?php echo $cpt ++ ?>").addEventListener("mouseout", () => {
                    document.body.removeChild(divInfo);
                })
            })
        <?php } ?>
// Fin

</script>