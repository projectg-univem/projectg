@extends('layouts.teacher')

@section('content')

    <div class="col-xl-12 mb-5 mt-5 mb-xl-0">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Trabalhos Ativos</h3>
                    </div>
                    <div class="col text-right">
                        <a href="{{ route('get.teacher.tasks') }}" class="btn btn-sm btn-primary">Ver todos</a>
                    </div>
                </div>
            </div>
 			<div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Trabalho</th>
                        <th scope="col">Nº Grupos</th>
                        <th scope="col">Qtde de Alunos Grupo</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><a href="{{ route('get.teacher.getTaskModelo') }}">Árvore B*</a></th>
                        <td>5</td>
                        <td>5</td>
                        <td>BCC 6 S/A</td>
                    </tr>
                    <tr>
                        <th scope="row">
                            /argon/index.html
                        </th>
                        <td>
                            3,985
                        </td>
                        <td>
                            319
                        </td>
                        <td>
                            <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            /argon/charts.html
                        </th>
                        <td>
                            3,513
                        </td>
                        <td>
                            294
                        </td>
                        <td>
                            <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            /argon/tables.html
                        </th>
                        <td>
                            2,050
                        </td>
                        <td>
                            147
                        </td>
                        <td>
                            <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            /argon/profile.html
                        </th>
                        <td>
                            1,795
                        </td>
                        <td>
                            190
                        </td>
                        <td>
                            <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection