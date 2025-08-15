# Consumo de la autenticación desde el frontend

Para iniciar sesión en la API se debe enviar una petición `POST` a `/api/login` con los campos `name` y `password` en el cuerpo JSON:

```javascript
fetch('https://tu-dominio.com/api/login', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({ name: usuario, password: clave })
}).then(r => r.json()).then(datos => {
  if (datos.token) {
    // Guardar el token para próximas solicitudes
    localStorage.setItem('token', datos.token);

    // Información adicional devuelta por el backend
    console.log(datos.user);      // Usuario autenticado
    console.log(datos.cliente);   // Datos del cliente en tb_cliente
    console.log(datos.garantias); // Garantías asociadas
    console.log(datos.cuentas);   // Cuentas y movimientos
  }
});
```

Las rutas protegidas requieren el token en el encabezado `Authorization` como portador (`Bearer`). Ejemplo:

```javascript
const token = localStorage.getItem('token');
fetch('https://tu-dominio.com/api/datos', {
  headers: { Authorization: `Bearer ${token}` }
});
```

Al cerrar sesión basta con eliminar el token almacenado en el cliente.
