<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Controle Comercial com Ordem de Serviço">
    <meta name="author" content="Gabriel Martins">

    <!-- <title>Sistema comercial</title> -->

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css?<?= date("H:i:s"); ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/sb-admin.css?<?= date("H:i:s"); ?>">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css?<?= date("H:i:s"); ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/jquery/jquery.datatable/css/datatables.min.css?<?= date("H:i:s"); ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/jquery/jquery.datatable/css/datatables_bootstrap.css?<?= date("H:i:s"); ?>">

    <title><?= $titulo ?></title>

</head>

<body>

    <div id="wrapper">

        <?php
        if ($this->ion_auth->logged_in()) {
        ?>

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header text-center">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('principal') ?>">Sistema Comercial</a>
                </div>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="/"><i class="fa fa-home"></i> Visão Geral</a>
                        </li>

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#vendas"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                Vendas <i class="fa fa-angle-down pull-right"></i></a>
                            <ul id="vendas" class="collapse">
                                <li>
                                    <a href="#">Venda de produtos</a>
                                </li>
                                <li>
                                    <a href="#">Ordem de serviço</a>
                                </li>
                                <li>
                                    <a href="#">Lista de preços</a>
                                </li>
                            </ul>
                        </li>
                        <li>

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#cadastro"><i class="fa fa-group"></i> Cadastro <i class="fa fa-angle-down pull-right"></i></a>
                            <ul id="cadastro" class="collapse">
                                <li>
                                    <a href="<?php echo site_url('clientes') ?>">Clientes</a>
                                </li>
                                <li>
                                    <a href="#">Fornecedor</a>
                                </li>
                                <li>
                                    <a href="#">Vendedor</a>
                                </li>
                                <li>
                                    <a href="#">Transportadora</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#estoque"><i class="fa fa-truck" aria-hidden="true"></i>
                                Controle de Estoque <i class="fa fa-angle-down pull-right"></i></a>
                            <ul id="estoque" class="collapse">
                                <li>
                                    <a href="#">Cadastro de produtos</a>
                                </li>
                                <li>
                                    <a href="#">Categorias</a>
                                </li>
                                <li>
                                    <a href="#">Marcas</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#financeiro"><i class="fa fa-usd" aria-hidden="true"></i>
                                Financeiro<i class="fa fa-angle-down pull-right"></i></a>
                            <ul id="financeiro" class="collapse">
                                <li>
                                    <a href="#">Contas a pagar</a>
                                </li>
                                <li>
                                    <a href="#">Contas a receber</a>
                                </li>


                            </ul>
                        </li>

                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#relatorios"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                                Relatórios<i class="fa fa-angle-down pull-right"></i></a>
                            <ul id="relatorios" class="collapse">
                                <li>
                                    <a href="#">Clientes</a>
                                </li>
                                <li>
                                    <a href="#">Produtos</a>
                                </li>
                                <li>
                                    <a href="#">Vendas</a>
                                </li>
                                <li>
                                    <a href="#">Ordem de serviços</a>
                                </li>
                                <li>
                                    <a href="#">Contas a pagar</a>
                                </li>
                                <li>
                                    <a href="#">Contas a receber</a>
                                </li>

                            </ul>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#configuracao"><i class="fa fa-cog" aria-hidden="true"></i>
                                Configuração<i class="fa fa-angle-down pull-right"></i></a>
                            <ul id="configuracao" class="collapse">
                                <li>
                                    <a href="<?= base_url('config') ?>">Sistema</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('usuarios') ?>">Usuários</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="<?= base_url('login/logout') ?>"><i class="fa fa-fw fa-power-off"></i> Sair</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

        <?php
        }
        ?>