<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chambre</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-white font-bold font-xl">
            {{ __('Chambre') }}
        </h2>
    </x-slot>

<body>
<div class="flex flex-col items-center">
    <h1 class="text-white font-bold mb-5">Modification d'une chambre</h1>
    <hr>
    
    <form action="{{ route('chambres.update', $chambre->id)  }}" method="POST" class="w-full max-w-sm">
        @csrf
        @method('PUT')
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-price"> Prix : </label>
            </div>
            <div class="md:w-2/3">
                <input type="text" name="prix" id="prix" value="{{ $chambre->prix }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" >
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-capacity">Capacité : </label>
            </div>
            <div class="md:w-2/3">
                <input type="text" name="capacite" value="{{ $chambre->capacite }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-floor">Etage : </label>
            </div>
            <div class="md:w-2/3">
                <input type="text" name="etage" id="etage" value="{{ $chambre->etage }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-hotel">Hotel ID : </label>
            </div>
            <div class="md:w-2/3">
                <input type="text" name="hotel_id" id="hotel_id" value="{{ $chambre->hotel_id }}" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button type="submit" class="shadow bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"> Modifier hôtel</button>
                </div>
            </div>
    </form>

    </div>

    </body>
</html>
</x-app-layout>