$(document).ready(function () {
    new DataTable("#absensiTable")
})

function getAbsensiByDate(date) {
    $.ajax({
        url: `/get-absensi/${date}`,
        type: 'get',
        dataType: 'json',
        success: function ({data}) {
            sendToDeleteModal(data)
        }
    })
}

function sendToDeleteModal(data) {
    $("#tglAbsensi").text(data[0].tanggal)
    $("#deleteForm").attr("action", () => `/data/absensi/${data[0].tanggal}`)
}
