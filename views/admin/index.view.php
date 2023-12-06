<body id="corps">   
<header class=" d-flex flex-wrap align-items-center justify-content-center  py-3 mb-2">
      <ul class="nav header col-12 col-md-auto mb-2 justify-content-center ">
        <li ><a href="" id="client"  class="nav-link bg-light rounded px-4   mx-3 h2" >Client</a></li>
        <li><a href="" id="chambres" class="nav-link bg-light rounded px-4  mx-3 h2">Chambres</a></li>
        <li><a href="" id="caisse" class="nav-link bg-light rounded px-4  mx-3 h2 ">Caisse</a></li>
           <li><a href="" id="admin" class="nav-link bg-light rounded px-4  mx-3 h2">Admin</a></li>
           <li><a href="" id="stat" class="nav-link bg-light rounded px-4  mx-3 h2">Stat</a></li>
        <li><a href="" id="trava" class="nav-link bg-light rounded px-4  mx-3 h2">Trava</a></li>
        <li><a href="" id="param" data-bs-toggle="modal" data-bs-target="#modal_aside_right" class="nav-link bg-light rounded px-4 mx-3 h2">Param</a></li>
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


     <!-- ----------ADMIN PAGE--------- -->
     <div class="col-lg-12 box  admin-container ">
            <div class="d-flex justify-content-between ">
                <h4 class="p-2 px-4 h3">BONJOUR ADMIN</h4>
             <span class="btn py-0 btn-x btn-light my-1 mx-1 x-container"><i class="bi bi-x x" ></i></span>
            </div>
            
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add users</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<div class=" d-flex align-items-center col-md-12   ">
      <main class="p-3 pt-0 w-100 fw-normal m-auto ">
         <h1 class="h5 fw-normal text-center">Please sign in</h1>
            <div class="text-center" style="height:45px;z-index:999;" id="success-message">

            </div>
      <form action="" method="post"    id="signin-form">
       <div class="d-flex mb-2">
              <div class="form-group mx-1  ">
                     <label for="user_nom">Name : </label>
                     <input class="form-control" type="text" name="user_nom" required  id="user_nom" >
                     
                     </div>
              <div class="form-group mx-1 ">
                     <label for="user_prenom">Second Name : </label>
                     <input class="form-control" type="text" name="user_prenom" required  id="user_prenom" >

              </div>
       </div>
             
            <div class="form-group mb-1 ">
               <label for="email" class="form-label">Email Address :</label>
                <input type="text" class="form-control" name="email" required  id="email" >
                     
            </div>
            <div class="form-group mb-1 ">
                     <label for="password">Password :</label>
                <input class="form-control" type="password" name="password" required  id="password" >
                          
            </div>
      
        
            <div class="form-group mb-1 ">
               <label for="confirmPwd">Confirm password :</label>
                <input class="form-control" type="password" name="confirmPwd" required id="confirmPwd" >
                 
            </div>
       
            <div class=" d-flex justify-content-center mt-1">
                <input type="submit" class="btn btn-primary w-100 py-2"  id="signin"  value="Sign-in">
            </div>
            
                                
       </form> 
       <div class="form-group my-1" id="process" style="display:none;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped p-1"  role="progressbar" aria-valuemin="0" aria-value="100">
            <span id="counter"></span>      
            </div>
        </div>
       </div>
       </main> 
      </div>
       
      <div class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div> 

 </div> <!-- End modal -->
 <div class="text-center" style="height:45px;" id="success-msg">

            </div>
    <div class="mt-2 mx-3 d-flex justify-content-center">

       <div class="col-md-4 mx-3">
              <form action="" id="email_search_form">
       <div class="input-group">
          <input type="text" id="email_search" placeholder="Recherche par email" class="form-control">

              <span class="input-group-text">
              <i class="bi bi-x" style="font-size:1.4rem;cursor:pointer" id="search_cancel"></i>
                </span>
          </div>
            </form>  
       </div>
       <a href="#" data-bs-toggle="modal" class="btn btn-danger" data-bs-target="#exampleModal">Add users</a> 
    </div>  
    <div class="my-4 px-5 mx-2 " >
       <div class="user-table bg-light " id="user-table" style="height:300px;" >

    </div>
    </div>
    

     </div><!-- End admin container -->



  <!-- ----------END ADMIN--------- -->

  <!-- ----------HISTORIQUE--------- -->
     <div class="col-lg-12 box stat-container ">
            <div class="d-flex justify-content-between ">
                <h4 class="p-2 px-4 h3 " style="font-weight:bold;">HISTORIQUE</h4>
             <span class="btn py-0 btn-x btn-light my-1 mx-1 x-container"><i class="bi bi-x x" ></i></span>
               </div>
           <div class="col-md-12 justify-content-center d-flex align-items-center">
                     <div class="col-md-6 px-4 d-flex align-items-center">
                     <div class="ms-4 col-md-6 align-items-center" style="font-weight:bold;">
                               <p class="text-center pt-2 mb-1">   RECHERCHE PAR DATE:</p>  
   
                     </div> 
                     
                            <div class="input-group  align-items-center ">
                            <input type="date" id="search_input_date"  class="form-control " >  
                           
                                   <span class="input-group-text "  style="cursor:pointer" >
                                   <i class="bi bi-x me-2" style="font-size:1rem;"  id="search_date_cancel"></i>
                                   <i class="bi bi-search ms-2  " id="search_icon">     
                                   </i>
                                   </span>
                                  
                            </div>
                            
                     </div>
                     
                     <div class="col-md-6 px-5 justify-content-center d-flex align-items-center">
                            <div class="ms-4  col-md-6 align-items-center" style="font-weight:bold;">
                                  <p class="text-center pt-2 mb-1">RECHERCHE PAR NOM:</p> 
                                  
                             </div> 
                             <div class="input-group align-items-center  ">
                            <input type="text"  id="search_input_name" placeholder="Taper un nom..." class="form-control"> 
                                   <span class="input-group-text" style="cursor:pointer" >
                                          <i class="bi bi-x me-2" style="font-size:1rem;"  id="search_nom_cancel"></i>
                                          <i class="bi bi-search ms-2" >  </i>
                                   </span>
                            </div>
                     </div>
           </div><!-- end div col-md-12 search container -->
           <div class="d-flex justify-content-around">
              <div class="text-end  col-md-6 text-danger " id="date_empty" style ="padding-right:11rem;font-size:0.9rem;"></div>
              <div class="text-end col-md-6 text-danger" id="name_empty" style ="padding-right:10rem;font-size:0.9rem;"></div>
           </div>
           <div class="  p-3  my-2 "  >
              <div class="bg-light result-container table-responsive-sm" style="height:25vh;overflow:scroll"  >
             
              </div>
           </div>

           <!--------racherche travailleur----------->

        <div class="col-md-12 px-5 justify-content-center d-flex align-items-center">
              
              <div class="ms-4  col-md-6 align-items-center" style="font-weight:bold;">
                            <p class="text-center pt-2 mb-1">RECHERCHE TRAVAILLEUR:</p> 
                                  
               </div> 
              <div class="input-group align-items-center  ">
                            <input type="text"  id="search_input_name_trava" placeholder="Taper un nom..." class="form-control"> 
                                   <span class="input-group-text" style="cursor:pointer" >
                                          <i class="bi bi-x me-2" style="font-size:1rem;"  id="search_nom_cancel_trava"></i>
                                          <i class="bi bi-search ms-2" >  </i>
                                   </span>
               </div>
                           
                           
               </div>
                    
              
           <div class="  p-3  my-2 "  >
              <div class="bg-light result-container-trava table-responsive-sm" style="height:25vh;overflow:scroll"  >
             
              </div>
           </div>
           <!---------end recherche travailleur------->

    </div><!-- end div col-md-12 search container -->


      
                    
  <!-- -----------------------------------END---HISTORIQUE--------- -->

  <!-- -----------------------------------TRAVAILLEUR--------- -->
     <div class="col-lg-12 box  trava-container rounded ">
            <div class="d-flex justify-content-between ">
                <h4 class="p-2 px-4 h3">ENREGISTREMENT TRAVAILLEUR</h4>
             <span class="btn py-0 btn-x btn-light my-1 mx-1 x-container"><i class="bi bi-x x" ></i></span>
            </div>
           

       <div class="text-center justify-content-center m-auto col-md-4" style="height:45px;"  id="message_trava">
                 
              </div>
        <form action="" id="travailleur_form">
               <div class="d-flex justify-content-between p-2 form-text  ">
                     <div class="mx-3 col-md-3">
                             <div class="form-group my-2 ">
                                   <label for="nom_trava" class="form-label">Nom</label>
                                   <input type="text" name="nom_trava" id="nom_trava" required class="form-control">
                            </div>
                            <div class="form-group my-2">
                                   <label for="prenom_trava" class="form-label" >Prenom</label>
                                   <input type="text" name="prenom_trava" id="prenom_trava" required class="form-control">
                            </div>
                            <div class="form-group my-2">
                                  <label for="gender_trava" class="form-label">Sexe</label>
                                   <select name="gender_trava" class="form-select" id="gender_trava" class="">
                                          <option >Choisir un sexe</option>
                                          <option value="Masculin" >Masculin</option>
                                          <option value="Feminin" >Feminin</option>
                                   </select>
                            </div>
                            <div class="form-group my-2">
                                   <label for="phone_trava" class="form-label" required>Telephone</label>
                                   <input name="phone_trava" type="tel"  id="phone_trava" class="form-control">
                            </div>
                            
                     </div>

                     <div class="mx-3 col-md-3">
                             <div class="form-group my-2"> 
                                  <label for="civilite" class="form-label">Civilité</label>
                                    <select name="civilite" id="civilite" class="form-select">
                                          <option value="">choisir une civilité</option>
                                          <option value="malagasy">Malagasy</option>
                                           <option value="fraçais">Français</option>
                                          <option value="japonais">Japonais</option>
                                          <option value="américain">Américain</option>
                                    </select>
                            </div>
                            <div class="form-groupvmy-3"> 
                                  <label for="date_naissance" class="form-label" >Date de naissance</label>
                                    <input name="date_naissance" type="date"  id="date_naissance" required class="form-control"> 
                            </div>
                             <div class="form-group my-3"> 
                                  <label for="poste" class="form-label">Poste</label>
                                  <select  class="form-select"  name="poste_trava" id="poste_trava">
                                  <option >Chosir un poste</option>
                                  <option value="Caissier">Caissier</option>
                                      <option value="Plongeur">Plongeur</option>
                                      <option value="Chef Cuisinier">Chef Cuisinier</option>
                                      <option value="Cuisinier">Cuisinier</option>
                                      <option value="Demi Chef Cuisinier">Demi Chef Cuisinier</option>
                                      <option value="Femme de Ménage">Femme de Ménage</option>
                                      <option value="Receptioniste">Réceptioniste</option>
                                      <option value="Manager">Manager</option>
                                      <option value="Serveur">Serveur</option>
                                      <option value="Gardien">Gardien</option>
                                  </select>
                              
                            </div>
                            <div class="form-group my-3">
                                   <label for="address_trava">Adresse</label>
                                   <textarea name="address_trava" id="address_trava" required class="form-control"></textarea>
                            </div>
                     </div>

                     <div class="mx-3 col-md-3">
                             <div class="form-group my-2"> 
                               <label for="num_cart_trava" class="form-label">Numero de la carte</label>
                                    <input name="num_cart_trava" type="text" id="num_cart_trava"required class="form-control">
                            </div>

                            <div class="form-group my-2"> 
                               <label for="salaire" class="form-label">Salaire</label>
                                    <input type="text" name="salaire" id="salaire" required class="form-control">
                            </div>
                            
                            

                           <div class="form-group my-4 d-flex justify-content-between">
                           <input type="submit" id="enregistrer"  class="btn btn-danger" value="Enregistrer">
                           </div> 

                     </div>
                    

                   
                </div> 
        </form>
           
<div class="form-group my-4 process_trava" id="" style="display:none;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped p-1"  role="progressbar" aria-valuemin="0" aria-value="100">
            <span id="counter"></span>      
            </div>
        </div>
       </div>
     </div>
     <!-- ---------END-TRAVAILLEUR--------- -->

      <!---------update travalleur------->

      <div class="modal" id="updateTravaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update travailleur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <form id="travailleur_form_update">
                <div class="text-center justify-content-center m-auto" style="height:45px;"  id="update_message_trava">
                 
                 </div>
                               <div class="form-group ">
                                      <label for="update_phone_trava" class="form-label" required>Telephone</label>
                                      <input name="update_phone_trava" type="tel"  id="update_phone_trava" class="form-control">
                                      <input type="hidden" name="" id="hiddenid">
                               </div>
                                <div class="form-group "> 
                                     <label for="update_poste" class="form-label">Poste</label>
                                     <select  class="form-select"  name="update_poste" id="update_poste">
                                     <option >Chosir un poste</option>
                                      <option value="Caissier">Caissier</option>
                                      <option value="Plongeur">Plongeur</option>
                                      <option value="Chef Cuisinier">Chef Cuisinier</option>
                                      <option value="Cuisinier">Cuisinier</option>
                                      <option value="Demi Chef Cuisinier">Demi Chef Cuisinier</option>
                                      <option value="Femme de Ménage">Femme de Ménage</option>
                                      <option value="Receptioniste">Réceptioniste</option>
                                      <option value="Manager">Manager</option>
                                      <option value="Serveur">Serveur</option>
                                      <option value="Gardien">Gardien</option>
                                     </select>
                               </div>
                               <div class="form-group ">
                                      <label for="update_address_trava">Adresse</label>
                                      <input name="update_address_trava" id="update_address_trava" class="form-control">
                               </div>
                                <div class="form-group "> 
                                  <label for="update_cart_trava" class="form-label">Numero de la carte</label>
                                       <input name="num_cart_trava" type="text" id="update_cart_trava" class="form-control">
                               </div>
   
                               <div class="form-group "> 
                                  <label for="update_salaire" class="form-label">Salaire</label>
                                       <input type="text" name="update_salaire" id="update_salaire"  class="form-control">
                               </div>
                             
           </form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="updateDataTrava()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

</div>

<div id="modal_aside_right" class="modal fixed-right fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Paramétres</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" onclick="changeTheme(1)" id="mySwitch" name="darkmode" value="yes">
  <label class="form-check-label" for="mySwitch">Dark Mode</label>
</div>

    </div>
  </div> <!-- modal-bialog .// -->

</div>
</div>     <!-- ---------End container--------- -->
