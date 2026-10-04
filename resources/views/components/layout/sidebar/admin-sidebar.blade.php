   <div class="drawer-side is-drawer-close:overflow-visible">
       <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
       <div class="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">
           <!-- Sidebar content here -->
           <ul class="menu w-full grow">
               <!-- List item -->
               <li>
                   <a href="/admin/dashboard"
                       class="is-drawer-close:tooltip is-drawer-close:tooltip-right {{ request()->is('admin/dashboard*') ? 'bg-black text-white' : '' }}"
                       data-tip="Homepage">
                       <!-- Home icon -->
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                           stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                           class="my-1.5 inline-block size-4">
                           <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                           <path
                               d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                           </path>
                       </svg>
                       <span class="is-drawer-close:hidden">Dashboard</span>
                   </a>
               </li>
               <li>
                   <a href="/admin/product-management"
                       class="is-drawer-close:tooltip is-drawer-close:tooltip-right {{ request()->is('admin/product-management*') ? 'bg-black text-white' : '' }}"
                       data-tip="Product Management">
                       <!-- Home icon -->
                       <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024">
                           <path d="M0 0h1024v1024H0z" fill="none" />
                           <path fill="currentColor" fill-rule="evenodd"
                               d="M160 144h304c8.837 0 16 7.163 16 16v304c0 8.837-7.163 16-16 16H160c-8.837 0-16-7.163-16-16V160c0-8.837 7.163-16 16-16m564.314-25.333l181.019 181.02c6.248 6.248 6.248 16.378 0 22.627l-181.02 181.019c-6.248 6.248-16.378 6.248-22.627 0l-181.019-181.02c-6.248-6.248-6.248-16.378 0-22.627l181.02-181.019c6.248-6.248 16.378-6.248 22.627 0M160 544h304c8.837 0 16 7.163 16 16v304c0 8.837-7.163 16-16 16H160c-8.837 0-16-7.163-16-16V560c0-8.837 7.163-16 16-16m400 0h304c8.837 0 16 7.163 16 16v304c0 8.837-7.163 16-16 16H560c-8.837 0-16-7.163-16-16V560c0-8.837 7.163-16 16-16" />
                       </svg>

                       <span class="is-drawer-close:hidden">Product Management</span>
                   </a>
               </li>

               <!-- List item -->
               <li>
                   <a href="/admin/product-attribute-management"
                       class="is-drawer-close:tooltip is-drawer-close:tooltip-right {{ request()->is('admin/product-attribute-management*') ? 'bg-black text-white' : '' }}"
                       data-tip="Product Attribute Management">
                       <!-- Settings icon -->
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-linejoin="round"
                           stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"
                           class="my-1.5 inline-block size-4">
                           <path d="M20 7h-9"></path>
                           <path d="M14 17H5"></path>
                           <circle cx="17" cy="17" r="3"></circle>
                           <circle cx="7" cy="7" r="3"></circle>
                       </svg>
                       <span class="is-drawer-close:hidden">Attribute Settings</span>
                   </a>
               </li>
           </ul>
       </div>
   </div>
