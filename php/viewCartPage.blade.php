@extends('frontend.layouts.app', ['title' => 'Aussie Premier'])

@section('content')
<style>
  .form-control{
    -webkit-appearance: none;
  }
.table{
  border-collapse: collapse;
  }
.table th, td{
  /* padding: 2px 0 0 2px 0; */
  text-align: end;
}
@media screen and (max-width: 500px) {
  .table tr{
    border: 1px solid #D6D6D6;
  }
  .table th{
    display:  none;
  }
  .table td{
    display: block;
    border: none;
  }
  .table td:before{
    content: attr(data-th) " ";
    float: left;
    font-weight: bold;
  }
}
</style>
<!-- product -->
<div class="container">
  <div class="mt-4 text-h-1-4-1 d-flex justify-content-center gray-600">
    <div class="mr-2 spc-blue">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
      </svg>
      Information > 
    </div>
    <div class="mr-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
      </svg>
      Shipping >
    </div>
    <div class="mr-2">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
      </svg>
      Payment
    </div>

  </div>
  <!-- ABOUT  -->
  <div class="row mt-4 text-h-1-4-1 d-flex justify-content-center" style="padding-bottom: 100px;">
    
    <h4 class="text-center col-12 mt-4 mb-2 text-m-5-7-5 gray-800">Checkout</h4>
    @if(!Auth::guard('member')->check())
      <div class="col-12 text-center text-h-2-4-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile"
          viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
          <path
            d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
        </svg>
        Already have an account?
        <a class="spc-blue" href="{!!route('member::showLoginForm', ['r'=> 1])!!}">Login</a> to make checkout even quicker!
      </div>
    @endif
  </div>
  <div class="row d-flex justify-content-center">
      <!-- Order info -->
      <div class="col-lg-10">
        <h3 class="mt-4 mb-4 text-m-3-7-3 spc-blue">Order info</h3>
        @include('frontend.layouts.pop_msg')
        <div class="jumbotron jumbotron-fluid text-h-1-4-1">
          <div class="mb-4 pr-4 pl-4">
            
              {{-- table --}}
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Product</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col"></th>
                    <th scope="col">Sub total</th>
                  </tr>
                </thead>
                <tbody>
                  @if(count($items)==0)
                    <tr>
                      <td>Your Shopping Cart is empty</td>
                    </tr>

                  @endif
                  @foreach($items as $item)
                    <form id="form_<?=$item['rowId']?>" action="{!! route('shoppingCart::frontUpdateCart', ['rowId'=>$item['rowId']]) !!}" method="Post">
                      {!! csrf_field() !!}
                      {!! method_field('POST') !!}
                      <tr>
                        <th data-th=" " scope="row">
                          <img style="width: 50px;" src="<?= asset('assets/img/spc-product-'.$item['product_id'].'.png')?>">
                        </th>
                        @if($item['options'])
                          <td data-th="Product">{{ $item['name']." - ".$item['options'] }}</td>
                        @else
                          <td data-th="Product">{{ $item['name'] }}</td>
                        @endif
                        <td data-th="Quantity"><input type="number" name="qty" value="<?=$item['qty']?>" min="1" max="5" style="width:45px;"></td>
                        <td data-th="Unit Price"><?= moneyFormat($item['price'])?></td>
                        <td>
                          <a class="remove-product btn btn-light" href="{!! $item['remove_url'] !!}">
                            Remove
                          </a>
                          <a class="update-product btn btn-secondary" href="#" onclick="$('#form_<?=$item['rowId']?>').submit()">
                            Update
                          </a>
                        </td>
                        <td data-th="Sub total"><?= moneyFormat($item['total'])?></td>
                      </tr>
                    </form>
                  @endforeach      
                </tbody>
                <!-- <tfoot>
                  <tr>
                    <td>Shipping</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>$0.00</td>
                  </tr>
                  <tr style="font-weight:bold;">
                    <td>Grand Total</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{ moneyFormat($subTotal) }}</td>
                  </tr>
                </tfoot> -->
              </table>
              <div class="d-flex justify-content-between">
                    <div>Shipping</div>
                    <div>$0.00</div>
                  </div>
                  <div class="text-bold d-flex justify-content-between">
                    <div>Grand Total</div>
                    <div>{{ moneyFormat($subTotal) }}</div>
                  </div>
              {{-- <div>
                <p>Shipping $0.00</p>
                <p>Grand TTL: {{ moneyFormat($subTotal) }}</p>
              </div> --}}
              {{-- table end --}}

          </div>
        </div>
        <div>
          <div class="form-floating">
            <label for="order_remarks">Order Remarks: </label>
            <textarea class="form-control" placeholder="Add order remarks here" id="order_remarks" style="height: 100px"></textarea>
          </div>
        </div>

      </div>
      <!-- Order info end-->
      <div class="col-lg-10">
        <form name="form_checkout user_data_form" id="needs-validation user_data_form" action="{!! route('shoppingCart::frontUpdateMethod') !!}" method="post" id="needs-validation-confirm" onsubmit="return validate_checkout()" class="needs-validation form-border gray-600 text-h-1-4-1" novalidate>
          {{-- route('shoppingCart::frontShippingUpdate') --}}
          {!! csrf_field() !!}
          {!! method_field('POST') !!}

          {{-- personal details --}}
          <h3 class="mt-4 mb-4 text-m-3-7-3 spc-blue">Your Details</h3>
          <div class="form-group">
            <label for="form-control">Email address *</label>
              <input maxlength="80" name="member_email" type="email" class="form-control" id="form-control" aria-describedby="emailHelp" placeholder="" required value="{{ $member->email or '' }}">
            <div class="invalid-feedback">
              Please enter a email in the textarea
            </div>
          </div>
          <div class="form-group">
            <label for="InputConfirmFirstName">First Name *</label>
            <input maxlength="25" name="member_first_name" type="FirstName" class="form-control"
              id="InputConfirmFirstName" placeholder=" " required value="{{ $member->first_name_eng or '' }}">
            <div class="invalid-feedback">
              Please enter first name
            </div>
          </div>
          <div class="form-group">
            <label for="InputConfirmLastName">Last Name * </label>
            <input maxlength="25" name="member_last_name" type="LastName" class="form-control" id="InputConfirmLastName"
              placeholder=" " required value="{{ $member->last_name_eng or '' }}">
            <div class="invalid-feedback">
              Please enter last name
            </div>
          </div>
          <div class="form-group pb-4">
            <label for="member_mobile_number">Mobile Number * </label>
            <input maxlength="20" name="member_mobile_number" type="tel" class="form-control"
              id="member_mobile_number" placeholder=" " required value="{{ $member->mobile or '' }}">
            <div class="invalid-feedback">
              Please enter mobile number
            </div>
          </div>
          {{-- personal details end --}}

          {{-- billing address --}}
          <h3 class="mt-4 mb-4 text-m-3-7-3 spc-blue">Billing Address</h3>
          <div class="form-group">
            <label for="country">Country</label>
            <select name="country_id" class="form-control" id="country_id">
              @foreach($countries as $country)
                @if($member)
                  <option value="<?=$country->country_id?>" <?=$country->country_id==$member->country_id?'selected="selected"':''?>>{{ $country->label_eng }}</option>
                @endif
                  <option value="<?=$country->country_id?>">{{ $country->label_eng }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="address_city">City</label>
              <input type="text" class="form-control" name="address_city" id="address_city" class="address_city" required value="{{ $member->address_city or '' }}">
              <div class="invalid-feedback">
                Please enter a City
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="address_zip">
              <div class="invalid-feedback">
                Please enter ZIP Code
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="member_address">Address * </label>
            <input type="text" class="form-control" name="address_1" id="address_1" placeholder="" required value="{{ $member->address_1 or '' }}" maxlength="255">
            <div class="invalid-feedback">
              Please enter a valid address
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" name="address_2" id="address_2" placeholder="Apartment, studio, or floor" value="{{ $member->address_2 or '' }}" maxlength="255">
          </div>
          {{-- billing address end --}}
          <div class="mt-4 d-flex justify-content-center">
            {{-- <a  href="{!! route('shoppingCart::frontShipping') !!}" class="btn btn-primary">Continue to shipping</a>  --}}
            {{-- <a href="#" class="btn btn-primary" onclick="$('#user_data_form').submit()">Continue to shipping</a> --}}
            <button type="submit" class="btn btn-primary">
              Continue to shipping
            </button>
          </div>
        </form>
          
        
      </div>

  </div>

</div>
<!-- ABOUT  -->
<!-- product -->
<!-- <hr> --> 
  

@endsection
@section('scripts')
<script>
 
//        $("#changeOption").click(function(){
//            if($("#qty").val()<1){
//                alert("No product selected");
//            }else{
//                $("#cartForm").submit();
//            }
//        });
//        
//    });
    </script>
@endSection