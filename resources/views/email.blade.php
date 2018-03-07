@extends('layouts.app')

@section('content')

{{--  Facebook widget  --}}
<span class="fb">
    <div class="Columns">  
        <div class="column">
            <div class="box">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="500" data-height="400" 
                data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
            </div>
        </div>
    </div>
</span>
{{--  Send and email content  --}}
<span class="emial"> 
    <div class="column">
        <div class="box">
            <h4> Send an Email </h4>
                <form id="myform" onsubmit="emailjs.sendForm('default_service', 'hot_cutz_contact', this); return false;" method="post">
                    <div class="field-label is-normal is-left">
                        <label class="label">Email</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                            <input class="input" name="client_email" type="email" placeholder="Your email">
                            </p>
                        </div>
                    </div>
                    <div class="field-label is-normal">
                        <label class="label">Name</label>
                        </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                            <input class="input" name="client_name" type="text" placeholder="Your name">
                            </p>
                        </div>
                    </div>
                    <div class="field-label is-normal is left">
                        <label class="label">Message</label>
                        </div>
                    <div class="field-body">
                        <div class="field">
                            <p class="control">
                            <textarea class="textarea is-large" type="text" name="message_html" placeholder="As a valued client, I need assistance with:"></textarea>
                            </p>
                        </div>
                    </div>
                <br><br>
                    <button>
                    Send
                    </button>
                </form>
        </div>
    </div> 
</span>
{{--  Modal data  --}}
<div class="modal">
    <div class="modal-background"></div>
        <div class="modal-content">
            Thank you! Your email has been sent
        </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
        <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
        <script type="text/javascript">
           (function(){
              emailjs.init("user_wac982DMbuwf2nYGoJKLx");
           })();
        </script>

        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

@endsection