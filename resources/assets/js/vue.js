window.Vue = require('vue');

import VModal from 'vue-js-modal';
Vue.use(VModal);

// import Notification from './components/Notification';
import EventList from './components/EventList';
import Flash from './components/Flash';
import store from './store';

import EventCreateForm from './components/events/CreateForm';
import EventCommentCreateForm from './components/events/comments/CreateForm';

const app = new Vue({
    el: '#app',

    store,

    components: {
        EventList,
        Flash,
        EventCreateForm,
        EventCommentCreateForm
    }
});
