import axios from "axios";
import { defineStore } from "pinia";
import { ref } from "vue";

const useProductStore = defineStore("productStore", () => {
  const products = ref([]);
  let retrieveProducts = async function () {
    let response = await axios(`/api/products`);
    console.log(response, "res");
    products.value = response.data;
  };

  return {
    products,
    retrieveProducts,
  };
});

export default useProductStore;
