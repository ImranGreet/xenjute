import axios from "axios";
import { defineStore } from "pinia";
import { ref } from "vue";

const useMessageStore = defineStore("messageStore", () => {
  let messages = ref([]);
  let name = ref("");
  let email = ref("");
  let phone = ref("");
  let userMessages = ref("");

  let retrieveMessages = async function () {
    let response = await axios.get(`/api/messages`);
    messages.value = response.data;
    console.log(response, "res");
  };

  let postMessage = async function () {
    let response = await axios.post(`/api/contact`, {
      name: name.value,
      email: email.value,
      phone: phone.value,
      message: userMessages.value,
    });
    console.log(response, "res");
  };

  return {
    retrieveMessages,
    postMessage,
    messages,
    name,
    email,
    phone,
    userMessages,
  };
});

export default useMessageStore;
