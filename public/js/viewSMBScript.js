$(document).ready(function () {
    new DataTable("#smbTable")

    $("#status_qiu_dao, #status_qiu_dao_edit").one('click', function () {
        $.ajax({
            type: 'post',
            data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_qiu_dao'},
            url: '/get-status',
            dataType: 'json',
            success: function (response) {
                appendToSelect('status_qiu_dao', 'status_qiu_dao_edit', response)
            }
        })
    })

    function appendToSelect(status, status2, response) {
        let len = 0

        if (response['data'] != null) {
            len = response['data'].length
        }

        if (len > 0) {
            for (let i = 0; i < len; i++) {
                let id = response['data'][i].id
                let desc = response['data'][i].desc
                let options = `<option value=${id}>${desc}</option>`

                $(`#${status}, #${status2}`).append(options)
            }
            $(`#${status}, #${status2}`).append("<option value=''>-</option>")
        } else {
            let options = "<option value=''>Tidak ada data. Coba lagi.</option>"

            $(`#${status}`).append(options)
        }
    }
})

function getAnakById(status, id) {
    $.ajax({
        url: `/get-anak/${id}`,
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
    $("#anakName").text(data.nama)
    $("#deleteForm").attr("action", () => `/data/sekolah-minggu/${data.id}`)
}

function sendToEditModal(data) {
    $("#edit-anggota-form").attr('action', () => `/data/sekolah-minggu/${data.id}`)
    $("#editFormTitle").text(data.nama)
    $("#editSMBModal #user_add").text(data.user_add)
    $("#editSMBModal #user_update").text(data.user_update)
    $("#editSMBModal #created_at").text(data.created_at)
    $("#editSMBModal #nama").val(data.nama)
    $("#editSMBModal #tgl_lahir").val(data.tgl_lahir)
    $("#editSMBModal #alamat").val(data.alamat)
    $("#editSMBModal #nama_ortu").val(data.nama_ortu)
    $("#editSMBModal #kelas_cth").val(data.kelas_cth)
    $("#editSMBModal #telp").val(data.telp)
}
