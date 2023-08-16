$(document).ready(function () {
    new DataTable("#grupKelasTable")
})

function getGrupKelasById(status, id) {
    $.ajax({
        url: `/get-grup-kelas/${id}`,
        type: 'get',
        data: {id},
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
