<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap w/ Vite</title>
        
        <!-- Styles -->
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/css/bootstrap.bundle.js',
            ])

        </head>
        <body>
            <div class="container ">
                <div class="row">
                <div class="col">
             
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                  <a class="navbar-brand text-white" href="#">
                    <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit">SISTEMA WEB</font>
                </font>
                    </a>
          
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active text-white" aria-current="page" href="#"
                        ><font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit">Cadastrar</font></font
                        ></a>
                    </li>
          
                    <li class="nav-item">
                      <a class="nav-link disabled  text-white-50"
                        ><font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit">Consultar</font></font
                        ></a>
                    </li>
                  </ul>
                </div>
              </nav>
              <br>

              </div>
    </div>

                <div class="container">
                    <div class="row" >
                    <div class="col">
                       
        
            <h4>Cadastrar - Agendamento de Potenciais Clientes</h4>

            <h7>Sistema utilizado para agendamento de serviços.</h7> <br><br> 

                <label for="name" class="form-label">Nome:</label>
                <input class="form-control" id="obs" rows="3"></input> <br>
                <label for="tel" class="form-label">Telefone:</label> 
                <input class="form-control" type="text" name="tel" placeholder="(xx)xxxxx-xxxx" ><br>
                <label for="origem" class="form-label">Origem:</label>
                <select class="form-select" aria-label=".form-select-sm example">
                    <option selected>Celular</option>
                    <option value="2">Telefone</option>
                  </select> <br>
                <label for="date" class="form-label">Data do Contato:</label>
                <input class="form-control" type="date" name="data" placeholder="dd/mm/aaaa" ><br>
                <label for="obs" class="form-label">Observação</label>
                <textarea class="form-control" id="obs" rows="3"></textarea> <br>
                <button type="button" class="btn btn-primary">Cadastrar</button> <br>
                <br>
        </div>

    </div>
    </div>

        </body>
</html>