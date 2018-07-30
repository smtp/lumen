<div class="sidebar-wrapper">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Creative Tim
        </a>
    </div>

    <ul class="nav">
        <li>
            <a href="{{ route('pages.deposit') }}">
                <i class="pe-7s-cash"></i>
                <p>Deposit</p>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.dashboard') }}">
                <i class="pe-7s-graph"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="{{ route('pages.user') }}">
                <i class="pe-7s-user"></i>
                <p>User Profile</p>
            </a>
        </li>
        {{--<li>--}}
            {{--<a href="table.blade.php">--}}
                {{--<i class="pe-7s-note2"></i>--}}
                {{--<p>Table List</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="typography.blade.php">--}}
                {{--<i class="pe-7s-news-paper"></i>--}}
                {{--<p>Typography</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="icons.blade.php">--}}
                {{--<i class="pe-7s-science"></i>--}}
                {{--<p>Icons</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="maps.blade.php">--}}
                {{--<i class="pe-7s-map-marker"></i>--}}
                {{--<p>Maps</p>--}}
            {{--</a>--}}
        {{--</li>--}}
        <li>
            <a href="{{ route('pages.notifications') }}">
                <i class="pe-7s-bell"></i>
                <p>Notifications</p>
            </a>
        </li>
        <li class="active-pro">
            <a href="#">
                <i class="pe-7s-rocket"></i>
                <p>Upgrade to PRO</p>
            </a>
        </li>
    </ul>
</div>
