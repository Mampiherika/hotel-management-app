<body class="body bg-body-tertiary" >
    <div class=" d-flex align-items-center h-100 py-4  ">
      <main class="form-signin py-4 w-100 fw-normal m-auto ">
        <form action="" method="post"   id="signin-form">
            <h1 class="h3 fw-normal">Please sign in</h1>
            <div class="text-center" id="success-message"></div>
        <div class="form-floating mb-1">

                <input class="form-control" type="text" name="name" required  id="name" placeholder="Enter your name">
                  <label for="name">Name </label>
            </div>
            <div class="form-floating mb-1">
                <input type="text" class="form-control" name="email" required  id="email" placeholder="Enter your email">
                      <label for="email">Email Address :</label>
            </div>
            <div class="form-floating mb-1">

                <input class="form-control" type="password" name="password" required  id="password" placeholder="Enter your password">
                           <label for="password">Password</label>
            </div>
            <div class="form-floating mb-1">
             
                <input class="form-control" type="password" name="confirmPwd" required id="confirmPwd" placeholder="Confirm your password">
                   <label for="confirmPwd">Confirm password</label>
            </div>

            <div class="form-floating d-flex justify-content-center">
                <input type="submit" class="btn btn-primary w-100 py-2"  id="sign-in"  value="Sign-in">
            </div>
            
                                
       </form> 
       <div class=" d-flex justify-content-center mt-3 " id="login-box" >
                <a href="./index.php" class="btn btn-secondary w-100 py-2"  id="log-in" style="display:none;" >Log in</a>
            </div>
       <div class="form-group my-4" id="process" style="display:none;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped p-1"  role="progressbar" aria-valuemin="0" aria-value="100">
            <span id="counter"></span>      
            </div>
        </div>
       </div>
       
    </main>
   </div> 