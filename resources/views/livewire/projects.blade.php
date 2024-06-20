<section class="w-full">
    <div class="pt-12 px-4 m-auto max-w-3xl text-white">
        <div class="mb-2 pt-12 pb-5 border-b border-white/10" id="work-history">
            <h1 class="text-4xl mb-3 530px:text-2xl">Ahmer's Projects</h1>
            @foreach ($projects as $project)
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6 px-4">
                    <div class="flex flex-col py-12 @if (!$loop->last) border-b border-white/10 @endif">
                        <div class="flex items-center justify-between mb-3">
                            <img src="{{ asset('/storage/'. $project->image) }}" alt="{{ $project->name }}" class="h-[80px] w-[80px] rounded-full">
                            <a href="{{ $project->github }}" class="bg-indigo-600 hover:bg-black transition-all font-semibold p-3 flex items-center rounded-2xl text-white"><img src="https://api.iconify.design/bi:github.svg?color=%23ffffff" alt="GitHub logo" width="20" class="mr-2"> Code</a>
                        </div>
                        <div class="w-full">
                            <h3 class="text-2xl"><b class="text-red-700 text-highlight">{{ $project->name }}</b></h3>
                            <p class="text-white/70 mb-2">{{ $project->body }}</p>
                            <div class="flex items-center flex-wrap mb-3">
                                @php
                                    $array = explode(",", $project->stacks);
                                @endphp
                                @foreach ($array as $stack)
                                    <img src="{{ $stack }}" class="mr-2" width="30">
                                @endforeach
                            </div>
                            @if ($project->is_completed)
                                <b class="text-[12px] py-2 px-3 rounded-lg bg-green-600/20 border border-green-500 inline-block">Completed</b>
                            @else
                                <b class="text-[12px] py-2 px-3 rounded-lg bg-yellow-600/20 border border-yellow-500 inline-block">In Progress</b>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
            <Loading v-else text="Loading projects..." />
        </div>
    </div>
</section>