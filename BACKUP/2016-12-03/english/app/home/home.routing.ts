import { Routes, RouterModule } from '@angular/router';

import { HomeComponent }    from './home.component';
//import { HeroDetailComponent }  from './hero-detail.component';

const homeRoutes: Routes = [
  { path: 'home',  component: HomeComponent },
 // { path: 'hero/:id', component: HeroDetailComponent }
];

export const homeRouting = RouterModule.forChild(homeRoutes);


/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/