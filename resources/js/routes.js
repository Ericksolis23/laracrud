const Home = () => import ('./components/Home.vue')
const Contacto = () => import ('./components/Contacto.vue')




const Mostrar = () => import ('./components/modulos/Mostrar.vue')
const Crear = () => import ('./components/modulos/Crear.vue')
const Editar = () => import ('./components/modulos/Editar.vue')


export const routes = [
    {
        name:'home',
        path: '/',
        component:Home

    },

    {
        name:'contacto',
        path: '/contacto',
        component:Contacto

    },

    {
        name:'mostrarmodulo',
        path: '/modulo1',
        component:Mostrar 

    },

    {
        name:'crearmodulo',
        path: '/crear',
        component:Crear

    },

    {
        name:'editarmodulo',
        path: '/editar/:id',
        component:Editar  

    },
]