<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Ficha;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

    public function create(SaveUserRequest $request)
    {
        // return $request;
        // Obtener cadena de grupo etnico
        $grupoEtnico = $request['grupoEtnico'];
        $cadenagrupoEtnico = implode(',', $grupoEtnico);
        // Obtenert cadena discapacidad
        $discapacidad = $request['discapacidadFisica'];
        $discapacidadOtra = $request['discapacidadFisicaOtra'];
        if (empty($discapacidadOtra)) {
        } else {
            $discapacidadOtra = ' : ' . $discapacidadOtra;
        }
        $cadenadiscapacidad = implode(',', $discapacidad) . $discapacidadOtra;
        // Obtener conflicto
        $conflictoOtra = $request['victimaConflictoOtra'];
        if (empty($conflictoOtra)) {
        } else {
            $conflictoOtra = ' : ' . $conflictoOtra;
        }
        $conflicto = $request['conflictoArmado'] . $conflictoOtra;
        // Obtener Cedula y Cedula
        $cedula = str_replace('.', '', $request['numeroDocumento']);
        // Crear usuario del curso
        Usuarios::create([

            'usuarioCurso' => $cedula,
            'passCurso' => 'Cursos123*',
            'emailCurso' => strtolower($request->input('emailCurso')),
            'nombres' => ucwords(strtolower($request->input('nombres'))),
            'apellidos' => ucwords(strtolower($request->input('primerApellido') . ' ' . $request->input('SegundoApellido'))),
            'curso' => 'Economia Solidaria',
            'ciudad' => ucwords(strtolower($request->input('municipio'))),
            'pais' => 'CO',
        ]);
        // Obtener id para tabla ficha
        $idUsuario = DB::table('usuariosCursos')->select('idUsuario')->orderBy('idUsuario', 'DESC')->limit(1)->get();
        foreach ($idUsuario as $idUsuario) {
            $id = $idUsuario->idUsuario;
        }
        // Crear datos en ficha
        Ficha::create([
            'tipoDocumento' => $request->input('tipoDocumento'),
            'numeroDocumento' => $request->input('numeroDocumento'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'nacionalidad' => ucwords(strtolower($request->input('nacionalidad'))),
            'genero' => $request->input('genero'),
            'cargo' => ucwords(strtolower($request->input('cargo'))),
            'entidad' => ucwords(strtolower($request->input('entidad'))),
            'departamento' => ucwords($request->input('departamento')),
            'municipio' => ucwords(strtolower($request->input('municipio'))),
            'telefono' => $request->input('telefono'),
            'grupoEtnico' => $cadenagrupoEtnico,
            'discapacidad' => $cadenadiscapacidad,
            'victimaConflicto' => $conflicto,
            'usuariosCursos_idUsuario' => $id,

        ]);

        return redirect('../public/notificacion');

        // return redirect()->route('projects.index')->with('status', 'Tu proyecto fue creado con exito');

    }
    public function export()
    {

        return Excel::download(new UsersExport, 'users.xlsx');
        // $users2 = DB::table('usuariosCursos')->get();
        // Excel::create('users', function ($excel) use ($users2) {
        //     $excel->sheet('Sheet 1', function ($sheet) use ($users2) {
        //         $sheet->row(1, [
        //             'username', 'password', 'email', 'firstname', 'lastname', 'course1', 'city', 'country'
        //         ]);
        //         foreach ($users2 as $index => $user) {
        //             $sheet->row($index + 2, [
        //                 $user->usuarioCurso, $user->passCurso, $user->emailCurso, $user->nombres, $user->apellidos, $user->curso, $user->ciudad, $user->pais
        //             ]);
        //         }
        //     });
        // })->export('xls');
    }

    public function departamentos()
    {
        $departamentos = DB::table('departamentos')->get();

        echo "<option value=0>Selecciones un Departamento</option>";
        foreach ($departamentos as $departamento) {

            echo "<option value=" . $departamento->nombreDepartamentos . ">" . $departamento->nombreDepartamentos . "</option>";
        }
    }
    public function notificacion()
    {
        return view('notificacion');
    }
}
