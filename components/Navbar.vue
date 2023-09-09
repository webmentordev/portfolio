<template>
    <nav class="w-full py-3 sticky top-0 left-0 px-2">
        <div class="py-2 px-3 m-auto max-w-3xl rounded-lg flex items-center justify-between text-white bg-black bg-opacity-40 backdrop-blur-md border border-white/10">
            <nuxt-link to="/"><img src="/favicon.png" alt="Favicon" width="50"></nuxt-link>
            <ul class="flex items-center 470px:hidden">
                <nuxt-link class="transition-all hover:text-indigo-600 ml-7" to="/">Home</nuxt-link>
                <nuxt-link class="transition-all hover:text-indigo-600 ml-7" to="/projects">Projects</nuxt-link>
                <nuxt-link class="transition-all hover:text-indigo-600 ml-7" to="/#work-history">Work</nuxt-link>
                <nuxt-link class="transition-all hover:text-indigo-600 ml-7" to="/#education">Education</nuxt-link>
            </ul>
            <div class="relative hidden 470px:block">
                <Icon @click="toggle = !toggle" name="fluent:text-align-right-16-filled" class="text-white text-3xl cursor-pointer" />
                <ul v-if="toggle" class="flex flex-col absolute top-7 right-0 bg-black bg-opacity-80 backdrop-blur-md rounded-md p-4">
                    <nuxt-link class="transition-all hover:text-indigo-600 py-2 px-4 border-b border-white/10" to="/">Home</nuxt-link>
                    <nuxt-link class="transition-all hover:text-indigo-600 py-2 px-4 border-b border-white/10" to="/">Projects</nuxt-link>
                    <nuxt-link class="transition-all hover:text-indigo-600 py-2 px-4 border-b border-white/10" to="/#work-history">Work</nuxt-link>
                    <nuxt-link class="transition-all hover:text-indigo-600 py-2 px-4" to="/#education">Education</nuxt-link>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
    const toggle = ref(false)
</script>