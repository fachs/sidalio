<div class="action-div">
    @isset($data)
        @isset($detail)
            @if (isset($data->system_reserve) ? !$data->system_reserve : true)
                <a href="{{ route($detail, $data) }}" class="eye-icon">
                    <i data-feather="eye"></i>
                @else
                    <a href="javascript:void(0)" class="lock-icon">
                        <i data-feather="lock"></i>
                    </a>
            @endif
        @endisset

        @isset($edit)
            @if (isset($data->system_reserve) ? !$data->system_reserve : true)
                <a href="{{ route($edit, $data) }}" class="edit-icon">
                    <i data-feather="edit"></i>
                @else
                    <a href="javascript:void(0)" class="lock-icon">
                        <i data-feather="lock"></i>
                    </a>
            @endif
        @endisset

        @isset($delete)
            @if (isset($data->system_reserve) ? !$data->system_reserve : true)
                <a href="#confirmationModal{{ $data->id }}" data-bs-toggle="modal" class="delete-svg">
                    <i data-feather="trash-2" class="remove-icon delete-confirmation"></i>
                </a>
                <!-- Delete Confirmation -->
                <div class="modal fade" id="confirmationModal{{ $data->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="confirmationModalLabel{{ $data->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi hapus</h5>
                                <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4 class="mb-3"><b> Apakah anda yakin menghapus data ini ?</b></h4>
                                <p>Data akan dihapus secara permanen. Anda tidak dapat membatalkan penghapusan.</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route($delete, $data->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-primary" data-bs-dismiss="modal"
                                        type="button">{{ __('Tutup') }}</button>
                                    <button class="btn btn-danger delete spinner-btn"
                                        type="submit">{{ __('Hapus') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endisset

    @endisset
    @isset($toggle)
        <label class="switch">
            <input data-route="{{ route($route, $toggle->id) }}" data-id="{{ $toggle->id }}"
                class="form-check-input toggle-status" type="checkbox" name="{{ $nama }}"
                value="{{ $value }}" {{ $value ? 'checked' : '' }}
                @if ($toggle->system_reserve) disabled @endif>
            <span class="switch-state"></span>
        </label>
    @endisset
</div>
