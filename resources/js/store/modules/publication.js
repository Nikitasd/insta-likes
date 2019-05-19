import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
    publication: null
}

// getters
export const getters = {
    publication: state => state.publication,
}

// mutations
export const mutations = {


    [types.GET_PUBLICATIONS_SUCCESS] (state, { publication }) {
        state.publication = publication
    },
}

// actions
export const actions = {

    async getPublications ({ commit }, limit = 12) {

        //try, catch
        const { data } = await axios.get(`/api/publications?limit=${limit}`)

       commit(types.GET_PUBLICATIONS_SUCCESS, { publication: data })
    },

}
