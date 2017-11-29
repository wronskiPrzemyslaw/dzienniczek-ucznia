@extends('layouts.app')

@section('content')
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-gear"></i> Panel</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addTeacherModal"><i class="fa fa-plus"></i> Dodaj nauczyciela</a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Nauczyciele</h4>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Imię</th>
                                <th>Nazwisko</th>
                                <th>Dodany</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Donald</td>
                                <td>Tusk</td>
                                <td>July 11, 2017</td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Jarosław</td>
                                <td>Kaczyński</td>
                                <td>July 12, 2017</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>Antoni</td>
                                <td>Macierewicz</td>
                                <td>July 12, 2017</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </section>

    <footer id="main-footer" class="bg-inverse text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Copyright &copy; 2017 Przemysław Wroński, Paweł Antoniak, Dobromir Kabuła</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- ADD POST MODAL -->
    <div class="modal fade" id="addTeacherModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addPostModalLabel">Dodaj nauczyciela</h5>
                    <button class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title" class="form-control-label">Imię</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-control-label">Nazwisko</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                    <button class="btn btn-primary" data-dismiss="modal">Dodaj</button>
                </div>
            </div>
        </div>
    </div>
@endsection
