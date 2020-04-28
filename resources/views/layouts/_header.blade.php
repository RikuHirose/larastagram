<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('posts.create') }}">
                    <img src="https://image.flaticon.com/icons/svg/25/25315.svg" width="10%"/>
                </a>
            </div>

            <div class="col-sm-4">
                <a href="{{ route('index') }}">
                    <img src="https://cdn.worldvectorlogo.com/logos/instagram-1.svg" width="70%"/>
                </a>
            </div>

            <div class="col-sm-4 text-right">
                <a href="{{ route('users.show', auth::user()->id) }}">
                    <img src="https://randomuser.me/api/portraits/women/84.jpg" width="10%"/>
                </a>

                <!-- <img src="https://randomuser.me/api/portraits/women/84.jpg" width="25%" class="profile-img dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>