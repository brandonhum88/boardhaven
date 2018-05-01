<template>
<div id="createForm">
    <form @submit.prevent="onSubmit">
        <div class="field">
          <label class="label">Comment</label>
          <div class="control">
            <textarea class="textarea" placeholder="Your comment here..." name="body" v-model="body"></textarea>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link" type="submit">Add Comment</button>
          </div>
        </div>
    </form>
</div>

</template>

<script>
    export default {
        props: [
            'event_id'
        ],

        data() {
            return {
                body: ''
            }
        },

        methods: {
            onSubmit: function() {
                axios.post('/events/' + this.event_id + '/comments', {'body': this.body})
                    .then(response => {
                        this.$emit('newComment', this.body);
                    });
            }
        }
    }
</script>

<style lang="sass" scoped>

</style>
