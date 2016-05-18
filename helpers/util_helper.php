<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
* Função que exibe o Array PRE formatado
* @param type $array - Array que será exibido
*/

if (!function_exists('pre')) {
    function pre($array) 
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

}

/**
* Função para Verificar se existe um arquivo anexado no formulario
* @param type $name - name no formulario do tipo file
* @return boolean
*/

if (!function_exists('has_file')) {

    function has_file($name = 'file') {
        if ($_FILES[$name]['name']) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

/**
* Função que remove os caracteres especiais de uma String
* @param type $str - String 
* @param type $strtolower - boolean 
* @return String
*/

if (!function_exists('remove_caracteres')) {

    function remove_caracteres($str, $strtolower = true) 
    {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        $str = preg_replace('/[^a-z0-9]/i', '_', $str);
        $str = preg_replace('/_+/', '_', $str);
        
        if($strtolower){
            $str = strtolower($str);
        }
        
        return $str;
    }

}

/**
* Função para retornar as paginas navegadas
* @param type $pag - int 
*/

if (!function_exists('back_pag')) {

    function back_pag($pag = null) 
    {
        echo '<script>javascript:window.history.back(' . $pag . ');</script>';
    }

}

/**
* Função disparar um alerta
* @param type $msg - String 
*/

if (!function_exists('alert')) {

    function alert($msg = null) 
    {
        echo '<script>alert("' . $msg . '");</script>';
    }

}

/**
* Função para convertar a data do MySQL para o formato desejado
* @param type $data - Date 
* @param type $formato_saida - formato de saida d/m/Y H:m:i 
* @return String
*/

if (!function_exists('retorna_data')) {

    function retorna_data($data, $formato_saida) 
    {
        $timestamp = strtotime($data);
        return date($formato_saida, $timestamp);
    }

}

/**
* Função para exibir a URL url_atual
* @retunr String
*/


if (!function_exists('url_atual')) {

    function url_atual() {
        $base = base_url();
        $link = "";
        if(isset($_SERVER['PATH_INFO'])){
            $link = substr($_SERVER['PATH_INFO'], 1);
        }
        return $base . $link;
    }

}
