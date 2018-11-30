<?php
$lang = isset($language) ? $language : 'es';
?>

@extends('layouts.admin_panel_layout')

@if ($lang == 'en')
    @section('page_title', "Users - Baptist Church Buenas Nuevas")
@elseif ($lang == 'fr')
    @section('page_title', "Utilisateurs - Église Baptiste Buenas Nuevas")
@else
    @section('page_title', "Usuarios - Iglesia Bautista Buenas Nuevas")
@endif


@section('content')
    <div class="card">

        <div class="card-header">
            <div class="d-flex justify-content-between align-items-end">
                @if ($lang == 'en')
                    <h2 class="pb-1">Users list</h2>
                @elseif ($lang == 'fr')
                    <h2 class="pb-1">Liste des utilisateurs</h2>
                @else
                    <h2 class="pb-1">Listado de usuarios</h2>
                @endif

                <button style="margin-bottom: 10px; cursor: pointer;" class="btn btn-primary delete_all faa-parent animated-hover" name="delete_users" data-url="{{ url('myproductsDeleteAll') }}">
                    <i class="fa fa-trash faa-ring faa-slow"></i>
                    @if ($lang == 'en')
                        Delete the selected ones
                    @elseif ($lang == 'fr')
                        Supprimer les sélectionnés
                    @else
                        Borrar los seleccionados
                    @endif
                </button>
            </div>
        </div>

        <div class="card-body">

        @if(!$users->isEmpty())

            <!-- División de Tabla -->
                <div id="div_tabla_id" class="div_tabla">

                    <table id="tbl_id" cellspacing="0" cellpadding="0" class="standard-light-blue" style="width: 100%;">
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
                            <th width="50px">
                                {{--<input type="checkbox" id="master">--}}

                                <div class="pretty p-svg p-curve">
                                    <input type="checkbox" id="master"/>
                                    <div class="state p-success" style="margin-left: -12px; width: 1px;">
                                        <!-- svg path -->
                                        <svg class="svg svg-icon" viewBox="0 0 20 20">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                        </svg>
                                        <label></label>
                                    </div>
                                </div>

                            </th>

                            @if ($lang == 'en')
                                <th>ID</th>
                                <th>1st Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Privileges</th>
                                <th colspan="2">
                                </th>
                            @elseif ($lang == 'fr')
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Patronyme</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Sexe</th>
                                <th>Privilèges</th>
                                <th colspan="2">
                                </th>
                            @else
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Sexo</th>
                                <th>Privilegios</th>
                                <th colspan="2">
                                </th>
                            @endif
                        </tr>

                        @forelse($users as $user)

                            <tr>
                                {{-- Borrado múltiple --}}
                                <td>
                                    {{--<input type="checkbox" class="sub_chk" data-id="{{$user->id}}">--}}

                                    <div class="pretty p-svg p-curve">
                                        <input type="checkbox" class="sub_chk" data-id="{{$user->id}}" name="chkOrgRow"/>
                                        <div class="state p-success" style="margin-left: -12px; width: 1px;">
                                            <!-- svg path -->
                                            <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                            </svg>
                                            <label></label>
                                        </div>
                                    </div>

                                </td>

                                <!-- Usando route (EL MEJOR) -->
                                <td style="text-align: center;">
                                    <a href="{{ route('user.user_details_page', ['language'=> $lang, 'id' => $user->id]) }}">{{ $user->id }}</a>
                                </td>

                                <!-- Usando route (EL MEJOR) -->
                                <td style="text-align: left;">
                                    <a href="{{ route('user.user_details_page', ['language'=> $lang, 'id' => $user->id]) }}">{{ $user->first_name }}</a>
                                </td>

                                <!-- Usando url -->
                                <td style="text-align: left;">
                                    <a href="{{ url($lang . '/user_details_page/' . $user->id) }}">{{ $user->last_name }}</a>
                                </td>
                                <td style="text-align: left;">
                                    <a href="{{url("$lang/user_details_page/$user->id")}}">{{ $user->email }}</a>
                                </td>

                                {{-- Usando action --}}
                                <td style="text-align: left;">
                                    <a href="{{action('AdminController@show_user_details_page', ['language'=> $lang, $user->id])}}">{{ strlen($user->phone) == 10 ? '(' . substr($user->phone, 0, 3) . ') ' . substr($user->phone, 3, 3) . '-' . substr($user->phone, 6, 4) : $user->phone  }}</a>
                                </td>
                                <td style="text-align: left;">
                                    <a href="{{action('AdminController@show_user_details_page', ['language'=> $lang, 'id' => $user->id])}}">
                                        @if ($lang=='en')
                                            {{ strtolower($user->gender) == 'female' ? 'Female' : 'Male' }}
                                        @elseif($lang=='fr')
                                            {{ strtolower($user->gender) == 'female' ? 'Femme' : 'Masculin' }}
                                        @else
                                            {{ strtolower($user->gender) == 'female' ? 'Femenino' : 'Masculino' }}
                                        @endif
                                    </a>
                                </td>

                                <?php
                                $tdColor = ($user->kind == 'administrator') ? 'red' : ($user->kind == 'operator' ? 'orange' : ($user->kind == 'guest' ? 'green' : 'pink'))
                                ?>

                                <td style="text-align: left; color: {{ $tdColor}} ">
                                    <a href="{{ route('user.user_details_page', ['language'=> $lang, 'id' => $user->id]) }}" style="color: {{ $tdColor}} ">
                                        @if ($lang == 'en')
                                            {{ (strtolower($user->kind) == 'administrator') ? 'Administrator' : (($user->kind == 'operator') ? 'Operator' : 'Guest') }}
                                        @elseif ($lang == 'fr')
                                            {{ (strtolower($user->kind) == 'administrator') ? 'Administrateur' : (($user->kind == 'operator') ? 'Opérateur' : 'Invité') }}
                                        @else
                                            {{ (strtolower($user->kind) == 'administrator') ? 'Administrador' : (($user->kind == 'operator') ? 'Operador' : 'Invitado') }}
                                        @endif
                                    </a>
                                </td>


                                <td style="text-align: left">
                                    <a href="{{ route('user.edit_user_page', ['language'=> $lang, 'id' => $user->id]) }}" class="btn btn-default btn-sm btn-success faa-parent animated-hover" name="edit_user">
                                        {{--                                    <a href="{{ route('user.edit_user_page', $user) }}" class="btn btn-default btn-sm btn-success faa-parent animated-hover" name="edit_user">--}}
                                        <i class="fa fa-edit faa-ring faa-slow"></i>
                                    </a>
                                    {{--<button id="btn_edited_post" type="button" class="btn btn-default btn-sm btn-success" name="edit_post">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--</button>--}}
                                </td>

                                <td style="text-align: left">
                                    {{--                                    <form action="{{ route('user.delete_user_script', $user) }}" method="POST" style="">--}}
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button id="btn_delete_post" type="submit" class="btn btn-default btn-sm btn-danger faa-parent animated-hover" name="delete_user" style="cursor: pointer;">
                                        <i class="fa fa-trash faa-ring faa-slow"></i>
                                    </button>
                                    </form>

                                    {{--<a href="{{ route('user.delete_user_script', ['user' => $user->id]) }}" class="btn btn-default btn-sm btn-danger faa-parent animated-hover" name="delete_user">--}}
                                    {{--<i class="fa fa-trash faa-ring faa-slow"></i>--}}
                                    {{--</a>--}}
                                    {{--<button id="btn_delete_post" type="button" class="btn btn-default btn-sm btn-danger faa-parent animated-hover" name="delete_post">--}}
                                    {{--<i class="fa fa-trash faa-ring faa-slow"></i>--}}
                                    {{--</button>--}}
                                </td>

                            </tr>

                        @empty
                            <p>No hay usuarios registrados</p>
                        @endforelse

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

            @else
                {{-- users Is Empty--}}

                <div class='alert alert-danger' role='alert'>
                    <p class="text-danger">No hay usuarios registrados !!</p>
                </div>
            @endif

        </div>
        {{-- /Card Body --}}


    </div>
    {{-- /Card --}}
@endsection