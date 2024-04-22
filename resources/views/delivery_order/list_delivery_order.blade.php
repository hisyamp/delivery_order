@extends('template_backend_admin.app')
@section('subjudul','List Pengembalian')
@section('content')

<div class="card m-10 p-10">
    <table id="table" class="table table-bordered table-hover">
    <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Item</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Um</th>
                <th class="text-center">Status</th>
                <th class="text-center">Address</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection
@section('script')
<div class="modal" id="modal-detail" tabindex="-1" aria-hidden="true">
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

                <!--begin:Form-->
                <form id="form-regist" class="form" method="POST">
                {{ csrf_field() }}

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Detail Delivery Order</h1>
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
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Nama Item" name="item" id="item" readonly="true"/>
                    </div>

                    <div class="d-flex flex-column fv-row mb-2">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Ship To</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Ship To" readonly="true"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Ship To" name="ship_to" id="ship_to" readonly="true"/>
                    </div>

                    <div class="d-flex flex-column fv-row mb-2">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Address</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Address" readonly="true"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukkan Address" name="address" id="address" readonly="true"/>
                    </div>

                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Unit of Measurement</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Jumlah" readonly="true"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Unit of Measurement" name="um" id="um" readonly="true"/>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Ship To</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Satuan"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Masukkan Tujuan Pengiriman" name="ship_to" id="ship_to" readonly="true"/>
                        </div>
                        <!--end::Col-->
                    </div>
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Status Approval</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Status Approval"></i>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Status Approval" name="status" id="status" readonly="true" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                    <div class="col-md-6 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Tanggal Pengiriman</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tanggal Pengembalian"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Tanggal Pengembalian" name="tanggal_pengembalian" id="tanggal_pengembalian" readonly="true"/>
                        </div>
                        <!--end::Col-->
                    </div>

                    <div class="d-flex flex-column fv-row mb-2">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Notes</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Notes"></i>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid"  id="notes" cols="30" rows="3" readonly="true"></textarea>
                    </div>

                    <div class="d-flex flex-column  fv-row mb-12">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Reason Approval</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Reason Approval"></i>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid"  id="reason_approval" name="reason_approval" cols="30" rows="3" readonly="true"></textarea>
                    </div>

                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<div class="modal" id="modal-courier" tabindex="-1" aria-hidden="true">
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
                    <h3>Couriers</h3>
                    <div id="couriers-component">
                        
                    </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<script type="text/javascript">
  $(document).ready(function () {
    // console.log("runnn")
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
    $('#table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{url('api_log_delivery_order')}}',
      columns: [
        {
           render: function (data, type, row, meta) {
             return meta.row + meta.settings._iDisplayStart + 1;
           },
           className: 'dt-body-center',
        },<th class="text-center">No</th>
                <th class="text-center">Item</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Um</th>
                <th class="text-center">Status</th>
                <th class="text-center">Address</th>
                <th class="text-center">Action</th>
        {
           data: 'item',
           className: 'dt-body-center',
           defaultContent: '',
        },
        {
           data: 'qty',
           className: 'dt-body-center',
           defaultContent: '',
        },
        {
           data: 'um',
           className: 'dt-body-center',
           defaultContent: '',
        },
        {
           data: 'status',
           className: 'dt-body-center',
           defaultContent: '',
        },
        {
          "render": function ( data, type, row ) {
             if(row.status=="A")return 'menunggu'
             else if(row.status=="B")return 'ditolak'
             else if(row.status=="C")return 'disetujui'
             else return '-'
           },
           className: 'dt-body-center',
        },
        {
           "render": function ( data, type, row ) {
             return `<button class="btn btn-primary btn-sm btn-detail" data-id="${row.id}">Detail</button>
             `
           },
           className: 'dt-body-center',
        }
      ],
    });
    var id_laporan
    $('body').on('click', '.btn-detail', function() {
        var dataid = $(this).data('id')
        id_laporan = dataid
        console.log("id_laporan change to", id_laporan)
        // console.log(`{{url('detailbarang/${dataid}')}}`)
      $("#modal-detail").modal('show')
      $.ajax({
            url: `{{url('delivery_order_by_id/${dataid}')}}`,
            type: "GET", 
            success: function(response) {
                    console.log("data detail barang",response)
                    // $('#modal-regis').modal('hide')
                    $('#item').val(response.item)
                    $('#qty').val(response.qty)
                    $('#um').val(response.um)
                    $('#ship_to').val(response.ship_to)
                    $('#address').val(response.address)
                    $('#notes').val(response.notes)
                    $('#status').val(response.status)
                    $('#reason_approval').val(response.reason_approval)
                    $('#tgl_delivery').val(response.tgl_delivery)
                    $('#price').val(response.price)
                    if(response.status =="A") $('#status').val("Menunggu keputusan")
                    else if(response.status =="B") $('#status').val("Ditolak")
                    else if(response.status =="C") $('#status').val("Disetujui")
                    
            },
            error: function(data) { 
                console.log('Error:', data);
            }
        });
    })
    $('body').on('click', '#btn-reject', function() {
        event.preventDefault();
        dataId = $(this).attr('data-id');
        // console.log(dataId)
        Swal.fire({ 
            title: "Konfirmasi",
            text: "Apakah yakin menolak pengembalian barang ini ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: `Tolak`,
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "POST", 
                    url: `{{ url('/actionbarang/${id_laporan}/B') }}`,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Harap Tunggu',
                            text: "Data sedang diproses",
                            icon: 'info',
                            timer: 4000,
                            didOpen: () => {
                                Swal.showLoading()
                                timerInterval = setInterval(() => {
                                    const content = Swal
                                        .getContent()
                                    if (content) {
                                        const b = content
                                            .querySelector(
                                                'b')
                                        if (b) {
                                            b.textContent =
                                                Swal
                                                .getTimerLeft()
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
                        Swal.fire({
                            title: "Sukses!",
                            text: "Pengembalian berhasil ditolak !",
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
            } else {
                return false;
            }
        });        
    });
    $('body').on('click', '#tesmodal', function() {
        console.log("111")
        $('#modal-courier').modal('show')
        var items = ''
        // {
        //     "available_collection_method": [
        //         "pickup"
        //     ],
        //     "available_for_cash_on_delivery": false,
        //     "available_for_proof_of_delivery": false,
        //     "available_for_instant_waybill_id": true,
        //     "courier_name": "Gojek",
        //     "courier_code": "gojek",
        //     "courier_service_name": "Instant",
        //     "courier_service_code": "instant",
        //     "tier": "premium",
        //     "description": "On Demand Instant (bike)",
        //     "service_type": "same_day",
        //     "shipping_type": "parcel",
        //     "shipment_duration_range": "1 - 3",
        //     "shipment_duration_unit": "hours"
        // },
        for (let o = 0; o < response_couriers.couriers.length; o++) {
            const name = response_couriers.couriers[o].courier_name;
            const tipe = response_couriers.couriers[o].service_type;
            var component = `<div class="card m-1 p-2">
                <p>Ekspedisi: ${name}</p>
                <p>Service Type: ${tipe}</p>
            </div>`
            // console.log("component",element)
            items=items+=component
        }
        console.log("999")

        $('#couriers-component').append(items)
    })
    $('body').on('click', '#btn-approve', function() {
        event.preventDefault();
        dataId = $(this).attr('data-id');
        console.log(dataId)
        Swal.fire({ 
            title: "Konfirmasi",
            text: "Apakah yakin menyetujui pengembalian barang ini ?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: `Ubah`,
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: `{{ url('/actionbarang/${id_laporan}/C') }}`,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Harap Tunggu',
                            text: "Upload dokumen sedang diproses",
                            icon: 'info',
                            timer: 4000,
                            didOpen: () => {
                                Swal.showLoading()
                                timerInterval = setInterval(() => {
                                    const content = Swal
                                        .getContent()
                                    if (content) {
                                        const b = content
                                            .querySelector(
                                                'b')
                                        if (b) {
                                            b.textContent =
                                                Swal
                                                .getTimerLeft()
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
                        Swal.fire({
                            title: "Sukses!",
                            text: "Status aktivasi berhasil diubah !",
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
            } else {
                return false;
            }
        });        
    });
  
  });
  
</script>
@endsection