$(document).ready(function () {
    new DataTable("#qiuDaoTable")
})

function getQiuDaoById(status, id) {
    $.ajax({
        type: 'get',
        url: `/get-qiudao/${id}`,
        dataType: 'json',
        success: function ({data}) {
            if (status === 'edit') {
                addToEditForm(data)
            } else if (status === 'delete') {
                addToDeleteForm(data)
            }
        }
    })
}

function addToEditForm(data) {
    $("#editModalTitle").text(data.nama_indo)
    $("#editQiuDaoModal #user_add").text(data.user_add)
    $("#editQiuDaoModal #user_update").text(data.user_update)
    $("#edit-form").attr('action', () => `/data/qiudao/${data.id}`)
    $("#edit-form #no_urut").val(data.no_urut)
    $("#edit-form #nama_indo").val(data.nama_indo)
    $("#edit-form #nama_mandarin_hanzi").val(data.nama_mandarin_hanzi)
    $("#edit-form #nama_mandarin_pinyin").val(data.nama_mandarin_pinyin)
    $("#edit-form #tgl_indo").val(data.tgl_indo)
    $("#edit-form #alamat").val(data.alamat)
    $("#edit-form #telp").val(data.telp)
    $("#edit-form #pengajak").val(data.pengajak)
    $("#edit-form #penanggung").val(data.penanggung)
    $("#edit-form #pandita").val(data.pandita)
    $("#edit-form #amal").val(data.amal)
}

function addToDeleteForm (data) {
    $("#qiuDaoName").text(data.nama_indo)
    $("#deleteForm").attr('action', () => `/data/qiudao/${data.id}`)
}
