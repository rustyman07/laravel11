<template>
    <Link href="/">MainPage</Link> &nbsp;
    <Link href = "/test"> Show Page </Link>
    <div>{{ timer }}</div>
    <slot>
    </slot>
</template>


<script setup>
import {Link} from '@inertiajs/vue3';
import {ref} from 'vue'


const timer = ref( 0)
setInterval(()=> timer.value++,1000)
 

</script>