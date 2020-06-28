@extends('layouts.admin')

@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Users</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Users</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row">{{$user->id}}</th>
                                                    <td>{{$user->fname}} {{$user->lname}}</td>
                                                    <td>{{date('m/d/Y', strtotime($user->updated_at))}}</td>
                                                    <td>
                                                        <a href="/admin/users/{{$user->id}}/edit"><i class="far fa-edit"></i></a>
                                                    </td>
                                                    <td>
                                                        {{-- <a href="/admin/users/{{$user->id}}/delete" onclick="if (! confirm('Are you sure you want delete category?')) { return false; }">
                                                        <i class="far fa-trash-alt"></i></a> --}}
                                                        
                                                        <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-user-{{$user->id}}').submit();">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                <form id="delete-user-{{$user->id}}" action="/admin/users/{{$user->id}}/delete" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>

                                                    </td>
                                                </tr>    
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        
                        <!-- ============================================================== -->
                    </div>
            
@endsection

{{-- @extends('layouts.admin')

@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Users</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Users</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <tr>
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="/admin/users/1/edit"><i class="far fa-edit"></i></a>
                                                    </td>
                                                    <td>
                                                        {{-- <a href="/admin/users/1/delete" onclick="if (! confirm('Are you sure you want delete category?')) { return false; }">
                                                        <i class="far fa-trash-alt"></i></a> --}}
                                                        
                                                        {{-- <a href="#" onclick="event.preventDefault();
                                document.getElementById('delete-user-1').submit();">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                                <form id="delete-user-1" action="/admin/users/1/delete" method="POST" style="display: none;">
                                                
                                            </form>

                                                    </td>
                                                </tr>    
                                           
                                            
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        
                        <!-- ============================================================== -->
                    </div>
            
@endsection --}} 