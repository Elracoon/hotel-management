<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-800">
<div class="flex flex-col items-center">

@auth
<h1 class="text-white font-bold font-xl mb-5">Liste des chambres disponible</h1>

<table class="text-white font-bold font-xl m-auto  border-collapse border border-sky-500 mb-5">
    <thead >
        <tr>
            <th class="border border-sky-500 px-2">ID</th>
            <th class="border border-sky-500 px-2">Nom</th>
            <th class="border border-sky-500 px-2">Prénom</th>
            <th class="border border-sky-500 px-2">Email</th>
            <th class="border border-sky-500 px-2">Téléphone</th>
            <th class="border border-sky-500 px-2">Arrivé</th>
            <th class="border border-sky-500 px-2">Départ</th>

        </tr>
    </thead>
    <tbody>
    @foreach ($reservations as $reservation)
            <tr>
                <td class="border border-sky-500 px-2">{{ $reservation->id }} </td>
                <td class="border border-sky-500 px-2">{{ $reservation->nom }} </td>
                <td class="border border-sky-500 px-2">{{ $reservation->prenom }} </td>
                <td class="border border-sky-500 px-2">{{ $reservation->email }} </td>
                <td class="border border-sky-500 px-2">{{ $reservation->telephone }} </td>
                <td class="border border-sky-500 px-2">{{ $reservation->date_debut }} </td>
                <td class="border border-sky-500 px-2">{{ $reservation->date_fin }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endauth

@if (!Auth::check())
    <h1 class="text-white font-bold font-xl mb-5">Liste des chambres disponible</h1>

    <table class="text-white font-bold font-xl m-auto  border-collapse border border-sky-500 mb-5">
        <thead >
            <tr>
                <th class="border border-sky-500 px-2">ID</th>
                <th class="border border-sky-500 px-2">Prix</th>
                <th class="border border-sky-500 px-2">Capacité</th>
                <th class="border border-sky-500 px-2">Etage</th>
                <th class="border border-sky-500 px-2">Hotel ID</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($chambres as $chambre)
                <tr>
                @unless ($chambre->is_reserved)
                    <td class="border border-sky-500 px-2">{{ $chambre->id }} </td>
                    <td class="border border-sky-500 px-2">{{ $chambre->prix }} €</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->capacite }} personnes</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->etage }}ème étage</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->hotel_id }}</td>
                    <td class="border border-sky-500 px-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 my-1 w-full rounded">
                            <a href="{{ route('reservations.create', $chambre->id) }}">Réservation</a>
                        </button>
                    @endunless
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</div>
    
</body>
</html>