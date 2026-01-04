import axios from "axios";
import { defineStore } from "pinia";
import { ref } from "vue";

interface Product {
  id: number;
  category_id: number;
  name: string;
  slug: string;
  description: string;
  price: string;
  stock: number;
  image: string;
  status: number;
  created_at: string | null;
  updated_at: string | null;
  category: {
    id: number;
    name: string;
    slug: string;
    created_at: string;
    updated_at: string;
  };
}

const useProductStore = defineStore("productStore", () => {
  const products = ref<Product[]>([]);
  let retrieveProducts = async function () {
    let response = await axios.get<Product[]>(`/api/products`);
    console.log(response, "res");
    products.value = response.data;
  };
  let productDetails = async function (productId: number) {
    let response = await axios.get(`/api/products/${productId}`);
    console.log(response, "res");
  };

  return {
    products,
    retrieveProducts,
    productDetails,
  };
});

export default useProductStore;
