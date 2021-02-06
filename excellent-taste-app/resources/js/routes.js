import ReservationComponent from "./components/ReservationComponent";
import OrderComponent from "./components/OrderComponent";
import NewReservationComponent from "./components/NewReservationComponent";

export default {
    mode: 'history',
    linkActiveClass: 'font-weight-bold',
    routes: [
        {
            path: '/dashboard/reservations',
            component: ReservationComponent,
        },
        {
            path: '/dashboard/reservation/new',
            component: NewReservationComponent,
        },
        {
            path: '/dashboard/orders',
            component: OrderComponent
        },
    ]
}
