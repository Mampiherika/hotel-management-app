<body id="login_body" class="body  d-flex align-items-center " >

<div id="cover"  >
    <div id="overlayBody" class="body  justify-content-center d-flex align-items-center"
     style="background:white;position:absolute;top:0;left:0;height:100%;width:100%;">
            <div class= "col-md-10 justify-content-center"  >

            <div class="col-md-8 m-auto " >
                <div class=" h5 bienvenue">Bienvenue </div>
                <p class="hotel h3 text-center">Hotel LM</p>
                <img src="assets/img/reception.jpg" alt="reception" style="width:100%;height:auto;"  >
                    <div class="d-flex justify-content-between pt-2">
                        <p class="hotel">connection à la base de données</p>
                        <p id="count"></p>
                    </div>
                    <div class="progress my-0">
                        <div class="progress-bar bar p-1" role="progressbar" aria-valuemin="0" aria-value="100">

                        </div>

                    </div>

            </div>
    </div >     
    </div >

    </div>
    <script>
        var percentage = 0;
var timer = setInterval(() => {
    percentage += 1;
    progress_bar_proces(percentage, timer)
}, 50);

function progress_bar_proces(percentage, timer) {
    $('.bar').css('width', percentage + '%');
    $('#count').html(percentage + '%');
    let index = true;
    if (percentage > 99) {
        
        let url = "apps/login.php";
        window.location.href = url;
        clearInterval(timer);
        
        //$('#cover').hide();

    }
    
}
    </script>