<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Search Engine Results
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <SERPS />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import SERPS from '@/Jetstream/SearchEngineResults'

    export default {
        components: {
            AppLayout,
            SERPS,
        },
        props:{
            serps:Object,
        },
        created:func
    }
</script>
