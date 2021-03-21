import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import tabs from '@/components/tabs'
import signup from '@/components/signup'
import login from '@/components/login'
import map from '@/components/map'
import addcard from '@/components/addcard'
import lookCard from '@/components/lookcard'
Vue.use(Router)
/* eslint-disable */
export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
	{
	  path: '/tabs',
	  name: 'tabs',
	  component : tabs
	},
	{
	  path: '/login',
	  name: 'login',
	  component : login
	},
	{
	  path: '/signup',
	  name: 'signup',
	  component : signup
	},
	{
	  path: '/map',
	  name: 'map',
	  component : map
	},
	{
	path: '/addCard',
	name: 'addCard',
	component : addcard
		
	},
		{
	path: '/lookCard',
	name: 'lookCard',
	component: lookCard,
	props: (route) => ({cardId: route.query.cardId})	
	}
  ]
})
