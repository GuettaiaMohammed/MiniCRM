<div wire:ignore.self style="text-align: left" class="modal fade" id="delete-company-{{ $company->id }}" tabindex="-1"
    role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                    <h4 class="mb-1" id="modalExampleDemoLabel">
                        Company removal
                    </h4>
                </div>
                <div class="p-4 pb-2">
                    <h5>Are you sure you want to remove this Company</h5>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                    Close
                </button>
                <form action="{{ route('companies.destroy', $company) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" type="button">Yes, Delete it
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>
