$.ajax({
    type: 'get',
    url: '/get-sidebar-menu',
    dataType: 'json',
    success: function ({data}) {
        let len = data.length
        if (len > 0) {
            for (let i = 0; i < len; i++) {
                let sub_menu = data[i].sub_menus
                $("#sub-menu").append(
                    `<li class='menu-header small text-uppercase' id='menu-${data[i].id}'>` +
                    `<span class="menu-header-text">${data[i].menu}</span>` +
                    "</li>"
                )

                // for (let j = 0; sub_menu.length; j++) {
                //     let list =
                //         `<li class="menu-item ${sub_menu[j].url === window.location.pathname ? 'active' : ''}">` +
                //         `<a href=${sub_menu[j].url} class="menu-link">` +
                //         `<div>${sub_menu[j].sub_menu}</div>` +
                //         "</a>" +
                //         "</li>"
                //
                //     $(`#menu-${sub_menu[j].menu_id}`).append(list)
                // }
            }
        } else {
            $("#admin > ul").append("<li class='menu-item'>Tidak ada data menu</li>")
        }
    }
})
