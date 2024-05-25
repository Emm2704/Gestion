import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'


import EmployeeView from '@/views/EmployeeView.vue';
import DepartmentView from '@/views/DepartmentView.vue';
import PayrollView from '@/views/PayrollView.vue';
import BenefitView from '@/views/BenefitView.vue';
import TrainingView from '@/views/TrainingView.vue';


const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
 
  {
    path: '/',
    name: 'EmployeeView',
    component: EmployeeView
  },
  {
    path: '/departments',
    name: 'DepartmentView',
    component: DepartmentView
  },
  {
    path: '/payrolls',
    name: 'PayrollView',
    component: PayrollView
  },
  {
    path: '/benefits',
    name: 'BenefitView',
    component: BenefitView
  },
  {
    path: '/trainings',
    name: 'TrainingView',
    component: TrainingView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})



export default router
