@extends('layouts.admin')

@section('components')
    <div class="container">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">User list</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}

            </div>
    @endif
    <!--button class="btn btn-danger btn-group-sm" type="submit" style="float: left">Delete</button-->
        <div class="card">
            <div class="card-header" style="background-color: #0e8ce4">

            </div>
            <table class="table table-striped">
                <thead>
                <tr>

                    <th scope="col">S/n</th>
                    <th scope="col">User name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    @foreach( \App\User::all() as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="card-footer" style="background-color: #0e8ce4"></div>
        </div>
    </div>
@endsection
