<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des formations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2><Marquee>Liste des Formations</Marquee></h2>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Formation</th>
                <th scope="col">Durée</th>
                <th scope="col">Niveau</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $formation)
                <tr>
                    <td>{{ $formation->nom_formation }}</td>
                    <td>{{ $formation->durée_formation }}</td>
                    <td>{{ $formation->niveau_formation }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


