
import PapierBereich from '@/components/positionspapier/PapierBereich'

export const routes = [
  {path: '/', name: 'einleitung', component: PapierBereich, props: {bereich: 'einleitung'}},
  {path: '/governance', name: 'governance', component: PapierBereich, props: {bereich: 'governance'}},
  {path: '/betrieb', name: 'betrieb', component: PapierBereich, props: {bereich: 'betrieb'}},
  {path: '/lehre', name: 'lehre', component: PapierBereich, props: {bereich: 'lehre'}},
  {path: '/forschung', name: 'forschung', component: PapierBereich, props: {bereich: 'forschung'}}
]
