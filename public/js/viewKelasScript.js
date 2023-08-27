$(document).ready(function () {
    new DataTable("#kelasTable")

    $(document).on('click', "#add-create-row", () => {
        $('#new-row').append(
            "<div class='row'>" +
            "<div class='col mb-3' id='kelas-row'>" +
            "<div class='input-group'>" +
            "<input type='text' name='kelas[]' id='kelas' required class='form-control' placeholder='Nama Kelas'>" +
            "<button class='btn btn-danger' id='delete-create-row' type='button'>-</button>" +
            "</div>" +
            "</div>" +
            "</div>"
        )
    })

    $("body").on('click', "#delete-create-row", () => {
        $("#delete-create-row").closest('#kelas-row').remove()
    })
})

function getKelasById(status, id) {
    $.ajax({
        url: `/get-kelas/${id}`,
        type: 'get',
        dataType: 'json',
        success: function ({data}) {
            if (status === 'edit') {
                sendToEditModal(data)
            } else if (status === 'delete') {
                sendToDeleteModal(data)
            }
        }
    })
}

function sendToDeleteModal(data) {
    $("#kelasName").text(data.kelas)
    $("#deleteForm").attr("action", () => `/data/kelas/${data.id}`)
}

function sendToEditModal(data) {
    $("#edit-kelas-form").attr('action', () => `/data/kelas/${data.id}`)
    $("#editFormTitle").text(data.kelas)
    $("#edit-kelas-form #kelas").val(data.kelas)
    $("#user_add").text(data.user_add)
    $("#user_update").text(data.user_update)
    $("#edit-grup-kelas-form #kelas").val(data.kelas)
}
