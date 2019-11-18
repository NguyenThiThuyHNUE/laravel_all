$("#add").click(function () {
    $.ajax({
        type:'post',
        url:'insertdata',
        data:{
            'name':$("input[name=name]").val(),
            'email':$("input[email=email]").val(),
            'password':$("input[password=password]").val()
        },
        success:function (data) {
            window.location.reload();
        }

    });
})
