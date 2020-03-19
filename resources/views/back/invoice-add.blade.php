@extends('layouts.app')
@section('content')
	<div class="content-body">
        <!-- invoice add wrapper -->
        <div class="invoice-add-wrapper">
            <!-- defining a Bootstrap row -->
            <div class="row">
                <!-- defining Bootstrap columns for diffrent screen sizes -->
                <div class="col-xl-9 col-md-8 col-12">
                    <!-- Bootstrap card component -->
                    <div class="card">
                        <div class="card-body">

                            <!-- card header -->
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-xl-3 col-md-12 d-flex justify-content-start align-items-center pl-0">
                                        <h6 class="invoice-text mr-1 font-weight-bold">Invoice# </h6>
                                        <input type="text" name="invoice" class="form-control w-50" value="#000">
                                    </div>
                                    <div class="col-xl-9 col-md-12 d-flex justify-content-xl-end align-items-lg-start align-items-sm-start align-items-xs-start  align-items-center flex-wrap px-0 pt-xl-0 pt-1">
                                        <div class="issue-date d-flex align-items-center justify-content-start mr-2 mb-75 mb-xl-0">
                                            <h6 class="invoice-text mr-1 font-weight-bold">Date Issue</h6>
                                            <input type="text" name="date" class="pick-a-date bg-white form-control" value="Select Date">
                                        </div>
                                        <div class="due-date d-flex align-items-center justify-content-start">
                                            <h6 class="invoice-text mr-1 font-weight-bold">Date Due</h6>
                                            <input type="text" name="date" class="pick-a-date bg-white form-control" value="Select Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- logo and invoice title -->
                            <div class="row my-2">
                                <div class="col-sm-6 col-12 order-2 order-sm-1">
                                    <h4 class="invoice-title text-primary">Invoice</h4>
                                    <input type="text" class="form-control" value="" placeholder="Product Name">
                                </div>
                                <div class="col-sm-6 col-12 order-1 order-sm-1 d-flex justify-content-end align-items-center">
                                    <img src="../../../app-assets/images/logo/pixinvent-logo.png" alt="logo" height="46" width="164">
                                </div>
                            </div>
                            <hr>


                            <!-- bill address section -->
                            <div class="row">
                                <div class="col-lg-6 col-xl-6 col-xs-12 col-sm-12">
                                    <div class="title-text">Bill To</div>
                                    <div class="row">
                                        <div class="col-12 col-xs-12 mb-1">
                                            <input type="text" class="form-control" value="" placeholder="House no.">
                                        </div>
                                        <div class="col-12 col-xs-12 mb-1">
                                            <textarea class="form-control" rows="3" placeholder="Landmark/Street"></textarea>
                                        </div>
                                        <div class="col-12 col-xs-12 mb-1">
                                            <input type="text" class="form-control" value="" placeholder="City">
                                        </div>
                                        <div class="col-12 col-xs-12 mb-2">
                                            <input type="text" class="form-control" value="" placeholder="Pincode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <!-- invoice product details -->
                            <div class="invoice-product-details">
                                <form class="repeater-form">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item class="mb-1">
                                            <div class="row item-heading-titles mb-50">
                                                <div class="col-3 col-md-4 item-subtitle font-bold">Item</div>
                                                <div class="col-3 cost-subtitle font-bold">Cost</div>
                                                <div class="col-3 qty-subtitle font-bold">Qty</div>
                                                <div class="col-3 col-md-2 price-subtitle font-bold">Price</div>
                                            </div>
                                            <div class="repeater-controls d-flex">
                                                <div class="input-fields border border-light rounded p-1 d-flex">
                                                    <div class="row invoice-item-controls d-flex">
                                                        <div class="col-12 col-md-4 form-group item-name">
                                                            <select class="form-control" id="item-options">
                                                                <option value="stack">Stack Admin template</option>
                                                                <option value="modern">Modern Admin template</option>
                                                                <option value="apex">Apex Admin template</option>
                                                                <option value="robust">Robust Admin template</option>
                                                                <option value="frest">Frest Admin template</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-3 form-group item-cost">
                                                            <input type="text" class="form-control" value="24">
                                                        </div>
                                                        <div class="col-12 col-md-3 form-group item-quantity">
                                                            <input type="text" class="form-control" value="1">
                                                        </div>
                                                        <div class="col-12 col-md-2 form-group item-price">
                                                            $24.00</div>
                                                        <div class="col-12 col-md-4 form-group item-description mb-0">
                                                            <input type="text" class="form-control description-input" value="The most developer friendly & highly customisable HTML5 Admin">
                                                        </div>
                                                        <div class="col-12 col-md-8 form-group discounts mb-0">
                                                            <div class='discount-element'>
                                                                <span class="title-text">Discount:</span>
                                                                <span class="discount-value">0%</span>
                                                                <span class="tax-1-value mx-1">0%</span>
                                                                <span class="tax-2-value mx-1">0%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="delete-and-discount-config h-100 ml-50 d-flex flex-column justify-content-between">
                                                        <span class="cursor-pointer d-flex justify-content-center align-items-center">
                                                            <i class="fa fa-times-circle-o font-size-increase" data-repeater-delete></i>
                                                        </span>
                                                        <div class="dropdown d-flex justify-content-center align-items-center">
                                                            <span role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa fa-cog font-size-increase m-0"></i>
                                                            </span>
                                                            <div class="dropdown-menu p-1 dropdown-sizing" aria-labelledby="dropdownMenuButton">
                                                                <div class="row invoice-taxes-controls">
                                                                    <div class="col-12 form-group">
                                                                        <label for="discount">Discount(%)</label>
                                                                        <input type="number" class="form-control" id="applicable-discount" placeholder="0">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="tax1">Tax1</label>
                                                                        <select name="tax-val-1" class="form-control stopPropgate" id="applicable-tax1">
                                                                            <option value="1%" selected="">1%</option>
                                                                            <option value="10%">10%</option>
                                                                            <option value="18%">18%</option>
                                                                            <option value="40%">40%</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="tax2">Tax2</label>
                                                                        <select name="tax-val-2" class="form-control stopPropgate" id="applicable-tax2">
                                                                            <option value="1%" selected="">1%</option>
                                                                            <option value="10%">10%</option>
                                                                            <option value="18%">18%</option>
                                                                            <option value="40%">40%</option>
                                                                        </select>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="col-12 buttons d-flex justify-content-between mt-1">
                                                                        <button type="button" class="btn btn-primary discount-apply-btn">Apply</button>
                                                                        <button type="button" class="btn btn-light cancel-btn">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button data-repeater-create class="btn btn-primary mt-1" type="button">
                                            <i class="fa fa-plus"></i> Add Button
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <hr>

                            <!-- invoice bill total -->
                            <div class="invoice-total">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-5">
                                        <div class="regarding-payment form-group">
                                            <input type="text" class="form-control" value="" placeholder="Add payment terms">
                                        </div>
                                        <div class="regarding-discount form-group">
                                            <input type="text" class="form-control" value="" placeholder="Add client note">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 col-xl-5 offset-xl-2">
                                        <ul class="list-group cost-list">
                                            <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                <span class="cost-title mr-2">Subtotal </span>
                                                <span class="cost-value">$ 00.00</span>
                                            </li>
                                            <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                <span class="cost-title mr-2">Discount </span>
                                                <span class="cost-value">-$ 00.00</span>
                                            </li>
                                            <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                <span class="cost-title mr-2">Tax </span>
                                                <span class="cost-value">0%</span>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                <span class="cost-title mr-2">Invoice Total </span>
                                                <span class="cost-value">$ 00.00</span>
                                            </li>
                                            <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                <span class="cost-title mr-2">Paid To Date </span>
                                                <span class="cost-value">-$ 00.00</span>
                                            </li>
                                            <li class="list-group-item each-cost border-0 p-50 d-flex justify-content-between">
                                                <span class="cost-title mr-2">Balance (USD) </span>
                                                <span class="cost-value">$ 00.00</span>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary mt-1 btn-block">Preview</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-12">
                    <div class="action-buttons card">
                        <div class="card-body">
                            <button class="btn btn-block btn-primary mb-1"><i class="fa fa-share common-size"></i> Send
                                Invoice</button>
                            <button class="btn btn-block btn-primary mb-1">Download Invoice</button>
                            <div class="inline-btns w-100 d-flex justify-content-between">
                                <div class="btn-save w-50 mr-50">
                                    <button class="btn btn-light mb-1 btn-block">Preview</button>
                                </div>
                                <div class="btn-preview w-50 ml-50">
                                    <button class="btn btn-light mb-1 btn-block">Save</button>
                                </div>
                            </div>
                            <button class="btn btn-block btn-success"><i class="fa fa-usd common-size"></i>
                                Payment</button>
                        </div>
                    </div>
                    <div class="payment-options border rounded m-0 py-2 row">
                        <div class="col-12">
                            <h6 class="title">Accept Payment Via</h6>
                        </div>
                        <div class="col-12 mt-75">
                            <select name="payment" id="paymentOption" class="form-control bg-transparent mb-1">
                                <option value="DebitCard">Debit Card</option>
                                <option value="DebitCard">Credit Card</option>
                                <option value="DebitCard">Paypal</option>
                                <option value="DebitCard">Internet Banking</option>
                                <option value="DebitCard">UPI Transfer</option>
                            </select>
                        </div>
                        <div class="col-12 mt-1">
                            <div class="form-group mb-25">
                                <div class="float-right">
                                    <input type="checkbox" name="switchery" id="switchery0" class="switchery" checked />
                                </div>
                                <label for="switchery0" class="font-medium-2">Payment Terms</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-25">
                                <div class="float-right">
                                    <input type="checkbox" name="switchery" id="switchery1" class="switchery" checked />
                                </div>
                                <label for="switchery0" class="font-medium-2">Client Notes</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-25">
                                <div class="float-right">
                                    <input type="checkbox" name="switchery" id="switchery2" class="switchery" />
                                </div>
                                <label for="switchery0" class="font-medium-2">Payment Stub</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection