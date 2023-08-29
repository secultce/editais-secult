<template>
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h1 class="mb-0">Edital</h1>
        <p>
            {{ editalData }}
        </p>
    </div>
</template>

<script setup>
defineProps({
    editalData: Object
})
</script>

<style>

</style>