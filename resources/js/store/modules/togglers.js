const togglers = {
    namespaced: true,
    state: {
        backdrop: false,
        cartNav: false
    },
    getters: {
        backdropOpen (state) {
            return !!state.backdrop
        },
        cartOpen (state) {
            return !!state.cartNav
        }
    },
    mutations: {
        CLOSE_ALL(state) {
            state.backdrop = false,
            state.cartNav= false
        },
        TOGGLE_BACKDROP(state) {
            state.backdrop = !state.backdrop
        },
        TOGGLE_CART_NAV(state) {
            state.cartNav = !state.cartNav
        }
    },
    actions: {
        closeAll(context) {
            context.commit('CLOSE_ALL')
        },
        toggleCartNav(context) {
            context.commit('TOGGLE_CART_NAV')
            context.commit('TOGGLE_BACKDROP')
        }
    }
}

export default togglers