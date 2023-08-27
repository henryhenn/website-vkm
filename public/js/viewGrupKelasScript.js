$(document).ready(function () {
    new DataTable("#grupKelasTable")

    $(document).on('click', "#add-create-row", () => {
        $('#new-row').append(
            "<div class='row'>" +
            "<div class='col mb-3' id='grup-kelas-row'>" +
            "<div class='input-group'>" +
            "<input type='text' name='grup_kelas[]' id='grup_kelas' required class='form-control' placeholder='Nama Grup Kelas'>" +
            "<button class='btn btn-danger' id='delete-create-row' type='button'>-</button>" +
            "</div>" +
            "</div>" +
            "</div>"
        )
    })

    $("body").on('click', "#delete-create-row", () => {
        $('#delete-create-row').parents('#grup-kelas-row').remove()
    })
})

function getGrupKelasById(status, id) {
    $.ajax({
        url: `/get-grup-kelas/${id}`,
        type: 'get',
        dataType: 'json',
        success: function ({data}) {
            if (status === 'edit') {
                sendToEditModal(data)
            }else if (status === 'delete') {
                sendToDeleteModal(data)
            }
        }
    })
}

function sendToDeleteModal(data) {
    $("#grupKelasName").text(data.grup_kelas)
    $("#deleteForm").attr("action", () => `/data/grup-kelas/${data.id}`)
}

function sendToEditModal(data) {
    $("#edit-grup-kelas-form").attr('action', () => `/data/grup-kelas/${data.id}`)
    $("#editFormTitle").text(data.grup_kelas)
    $("#editGrupKelasModal #user_add").text(data.user_add)
    $("#editGrupKelasModal #user_update").text(data.user_update)
    $("#edit-grup-kelas-form #grup_kelas").val(data.grup_kelas)
}
