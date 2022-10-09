   <!-- /page-wrapper -->
   <div id="page-wrapper">

       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="row">
               <div class="col-lg-12">

                   <h1 class="display-4">Novo Usuario</h1>
                   <hr>
                   <ol class="breadcrumb">
                       <li><a href="<?php base_url() ?>">Home</a></li>
                       <li class="active">Novo usuario</li>
                   </ol>
               </div>

           </div>
           <!-- /.row -->

           <div class="row">
               <div class="col-lg-12">
                   <p><?= validation_errors() ?></p>
               </div>
           </div>
           <!-- Formulario de novo usuario -->
           <div class="row">
               <div class="col-lg-12">

                   <form action="" method="post" class="" name="form_add">
                       <div class="form-group">
                           <label for="">Nome do usuarios</label>
                           <input type="text" class="form-control" name="nome_usuario" id="" placeholder="Nome do usuario">
                       </div>
                       <div class="form-group">
                           <label for="">Email</label>
                           <input type="email" class="form-control" name="email_usuario" id="" placeholder="Eamil">
                       </div>
                       <div class="form-group">
                           <label for="">Senha</label>
                           <input type="password" class="form-control" name="senha_usuario" id="" placeholder="Senha">
                       </div>

                       <button form="form_add" type="submit" class="btn btn-success">Cadastrar</button>

                   </form>
               </div>
           </div>
           <!-- Fim do Form -->

       </div>
       <!-- /.container-fluid -->
   </div>