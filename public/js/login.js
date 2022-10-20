var user_email = 'teste@gmail.com';
var user_password = '123';

function loginApi() {
    $.ajax({
        url: "http://localhost/PROJS/VIDEO_AULAS/AULAS/13_JWT/api/auth/login",
        method: 'POST',
        data: {'email' : user_email, 'password':user_password},
        })
        .done(function( data ) {
            localStorage.setItem('user_token_jwt', data.data);
    });
}

function getUsers(){
    $.ajax({
        url: "http://localhost/PROJS/VIDEO_AULAS/AULAS/13_JWT/api/users/getall",
        method: 'GET',
        headers: {
            'Authorization': 'Bearer ' + localStorage.getItem('user_token_jwt')
        },
        })
        .done(function( data ) {
            console.log(data);
    });
}