$('#registrarEmpleado').submit(function (e) {

    e.preventDefault();
    var nombre = $.trim($("#inputNombreEmpleado").val());
    var id_huella = $.trim($("#inputIdHuella").val());
    var opcion = 1;

    if (nombre.length == "" || id_huella.length == "") {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un nombre y/o huella'
        });
        return false;
    } else {
        $.ajax({
            url: "http://localhost/html/php/queryRead.php",
            type: "POST",
            dataType: "json",
            data: { opcion: opcion, nombre: nombre, id_huella: id_huella },
            success: function (data) {
                if (Object.keys(data).length == 0) {
                    Swal.fire({
                        type: 'error',
                        title: 'Error',
                        text: 'No fue posible guardar el empleado, intente nuevamente'
                    });
                } else {
                    Swal.fire({
                        type: 'success',
                        title: 'Empleado guardado exitosamente',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Continuar',
                    })
                }
            }
        });
    }
});


$(document).ready(function () {
    $(document).on("click", ".btnCargaId", function () {
        var opcion = 2;
        $.ajax({
            url: "http://localhost/html/php/queryRead.php",
            type: "POST",
            dataType: "json",
            data: { opcion: opcion },
            success: function (data) {
                var id = data[0].id_huella;
                $('#inputIdHuella').val(id + 420);
            }
        });
    });
});


$(document).ready(function () {
    $(document).on("click", ".btnBuscar", function () {
        var opcion = 3;
        $.ajax({
            url: "http://localhost/html/php/queryRead.php",
            type: "POST",
            dataType: "json",
            data: { opcion: opcion },
            success: function (data) {
                console.log(data);
                var id = data[0].id_huella;
                var nombre = data[0].nombre;
                $('#inputConsulttaIdHuella').val(id + 420);
                $('#inputConsultaNombre').val(nombre);
            }
        });
    });
});
