<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'CertificadoController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['certificado']                       =   'CertificadoController';
$route['certificado/buscar_certificado']    =   'CertificadoController/buscarCertificado';
$route['certificado/mostar/(:any)']         =   'CertificadoController/mostrarCertificado/$1';
$route['certificado/buscarexistente']      =   'CertificadoController/buscarExistente';

$route['certificado/subircertificado']      =   'CertificadoController/ingresarCertificado';
$route['certificado/subircertificado']      =   'CertificadoController/ingresarCertificado';

$route['certificado/nuevo_certificado1/(:any)']    =   'certificadoController/mostrarClienteExistente/$1';
$route['certificado/nuevo_certificado2']           =   'certificadoController/mostrarClienteNuevo';

$route['cliente/buscacliente']      =   'clienteController/buscarCliente';
