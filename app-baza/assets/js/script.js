$(function () {
    $("#wyslij").on('click', function (event) {

        event.preventDefault();
        const wartosci = $("wartosci").val();
        //console.log(event);

        $.ajax({
            type: 'POST',
            url: 'src/insert.php',
            data: {
                wartosci: wartosci
            }
        })

    });

})