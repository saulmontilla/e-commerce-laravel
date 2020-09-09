require('./bootstrap');
import Vue from 'vue'
import store from './store'
import QuantityInput from './components/cart/QuantityInput'

const app = new Vue({
    store,
    el: '#app',
    components: {
        QuantityInput
    },
    data () {
        return {
            message: 'El mensaje de vue'
        }
    },
    computed: {
        backdropOpen () {
            return this.$store.getters['togglers/backdropOpen']
        },
        cartOpen () {
            return this.$store.getters['togglers/cartOpen']
        }
    },
    methods: {
        closeTogglers() {
            this.$store.dispatch('togglers/closeAll')
        },
        toggleCartNav() {
            this.$store.dispatch('togglers/toggleCartNav')
        }
    }
})
