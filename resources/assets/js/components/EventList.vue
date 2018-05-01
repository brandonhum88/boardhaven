<template>
    <div class="container">
        <transition-group name="staggered-fade" tag="ul" :css="false" @before-enter="beforeEnter" @enter="enter" @leave="leave">
            <li v-for="(event, index) in events" :key="event.id" :data-index="index">
                <a :href="'/events/' + event.id">{{ event.name }} - {{ event.description }} {{ createdForHumans(event.created_at) }}</a>
            </li>
        </transition-group>
    </div>
</template>

<script>
// import {mapstate, mapGetters, mapActions} from 'vuex';
export default {
    data() {
        return {
            events: []
        }
    },

    created: function() {
        axios.get('/events/api/list' + window.location.search)
            .then(response => {
                this.events = response.data;
            });
    },

    methods: {
        createdForHumans: function(date) {
            return moment(date).fromNow();
        },
        // ...mapActions({
        //     fetchProducts: 'fetchProducts'
            // addProductToCart: 'addProductToCart'
        // }),
        beforeEnter: function(el) {
            el.style.opacity = 0;
            el.style.heignt = 0;
        },
        enter: function(el, done) {
            var delay = el.dataset.index * 500;
            setTimeout(function() {
                Velocity(
                    el,
                    { opacity: 1, height: '1.6em'},
                    { complete: done }
                );
            }, delay);
        },
        leave: function(el, done) {
            var delay = el.dataset.index * 500;
            setTimeout(function() {
                Velocity(
                    el,
                    { opacity: 0, height: 0 },
                    { complete: done }
                );
            }, delay);
        }
    },

    // computed: {
    //     ...mapstate({
    //         products: state => state.products
    //     }),

    //     ...mapGetters({
    //         productIsInStock: 'productIsInStock'
    //     })
    // }
}
</script>

<style lang="css" scoped>
.events-enter-active, .events-leave-active {
    transition: all 1s;
}

.events-enter, .events-leave-to {
    opacity: 0;
    transform: translateX(-100px);
}
</style>
