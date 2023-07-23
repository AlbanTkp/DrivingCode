<form action="#" class="float-left header-search">
    <div class="form-group mb-0 icon-input">
        <i class="feather-search font-lg text-grey-400"></i>
        <input type="text" placeholder="Start typing to search.." class="bg-transparent border-0 lh-32 pt-2 pb-2 pl-5 pr-3 font-xsss fw-500 rounded-xl w350">
    </div>
</form>
<ul class="d-flex ml-auto right-menu-icon">
    {{-- <li>
        <a href="#"><i class="feather-settings animation-spin d-inline-block font-xl text-current"></i>
            <div class="menu-dropdown switchcolor-wrap">
                <h4 class="fw-700 font-xs mb-4">Settings</h4>
                 <h6 class="font-xssss text-grey-500 fw-700 mb-3 d-block">Choose Color Theme</h6>
                <ul>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="red" checked=""><i class="ti-check"></i>
                            <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="green"><i class="ti-check"></i>
                            <span class="circle-color bg-green" style="background-color: #4cd964;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="blue" checked=""><i class="ti-check"></i>
                            <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="pink"><i class="ti-check"></i>
                            <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="yellow"><i class="ti-check"></i>
                            <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                            <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                            <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                        </label>
                    </li>

                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                            <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                            <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                            <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                        </label>
                    </li>
                    <li class="ml-0">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                            <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                        </label>
                    </li>
                    <li class="ml-0 d-inline-block">
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                            <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                        </label>
                    </li>
                </ul>
                <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Header Background</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-menu-color"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div>
                <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Sticky Header</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-sticky"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div>
                <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Full Screen</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-screen"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div>
                <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Menu Position</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-menu"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div>
            </div>
        </a>
    </li> --}}
    <li><a href="{{route('profile')}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAB7CAMAAABjGQ9NAAAAY1BMVEUAAAD////s7Oz6+vrZ2dnz8/O0tLQvLy8WFhbw8PDo6OhFRUXS0tK+vr46OjpCQkJZWVkdHR3f3981NTWenp7Hx8eIiIhnZ2d9fX0KCgqrq6tLS0spKSleXl5wcHB3d3eUlJTLhqyJAAAEXElEQVRogc2b6bqyOgyFywwKgsikgHD/V/nhs48ehrZJGnDv9V/fp1OarBRhGclNiqENQhEG7VAkrtmfCPpPvKS+iqWudeJ9ge02gZApaMijJ7LdWgr+UU2kk9hepSG/VJFmnsJO7gB6kn8I23nC5ElPZ392dEOhp00X7c3O18dKrWu+L9sN0Wgh7sj9jmOf8KN+KTztx/bk4UStDnXWUOyMiBYi24tdkNFCjPuwcwO0EIj9hmDTZ/wlxKzDbN8IjYmuINu5GLJvYHAF2abDFuLBZTutMfsMDRxix8ZoIWImu2GwBx7b6xhsKLICbM6UC1Gy2Cbh9H8VLLb5Ln+pZbER2aFOHHbEQwubweZtNeiE69kJk50w2ObB/Ef6u0zPfjDZ+uvk77J/c85/c6+5TDbnjHlMtr4sPDSm3vV/DrDN8uO3gDwZYPMOGe8O5QV0IGED2A61Ap0rABJVKFeEnCWdKuC//3KOzNjpLbc2YIRVfUDFsJ2zITrl14JWacgGknMU29LZt2rV8B8j2LYRG2FzYbwek8AKFt9ItoVzced6Yv4WxSYbAGDZj2dbHs10ueEsfKSXa2Md7JcCfSlEZVsRPsSkWAMd7d07PRKdoRsHhH7JiEJjjFQ624rhRKKD7k1TNmyBAAkai21Flbp5EVbI/W3Ink5bId/x54JINurFWvF4Xo4+PI8xvi3GYk+yS7/q0y7s0r7yS/KIWexd9LfZtutXWfqEU6C3yibLKt+FFwJgn/z+HVCeuFW135d90D+A3EXHdvxFch6CSe+kZNFBzHzd9lez7XHTiMygxpO7qSSuo/pWU7EdeSFW6+J1LM9oK9XY5WxHHbjPvnzdbV99wysSRynb1eZn1/6RLycyyh+9tlPcShdLxkbkxJd+KJI4z/M4eTQZnM3dZUOXsLEJCk2SOmXDJqakeG1rwzU7pzwuoGnzDmLFdmmPC4hwV8fOOdYOrNtJzY6OWuu3lqn7gp0ejJ7gKjbHz8KqkrNNzQ2aShnbPu50zXU/SdjDV9BzW+DD/s6Mv5Ss2cY2Gl0XZ8XmdmUo8ldsiq/AVbBkf3PYnxX/j83r71NV/OK44+V6H32LzNWs9hq3y07Q5+nJJ7Z84yL50Sa2WN63gst7xufxnNt3ReriSdjsRjtOs5xtnjuYNQhomtcIi5zp+MC6qBAW7MPTh2VjeJkjH3zK20jDPjaDSFceyLomOhAerO2XTS143K2ycX62NfBBIw+3doWk/j5kw8kaGTLfId//nGcyt0nqt5x4zzu2aqRNK4XPtG+hoGgnqPy1PRM4lRWr9BXzvQpi9ccuGj913IN815iwOi93646SNeh6hMDbOZ7/0nLekFneaP6Sq4Ne/YN9A3s0I4da6xzHnlTQTbcU4/Pj+v4J6dXBtcJ9zITtE9kP5LuDDv/JJKFHlfs1dMlcmhL3CRWVPcmLH8NNvvPDtKJ+o2rybWpc+sXQt7fuLsLu0tZN4ZeuQT/0H8U6OSCKbLa4AAAAAElFTkSuQmCC" alt="user" class="w40 mt--1"></a></li>
    <li><a href="#" class="menu-search-icon"><i class="feather-search text-grey-900 font-lg"></i></a></li>
</ul>
