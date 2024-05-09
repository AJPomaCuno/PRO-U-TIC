<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Solicitud</title>
</head>
<body>
    <h1>Enviar Solicitud</h1>

    <form method="POST" action="{{ route('request.submit') }}">
        @csrf

        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" id="nombre_completo" name="nombre_completo" required>

        <label for="correo_electronico">Correo Electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico" required>

        <label for="numero_celular">Número de Celular:</label>
        <input type="text" id="numero_celular" name="numero_celular" required>

        <label for="tipo_tramite">Tipo de Trámite:</label>
        <select id="tipo_tramite" name="tipo_tramite" required>
            <option value="admisión">Admisión</option>
            <option value="matriculación">Matriculación</option>
            <option value="otro">Otro</option>
        </select>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>

        <button type="submit">Enviar Solicitud</button>
    </form>
</body>
</html>
