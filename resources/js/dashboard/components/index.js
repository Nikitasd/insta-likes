import Vue from 'vue'
import Card from './Card'
import Tab from './Tab'
import Child from './Child'
import Button from './Button'
import Checkbox from './Checkbox'
import ArticleMy from './Article'
import { HasError, AlertError, AlertSuccess } from 'vform'

// Components that are registered globaly.
[
    Card,
    Tab,
    Child,
    Button,
    Checkbox,
    ArticleMy,
    HasError,
    AlertError,
    AlertSuccess
].forEach(Component => {
    Vue.component(Component.name, Component)
})
