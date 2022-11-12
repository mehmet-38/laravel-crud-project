@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Kullanıcılar
                        <br />
                        <a href="{{ route('add-user-page') }}"class="btn btn-success mt-3">
                            <i class="fa-solid fa-user-plus"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>İsim</th>
                                        <th>Soyisim</th>
                                        <th>Email</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ url($user->id . '/edit-user-page') }}" class="btn btn-primary">
                                                    <i class="fa-solid fa-user-pen"></i>
                                                </a>
                                                <form action="{{ url($user->id . '/delete-user') }}" method="POST"
                                                    style="display:inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
