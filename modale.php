
<!-- On splite la modale et l'affichage des bières pour plus de clarté -->

<!-- On envoie directement à la modale des variables php (données de la BDD) dans le code ci dessous, ex : dans la 1ère div -->

<!-- Modal -->

<div class="modal fade" id="myModal<?php echo $donnees['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel" style="color:black;"><?php echo $donnees['id']; ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5 beer_pic_details">
                        <?php echo '<img class="" src="Pictures/'.$donnees['Picture_path'].'" />'; ?>
                    </div>
                    <ul class="col-sm-7 full_detail_beer">
                        <li>Brand : <?php echo $donnees['Brand'] . " " . $donnees['Product'] ; ?></li>
                        <li>Price : <?php echo $donnees['Price'] . " $"; ?></li>
                        <li>Volume : <?php echo $donnees['Volume'] . " L";?></li>
                        <li>Proof : <?php echo $donnees['Proof'] . "°";?></li>
                        <li>Color : <?php echo $donnees['Color']; ?></li>
                        <li>Country : <?php echo $donnees['Country']; ?></li>
                        -->
                        <!-- type missing-->
                        <li>Website : <?php echo '<a href="'.$donnees['Website'].' ">'.$donnees['Website'].'</a>';?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
