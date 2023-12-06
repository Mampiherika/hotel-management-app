
$(document).ready(function () {
    /**************** sign up******************* */
    $('#signin-form').on('submit', function (event) {
        event.preventDefault();
            $.ajax({
            url: "signup.php",
            method: "POST",
            data:$(this).serialize(),           
            beforeSend: (data) => {
                $('#sign-in').attr('disabled', 'disabled');
                $('#process').css('display', 'block');
                
            },
           
            success: (data ,status) => {
                var percentage = 0;
                var timer = setInterval(() => {
                    percentage += 20;
                    progress_bar_process(percentage, timer,data)
                }, 300);
               
            }
           
            
        });
        

    });

    
    /**********************Progress bar******************* */

    function progress_bar_process(percentage, timer,data='') {
        $('.progress-bar').css('width', percentage + '%');
        $('#counter').html(percentage + '%');
       if (percentage > 99) {
            clearInterval(timer);
            
            $('#process').hide();
            $('.progress-bar').css('width', '0%');
            
           $('#sign-in').attr('disabled', false);
           if (data !== '') {
               $('#success-message').html(`<div class="alert p-0 alert-danger">${data}</div>`);
               setTimeout(() => {
                   $('#success-message').html('');
               }, 5000);
               $('#signin-form').trigger('reset');
               
           } else {
               displayUsers();
               $('#success-message').html('<div class="alert p-0 alert-success">Registered successfully</div>')
               setTimeout(() => {
                   $('#success-message').html('');
               }, 5000);
               $('#signin-form').trigger('reset');
             
           }
          
             
        } 

    }

    

    /***************CLIENT************/
    let overlay ='<div id="overlay" style="background-color:grey;opacity:0.001;position:absolute;top:0;left:0;height:10%;width:100%;z-index:99"></div>'
       
    $('#client').on('click', function (e) {
            e.preventDefault();
        $('.client-container').slideDown("slow");
            $('header').append(overlay)
        })
   
        
         $('.x-container').on('click', function () {
             $('.box').slideUp("slow");
             $('#overlay').remove();
        })
    $('#caisse').on('click', function (e) {
        e.preventDefault();
        $('.caisse-container').slideDown("slow");
        $('header').append(overlay)
       
    })
    $('#chambres').on('click', function (e) {
        e.preventDefault();
        $('.chambres-container').slideDown("slow");
        $('header').append(overlay)

    })
    $('#admin').on('click', function (e) {
        e.preventDefault();
        $('.admin-container').slideDown("slow");
        $('header').append(overlay)
       
    })
    $('#stat').on('click', function (e) {
        e.preventDefault();
        $('.stat-container').slideDown("slow");
        $('header').append(overlay)
       
    })
   
    $('#trava').on('click', function (e) {
        e.preventDefault();
        $('.trava-container').slideDown("slow");
        $('header').append(overlay)
       
    })

    /**********************Enregistrements chambres************************ */

    $('#chambre_form').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "./../users/chambres.php",
            method: "POST",
            data: $(this).serialize(),
            beforeSend: (data) => {

                $('body').append('<div id="overlaySend" style="background-color:grey;opacity:0.5;position:absolute;top:0;left:0;height:100%;width:100%;z-index:999"></div>');
                $('.process').show();

            },

            success: (data, status) => {
                        
                
                var percentage = 0;
                var timer = setInterval(() => {
                    percentage += 20;
                    progress_bar_process_form(percentage, timer, data,'#chambre_form')
                }, 200);

            }


        });
    })        

    /*************************************Enregistrement client****************************************** */

    $('#client_form').on('submit', function (e) {
        e.preventDefault();
        $('#nombre_lit').attr('disabled', false)
        $('#num_chambre').attr('disabled', false)
        $('#prix').attr('disabled', false)
        $.ajax({
            url: "./../users/client.php",
            method:"POST",
            data:
                $(this).serialize()
            ,
            beforeSend: (data) => {
                $('body').append('<div id="overlaySend" style="background-color:grey;opacity:0.5;position:absolute;top:0;left:0;height:100%;width:100%;z-index:999"></div>');
                $('.processClient').show();   
                
            },
            success: (data) => {
                var percentage = 0;
                var timer = setInterval(() => {
                    percentage += 20;
                    progress_bar_process_form_client(percentage, timer, data, '#client_form')
                }, 100);
                
            }

        });


    });


    function progress_bar_process_form_client(percentage, timer, data, id) {
        $('.progress-bar').css('width', percentage + '%');
        $('.counter').html(percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            $('.processClient').hide();
            $('.progress-bar').css('width', '0%');
            if (data !== '') {
                $('#message_client').html(`<span class="alert m-0 p-3 alert-danger">${data}</span>`);
                console.log(data)
                $('#overlaySend').remove();
                setTimeout(() => {
                    $('#message_client').html('');
                }, 5000);
                $(id).trigger('reset');
            } else {
                $('#overlaySend').remove();
                displayData();

                $('#message_client').html('<span class="alert m-0 p-3 alert-success">Registered successfully</span>');
                setTimeout(() => {
                    $('#message_client').html('');
                }, 5000);
                $(id).trigger('reset');


            }
        }

    }
    $('#nombre_lit').attr('disabled', 'disabled')
    $('#num_chambre').attr('disabled', 'disabled')
    $('#prix').attr('disabled', 'disabled') 
    
    $('#type_chambre').on('change', function () {
        let typeChambre = $('#type_chambre').val();
        $.get("./../users/client.php",
            { type_chambre: typeChambre },
            function (data, status) {
                if (data ==='occupé') {
                    $('#message_client').html(`<span class="alert m-0 p-3 alert-danger">Ce type de chambre n'est plus disponible</span>`);
                    setTimeout(() => {
                        $('#message_client').html('');
                    }, 5000);
                                      
                } else {
                   let chambre = JSON.parse(data);
                    $('#nombre_lit').val(chambre.lit);
                    $('#num_chambre').val(chambre.numero);
                    $('#prix').val(chambre.prix );
                    
                }
                
        }
        )
      

    })
 
   




     function progress_bar_process_form(percentage, timer, data, id) {
        $('.progress-bar').css('width', percentage + '%');
        $('.counter').html(percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            $('.process').css('display', 'none');
            $('.progress-bar').css('width', '0%');
            if (data !== '') {
                $('#message').html(`<span class="alert m-0 p-3 alert-danger">${data}</span>`);
               
                $('#overlaySend').remove();
                setTimeout(() => {
                    $('#message').html('');
                }, 5000);
                $(id).trigger('reset');
            } else {
                $('#overlaySend').remove();
                displayData();
                
                $('#message').html('<span class="alert m-0 p-3 alert-success">Registered successfully</span>');
                setTimeout(() => {
                    $('#message').html('');
                }, 5000);
                $(id).trigger('reset');


            }
        }

    }
    displayData()
    displayUsers()
    displayHistorique();
    displayTravailleur();
    
});



   

function delet(deleteId) {
    let answear = confirm("Do you really want to delete this item ?")
    
    if (answear === true) {
        $.ajax({
            url: './../users/delete.php',
            type: 'post',
            data: {
                deleteSend: deleteId
            },
            success: function (data, status) {
               
                $('#message').html('<span class="alert m-0 p-3 alert-success">Deleted successfully</span>')
                displayData()
                setTimeout(() => {
                    $('#message').html('');
                }, 5000);
            }
            
        });
    }
    

}

/*********display data chambre******* */
    function displayData() {
        let displayData = "true";
        $.ajax({
            url: "./../users/display.php",
            type: "post",
            data: {
                displaySend: displayData,
            },
            success: function (data, status) {
                $("#displayDataTable").html(data);
            },
        });
    }



function update(id) {
    $('#hiddenId').val(id);
   
    $.get("./../users/edit.php", { updateSend: id }, function (data, status) {
        var chambre = JSON.parse(data);
        $("#update_numChambr").val(chambre.numero);
        $("#updateTypeChambre").val(chambre.type);
        $("#updateLit").val(chambre.lit);
        $("#updatePrice").val(chambre.prix);
      
    });
   
    $('#UpdateModal').modal("show")
}

function updateData() {
    var updatechambre = $('#update_numChambr').val();
    var updatetype = $('#updateTypeChambre').val();
    var updatelit = $('#updateLit').val();
    var updatePrix = $('#updatePrice').val();
    var hiddenId = $('#hiddenId').val();

    $.post("./../users/edit.php", {
        updateNumero: updatechambre,
        updateType: updatetype,
        updateLit: updatelit,
        updatePrix: updatePrix,
        hiddenId: hiddenId
    }, function (data, status) {
        $('#message').html('<span class="alert m-0 p-3 alert-success">Changed successfully</span>');
        setTimeout(() => {
            $('#message').html('');
        }, 5000);
        $('#UpdateModal').modal("hide");
        displayData();
    });

}

/*******************************fixed table head********** */


/***************************Caisse********************* */

$('#search').on('keyup', function () {
    let num_chambre = $('#search').val();
    $('#caisse_form').trigger('reset')
    $.get(
        "./../users/caisse.php",
        { numero_chambre: num_chambre },
        function (data) {
            if (data !== 'aucun') {
                let client = JSON.parse(data);
                $('#id_fac').val(client.id);
                $('#nom_caisse').val(client.nom);
                $('#prenom_caisse').val(client.prenom);
                $('#phone_caisse').val(client.phone);
                $('#pays_caisse').val(client.pays);
                $('#num_carte_caisse').val(client.numero_carte);
                $('#date_entre_caisse').val(moment(client.date_entre).format("dddd Do MMMM YYYY"));
                $('#date_sortie_caisse').val(moment(client.date_sortie).format("dddd Do MMMM YYYY"));
                $('#address_caisse').val(client.adresse);
                $('#type_chambre_caisse').val(client.type_chambre);
                $('#prix_caisse').val(client.prix_journalier);
               let date_pay=moment()
               let format=date_pay.format("dddd Do MMMM YYYY");
                $('#date_payement').val(format);
                let dateSortie = moment(client.date_sortie);
                let dateEntre = moment(client.date_entre);
                let nombreJour = dateSortie.diff(dateEntre, "days")
                
                $('#nombre_jour').val(nombreJour);
                $('#total_payement').val(nombreJour * client.prix_journalier);
                $('#num_chambre_caisse').val(num_chambre)  
            } else {
                console.log(data)
            }
           
        }
        
    )
   
})

$('#caisse_form input').attr('disabled', 'disabled')
$('#payer').attr('disabled', false)

$('#caisse_form').on('submit', function (e) {
    e.preventDefault();
    
    let id = $('#user_id').val();
    let id_fac = $('#id_fac').val();
    let user_type = $('#user_type').val();
    if ($('#nom_caisse').val() !== '') {
        $('#caisse_form input').attr('disabled', false)
        $.ajax({
            url: "./../users/caisse.php",
            method: "POST",
            data: $(this).serialize(),
            success: (data) => {
            
                if (data === '') {
                    
                    let url = `./../users/facture.php?id=${id}&id_fac=${id_fac}&user_type=${user_type}`;
                    
                    
                    window.location.href = url;
                    $('#search').trigger('reset')
                    $('#caisse_form').trigger('reset')
                }  
            }

        })
    }
   


})


$('#imprimer').on('click', function () {
    $('#imprimer').hide();
    window.print();


    $('#archive').show();

})
$('#archive').on('click', function () {
    var user = $('#user').val();
    let id = $('#user_id').val();
    let url;
    if (user === 'admin') {
        url =`./../admin/index?id=${id}&user_type=${user}`; 
    } else {
        url = `./../users/index?id=${id}&user_type=${user}`;
    }
     
    window.location.href = url;
   
})
/**********************************display users*********************************** */

function displayUsers() {
    let users = true;
    $.ajax({
        url: "./../users/display_users.php",
        method:"POST",
        data: {
            user:users
        },
        success: (data) => {
            $('#user-table').html(data)
        }
        
    })
}

function deleteUser(id) {
    let question = confirm('Do you really want to delete this user?');
    if (question == true) {
       
        $.ajax({
            url: "./../users/delete_user.php",
            method: "GET",
            data: {
                userId:id
            },
            success: (data) => {
                displayUsers();
                $('#success-msg').html('<span class="alert m-0 p-3 alert-success">User deleted successfully</span>');
                
                setTimeout(() => {
                    $('#success-msg').html('');
                }, 5000);
            }
        })
    }
}

/***************************email search ****************************** */
$('#email_search').on('keyup', function () {
    let keyword = $('#email_search').val()
    $.ajax({
        url: "./../users/search.php",
        method: "GET",
        data: {
            keyword:keyword
        },
        success: (data) => {
          
            $('#user-table').html(data)
            
        }
    })
    
})
$('#search_cancel').on('click', function () {
    $('#email_search_form').trigger('reset');
    displayUsers();
})

function displayHistorique() {
    let historique = true;
    $.ajax({
        url: "./../users/historique.php",
        method: "GET",
        data: {
            history:historique
        },
        success: (data) => {
            $('.result-container').html(data)
           
            
        }
    })
}
$('#search_icon').on('click', function(){

    let dat=moment($('#search_input_date').val())
   let date= dat.format(" dddd Do MMMM YYYY");
    if($('#search_input_date').val() ===''){
        $('#date_empty').text("Enter a date");
        $('#search_input_date').focus()
    }else{
        $('#date_empty').text("");
        $.ajax({
            url:"./../users/search_date.php",
            method:"GET",
            data:{
               date_search: date
            },
            success:(data) =>{ 
              
               
                $('.result-container').html(data)
    
            }
        })
    
        
    }
   
})
$("#search_input_name").on('keyup',function(){
   let name= $('#search_input_name').val();
   $.ajax({
    url:"./../users/search_name.php",
    method:"GET",
    data:{
        name_search: name
    },
    success:(data) =>{

        $('.result-container').html(data)

    }



})

$('#search_nom_cancel').on('click',function(){
    displayHistorique();
    $('#search_input_name').val('')
})
$('#search_date_cancel').on('click',function(){
    displayHistorique();
    $('#search_input_date').val('')
})


})

$('#travailleur_form').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        url: "./../users/trava.php",
        method:"POST",
        data:
            $(this).serialize()
        ,
        beforeSend: (data) => {
            $('body').append('<div id="overlaySend" style="background-color:grey;opacity:0.5;position:absolute;top:0;left:0;height:100%;width:100%;z-index:999"></div>');
            $('.process_trava').show();   
            
        },
        success: (data) => {
            var percentage = 0;
            var timer = setInterval(() => {
                percentage += 20;
                progress_bar_process_form_trava(percentage, timer, data, '#travailleur_form')
            }, 100);
            
        }

    });




})
function progress_bar_process_form_trava(percentage, timer, data, id) {
    $('.progress-bar').css('width', percentage + '%');
    $('.counter').html(percentage + '%');
    if (percentage > 99) {
        clearInterval(timer);
        $('.process_trava').hide();
        $('.progress-bar').css('width', '0%');
        if (data !== '') {
            $('#message_trava').html(`<span class="alert m-0 p-3 alert-danger">${data}</span>`);
            console.log(data)
            $('#overlaySend').remove();
            setTimeout(() => {
                $('#message_trava').html('');
            }, 5000);
            $(id).trigger('reset');
        } else {
            $('#overlaySend').remove();
            displayData();

            $('#message_trava').html('<span class="alert m-0 p-3 alert-success">Registered successfully</span>');
            setTimeout(() => {
                $('#message_trava').html('');
            }, 5000);
            $(id).trigger('reset');


        }
    }

}


function     displayTravailleur(){
let travailleur =true
    $.ajax({
        url:"./../users/display_trava.php",
        method:"GET",
        data:{
            travailleur:travailleur
        
        } ,
        success:(data)=>{
            $('.result-container-trava').html(data);
        }

    })
}

$('#search_input_name_trava').on('keyup',function(){
  let keyword=  $('#search_input_name_trava').val()
$.ajax({
    url:"./../users/search_trava.php",
    method:"GET",
    data:{
        keyword:keyword
    
    } ,
    success:(data)=>{
        $('.result-container-trava').html(data);
    }
})
})

$('#search_nom_cancel_trava').on('click',function(){
    $('#search_input_name_trava').val("");
    $('#search_input_name_trava').focus();
    displayTravailleur();


})

function deleteTrava(id){
    let answear=confirm('Do you really want to delete this item?');

    if(answear===true){
        $.ajax({
            url:"./../users/delete_trava.php",
            method:"GET",
            data:{
                id:id
            
            } ,
            success:(data)=>{
                displayTravailleur();
            }
        })
    }
}


   function updateTrava(id) {
    $('#hiddenid').val(id);
    $('#updateTravaModal').modal("show");
   
    $.get("./../users/edit_trava.php", 
    {
         updateSend: id 
        },
     function (data, status) {
        var trava = JSON.parse(data);
        $("#update_phone_trava").val(trava.phone);
        $("#update_poste").val(trava.poste);
        $("#update_address_trava").val(trava.adresse);
        $("#update_cart_trava").val(trava.num_carte);
	    $("#update_salaire").val(trava.salaire);
        console.log(trava)
    });
  
  
   
}

function updateDataTrava() {
    var updatephone = $('#update_phone_trava').val();
    var updateposte = $('#update_poste').val();
    var updateadresse = $('#update_address_trava').val();
    var updatenum_carte = $('#update_cart_trava').val();
    var updatesalaire = $('#update_salaire').val();
    var hiddenId = $('#hiddenid').val();

    $.post("./../users/edit_trava.php", {
        updateTelephone:  updatephone,
        updatePoste: updateposte,
        updateAdresse: updateadresse,
        updateNumero_de_la_carte: updatenum_carte,
        updateSalaire: updatesalaire ,
        hiddenId: hiddenId
    }, function (data, status) {
        $('#update_message_trava').html('<span class="alert m-0 alert-success">Changed successfully</span>');
        setTimeout(() => {
            $('#update_message_trava').html('');
        }, 5000);
       // $('#updateTravaModal').modal("hide");
        displayTravailleur();
    });

}

let Switched = $('#mySwitch');
let i = 0;
function changeTheme(counter) {
    i += counter;
    if (i % 2 !== 0) {
        $('#corps').css('background', "red") 
        console.log(i % 2)
    } else {
        $('#corps').css('background', "white")  
        console.log(i % 2)
    }
    
   
    

}
   





























