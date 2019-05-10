const Welcome = () => import('~/pages/welcome').then(m => m.default || m)
const Login = () => import('~/pages/auth/login').then(m => m.default || m)

const NotFound = () => import('~/pages/errors/404').then(m => m.default || m)

const Home = () => import('~/pages/home').then(m => m.default || m)


const Settings = () => import('~/pages/settings/index').then(m => m.default || m)
const SettingsEdit = () => import('~/pages/settings/edit').then(m => m.default || m)


const Article = () => import('~/pages/article/index').then(m => m.default || m)
const ArticleShow = () => import('~/pages/article/show').then(m => m.default || m)

const Publication = () => import('~/pages/publication/index').then(m => m.default || m)
const PublicationAdd = () => import('~/pages/publication/add').then(m => m.default || m)
const PublicationEdit = () => import('~/pages/publication/edit').then(m => m.default || m)



export default [
    { path: '/', name: 'welcome', component: Welcome },

    { path: '/login', name: 'login', component: Login },

    { path: '/home', name: 'home', component: Home },

    { path: '/settings',
        component: Settings,
        children: [
            { path: '', redirect: { name: 'settings.profile' } },

            { path: 'edit', name: 'settings.edit', component: SettingsEdit},
        ]},

    { path: '/p/', name: 'publication', component: Publication},
    { path: '/p/edit', name: 'publication.edit', component: PublicationEdit},
    { path: '/p/add', name: 'publication.add', component: PublicationAdd },

    { path: '/a/', name: 'article', component: Article },
    { path: '/a/:slug', name: 'article.show', component: ArticleShow },

    { path: '*', component: NotFound }
]
