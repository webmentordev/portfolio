<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-2">Add a new project</h1>
                    @session('success')
                        <p class="text-center text-green-700 bg-green-500/10 p-3">{{ $value }}</p>
                    @endsession
                    <form action="{{ route('create.project') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="w-full mb-3">
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required placeholder="Project name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-text-input id="github" class="block mt-1 w-full" type="url" name="github" :value="old('github')" required placeholder="Github url" />
                            <x-input-error :messages="$errors->get('github')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-text-input id="stacks" class="block mt-1 w-full" type="text" name="stacks" :value="old('stacks')" required placeholder="Stacks (urls with , as a gap)" />
                            <x-input-error :messages="$errors->get('stacks')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-text-input id="order" class="block mt-1 w-full" type="number" name="order" :value="old('order')" required placeholder="Order" />
                            <x-input-error :messages="$errors->get('order')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required accept="image/*" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>
                        <div class="w-full mb-3">
                            <x-textarea id="body" class="block mt-1 w-full" name="body" placeholder="Description" required>
                                {{ old('body') }}
                            </x-textarea>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>
                        <x-primary-button class="py-2">
                            {{ __('Create new project') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>