window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
window.path = document.querySelector("meta[name='path']").getAttribute("content");