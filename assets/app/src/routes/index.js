
import Startseite from '@/components/01_startseite/StartseiteMain'
import Idee from '@/components/02_idee/IdeeMain'
import UeberUns from '@/components/03_ueber-uns/UeberUnsMain'
import Positionspapier from '@/components/04_positionspapier/PapierMain'
import Aktuelles from '@/components/05_aktuelles/AktuellesMain'
import Unterzeichnen from '@/components/06_unterzeichnen/UnterzeichnenMain'

export const routes = [
    {path: '/', name: 'startseite', component: Startseite},
    {path: '/idee', name: 'idee', component: Idee},
    {path: '/ueber-uns', name: 'ueber-uns', component: UeberUns},
    {path: '/positionspapier', name: 'positionspapier', component: Positionspapier},
    {path: '/aktuelles', name: 'aktuelles', component: Aktuelles},
    {path: '/unterzeichnen', name: 'unterzeichnen', component: Unterzeichnen}
]
