//for dataTable data
var localeJquery = $("html").attr("lang");
// console.log(localeJquery)
var datatable_language;
if (localeJquery == "es") {
    datatable_language =
        "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json";
    // console.log('spanish')
} else {
    datatable_language =
        "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/English.json";
    // console.log('english')
}
var InitTable = function() {
    var table = $("#table_data").DataTable({
        // "pageLength": 50,
        bDestroy: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: dataTableRoute,
            dataType: "json",
            type: "POST",
            data: { _token: token, filterdata: filterdata }
        },
        columns: data,
        scrollX: true,
        language: {
            url: datatable_language
        }
    });
};

var InitTable1 = function() {
    var table = $("#table_data").DataTable({
        // "pageLength": 50,
        bDestroy: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: dataTableRoute,
            dataType: "json",
            type: "POST",
            data: { _token: token, id: id }
        },
        columns: data,
        scrollX: true,
        language: {
            url: datatable_language
        }
    });
};

// for Form insert data
$("#add-form-btn").on("click", function(e) {
    var data = $("#add-form").serializeArray();
    event.preventDefault();
    $.ajax({
        data: data,
        type: $("#add-form").attr("method"),
        url: $("#add-form").attr("action"),
        success: function(response) {
            if (response.errors) {
                $.each(response.errors, function(index, value) {
                    $("." + index).html(value);
                    $("." + index).fadeIn("slow", function() {
                        $("." + index)
                            .delay(3000)
                            .fadeOut();
                    });
                });
                var success = $("." + index);
                scrollTo(success, -100);
            } else {
                InitTable();
                $(".success").html(response);
                $("#success").show();
                $("#add-form")[0].reset();
                var succ = $(".success");
                scrollTo(succ, -100);
            }
        }
    });
});

// for edit form
$(document).on("click", ".edit", function() {
    var id = $(this).attr("data-id");
    $.ajax({
        url: editRoute,
        type: "POST",
        data: { id: id, _token: token },
        dataType: "json",
        success: function(data) {
            $.each(data, function(index, value) {
                $("#edit_" + index).val(value);
            });

            var success = $("#add-form");
            scrollTo(success, -100);
        },
        error: function() {}
    });
});

// code for add form modal show
$(document).on("click", ".addModelbtn", function() {
    $("#addModel").modal("show");
    $("#add_form")[0].reset();
    $("#edit_id").val("");
});

//close alert message

$(document).on("click", ".close", function() {
    $(".alert").hide();
});

// code for add form
$("#add_form_btn").on("click", function(e) {
    event.preventDefault();
    var form = $("#add_form")[0];
    var formData = new FormData(form);
    var data = $("#add_form").serializeArray();

    $.ajax({
        data: formData,
        type: $("#add_form").attr("method"),
        url: $("#add_form").attr("action"),
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response.errors)
            if (response.errors) {
                $.each(response.errors, function(index, value) {
                    $("." + index).html(value);
                    $("." + index).fadeIn("slow", function() {
                        $("." + index)
                            .delay(4000)
                            .fadeOut();
                    });
                });
            } else {
                console.log('hello')
                InitTable();
                swal('',response.mesg,'success')
                // $(".success").html(response);
                // $("#success").show();
                $("#add_form")[0].reset();
                $("#addModel").modal("hide");
            }
        }
    });
});

$(document).on("click", ".edit_model", function() {
    var id = $(this).attr("data-id");
    $.ajax({
        url: editRoute,
        type: "POST",
        data: { id: id, _token: token },
        dataType: "json",
        success: function(data) {
            $.each(data, function(index, value) {
                $("#edit_" + index).val(value);
            });

            $("#addModel").modal("show");
        },
        error: function() {}
    });
});

$(document).on("click", ".delete", function() {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this!",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        if (willDelete) {
            var id = $(this).attr("data-id");
            $.ajax({
                url: deleteRoute,
                type: "POST",
                data: { id: id, _token: token },
                dataType: "json",
                success: function(response) {
                    if (response.admin == 1) {
                        InitTable1();
                    } else {
                        InitTable();
                        $(".delete").html(response);
                        $("#delete").show();
                    }
                },
                error: function() {}
            });
        } else {
            //swal("Your data is safe!");
        }
    });
});

$(document).on("click", ".approve", function() {
    var title = "";
    var text = "";
    var mesg = "";
    if (localeJquery == "es") {
        title = "¿Estás seguro";
        text = "!Quieres proceder";
    } else {
        title = "Are you sure";
        text = "You want to proceed";
    }
    swal({
        title: title,
        text: text,
        icon: "success",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        $(".loading").show();
        if (willDelete) {
            var id = $(this).attr("data-id");
            $.ajax({
                url: approveRoute,
                type: "POST",
                data: { id: id, _token: token },
                dataType: "json",
                success: function(response) {
                    InitTable();
                    $(".loading").hide();
                },
                error: function() {}
            });
        } else {
            //swal("Your data is safe!");
        }
    });
});

$(document).on("click", ".reject", function() {
    var title = "";
    var text = "";
    var mesg = "";
    if (localeJquery == "es") {
        title = "¿Estás seguro";
        text = "!Quieres proceder";
    } else {
        title = "Are you sure";
        text = "You want to proceed";
    }
    swal({
        title: title,
        text: text,
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        $(".loading").show();
        if (willDelete) {
            var id = $(this).attr("data-id");
            $.ajax({
                url: rejectRoute,
                type: "POST",
                data: { id: id, _token: token },
                dataType: "json",
                success: function(response) {
                    InitTable();
                    $(".loading").hide();
                },
                error: function() {}
            });
        } else {
            //swal("Your data is safe!");
        }
    });
});
$(document).on("click", ".cancel", function() {
    var title = "";
    var text = "";
    var mesg = "";
    if (localeJquery == "es") {
        title = "¿Estás seguro";
        text = "!Quieres proceder";
    } else {
        title = "Are you sure";
        text = "You want to proceed";
    }
    swal({
        title: title,
        text: text,
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        if (willDelete) {
            var id = $(this).attr("data-id");
            $.ajax({
                url: cancelRoute,
                type: "POST",
                data: { id: id, _token: token },
                dataType: "json",
                success: function(response) {
                    InitTable();
                },
                error: function() {}
            });
        } else {
            //swal("Your data is safe!");
        }
    });
});

$(document).on("click", ".complete", function() {
    var title = "";
    var text = "";
    var mesg = "";
    if (localeJquery == "es") {
        title = "¿Estás seguro";
        text = "!Quieres proceder";
    } else {
        title = "Are you sure";
        text = "You want to proceed";
    }
    swal({
        title: title,
        text: text,
        icon: "warning",
        buttons: true,
        dangerMode: false
    }).then(willDelete => {
        $(".loading").show();
        if (willDelete) {
            var id = $(this).attr("data-id");
            $.ajax({
                url: completeRoute,
                type: "POST",
                data: { id: id, _token: token },
                dataType: "json",
                success: function(response) {
                    InitTable();
                    $(".loading").hide();
                },
                error: function() {}
            });
        } else {
            //swal("Your data is safe!");
        }
    });
});
