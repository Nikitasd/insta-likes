import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
    publications: []
}

// getters
export const getters = {
    publications: state => {
        return state.publications
    }
}

// mutations
export const mutations = {

    [types.ADD_PUBLICATION] (state, publication) {
        state.publications = publication
    },
}

// actions
export const actions = {

    addPublication({commit}, form) {
        commit('ADD_PUBLICATION', res.data)
        console.log(res.data);
    }

}
