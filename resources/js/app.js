import "./bootstrap";
import { createApp } from "vue";

import ContactForm from "./components/ContactForm.vue";

const app = createApp();

app.component("contact-form", ContactForm);

app.mount("#app");
