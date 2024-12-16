<!---Chamada da sua parte 'header.view.php'-->
<?php require_once views_path('partes/header')?>
            
      <div class="container-fluid border col-lg-5 col-md-6 mt-5 p-4">  
        
          <form method="post">
              
        <!--fim do menu copiado do bootstrap-->  
        <center>
            <h3><i class="fa fa-user"></i> Cadastro do Usuario</h3>
            <div><?=esc(APP_NAME)?></div>
        </center> 
      <!---input group-->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome do usuario</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username">
        </div>
          
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
 
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Repete Password</span>
            <input type="text" class="form-control" placeholder="Retype Password" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <br>
             <button class="btn btn-primary float-end">Cadastro</button>
            <button class="btn btn-danger">Cancelar</button>
       </form>
    </div>  
<!---Chamada da sua parte 'footer.view.php'-->
<?php require_once views_path('partes/footer')?> 