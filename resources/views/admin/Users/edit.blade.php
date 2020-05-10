
@extends('admin.layaout')
@section('titre')
    Modifier un utilisateur
@stop
@section('page_titre')
    Editer un utilisateur
@stop
@section('container')

    <div class="row">


        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Compte</h6>
                </div>

                <div class="card-body">

                    {!! Form::model($user, [
                        'action' => ['UsersController@update', $user->id],
                        'method' => 'put',
                        'files' => true
                    ])
                !!}

                <div class="box-body" style="margin:10px;">
                  @include('admin.Users.form')
                </div>

                <!-- Button -->
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col text-right">
                            <button type="submit" class="btn btn-primary"><i></i> Valider</button>
                        </div>
                        <div class="col text-left">
                            <button type="submit" href="{{ route('users.index') }}" class="btn btn-warning">Annuler</button>
                        </div>
                    </div>
                </div>



              {!! Form::close() !!}

                </div>

            </div>

        </div>

    </div>
@stop




