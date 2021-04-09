import BlogService from "./services/BlogService";

const store = {
    state: {
        loading: false,
        popupContent: []
    },
    getters: {
        current: state => {
            if (state.popupContent.length === 0)
                return null;

            return state.popupContent[state.popupContent.length - 1];
        }
    },
    mutations: {
        loading(state, value) {
            state.loading = value;
        },

        popup(state, content) {
            state.popupContent.push(content);
        },

        popupClose(state) {
            state.popupContent.pop();
        }
    },
    actions: {
        fetchBlog({commit}, slug) {
            commit('loading', true);

            return new Promise((resolve, reject) => {
                let blogService = new BlogService();

                blogService.grab(slug)
                    .then(r => {
                        commit('popup', r);
                        commit('loading', false);
                        resolve()
                    });
            })
        }
    }
};

export default store;
