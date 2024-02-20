<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-white font-bold font-xl">
            {{ __('Chambres') }}
        </h2>
    </x-slot>
<body>
<div class="flex flex-col items-center">
    <h1 class="text-white font-bold font-xl mb-5">Liste des chambres</h1>

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
                    <td class="border border-sky-500 px-2">{{ $chambre->id }}</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->prix }}</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->capacite }}</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->etage }}</td>
                    <td class="border border-sky-500 px-2">{{ $chambre->hotel_id }}</td>
                    <td class="border border-sky-500 px-2">
                        <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold px-4 my-1 w-full rounded">
                            <a href="{{ route('chambres.edit', $chambre->id) }}">Modifier</a>
                        </button>
                    
                        <form action="{{ route('chambres.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{ $chambre->id }}" name="id">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold px-4 my-1  w-full rounded ">Supprimer</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-10 rounded">
                <a href="{{ route('chambres.create') }}">Ajouter une chambre</a>
            </button>
    </div>
</body>
</html>
</x-app-layout>