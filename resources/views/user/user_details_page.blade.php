<?php
    $lang = isset($language) ? $language : 'es';
?>

@extends('layouts.admin_panel_layout')

@if ($lang == 'en')
    @section('page_title', "User data - Baptist Church Buenas Nuevas")
@elseif ($lang == 'fr')
    @section('page_title', "Données de l'utilisateur - Église Baptiste Buenas Nuevas")
@else
    @section('page_title', "Datos del usuario - Iglesia Bautista Buenas Nuevas")
@endif

@section('content')
    <div class="card">
        <div class="card-header">
            @if ($lang == 'en')
                <h2 class="pb-1">User data</h2>
            @elseif ($lang == 'fr')
                <h2 class="pb-1">Données de l'utilisateur</h2>
            @else
                <h2 class="pb-1">Datos del usuario</h2>
            @endif
        </div>

        <div class="card-body">
            <!-- División de Tabla -->
            <div id="div_tabla_id" class="div_tabla">

                <table id="tbl_id" cellspacing="0" cellpadding="0" class="standard-light-blue"
                       style="margin-right:auto;margin-left:0px">
                {{--<table id="tbl_id" cellspacing="0" cellpadding="0" class="new-style">--}}

                <!-- Cabecera de la Tabla -->
                    <thead>
                    <tr style="text-align: left;">
                        <!--hola-->
                    </tr>
                    </thead>
                    <!-- Fin de Cabecera de la Tabla -->

                    <!-- Cuerpo de la Tabla -->
                    <tbody>
                    <tr>
                        @if ($lang == 'en')
                            <th>Field</th>
                            <th>Value</th>
                            <th>Field</th>
                            <th>Value</th>
                        @elseif ($lang == 'fr')
                            <th>Domaine</th>
                            <th>Valeur</th>
                            <th>Domaine</th>
                            <th>Valeur</th>
                        @else
                            <th>Campo</th>
                            <th>Valor</th>
                            <th>Campo</th>
                            <th>Valor</th>
                        @endif
                    </tr>

                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                1st Name
                            @elseif ($lang=='fr')
                                Prénom
                            @else
                                Nombre
                            @endif
                        </td>
                        <td style="text-align: left;">{{ $user->first_name }}</td>

                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Phone
                            @elseif ($lang=='fr')
                                Téléphone
                            @else
                                Teléfono
                            @endif
                        </td>
                        <td style="text-align: left;">{{ strlen($user->phone) == 10 ? '(' . substr($user->phone, 0, 3) . ') ' . substr($user->phone, 3, 3) . '-' . substr($user->phone, 6, 4) : $user->phone  }}</td>
                    </tr>

                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                2nd Name
                            @elseif ($lang=='fr')
                                Deuxième prénom
                            @else
                                2do Nombre
                            @endif
                        </td>
                        <td style="text-align: left;">{{ $user->secondname }}</td>

                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Email
                            @elseif ($lang=='fr')
                                Email
                            @else
                                Email
                            @endif
                        </td>
                        <td style="text-align: left;">{{ $user->email }}</td>
                    </tr>

                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Last Name
                            @elseif ($lang=='fr')
                                Nom de famille
                            @else
                                Apellidos
                            @endif
                        </td>
                        <td style="text-align: left;">{{ $user->last_name }}</td>

                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Condition
                            @elseif ($lang=='fr')
                                État
                            @else
                                Estado
                            @endif
                        </td>
                        {{--                        <td style="text-align: left;">{{ $user->is_active == 1 ? 'Activo' : 'Inactivo' }}</td>--}}
                        <td style="text-align: left;"></td>
                    </tr>

                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Country
                            @elseif ($lang=='fr')
                                Pays
                            @else
                                País
                            @endif
                        </td>
                        <td style="text-align: left;">{{ $user->country->name }}</td>

                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Privileges
                            @elseif ($lang=='fr')
                                Privilèges
                            @else
                                Privilegios
                            @endif
                        </td>
                        <td style="text-align: left;">
                            @if($lang=='en')
                                {{ ($user->kind == 'administrator') ? 'Administrator' : (($user->kind == 'operator') ? 'Operator' : 'Guest') }}
                            @elseif ($lang=='fr')
                                {{ ($user->kind == 'administrator') ? 'Administrateur' : (($user->kind == 'operator') ? 'Opérateur' : 'Invité') }}
                            @else
                                {{ ($user->kind == 'administrator') ? 'Administrador' : (($user->kind == 'operator') ? 'Operador' : 'Invitado') }}
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Profession
                            @elseif ($lang=='fr')
                                Profession
                            @else
                                Profesión
                            @endif
                        </td>
                        <td style="text-align: left;"></td>

                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Created at:
                            @elseif ($lang=='fr')
                                Créé à:
                            @else
                                Creado:
                            @endif
                        </td>
                        <td style="text-align: left;">{{ $user->created_at }}</td>
                    </tr>

                    <tr>
                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                                Gender
                            @elseif ($lang=='fr')
                                Genre
                            @else
                                Sexo
                            @endif
                        </td>
                        <td style="text-align: left;">
                            @if($lang=='en')
                                {{ strtolower($user->gender) == 'female' ? 'Female' : (strtolower($user->gender) == 'male' ? 'Male' : 'Unknown') }}
                            @elseif ($lang=='fr')
                                {{ strtolower($user->gender) == 'female' ? 'Femelle' : (strtolower($user->gender) == 'male' ? 'Masculin' : 'Inconnu') }}
                            @else
                                {{ strtolower($user->gender) == 'female' ? 'Femenino' : (strtolower($user->gender) == 'male' ? 'Masculino' : 'Desconocido') }}
                            @endif
                        </td>

                        <td style="text-align: left; font-weight: bold;">
                            @if($lang=='en')
                            @elseif ($lang=='fr')
                            @else
                            @endif
                            Actualizado:
                        </td>
                        <td style="text-align: left;">{{ $user->updated_at }}</td>
                    </tr>

                    </tbody>
                    <!-- Fin de Cuerpo de la Tabla  -->

                    <!-- Pie de Tabla -->
                    <tfoot>
                    <tr>
                        <!--<td> (Pie de la tabla) </td>-->
                    </tr>
                    </tfoot>
                    <!-- Fin de Pie de Tabla -->

                </table>
            </div>
            <!-- Fin de la División de Tabla -->

            <br>

            {{--    <p><a href="{{url()->previous()}}">URL Anterior</a></p>--}}
            <p>
                <a href="{{ route('user.edit_user_page', ['language' => $lang, $user] ) }}" class="btn btn-default btn-success faa-parent animated-hover" style="text-decoration: none;" name="edit_user">
                    <i class="fa fa-edit faa-ring faa-slow"></i>
                    Editar
                </a>

                <a class="btn btn-default btn-danger faa-parent animated-hover" style="text-decoration: none;" href="{{route('user.users_page', ['language' => $lang])}}">
                    <i class="fa fa-arrow-left faa-horizontal fa-fast"></i>
                    Regresar
                </a>
            </p>

        </div>
        {{-- /Card-Body --}}

    </div>
    {{-- /Card --}}



@endsection