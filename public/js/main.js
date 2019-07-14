$(function () {
    $('.modify').click(function () {
        modifyProcess($(this).attr('id'), prompt('Enter Your Password'), $(this).attr('value'));
    })
});


function modifyProcess(id, password, token) {
    if (password == null) {
        alert('密碼不能為空');
        return false;
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': token
        },
        url: `/modify/${id}`,
        method: 'patch',
        data: {
            id: id,
            pwd: password
        },
        success: (res) => {
            console.log(res);
        },
        error: (err) => {
            console.log(err);
        }
    });
}
