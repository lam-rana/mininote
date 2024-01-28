<div class="row">
        <div class="col-md-6 offset-md-3 Signup">
            <h2>Inscription </h2>
            <form class='form-horizontal' role= 'form' methode='POST' action='index.php?page=signup'>
              <div class='form-group'>
                <label for='input_name' class='col-sm-4 control-label'>Name</label>
                <div class='mr-sm-2'>
                    <input class='form-control' type='text' placeholder='Name' id='input_name' name='Name' require> </div>
              </div>&nbsp; 
              <div class='form-group'>
              <label for='input_Login' class='col-sm-4 control-label'>Login</label>
              <div class='mr-sm-2'>
                  <input class='form-control' type='text' placeholder='Login' id='imput_login' name='login' require></div>
              </div>&nbsp; 
              <div class='form-group'>
              <label for='input_mdp' class='col-sm-4 control-label'>Mot de Passe</label>
              <div class='mr-sm-2'>
                <input class='form-control' type='password' placeholder='Mot de passe' id='input_mdp' name='psw'></div>
              </div>&nbsp; 
              <div class='form-group'>
              <label for='input_mdp2' class='col-sm-4 control-label'>confirmer Mot de Passe</label>
              <div class='mr-sm-2'>  
                  <input class='form-control mr-sm-2' type='password' placeholder='Confirmation Mot de passe' id='input_mdp2' name='psw2'></div>
              </div>&nbsp; 
                  <div class="d-flex justify-content-center align-items-center">
  <button class="btn btn-primary" type="submit" style="color: blue;">
    Signup
  </button>
</div>
                </form>
</div>