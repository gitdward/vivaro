<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class MessageController extends Controller {

    private $codes = array(
        200 => ['success', '¡Éxito!', 'Mensaje enviado con éxito'],
        201 => ['danger', 'Error', 'Créditos agotados'],
        401 => ['danger', 'Error', 'Cliente sin permisos para este envío'],
        402 => ['warning', 'Mensaje del sistema', 'Lada incorrecta/Sin permisos'],
        403 => ['danger', 'Error', 'Favor de comunicarse con el administrador del sistema'],
        404 => ['danger', 'Error', 'Usuario/Contraseña incorrectos para el sistema'],
    );

    public function send(Request $request) {
        $data = $request->except('_token');
        $phone = $data['number'];
        $message = $data['message'];

        $response = Http::get('https://b2c.marcatel.com.mx/MarcatelSMSWCF/ServicioInsertarSMS.svc/EnviaSMS', [
            'usuario' => 'dev_35',
            'password' => 'y*PUZM2znP9',
            'telefonos' => $phone,
            'mensaje' => $message,
            'codigopais' => '52',
            'smsdosvias' => '0',
            'mensajelargo' => '0',
            'modonotificacion' => '0',
            'notificarRespuestas' => '',
            'antispam' => '0',
            'notransaccion' => '0',
            'validarlistanegra' => '0',
            'validazonahoraria' => '0',
            'frecuenciaminutos' => '5',
        ]);
        $result = $this->codes[$response['code']];
        $number = $response['message'];
        return view('response', compact('result', 'number'));
    }
}
