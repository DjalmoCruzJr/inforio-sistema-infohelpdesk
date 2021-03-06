<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');
define('CHAVE_ACESSO',							'23J0P5G0NT');
define('CONTATO_ATIVO',							'1');
define('EMPRESA_ATIVO',							'1');
define('CHAMADO_ATIVO',							'1');
define('CHAMADO',								'1');
define('TECNICO',								'0');
define('ABERTO',								'0');
define('ORDEM_SERVICO',							'0');
define('TAMANHO_SENHA',							'8');
define('SENHA_EMAIL',							'bHVpek1hcmlvRGV2ZWxvcGVy');
define('CHAVE_JSON',							'52b964aecd013d598c5ea4f92a2d25e0');
define('LAYOUT_DASHBOARD',						'dashboard');



/* End of file constants.php */
/* Location: ./application/config/constants.php */