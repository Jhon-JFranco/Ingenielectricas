@extends ('layouts.admin')
@section ('contenido')

<!DOCTYPE html>
<html>

<head>
    <title>Editar Empleado</title>
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
                    action="{{route('empleados.update', $empleados->id_empleado)}}">
                    {!! method_field('PUT')!!}
                    @csrf
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Documento</label>
                                        <input type="number" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Documento" name="numero_documento"
                                            value="{{$empleados->numero_documento}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Nombre</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Nombre" name="nombre_empleado"
                                            value="{{$empleados->nombre_empleado}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Apellido</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Apellido" name="apellido_empleado"
                                            value="{{$empleados->apellido_empleado}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Telefono</label>
                                        <input type="number" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Telefono" name="telefono"
                                            value="{{$empleados->telefono}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Direccion</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Direccion" name="direccion"
                                            value="{{$empleados->direccion}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Estado</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Estado" name="estado"
                                            value="{{$empleados->estado}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Obra</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Obra" name="id_obra"
                                            value="{{$empleados->id_obra}}"  required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Cargo</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Cargo" name="id_cargo" 
                                            value="{{$empleados->id_cargo}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Usuario</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Usuario" name="id_usuario" 
                                            value="{{$empleados->id_usuario}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="right">
                                <div class="form-group">
                                    <button type="submit" class="mb-2 mr-2 btn btn-success">Guardar</button>
                                    <a href="{{route('empleados.index')}}">Volver a la lista</a>
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
