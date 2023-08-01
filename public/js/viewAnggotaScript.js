$(document).ready(function () {
    new DataTable("#anggotaTable")

    $("#gol_darah, #gol_darah_edit").one('click', function () {
        $.ajax({
            type: 'post',
            data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'gol_darah'},
            url: '/get-status',
            dataType: 'json',
            success: function (response) {
                appendToSelect('gol_darah', 'gol_darah_edit', response)
            }
        })
    })

    $("#status_ketuhanan, #status_ketuhanan_edit").one('click', function () {
        $.ajax({
            type: 'post',
            data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_ketuhanan'},
            url: '/get-status',
            dataType: 'json',
            success: function (response) {
                appendToSelect('status_ketuhanan', 'status_ketuhanan_edit', response)
            }
        })
    })

    $("#status_vegetarian, #status_vegetarian").one('click', function () {
        $.ajax({
            type: 'post',
            data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_vegetarian'},
            url: '/get-status',
            dataType: 'json',
            success: function (response) {
                appendToSelect('status_vegetarian', 'status_vegetarian_edit', response)
            }
        })
    })

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

function getAnggotaById(status, id) {
    $.ajax({
        url: `/get-anggota/${id}`,
        type: 'get',
        data: {id},
        dataType: 'json',
        success: function ({data}) {
            if (status === 'add') {
                sendToAddAccountModal(data)
            } else if (status === 'edit') {
                sendToEditModal(data)
            } else if (status === 'delete') {
                sendToDeleteModal(data)
            } else if (status === 'permissions') {
                sendToPermissionModal(data)
            }
        }
    })
}

function sendToAddAccountModal(data) {
    $("#anggotaModalTitle").text(data.nama_indo)
    $("#anggotaModal #user_add").text(data.user_add)
    $("#anggotaModal #user_update").text(data.user_update)
    $("#updateForm").attr("action", () => `/anggota/${data.id}`)
}

function generatePass() {
    let pass = document.querySelector('#password')
    const result = Math.random().toString(36).substring(2, 10);

    pass.value = result;
}

function sendToDeleteModal(data) {
    $("#anggotaName").text(data.nama_indo)
    $("#deleteForm").attr("action", () => `/anggota/${data.id}`)
}

function sendToEditModal(data) {
    $("#edit-anggota-form").attr('action', () => `/anggota/${data.id}`)
    $("#editFormTitle").text(data.nama_indo)
    $("#editAnggotaModal #user_add").text(data.user_add)
    $("#editAnggotaModal #user_update").text(data.user_update)
    $("#editAnggotaModal #nama_indo").val(data.nama_indo)
    $("#editAnggotaModal #nama_mandarin_hanzi").val(data.nama_mandarin_hanzi)
    $("#editAnggotaModal #nama_mandarin_pinyin").val(data.nama_mandarin_pinyin)
    $("#editAnggotaModal #tempat_lahir").val(data.tempat_lahir)
    $("#editAnggotaModal #tgl_lahir").val(data.tgl_lahir)
    $("#editAnggotaModal #alamat").val(data.alamat)
    $("#editAnggotaModal #telp").val(data.telp)
}

function sendToPermissionModal(user) {
    $("#permissionModalTitle").text(user.nama_indo)
    $("#permissionModal #user_add").text(user.user_add)
    $("#permissionModal #user_update").text(user.user_update)

    $.ajax({
        type: 'get',
        url: '/get-permissions',
        dataType: 'json',
        success: function ({data}) {
            let len = data.length
            if (len > 0) {
                for (let i = 0; i < len; i++) {
                    let permissions = data[i].permissions
                    let col =
                        "<div class='col-6 mb-3 form-check form-switch'>" +
                        `<label class='form-check-label fw-bold' for='permissions'>${data[i].sub_menu}</label>` +
                        `<div class='d-block' id=permission-checkbox${data[i].id}></div>` +
                        "</div>"
                    $("#permissions-body").append(col)

                    for (let j = 0; j < permissions.length; j++) {
                        let permission =
                            "<div class='mb-1'>" +
                            `<label for="permissions"> ${permissions[j].name}</label>` +
                            `<input type='checkbox' id="permissions" name="permissions" class='form-check-input' value=${permissions[j].name}>` +
                            "<div>"

                        $(`#permission-checkbox${permissions[j].sub_menu_id}`).append(permission)
                    }
                }
            }
        }
    })
}
