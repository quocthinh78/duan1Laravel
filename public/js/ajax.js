$(document).ready(function() {
    $('#search').keyup(function() {
        var str = $(this).val();
        $.ajax({
            url: 'http://localhost:8000/search',
            data: {
                q: str
            },
            error: function() {
                $('#info').html('<p>An error has occurred</p>');
            },
            success: function(data) {
                console.log(data);

                $('#txtHint')
                    .html(data)
            },

            dataType: "html",
            type: 'GET',
        });
    });
    // show hide modal
    // $("#userShow").click(function() {
    //     $("#loginUser").modal("hide");
    //     $("#registerUser").modal("show");
    // });

    // $("#showRegisterUser").click(function() {
    //     $("#loginUser").modal("show");
    //     $("#registerUser").modal("hide");
    // });
});

function userShow() {
    $(document).ready(function() {
        $.ajax({
            url: '/loginUser',
            error: function() {
                $('#info').html('<p>An error has occurred</p>');
            },
            success: function(data) {
                console.log(data);

                $('#loginUser')
                    .html(data)
            },

            dataType: "json",
            type: 'GET',
        });

        $("#loginUsers").modal("show");
    });
}

function showRegister() {
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/registerUser',
            error: function() {
                $('#info').html('<p>An error has occurred</p>');
            },
            success: function(data) {
                console.log(data);

                $('#loginUser')
                    .html(data)
            },

            dataType: "html",
            type: 'GET',
        });

        $("#loginUsers").modal("show");
    });
}

// filter top book
function showTop(int) {
    if (int) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("filterTop").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "showTopCat?q=" + int, true);
        xmlhttp.send();

        // console.log('a');
    }
}