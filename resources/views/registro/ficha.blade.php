{{-- Layaout --}}
@extends('layouts.app')
<?php $message=Session::get('message');?>
{{-- Mensaje --}}
@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    Usuario creado exitosamente
</div>
@endif
{{-- Contenido --}}
@section('content')
{{-- Formulario --}}
<div class="form-area fichaCaraterizacion">
    {{-- {!!Form::open(['action' => 'ControllerCursos@create', 'method' => 'POST'])!!} --}}

    <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('users.create') }}">
        @csrf
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 align="center">Datos Básicos</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="primerApellido">Primer Apellido:</label>
                        <input type="text" class="form-control" id="primerApellido" name="primerApellido"
                            required="required" value="{{ old('primerApellido', '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="SegundoApellido">Segundo Apellido:</label>
                        <input type="text" class="form-control" id="SegundoApellido" name="SegundoApellido"
                            required="required" value="{{ old('SegundoApellido', '') }}">
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombres">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" required="required"
                            value="{{ old('nombres', '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emailCurso">Correo Institucional:</label>
                        <input type="email" class="form-control correo" id="emailCurso" name="emailCurso"
                            required="required" value="{{ old('emailCurso', '') }}">
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tipoDocumento">Tipo de documento de indentidad:</label><br>
                        <label class="radio-inline"><input type="radio" name="tipoDocumento" id="tipoDocumento"
                                value="T.I" required>T.I</label>
                        <label class="radio-inline"><input type="radio" name="tipoDocumento" id="tipoDocumento"
                                value="C.C" checked>C.C</label>
                        <label class="radio-inline"><input type="radio" name="tipoDocumento" id="tipoDocumento"
                                value="C.E">C.E</label>
                        <label class="radio-inline"><input type="radio" name="tipoDocumento" id="tipoDocumento"
                                value="Pasaporte">Pasaporte</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="numeroDocumento">Número de documento:</label>
                        <input type="number"
                            class="form-control @error('numeroDocumento') is-invalid @else borde-0 @enderror"
                            id="numeroDocumento" name="numeroDocumento" required="required"
                            value="{{ old('numeroDocumento', '') }}">
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"
                            required="required" value="{{ old('fechaNacimiento', '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad"
                            required="required" value="{{ old('nacionalidad', '') }}">
                    </div>
                </div>
                <hr width=" 10px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="genero">Genero:</label><br>
                        <label class="radio-inline"><input type="radio" name="genero" id="genero" value="Mujer"
                                required>Mujer</label>
                        <label class="radio-inline"><input type="radio" name="genero" id="genero"
                                value="Hombre">Hombre</label>
                        <label class="radio-inline"><input type="radio" name="genero" id="genero"
                                value="Intersexual">Intersexual</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cargo">Cargo:</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" required="required"
                            value="{{ old('cargo', '') }}">
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="entidad">Entidad:</label>
                        <input type="text" class="form-control" id="entidad" name="entidad" required="required"
                            value="{{ old('entidad', '') }}">
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="form-group">
                        <label for="departamento">Departamento:</label><br>
                        <select class="selectpicker" data-live-search="true" name="departamento" id="departamento"
                            data-width="100%">

                        </select>
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="municipio">Municipio:</label>
                        <input type="text" class="form-control" id="municipio" name="municipio" required="required"
                            value="{{ old('municipio', '') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" required="required"
                            value="{{ old('telefono', '') }}">
                    </div>
                </div>

                <hr>
                <hr width="10px">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="grupoEtnico">¿Pertenece a un grupo étnico?:</label><br>
                        <label class="checkbox-inline"><input type="checkbox" value="Ninguno" name="grupoEtnico[]"
                                required checked>Ninguno</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Palenquero"
                                name="grupoEtnico[]">Palenquero</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Afro"
                                name="grupoEtnico[]">Afro</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Rrom"
                                name="grupoEtnico[]">Rrom</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Indigena"
                                name="grupoEtnico[]">Indigena</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Raizal"
                                name="grupoEtnico[]">Raizal</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Extrema pobreza"
                                name="grupoEtnico[]">Extrema pobreza</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Reincorporación"
                                name="grupoEtnico[]">Reincorporación</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Cabeza de familia"
                                name="grupoEtnico[]">Cabeza de familia</label>
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group discapacidad">
                        <label for="discapacidadFisica">¿Posee algún tipo de discapacidad?:</label><br>
                        <label class="checkbox-inline"><input type="checkbox" value="Ninguna" class="discapacidadFisica"
                                name="discapacidadFisica[]" required checked>Ninguna</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Auditiva"
                                class="discapacidadFisica" name="discapacidadFisica[]">Auditiva</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Física" class="discapacidadFisica"
                                name="discapacidadFisica[]">Física</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Visual" class="discapacidadFisica"
                                name="discapacidadFisica[]">Visual</label>
                        <label class="checkbox-inline"><input type="checkbox" value="Otra" class="discapacidadFisica"
                                id="discapacidadFisicaOtra" name="discapacidadFisica[]">Otra</label>
                    </div>
                </div>
                <hr width="10px">
                <div class="col-md-6">
                    <div class="form-group victima">
                        <label for="conflictoArmado">¿Es víctima del conflicto armado?:</label><br>
                        <label class="radio-inline"><input type="radio" name="conflictoArmado" id="conflictoArmado"
                                value="Si" required checked>Si</label>
                        <label class="radio-inline"><input type="radio" name="conflictoArmado" id="conflictoArmado"
                                value="No">No</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{-- <br>{!! Form::submit('Enviar', ['class' => 'btn btn-primary center-block enviarFicha']) !!} --}}
            <br><button class="btn btn-primary  center-block">Enviar Ficha</button><br>
        </div>
    </form>
    <div class="panel-footer">

        {{-- Mostrar todos los errores  --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0">

                @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

                @endforeach

            </ul>
        </div>
        @endif
        <br><label>Para la mejor experiencia de usuario en el formulario por favor usar Google Chrome con una versión
            mínima de 56 ó Mozilla Firefox con una versión mínima de 52.</label>

        <p>Autorizo a la Unidad Administrativa Especial de Organizaciones Solidarias a realizar el tratamiento de mis
            datos personales incorporados anteriormente tal y como lo dispone el Art. 15 de la Constitución Política
            Nacional, las Leyes estatutaria 1266 de 2008, la Ley estatutaria 1581 de 2012, y sus Decretos
            reglamentarios, Decreto 1727 de 2009, Decreto 2952 de 2010, Decreto 1377 de 2013 y Decreto 886 de 2014. Los
            datos personales y/o sensibles suministrados, que sean sujetos a tratamiento, deberán ser utilizados por la
            Unidad con fines de Fomento y Fortalecimiento, históricos y estadísticos del sector solidario.</p>
    </div>


    {{-- {!!Form::close()!!} --}}
</div>


@stop
