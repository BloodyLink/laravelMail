# laravelMail

Para que funcione, agregar lo siguiente al archivo `.env` En este caso para google, pero puede ser cualquier otro proveedor:

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=tucorreo@gmail.com
MAIL_PASSWORD=APP_PASSWORD
MAIL_ENCRYPTION=tls
MAIL_FROM_NAME=Contacto
´´´

endpoint `/api/contacto` con el siguiente body:
```

{
"first_name": "Obi-wan",
"last_name": "Kenobi",
"email": "obiwan@kenobi.com",
"message": "Hello There!"
}

```

```
