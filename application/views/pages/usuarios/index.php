   <!-- /page-wrapper -->
   <div id="page-wrapper">

       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="row">
               <div class="col-lg-12">

                   <h1 class="display-4">Usuarios cadastrados</h1>
                   <hr>
                   <ol class="breadcrumb">
                       <li><a href="<?php base_url() ?>">Home</a></li>
                       <li class="active">Usuarios cadastrados</li>
                   </ol>
               </div>

           </div>
           <!-- /.row -->

           <!-- Button de novo usuario -->
           <div class="row margin-bottom10">
               <div class="col-lg-12 text-right">
                   <a href="<?= base_url('usuarios/add') ?>" title="Novo usuario" class="btn btn-success"><i class="fa fa-plus-square"></i></a>
               </div>
           </div>

           <!-- Mensagens de sucesso e erro -->
           <div class="row">
               <div class="col-lg-12">
                   <?php
                    get_msg('msgerro');
                    get_msg('msgsucess');
                    ?>
               </div>
           </div>

           <?php
            // echo '<pre>';
            // print_r($users);
            // echo '</pre>';
            ?>

           <!-- Tabela -->
           <div class="row">
               <div class="col-lg-12">
                   <table class="table table-bordered table-striped" id="datatable">
                       <thead>
                           <tr>
                               <th>#</th>
                               <th>Nome</th>
                               <th>E-mail</th>
                               <th>Ações</th>
                               <!-- <th></th> -->
                           </tr>
                       </thead>
                       <tbody>
                           <?php foreach ($users as $user) : ?>
                               <tr>
                                   <td><?= $user->id ?></td>
                                   <td><?= $user->username ?></td>
                                   <td><?= $user->email ?></td>
                                   <td class="text-right">
                                       <a href="<?php base_url() ?>usuarios/editar/" title="editar produto" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                       <a href="<?= base_url() ?>usuarios/apagar/" title="Apagar cadastro" class="btn btn-sm btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>
                                       </a>
                                   </td>
                               </tr>

                           <?php endforeach ?>
                       </tbody>
                   </table>
               </div>
           </div>
           <!-- Fim tabela -->

       </div>
       <!-- /.container-fluid -->
   </div>
   <!-- /#page-wrapper -->