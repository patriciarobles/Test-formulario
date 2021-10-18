

$(document).ready(function(){
    $('#NLForm').on('submit', function(e){
        //Stop the form from submitting itself to the server.
        e.preventDefault();
        var email = $('#email').val();
        var name = $('#name').val();
        $.ajax({
            type: "POST",
            url: 'https://ole-ejercicio-form.azurewebsites.net/app/enviar.php',
            data: "oleNLForm="+"true"+"&name=" + name + "&email=" + email,
            success: function(data){
                alert(data);
            },
            error: function(request, status, error) { 
                alert("Status: " + request.statusText); 
            }
        });
    });
});
