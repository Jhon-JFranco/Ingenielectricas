@extends ('layouts.admin')
@section ('contenido')

<!DOCTYPE html>
<html>

<head>
    <title>Editar Proveedo</title>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($erros->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</head>

<body>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Ingenielectricasoft</h5>
                <form class="needs-validation" novalidate method="POST"
                    action="{{route('proveedores.update', $proveedores->id_proveedor)}}">
                    {!! method_field('PUT')!!}
                    @csrf
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Proveedor</label>
                                        <input type="text" name="proveedor" class="form-control"
                                            id="validationTooltip04" placeholder="Proveedor.."
                                            value="{{$proveedores->proveedor}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Telefono</label>
                                        <input type="number" name="telefono" class="form-control"
                                            id="validationTooltip04" placeholder="Telefono.."
                                            value="{{$proveedores->telefono}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Estado</label>
                                        <input type="text" name="estado" class="form-control" id="validationTooltip04"
                                            placeholder="Estado.." value="{{$proveedores->estado}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="right">
                                <div class="form-group">
                                    <button type="submit" class="mb-2 mr-2 btn btn-success">Guardar</button>
                                    <a href="{{route('proveedores.index')}}">Volver a la lista</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@stop
