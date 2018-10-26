/**
 * Created by bosyuk on 08/10/2018.
 */
function displayCCModal(phone, parent_type, parent_id) {

    var url = 'index.php';
    $("#loading_modal").modal('show');

    var params = {
        entryPoint: 'call_center',
        method: 'external_dial',
        phone: phone
    };
    $.ajax({
        type: "GET",
        url: url,
        data: params,
        complete: function () {
            $("#loading_modal").modal('hide');
        },
        success: function (resp) {
            if (resp.indexOf('SUCCESS:') !== -1) {

                params.method = 'create_call';
                params.parent_type = parent_type;
                params.parent_id = parent_id;
                $.ajax({
                    type: "GET",
                    url: url,
                    data: params,
                    success: function (resp) {
                        if (resp.length > 0) {
                            window.vici.call_id = JSON.parse(resp);
                            $('#client_phone').val(params.phone);
                            $("#myModal").modal('show');
                            vici.getProduct();
                        } else {
                            alert('Произоша ошибка создания записи звонка. Попробуйте позже.');
                        }
                    },
                    error: function (error) {
                        alert('Произошла ошибка. Попробуйте позже.');
                    }
                });

                // $("#myModal").modal('show');
                // vici.getProduct();
            } else if (resp.indexOf('ERROR:') !== -1) {
                alert('Ошибка вызова: ' + resp.substr(resp.indexOf(': ') + 2));
            } else {
                alert('Произоша неизвестная ошибка. Попробуйте позже.');
            }
        },
        error: function (error) {
            alert('Произошла ошибка. Попробуйте позже.');
        }
    });


}

function displayCCModalFromCall() {
    $("#myModal").modal('show');
}