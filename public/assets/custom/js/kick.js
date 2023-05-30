$( function () {
    $('#myTable').DataTable({
        columnDefs: [
            {
                targets: 5,
                data: "slug",
                data_name: "username",
                render: function ( data, type, row, meta ) {
                    return '<a href="/user/'+data+'" target="_self">'+data+'</a>';
                }
            },
            {
                target: 6,
                visible: false,
                searchable: false,
            }
        ],
        responsive: true
    });
    $('[data-toggle="popover"]').popover();

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    var csrf

    $(document).on('click', '#add', function(e) {
        e.preventDefault();

        if(!$("#form")[0].checkValidity()) {
            $("#form")[0].reportValidity();
            return false
        }

        $('#form input').removeClass('is-invalid')

        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var username = $("#username").val();
        var mobile = $("#mobile").val();
        var password = $("#password").val();
        var email = $("#email").val();
        if ( typeof csrf == 'undefined'){
            csrf = $('#form input[name=csrf_test_name]').val();
        }

        $.ajax({
            url: "/users/create",
            type: "post",
            dataType: "json",
            data: {
                firstname: firstname,
                lastname: lastname,
                username: username,
                mobile: mobile,
                email: email,
                password: password,
                csrf_test_name: csrf,
            },
            success: function(data) {

                let reasons = '';
                for (let key in data.reasons) {
                    $('#'+key).addClass('is-invalid')
                    reasons += data.reasons[key]+"<br>"
                }

                if (data.status == "success") {
                    $('#myModal').modal('hide')
                    $("#form")[0].reset()
                    toastr.success("Data saved!")
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                } else {
                    toastr.error(reasons)
                    csrf = data.csrf
                }
            }
        });
    });
});