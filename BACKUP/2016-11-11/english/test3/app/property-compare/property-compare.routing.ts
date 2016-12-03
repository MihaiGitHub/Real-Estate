import { Routes, RouterModule } from '@angular/router';

import { PropertycompareComponent }    from './property-compare.component';

const propertycompareRoutes: Routes = [
  { path: 'property-compare',  component: PropertycompareComponent }
];

export const propertycompareRouting = RouterModule.forChild(propertycompareRoutes);
