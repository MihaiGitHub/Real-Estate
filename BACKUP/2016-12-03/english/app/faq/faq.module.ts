import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { FaqComponent }    from './faq.component';

import { FaqService } from './faq.service';

import { faqRouting } from './faq.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    faqRouting
  ],
  declarations: [
    FaqComponent
  ],
  providers: [
    FaqService
  ]

})
export class FaqModule {}

