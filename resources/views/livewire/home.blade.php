<section class="w-full">
    <div class="pt-12 px-4 m-auto max-w-3xl text-white">
        <div class="flex items-center mb-2 710px:flex-col">
            <div class="py-2 710px:px-0">
                <h1 class="text-4xl mb-3 710px:text-center">Muhammad Ahmer Tahir</h1>
                <p class="text-white/90 mb-2">Hi, my name is Muhammad Ahmer Tahir from Multan, Pakistan. I'm a Software Engineer with <b class="text-highlight">{{ $date }}+ years experience</b> in the development industry and Freelancer on <b class="text-highlight">Fiverr</b>. I'm specilized in Web Development, Linux System Administration, Amazon Web Services, Graphics Designing and a YouTube Content Creator under name of <b class="text-highlight">WebMentor</b>.</p>
                <p class="mb-2">Currently learning: <b class="text-highlight">Docker, DevOps</b></p>
                <div class="flex items-center py-1 px-2 rounded-lg bg-white/10 w-fit">
                    <img src="https://api.iconify.design/mdi:email-fast.svg?color=%234f46e5" width="30">
                    <span class="ml-3">web.earningskills@gmail.com</span>
                </div>
            </div>
        </div>
        <ul class="flex items-center flex-wrap justify-between py-5 border-b border-white/10">
            <a href="https://www.youtube.com/webmentordev" target="_blank" class="items-center flex p-3">
                <img src="https://api.iconify.design/bi:youtube.svg?color=%234f46e5" width="30px">
                <b class="ml-2 hover:text-indigo-600 transition-all">YouTube</b>
            </a>
            <a href="https://twitter.com/webmentordev" target="_blank" class="items-center flex p-3">
                <img src="https://api.iconify.design/bi:twitter.svg?color=%234f46e5" width="30px">
                <b class="ml-2 hover:text-indigo-600 transition-all">Twitter</b>
            </a>
            <a href="https://www.linkedin.com/in/muhammad-ahmer-tahir-%E2%80%8B-a00748136/" target="_blank" class="items-center flex">
                <img src="https://api.iconify.design/bi:linkedin.svg?color=%234f46e5" width="30px">
                <b class="ml-2 hover:text-indigo-600 transition-all">LinkedIn</b>
            </a>
            <a href="https://github.com/webmentordev" target="_blank" class="items-center flex p-3">
                <img src="https://api.iconify.design/bi:github.svg?color=%234f46e5" width="30px">
                <b class="ml-2 hover:text-indigo-600 transition-all">GitHub</b>
            </a>
        </ul>
        <div class="mb-2 pt-12">
            <h1 class="text-4xl mb-3 530px:text-2xl">Skills & Qualifications</h1>
            @if (count($quanlifications))
            <ul class="flex flex-col pl-5 text-white/70 530px:pl-0">
                <li class="mb-3 flex items-center"><img src="https://api.iconify.design/material-symbols:fitbit-check-small.svg?color=%2316a34a" width="35"> {{ $date }}+ years experience in web development</li>
                @foreach ($quanlifications as $quanlification)
                        <li class="mb-3 flex items-center"><img src="https://api.iconify.design/material-symbols:fitbit-check-small.svg?color=%2316a34a" width="35"> {{ $quanlification->name }}</li>
                    @endforeach
                </ul>
            @else
                @livewire('components.loading', ['text' => 'Loading qualifications...'])
            @endif
        </div>
        @if (count($works))
            <div class="mb-2 pt-12 pb-5 border-b border-white/10" id="work-history">
                <h1 class="text-4xl mb-3 530px:text-2xl">Working History</h1>
                @foreach ($works as $work)
                    <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                        <div class="flex 500px:flex-col py-12 border-b border-white/10">
                            <img src="{{ $work->image }}" width="50">
                            <div class="px-4 470px:px-0">
                                <h3 class="text-2xl">{{ $work->company }} — <b class="text-red-700">{{ $work->title }}</b></h3>
                                <p class="text-white/70">{{ $work->description }} at <b>{{ $work->company }}</b>, {{ $work->location }}</p>
                                <b class="text-sm">{{ $work->started_at }} —
                                @if ($work->end_at)
                                    {{ $work->end_at }} - 
                                @else
                                    Present - 
                                @endif {{ $work->type }}</b>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <div class="mb-2 pt-12 pb-5 border-b border-white/10">
            <h1 class="text-4xl mb-3 530px:text-2xl">Technology Stacks</h1>
            @if (count($stacks))
                <ul class="flex flex-wrap text-white/70">
                    @foreach ($stacks as $stack)
                        <span v-for="skill in tech" class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">{{ $stack->name }}</span>
                    @endforeach
                </ul>
            @else
                @livewire('components.loading', ['text' => 'Loading resourcefull stacks...'])
            @endif
        </div>
        <div class="mb-2 pt-12 pb-5 border-b border-white/10">
            <h1 class="text-4xl mb-3 530px:text-2xl">Resourceful Stack</h1>
            @if (count($techs))
                <ul class="flex flex-wrap text-white/70">
                    @foreach ($techs as $tech)
                        <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">{{ $tech->name }}</span>
                    @endforeach
                </ul>
            @else
                @livewire('components.loading', ['text' => 'Loading tech stacks...'])
            @endif
        </div>
        <div class="mb-2 pt-12 pb-5 border-b border-white/10">
            <h1 class="text-4xl mb-3 530px:text-2xl">Spoken Languages</h1>
            <ul class="flex flex-wrap text-white/70">
                <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">Urdu</span>
                <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">English</span>
                <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">German / Deutsch</span>
            </ul>
        </div>
        <div class="mb-2 pt-12 pb-5 border-b border-white/10" id="education">
            <h1 class="text-4xl mb-3 530px:text-2xl">Education History</h1>
            <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                <div class="flex 500px:flex-col py-12 border-b border-white/10">
                    <img src="https://api.iconify.design/icon-park-twotone:bachelor-cap-one.svg?color=%234f46e5" class="500px:mb-3" width="50">
                    <div class="px-4 470px:px-0">
                        <h3 class="text-2xl text-highlight">Bachelor in computer science</h3>
                        <p class="text-white/70">NFC Institute Of Engineering and Technology, Multan, Pakistan</p>
                        <b class="text-sm">2016 - 2020</b>
                    </div>
                </div>
            </div>
            <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                <div class="flex 500px:flex-col py-12 border-b border-white/10">
                    <img src="https://api.iconify.design/ic:twotone-computer.svg?color=%234f46e5" class="500px:mb-3" width="50">
                    <div class="px-4 470px:px-0">
                        <h3 class="text-2xl text-highlight">Intermediate Of Computer Science</h3>
                        <p class="text-white/70">KIPs College, Multan, Pakistan</p>
                        <b class="text-sm">2014 - 2016</b>
                    </div>
                </div>
            </div>
            <div class="border-l border-white/10 py-12 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                <div class="flex 500px:flex-col">
                    <img src="https://api.iconify.design/mdi:bus-school.svg?color=%234f46e5" class="500px:mb-3" width="50">
                    <div class="px-4 470px:px-0">
                        <h3 class="text-2xl text-highlight">Matriculation</h3>
                        <p class="text-white/70">Oxford High School, Multan, Pakistan</p>
                        <b class="text-sm">2012 - 2014</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>