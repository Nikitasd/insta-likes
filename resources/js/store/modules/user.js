import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
    user: null,
}

// getters
export const getters = {
    user: state => state.user,
}

// mutations
export const mutations = {

    [types.FETCH_ARTICLE_SUCCESS] (state, { user }) {
        state.user = user
    },

}

// actions
export const actions = {

    async fetchUser ({ commit }, id) {

        //try, catch
        const { data } = await axios.get('/api/users/' + id)

        commit(types.FETCH_ARTICLE_SUCCESS, { user: data })
    },

}
