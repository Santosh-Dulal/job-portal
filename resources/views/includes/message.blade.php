 @if(Session::has('flash_message_error'))

        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!!Session('flash_message_error')!!}</strong>

        </div>
        @endif
         @if(Session::has('flash_message_success'))

        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong> {!!Session('flash_message_success')!!}</strong>

        </div>
        @endif
