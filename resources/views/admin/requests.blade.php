@extends('layouts.app')
@section('content')
    <div class="col-12">
        <div class="container">
            <h3 class="text-center">Запросы на практику</h3>
            <div class="col col-lg-12 row text-center">
                <div class="col-lg-6 col-xs-12">
                    <label for="userRequestEmailSearch">Электронная почта</label>
                    <input placeholder="example@mail.com" class="form-control requestSearch" id="userRequestEmailSearch">
                    <br>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <label for="typeClassRequest">Тип занятия</label>
                    <select class="form-control requestSearch " id="typeClassRequest">
                        <option value="">Не выбрано!</option>
                        <option value="1">Автодром</option>
                        <option value="2">Город</option>
                    </select>
                    <br>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <label for="instructorRequest">Инструктор</label>
                    <select class="form-control requestSearch" id="instructorRequest">
                        <option value="">Не выбрано!</option>
                        @foreach($instructors as $instructor)
                            <option value="{{$instructor->id_instructor}}">{{$instructor->name_instructor}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <label for="requestFioSearch">Клиент</label>
                    <input placeholder="Фамилия Имя Отчество" class="form-control requestSearch" id="requestFioSearch">
                    <br>
                </div>
                <div class="col-lg-6 offset-lg-3 col-xs-12">
                    <label for="typeKP">Тип коробки передач:</label>
                    <select id="typeKP" class="form-control requestSearch">
                        <option value="">Не выбрано!</option>
                        <option value="1">Механическая</option>
                        <option value="2">Автоматическая</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12 col-xs-12 table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>Клиент</th>
                    <th>почта клиента</th>
                    <th>Инструток</th>
                    <th>Тип занятия</th>
                    <th>Тип коробки передач</th>
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody id="requestsTable">

                </tbody>
            </table>
        </div>
    </div>
    @endsection