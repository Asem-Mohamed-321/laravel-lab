
<div class="navbar bg-base-100 shadow-sm">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl ml-15">Laravel</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1 mx-15">
                <li><a href="/posts">Home</a></li>
                <li>
                    <details>
                    <summary>Posts</summary>
                    <ul class="bg-base-100 rounded-t-none p-2 w-30">
                        <li @class(['bg-blue-500' =>  request()->is('posts')])><a href="/posts">Posts List</a></li>
                        <li @class(['bg-blue-500' =>  request()->is('posts/create')])><a href="/posts/create">New Post</a></li>
                    </ul>
                    </details>
                </li>
                </ul>
            </div>
        </div>
