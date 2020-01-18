@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html>

<head>
    <title></title>

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
    <style>
        .btnatras {
            color: red;
        }

    </style>
</head>

<body>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Ingenielectricasoft</h5>
                <form class="needs-validation" novalidate method="POST" action="{{route('empleados.store')}}">
                    @csrf
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Documento</label>
                                        <input type="number" name="numero_documento" class="form-control"
                                            id="validationTooltip04" placeholder="Ingrese Documento" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Nombre</label>
                                        <input type="text" name="nombre_empleado" class="form-control"
                                            id="validationTooltip04" placeholder="Ingrese Nombre" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Apellido</label>
                                        <input type="text" name="apellido_empleado" class="form-control"
                                            id="validationTooltip04" placeholder="Ingrese Apellido" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Telefono</label>
                                        <input type="number" name="telefono" class="form-control"
                                            id="validationTooltip04" placeholder="Ingrese Telefono" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Direccion</label>
                                        <input type="text" name="direccion" class="form-control"
                                            id="validationTooltip04" placeholder="Ingrese Direccion" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Estado</label>
                                        <select class="form-control" name="estado" id="estado" required>
                                            <option value="">Seleccione el Estado</option>
                                            <option>Activo</option>
                                            <option>Inactivo</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Obra</label>
                                        <select class="form-control" name="id_obra" id="id_obra" required>
                                            <option value="">Seleccione obra</option>
                                            @foreach($obras as $obras)
                                            <option value="{{$obras->id_obra}}">
                                                {{$obras->descripcion_obra}}
                                            </option>
                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Cargo</label>
                                        <select class="form-control" name="id_cargo" id="id_cargo" required>
                                            <option value="">Seleccione cargo</option>
                                            @foreach($cargos as $cargos)
                                            <option value="{{$cargos->id_cargo}}">
                                                {{$cargos->descripcion_cargo}}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div>
                               <!--  <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="validationTooltip04">Usuario</label>
                                        <input type="text" name="descripcion" class="form-control"
                                            id="validationTooltip04" placeholder="Ingrese Usuario" required>
                                        <div class="invalid-feedback">
                                            Campo Obligatorio
                                        </div>
                                    </div>
                                </div> -->
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

</html>
@endsection
