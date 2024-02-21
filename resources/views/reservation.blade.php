<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-white font-bold font-xl">
            {{ __('Réservation') }}
        </h2>
    </x-slot>
<body>
<div class="flex flex-col items-center">
    <h1 class="text-white font-bold font-xl mb-5">Liste des chambres disponible</h1>

    <table class="text-white font-bold font-xl m-auto  border-collapse border border-sky-500 mb-5">
        <thead >
            <tr>
                <th class="border border-sky-500 px-2">ID</th>
                <th class="border border-sky-500 px-2">Prix</th>
                <th class="border border-sky-500 px-2">Capacité</th>
                <th class="border border-sky-500 px-2">Etage</th>
                <th class="border border-sky-500 px-2">Hotel ID</th>
                <th class="border border-sky-500 px-2">Réservé</th>

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
                    <td class="border border-sky-500 px-2">{{ $chambre->is_reserved}} </td>
                    <td class="border border-sky-500 px-2">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-4 my-1 w-full rounded">
                            <a href="{{ route('reservations.create', $chambre->id) }}">Réservation</a>
                        </button>
                    @endunless
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
</html>
</x-app-layout>