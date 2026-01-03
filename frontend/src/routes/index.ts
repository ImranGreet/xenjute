import {
  createRouter,
  createWebHistory,
  type RouteRecordRaw,
} from "vue-router";

const routes: RouteRecordRaw[] = [
  {
    path: "/",
    component: () => import("../layouts/Client.vue"),
    children: [
      {
        path: "/",
        component: () => import("../pages/Home.vue"),
      },
      {
        path:"/shop",
        component: () => import("../pages/Shop.vue"),
      },
      {
        path:"/product",
        component: () => import("../pages/ProductDetails.vue"),
      },
      {
        path:"/cart",
        component: () => import("../pages/Cart.vue"),
      },
      {
        path:"/checkout",
        component: () => import("../pages/Checkout.vue"),
      },
      {
        path:"/about",
        component: () => import("../pages/About.vue"),
      },
      {
        path:"success",
        component: () => import("../pages/Success.vue"),
      },
      {
        path:"/contact",
        component: () => import("../pages/Contact.vue"),
      }
    ],
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
