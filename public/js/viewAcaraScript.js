$(document).ready(function () {
    new DataTable("#acaraTable")
})

function getAcaraById(status, id) {
    $.ajax({
        type: 'get',
        url: `/get-acara/${id}`,
        dataType: 'json',
        success: function ({data}) {
            if (status === 'edit') {
                addToEditForm(data)
            } else if (status === 'delete') {
                addToDelteForm(data)
            }
        }
    })
}

function addToEditForm(data) {
    $("#editModalTitle").text(data.acara)
    $("#edit-form").attr('action', () => `/data/acara/${data.id}`)
    $("#edit-form #acara").val(data.acara)
    $("#edit-form #tgl").val(data.tgl)
    $("#edit-form #tempat").val(data.tempat)
}

function addToDelteForm (data) {
    $("#acaraName").text(data.acara)
    $("#deleteForm").attr('action', () => `/data/acara/${data.id}`)
}
