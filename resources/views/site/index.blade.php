@extends('layouts.site.include')

@section('title', 'Início')

@section('content')

<form action="{{ route('teste.store') }}" method="post">
    <div class="space-y-12">
            <div class="border-b border-gray-800/70 pb-12">
                <h3 class="text-base font-semibold leading-7 text-gray-600">Registrar Ponto</h3>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        @csrf
                        <label for="username" class="clock text-sm font-medium leading-6 text-gray-600">Usuário:</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-200 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 sm:max-w-md">
                                <input name="user" type="text" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-600 placeholder:text-gray-400 focus: ring-0 sm: text-sm sm: leading-3" placeholder="usuário">
                            </div>
                        </div>
                        <input type="hidden" name="date" value="{{ $now }}">
                        <input type="hidden" name="time" value="{{ $now }}">
                        <button type="submit">Registrar ponto</button>
                    </div>
                </div>
            </div>
    </div>
</form>


@livewire('real-time')
@endsection
