$(document).ready(function () {
    getAllUsers();
});

function submitData() {
    let firstname = $('#firstname').val();
    let lastname = $('#lastname').val();
    let email = $('#email').val();
    let password = $('#password').val();
    if(firstname===undefined || firstname==='' || firstname.trim()==='')
    {
        toastr.info("FirstName is required");
        return ;
    }
    if(lastname===undefined || lastname==='' || lastname.trim()==='')
    {
        toastr.info("LastName is required");
        return ;
    }
    if(email===undefined || email==='' || email.trim()==='')
    {
        toastr.info("Email is required");
        return ;
    }
    if(password===undefined || password==='' || password.trim()==='')
    {
        toastr.info("Password is required");
        return ;
    }
    $.ajax({
        "url": "http://localhost:80/php-CRUD/controller/UserController.php",
        "method": "POST",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "firstName": firstname,
            "lastName": lastname,
            "email": email,
            "password": password
        }),
    }).done(function (response) {
        console.log(response);
        //alert(response.message)
        getAllUsers();
    }).error(function (error) {
        alert(error)
    });
}

function getAllUsers() {
    $.ajax({
        "url": "http://localhost:80/php-CRUD/controller/UserController.php",
        "method": "GET",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": null
    }).done(function (response) {
        console.log(response);
        let rows = [];
        response.users.forEach(currentUser => {
            let row = `<tr>
                                    <td>` + currentUser.firstName + `</td>
                                    <td>` + currentUser.lastName + `</td>
                                    <td>` + currentUser.email + `</td>
                                </tr>`
            rows.push(row)
        });
        $(".usersTable tbody").empty();//remove previous html table data
        $(".usersTable tbody").append(rows)
    }).error(function (error) {
        alert(error)
    });

}