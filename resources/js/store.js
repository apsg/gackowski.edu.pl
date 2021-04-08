import BlogService from "./services/BlogService";

const store = {
    state: {
        loading: false,
        popupContent: null
    },
    mutations: {
        loading(state, value) {
            state.loading = value;
        },

        popup(state, content) {
            state.popupContent = content;
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
                        resolve()
                    });
            })
        }
    }
};

export default store;
