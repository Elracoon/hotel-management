<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AirbnbWish</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-white font-bold font-xl">
            {{ __('Hôtels') }}
        </h2>
    </x-slot>

<body>
    <h1>Hôtels</h1>

    <table class="text-white font-bold font-xl m-auto  border-collapse border border-sky-500">
        <thead >
            <tr>
                <th class="border border-sky-500 px-2">ID</th>
                <th class="border border-sky-500 px-2">Nom</th>
                <th class="border border-sky-500 px-2">Adresse</th>
                <th class="border border-sky-500 px-2">Ville</th>
                <th class="border border-sky-500 px-2">Téléphone</th>
                <th class="border border-sky-500 px-2">Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($hotels as $hotel)
                <tr>
                    <td class="border border-sky-500 px-2">{{ $hotel->id }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->nom }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->adresse }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->ville }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->telephone }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->email }}</td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
</body>
</html>
</x-app-layout>
