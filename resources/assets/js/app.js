import Vue from 'vue'

// 追加
import router from './router'
import http from './services/http.js' // 追加

require('./bootstrap')

const app = new Vue({
	  // 追加
	  router,
	  el: '#app',
	// 追加
	  created () {
	    http.init()
	  },
	  render: h => h(require('./app.vue')),
})