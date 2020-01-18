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
                    action="{{route('usuarios.update', $usuarios->id_usuario)}}">
                    {!! method_field('PUT')!!}
                    @csrf
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Documento</label>
                                        <input type="number" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Documento" value="{{$usuarios->numero_documento}}"
                                            required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Nombre</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Nombre" value="{{$usuarios->nombre_usuario}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Apellido</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Apellido" value="{{$usuarios->apellido_usuario}}"
                                            required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Telefono</label>
                                        <input type="number" class="form-control" id="validationTooltip04"
                                            placeholder="Ingese Telefono" value="{{$usuarios->telefono}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltipUsername">Correo Electronico</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control has-feedback-left"
                                                id="validationTooltipUsername" placeholder="Ingrese Correo"
                                                data-validate-linked="email"
                                                aria-describedby="validationTooltipUsernamePrepend"
                                                value="{{$usuarios->correo_electronico}}" required>
                                            <div class="invalid-feedback">
                                                Campo Obligatorio
                                            </div>
                                        </div>

                                        <!--  <input type="email" data-validate-linked="email"
                                        required="required" class="form-control has-feedback-left">
                                        <span class="fa fa-at form-control-feedback left" aria-hidden="true"></span>
 -->


                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Contraseña</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Contraseña" value="{{$usuarios->contrasena}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Estado</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Estado" value="{{$usuarios->estado}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Rol</label>
                                        <input type="text" class="form-control" id="validationTooltip04"
                                            placeholder="Ingrese Rol" value="{{$usuarios->rol}}" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" align="right">
                                <div class="form-group">
                                    <button type="submit" class="mb-2 mr-2 btn btn-success">Guardar</button>
                                    <a href="{{route('usuarios.index')}}">Volver a la lista</a>
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
