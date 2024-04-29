<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen Giratoria</title>
    <style>
        canvas {
            image-rendering: pixelated;
        }
    </style>
</head>
<body>
    <canvas id="rotatingImage"></canvas>

    <script>
        const canvas = document.getElementById('rotatingImage');
        const context = canvas.getContext('2d');

        const image = new Image();
        image.src = "{{ asset('assets/img/about/logo_sie.png') }}"; // Reemplaza con la ruta real a tu imagen

        const angle = 0;
        const speed = 0.02; // Ajusta la velocidad de rotación

        canvas.width = image.width;
        canvas.height = image.height;

        function draw() {
            context.clearRect(0, 0, canvas.width, canvas.height);

            context.save();
            context.translate(canvas.width / 2, canvas.height / 2);
            context.rotate(angle);
            context.drawImage(image, -image.width / 2, -image.height / 2);
            context.restore();

            angle += speed;
            requestAnimationFrame(draw);
        }

        image.onload = () => {
            draw();
        };
    </script>
</body>
</html>