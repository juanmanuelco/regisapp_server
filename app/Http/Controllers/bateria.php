<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class bateria extends Controller
{
    private $datos_array_movil ='';
    public function envio(Request $request){
        $nombre_dispo = $request->dispositivo;
        $porciones = explode("%%%%%", $request->datos);
        $nivel =0;
        foreach ($porciones as $porcion) {
            if($porcion != ""){
                $subPorcion = explode("----", $porcion);
                $nivel =$subPorcion[1];
                DB::table('bateria')->insert([
                    'fecha_hora' =>$subPorcion[1],
                    'dispositivo' => $nombre_dispo,
                    'nivel' =>$subPorcion[0]
                ]);
            }
            
        }
        return  $nivel;
    }

    public function llamado(){
       dd($this->datos_array_movil);
    }
}
