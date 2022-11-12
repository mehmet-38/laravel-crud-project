@extends('layout.layout')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col  d-flex justify-content-center">
                <div class="card col-md-6">
                    <div class="card-header">Kullanıcı Ekle

                    </div>
                    <div class="card-body">
                        <form action="{{ route('add-user') }}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3 ">
                                <label for="name" class="form-label">İsim:</label>
                                <input type="text" class="form-control" style="margin-right: 300px" id="name"
                                    placeholder="İsim" name="name">
                            </div>
                            <div class="mb-3 ">
                                <label for="last_name" class="form-label">Soyisim:</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Soyisim"
                                    name="last_name">
                            </div>
                            <div class="mb-3 ">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email"
                                    name="email">
                            </div>
                            <div class="mb-3 ">
                                <label for="password" class="form-label">Şifre:</label>
                                <input type="password" class="form-control" id="password" placeholder="Şifre"
                                    name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
