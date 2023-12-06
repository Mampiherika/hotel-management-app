<body id="login_body" class="body  d-flex align-items-center " >
    
      <main class="form-signin w-100 rounded  m-auto  bg-body-tertiary ">
        <form action="" method="post"   id="login-form">
            <h1 class="h3  text-center fw-normal">Login</h1>
            <div class="text-center" id="success-message"><?=$message?></div>
             <div class="form-floating mb-1">
                <input type="text" class="form-control" name="email" required  id="email" placeholder="Enter your email">
                      <label for="email">Email Address :</label>
             </div>
            <div class="form-floating mb-1">
                <input class="form-control" type="password" name="password" required  id="password" placeholder="Enter your password">
            <label for="password">Password</label>
            </div>
                <div class="form-floating d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary w-100 py-2"  id="Login"  value="Login">
                </div>
       </form> 
              
    </main>
   </div> 