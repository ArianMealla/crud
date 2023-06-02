@extends('layouts.aff')

@section('title', 'Edit')

@section('content')

<form action="{{ route('usuario.update', $users->id)}}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">
        EDIT USERS{{ $users->id}}

    </h2>
    @csrf
    @method('put') 
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Name" name="name" value="{{$users->title}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Country" name="cuidad" value="{{$users->ciudad}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="email_verified_at" name="email" value="{{$users->email}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="password" name="contraseña" value="{{$users->contraseña}}">

    <button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold
    rounded text-white hover:bg-green-600 ">Enviar</button>

    
</form>
@endsection