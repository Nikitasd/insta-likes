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

    [types.UPDATE_USER] (state, { publication }) {
        state.publication = publication
    }
}

// actions
export const actions = {

    async getPublications ({ commit }, orderColumn = 'amount') {

        //try, catch
        const { data } = await axios.get(`/api/publications?order_column=${orderColumn}`)

       commit(types.GET_PUBLICATIONS_SUCCESS, { publication: data })
    },

    async getSomePublications({ commit }, limit = 4, active = 0){

        const { data } = await axios.get(`/api/publications?limit=${limit}&is_active=${active}`)

        commit(types.GET_PUBLICATIONS_SUCCESS, { publication: data })
    }
}
