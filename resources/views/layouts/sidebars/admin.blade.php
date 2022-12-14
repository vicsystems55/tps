<div class="pt-5 px-2">
    <h6 class="font-weight-bold">
        Admin Dashboard
    </h6>
</div>

<ul class="metismenu mt-3" id="menu">
    <!-- <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class='bx bx-home-circle'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
        
    </li> -->
    <!-- <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-category"></i>
            </div>
            <div class="menu-title">Application</div>
        </a>
        <ul>
            <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
            </li>
            <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
            </li>
            <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
            </li>
            <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
            </li>
            <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
            </li>
            <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
            </li>
            <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
            </li>
        </ul>
    </li>
    <li class="menu-label">UI Elements</li> -->
    <li class="">
        <a href="{{route('admin')}}">
            <div class="parent-icon"><i class='bx bx-desktop'></i>
            </div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    <li class="menu-label">Management</li>
    
    {{-- <li>
        <a href="">
            <div class="parent-icon"><i class='bx bx-cog'></i>
            </div>
            <div class="menu-title">Programmes</div>
           </a>
    </li> --}}

    <li>
        <a href="{{route('admin.contracts')}}">
            <div class="parent-icon"><i class='bx bx-cog'></i>
            </div>
            <div class="menu-title">Contracts</div>
           </a>
    </li>

    <li>
        <a href="{{route('admin.lots')}}">
            <div class="parent-icon"><i class='bx bx-book'></i>
            </div>
            <div class="menu-title">Lots</div>
        </a>
    </li>

    <li>
        <a href="{{route('admin.sites')}}">
            <div class="parent-icon"><i class='bx bx-book'></i>
            </div>
            <div class="menu-title">Sites</div>
        </a>
    </li>

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-category"></i>
            </div>
            <div class="menu-title">Progress Report</div>
        </a>
        <ul>
            <li> <a href="{{route('admin.contractReports')}}"><i class="bx bx-right-arrow-alt"></i>Contract Report</a>
            </li>
            <li> <a href="{{route('admin.valuations')}}"><i class="bx bx-right-arrow-alt"></i>Lot Report</a>
            </li>
          
        </ul>
    </li>
  

    <li>
        <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="bx bx-category"></i>
            </div>
            <div class="menu-title">Reports</div>
        </a>
        <ul>
            <li> <a href="{{route('admin.valuations')}}"><i class="bx bx-right-arrow-alt"></i>Progress Report</a>
            </li>
            <li> <a href="{{route('admin.valuations')}}"><i class="bx bx-right-arrow-alt"></i>Valuation</a>
            </li>
               {{-- <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
            </li>
         <li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
            </li>
            <li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
            </li>
            <li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
            </li>
            <li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
            </li>
            <li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
            </li> --}}
        </ul>
    </li>


  

   

    <li class="menu-label">Correspondence</li>
    <li>
        <a href="{{route('admin.notifications')}}">
            <div class="parent-icon"><i class='bx bx-bell'></i>
            </div>
            <div class="menu-title">Notifications</div>
        </a>
    </li>

    <li class="menu-label">Settings</li>

    <li>
        <a href="">
            <div class="parent-icon"><i class='bx bx-user'></i>
            </div>
            <div class="menu-title">Profile</div>
        </a>
    </li>



    <li>
        <a href="#">
            <div class="parent-icon">
            </div>
            <div class="menu-title">

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Switch to Admin</label>
                </div>


            </div>
        </a>
    </li>

   
    
    
</ul>