
import PapierBereich from '@/components/positionspapier/PapierBereich'

export const routes = [
  {path: '/positionspapier/', name: 'einleitung', component: PapierBereich, props: {bereich: 'einleitung'}},
  {path: '/positionspapier/governance', name: 'governance', component: PapierBereich, props: {bereich: 'governance'}},
  {path: '/positionspapier/betrieb', name: 'betrieb', component: PapierBereich, props: {bereich: 'betrieb'}},
  {path: '/positionspapier/lehre', name: 'lehre', component: PapierBereich, props: {bereich: 'lehre'}},
  {path: '/positionspapier/forschung', name: 'forschung', component: PapierBereich, props: {bereich: 'forschung'}}
]
