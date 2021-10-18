// SUSCRIPCION A NL 

1. Dar estilos al formulario

2. Hacer validación de datos del formulario 
    2.1. Nombre e email requeridos
    2.2. Aceptar la política de privacidad

3. Mandar los datos del formulario al controlador (esta en en el servidor en https://XXXXXXXXXXX.azurewebsites.net/app/enviar.php) por POST con los siguientes parámetros: oleNLForm (= true), name y email 

4. El controlador devuelve los siguientes errores
    - 200. Todo ok, la suscripción se ha hecho correctamente
    - 409. Ese email ya está registrado
    - 500. Error a la hora de hacer la inserción

5. Pintar los errores del controlador para avisar al usuario de lo que está pasando