<x-layout>
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="container mx-auto bg-white p-6 rounded-lg shadow-lg max-w-lg">
        <h2 class="text-2xl font-bold mb-6">Detalhes da Clínica</h2>

        <!-- Exibição dos dados da clínica -->
        <div class="mb-4">
            <span class="font-semibold">Nome: </span>
            <span>{{ $clinic->name }}</span>
        </div>

        <div class="mb-4">
            <span class="font-semibold">Email: </span>
            <span>{{ $clinic->email }}</span>
        </div>

        <div class="mb-4">
            <span class="font-semibold">Telefone: </span>
            <span>{{ $clinic->phone }}</span>
        </div>

        <div class="mb-4">
            <span class="font-semibold">Telefone Secundário: </span>
            <span>{{ $clinic->phone_2 }}</span>
        </div>

        <div class="mb-4">
            <span class="font-semibold">Endereço: </span>
            <span>{{ $clinic->adress }}</span>
        </div>

        <div class="mb-4">
            <span class="font-semibold">Descrição: </span>
            <p class="mt-1">{{ $clinic->description }}</p>
        </div>

        <!-- Botões de Ação -->
        <div class="flex justify-between mt-6">
            <a href="{{ route('clinic.edit', $clinic->id) }}" 
               class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                Editar
            </a>
            <a href="{{ route('clinic.index') }}" 
               class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Voltar
            </a>
        </div>
    </div>

</x-layout>