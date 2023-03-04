@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-mb-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-center">Создание товара</h2>
                    </div>
                    <div class="card-body">
                        <form method="post"  action="{{route('createprod')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название товара</label>
                                <div class="col-md-6">
                                    <input class="form-control" id="name" type="text" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="img_url" class="col-md-4 col-form-label text-md-end">Добавить фото
                                    товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="img_url" type="file" name="img_url" required
                                           autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Цена</label>
                                <div class="col-md-6">
                                    <input class="form-control" id="price" type="number" name="price" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="year_of_production" class="col-md-4 col-form-label text-md-end">Дата выхода
                                    продукта</label>
                                <div class="col-md-6">
                                    <input class="form-control" id="year_of_production" type="text"
                                           name="year_of_production" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="country_of_origin" class="col-md-4 col-form-label text-md-end">Страна
                                    производитель</label>