<?php
/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
public function create()
{
    return view('back.users.create', $this->role_gestion->getAllSelect());
}
/**
 * Get roles collection.
 *
 * @param  App\Models\User
 * @return Array
 */
public function getAllSelect()
{
    $select = $this->all()->lists('title', 'id');
 
    return compact('select');
}
@extends('back.template')
 
@section('main')
 
    <!-- Entête de page -->
    @include('back.partials.entete', ['title' => trans('back/users.dashboard'), 'icone' => 'user', 'fil' => link_to('user', trans('back/users.Users')) . ' / ' . trans('back/users.creation')])
 
    <div class="col-sm-12">
        {!! Form::open(['url' => 'user', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}  
            {!! Form::control('text', 0, 'username', $errors, trans('back/users.name')) !!}
            {!! Form::control('email', 0, 'email', $errors, trans('back/users.email')) !!}
            {!! Form::control('password', 0, 'password', $errors, trans('back/users.password')) !!}
            {!! Form::control('password', 0, 'password_confirmation', $errors, trans('back/users.confirm-password')) !!}
            {!! Form::selection('role', $select, null, trans('back/users.role')) !!}
            {!! Form::submit(trans('front/form.send')) !!}
        {!! Form::close() !!}
    </div>
 
@stop