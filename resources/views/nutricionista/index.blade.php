@extends('layouts.master')

@section('title', 'Nutricionista')

@section ('content')


<table class="table table-striped custab">
    <thead>
    <a href="#" class="btn btn-primary btn-md pull-right"><b>+</b>Crear nuevo</a>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Paciente</th>
            <th>Pago</th>
            <th>Estado</th>           
            <th class="text-center">Accion</th>
        </tr>
    </thead>			
            <tr>
                <td>1</td>
                <td>News</td>
                <td>News Cate</td>
                <td>Ingresar pago</td>
                <td><a class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span> Activo</a></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Products</td>
                <td>Main Products</td>
                <td>Ingresar pago</td>
                <td><a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Inactivo</a></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Blogs</td>
                <td>Parent Blogs</td>
                <td>Ingresar pago</td>
                <td><a class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span> Activo</a></td></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
    </table>

@endsection