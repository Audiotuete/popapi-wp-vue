import Vue from 'vue'
import Router from 'vue-router'
import Startseite from '@/components/01_startseite'
import Idee from '@/components/02_idee'
import UeberUns from '@/components/03_ueber-uns'
import Positionspapier from '@/components/04_positionspapier'
import Aktuelles from '@/components/05_aktuelles'
import Unterzeichnen from '@/components/06_unterzeichnen'

Vue.use(Router)

export default new Router({
  // mode: 'history',
  routes: [
    {path: '/', name: 'startseite', component: Startseite},
    {path: '/idee', name: 'idee', component: Idee},
    {path: '/ueber-uns', name: 'ueber-uns', component: UeberUns},
    {path: '/positionspapier', name: 'positionspapier', component: Positionspapier},
    {path: '/aktuelles', name: 'aktuelles', component: Aktuelles},
    {path: '/unterzeichnen', name: 'unterzeichnen', component: Unterzeichnen}
  ]
})
