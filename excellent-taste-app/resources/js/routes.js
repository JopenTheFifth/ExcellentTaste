import ReservationComponent from "./components/reservations/ReservationComponent";
import OrderComponent from "./components/orders/OrderComponent";
import NewReservationComponent from "./components/reservations/NewReservationComponent";

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
