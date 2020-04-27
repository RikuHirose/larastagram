<div class="header">
    <img src="https://image.flaticon.com/icons/svg/25/25315.svg" width="8%"/>
    <img src="https://cdn.worldvectorlogo.com/logos/instagram-1.svg" width="25%"/>
    <!-- <img src="https://image.flaticon.com/icons/svg/20/20402.svg" width="8%"/> -->

    <img src="https://randomuser.me/api/portraits/women/84.jpg" width="8%" class="profile-img dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>