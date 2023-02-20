@extends('layouts.template')

@section('content')



<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container-xl px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="file"></i></div>
                                            Halaman User Manajemen
                                        </h1>
                                        <!-- <div class="page-header-subtitle">Use this blank page as a starting point for creating new pages inside your project!</div> -->
                                    </div>
                                    <!-- <div class="col-12 col-xl-auto mt-4">Optional page header content</div> -->
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Main page content-->
                    <div class="container-xl px-4 mt-n10">
                        <div class="card">
                            <div class="card-header">User Manajemen Card</div>
                            <div class="card-body">
                                <!-- Flash Massage -->
                                @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


                            <!-- Button Add -->
                                <a href="{{route('user-manajemen-create')}}" class="btn btn-primary my-1">
                                <i data-feather="plus"></i> &nbsp; Add
                                </a>
                            <table id="tables" width="100%" class="table table-striped table-bordered table-hover dt-responsive nowrap" cellspacing="0"  >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Email</th>
                                            <th>create_at</th>
                                            <th>update_at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $g)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$g->name}}</td>
                                                <td>{{$g->role}}</td>
                                                <td>{{$g->email}}</td>
                                                <td>{{$g->created_at}}</td>
                                                <td>{{$g->updated_at}}</td>
                                                <td>
                                                    <form action='{{url("user-manajemen/$g->id")}}' method="post">
                                                        @csrf
                                                        @method('delete')                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>


                                                       </form>
                                                    {{-- <a href='{{url("user-manajemen/$g->id/edit")}}' class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a> --}}
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-end small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

@endsection
