<template>
    <div class="flex w-full items-center justify-center my-3">
        <div class="flex items-center">
            <Icon name="svg-spinners:180-ring-with-bg" class="text-[#37E16A] text-2xl" />
            <span class="ml-3">{{ text }}</span>
        </div>
    </div>
</template>

<script setup>
    defineProps(['text'])
</script>