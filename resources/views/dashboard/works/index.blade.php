<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Working History') }}
            </h2>
            <a href="{{ route('work.create') }}" class="font-semibold py-2 px-3 bg-black text-white">+ Add work</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[99%] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (count($works))
                        <table class="w-full">
                            <tr>
                                <th class="text-start p-2">Order</th>
                                <th class="text-start">Title</th>
                                <th class="text-start">Image</th>
                                <th class="text-start">Description</th>
                                <th class="text-start">Company</th>
                                <th class="text-start">Role</th>
                                <th class="text-start">Location</th>
                                <th class="text-start">Type</th>
                                <th class="text-start">StartedAt</th>
                                <th class="text-end">EndedAt</th>
                                <th class="text-end">Delete</th>
                                <th class="text-end">Update</th>
                                <th class="text-end p-2">Created</th>
                            </tr>
                            @foreach ($works as $item)
                                <tr class="text-sm">
                                    <td class="text-start p-2">{{ $item->order }}</td>
                                    <td class="text-start">{{ $item->title }}</td>
                                    <td class="text-start"><img src="{{ $item->image }}" width="30" alt=""></td>
                                    <td class="text-start">{{ $item->description }}</td>
                                    <td class="text-start">{{ $item->company }}</td>
                                    <td class="text-start">{{ $item->role }}</td>
                                    <td class="text-start">{{ $item->location }}</td>
                                    <td class="text-start">{{ $item->type }}</td>
                                    <td class="text-start">{{ $item->started_at }}</td>
                                    <td class="text-end">
                                        @if ($item->end_at)
                                            {{ $item->end_at }}
                                        @else
                                            Present
                                        @endif
                                    </td>
                                    <td class="text-end p-2"><form action="{{ route('work.destroy', $item->id) }}" method="post" onsubmit="return confirm('Do you really want to delete?');">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="font-semibold text-red-500">Delete</button>
                                    </form></td>
                                    <td class="text-end"><a href="{{ route('work.update', $item->id) }}" class="underline text-blue-600">Edit</a></td>
                                    <td class="text-end p-2">{{ $item->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="text-center">No project exist in the database!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>