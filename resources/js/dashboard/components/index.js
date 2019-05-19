import Vue from 'vue'
import Card from './Card'
import Tab from './Tab'
import Button from './Button'
import Checkbox from './Checkbox'
import ArticleContent from './Article'
import { HasError, AlertError, AlertSuccess } from 'vform'

// Components that are registered globaly.
[
    Card,
    Tab,
    Button,
    Checkbox,
    ArticleContent,
    HasError,
    AlertError,
    AlertSuccess
].forEach(Component => {
    Vue.component(Component.name, Component)
})
