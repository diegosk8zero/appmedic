<x-layout>
<div class="bg-white p-6 rounded-lg shadow-lg w-full ">
        <h2 class="text-2xl font-bold mb-4">Editar Clínica</h2>

        <form action="{{ route('clinic.update', $clinic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nome -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Nome:</label>
                <input type="text" name="name" value="{{ old('name', $clinic->name) }}" 
                    class="w-1/2 p-2 border border-gray-300 rounded-lg">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Email:</label>
                <input type="email" name="email" value="{{ old('email', $clinic->email) }}" 
                    class="w-1/2 p-2 border border-gray-300 rounded-lg">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telefone -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Telefone:</label>
                <input type="text" name="phone" value="{{ old('phone', $clinic->phone) }}" 
                    class="w-1/2 p-2 border border-gray-300 rounded-lg">
                @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Telefone 2 -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Telefone 2:</label>
                <input type="text" name="phone_2" value="{{ old('phone_2', $clinic->phone_2) }}" 
                    class="w-1/2 p-2 border border-gray-300 rounded-lg">
                @error('phone_2')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Endereço -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Endereço:</label>
                <input type="text" name="adress" value="{{ old('adress', $clinic->adress) }}" 
                    class="w-1/2 p-2 border border-gray-300 rounded-lg">
                @error('adress')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Descrição -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold">Descrição:</label>
                <textarea name="description" class="w-full p-2 border border-gray-300 rounded-lg">{{ old('description', $clinic->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botões -->
            <div class="flex justify-end items-center pt-4 space-x-2">
                <a href="{{ route('clinic.index') }}" 
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                    Cancelar
                </a>
                <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Salvar Alterações
                </button>
            </div>

        </form>
    </div>
</x-layout>