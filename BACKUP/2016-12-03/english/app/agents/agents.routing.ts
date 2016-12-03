import { Routes, RouterModule } from '@angular/router';

import { AgentsComponent }    from './agents.component';

const agentsRoutes: Routes = [
  { path: 'agents',  component: AgentsComponent }
];

export const agentsRouting = RouterModule.forChild(agentsRoutes);
