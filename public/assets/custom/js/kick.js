$( function () {
    $('#myTable').DataTable({
        columnDefs: [
            {
                targets: 5,
                data: "slug",
                data_name: "username",
                render: function ( data, type, row, meta ) {

                    return '<a data-slug="'+data+'" data-firstname="'+row[1]+'" data-lastname="'+row[2]+
                        '" data-email="'+row[3]+'" data-mobile="'+row[4]+'" data-id="'+row[0]+
                        '" class="user-link" data-toggle="modal" data-target="#userModal"'+
                        'href="/user/'+data+'" target="_self">'+data+'</a>';
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

    // CREATE USER
    $(document).on('click', '#update', function(e) {
        e.preventDefault();
        sendAjaxRequest()
    });

    $(document).on('click', '#remove', function(e) {
        // if(confirm('Are you sure?')){
        //     alert('OK')
        // }
        console.log(e.target)
    });

    // READ / UPDATE / DELETE
    $(document).on("click", ".user-link", function () {
        var userSlug = $(this).data('slug');
        $(".modal-body #username").val( userSlug );
        $(".modal-body #firstname").val( $(this).data('firstname') );
        $(".modal-body #lastname").val( $(this).data('lastname') );
        $(".modal-body #email").val( $(this).data('email') );
        $(".modal-body #mobile").val( $(this).data('mobile') );
        $(".modal-body #id").val( $(this).data('id') );

    });

});

function sendAjaxRequest() {

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
    var id = $("#id").val();
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
            id: id,
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
}