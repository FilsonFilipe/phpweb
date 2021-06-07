$(document).ready(function () {
    
    function grupos() {
//carregar os tweets
        $.ajax({

            url: 'grupos.php',
            method: 'post',
            success: function (data) {
                $('.grupos').html(data);
            }

        });
    }
    function messagens() {

        //carregar os tweets
        $.ajax({

            url: 'conversas.php?grupo='+$('#para').text(),
            method: 'post',
            success: function (data) {
                $('.messagens').html(data);
            }

        });
    } grupos();
    messagens();
    
   
});




