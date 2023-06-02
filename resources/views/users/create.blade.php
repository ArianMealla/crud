@extends('layouts.aff')

@section('title', 'Create')

@section('content')

<form action="{{ route('usuario.store')}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">CREATE USERS</h2>
    @csrf
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Name" name="name">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Country" name="cuidad">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="email_verified_at" name="email">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="password" name="contraseña">

    <button type="submit" class="my-3 w-full bg-gray-500 p-2 font-semibold
    rounded text-white hover:bg-gray-600 ">Enviar</button>

    
</form>
@endsection
