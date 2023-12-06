<body id="corps">
       

<header class=" d-flex flex-wrap align-items-center justify-content-center  py-3 mb-2">
      <ul class="nav header col-12 col-md-auto mb-2 justify-content-center ">
        <li ><a href="" id="client"  class="nav-link bg-light rounded px-4   mx-3 h2" >Client</a></li>
        <li><a href="" id="chambres" class="nav-link bg-light rounded px-4  mx-3 h2">Chambres</a></li>
        <li><a href="" id="caisse" class="nav-link bg-light rounded px-4  mx-3 h2 ">Caisse</a></li>
           
        <li><a href="" class="nav-link bg-light rounded px-4 mx-3 h2">Param</a></li>
      </ul>

      <div class="col-md-2 text-end  ">
        <a href="./../logout.php" class="btn btn-primary h2 me-2">Logout</a>
      
      </div>
</header>
<div class="container">
       <!-- -------------------------CLIENT------------------ -->
     <div class="col-lg-12   box client-container rounded "  >
            <div class="d-flex justify-content-between ">
                <h4 class="p-2 px-4 h3 ">ENREGISTREMENT CLIENT</h4>
             <span class="btn py-0 btn-x btn-light my-1 mx-1 x-container"><i class="bi bi-x x" ></i></span>
            </div>
           
           <div class="text-center justify-content-center m-auto col-md-4" style="height:45px;"  id="message_client">
                 
              </div>
        <form action="" id="client_form">
               <div class="d-flex justify-content-between p-2 form-text  ">
                     <div class="mx-3 col-md-3">
                             <div class="form-group my-2 ">
                                   <label for="nom" class="form-label">Nom</label>
                                   <input type="text" name="nom" required  id="nom" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                   <label for="prenom" class="form-label">Prenom</label>
                                   <input type="text" name="prenom" required  id="prenom" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                  <label for="gender" class="form-label">Sexe</label>
                                   <select name="gender" required class="form-select" id="gender" class="">
                                          <option class="form-control">Choisir un sexe</option>
                                          <option value="Masculin" class="form-control">Masculin</option>
                                          <option value="Feminin" class="form-control">Feminin</option>
                                   </select>
                            </div>
                            <div class="form-group my-2">
                                   <label for="phone" class="form-label">Telephone</label>
                                   <input type="tel" name="phone"  required id="phone" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                   <label for="pays" class="form-label">Pays de provenance</label>
                                   <select name="pays" required id="pays" class="form-select">
                                   <option class="form-control">Pays de provenance</option>
                                   <option value="Madagascar" class="form-control">Madagascar</option>
                                   <option value="France" class="form-control">France</option>
                                   <option value="Spain" class="form-control">Spain</option>
                                   <option value="Japan" class="form-control">Japan</option>
                                   <option value="Turkey" class="form-control">Turkey</option>
                                   <option value="Germany" class="form-control">Germany</option>
                                   <option value="Mexico" class="form-control">Mexico</option>
                                   <option value="America" class="form-control">America</option>
                                   <option value="Canada" class="form-control">Canada</option>
                                   <option value="Australia" class="form-control">Australia</option>
                                   </select>
                            </div>
                     </div>

                     <div class="mx-3 col-md-3">
                             <div class="form-group my-2"> 
                                  <label for="num_carte" class="form-label">Numero de carte</label>
                                    <input type="text" name="num_carte" required  id="num_carte" class="form-control"> 
                            </div>
                            <div class="form-groupvmy-3"> 
                                  <label for="date_entre" class="form-label">Date d'entrée</label>
                                    <input type="date" name="date_entre" required id="date_entre" class="form-control"> 
                            </div>
                             <div class="form-group my-3"> 
                                  <label for="date_sortie" class="form-label">Date de sortie</label>
                                    <input type="date" name="date_sortie" required id="date_sortie" class="form-control"> 
                            </div>
                            <div class="form-group my-3">
                                   <label for="address">Adresse</label>
                                   <textarea name="address" id="address" required class="form-control"></textarea>
                            </div>
                     </div>
                            
                     <div class="mx-3 col-md-3">
                            <div class="form-group my-3"> 
                               <label for="type_chambre"   class="form-label">Type de chambre</label>
                                   <select name="type_chambre" required  id="type_chambre" class="form-select">
                                   <option class="form-control">Choisir le type de chambre</option>
                                   <option value="Studio" class="form-control">Studio</option>
                                   <option value="Penthouse" class="form-control">Penthouse</option>
                                    <option value="S+2" class="form-control">S+2</option>
                                   <option value="Suite" class="form-control">Suite</option>
                                   </select>     
                            </div>
                             <div class="form-group my-2"> 
                               <label for="nombre_lit" class="form-label">Nombre de lit</label>
                                   <input name="nombre_lit" id="nombre_lit" class="form-control">
                                    
                            </div>
                           
                            <div class="form-group my-3">
                                   <label for="num_chambre">Numero de chambre</label>
                                   <input type="text" name="num_chambre" id="num_chambre" class="form-control" >
                            </div>
                            <div class="form-group my-3">
                                   <label for="prix">Prix journalier</label>
                                   <input type="text" name="prix" id="prix" class="form-control">
                            </div>

                           <div class="form-group my-4 d-flex justify-content-between">
                            <input type="submit" name="client_submit" id="client_submit" value="Inscrire" class="btn btn-danger">
                            <input type="reset" value="Annuler" class="btn btn-danger">
                           </div> 
                     </div>
                    

                   
                </div> 
        </form>
           
              <div class="form-group my-4 processClient" id="" style="display:none;">
        <div class="progress">
            <div class="progress-bar  p-1"  role="progressbar" aria-valuemin="0" aria-value="100">
            <span id="counter"></span>      
            </div>
        </div>
       </div>

     </div><!-- ----------END CLIENT--------- -->

    

             <!-- ----------------------------CHAMBRE--------- -->

     <div class="col-lg-12 box  chambres-container rounded ">
            <div class="d-flex justify-content-between ">
                <h4 class="p-2 px-4 h3">ENREGISTREMENT CHAMBRE</h4>
             <span class="btn py-0 btn-x btn-light my-1 mx-1 x-container"><i class="bi bi-x x" ></i></span>
            </div>
           
              <div class="text-center justify-content-center m-auto  col-md-4"  id="message" style="height:45px;">
                 
              </div>

               
              <div class="d-flex justify-content-around p-1">
                     <div class="col-md-6 chambres my-1 pb-2 rounded" id="displayDataTable">
                            
                     </div>
                  <div class="col-md-4 mx-4 ">
                     <form action="" id="chambre_form">
               
                     <div class="form-group my-1">
                            <label for="numChambres" class="form-label">Numero de chambres</label>
                            <input type="text" name="numChambres" id="numChambres" required class="form-control" >
                       </div>
                       <div class="form-group my-1">
                            <label for="typeChambres" class="form-label">Type de chambres</label>
                            <select name="typeChambres" id="typeChambres" required class="form-select">
                                   <option class="form-control">Choisir le type de chambre</option>
                                   <option value="Studio" class="form-control">Studio</option>
                                   <option value="Penthouse" class="form-control">Penthouse</option>
                                   <option value="S+2" class="form-control">S+2</option>
                                   <option value="Suite" class="form-control">Suite</option>
                                    
                            </select>
                      </div>
                     <div class="form-group my-1"> 
                               <label for="lit" class="form-label">Nombre de lit</label>
                                   <select name="lit" id="lit"  required class="form-select">
                                   <option class="form-control">Choisir le nombre de lit</option>
                                   <option value="1" class="form-control">1</option>
                                   <option value="2" class="form-control">2</option>
                                    <option value="4" class="form-control">4</option>
                                   <option value="5+" class="form-control">5+</option>
                                   </select>     
                            </div>
                            <div class="form-group my-1">
                                   <label for="price">Prix journalier</label>
                                   <input type="text" required name="price" id="price" class="form-control">
                            </div>
                            <div class="form-group my-5 d-flex justify-content-between">
                                   <input type="submit" id="chambre_submit" value="Enregistrer" class="btn btn-danger">
                                  
                                   <input type="reset" value="Annuler" class="btn btn-danger">
                            </div>
                            
                     </div>
                </form>
              </div>
           </div>    
             
        <div class="form-group my-2 process" id="" style="display:none">
              <div class="progress">
                     <div class="progress-bar progress-bar-striped p-1"  role="progressbar" aria-valuemin="0" aria-value="100">
                            <span id="counter"></span>      
                     </div>
              </div>
       </div>
       
  

                      <!-- update chambre-->
<div class="modal" id="UpdateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier l'enregistrement de chambres</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="chambre_form_update">
                      <div class="form-group my-2">
                            <label for="update_numChambr" class="form-label">Numero de chambres</label>
                            <input type="text" name="update_numChambr" id="update_numChambr" required class="form-control" >
                            
                       </div>
                       <div class="form-group my-2">
                            <label for="updateTypeChambre" class="form-label">Type de chambres</label>
                            <select id="updateTypeChambre" class="form-select">
                                   <option class="form-control">Choisir le type de chambre</option>
                                   <option value="Studio"  class="form-control">Studio</option>
                                   <option value="Penthouse" class="form-control">penthouse</option>
                                   <option value="S+2" class="form-control">S+2</option>
                                   <option value="Suite" class="form-control">Suite</option>     
                            </select>
                      </div>
                     <div class="form-group my-2"> 
                               <label for="updateLit" class="form-label">Nombre de lit</label>
                                   <select name="updat"  id="updateLit"  class="form-select">
                                          <option class="form-control">Choisir le nombre de lit</option>
                                          <option value="1" class="form-control">1</option>
                                          <option value="2" class="form-control">2</option>
                                          <option value="4" class="form-control">4</option>
                                          <option value="5+" class="form-control">5+</option>
                                   </select>     
                            </div>
                            <div class="form-group my-2">
                                   <label for="updatePrice">Prix journalier</label>
                                   <input type="text" required name="updatePrice" id="updatePrice" class="form-control">
                                   <input type="hidden" id="hiddenId">
                            </div>
                                                       
                     </form>
                      </div>
                     <div class="modal-footer">
                     <button type="button" onclick="updateData()" class="btn btn-primary">Save changes</button>
                     </div>
               </div>
       </div>
</div> 
   
    


     <!-- ---------END -CHAMBRE--------- -->


     <!-- ----------CAISSE--------- -->
     <div class="col-lg-12 box  caisse-container rounded ">
            <div class="d-flex justify-content-between ">
                <h4 class="p-2 px-4 h3">CAISSE</h4>
             <span class="btn py-0 btn-x btn-light my-1 mx-1 x-container"><i class="bi bi-x x" ></i></span>
            </div>
           
              <div>
                     <div class="col-md-6 m-auto form-text ">
                          
                                   <div class="form-group  ">
                                          <label for="search" class="control-label ">Numero de la chambre</label>
                                          <input type="text" id="search" name="" class="form-search">
                                          <input type="submit" value="Rechercher" id="" class="btn btn-primary">
                                   </div>
                        </div>      
        <form action="" id="caisse_form">
               <div class="d-flex justify-content-between p-2 form-text  ">
                     <div class="mx-3 col-md-3">
                             <div class="form-group my-2 ">
                                   <label for="nom_caisse" class="form-label">Nom</label>
                                   <input type="text" name="nom_caisse"  id="nom_caisse" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                   <label for="prenom_caisse" class="form-label">Prenom</label>
                                   <input type="text" name="prenom_caisse"  id="prenom_caisse" class="form-control">
                            </div>
                            
                            <div class="form-group my-2">
                                   <label for="phone" class="form-label">Telephone</label>
                                   <input type="tel" name="phone_caisse"  id="phone_caisse" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                   <label for="pays_caisse" class="form-label">Pays de provenance</label>
                                   <input type="text" name="pays_caisse" id="pays_caisse" class="form-control">
                            </div>
                            <div class="form-group my-2"> 
                                  <label for="num_carte_caisse" class="form-label">Numero de carte</label>
                                    <input type="text" name="num_carte_caisse"  id="num_carte_caisse" class="form-control"> 
                            </div>
                     </div>

                     <div class="mx-3 col-md-3">
                             
                            <div class="form-group my-2"> 
                                  <label for="date_entre_caisse" class="form-label">Date d'entrée</label>
                                    <input type="text" name="date_entre_caisse" id="date_entre_caisse" class="form-control"> 
                            </div>
                             <div class="form-group my-2"> 
                                  <label for="date_sortie_caisse" class="form-label">Date de sortie</label>
                                    <input type="text" name="date_sortie_caisse"  id="date_sortie_caisse" class="form-control"> 
                            </div>
                            <div class="form-group my-2">
                                   <label for="address_caisse" class="form-label">Adresse</label>
                                   <input name="address_caisse" id="address_caisse" class="form-control">
                            </div>
                             <div class="form-group my-2"> 
                               <label for="type_chambre_caisse"   class="form-label">Type de chambre</label>
                                  <input type="text" name="type_chambre_caisse" id="type_chambre_caisse" class="form-control">     
                            </div>
                            <div class="form-group my-3">
                                   <label for="prix_caisse">Prix journalier</label>
                                   <input type="text" name="prix_caisse" id="prix_caisse" class="form-control">
                            </div>
                          
                     </div>
                            
                     <div class="mx-3 col-md-3">
                           
                                                       
                            
                            
                            <div class="form-group my-3">
                                   <label for="nombre_jour">Nombre de jour</label>
                                   <input type="text" name="nombre_jour" id="nombre_jour" class="form-control">
                            </div>
                            <div class="form-group my-3">
                                   <label for="total_payement">Total à payer</label>
                                   <input type="text" name="total_payement" id="total_payement" class="form-control">
                            </div>
                            <div class="form-group my-3">
                                   <label for="date_payement">Date de payement</label>
                                   <input type="text" name="date_payement" id="date_payement" class="form-control">
                            </div>
                             <input type="hidden" id="num_chambre_caisse" name="num_chambre_caisse" >
                             <input type="hidden" id="id_fac" name="id_fac" >

                           <div class="form-group my-4 d-flex justify-content-between">
                            <input type="hidden" value="<?=$model?>" id="user_type">
                            <input type="hidden" value="<?=$_GET['id']?>" id="user_id">
                           
                       
                            <input type="submit" name="payer" id="payer" value="Payer" class="btn btn-danger">
                             </div> 

                     </div>
                    
                 
                   
                </div> 
        </form>
                   
                     
              </div>

     </div> <!-- ---------caisse-container-------- -->
     <!-- ----------END CAISSE--------- -->


     
</div>     <!-- ---------End container--------- -->
