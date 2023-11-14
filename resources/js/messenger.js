import { createApp } from 'vue';
import Messenger from './components/Messenger.vue';

// Create a Vue 3 app instance
const app = createApp({});

// Register the Messenger component
app.component('Messenger', Messenger);

// Mount the app instance to the element with the ID 'chat-app'
app.mount('#chat-app');
