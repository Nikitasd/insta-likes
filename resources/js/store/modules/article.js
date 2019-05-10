import axios from 'axios'
import * as types from '../mutation-types'

// state
export const state = {
    article: null,
}

// getters
export const getters = {
    article: state => state.article,
}

// mutations
export const mutations = {

    [types.FETCH_ARTICLE_SUCCESS] (state, { article }) {
        state.article = article
    },

}

// actions
export const actions = {

    async fetchArticle ({ commit }, slug) {

        //try, catch
        const { data } = await axios.get('/api/articles/' + slug)

        commit(types.FETCH_ARTICLE_SUCCESS, { article: data })
    },

    async fetchArticles ({ commit }, limit = 10) {

        //try, catch
        const { data } = await axios.get(`/api/articles?limit=${limit}`)

        commit(types.FETCH_ARTICLE_SUCCESS, { article: data })
    },

}
