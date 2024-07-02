<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update work') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl mb-2">Update a work</h1>
                    @session('success')
                        <p class="text-center text-green-700 bg-green-500/10 p-3">{{ $value }}</p>
                    @endsession
                    <form action="{{ route('update.work', $work->id) }}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="text" name="title" :value="$work->title" required placeholder="Job title" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        
                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="text" name="description" :value="$work->description" required placeholder="Job description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="url" name="image" :value="$work->image" required placeholder="Image url" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="text" name="company" :value="$work->company" required placeholder="Job company" />
                            <x-input-error :messages="$errors->get('company')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="text" name="location" :value="$work->location" required placeholder="Job location" />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-select class="block mt-1 w-full" name="type" required>
                                <option value="{{ $work->type }}" selected>{{ $work->type }}</option>
                                <option value="Full Time (On-site)">Full Time (On-site)</option>
                                <option value="Full Time (Remote)">Full Time (Remote)</option>
                                <option value="Full Time (Remote / On-site)">Full Time (Remote / On-site)</option>
                                <option value="Part Time (On-site)">Part Time (On-site)</option>
                                <option value="Part Time (Remote)">Part Time (Remote)</option>
                                <option value="Part Time (Remote / On-site)">Part Time (Remote / On-site)</option>
                            </x-select>
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="text" name="started_at" :value="$work->started_at" required placeholder="Job started (date)" />
                            <x-input-error :messages="$errors->get('started_at')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="text" name="end_at" :value="$work->end_at" placeholder="Job ended (empty for present)" />
                            <x-input-error :messages="$errors->get('end_at')" class="mt-2" />
                        </div>

                        <div class="w-full mb-3">
                            <x-text-input class="block mt-1 w-full" type="number" name="order" :value="$work->order" placeholder="Order" />
                            <x-input-error :messages="$errors->get('order')" class="mt-2" />
                        </div>
                        <x-primary-button class="py-2">
                            {{ __('Update Work') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>