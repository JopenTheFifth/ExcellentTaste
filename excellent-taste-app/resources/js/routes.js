import ExampleComponent from "./components/ExampleComponent";

export default{

    mode: 'history',
    linkActiveClass: 'font-weight-bold',
    routes: [
        {
            path: '/testRoute',
            component: ExampleComponent
        }
    ]
}
