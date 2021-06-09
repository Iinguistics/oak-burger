@extends('layouts.admin')



@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Food Categories </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Food Categories</li>
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
                        <h5 class="card-header">All Food Categories</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Starters</td>
                                        <td>6/5/2021</td>
                                        <td><a href="/admin/food-categories/1/edit"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="/admin/food-categories/1/delete" 
                                            onclick="if (! confirm('Are you sure you want to delete?')) {return false; }">
                                            <i class="fas fa-trash-alt"></i>
                                        </a></td>                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Burgers</td>
                                        <td>6/1/2021</td>
                                        <td><a href="/admin/food-categories/2/edit"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="/admin/food-categories/2/delete"
                                            onclick="if (! confirm('Are you sure you want to delete?')) {return false; }"
                                            ><i class="fas fa-trash-alt"></i></a></td>                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Entrees</td>
                                        <td>6/5/2021</td>
                                        <td><a href="/admin/food-categories/3/edit"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="/admin/food-categories/3/delete"
                                            onclick="if (! confirm('Are you sure you want to delete?')) {return false; }"
                                            ><i class="fas fa-trash-alt"></i></a></td>                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Sides</td>
                                        <td>5/10/2021</td>
                                        <td><a href="/admin/food-categories/4/edit"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="/admin/food-categories/4/delete"
                                            onclick="if (! confirm('Are you sure you want to delete?')) {return false; }"
                                            ><i class="fas fa-trash-alt"></i></a></td>                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Deserts</td>
                                        <td>5/22/2021</td>
                                        <td><a href="/admin/food-categories/5/edit"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="/admin/food-categories/5/delete"
                                            onclick="if (! confirm('Are you sure you want to delete?')) {return false; }"
                                            ><i class="fas fa-trash-alt"></i></a></td>                                    
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table -->
               
         
            </div>
       
    </div>
  
@endsection


