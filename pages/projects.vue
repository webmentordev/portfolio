<template>
    <section class="w-full">
        <div class="pt-12 px-4 m-auto max-w-3xl text-white">
            <div class="mb-2 pt-12 pb-5 border-b border-white/10" id="work-history">
                <h1 class="text-4xl mb-3 530px:text-2xl">Projects Database</h1>
                <div v-if="projects" v-for="project in projects" class="even:border-l border-white/10 470px:py-6 px-6 470px:px-0 470px:border-none mb-6">
                    <div class="flex flex-col py-12 border-b last:border-none border-white/10">
                        <div class="flex items-center justify-between mb-3">
                            <img :src="project.image" :alt="project.title+' image'" class="h-[80px] w-[80px] rounded-full">
                            <nuxt-link :to='`${project.github}`' class="bg-indigo-600 hover:bg-black transition-all font-semibold p-3 flex items-center rounded-2xl text-white"><Icon name="bi:github" class="text-white text-xl mr-2" /> Code</nuxt-link>
                        </div>
                        <div class="px-4 470px:px-0">
                            <h3 class="text-2xl"><b class="text-red-700 text-highlight">{{ project.name }}</b></h3>
                            <p class="text-white/70 mb-2" v-html="project.body"></p>
                            <div class="flex items-center flex-wrap mb-3">
                                <Icon v-for="stack in project.stacks" :name="stack" class="text-2xl mx-2" />
                            </div>
                            <b v-if="project.is_completed" class="text-[12px] py-2 px-3 rounded-lg bg-green-600/20 border border-green-500 inline-block">Completed</b>
                            <b v-else class="text-[12px] py-2 px-3 rounded-lg bg-yellow-600/20 border border-yellow-500 inline-block">Working ...</b>
                        </div>
                    </div>
                </div>
                <p v-else>Loading...</p>
            </div>
        </div>
    </section>
</template>

<script setup>
    const projects = ref(null);
    const nuxtApp = useNuxtApp();
    const config = useRuntimeConfig();
    onMounted(async () => {
        let array = await nuxtApp.$pb.collection('projects').getFullList();
        projects.value = array.map((item) => ({
            ...item,
            image: config.public.api + '/api/files/projects/' + item.id + '/' + item.image,
            stacks: item.stacks.split(',')
        }));
    })

    onUnmounted(async () => {
        await nuxtApp.$pb.collection('projects').unsubscribe('*');
    })
</script>