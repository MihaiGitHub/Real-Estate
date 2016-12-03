import { Routes, RouterModule } from '@angular/router';

import { AgentdetailsComponent }    from './agent-details.component';

const agentdetailsRoutes: Routes = [
  { path: 'agent-details',  component: AgentdetailsComponent }
];

export const agentdetailsRouting = RouterModule.forChild(agentdetailsRoutes);
