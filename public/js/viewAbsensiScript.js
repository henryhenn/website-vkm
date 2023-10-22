$(document).ready(function () {
    new DataTable("#absensiTable")
})

function getAbsensiById(id) {
    $.ajax({
        url: `/get-absensi/${id}`,
        type: 'get',
        dataType: 'json',
        success: function ({data}) {
            sendToDeleteModal(data)
        }
    })
}

function sendToDeleteModal(data) {
    $("#tglAbsensi").text(data.id)
    $("#deleteForm").attr("action", () => `/data/absensi/${data.id}`)
}
