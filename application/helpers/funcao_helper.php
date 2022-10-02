<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Setar a FLASHDATA
function setar_msg($id, $msg, $tipo)
{
    if ($id) {
        $CI = &get_instance();
        switch ($tipo) {
            case 'erro':
                $CI->session->set_flashdata($id, '<div class="alert alert-danger alert-dismissible" role="alert">
                <strong></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>' . $msg . '
                </div>');
                break;

            case 'sucesso';
                $CI->session->set_flashdata($id, '<div class="alert alert-success alert-dismissible" role="alert">
                <strong></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $msg . '
            </div>');
                break;
                // default:
                //     # code...
                //     break;
        }
    }
    return FALSE;
}

// Exibir a FLASHDATA
function get_msg($id, $printar = TRUE)
{
    $CI = &get_instance();
    if ($CI->session->flashdata($id)) {
        if ($printar) {
            echo $CI->session->flashdata($id);
            return TRUE;
        }
    }
    return FALSE;
}
