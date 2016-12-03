import { Routes, RouterModule } from '@angular/router';

import { PropertydetailsComponent }    from './property-details.component';
//import { HeroDetailComponent }  from './hero-detail.component';

const propertydetailsRoutes: Routes = [
  { path: 'property-details',  component: PropertydetailsComponent },
 // { path: 'hero/:id', component: HeroDetailComponent }
];

export const propertydetailsRouting = RouterModule.forChild(propertydetailsRoutes);


/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/