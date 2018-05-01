<template>
    <div class="note">
        <h1>{{message}}</h1>

        <li v-for="task in tasks">
            {{ task }}
        </li>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello World!',
                tasks: [
                    'Wash the sink',
                    'Make dinner',
                    'Go to the gym'
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
    .note {
        background: #e0e0e0;
    }
</style>
