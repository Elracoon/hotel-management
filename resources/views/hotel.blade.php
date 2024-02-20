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
    <div class="flex flex-col items-center">
    <h1 class="text-white font-bold font-xl mb-5">Liste des hôtels</h1>

    <table class="text-white font-bold font-xl m-auto  border-collapse border border-sky-500 mb-5">
        <thead >
            <tr>
                <th class="border border-sky-500 px-2">ID</th>
                <th class="border border-sky-500 px-2">Nom</th>
                <th class="border border-sky-500 px-2">Adresse</th>
                <th class="border border-sky-500 px-2">Ville</th>
                <th class="border border-sky-500 px-2">Pays</th>
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
                    <td class="border border-sky-500 px-2">{{ $hotel->pays }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->telephone }}</td>
                    <td class="border border-sky-500 px-2">{{ $hotel->email }}</td>
                    <td class="border border-sky-500 px-2">
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold px-4 my-1 w-full rounded">
                            <a href="{{ route('hotels.edit', $hotel->id) }}">Modifier</a>
                        </button>
                    
                        <form action="{{ route('hotels.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{ $hotel->id }}" name="id">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 my-1  w-full rounded ">Supprimer</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-10 rounded">
                <a href="{{ route('hotels.create') }}">Ajouter un hôtel</a>
            </button>
    </div>
</body>
</html>
</x-app-layout>
