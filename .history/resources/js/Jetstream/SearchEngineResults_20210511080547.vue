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
                <li class="py-4 flex" v-for="serp in serps" :key="serp.id">
                    <img class="h-10 w-10 rounded-full" :src="team.logo" alt="" />
                    <div class="ml-3">
                    <p class="text-sm font-medium text-gray-900">{{serp.title}}</p>
                    <p class="text-sm text-gray-500">{{ team.city }}</p>
                    </div>
                </li>
                <ul>
                    <li v-for="serp in serps" :key="serp.id">
                        {{serp.title}}
                        {{serp.description}}
                        {{serp.url}}
                        <!-- {{serp.title}} -->
                    </li>
                </ul>
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
            serps:Object,
        },
        // data:{
        //     title : 'Muazzam',
        // },
        // mounted: function () {
        //     var app = this;
        //     console.log(app.serps);
        // }

    }
</script>
