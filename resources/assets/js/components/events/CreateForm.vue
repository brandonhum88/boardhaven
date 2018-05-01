<template>
    <form id="createForm" method="POST" action="/events">
        <input type="hidden" name="_token" :value="csrf">

         <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" name="name" placeholder="Event name" v-model="name">
          </div>
        </div>

        <div class="field">
          <label class="label">Description</label>
          <div class="control">
            <textarea class="textarea" placeholder="Textarea" name="description" v-model="description"></textarea>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <label class="checkbox">
              <input type="checkbox">
              I agree to the <a href="#">terms and conditions</a>
            </label>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link" type="submit">Create</button>
          </div>
          <div class="control">
            <button class="button is-text">Cancel</button>
          </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: [
            'csrf'
        ],

        data() {
            return {
                'name': '',
                'description': ''
            }
        }
    }
</script>

<style lang="sass" scoped>

</style>
