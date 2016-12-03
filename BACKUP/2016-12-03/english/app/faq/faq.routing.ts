import { Routes, RouterModule } from '@angular/router';

import { FaqComponent }    from './faq.component';

const faqRoutes: Routes = [
  { path: 'faq',  component: FaqComponent }
];

export const faqRouting = RouterModule.forChild(faqRoutes);
