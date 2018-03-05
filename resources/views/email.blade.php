@extends('layouts.app')

@section('content')

<div class="box">
    <form id="myform" onsubmit="emailjs.sendForm('default_service', 'hot_cutz_contact', this); return false;" method="post">
        <label>reply_to</label>
        <input type="text" name="reply_to" />
        <label>from_name</label>
        <input type="text" name="from_name" />
        <label>message_html</label>
        <input type="text" name="message_html" />
        <br><br>
        <button>
        Send
        </button>
    </form>
</div>       
        <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
        <script type="text/javascript">
           (function(){
              emailjs.init("user_wac982DMbuwf2nYGoJKLx");
           })();
        </script>


@endsection