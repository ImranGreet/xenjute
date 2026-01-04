import axios from "axios";
import { defineStore } from "pinia";
import { ref } from "vue";

const useCartStore = defineStore("cartStore", () => {
  let productInCart = ref<any[]>([]);
  let addProductToCart = function (productId:number) {
    productInCart.value.push(productId);
    console.log("Okay");
  };

  return {
    productInCart,
    addProductToCart,
  };
});

export default useCartStore;
