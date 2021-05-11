<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div>

            <div class="mt-8 text-2xl">
                Click on one of your Search Engine Results (SERPs) pages below, or <a class="text-indigo-500" href="/newserp">create a new one</a>.
            </div>

            <div class="mt-6 text-gray-500">
                List of existing SERPS to click on...
            </div>
        </div>

    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
        props:{
            SER:Object
        },
        onmounted:
    }
</script>
