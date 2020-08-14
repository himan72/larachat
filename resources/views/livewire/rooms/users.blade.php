<ul class="users">
    @if(!empty($users))
        @foreach($users as $user)
    <li class="person">
        <div class="user">
            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png" alt="Retail Admin">

        </div>
        <p class="name-time">
            <span class="name">{{ $user['name'] }}</span>
        </p>
    </li>
        @endforeach
    @endif
</ul>
