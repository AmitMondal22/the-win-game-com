<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span class="ion-android-close"></span>
</button>
<h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>
<div class="nk-gap-1"></div>
<form action="<?php echo base_url(); ?>login" method="post" class="nk-form text-white">
        
    <input type="hidden" name="topurl" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>">
    <div class="row vertical-gap">
        <div class="col-md-12">
            Use email and password:
            <div class="nk-gap"></div>
            <input type="email" value="" name="email" class=" form-control" placeholder="Email">
            <div class="nk-gap"></div>
            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
        </div>
        
    </div>
    <div class="nk-gap-1"></div>
    <div class="row vertical-gap">
        <div class="col-md-12">
            <input type="submit" name="login" value="Sign In" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">
        </div>
        <div class="col-md-12">
            <div class="mnt-5">
                <small><a href="<?php echo base_url(); ?>forgot-password">Forgot your password?</a></small>
            </div>
            <div class="mnt-5">
                <small><a href="<?php echo base_url(); ?>sign-up">Not a member? Sign up</a></small>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
