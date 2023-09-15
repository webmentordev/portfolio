<template>
    <section class="w-full">
        <div class="pt-12 px-4 m-auto max-w-3xl text-white">
            <div class="flex items-center mb-2 710px:flex-col">
                <img src="/photo.png" width="170" alt="Ahmer Tahir" class="rounded-full 710px:mb-4">
                <div class="py-2 px-6 710px:px-0">
                    <h1 class="text-4xl mb-3 710px:text-center">Muhammad Ahmer Tahir</h1>
                    <p class="text-white/90 mb-2">Hi, my name is Muhammad Ahmer Tahir from Multan, Pakistan. I'm a Software Engineer with <b class="text-highlight">3+ years experience</b> in the development industry and Freelancer on <b class="text-highlight">Fiverr</b>. I'm specilized in Web Development, Linux System Administration, Amazon Web Services, Graphics Designing and a YouTube Content Creator under name of <b class="text-highlight">WebMentor</b>.</p>
                    <p class="mb-2">Currently learning: <b class="text-highlight">Docker, DevOps</b></p>
                    <div class="flex items-center py-1 px-2 rounded-lg bg-white/10 w-fit">
                        <Icon name="mdi:email-fast" class="text-indigo-600 text-3xl" />
                        <span class="ml-3">web.earningskills@gmail.com</span>
                    </div>
                </div>
            </div>
            <ul class="flex items-center flex-wrap justify-between py-5 border-b border-white/10">
                <nuxt-link to="https://www.youtube.com/webmentordev" target="_blank" class="items-center flex p-3">
                    <Icon name="bi:youtube" class="text-indigo-600 text-3xl" />
                    <b class="ml-2 hover:text-indigo-600 transition-all">YouTube</b>
                </nuxt-link>
                <nuxt-link to="https://twitter.com/webmentordev" target="_blank" class="items-center flex p-3">
                    <Icon name="bi:twitter" class="text-indigo-600 text-2xl" />
                    <b class="ml-2 hover:text-indigo-600 transition-all">Twitter</b>
                </nuxt-link>
                <nuxt-link to="https://www.linkedin.com/in/muhammad-ahmer-tahir-%E2%80%8B-a00748136/" target="_blank" class="items-center flex">
                    <Icon name="bi:linkedin" class="text-indigo-600 text-2xl" />
                    <b class="ml-2 hover:text-indigo-600 transition-all">LinkedIn</b>
                </nuxt-link>
                <nuxt-link to="https://github.com/webmentordev" target="_blank" class="items-center flex p-3">
                    <Icon name="bi:github" class="text-indigo-600 text-2xl" />
                    <b class="ml-2 hover:text-indigo-600 transition-all">GitHub</b>
                </nuxt-link>
            </ul>
            <div class="mb-2 pt-12">
                <h1 class="text-4xl mb-3 530px:text-2xl">Skills & Qualifications</h1>
                <ul class="flex flex-col pl-5 text-white/70 530px:pl-0">
                    <li v-for="qualification in qualifications" class="mb-3"><Icon name="material-symbols:fitbit-check-small" class="text-green-600 text-2xl" /> {{ qualification.title }}</li>
                </ul>
            </div>
            <div class="mb-2 pt-12 pb-5 border-b border-white/10">
                <h1 class="text-4xl mb-3 530px:text-2xl">Tech Stack</h1>
                <ul class="flex flex-wrap text-white/70" v-if="tech">
                    <span v-for="skill in tech" class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">{{ skill.skill }}</span>
                </ul>
                <p v-else class="text-white/70 text-center">No Tech Stacks exist!</p>
            </div>
            <div class="mb-2 pt-12 pb-5 border-b border-white/10">
                <h1 class="text-4xl mb-3 530px:text-2xl">Useful Stack</h1>
                <ul class="flex flex-wrap text-white/70" v-if="stacks">
                    <span v-for="stack in stacks" class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">{{ stack.name }}</span>
                </ul>
                <p v-else class="text-white/70 text-center">No Useful Stacks exist!</p>
            </div>
            <div class="mb-2 pt-12 pb-5 border-b border-white/10">
                <h1 class="text-4xl mb-3 530px:text-2xl">Spoken Languages</h1>
                <ul class="flex flex-wrap text-white/70">
                    <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">Urdu</span>
                    <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">English</span>
                    <span class="py-2 text-sm hover:bg-white transition-all cursor-pointer hover:text-black font-semibold px-4 border border-white/10 w-fit rounded-lg m-1">German</span>
                </ul>
            </div>

            <div class="mb-2 pt-12 pb-5 border-b border-white/10" id="work-history">
                <h1 class="text-4xl mb-3 530px:text-2xl">Working History</h1>
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col py-12 border-b border-white/10">
                        <Icon name="skill-icons:laravel-dark" class="text-4xl mr-4 500px:mb-3" />
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl">Vital Neon — <b class="text-red-700">Laravel Developer</b></h3>
                            <p class="text-white/70">Worked as Laravel / Livewire Developer at <b>Vital Neon</b>, Ontario, Canada</p>
                            <b class="text-sm">November, 2022 — Present (Remote)</b>
                        </div>
                    </div>
                </div>
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col py-12 border-b border-white/10">
                        <Icon name="skill-icons:php-dark" class="text-4xl mr-4 500px:mb-3" />
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl">Earning Skills — <b class="text-red-700">Web Dev. Trainer</b></h3>
                            <p class="text-white/70">Worked as Web Development Trainer at <b>Earning Skills</b>, Multan, Pakistan</p>
                            <b class="text-sm">August, 2022 — November, 2022 (On-site)</b>
                        </div>
                    </div>
                </div>
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col py-12 border-b border-white/10">
                        <Icon name="skill-icons:laravel-dark" class="text-4xl mr-4 500px:mb-3" />
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl">AMZ Avenue — <b class="text-red-700">Laravel Developer</b></h3>
                            <p class="text-white/70">Worked as Laravel / Livewire Developer at <b>AMZAvenue</b>, Multan, Pakistan</p>
                            <b class="text-sm">June, 2022 — August, 2022 (On-site)</b>
                        </div>
                    </div>
                </div>
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col py-12">
                        <Icon name="skill-icons:laravel-dark" class="text-4xl mr-4 500px:mb-3" />
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl">Freshlay — <b class="text-red-700">Laravel Developer</b></h3>
                            <p class="text-white/70">Worked as Laravel / Livewire Developer at <b>Freshlay</b>, Multan, Pakistan</p>
                            <b class="text-sm">March, 2021 — April, 2022 (On-site)</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2 pt-12 pb-5 border-b border-white/10" id="education">
                <h1 class="text-4xl mb-3 530px:text-2xl">Education History</h1>
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col py-12 border-b border-white/10">
                        <Icon name="icon-park-solid:bachelor-cap-two" class="text-indigo-600 text-4xl mr-4 500px:mb-3" />
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl text-highlight">Bachelor in computer science</h3>
                            <p class="text-white/70">NFC Institute Of Engineering and Technology, Multan, Pakistan</p>
                            <b class="text-sm">2016 - 2020</b>
                        </div>
                    </div>
                </div>
                <div class="border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col py-12 border-b border-white/10">
                        <Icon name="typcn:device-laptop" class="text-indigo-600 text-4xl mr-4 500px:mb-3" />
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl text-highlight">Intermediate Of Computer Science</h3>
                            <p class="text-white/70">KIPs College, Multan, Pakistan</p>
                            <b class="text-sm">2014 - 2016</b>
                        </div>
                    </div>
                </div>
                <div class="border-l border-white/10 py-12 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex 500px:flex-col">
                        <Icon name="icon-park-outline:degree-hat" class="text-indigo-600 text-4xl mr-4 500px:mb-3" />
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
</template>

<script setup>
    const tech = ref(null);
    const qualifications = ref(null);
    const stacks = ref(null);
    const nuxtApp = useNuxtApp();

    onMounted(async () => {
        tech.value = await nuxtApp.$pb.collection('skills').getFullList();
        qualifications.value = await nuxtApp.$pb.collection('qualifications').getFullList();
        stacks.value = await nuxtApp.$pb.collection('stacks').getFullList();
        await nuxtApp.$pb.collection('skills').subscribe('*', (e) => {
            if(e.action == 'create'){
                // create, delete, update
                tech.value.push(e.record);
            }
        })
        await nuxtApp.$pb.collection('stacks').subscribe('*', (e) => {
            if(e.action == 'create'){
                stacks.value.push(e.record);
            }
        })
        await nuxtApp.$pb.collection('qualifications').subscribe('*', (e) => {
            if(e.action == 'create'){
                qualifications.value.push(e.record);
            }
        })
    })

    onUnmounted(async () => {
        await nuxtApp.$pb.collection('skills').unsubscribe('*');
        await nuxtApp.$pb.collection('stacks').unsubscribe('*');
        await nuxtApp.$pb.collection('qualifications').unsubscribe('*');
    })
</script>