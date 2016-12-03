import { Routes, RouterModule } from '@angular/router';

import { ServicesComponent }    from './services.component';

const servicesRoutes: Routes = [
  { path: 'services',  component: ServicesComponent }
];

export const servicesRouting = RouterModule.forChild(servicesRoutes);
