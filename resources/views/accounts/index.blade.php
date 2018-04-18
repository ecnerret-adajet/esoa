@extends('layouts.app')

@section('content')


<div class="card rounded-0">
  <div class="card-header">
    Account Information
  </div>
  <div class="card-body p-0">

<div class="row">
    <div class="col-5 border-right">

        <div class="row pt-5 text-center">
              <div class="col">
                <div class="bg-secondary rounded-circle mx-auto" style="height: 100px; width: 100px"></div>
            </div>
        </div>

        <div class="row p-3 text-center">
            <div class="col">
            <h4 class="mb-0">Zenith Foods Corporation</h4>
            <p class="mb-0">Carmelray Indl park 1 integrity calamba, laguna</p>
            <p>customer@zenithfoodscorp.com</p>
            </div>
        </div>

    </div>
    <div class="col">

        <div class="row pt-5">
            <div class="col">
                <small class="text-muted text-uppercase mb-0 pb-0">
                    ACCOUNT NUMBER
                </small>
                <p class="pt-0 mt-0">
                    00001112312
                </p>
            </div>
            <div class="col">
                <small class="text-muted text-uppercase mb-0 pb-0">
                    ACCOUNT Status
                </small>
                <p class="text-success pt-0 mt-0">
                    Active
                </p>
            </div>
            <div class="col">
                <small class="text-muted text-uppercase mb-0 pb-0">
                    Corporate ID
                </small>
                <p class=" pt-0 mt-0">
                    SHD9123
                </p>
            </div>
            <div class="col">
                <small class="text-muted text-uppercase mb-0 pb-0">
                    DOU NUMBER
                </small>
                <p class=" pt-0 mt-0">
                    {{-- SHD9123 --}}
                </p>
            </div>
        </div><!-- end row -->

           <div class="row pt-3 pb-5">
            <div class="col">
                <small class="text-muted text-uppercase mb-0 pb-0">
                    Billing Address
                </small>
                <p class="pt-0 mt-0">
                   Carmelray Indl park 1 integrity calamba, laguna
                </p>
            </div>
            </div><!-- end row -->

    </div>
</div>
 

</div>
</div><!-- end card -->


<div class="card rounded-0 mt-3">
  <div class="card-header">
    Plan Information
  </div>
  <div class="card-body p-0">
        <div class="row">

            <div class="col border-right">
                <div class="row pt-5 pl-5 pb-5">
                        <div class="col">

                <small class="text-muted text-uppercase mb-0 pb-0">
                    Plan Type
                </small>
                <p class="pt-0 mt-0">
                   Business Plan 999
                </p>
                <br/>
    

                <small class="text-muted text-uppercase mb-0 pb-0">
                    Inclusions
                </small>
                <p class="pt-0 mt-0">
                  <ul class="pt-0 mt-0">
                      <li>Unli Call and text 499</li>
                      <li>Business Surf 299 1.5gb</li>
                  </ul>
                </p>

            </div>
                </div><!-- end row -->
            </div><!-- end col -->


            <div class="col border-right">
                 <div class="row pt-5 pl-5 pb-5">
                        <div class="col">

                <small class="text-muted text-uppercase mb-0 pb-0">
                    Cut-off date
                </small>
                <p class="pt-0 mt-0">
                   04/26/2018
                </p>
                <br/>
    

                <small class="text-muted text-uppercase mb-0 pb-0">
                    Credit Limit
                </small>
                <p class="pt-0 mt-0">
                  1,500.00
                </p>

            </div>
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col">
                      <div class="row pt-5 pl-5 pb-5">
                        <div class="col">

                <small class="text-muted text-uppercase mb-0 pb-0">
                    Billing Type
                </small>
                <p class="pt-0 mt-0">
                   Enterprise
                </p>
                <br/>
    

                <small class="text-muted text-uppercase mb-0 pb-0">
                    Billing sub type
                </small>
                <p class="pt-0 mt-0">
                  Corporate
                </p>

            </div>
                </div><!-- end row -->

            </div>


        </div>
    </div>
</div><!-- end card -->

<div class="card rounded-0 mt-3">
  <div class="card-header">
   Current Billing Summary
  </div>
  <div class="card-body p-0">
        <div class="row">

            <div class="col-5 pl-3 pr-3 pt-5 pb-5 border-right">
            
            <div class="row text-center">
                <div class="col">
                <small class="text-muted text-uppercase">
                    Your total amount to pay for 01/25/2014 to cut-off is:
                </small>
                </div>
            </div>

             <div class="row p-3">
                 <div class="col">
                <h3 class="font-weight-light">
                    P 3,914.30
                </h3>

                <small class="text-danger">
                    Due on 04/16/2018
                </small>
                 </div>
                 <div class="col">
                    <button class="btn btn-primary btn-lg btn-block">
                        <small>
                        Pay Now
                        </small>
                    </button>
                    <small class="text-primary">
                        View banks where you can pay
                    </small>
                 </div>
             </div>

            </div>

            <div class="col  pl-3 pr-3 pb-5" style="padding-top: 70px;">
                <div class="row text-center">
                    <div class="col">
                        <small class="text-muted text-uppercase">
                            Overdue amount
                        </small>
                        <h3 class="font-weight-light">
                            P 3,914.30
                        </h3>
                    </div>
                     <div class="col">
                        <small class="text-muted text-uppercase">
                            Overdue amount
                        </small>
                        <h3 class="font-weight-light">
                            P 3,914.30
                        </h3>
                    </div>
                     <div class="col">
                        <small class="text-muted text-uppercase">
                            Overdue amount
                        </small>
                        <h3 class="font-weight-light">
                            P 3,914.30
                        </h3>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div><!-- end card -->


<div class="card rounded-0 mt-3">
  <div class="card-header">
   Billing History
  </div>
  <div class="card-body p-0">
        <div class="row pt-5 pl-3 pr-3 pb-5">

            <div class="col-3">
                <small class="text-muted text-uppercase">
                    Billing Period
                </small>
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option>02/27/2018 to 03/26/2018</option>
                    <option>01/27/2018 to 12/26/2017</option>
                    <option>11/27/2017 to 10/26/2017</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <small class="text-muted text-uppercase">
                    Billing Number
                </small>
                <h4>
                    34
                </h4>
            </div>

              <div class="col">
                <small class="text-muted text-uppercase">
                   Due date
                </small>
                <h4>
                    04/16/2018
                </h4>
            </div>

            <div class="col">
                <small class="text-muted text-uppercase">
                   Total amount due
                </small>
                <h4>
                   P 3,914.30
                </h4>
            </div>

            <div class="col">
            <a class="mt-2 btn-outline-primary btn-block btn btn-lg rounded-0" target="_blank"  href="{{ asset('/pdf/soa.pdf') }}">
                    <small>
                        View PDF
                    </small>
                </a>
            </div>

         
        </div>
    </div>
</div><!-- end card -->








@endsection