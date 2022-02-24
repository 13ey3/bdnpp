@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb my-0 ms-2">
        <li class="breadcrumb-item">
            <span>Perekaman Data</span>
        </li>
        <li class="breadcrumb-item active">
            <span>Tambah</span>
        </li>
    </ol>
@endsection

@section('content')
    <div id="smartwizard" class="bg-light">
        <ul class="nav">
            <li>
                <a class="nav-link" href="#step-1">
                    Identitas Objek
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-2">
                    Komponen Utama
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-3">
                    Komponen Fasilitas
                </a>
            </li>
            <li>
                <a class="nav-link" href="#step-4">
                    Komponen Tambahan
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="step-1" class="tab-pane" role="tabpanel">
                @include('perekaman.partial.identitas-objek')
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel">
                @include('perekaman.partial.komponen-utama')
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel">
                @include('perekaman.partial.komponen-fasilitas')
            </div>
            <div id="step-4" class="tab-pane" role="tabpanel">
                @include('perekaman.partial.komponen-khusus')
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mb-5">
        <button class="btn btn-secondary mx-2" id="prev-btn" type="button"><svg class="icon me-0">
                <use xlink:href="{{ asset('coreui.svg#cil-chevron-left') }}"></use>
            </svg> Previous</button>
        <button class="btn btn-secondary" id="next-btn" type="button"><svg class="icon me-0">
                <use xlink:href="{{ asset('coreui.svg#cil-chevron-right') }}"></use>
            </svg> Next</button>
        <button class="btn btn-primary d-none" id="save-btn" type="submit"><svg class="icon me-0">
                <use xlink:href="{{ asset('coreui.svg#cil-save') }}"></use>
            </svg> Save</button>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');

                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled');
                } else if (stepPosition === 'last') {
                    $("#next-btn").addClass('d-none');
                    $("#save-btn").removeClass('d-none');
                } else {
                    $("#prev-btn").removeClass('disabled');
                    $("#next-btn").removeClass('disabled');
                }
            });

            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'arrows',
                enableURLhash: false,
                transition: {
                    animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
                },
                toolbarSettings: {
                    showNextButton: false, // show/hide a Next button
                    showPreviousButton: false, // show/hide a Previous button
                }
            });

            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });

            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });

            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });


            // Demo Button Events
            $("#got_to_step").on("change", function() {
                // Go to step
                var step_index = $(this).val() - 1;
                $('#smartwizard').smartWizard("goToStep", step_index);
                return true;
            });

            $("#is_justified").on("click", function() {
                // Change Justify
                var options = {
                    justified: $(this).prop("checked")
                };

                $('#smartwizard').smartWizard("setOptions", options);
                return true;
            });
        });
    </script>
@endpush