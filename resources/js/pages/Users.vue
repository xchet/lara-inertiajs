<template>
    <h1 class="text-3xl">Users</h1>

    <div style="margin-top:300px;">
        <p>the current time in {{ time }}</p>
        <Link preserve-scroll>
            Refresh
        </Link>
    </div>
</template>

<script>
    import Layout from '../Shared/Layout';

    export default {
        layout: Layout,

        props: {
            time: String
        }
    };
</script>
