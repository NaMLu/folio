@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="animated fadeIn text-center msg msg-{{ Session::get('flash_notification.level') }}" id="flash-msg-div">

            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
@endif
