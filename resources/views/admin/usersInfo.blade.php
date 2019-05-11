@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="container">
            <h3 class="text-center">Управление пользователями</h3>
            <div class="col col-lg-12 row text-center">
                <div class="col-lg-12 col-xs-12">
                    <label for="userEmailSearch">Электронная почта</label>
                    <input placeholder="example@mail.com" class="form-control userSearch" id="userEmailSearch">
                    <br>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <label for="userTypeSearch">Тип учётной записи</label>
                    <select class="form-control userSearch" id="userTypeSearch">
                        <option value="">Не выбрано!</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id_role}}">{{$role->name_role}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <label for="userFioSearch">ФИО</label>
                    <input placeholder="Фамилия Имя Отчество" class="form-control userSearch" id="userFioSearch">
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 col-xs-12 table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Номер</th>
                    <th>ФИО</th>
                    <th>Номер телефона</th>
                    <th>Электронная почта</th>
                    <th>Тип пользователя</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody id="tableUsers">
                <tr>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" id="userEditModal" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="exampleModalLabel">Редактирование пользователя</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form id="formEditUser">
                        <input id="idEditUser" class="sr-only">
                        <label for="roleEditUser" >Выберите новую роль:</label>
                        <select id="roleEditUser" class="form-control">
                            <option value="">Ничего не выбрано</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id_role}}">{{$role->name_role}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary" onclick="saveEditUser()">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
@endsection