$(document).ready(function(){

    $('#campo').keyup(function(){

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'proc_search.php',
                method: 'post',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#result').empty().html(data);
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
});
