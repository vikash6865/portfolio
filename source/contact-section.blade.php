<div class="contact-section">
    <div class="contact-illustration">
    </div>
    <div class="form-container">
        <h1 class="section-title">Contact</h1>
        <form action="#">
                <div class="field">
                    {{-- <span class="icon">@include('_svgs.user')</span> --}}
                    <input type="text" name="name"
                    class="name control" placeholder="Full Name">
                </div>
                <div class="field">
                    {{-- <span class="icon">@include('_svgs.envelope')</span> --}}
                    <input type="email " name="email" class="mail control" placeholder="Email">
                </div>
                <div class="field">
                    <textarea name="message " id="msg" class="control" rows="10" placeholder="Message"></textarea>
                </div>
                <input type="button" value="Send" name="Send" class="button">
                
            </form>
    </div>
</div>