<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="{{ route('posts.create') }}">
                    <img src="https://image.flaticon.com/icons/svg/25/25315.svg" width="13%"/>
                </a>
            </div>

            <div class="col-sm-4 text-center">
                <a href="{{ route('index') }}">
                    <img src="https://cdn.worldvectorlogo.com/logos/instagram-1.svg" width="56%"/>
                </a>
            </div>

            <div class="col-sm-4 text-right">
                <a href="{{ route('users.show', auth::user()->id) }}">
                    <img src="https://randomuser.me/api/portraits/women/84.jpg" width="13%" style="border-radius: 50%;" />
                </a>
            </div>
        </div>
    </div>
</div>