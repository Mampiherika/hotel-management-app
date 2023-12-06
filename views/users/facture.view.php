<div class="container d-flex justify-content-center ">
    <div class="row col-md-5 my-4 bg-light">
        <div class="p-3 ">
            
                <p class="text-end mb-0 pe-3">N° bordéreau :<?= $model['id']?></p>
            
                <div>
                <p class="m-0"> Nom :<?= $model['nom']?></p>
                <p class="m-0"> Prenom :<?= $model['prenom']?></p>
                <p class="m-0"> Pays :<?= $model['pays']?></p>
                

                </div>
                <hr class="my-2">
                <div>
                <p class="m-0"> Numero de chambre :<?= $model['num_chambre']?></p>
                <p class="m-0"> Date d'entrée :<?=$model['date_entre']?></p>
                <p class="m-0"> Date de sortie :<?=$model['date_sortie']?></p>
                </div>
                <hr class="my-2">
                <div>
                <p class="m-0">Prix de chambre par jour :..................................<?= $model['prix_journalier']?> $</p>
                <p class="m-0"> Nombre total de séjour :.....................................<?= $model['nombre_jour']?> jour</p>
                <p> Total à payer :..................................................<?=$model['total_payer']?> $</p>
               </div>
               <hr class="my-2">
              <p class="text-center"> Tout payé</p>
              <p class=" mt-1"> Today <?=$model['date_payement']?></p>
                <p class="text-center"><i>Merci pour votre visite!</i> </p>
               
        </div>
        <div class="my-1">
        <input type="button" onclick=""  id="imprimer" value="Imprimer" class="btn btn-secondary">
        <input type="hidden" id="user" value="<?= $_GET['user_type']?>">
         
          <input type="hidden" value="<?=$_GET['id']?>" id="user_id">
        
         <input type="button" onclick=""  id="archive" value="Archiver" class="btn btn-secondary" style="display:none">
        </div>
        
    </div>

</div>