<!--begin::Form-->
    <div class="row" id="offersText">
        <div class="form-group form-group-last col-sm-12">
            <div class="row">
                <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleSelectl">Shope Type</label>
                    <select class="form-control form-control-lg" id="exampleSelectl" name="shop_type">
                        <option value="{{old('shop_type')??$order->shop_type}}">{{$order->shop_type??"Select Shop Type"}}</option>
                        <option value="supermarket">supermarket</option>
                        <option value="restaurant">restaurant</option>
                    </select>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label for="exampleSelectl">Customer Name</label>
                    <select class="form-control form-control-lg" id="exampleSelectl" name="customer_id">
                        <option value="{{old('customer_id')??$order->customer_id}}">{{$order->customer->name??"Select Customer Name"}}</option>
                        @foreach($customers as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6 col-sm-12">
                    <label>Date<label class="text-danger">*</label> </label>
                    <input class="form-control" type="date" name="date"value="{{old('date')??$order->date}}">
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <label>Time<label class="text-danger">*</label></label>
                    <div class="form-group row">
                            <div class="input-group timepicker">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la la-exclamation-circle"></i>
                                    </span>
                                </div>
                                <input class="form-control" id="kt_timepicker_2" readonly="readonly" name="time" value="{{old('time')??$order->time}}" type="text">
                            </div>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-6 m-auto">
                <label>Amount<label class="text-danger">*</label>  </label>
                <input class="form-control" type="number"  name="amount" value="{{old('amount')??$order->amount}}" placeholder="Order Amount">
            </div>
        </div>
    <div class="card-footer col-sm-12">
        <input type="submit" id="submit" class="btn btn-primary mr-2" value="Submit">
        <button type="reset" class="btn btn-secondary"><a href="{{route('home')}}">Cancel</a> </button>
    </div>

    </div>
<!--end::Form-->
@section('footer-js')
    <script src="{{asset_public('assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js')}}"></script>
@endsection
