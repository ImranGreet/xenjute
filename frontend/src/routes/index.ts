import {
  createRouter,
  createWebHistory,
  type RouteRecordRaw,
} from "vue-router";

const routes: RouteRecordRaw[] = [
  {
    path: "/",
    component: () => import("../layouts/Client.vue"),
    name: "client-layout",
    children: [
      {
        path: "/",
        name: "home",
        component: () => import("../pages/Home.vue"),
      },
      {
        path: "/shop",
        name: "shop",
        component: () => import("../pages/Shop.vue"),
      },
      {
        path: "/product",
        name: "product-details",
        component: () => import("../pages/ProductDetails.vue"),
      },
      {
        path: "/cart",
        name: "cart",
        component: () => import("../pages/Cart.vue"),
      },
      {
        path: "/checkout",
        name: "checkout",
        component: () => import("../pages/Checkout.vue"),
      },
      {
        path: "/about",
        name: "about",
        component: () => import("../pages/About.vue"),
      },
      {
        path: "success",
        name: "success",
        component: () => import("../pages/Success.vue"),
      },
      {
        path: "/contact",
        name: "contact",
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
