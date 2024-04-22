@extends('template_backend_admin.app')
@section('subjudul','Form Delivery Order')
@section('content')
<div class="card m-10 p-10">
        <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
        <!--begin:Form-->
        <form id="form" class="form" action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}

                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Form Delivery Order</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <!-- <div class="text-muted fw-bold fs-5">If you need more info, please check -->
                    <!-- <a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div> -->
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column fv-row mb-2">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Item</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Nama Lengkap"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Type Here" name="item" id="item"/>
                </div>

                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Qty</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Qty"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Type Here" name="qty" id="qty"/>
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Unit of Measurement</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Jumlah"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Type Here" name="um" id="um"/>
                    </div>
                    <!--end::Col-->
                </div>

                <div class="row g-9 mb-8">
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Ship To</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Ship To"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Ship To" name="ship_to" id="ship_to" />
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Delivery Date</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Delivery Date"></i>
                        </label>
                        <!--end::Label-->
                        <input type="date" class="form-control form-control-solid" placeholder="Delivery Date" name="delivery_date" id="delivery_date"/>
                    </div>
                    <!--end::Col-->
                </div>

                <!--begin::Input group-->
                <div class="d-flex flex-column fv-row mb-2">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Delivery From</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Delivery From"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Click Here" name="delivery_from" id="delivery_from"/>
                </div>

                <!--begin::Input group-->
                <div class="d-flex flex-column fv-row mb-2">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Delivery To</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Delivery To"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Click Here" name="delivery_to" id="delivery_to"/>
                </div>


                <div class="d-flex flex-column  fv-row mt-2 subm" style="display:none">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Delivery Option</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Delivery Type"></i>
                    </label>
                    <select class="form-select form-select-solid drdn" id="delivery" name="delivery" data-control="select2" data-hide-search="false" data-placeholder="Choose Delivery" name="delivery">
                        <option value="">Choose Delivery</option>
                    </select>
                </div>


                <div class="d-flex flex-column fv-row mb-2">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Notes</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Notes"></i>
                    </label>
                    <!--end::Label-->
                    <textarea class="form-control form-control-solid" name="notes" id="notes" cols="30" rows="3"></textarea>
                </div>
                <div class="row g-3 mb-8 mt-8">
                    <div class="col-sm-6">
                        <button class="btn btn-info" id="save-button">Save</button>
                        <button class="btn btn-success" id="submit-button">Submit</button>
                    </div>
                </div>
            </form>
            <!--end:Form-->
        <!--end:Form-->
        </div>
        <!--end::Modal body-->
</div>

@endsection
@section('script')
<div class="modal" id="modal-courier" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <h1 id="modal-title"></h1>
                <div class="d-flex flex-column  fv-row subm" style="display:none">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Provinces</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Provinces"></i>
                    </label>
                        <select class="form-select form-select-solid drdn" id="provinces" data-control="select2" data-hide-search="false" data-placeholder="Choose Provinsi" name="provinces">
                            <option value="">Choose Provinsi</option>
                            @foreach($provinces as $item)
                                <option>{{$item->provinsi}}</option>
                            @endforeach
                        </select>
                </div>

                <div class="d-flex flex-column  fv-row mt-2 subm" style="display:none">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Regencies</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Submateri"></i>
                    </label>
                        <select class="form-select form-select-solid drdn" id="regencies" data-control="select2" data-hide-search="false" data-placeholder="Choose Regencies" name="regencies">
                            <option value="" selected hidden>Choose Regencies</option>
                        </select>
                </div>

                <div class="d-flex flex-column  fv-row mt-2 subm" style="display:none">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">District</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Submateri"></i>
                    </label>
                        <select class="form-select form-select-solid drdn" id="district" data-control="select2" data-hide-search="false" data-placeholder="Choose District" name="district">
                            <option value="">Choose District</option>
                        </select>
                </div>

                <div class="d-flex flex-column fv-row mt-2 subm" style="display:none">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Villages</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Submateri"></i>
                    </label>
                    <select class="form-select form-select-solid drdn" id="villages" data-control="select2" data-hide-search="false" data-placeholder="Choose Provinsi" name="villages">
                        <option value="">Choose Villages</option>
                    </select>
                </div>
                <div class="d-flex flex-column fv-row mt-2" style="display:none">
                    <div class="btn btn-info submit-from">Submit</div>
                    <div class="btn btn-info submit-to">Submit</div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<script type="text/javascript">
    function saveToLocal(){
        let data = $('#form').serializeArray()
        console.log(data)
        localStorage.setItem("myData", JSON.stringify(data));
    }

    function retrieveLocalData() {
        var data = JSON.parse(localStorage.getItem("myData"));
        if (data) {
            Swal.fire({
                title: "Found data you save before!",
                text: "Load This Change?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, load it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(JSON.stringify(data))
                    loadToInput(data)
                    Swal.fire({
                    title: "Saved!",
                    text: "Your data has been loaded.",
                    icon: "success"
                    });
                }
            });
        }
    }

    function deleteLocalData(value) {
        localStorage.removeItem(value);
    }

    function loadToInput(arrayData){
        for (let i = 0; i < arrayData.length; i++) {
            const element = arrayData[i];
            if(element.name != "delivery_from" && element.name != "delivery_to")
            $(`#${element.name}`).val(element.value)            
        }


    }

  $(document).ready(function () {
    
    let postalcode_origin
    let postalcode_destination
    let address_from
    let address_to

    retrieveLocalData()

    var response_rates_couriers = {
        "success": true,
        "object": "courier_pricing",
        "message": "Success to retrieve courier pricing",
        "code": 20001003,
        "origin": {
            "location_id": null,
            "latitude": null,
            "longitude": null,
            "postal_code": 12440,
            "country_name": "Indonesia",
            "country_code": "ID",
            "administrative_division_level_1_name": "DKI Jakarta",
            "administrative_division_level_1_type": "province",
            "administrative_division_level_2_name": "Jakarta Selatan",
            "administrative_division_level_2_type": "city",
            "administrative_division_level_3_name": "Cilandak",
            "administrative_division_level_3_type": "district",
            "administrative_division_level_4_name": "Lebak Bulus",
            "administrative_division_level_4_type": "subdistrict",
            "address": null
        },
        "stops": [],
        "destination": {
            "location_id": null,
            "latitude": null,
            "longitude": null,
            "postal_code": 12240,
            "country_name": "Indonesia",
            "country_code": "ID",
            "administrative_division_level_1_name": "DKI Jakarta",
            "administrative_division_level_1_type": "province",
            "administrative_division_level_2_name": "Jakarta Selatan",
            "administrative_division_level_2_type": "city",
            "administrative_division_level_3_name": "Kebayoran Lama",
            "administrative_division_level_3_type": "district",
            "administrative_division_level_4_name": "Kebayoran Lama Selatan",
            "administrative_division_level_4_type": "subdistrict",
            "address": null
        },
        "pricing": [
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "company": "jne",
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "description": "Layanan reguler",
                "duration": "1 - 2 days",
                "shipment_duration_range": "1 - 2",
                "shipment_duration_unit": "days",
                "service_type": "standard",
                "shipping_type": "parcel",
                "price": 30000,
                "type": "reg"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "company": "jne",
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "Yakin Esok Sampai (YES)",
                "courier_service_code": "yes",
                "description": "Yakin esok sampai",
                "duration": "1 - 1 days",
                "shipment_duration_range": "1 - 1",
                "shipment_duration_unit": "days",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "price": 54000,
                "type": "yes"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "company": "anteraja",
                "courier_name": "AnterAja",
                "courier_code": "anteraja",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "type": "reg",
                "description": "Regular shipment",
                "duration": "1 - 2 days",
                "shipment_duration_range": "1 - 2",
                "shipment_duration_unit": "days",
                "service_type": "standard",
                "shipping_type": "parcel",
                "price": 34500
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "company": "anteraja",
                "courier_name": "AnterAja",
                "courier_code": "anteraja",
                "courier_service_name": "Next Day",
                "courier_service_code": "next_day",
                "type": "next_day",
                "description": "Next day service delivery",
                "duration": "1 days",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "price": 45900
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "company": "anteraja",
                "courier_name": "AnterAja",
                "courier_code": "anteraja",
                "courier_service_name": "Same Day",
                "courier_service_code": "same_day",
                "type": "same_day",
                "description": "Same day service for Jakarta Area",
                "duration": "8 - 12 hours",
                "shipment_duration_range": "8 - 12",
                "shipment_duration_unit": "hours",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "price": 22500
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "available_for_proof_of_delivery": false,
                "company": "sicepat",
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "Besok Sampai Tujuan",
                "courier_service_code": "best",
                "description": "Besok sampai tujuan",
                "duration": "1 days",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "price": 42000,
                "type": "best"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_instant_waybill_id": true,
                "available_for_insurance": true,
                "available_for_proof_of_delivery": false,
                "company": "sicepat",
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "description": "Layanan reguler",
                "duration": "1 - 2 days",
                "shipment_duration_range": "1 - 2",
                "shipment_duration_unit": "days",
                "service_type": "standard",
                "shipping_type": "parcel",
                "price": 34500,
                "type": "reg"
            }
        ]
    }

    var response_couriers = {
        "success": true,
        "object": "courier",
        "couriers": [
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Gojek",
                "courier_code": "gojek",
                "courier_service_name": "Instant",
                "courier_service_code": "instant",
                "tier": "premium",
                "description": "On Demand Instant (bike)",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Gojek",
                "courier_code": "gojek",
                "courier_service_name": "Same Day",
                "courier_service_code": "same_day",
                "tier": "premium",
                "description": "On Demand within 8 hours (bike)",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Grab",
                "courier_code": "grab",
                "courier_service_name": "Instant",
                "courier_service_code": "instant",
                "tier": "premium",
                "description": "On Demand Instant (bike)",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Grab",
                "courier_code": "grab",
                "courier_service_name": "Same Day",
                "courier_service_code": "same_day",
                "tier": "premium",
                "description": "On Demand within 8 hours (bike)",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Grab",
                "courier_code": "grab",
                "courier_service_name": "Instant Car",
                "courier_service_code": "instant_car",
                "tier": "premium",
                "description": "Grab Car Express",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Tronton Wing Box",
                "courier_service_code": "tronton_wing_box",
                "tier": "premium",
                "description": "Tronton Wing Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Tronton Box",
                "courier_service_code": "tronton_box",
                "tier": "premium",
                "description": "Tronton Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Fuso Heavy",
                "courier_service_code": "fuso_heavy",
                "tier": "premium",
                "description": "Fuso Heavy",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Fuso Lite",
                "courier_service_code": "fuso_light",
                "tier": "premium",
                "description": "Fuso Lite",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "CDD Box",
                "courier_service_code": "cdd_box",
                "tier": "premium",
                "description": "CDD Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "CDD Pickup",
                "courier_service_code": "cdd_pickup",
                "tier": "premium",
                "description": "CDD Pickup",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "CDE - Frozen",
                "courier_service_code": "cde_frozen",
                "tier": "premium",
                "description": "CDE - Frozen",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "CDE - Flammable",
                "courier_service_code": "cde_flammable",
                "tier": "premium",
                "description": "CDE - Flammable",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "CDE - Chemical",
                "courier_service_code": "cde_chemical",
                "tier": "premium",
                "description": "CDE - Chemical",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Engkel Box",
                "courier_service_code": "engkel_box",
                "tier": "premium",
                "description": "Engkel Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Engkel Pickup",
                "courier_service_code": "engkel_pickup",
                "tier": "premium",
                "description": "Engkel Pickup",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Small Box",
                "courier_service_code": "small_box",
                "tier": "premium",
                "description": "Small Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Pickup",
                "courier_service_code": "pickup",
                "tier": "standard",
                "description": "Pickup",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Van",
                "courier_service_code": "van",
                "tier": "standard",
                "description": "Van",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": true,
                "available_for_instant_waybill_id": true,
                "courier_name": "Deliveree",
                "courier_code": "deliveree",
                "courier_service_name": "Economy",
                "courier_service_code": "economy",
                "tier": "standard",
                "description": "Economy",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Regular service",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "YES",
                "courier_service_code": "yes",
                "tier": "essentials",
                "description": "Express, next day",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "OKE",
                "courier_service_code": "oke",
                "tier": "free",
                "description": "Economy servive",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "JTR",
                "courier_service_code": "jtr",
                "tier": "premium",
                "description": "Trucking with minimum weight of 10 kg",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "JTR 150 250",
                "courier_service_code": "jtr_150_250",
                "tier": "premium",
                "description": "Trucking for motorbike with 150cc to 250cc",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "JTR 150",
                "courier_service_code": "jtr_150",
                "tier": "premium",
                "description": "Trucking for motorbike below 150cc",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JNE",
                "courier_code": "jne",
                "courier_service_name": "JTR 250",
                "courier_service_code": "jtr_250",
                "tier": "premium",
                "description": "Trucking for motorbike above 250cc",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "EKO",
                "courier_service_code": "eko",
                "tier": "free",
                "description": "Economic service",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "SDS",
                "courier_service_code": "sds",
                "tier": "premium",
                "description": "same day service",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "REG",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Layanan reguler",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "ONS",
                "courier_service_code": "ons",
                "tier": "essentials",
                "description": "One night service",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "T15",
                "courier_service_code": "t15",
                "tier": "premium",
                "description": "Motor di bawah 150CC",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "T25",
                "courier_service_code": "t25",
                "tier": "premium",
                "description": "Motor di bawah 250CC",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "T60",
                "courier_service_code": "t60",
                "tier": "premium",
                "description": "Motor di bawah 600CC",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "TIKI",
                "courier_code": "tiki",
                "courier_service_name": "Trucking",
                "courier_service_code": "trc",
                "tier": "premium",
                "description": "TIKI Trucking",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Ninja",
                "courier_code": "ninja",
                "courier_service_name": "Standard",
                "courier_service_code": "standard",
                "tier": "free",
                "description": "Layanan standard",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Lion",
                "courier_code": "lion",
                "courier_service_name": "Reg Pack",
                "courier_service_code": "reg_pack",
                "tier": "free",
                "description": "Layanan standard",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Lion",
                "courier_code": "lion",
                "courier_service_name": "Land Pack",
                "courier_service_code": "land_pack",
                "tier": "free",
                "description": "Pengiriman menggunakan kereta api",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Lion",
                "courier_code": "lion",
                "courier_service_name": "One Pack",
                "courier_service_code": "one_pack",
                "tier": "essentials",
                "description": "Layanan besok sampai",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Lion",
                "courier_code": "lion",
                "courier_service_name": "Jago Pack",
                "courier_service_code": "jago_pack",
                "tier": "free",
                "description": "Pengiriman standard",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Lion",
                "courier_code": "lion",
                "courier_service_name": "Docu Pack",
                "courier_service_code": "docu_pack",
                "tier": "free",
                "description": "Pengiriman dokumen",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Lion",
                "courier_code": "lion",
                "courier_service_name": "Big Pack",
                "courier_service_code": "big_pack",
                "tier": "premium",
                "description": "Layanan trucking Lion Parcel",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": true,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Rara Delivery",
                "courier_code": "rara",
                "courier_service_name": "Instant",
                "courier_service_code": "instant",
                "tier": "premium",
                "description": "Instant delivery service",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Layanan reguler",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "SiUntung",
                "courier_service_code": "siunt",
                "tier": "essentials",
                "description": "Layanan SiUntung",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "Best",
                "courier_service_code": "best",
                "tier": "essentials",
                "description": "Besok sampai tujuan",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "SDS",
                "courier_service_code": "sds",
                "tier": "standard",
                "description": "Same day service",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SiCepat",
                "courier_code": "sicepat",
                "courier_service_name": "GOKIL",
                "courier_service_code": "gokil",
                "tier": "premium",
                "description": "Layanan kargo",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Sentral Cargo",
                "courier_code": "sentralcargo",
                "courier_service_name": "Land Electronic",
                "courier_service_code": "land_electronic",
                "tier": "free",
                "description": "Layanan Elektronik via Darat",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Sentral Cargo",
                "courier_code": "sentralcargo",
                "courier_service_name": "Lan Non Electronic",
                "courier_service_code": "land_non_electronic",
                "tier": "premium",
                "description": "Layanan Non-Elektronik via Darat",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Sentral Cargo",
                "courier_code": "sentralcargo",
                "courier_service_name": "Air Electronic",
                "courier_service_code": "air_electronic",
                "tier": "premium",
                "description": "Layanan Elektronik via Udara",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 2",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Sentral Cargo",
                "courier_code": "sentralcargo",
                "courier_service_name": "Air Non Electronic",
                "courier_service_code": "air_non_electronic",
                "tier": "premium",
                "description": "Layanan Non-Elektronik via Udara",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 2",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "J&T",
                "courier_code": "jnt",
                "courier_service_name": "EZ",
                "courier_service_code": "ez",
                "tier": "free",
                "description": "Layanan reguler",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "IDexpress",
                "courier_code": "idexpress",
                "courier_service_name": "Reguler Half Kilo",
                "courier_service_code": "reg_half_kilo",
                "tier": "free",
                "description": "Layanan reguler half kilo",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "IDexpress",
                "courier_code": "idexpress",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Layanan reguler",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "IDexpress",
                "courier_code": "idexpress",
                "courier_service_name": "Same Day",
                "courier_service_code": "smd",
                "tier": "premium",
                "description": "Layanan Same Day",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "12",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "IDexpress",
                "courier_code": "idexpress",
                "courier_service_name": "ID Truck",
                "courier_service_code": "idtruck",
                "tier": "premium",
                "description": "Layanan Trucking",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Same Day Package",
                "courier_service_code": "sdp",
                "tier": "standard",
                "description": "Layanan sampai di hari yang sama.",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "12",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Mid Day Package",
                "courier_service_code": "mdp",
                "tier": "premium",
                "description": "Layanan tiba sebelum jam 12 siang esoknya",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Next Day Package",
                "courier_service_code": "ndp",
                "tier": "essentials",
                "description": "Layanan sampai 1 hari kerja. ",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Reguler Package",
                "courier_service_code": "rgp",
                "tier": "free",
                "description": "Pengiriman standard",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Paket Ambil Suka-suka",
                "courier_service_code": "pas",
                "tier": "free",
                "description": "Pengambilan barang mandiri di lokasi mitra RPX",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Economy Delivery",
                "courier_service_code": "ecp",
                "tier": "free",
                "description": "Kirim paket >10 kg dengan biaya hemat",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "RPX",
                "courier_code": "rpx",
                "courier_service_name": "Heavy Weight Delivery",
                "courier_service_code": "hwp",
                "tier": "free",
                "description": "Kirim paket >20 kg dengan biaya hemat",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "JDL",
                "courier_code": "jdl",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Regular shipment",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "drop_off"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Wahana",
                "courier_code": "wahana",
                "courier_service_name": "Deno",
                "courier_service_code": "deno",
                "tier": "free",
                "description": "Layanan standard",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "drop_off"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Wahana",
                "courier_code": "wahana",
                "courier_service_name": "Normal",
                "courier_service_code": "normal",
                "tier": "free",
                "description": "Layanan standard",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Pos Indonesia",
                "courier_code": "pos",
                "courier_service_name": "Reguler",
                "courier_service_code": "reguler",
                "tier": "free",
                "description": "Layanan pengiriman reguler",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Pos Indonesia",
                "courier_code": "pos",
                "courier_service_name": "Same Day",
                "courier_service_code": "same_day",
                "tier": "standard",
                "description": "Layanan sampai di hari yang sama",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "0",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Pos Indonesia",
                "courier_code": "pos",
                "courier_service_name": "Next Day",
                "courier_service_code": "next_day",
                "tier": "essentials",
                "description": "Layanan paket besok sampai",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": false,
                "courier_name": "Pos Indonesia",
                "courier_code": "pos",
                "courier_service_name": "Kargo",
                "courier_service_code": "kargo",
                "tier": "standard",
                "description": "Layanan dengan tarif tingkat berat pertama mulai dari 3kg - 30kg",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 4",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Anteraja",
                "courier_code": "anteraja",
                "courier_service_name": "Reguler",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Regular shipment",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Anteraja",
                "courier_code": "anteraja",
                "courier_service_name": "Same Day",
                "courier_service_code": "same_day",
                "tier": "standard",
                "description": "Same day service for Jakarta Area",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "6 - 8",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Anteraja",
                "courier_code": "anteraja",
                "courier_service_name": "Next Day",
                "courier_service_code": "next_day",
                "tier": "essentials",
                "description": "Next day service delivery",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SAP",
                "courier_code": "sap",
                "courier_service_name": "REG",
                "courier_service_code": "reg",
                "tier": "free",
                "description": "Regular service",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "3 - 4"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SAP",
                "courier_code": "sap",
                "courier_service_name": "Reguler Half Kilo",
                "courier_service_code": "reg_half_kilo",
                "tier": "free",
                "description": "Layanan reguler half kilo",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SAP",
                "courier_code": "sap",
                "courier_service_name": "ODS",
                "courier_service_code": "ods",
                "tier": "essentials",
                "description": "One Day Service",
                "service_type": "overnight",
                "shipping_type": "parcel",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SAP",
                "courier_code": "sap",
                "courier_service_name": "SDS",
                "courier_service_code": "sds",
                "tier": "standard",
                "description": "Same Day Service",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "2 - 3",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "SAP",
                "courier_code": "sap",
                "courier_service_name": "Cargo",
                "courier_service_code": "cargo",
                "tier": "premium",
                "description": "Cargo Land Service",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "1",
                "shipment_duration_unit": "days"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Paxel",
                "courier_code": "paxel",
                "courier_service_name": "Small Package",
                "courier_service_code": "small",
                "tier": "standard",
                "description": "Layanan paket small",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "8 - 12",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Paxel",
                "courier_code": "paxel",
                "courier_service_name": "Medium Package",
                "courier_service_code": "medium",
                "tier": "standard",
                "description": "Layanan paket medium",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "8 - 12",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Paxel",
                "courier_code": "paxel",
                "courier_service_name": "Large Package",
                "courier_service_code": "large",
                "tier": "premium",
                "description": "Layanan paket large",
                "service_type": "standard",
                "shipping_type": "parcel",
                "shipment_duration_range": "8 - 12",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Paxel",
                "courier_code": "paxel",
                "courier_service_name": "Paxel Big",
                "courier_service_code": "paxel_big",
                "tier": "premium",
                "description": "Layanan kargo paxel big",
                "service_type": "standard",
                "shipping_type": "freight",
                "shipment_duration_range": "8 - 12",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Mr Speedy",
                "courier_code": "mrspeedy",
                "courier_service_name": "Instant Bike",
                "courier_service_code": "instant_bike",
                "tier": "standard",
                "description": "Delivery using bike",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Mr Speedy",
                "courier_code": "mrspeedy",
                "courier_service_name": "Instant Car",
                "courier_service_code": "instant_car",
                "tier": "standard",
                "description": "Delivery using car",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Borzo",
                "courier_code": "borzo",
                "courier_service_name": "Instant Bike",
                "courier_service_code": "instant_bike",
                "tier": "standard",
                "description": "Delivery using bike",
                "service_type": "instant",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Borzo",
                "courier_code": "borzo",
                "courier_service_name": "Instant Car",
                "courier_service_code": "instant_car",
                "tier": "standard",
                "description": "Delivery using car",
                "service_type": "instant",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "Motorcycle",
                "courier_service_code": "motorcycle",
                "tier": "premium",
                "description": "Delivery using bike",
                "service_type": "same_day",
                "shipping_type": "parcel",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "MPV",
                "courier_service_code": "mpv",
                "tier": "premium",
                "description": "Delivery using car",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "Van",
                "courier_service_code": "van",
                "tier": "premium",
                "description": "Delivery using van",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "2 - 4",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "Truck",
                "courier_service_code": "truck",
                "tier": "premium",
                "description": "Delivery using truck",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "3 - 6",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "CDD Bak",
                "courier_service_code": "cdd_bak",
                "tier": "premium",
                "description": "Delivery using CDD Bak",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "CDD BOX",
                "courier_service_code": "cdd_box",
                "tier": "premium",
                "description": "Delivery using CDD Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "ENGKEL BAK",
                "courier_service_code": "engkel_bak",
                "tier": "premium",
                "description": "Delivery using Engkel Bak",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            },
            {
                "available_collection_method": [
                    "pickup"
                ],
                "available_for_cash_on_delivery": false,
                "available_for_proof_of_delivery": false,
                "available_for_instant_waybill_id": true,
                "courier_name": "Lalamove",
                "courier_code": "lalamove",
                "courier_service_name": "ENGKEL BOX",
                "courier_service_code": "engkel_box",
                "tier": "premium",
                "description": "Delivery using Engkel Box",
                "service_type": "same_day",
                "shipping_type": "freight",
                "shipment_duration_range": "1 - 3",
                "shipment_duration_unit": "hours"
            }
        ]
    }

    $('body').on('click', '#btn-submit', function() {
        event.preventDefault();
        var datapost = $('#form-pengembalian').serialize()
        // console.log("datapost",datapost)
        $.ajax({
            type: "POST",
            url: `{{ url('/add_productlog') }}`,
            data: datapost,
            // beforeSend: function() {
            //     Swal.fire({
            //         title: 'Harap Tunggu',
            //         text: "Upload dokumen sedang diproses",
            //         icon: 'info',
            //         timer: 4000,
            //         didOpen: () => {
            //             Swal.showLoading()
            //             timerInterval = setInterval(() => {
            //                 const content = Swal
            //                     .getContent()
            //                 if (content) {
            //                     const b = content
            //                         .querySelector(
            //                             'b')
            //                     if (b) {
            //                         b.textContent =
            //                             Swal
            //                             .getTimerLeft()
            //                     }
            //                 }
            //             }, 300)
            //         },
            //         willClose: () => {
            //             clearInterval(timerInterval)
            //         },
            //     });
            // },
            success: function(result) {
                console.log("suksess",result)
                table.ajax.reload()
                Swal.fire({
                    title: "Sukses!",
                    text: "Data berhasil dikirim !",
                    icon: "success",
                    confirmButtonText: `OK`,
                }).then((ok) => {
                    if (ok.value) {
                        console.log("sukses")
                    }
                });
            },
            error: function(xhr, ajaxOptions, thrownError) {
                Swal.fire("Error!", xhr + " " + ajaxOptions + " " +
                    thrownError,
                    "error");
            }
        });      
    });

    $('#provinces').change(function(){
        $.ajax({
            type: "GET",
            url: `{{ url('/regencies_by_province') }}/${$(this).val()}`,
            success: function(response) {
                $('#regencies').empty();
                for (let i = 0; i < response.length; i++) {
                    const element = response[i].kabupaten;
                    var option = $('<option>').text(element);
                    $('#regencies').append(option);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log("Can't retrieve regencies data...");
            }
        }); 
    })

    $('#regencies').change(function(){
        // console.log("triggered")
        $.ajax({
            type: "GET",
            url: `{{ url('/district_by_regencies') }}/${$(this).val()}`,
            success: function(response) {
                $('#district').empty();
                for (let i = 0; i < response.length; i++) {
                    const element = response[i].kecamatan;
                    var option = $('<option>').text(element);
                    $('#district').append(option);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log("cant retrieve district data...")
            }
        }); 
    })

    $('#district').change(function(){
        console.log("triggered")
        $.ajax({
            type: "GET",
            url: `{{ url('/villages_by_district') }}/${$(this).val()}`,
            success: function(response) {
                console.log(response)
                $('#villages').empty();
                for (let i = 0; i < response.length; i++) {
                    const element = response[i].kelurahan;
                    const value = response[i].kodepos;
                    var option = $('<option>').text(element).val(value);
                    $('#villages').append(option);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log("cant retrieve villages data...")
            }
        });
    })

    $('#villages').change(function(){
        console.log("val",$(this).val())
        let arrayService = []
        for (let o = 0; o < response_rates_couriers.pricing.length; o++) {
            const name = `${response_rates_couriers.pricing[o].courier_name} - ${response_rates_couriers.pricing[o].price} - ${response_rates_couriers.pricing[o].service_type}`;
            const tipe = response_rates_couriers.pricing[o].service_type;
            const isValueInArray = arrayService.includes(tipe);
            var objectValue = {
                courier: response_rates_couriers.pricing[o].courier_name,
                price: response_rates_couriers.pricing[o].price,
                service_type: response_rates_couriers.pricing[o].service_type
            }
            let value = JSON.stringify(objectValue);            
            var option = $('<option>').text(name).val(value);
            $('#delivery').append(option);
            arrayService.push(tipe)            
        }
    })

    $('#delivery_type').change(function(){
        console.log("tes delivery_type")
        let arrayService = []
        for (let o = 0; o < response_rates_couriers.pricing.length; o++) {
            const name = `${response_rates_couriers.pricing[o].courier_name} - ${response_rates_couriers.pricing[o].price} - ${response_rates_couriers.pricing[o].service_type}`;
            const tipe = response_rates_couriers.pricing[o].service_type;
            const isValueInArray = arrayService.includes(tipe);
            // console.log(`tipe ${tipe} === $(this).val() ${$(this).val()}`)
            
            var option = $('<option>').text(name);
            $('#delivery').append(option);
            arrayService.push(tipe)
            // console.log("component",component)
            
        }
    })

    $('#delivery').change(function(){
        console.log(JSON.parse($(this).val()))
    })

    $('#delivery_from').click(function(){
        $('#modal-courier').modal('show')

        $("#provinces").val("").trigger('change');
        $("#regencies").val("").trigger('change');
        $("#district").val("").trigger('change');
        $("#villages").val("").trigger('change');

        $('#modal-button').attr("data-id","from")
        $('#modal-title').text("Delivery From")
        $('.submit-from').show()
        $('.submit-to').hide()
    })

    $('#delivery_to').click(function(){
        console.log("dliviery-to")
        $('#modal-courier').modal('show')

        $("#provinces").val("").trigger('change');
        $("#regencies").val("").trigger('change');
        $("#district").val("").trigger('change');
        $("#villages").val("").trigger('change');
        

        $('.submit-from').hide()
        $('.submit-to').show()
        $('#modal-title').text("Delivery To")
    })

    $('.submit-from').click(function(){
        let data = $("#villages").val()
        postalcode_origin = data
        address_from = `${$("#provinces").val()} - ${$("#regencies").val()} - ${$("#district").val()} - ${$("#villages").val()}`
        $("#delivery_from").val(address_from)
        $('#modal-courier').modal('hide')
        console.log(data)
    })

    $('.submit-to').click(function(){
        let data = $("#villages").val()
        postalcode_destination = data
        address_to = `${$("#provinces").val()} - ${$("#regencies").val()} - ${$("#district").val()} - ${$("#villages").val()}`
        $("#delivery_to").val(address_to)
        $('#modal-courier').modal('hide')
        console.log(data)
    })

    $('body').on('click', '#save-button', function() {
        event.preventDefault()
        Swal.fire({
            title: "Are you sure?",
            text: "Save This Change?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, save it!"
        }).then((result) => {
            if (result.isConfirmed) {
                saveToLocal()
                Swal.fire({
                title: "Saved!",
                text: "Your data has been saved.",
                icon: "success"
                });
            }
        });
    })

    $('body').on('click', '#submit-button', function() {
        event.preventDefault()
        Swal.fire({
            title: "Are you sure?",
            text: "Save This Change?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, save it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var dataForm = $('#form :input').not('[name="delivery_from"], [name="delivery_to"]').serialize()
                console.log(postalcode_origin)
                let stringDelivery = $('#delivery').val()
                let objDelivery = JSON.parse(stringDelivery)
                for (let key in objDelivery) {
                    if (objDelivery.hasOwnProperty(key)) {
                        let value = objDelivery[key];
                        dataForm += `&${key}=${value}`;
                    }
                }

                console.log("postalcode_origin", postalcode_origin)
                console.log("postalcode_destination", postalcode_destination)
                dataForm += `&postalcode_from=${postalcode_origin}`;
                dataForm += `&postalcode_to=${postalcode_destination}`;
                console.log(dataForm)
                $.ajax({
                    type: "POST", 
                    url: `{{ url('/delivery_order') }}`,
                    data: dataForm,
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Harap Tunggu',
                            text: "Upload dokumen sedang diproses",
                            icon: 'info',
                            timer: 4000,
                            didOpen: () => {
                                Swal.showLoading()
                                timerInterval = setInterval(() => {
                                    const content = Swal.getHtmlContainer(); // Use getHtmlContainer() instead
                                    if (content) {
                                        const b = content.querySelector('b');
                                        if (b) {
                                            b.textContent = Swal.getTimerLeft();
                                        }
                                    }
                                }, 300)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            },
                        });
                    },
                    success: function(result) {
                        console.log(result)
                        Swal.fire({
                            title: "Success!",
                            text: "Data has been submitted!",
                            icon: "success",
                            confirmButtonText: `OK`,
                        }).then((ok) => {
                            if (ok.value) {
                                console.log("sukses")
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        Swal.fire("Error!", xhr + " " + ajaxOptions + " " +
                            thrownError,
                            "error");
                    }
                });
                // deleteLocalData('myData')
                Swal.fire({
                    title: "Saved!",
                    text: "Your data has been submitted.",
                    icon: "success"
                });
                window.location.reload()
            }
        });
    })
    
  });
  
</script>
@endsection