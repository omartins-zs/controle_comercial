   <!-- /page-wrapper -->
   <div id="page-wrapper">

       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="row">
               <div class="col-lg-12">

                   <h1 class="display-4">Novo Usuario</h1>
                   <hr>
                   <ol class="breadcrumb">
                       <li><a href="<?= base_url() ?>">Home</a></li>
                       <li class="active">Novo usuario</li>
                   </ol>
               </div>

           </div>
           <!-- /.row -->

           <div class="row">
               <div class="col-lg-12">
                   <?php erros_validacao() ?>
               </div>
           </div>
           <!-- Formulario de novo usuario -->
           <div class="row">
               <div class="col-lg-12">

                   <form id="form_add" name="form_add" action="" class="" method="post">
                       <div class="form-group">
                           <label>Tipo de usuário</label>
                           <select name="tipo_usuario" class="form-control">
                               <option value="1">Administrador</option>
                               <option value="2">Vendedor</option>
                           </select>
                       </div>

                       <div class="form-group">
                           <label>Nome do usuário</label>
                           <input type="text" class="form-control" name="nome_usuario" value="<?= set_value('nome_usuario') ?>" placeholder="Nome usuário">
                       </div>

                       <div class="form-group">
                           <label>Email</label>
                           <input type="email" class="form-control" name="email_usuario" value="<?= set_value('email_usuario') ?>" placeholder="E-mail do usuário">
                       </div>

                       <div class="form-group">
                           <label>Senha</label>
                           <input type="password" class="form-control" name="senha_usuario" placeholder="Senha de acesso">
                       </div>

                       <div class="form-group">
                           <label>Repetir senha</label>
                           <input type="password" class="form-control" name="senha_usuario2" placeholder="Repetir senha">
                       </div>

                       <button form="form_add" type="submit" class="btn btn-success">ENTRAR</button>
                   </form>
               </div>
           </div><!-- / formulario de novo registro -->

       </div>
   </div>