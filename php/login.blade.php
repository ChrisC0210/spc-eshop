@extends('frontend.layouts.app', ['title' => 'Aussie Premier'])

@section('content')
<style>
  #pills-signIn{
    height: 50vh;
  }

</style>
  <!-- content start -->
  <div class="container mb-4 mt-4">
    <div class="d-flex justify-content-center">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item login-btn text-r-3-4-3">
          <a class="nav-link <?=(old('r')+@$_GET['r'])>0?'active':''?>" id="pills-signIn-tab" data-toggle="pill" href="#pills-signIn" role="tab"
            aria-controls="pills-signIn" aria-selected="true">Login</a>
        </li>
        <li class="nav-item login-btn text-r-3-4-3">
          <a class="nav-link <?=(old('r')+@$_GET['r'])==0?'active':''?>" id="pills-register-tab" data-toggle="pill" href="#pills-register" role="tab"
            aria-controls="pills-register" aria-selected="false">Register</a>
        </li>

      </ul>
    </div>
    <div class="d-flex justify-content-center">
      <div class="tab-content col-lg-6 col-sm-12" id="pills-tabContent">
        <!-- Sign in start -->
        <div class=" tab-pane fade <?=(old('r')+@$_GET['r'])>0?'show active':''?>" id="pills-signIn" role="tabpanel" aria-labelledby="pills-signIn-tab">
          <form class="form-border gray-600 text-r-1-3-1" name="form_login" action="{!! route('member::login') !!}" method="post" id="needs-validation-signin" novalidate>
            {!! csrf_field() !!}
            {!! method_field('POST') !!}
            @if((old('r')+@$_GET['r'])>0)
              @include('frontend.layouts.pop_msg')
            @endif
            <div class="form-group">
              <label for="login_email">Email address *</label>
              <input name="login_email" id="login_email" type="email" class="form-control"
                aria-describedby="emailHelp" placeholder="" required value="{{ old('login_email') }}">
                <div class="invalid-feedback">
                  Please enter your email.
                </div>
            </div>
            <div class="form-group">
              <label for="login_password">Password *</label>
              <input name="login_password" type="password" class="form-control" id="login_password" placeholder="" required>
              <div class="invalid-feedback">
                  Please enter your password.
                </div>
            </div>
            <div class="form-group text-r-1-4-1">
              <a href="#" class="gray-800" data-toggle="modal" data-target="#forgotPW">Forgot Your Passwords?</a>
            </div>
            <button  name="from_url" value="index.php" type="submit" class="rounded btn-primary col-12 text-r-3-4-3">Sign in</button>
            <input type="hidden" name="r" value='1'/>
          </form>
        </div>
        <!-- Modal forgot PW -->
        <div class="modal" style="z-index: 999999;" id="forgotPW" tabindex="-1" role="dialog" aria-labelledby="forgotPWTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-r-2-4-2" id="forgotPWCenterTitle">Reset Your Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-r-1-3-1 gray-800 mb-4">
                  <h5 class="text-r-2-4-2 gray-800">Enter your email here and we will send you a password reset
                    link.</h5>
                </div>
                <form name="form_forget_pwd" method="POST" action="{!! route('member::forget_pwd_request') !!}">
                  {!! csrf_field() !!}
                  {!! method_field('POST') !!}
                  <div class="form-group">
                    <label for="txt_email">Email address</label>
                    <input name="txt_email" id="txt_email" type="email" class="form-control" id="txt_email" aria-describedby="emailHelp" placeholder=" ">
                    <div class="invalid-feedback">
                      Please enter your email.
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="submit" id="SendPassword" class="gray-btn col-10 mt-2 mb-2"  value="Send password reset email">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Sign in end -->
        <!-- Register start -->
        <div class="tab-pane fade <?=(old('r')+@$_GET['r'])==0?'show active':''?>" id="pills-register" role="tabpanel" aria-labelledby="pills-register-tab">
          <form name="form_register" action="{!! route('member::register') !!}" method="post" class="needs-validation form-border gray-600 text-r-1-3-1"  id="needs-validation" novalidate>
            {!! csrf_field() !!}
            {!! method_field('POST') !!}
            @if((old('r')+@$_GET['r'])==0)
              @include('frontend.layouts.pop_msg')
            @endif
            <div class="form-group">
              <label for="form-control">Email address *</label>
              <input maxlength="80" name="email" type="email" class="form-control" id="form-control"
                aria-describedby="emailHelp" placeholder=" " required>
                <div class="invalid-feedback">
                    Please enter a email in the textarea.
                  </div>
            </div>
            <div class="form-group">
              <label for="password">Password *</label>
              <input maxlength="25" name="password" type="password" class="form-control" id="password" placeholder=" " required>
              <div class="invalid-feedback">
                  Please enter password.
                </div>
            </div>
            <div class="form-group">
              <label for="re_password">Confirm Password *</label>
              <input maxlength="25" name="re_password" type="password" class="form-control" id="re_password" placeholder=" " required>
              <div class="invalid-feedback">
                  Please enter same password.
                </div>
            </div>
            <div>Title</div>
            <div class="form-group d-flex">
              <div class="form-check mr-4">
                <input class="form-check-input" type="radio" name="title" value="Mr." id="title" <?=( old('title')==''||old('title')=='Mr.')?'checked="checked"':'' ?>>
                <label class="form-check-label" for="title">
                  Mr.
                </label>
              </div>
              <div class="form-check mr-4">
                <input class="form-check-input" type="radio" name="title" id="title1" value="Mrs." <?= old('title')=='Mrs.'?'checked="checked"':'' ?>>
                <label class="form-check-label" for="title">
                  Mrs.
                </label>
              </div>
              <div class="form-check mr-4">
                <input class="form-check-input" type="radio" name="title" id="title2" value="Ms."  <?= old('title')=='Ms.'?'checked="checked"':'' ?>>
                <label class="form-check-label" for="title">
                  Miss
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="first_name_eng">First Name *</label>
              <input maxlength="255" name="first_name_eng" type="text" class="form-control" id="first_name_eng" placeholder=" " required value="{{ old('first_name_eng') }}">
              <div class="invalid-feedback">
                Please enter first name.
              </div>
            </div>
            <div class="form-group">
              <label for="InputConfirmLastName">Last Name * </label>
              <input maxlength="255" name="last_name_eng" type="text" class="form-control"
                id="InputConfirmLastName" placeholder=" " required value="{{ old('last_name_eng') }}">
                <div class="invalid-feedback">
                    Please enter last name.
                  </div>
            </div>
            <div class="form-group">
              <label for="mobile">Mobile Number *</label>
              <input maxlength="255" name="mobile" type="text" class="form-control"
                id="mobile" placeholder=" " value="{{ old('mobile') }}" required>
            </div>
            {{-- <div class="form-group">
              <label for="member_contact_number">Contact Number * </label>
              <input maxlength="20" name="member_contact_number" type="ContactNumber" class="form-control"
                id="member_contact_number" placeholder=" " required>
                <div class="invalid-feedback">
                    Please enter contact number.
                  </div>
            </div> --}}
            {{-- <div class="form-group">
              <label for="InputConfirmPosition">Position</label>
              <input maxlength="50" name="member_position" type="Position" class="form-control"
                id="InputConfirmPosition" placeholder=" ">
            </div> --}}
            <div class="mb-4">
              <p id="emailHelp" class="form-text text-muted">By creating your account, you agree to our
                <a href="./" class="ap-orange-600 " data-toggle="modal" data-target="#PrivacyPolicy">Privacy Policy</a>
              </p>
            </div>
            <!-- Modal Privacy Policy -->
            <div class="modal fade" style="z-index: 999999;" id="PrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-r-2-4-2" id="PrivacyPolicyCenterTitle">Privacy Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="text-r-1-3-1 gray-800">
                      <h3 class="mb-4 text-r-4-4-4 gray-700">Policy on General Returns and Exchanges of Purchased items
                      </h3>
                      <h5 class="text-r-2-4-2 gray-800">A General Returns</h5>
                      <section class="mb-4">
                        <div class="mb-1">For full refunds, the returned items must be returned within 7 days after the
                          purchase. The
                          returned items must be new and unopened with our original packaging intact. The purchaser must
                          bear all the
                          shipping costs unless the error was made at our end and the items sent to you were incorrect
                          or defective.
                        </div>
                        <div class="mb-1">Please contact us at product@aussiepremier.com and one of our Product
                          Representatives will
                          contact you and guide you through the return process.</div>
                      </section>
                      <h5 class="text-r-2-4-2 gray-800">B Exchanges</h5>
                      <section class="mb-4">
                        <div class="mb-1"> Policy for exchanges will be similar to the General Returns. You must ensure
                          that the
                          item/items to be exchanged is/are in good condition and the original packaging is intact.
                        </div>
                        <div class="mb-1">If you would like to exchange for another item, you must send the item back to
                          us and once we
                          have ensured that it is in good condition, we will then send out the replacement item to you.
                          Please note that
                          all shipping cost of the replacement item will be borne by the purchaser. All purchased items
                          can only be
                          exchanged once. Please contact us at product@aussiepremier.com for arrangement.</div>
                      </section>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="gray-btn" data-dismiss="modal">I Agree</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal Privacy Policy -->
            <!-- <button name="from_url" value="index.php" type="submit" class="gray-btn text-r-3-4-3">Register</button> -->
            <button type="submit" class="rounded btn-primary col-12 text-r-3-4-3">Register</button>
          </form>
        </div>
        <!-- Register end -->

      </div>
    </div>
  </div>
  <!-- content end -->
  
@endsection
@section('scripts')
<script>
    
window.onload = function () {
	document.getElementById("password").onchange = validatePassword;
	document.getElementById("re_password").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("re_password").value;
var pass1=document.getElementById("password").value;
if(pass1!=pass2)
	document.getElementById("re_password").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("re_password").setCustomValidity('');	 

}

    /*
$(document).ready(function(){
    $("#form_register").validate({
				rules: {		
					email: {    
                                            email: true,
						required: true
                                        },
					password: "required",
					re_password:  {
                                                                                                                           equalTo: "#password",
                                        },
					first_name_eng: "required",
					last_name_eng: "required",
					phone: "required",
					company: "required"
					
					
				},
				messages: {
					
					re_password: {
						required: "Please provide a password",
						equalTo: "Please enter the same password as above"
					}
					
				},
				errorPlacement: function(error, element) {
				  var placement = $(element).data('error');
				  if (placement) {
					$(placement).append(error)
				  } else {
					error.insertAfter(element);
				  }
				}
			});
});
*/
</script>
@endsection
