import ExampleComponent from "./components/ExampleComponent";

export default {
    mode: 'history',
    linkActiveClass: 'font-weight-bold',
    routes: [
        {
            path: '/dashboard/testRoute',
            component: ExampleComponent
        },
        {
            path: '/dashboard/reservations',
            component: ExampleComponent
        },
        {
            path: '/dashboard/orders',
            component: ExampleComponent
        }
    ]
}
