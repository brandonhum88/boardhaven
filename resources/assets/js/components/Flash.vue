<template>
    <article :class="'message is-' + type" class="flash-message-fade">
      <div class="message-body">
        {{ message }}
      </div>
    </article>
</template>

<script>
    export default {
        props: [
            'type',
            'message'
        ]
    }
</script>

<style lang="css" scoped>
.flash-message-fade {
    bottom: 20px;
    position: absolute;
    right: 20px;
    z-index: 10;
    animation: flash-message-fade 5s forwards;
}

@keyframes flash-message-fade {
    0%   {opacity: 1;}
    100% {opacity: 0; display:none;}
}
</style>
