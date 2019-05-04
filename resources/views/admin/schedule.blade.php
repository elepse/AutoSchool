@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-xs-12 col-lg-12">
        <h2 class="text-center">Поиск события</h2>
        <div class="row col-lg-12 text-center">
            <div class="col-lg-6 col-xs-12">
                <label for="typePlan">Тип события</label>
                <select class="form-control" id="typePlan">
                    <option value="">Не выбрано!</option>
                    <option value="1">Теория</option>
                    <option value="2">Экзамены</option>
                    <option value="3">События школы</option>
                </select>
            </div>
            <div class="col-lg-6 col-xs-12">
                <label for="commentPlan">Комментарий</label>
                <input class="form-control" id="commentPlan" type="text">
            </div>
        </div>
        <br>
    </div>
</div>
<hr>
<div class="text-center">
    @if(Auth::check() && Auth::user()->role == 1)
        <button type="button" onclick="$('#addEventModal').modal('show');" class="btn btn-success">Создать новое событие  <i class="fa fa-plus-circle"></i></button>
        @endif
</div>
<br>
    <div class="container-fluid">
        <div class="col-xs-12 col-lg-10 offset-lg-1" id="cardContainer">

        </div>
    </div>
<!-- Event modal -->
<div class="modal fade bd-example-modal-lg" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title h4" id="exampleModalLabel">Добавление события</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
                <div class="col-lg-12 row">
                    <div class="col-lg-6 col-xs-12">
                        <label for="timeEvent">Дата и время события:</label>
                        <input class="form-control" type="datetime-local" id="timeEvent">
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <label for="typeEvent">Тип события:</label>
                        <select class="form-control" id="typeEvent">
                            <option value="">Не выбрано!</option>
                            <option value="1">Теория</option>
                            <option value="2">Экзамены</option>
                            <option value="3">События школы</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-lg-12 text-center" style="margin-top: 10px">
                        <label for="typeEvent">Описание события:</label>
                        <textarea type="text" class="form-control" id="commentEvent"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" onclick="addEvent()">Добавил</button>
            </div>
        </div>
    </div>
</div>
    @endsection