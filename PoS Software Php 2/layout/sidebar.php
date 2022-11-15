 <!--  BEGIN MAIN CONTAINER  -->
 <div class="main-container " id="container">

     <div class="overlay"></div>
     <div class="search-overlay"></div>

     <!--  BEGIN SIDEBAR  -->
     <div class="sidebar-wrapper sidebar-theme">

         <nav id="sidebar">

             <div class="navbar-nav theme-brand flex-row  text-center">
                 <div class="nav-logo">
                     <div class="nav-item theme-logo">
                         <a href="dashboard.php">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-cpu">
                                 <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                                 <rect x="9" y="9" width="6" height="6"></rect>
                                 <line x1="9" y1="1" x2="9" y2="4"></line>
                                 <line x1="15" y1="1" x2="15" y2="4"></line>
                                 <line x1="9" y1="20" x2="9" y2="23"></line>
                                 <line x1="15" y1="20" x2="15" y2="23"></line>
                                 <line x1="20" y1="9" x2="23" y2="9"></line>
                                 <line x1="20" y1="14" x2="23" y2="14"></line>
                                 <line x1="1" y1="9" x2="4" y2="9"></line>
                                 <line x1="1" y1="14" x2="4" y2="14"></line>
                             </svg>>
                         </a>
                     </div>
                     <div class="nav-item theme-text">
                         <a href="dashboard.php" class="nav-link"> <?php echo $_SESSION['name'] ?> </a>
                     </div>
                 </div>
                 <div class="nav-item sidebar-toggle">
                     <div class="btn-toggle sidebarCollapse">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevrons-left">
                             <polyline points="11 17 6 12 11 7"></polyline>
                             <polyline points="18 17 13 12 18 7"></polyline>
                         </svg>
                     </div>
                 </div>
             </div>

             <ul class="list-unstyled menu-categories" id="accordionExample">



                 <li class="menu">
                     <a href="dashboard.php" aria-expanded="true" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-home">
                                 <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                 <polyline points="9 22 9 12 15 12 15 22"></polyline>
                             </svg>
                             <span>Dashboard</span>
                         </div>
                     </a>
                 </li>




                 <li class="menu">
                     <a href="usercontrol.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-settings">
                                 <circle cx="12" cy="12" r="3"></circle>
                                 <path
                                     d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                 </path>
                             </svg>
                             <span>User Control</span>
                         </div>
                     </a>
                 </li>
                 <li class="menu">
                     <a href="todolist.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-pen-tool">
                                 <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                 <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                 <path d="M2 2l7.586 7.586"></path>
                                 <circle cx="11" cy="11" r="2"></circle>
                             </svg>
                             <span>To do List</span>
                         </div>
                     </a>
                 </li>

                 <!-- Product info DROP DOWN MENU START -->

                 <li class="menu">
                     <a href="#home" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-layers">
                                 <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                 <polyline points="2 17 12 22 22 17"></polyline>
                                 <polyline points="2 12 12 17 22 12"></polyline>
                             </svg>
                             <span>Products Info</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="home" data-bs-parent="#accordionExample">
                         <li>
                             <a href="addproduct.php"> Add Product</a>
                         </li>
                         <li>
                             <a href="manageproduct.php"> Manage Product </a>
                         </li>
                     </ul>
                 </li>
                 <!-- DROP DOWN MENU END -->


                 <!-- Purchase info DROP DOWN MENU START -->

                 <li class="menu">
                     <a href="#pur" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-shopping-bag">
                                 <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                 <line x1="3" y1="6" x2="21" y2="6"></line>
                                 <path d="M16 10a4 4 0 0 1-8 0"></path>
                             </svg>
                             <span>Pruchase Info</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="pur" data-bs-parent="#accordionExample">
                         <li>
                             <a href="purchase.php"> Add Purchase</a>
                         </li>
                         <li>
                             <a href="purchasemanage.php"> Manage Purchase </a>
                         </li>

                     </ul>
                 </li>
                 <!-- Purchase info DROP DOWN MENU END -->


                 <!-- Sales info DROP DOWN MENU START -->

                 <li class="menu">
                     <a href="#sal" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-shopping-bag">
                                 <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                 <line x1="3" y1="6" x2="21" y2="6"></line>
                                 <path d="M16 10a4 4 0 0 1-8 0"></path>
                             </svg>
                             <span>Sales Info</span>
                         </div>
                         <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                 <polyline points="9 18 15 12 9 6"></polyline>
                             </svg>
                         </div>
                     </a>
                     <ul class="collapse submenu list-unstyled" id="sal" data-bs-parent="#accordionExample">
                         <li>
                             <a href="sales.php"> Add Sales</a>
                         </li>
                         <li>
                             <a href="salesmanage.php"> Manage Sales</a>
                         </li>

                     </ul>
                 </li>
                 <!-- Purchase info DROP DOWN MENU END -->





                 <li class="menu">
                     <a href="logout.php" aria-expanded="false" class="dropdown-toggle">
                         <div class="">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-log-out">
                                 <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                 <polyline points="16 17 21 12 16 7"></polyline>
                                 <line x1="21" y1="12" x2="9" y2="12"></line>
                             </svg>
                             <span>Logout</span>
                         </div>
                     </a>
                 </li>


             </ul>

         </nav>

     </div>
     <!--  END SIDEBAR  -->