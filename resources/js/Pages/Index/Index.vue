<template>

<DIV>TEST</DIV>
</template>

<script  setup>

import { ref} from 'vue'
// import {Link} from '@inertiajs/inertia-vue3'
import {Link} from '@inertiajs/vue3'

defineProps({
    message: String
})


</script>

<script >
import MainLayout from '@/Layouts/MainLayout.vue';

export default{
    layout : MainLayout
}
</script>